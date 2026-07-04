<?php

namespace App\Services;

use App\Services\KareXpert\KareXpertClient;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\Log;

class KareXpertSlotService
{
    public function __construct(
        private readonly KareXpertClient $client,
    ) {}

    public function getAvailableSlots(
        string $practitionerId,
        CarbonInterface $slotDate,
        ?string $facilityId = null,
    ): array {
        if (trim($practitionerId) === '') {
            return [
                'ok' => false,
                'slots' => [],
                'error' => 'Practitioner ID is not configured for this doctor.',
            ];
        }

        try {
            $integrationKey = (string) config('services.karexpert.integrations.slot_availability.integration_key', 'GET_SLOT_AVAILABILITY');
            $apiKey = (string) config('services.karexpert.integrations.slot_availability.api_key', config('services.karexpert.api_key'));

            $result = $this->client->integrate($integrationKey, $apiKey, [
                'facility_id' => $facilityId ?: (string) config('services.karexpert.facility_id', 'Nano'),
                'practitioner_id' => $practitionerId,
                'slot_date' => $slotDate->copy()->startOfDay()->getTimestampMs(),
                'serviceItemCode' => config('services.karexpert.service_item_code', 'opd'),
                'slot_visibility' => config('services.karexpert.slot_visibility', 'Online'),
                'practice_type_code' => config('services.karexpert.practice_type_code', 'individual'),
            ]);

            if (! $result['ok']) {
                Log::warning('KareXpert slot availability request failed', [
                    'status' => $result['status'] ?? null,
                    'body' => $result['data'] ?? null,
                    'practitioner_id' => $practitionerId,
                    'slot_date' => $slotDate->toDateString(),
                ]);

                return [
                    'ok' => false,
                    'slots' => [],
                    'error' => 'Unable to fetch slots right now.',
                ];
            }

            return [
                'ok' => true,
                'slots' => $this->normalizeSlots($this->extractSlots($result['data'])),
                'error' => null,
            ];
        } catch (\Throwable $e) {
            Log::error('KareXpert slot availability error', [
                'message' => $e->getMessage(),
                'practitioner_id' => $practitionerId,
                'slot_date' => $slotDate->toDateString(),
            ]);

            return [
                'ok' => false,
                'slots' => [],
                'error' => 'Unable to fetch slots right now.',
            ];
        }
    }

    private function extractSlots(mixed $payload): array
    {
        if (! is_array($payload)) {
            return [];
        }

        foreach (['jsonResponse', 'slots', 'availableSlots', 'slotList', 'slot_list', 'data', 'response', 'result'] as $key) {
            if (! isset($payload[$key])) {
                continue;
            }

            if ($this->isListOfSlots($payload[$key])) {
                return $payload[$key];
            }

            if (is_array($payload[$key])) {
                $slots = $this->extractSlots($payload[$key]);

                if ($slots !== []) {
                    return $slots;
                }
            }
        }

        return $this->isListOfSlots($payload) ? $payload : [];
    }

    private function normalizeSlots(array $slots): array
    {
        $timezone = (string) config('services.karexpert.timezone', 'Asia/Kolkata');

        return collect($slots)
            ->filter(fn ($slot) => is_array($slot))
            ->map(function (array $slot) use ($timezone) {
                $status = strtolower(trim((string) ($slot['status'] ?? 'available')));
                $slot['status'] = $status;

                $start = $this->timestampToCarbon($this->slotValue($slot, [
                    'slot_start_time',
                    'slotStartTime',
                    'slot_starttime',
                    'start_time',
                    'startTime',
                ]), $timezone);
                $end = $this->timestampToCarbon($this->slotValue($slot, [
                    'slot_end_time',
                    'slotEndTime',
                    'slot_endtime',
                    'end_time',
                    'endTime',
                ]), $timezone);

                $slot['is_expired'] = $start !== null && $start->lte(now($timezone));
                $slot['is_available'] = $status === 'available' && ! $slot['is_expired'];

                $slot['display_start_time'] = $start?->format('h:i A');
                $slot['display_end_time'] = $end?->format('h:i A');
                $slot['display_time'] = $start && $end
                    ? $slot['display_start_time'].' - '.$slot['display_end_time']
                    : ($slot['display_start_time'] ?? null);

                return $slot;
            })
            ->values()
            ->all();
    }

    private function slotValue(array $slot, array $keys): mixed
    {
        foreach ($keys as $key) {
            if (array_key_exists($key, $slot)) {
                return $slot[$key];
            }
        }

        return null;
    }

    private function timestampToCarbon(mixed $timestamp, string $timezone): ?Carbon
    {
        if (! is_numeric($timestamp)) {
            return null;
        }

        return Carbon::createFromTimestampMs((int) $timestamp)->setTimezone($timezone);
    }

    private function isListOfSlots(mixed $value): bool
    {
        return is_array($value)
            && array_is_list($value)
            && ($value === [] || is_array($value[0]));
    }
}
