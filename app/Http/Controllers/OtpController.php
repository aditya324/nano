<?php

namespace App\Http\Controllers;

use App\Rules\IndianMobileNumber;
use App\Services\OtpService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function trigger(Request $request, OtpService $otp): JsonResponse
    {
        $validated = $request->validate([
            'mobile' => ['required', 'string', 'max:10'],
        ]);

        $normalized = IndianMobileNumber::normalize($validated['mobile']);

        if ($normalized === null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ], 422);
        }

        $result = $otp->trigger($normalized);

        $statusCode = $result['status'] === 'success' ? 200 : 422;

        if (isset($result['retry_after'])) {
            $statusCode = 429;
        }

        if ($result['status'] === 'error' && str_contains($result['message'], 'could not send')) {
            $statusCode = 503;
        }

        return response()->json($result, $statusCode);
    }

    public function verify(Request $request, OtpService $otp): JsonResponse
    {
        $validated = $request->validate([
            'mobile' => ['required', 'string', 'max:20'],
            'otp' => ['required', 'string', 'max:8'],
        ]);

        $normalized = IndianMobileNumber::normalize($validated['mobile']);

        if ($normalized === null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please enter a valid 10-digit Indian mobile number.',
            ], 422);
        }

        $result = $otp->verify($normalized, $validated['otp']);

        return response()->json(
            $result,
            $result['status'] === 'success' ? 200 : 422
        );
    }
}
