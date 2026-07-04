<?php

namespace App\Http\Controllers;

use App\Services\KareXpertSlotService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentSlotController extends Controller
{
    public function index(Request $request, KareXpertSlotService $slotService): JsonResponse
    {
        $validated = $request->validate([
            'practitioner_id' => ['required', 'string', 'max:255'],
            'slot_date' => ['required', 'date'],
            'facility_id' => ['nullable', 'string', 'max:255'],
            'slot_facility_id' => ['nullable', 'string', 'max:255'],
        ]);

        $timezone = (string) config('services.karexpert.timezone', 'Asia/Kolkata');
        $slotDate = Carbon::parse($validated['slot_date'], $timezone)->startOfDay();
        $slotFacilityId = trim((string) ($validated['slot_facility_id'] ?? '')) ?: null;
        $result = $slotService->getAvailableSlots(
            $validated['practitioner_id'],
            $slotDate,
            $slotFacilityId,
        );

        $slots = $result['slots'];

        if (! empty($validated['facility_id'])) {
            $facilityId = trim($validated['facility_id']);
            $slots = array_values(array_filter(
                $slots,
                static fn (array $slot) => ($slot['facilityId'] ?? $slot['facility_id'] ?? '') === $facilityId,
            ));
        }

        if (! $result['ok']) {
            return response()->json([
                'status' => 'error',
                'message' => $result['error'] ?? 'Unable to fetch slots right now.',
                'slots' => [],
            ], 422);
        }

        return response()->json([
            'status' => 'success',
            'slots' => $slots,
        ]);
    }
}
