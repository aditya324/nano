<?php

namespace App\Services\KareXpert;

class KareXpertPatientLookupService
{
    public function __construct(
        private readonly KareXpertClient $client,
    ) {}

    /**
     * @return array{ok: bool, patients: array<int, array<string, mixed>>, error: ?string, raw: mixed}
     */
    public function lookup(string $mobileNumber, string $firstName = '', string $gender = ''): array
    {
        $integrationKey = (string) config('services.karexpert.integrations.patient_lookup.integration_key', 'PATIENT_LOOKUP');
        $apiKey = (string) config('services.karexpert.integrations.patient_lookup.api_key');

        if ($apiKey === '') {
            return [
                'ok' => false,
                'patients' => [],
                'error' => 'Patient lookup API key is not configured.',
                'raw' => null,
            ];
        }

        $result = $this->client->integrate($integrationKey, $apiKey, [
            'mobileNumber' => $mobileNumber,
            'firstName' => $firstName,
            'gender' => $gender,
        ]);

        if (! $result['ok']) {
            return [
                'ok' => false,
                'patients' => [],
                'error' => $result['error'] ?? 'Patient lookup failed.',
                'raw' => $result['data'] ?? null,
            ];
        }

        $patients = $this->client->extractJsonResponse($result['data']);

        return [
            'ok' => true,
            'patients' => $patients,
            'error' => null,
            'raw' => $result['data'],
        ];
    }
}
