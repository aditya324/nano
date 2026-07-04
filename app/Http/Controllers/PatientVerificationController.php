<?php

namespace App\Http\Controllers;

use App\Rules\IndianMobileNumber;
use App\Services\KareXpert\KareXpertPatientVerificationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PatientVerificationController extends Controller
{
    public function lookup(
        Request $request,
        KareXpertPatientVerificationService $verificationService,
    ): JsonResponse {
        $request->merge([
            'mobile' => trim((string) $request->input('mobile', '')),
        ]);

        $validated = $request->validate([
            'mobile' => ['required', 'string', 'max:20', new IndianMobileNumber],
        ], [
            'mobile.required' => 'Please enter a valid 10-digit Indian mobile number.',
        ]);

        $normalized = IndianMobileNumber::normalize($validated['mobile']);

        if ($normalized === null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ], 422);
        }

        $result = $verificationService->lookupOnly($normalized);

        if (! $result['ok']) {
            return response()->json([
                'status' => 'error',
                'message' => $result['error'] ?? 'Patient lookup failed.',
            ], 422);
        }

        if ($result['requires_selection'] && is_array($result['patients']) && $result['patients'] !== []) {
            return response()->json([
                'status' => 'success',
                'message' => 'Multiple patient records found. Please select one.',
                'source' => $result['source'],
                'requires_selection' => true,
                'not_found' => false,
                'patients' => $result['patients'],
            ]);
        }

        if ($result['not_found']) {
            return response()->json([
                'status' => 'success',
                'message' => 'No existing patient found for this mobile number.',
                'source' => null,
                'requires_selection' => false,
                'not_found' => true,
                'patient' => null,
            ]);
        }

        if (! is_array($result['patient'])) {
            return response()->json([
                'status' => 'error',
                'message' => $result['error'] ?? 'Patient lookup failed.',
            ], 422);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Existing patient found.',
            'source' => 'lookup',
            'requires_selection' => false,
            'not_found' => false,
            'patient' => $result['patient'],
        ]);
    }

    public function verify(
        Request $request,
        KareXpertPatientVerificationService $verificationService,
    ): JsonResponse {
        $request->merge([
            'patient_name' => trim((string) $request->input('patient_name', '')),
            'mobile' => trim((string) $request->input('mobile', '')),
        ]);

        $validated = $request->validate([
            'mobile' => ['required', 'string', 'max:20', new IndianMobileNumber],
            'patient_name' => ['required', 'string', 'min:2', 'max:255'],
            'gender' => ['required', 'string', 'max:50'],
        ], [
            'patient_name.required' => 'Please enter the patient name.',
            'patient_name.min' => 'Please enter the patient name.',
            'gender.required' => 'Please select the patient gender.',
            'mobile.required' => 'Please enter a valid 10-digit Indian mobile number.',
        ]);

        $normalized = IndianMobileNumber::normalize($validated['mobile']);
        $patientName = $validated['patient_name'];

        if ($normalized === null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ], 422);
        }

        $result = $verificationService->verifyAndRegister(
            $normalized,
            $patientName,
            (string) ($validated['gender'] ?? ''),
        );

        if (! $result['ok']) {
            return response()->json([
                'status' => 'error',
                'message' => $result['error'] ?? 'Patient verification failed.',
            ], 422);
        }

        if ($result['requires_selection'] && is_array($result['patients']) && $result['patients'] !== []) {
            return response()->json([
                'status' => 'success',
                'message' => 'Multiple patient records found. Please select one.',
                'source' => $result['source'],
                'requires_selection' => true,
                'patients' => $result['patients'],
            ]);
        }

        if (! is_array($result['patient'])) {
            return response()->json([
                'status' => 'error',
                'message' => $result['error'] ?? 'Patient verification failed.',
            ], 422);
        }

        return response()->json([
            'status' => 'success',
            'message' => $result['source'] === 'lookup'
                ? 'Existing patient found.'
                : 'Patient registered successfully.',
            'source' => $result['source'],
            'requires_selection' => false,
            'patient' => $result['patient'],
        ]);
    }

    public function select(
        Request $request,
        KareXpertPatientVerificationService $verificationService,
    ): JsonResponse {
        $validated = $request->validate([
            'mobile' => ['required', 'string', 'max:20', new IndianMobileNumber],
            'external_id' => ['nullable', 'string', 'max:255'],
            'uh_id' => ['nullable', 'string', 'max:255'],
            'patient_name' => ['nullable', 'string', 'max:255'],
            'patient_gender' => ['nullable', 'string', 'max:50'],
            'pre_registration_no' => ['nullable', 'string', 'max:255'],
            'registration_type' => ['nullable', 'string', 'max:50'],
        ]);

        $normalized = IndianMobileNumber::normalize($validated['mobile']);

        if ($normalized === null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ], 422);
        }

        if (empty($validated['external_id']) && empty($validated['uh_id'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please select a patient record.',
            ], 422);
        }

        $patient = $verificationService->confirmLookupPatient($normalized, [
            'mobile' => $normalized,
            'patient_name' => $validated['patient_name'] ?? null,
            'patient_gender' => $validated['patient_gender'] ?? null,
            'uh_id' => $validated['uh_id'] ?? null,
            'pre_registration_no' => $validated['pre_registration_no'] ?? null,
            'external_id' => $validated['external_id'] ?? null,
            'mr_code' => null,
            'registration_type' => $validated['registration_type'] ?? null,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Patient selected.',
            'source' => 'lookup',
            'requires_selection' => false,
            'patient' => $patient,
        ]);
    }
}
