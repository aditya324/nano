<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

/**
 * Delivers OTP without an external SMS provider (logs only until one is configured).
 */
class OtpSmsGateway
{
    public function send(string $mobile, string $otp): bool
    {
        Log::info('OTP generated (no SMS provider configured)', [
            'mobile' => $mobile,
            'otp' => $otp,
        ]);

        return true;
    }
}
