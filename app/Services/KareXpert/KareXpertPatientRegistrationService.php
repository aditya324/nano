<?php

namespace App\Services\KareXpert;

class KareXpertPatientRegistrationService
{
    public function __construct(
        private readonly KareXpertClient $client,
    ) {}

    /**
     * @return array{ok: bool, registration: ?array<string, mixed>, error: ?string, raw: mixed}
     */
    public function register(string $mobileNumber, string $patientName, string $gender = ''): array
    {
        $integrationKey = (string) config('services.karexpert.integrations.patient_registration.integration_key', 'PATIENT_REGISTRATION');
        $apiKey = (string) config('services.karexpert.integrations.patient_registration.api_key');

        if ($apiKey === '') {
            return [
                'ok' => false,
                'registration' => null,
                'error' => 'Patient registration API key is not configured.',
                'raw' => null,
            ];
        }

        $result = $this->client->integrate($integrationKey, $apiKey, [
            'facilityId' => config('services.karexpert.registration_facility_id', 'ARTEMIS'),
            'name_' => [
                'prefix' => '',
                'text' => $patientName,
                'given' => '',
                'family' => '',
            ],
            'gender_id' => $gender,
            'is_prn' => true,
            'patient_gender' => $gender,
            'maritalStatus_id' => 'UNK',
            'maritalStatus' => 'unknown',
            'payer_id' => config('services.karexpert.registration_payer_id'),
            'payer_name' => config('services.karexpert.registration_payer_name'),
            'payer_type' => '',
            'telecom' => $mobileNumber,
            'birthDate' => '',
        ]);

        if (! $result['ok']) {
            return [
                'ok' => false,
                'registration' => null,
                'error' => $this->extractApiError($result['data']) ?? ($result['error'] ?? 'Patient registration failed.'),
                'raw' => $result['data'] ?? null,
            ];
        }

        $records = $this->client->extractJsonResponse($result['data']);
        $registration = $records[0] ?? null;

        if (! is_array($registration)) {
            return [
                'ok' => false,
                'registration' => null,
                'error' => $this->extractApiError($result['data']) ?? 'Patient registration returned an unexpected response.',
                'raw' => $result['data'],
            ];
        }

        return [
            'ok' => true,
            'registration' => $registration,
            'error' => null,
            'raw' => $result['data'],
        ];
    }

    private function extractApiError(mixed $payload): ?string
    {
        if (! is_array($payload)) {
            return null;
        }

        foreach (['message', 'error', 'responseMessage'] as $key) {
            if (! empty($payload[$key]) && is_string($payload[$key])) {
                return trim($payload[$key]);
            }
        }

        return null;
    }
}
