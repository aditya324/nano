<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LeadWebhookService
{
    public function sendCallbackLead(array $data): LeadWebhookSendResult
    {
        $url = config('services.leads.webhook_url');
        $apiKey = config('services.leads.webhook_api_key');

        if (! is_string($url) || trim($url) === '') {
            return new LeadWebhookSendResult(wasAttempted: false, succeeded: false);
        }

        if (! is_string($apiKey) || trim($apiKey) === '') {
            Log::warning('Lead webhook API key is not configured');

            return new LeadWebhookSendResult(wasAttempted: false, succeeded: false);
        }

        $payload = $this->buildCallbackPayload($data);
        $logContext = [
            'event_name' => $payload['event_name'],
            'source_page' => (string) ($data['source'] ?? ''),
            'url' => $payload['url'],
        ];

        if (config('services.leads.log_payload')) {
            Log::info('Lead webhook payload', [
                'url' => $url,
                'payload' => $payload,
            ]);
        }

        try {
            $response = Http::timeout(10)
                ->withOptions([
                    'verify' => (bool) config('services.leads.verify_ssl', true),
                ])
                ->acceptJson()
                ->asJson()
                ->withHeaders([
                    'x-api-key' => $apiKey,
                ])
                ->post($url, $payload);

            if ($response->failed()) {
                Log::warning('Lead webhook failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    ...$logContext,
                ]);

                return new LeadWebhookSendResult(wasAttempted: true, succeeded: false);
            }

            if (config('services.leads.log_payload')) {
                Log::info('Lead webhook response', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    ...$logContext,
                ]);
            }

            $json = $response->json();
            if (is_array($json) && array_key_exists('status', $json) && strtolower((string) $json['status']) !== 'success') {
                Log::warning('Lead webhook returned non-success status', [
                    'body' => $response->body(),
                    ...$logContext,
                ]);

                return new LeadWebhookSendResult(wasAttempted: true, succeeded: false);
            }

            return new LeadWebhookSendResult(wasAttempted: true, succeeded: true);
        } catch (\Throwable $e) {
            Log::error('Lead webhook error', [
                'message' => $e->getMessage(),
                ...$logContext,
            ]);

            return new LeadWebhookSendResult(wasAttempted: true, succeeded: false);
        }
    }

    private function buildCallbackPayload(array $data): array
    {
        $page = (string) ($data['source'] ?? 'contact-us');
        $eventName = $this->resolveEventName($data);

        return [
            'phone' => (string) ($data['mobile'] ?? ''),
            'full_name' => trim((string) ($data['name'] ?? '')),
            'email' => is_string($data['email'] ?? null) ? $data['email'] : '',
            'city' => is_string($data['city'] ?? null) ? trim($data['city']) : '',
            'source' => (string) config('services.leads.payload.source', 'website'),
            'event_name' => $eventName,
            'department_name' => $this->configOrResolved(
                $this->resolveDepartmentName($data),
                'services.leads.payload.department_name'
            ),
            'campaign_name' => (string) config('services.leads.payload.campaign_name', ''),
            'campaign_id' => (string) config('services.leads.payload.campaign_id', ''),
            'adset_name' => (string) config('services.leads.payload.adset_name', ''),
            'gclid' => $this->configOrResolved(
                $this->resolveGclid($data),
                'services.leads.payload.gclid'
            ),
            'utm_parameter' => $this->configOrResolved(
                $this->resolveUtmParameter($data),
                'services.leads.payload.utm_parameter'
            ),
            'device' => $this->configOrResolved(
                $this->resolveDevice(),
                'services.leads.payload.device'
            ),
            'url' => $this->resolvePayloadUrl($data, $page),
        ];
    }

    private function configOrResolved(string $resolved, string $configKey): string
    {
        return $resolved !== '' ? $resolved : (string) config($configKey, '');
    }

    /**
     * Map website context to Nano event_master codes from the vendor doc (non-Truscan only).
     *
     * @param  array{name?: string, mobile?: string, email?: mixed, message?: mixed, source?: string, event_name?: string}  $data
     */
    private function resolveEventName(array $data): string
    {
        if (isset($data['event_name']) && is_string($data['event_name']) && trim($data['event_name']) !== '') {
            return trim($data['event_name']);
        }

        $source = strtolower((string) ($data['source'] ?? ''));

        if (str_contains($source, 'international')) {
            return 'estimate_request_international_patient_nano';
        }

        if (str_contains($source, 'second-opinion') || str_contains($source, 'second opinion')) {
            return 'callback_second_opinion_nano';
        }

        if (str_contains($source, 'career')) {
            return (string) config('services.leads.careers_event_name', 'callback_careers_nano');
        }

        return (string) config('services.leads.default_event_name', 'callback_second_opinion_nano');
    }

    /**
     * @param  array{department?: string, speciality?: string, department_name?: string}  $data
     */
    private function resolveDepartmentName(array $data): string
    {
        foreach (['department_name', 'department', 'speciality'] as $key) {
            $value = $data[$key] ?? null;

            if (is_string($value) && trim($value) !== '') {
                return trim($value);
            }
        }

        return '';
    }

    /**
     * @param  array{gclid?: string}  $data
     */
    private function resolveGclid(array $data): string
    {
        $gclid = $data['gclid'] ?? request()->input('gclid');

        return is_string($gclid) ? trim($gclid) : '';
    }

    /**
     * @param  array{utm_parameter?: string}  $data
     */
    private function resolveUtmParameter(array $data): string
    {
        if (isset($data['utm_parameter']) && is_string($data['utm_parameter']) && trim($data['utm_parameter']) !== '') {
            return trim($data['utm_parameter']);
        }

        $utmKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
        $parts = [];

        foreach ($utmKeys as $key) {
            $value = request()->input($key);

            if (is_string($value) && trim($value) !== '') {
                $parts[] = $key.'='.trim($value);
            }
        }

        return implode('&', $parts);
    }

    private function resolveDevice(): string
    {
        $userAgent = (string) request()->userAgent();

        if ($userAgent === '') {
            return '';
        }

        return preg_match('/mobile|android|iphone|ipad|ipod/i', $userAgent) === 1
            ? 'mobile'
            : 'desktop';
    }

    /**
     * Use the uploaded file URL when present, otherwise the canonical form page URL.
     *
     * @param  array{file_url?: string, source?: string}  $data
     */
    private function resolvePayloadUrl(array $data, string $page): string
    {
        $fileUrl = $data['file_url'] ?? null;

        if (is_string($fileUrl) && trim($fileUrl) !== '') {
            return trim($fileUrl);
        }

        $sourceToPath = [
            'second-opinion' => '/second-opinion',
            'international-patients' => '/international-patients',
            'careers' => '/careers',
        ];

        $lower = strtolower($page);

        foreach ($sourceToPath as $key => $path) {
            if (str_contains($lower, $key)) {
                return url($path);
            }
        }

        $previous = url()->previous();

        if (is_string($previous) && $previous !== '' && ! str_contains($previous, '/contact-send') && ! str_contains($previous, '/request-call-send')) {
            return $previous;
        }

        return (string) config('app.url');
    }
}
