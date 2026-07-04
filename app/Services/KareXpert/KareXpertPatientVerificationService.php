<?php

namespace App\Services\KareXpert;

use App\Models\Patient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class KareXpertPatientVerificationService
{
    public function __construct(
        private readonly KareXpertPatientLookupService $lookupService,
        private readonly KareXpertPatientRegistrationService $registrationService,
    ) {}

    /**
     * @return array{
     *     ok: bool,
     *     source: ?string,
     *     patient: ?array<string, mixed>,
     *     patients: ?array<int, array<string, mixed>>,
     *     requires_selection: bool,
     *     error: ?string
     * }
     */
    /**
     * @return array{
     *     ok: bool,
     *     source: ?string,
     *     patient: ?array<string, mixed>,
     *     patients: ?array<int, array<string, mixed>>,
     *     requires_selection: bool,
     *     not_found: bool,
     *     error: ?string
     * }
     */
    public function lookupOnly(string $mobileNumber): array
    {
        $lookup = $this->lookupService->lookup($mobileNumber);

        if (! $lookup['ok']) {
            return [
                'ok' => false,
                'source' => null,
                'patient' => null,
                'patients' => null,
                'requires_selection' => false,
                'not_found' => false,
                'error' => $lookup['error'] ?? 'Patient lookup failed.',
            ];
        }

        if ($lookup['patients'] === []) {
            return [
                'ok' => true,
                'source' => null,
                'patient' => null,
                'patients' => null,
                'requires_selection' => false,
                'not_found' => true,
                'error' => null,
            ];
        }

        $formatted = array_map(
            fn (array $record) => $this->formatLookupPatient($mobileNumber, $record),
            $lookup['patients'],
        );

        if (count($formatted) > 1) {
            return [
                'ok' => true,
                'source' => 'lookup',
                'patient' => null,
                'patients' => $formatted,
                'requires_selection' => true,
                'not_found' => false,
                'error' => null,
            ];
        }

        $record = $lookup['patients'][0];
        $patient = $formatted[0];
        $this->tryPersistLookupPatient($mobileNumber, $record);

        return [
            'ok' => true,
            'source' => 'lookup',
            'patient' => $patient,
            'patients' => null,
            'requires_selection' => false,
            'not_found' => false,
            'error' => null,
        ];
    }

    public function verifyAndRegister(
        string $mobileNumber,
        string $patientName = '',
        string $gender = '',
    ): array {
        $patientName = trim($patientName);

        $lookup = $this->lookupService->lookup($mobileNumber);

        if (! $lookup['ok']) {
            return [
                'ok' => false,
                'source' => null,
                'patient' => null,
                'patients' => null,
                'requires_selection' => false,
                'error' => $lookup['error'] ?? 'Patient lookup failed.',
            ];
        }

        if ($lookup['patients'] !== []) {
            $formatted = array_map(
                fn (array $record) => $this->formatLookupPatient($mobileNumber, $record, $gender),
                $lookup['patients'],
            );

            if (count($formatted) > 1) {
                return [
                    'ok' => true,
                    'source' => 'lookup',
                    'patient' => null,
                    'patients' => $formatted,
                    'requires_selection' => true,
                    'error' => null,
                ];
            }

            $record = $lookup['patients'][0];
            $patient = $formatted[0];
            $this->tryPersistLookupPatient($mobileNumber, $record);

            return [
                'ok' => true,
                'source' => 'lookup',
                'patient' => $patient,
                'patients' => null,
                'requires_selection' => false,
                'error' => null,
            ];
        }

        if ($patientName === '') {
            return [
                'ok' => false,
                'source' => null,
                'patient' => null,
                'patients' => null,
                'requires_selection' => false,
                'error' => 'Please enter the patient name to register as a new patient.',
            ];
        }

        if (! \App\Rules\IndianMobileNumber::isValidForRegistration($mobileNumber)) {
            return [
                'ok' => false,
                'source' => null,
                'patient' => null,
                'patients' => null,
                'requires_selection' => false,
                'error' => 'No patient found for this mobile number. New registration requires a valid 10-digit mobile starting with 6, 7, 8, or 9.',
            ];
        }

        $registration = $this->registrationService->register($mobileNumber, $patientName, $gender);

        if (! $registration['ok'] || ! is_array($registration['registration'])) {
            return [
                'ok' => false,
                'source' => null,
                'patient' => null,
                'patients' => null,
                'requires_selection' => false,
                'error' => $registration['error'] ?? 'Patient registration failed.',
            ];
        }

        $record = $registration['registration'];
        $patient = $this->formatRegistrationPatient($mobileNumber, $patientName, $record, $gender);
        $this->tryPersistRegistrationPatient($mobileNumber, $patientName, $record);

        return [
            'ok' => true,
            'source' => 'registration',
            'patient' => $patient,
            'patients' => null,
            'requires_selection' => false,
            'error' => null,
        ];
    }

    /**
     * @param  array<string, mixed>  $patient
     * @return array<string, mixed>
     */
    public function confirmLookupPatient(string $mobileNumber, array $patient): array
    {
        $this->tryPersistLookupPatient($mobileNumber, [
            'patient_name' => $patient['patient_name'] ?? null,
            'uhId' => $patient['uh_id'] ?? null,
            'preRegistrationNo' => $patient['pre_registration_no'] ?? null,
            'id' => $patient['external_id'] ?? null,
            'registrationType' => $patient['registration_type'] ?? null,
        ]);

        return $patient;
    }

    /**
     * @param  array<string, mixed>  $record
     * @return array<string, mixed>
     */
    private function formatLookupPatient(string $mobileNumber, array $record, string $formGender = ''): array
    {
        return [
            'mobile' => $mobileNumber,
            'patient_name' => $record['patient_name'] ?? null,
            'patient_gender' => $this->normalizeGender($formGender),
            'uh_id' => $record['uhId'] ?? $record['uh_id'] ?? $record['login_id'] ?? null,
            'pre_registration_no' => $record['preRegistrationNo'] ?? $record['pre_registration_no'] ?? null,
            'external_id' => isset($record['id']) ? (string) $record['id'] : null,
            'mr_code' => null,
            'registration_type' => $record['registrationType'] ?? $record['registration_type'] ?? null,
        ];
    }

    /**
     * @param  array<string, mixed>  $record
     * @return array<string, mixed>
     */
    private function formatRegistrationPatient(string $mobileNumber, string $patientName, array $record, string $gender = ''): array
    {
        $mrCode = $record['mrCode'] ?? $record['mr_code'] ?? null;

        return [
            'mobile' => $mobileNumber,
            'patient_name' => $record['patient_name'] ?? $patientName,
            'patient_gender' => $this->normalizeGender($gender),
            'uh_id' => null,
            'pre_registration_no' => $mrCode,
            'external_id' => null,
            'mr_code' => $mrCode,
            'registration_type' => $record['registrationType'] ?? $record['registration_type'] ?? null,
        ];
    }

    /**
     * @param  array<string, mixed>  $record
     */
    private function tryPersistLookupPatient(string $mobileNumber, array $record): void
    {
        if (! Schema::hasTable('patients')) {
            return;
        }

        try {
            Patient::updateOrCreate(
                ['mobile' => $mobileNumber],
                [
                    'patient_name' => $record['patient_name'] ?? null,
                    'uh_id' => $record['uhId'] ?? $record['uh_id'] ?? null,
                    'pre_registration_no' => $record['preRegistrationNo'] ?? $record['pre_registration_no'] ?? null,
                    'external_id' => isset($record['id']) ? (string) $record['id'] : null,
                    'source' => 'lookup',
                    'lookup_response' => $record,
                    'last_verified_at' => now(),
                ],
            );
        } catch (\Throwable $e) {
            Log::warning('Could not persist lookup patient', ['message' => $e->getMessage()]);
        }
    }

    /**
     * @param  array<string, mixed>  $record
     */
    private function tryPersistRegistrationPatient(string $mobileNumber, string $patientName, array $record): void
    {
        if (! Schema::hasTable('patients')) {
            return;
        }

        try {
            Patient::updateOrCreate(
                ['mobile' => $mobileNumber],
                [
                    'patient_name' => $patientName,
                    'mr_code' => $record['mrCode'] ?? $record['mr_code'] ?? null,
                    'registration_type' => $record['registrationType'] ?? $record['registration_type'] ?? null,
                    'pre_registration_no' => $record['mrCode'] ?? $record['mr_code'] ?? null,
                    'source' => 'registration',
                    'registration_response' => $record,
                    'last_verified_at' => now(),
                ],
            );
        } catch (\Throwable $e) {
            Log::warning('Could not persist registration patient', ['message' => $e->getMessage()]);
        }
    }

    private function normalizeGender(?string $gender): ?string
    {
        if ($gender === null || trim($gender) === '') {
            return null;
        }

        return strtolower(trim($gender));
    }
}
