<?php

namespace App\Http\Controllers;

use App\Services\KareXpert\KareXpertAppointmentBookingService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentBookingController extends Controller
{
    public function book(
        Request $request,
        KareXpertAppointmentBookingService $bookingService,
    ): JsonResponse {
        $validated = $request->validate([
            'uhId' => ['required', 'string', 'max:255'],
            'treatingDoctorId' => ['required', 'string', 'max:255'],
            'slotStartTime' => ['required', 'integer', 'min:1'],
            'facilityId' => ['required', 'string', 'max:255'],
            'patient_gender' => ['required', 'string', 'max:50'],
            'serviceItemCode' => ['nullable', 'string', 'max:50'],
            'remarks' => ['nullable', 'string', 'max:500'],
            'external_appointmentId' => ['nullable', 'string', 'max:255'],
        ], [
            'uhId.required' => 'Patient MRN or PRN is required to book an appointment.',
        ]);

        $uhId = trim($validated['uhId']);

        if ($uhId === '') {
            return response()->json([
                'status' => 'error',
                'message' => 'Patient MRN or PRN is required to book an appointment.',
            ], 422);
        }

        $timezone = (string) config('services.karexpert.timezone', 'Asia/Kolkata');
        $slotStart = Carbon::createFromTimestampMs((int) $validated['slotStartTime'], $timezone);

        if ($slotStart->lte(now($timezone))) {
            return response()->json([
                'status' => 'error',
                'message' => 'This time slot has already passed. Please choose a later time.',
            ], 422);
        }

        $result = $bookingService->book(
            $uhId,
            $validated['treatingDoctorId'],
            (int) $validated['slotStartTime'],
            $validated['facilityId'],
            $validated['patient_gender'],
            $validated['serviceItemCode'] ?? null,
            $validated['remarks'] ?? null,
            $validated['external_appointmentId'] ?? null,
        );

        if (! $result['ok']) {
            return response()->json([
                'status' => 'error',
                'message' => $result['error'] ?? 'Appointment booking failed.',
            ], 422);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Appointment booked successfully.',
            'appointment' => $result['appointment'],
        ]);
    }
}
