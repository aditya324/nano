<?php

namespace App\Services\KareXpert;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class KareXpertClient
{
    public function generateToken(string $integrationKey, string $apiKey): ?string
    {
        $response = $this->http()
            ->acceptJson()
            ->withHeaders([
                'Content-Type' => 'application/json',
                'x-api-key' => $apiKey,
                'integrationKey' => $integrationKey,
                'clientCode' => config('services.karexpert.client_code'),
                'messageType' => config('services.karexpert.message_type'),
                'facilityId' => config('services.karexpert.facility_id'),
            ])
            ->withBody('', 'application/json')
            ->post((string) config('services.karexpert.token_url'));

        $this->logExchange('token', $integrationKey, [], $response);

        if ($response->failed()) {
            Log::warning('KareXpert token request failed', [
                'integration_key' => $integrationKey,
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        }

        return $this->extractToken($response->json());
    }

    /**
     * @return array{ok: bool, status: int, data: mixed, error: ?string}
     */
    public function integrate(string $integrationKey, string $apiKey, array $requestJson): array
    {
        $token = $this->generateToken($integrationKey, $apiKey);

        if ($token === null) {
            return [
                'ok' => false,
                'status' => 0,
                'data' => null,
                'error' => 'Unable to generate KareXpert token.',
            ];
        }

        $payload = ['requestJson' => $requestJson];

        $response = $this->http()
            ->acceptJson()
            ->asJson()
            ->withToken($token)
            ->withHeaders([
                'clientCode' => config('services.karexpert.client_code'),
                'integrationKey' => $integrationKey,
            ])
            ->post((string) config('services.karexpert.integrate_url'), $payload);

        $this->logExchange('integrate', $integrationKey, $payload, $response);

        if ($response->failed()) {
            Log::warning('KareXpert integrate request failed', [
                'integration_key' => $integrationKey,
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return [
                'ok' => false,
                'status' => $response->status(),
                'data' => $response->json(),
                'error' => 'KareXpert request failed.',
            ];
        }

        return [
            'ok' => true,
            'status' => $response->status(),
            'data' => $response->json(),
            'error' => null,
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function extractJsonResponse(mixed $payload): array
    {
        if (! is_array($payload)) {
            return [];
        }

        $jsonResponse = $payload['jsonResponse'] ?? null;

        if (! is_array($jsonResponse)) {
            return [];
        }

        return array_values(array_filter($jsonResponse, fn ($item) => is_array($item)));
    }

    private function http()
    {
        return Http::timeout((int) config('services.karexpert.timeout', 15))
            ->withOptions([
                'verify' => (bool) config('services.karexpert.verify_ssl', true),
            ]);
    }

    private function extractToken(mixed $payload): ?string
    {
        if (! is_array($payload)) {
            return null;
        }

        foreach (['jwttoken', 'token', 'access_token', 'accessToken', 'jwt'] as $key) {
            if (! empty($payload[$key]) && is_string($payload[$key])) {
                return $payload[$key];
            }
        }

        foreach (['data', 'response', 'result'] as $key) {
            if (isset($payload[$key]) && is_array($payload[$key])) {
                $token = $this->extractToken($payload[$key]);

                if ($token !== null) {
                    return $token;
                }
            }
        }

        return null;
    }

    private function logExchange(string $type, string $integrationKey, array $request, Response $response): void
    {
        if (! (bool) config('services.karexpert.log_payload', true)) {
            return;
        }

        Log::info('KareXpert API exchange', [
            'type' => $type,
            'integration_key' => $integrationKey,
            'request' => $request,
            'status' => $response->status(),
            'response' => $response->json() ?? $response->body(),
        ]);
    }
}
