<?php

namespace App\Services\KareXpert;

class KareXpertAppointmentBookingService
{
    public function __construct(
        private readonly KareXpertClient $client,
    ) {}

    /**
     * @return array{
     *     ok: bool,
     *     appointment: ?array<string, mixed>,
     *     error: ?string,
     *     raw: mixed
     * }
     */
    public function book(
        string $uhId,
        string $treatingDoctorId,
        int $slotStartTime,
        string $facilityId,
        string $patientGender,
        ?string $serviceItemCode = null,
        ?string $remarks = null,
        ?string $externalAppointmentId = null,
    ): array {
        $integrationKey = (string) config('services.karexpert.integrations.appointment.integration_key', 'APPOINTMENT_NEW');
        $apiKey = (string) config('services.karexpert.integrations.appointment.api_key');

        if ($apiKey === '') {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => 'Appointment booking API key is not configured.',
                'raw' => null,
            ];
        }

        if (trim($uhId) === '') {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => 'Patient MRN or PRN is required to book an appointment.',
                'raw' => null,
            ];
        }

        if (trim($treatingDoctorId) === '') {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => 'Doctor is not configured for online booking.',
                'raw' => null,
            ];
        }

        if ($slotStartTime <= 0) {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => 'Invalid appointment slot selected.',
                'raw' => null,
            ];
        }

        if (trim($patientGender) === '') {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => 'Patient gender is required to book an appointment.',
                'raw' => null,
            ];
        }

        $facilityId = trim($facilityId) !== ''
            ? trim($facilityId)
            : (string) config('services.karexpert.appointment_facility_id', '');

        if ($facilityId === '') {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => 'Facility ID is not configured for appointment booking.',
                'raw' => null,
            ];
        }

        $requestJson = $this->buildRequestJson(
            $facilityId,
            $uhId,
            $treatingDoctorId,
            $slotStartTime,
            $patientGender,
            $serviceItemCode,
            $remarks,
            $externalAppointmentId,
        );

        $result = $this->client->integrate($integrationKey, $apiKey, $requestJson);

        if (! $result['ok']) {
            return [
                'ok' => false,
                'appointment' => null,
                'error' => $this->extractApiError($result['data']) ?? ($result['error'] ?? 'Appointment booking failed.'),
                'raw' => $result['data'] ?? null,
            ];
        }

        $records = $this->client->extractJsonResponse($result['data']);
        $appointment = $records[0] ?? null;

        if ($this->isFailureResponse($result['data'])) {
            return [
                'ok' => false,
                'appointment' => is_array($appointment) ? $appointment : null,
                'error' => $this->extractApiError($result['data']) ?? 'Appointment booking failed.',
                'raw' => $result['data'],
            ];
        }

        return [
            'ok' => true,
            'appointment' => is_array($appointment) ? $this->formatAppointment($appointment, $result['data']) : $this->formatAppointment([], $result['data']),
            'error' => null,
            'raw' => $result['data'],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function buildRequestJson(
        string $facilityId,
        string $uhId,
        string $treatingDoctorId,
        int $slotStartTime,
        string $patientGender,
        ?string $serviceItemCode,
        ?string $remarks,
        ?string $externalAppointmentId,
    ): array {
        return [
            'facilityId' => $facilityId,
            'remarks' => $remarks ?? config('services.karexpert.appointment_remarks', 'Appointment Booking'),
            'ext_payer_code' => config('services.karexpert.appointment_ext_payer_code', 'CA'),
            'external_appointmentId' => $externalAppointmentId ?? $this->generateExternalAppointmentId(),
            'slotStartTime' => $slotStartTime,
            'uhId' => $uhId,
            'ext_billing_category_code' => config('services.karexpert.appointment_ext_billing_category_code', 'OP'),
            'treatingDoctorId' => $treatingDoctorId,
            'serviceItemCode' => $serviceItemCode ?? config('services.karexpert.service_item_code', 'opd'),
            'patient_gender' => strtolower(trim($patientGender)),
        ];
    }

    private function generateExternalAppointmentId(): string
    {
        return (string) now()->timestamp . random_int(100, 999);
    }

    /**
     * @param  array<string, mixed>  $record
     * @param  mixed  $payload
     * @return array<string, mixed>
     */
    private function formatAppointment(array $record, mixed $payload): array
    {
        return [
            'appointment_id' => $record['appointmentId'] ?? $record['appointment_id'] ?? $record['id'] ?? null,
            'external_appointment_id' => $record['external_appointmentId'] ?? $record['external_appointment_id'] ?? null,
            'uh_id' => $record['uhId'] ?? $record['uh_id'] ?? null,
            'status' => $record['responseStatus'] ?? $record['status'] ?? ($payload['message'] ?? null),
            'message' => $record['message'] ?? ($payload['message'] ?? null),
        ];
    }

    private function isFailureResponse(mixed $payload): bool
    {
        if (! is_array($payload)) {
            return false;
        }

        $responseCode = strtoupper((string) ($payload['responseCode'] ?? ''));

        return in_array($responseCode, ['F', 'FAIL', 'FAILED', 'ERROR'], true);
    }

    private function extractApiError(mixed $payload): ?string
    {
        if (! is_array($payload)) {
            return null;
        }

        $records = $this->client->extractJsonResponse($payload);
        $record = $records[0] ?? null;

        if (is_array($record)) {
            foreach (['message', 'error', 'responseMessage'] as $key) {
                if (! empty($record[$key]) && is_string($record[$key]) && strtolower(trim($record[$key])) !== 'failure') {
                    return trim($record[$key]);
                }
            }
        }

        foreach (['message', 'error', 'responseMessage'] as $key) {
            if (! empty($payload[$key]) && is_string($payload[$key]) && strtolower(trim($payload[$key])) !== 'failure') {
                return trim($payload[$key]);
            }
        }

        if (is_array($record)) {
            foreach (['message', 'error', 'responseMessage'] as $key) {
                if (! empty($record[$key]) && is_string($record[$key])) {
                    return trim($record[$key]);
                }
            }
        }

        return null;
    }
}
