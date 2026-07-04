<?php

namespace App\Services;

use App\Rules\IndianMobileNumber;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class OtpService
{
    public function __construct(
        private readonly OtpSmsGateway $sms,
    ) {}

    /**
     * @return array{status: string, message: string, retry_after?: int}
     */
    public function trigger(string $mobile): array
    {
        $normalized = IndianMobileNumber::normalize($mobile);

        if ($normalized === null) {
            return [
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ];
        }

        $cooldownKey = $this->cooldownCacheKey($normalized);
        $cooldownSeconds = (int) config('services.otp.resend_cooldown_seconds', 60);

        if (Cache::has($cooldownKey)) {
            $retryAfter = max(1, (int) Cache::get($cooldownKey) - time());

            return [
                'status' => 'error',
                'message' => 'Please wait before requesting another OTP.',
                'retry_after' => $retryAfter,
            ];
        }

        $otp = $this->generateOtp();
        $ttlMinutes = (int) config('services.otp.ttl_minutes', 10);

        Cache::put($this->otpCacheKey($normalized), [
            'hash' => $this->hashOtp($otp),
            'attempts' => 0,
        ], now()->addMinutes($ttlMinutes));

        Cache::put($cooldownKey, time() + $cooldownSeconds, now()->addSeconds($cooldownSeconds));

        if (! $this->sms->send($normalized, $otp)) {
            Cache::forget($this->otpCacheKey($normalized));
            Cache::forget($cooldownKey);

            return [
                'status' => 'error',
                'message' => 'We could not send the OTP right now. Please try again shortly.',
            ];
        }

        $response = [
            'status' => 'success',
            'message' => 'OTP generated successfully.',
            'expires_in' => $ttlMinutes * 60,
        ];

        if (config('services.otp.expose_in_response')) {
            $response['otp'] = $otp;
        }

        return $response;
    }

    /**
     * @return array{status: string, message: string, verification_token?: string, expires_in?: int}
     */
    public function verify(string $mobile, string $otp): array
    {
        $normalized = IndianMobileNumber::normalize($mobile);

        if ($normalized === null) {
            return [
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ];
        }

        $otp = trim($otp);

        if (! preg_match('/^\d{4,8}$/', $otp)) {
            return [
                'status' => 'error',
                'message' => 'Please enter a valid OTP.',
            ];
        }

        $record = Cache::get($this->otpCacheKey($normalized));

        if (! is_array($record) || ! isset($record['hash'])) {
            return [
                'status' => 'error',
                'message' => 'OTP expired or not found. Please request a new OTP.',
            ];
        }

        $maxAttempts = (int) config('services.otp.max_verify_attempts', 5);
        $attempts = (int) ($record['attempts'] ?? 0);

        if ($attempts >= $maxAttempts) {
            Cache::forget($this->otpCacheKey($normalized));

            return [
                'status' => 'error',
                'message' => 'Too many incorrect attempts. Please request a new OTP.',
            ];
        }

        if (! hash_equals((string) $record['hash'], $this->hashOtp($otp))) {
            $record['attempts'] = $attempts + 1;
            $ttlMinutes = (int) config('services.otp.ttl_minutes', 10);
            Cache::put($this->otpCacheKey($normalized), $record, now()->addMinutes($ttlMinutes));

            return [
                'status' => 'error',
                'message' => 'Invalid OTP. Please try again.',
            ];
        }

        Cache::forget($this->otpCacheKey($normalized));

        $verificationToken = Str::random(64);
        $verifiedTtlMinutes = (int) config('services.otp.verified_ttl_minutes', 30);

        Cache::put(
            $this->verifiedTokenCacheKey($verificationToken),
            $normalized,
            now()->addMinutes($verifiedTtlMinutes)
        );

        return [
            'status' => 'success',
            'message' => 'Mobile number verified successfully.',
            'verification_token' => $verificationToken,
            'expires_in' => $verifiedTtlMinutes * 60,
        ];
    }

    public function isVerificationTokenValid(string $token, string $mobile): bool
    {
        $normalized = IndianMobileNumber::normalize($mobile);

        if ($normalized === null || trim($token) === '') {
            return false;
        }

        $cachedMobile = Cache::get($this->verifiedTokenCacheKey($token));

        return is_string($cachedMobile) && $cachedMobile === $normalized;
    }

    private function generateOtp(): string
    {
        $length = max(4, min(8, (int) config('services.otp.length', 6)));

        $max = (10 ** $length) - 1;
        $min = 10 ** ($length - 1);

        return (string) random_int($min, $max);
    }

    private function hashOtp(string $otp): string
    {
        return hash('sha256', $otp.config('app.key'));
    }

    private function otpCacheKey(string $mobile): string
    {
        return 'otp:pending:'.$mobile;
    }

    private function cooldownCacheKey(string $mobile): string
    {
        return 'otp:cooldown:'.$mobile;
    }

    private function verifiedTokenCacheKey(string $token): string
    {
        return 'otp:verified:'.$token;
    }
}
