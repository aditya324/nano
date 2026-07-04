<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class InternationalPhoneNumber implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || self::normalize($value) === null) {
            $fail('Please enter a valid phone number (8–15 digits, country code optional).');
        }
    }

    public static function normalize(string $value): ?string
    {
        $trimmed = trim($value);

        if ($trimmed === '' || ! preg_match('/^\+?[0-9\s\-\(\)\.]{8,24}$/', $trimmed)) {
            return null;
        }

        $hasPlus = str_starts_with($trimmed, '+');
        $digits = preg_replace('/\D/', '', $trimmed) ?? '';
        $length = strlen($digits);

        if ($length < 8 || $length > 15) {
            return null;
        }

        return $hasPlus ? '+'.$digits : $digits;
    }
}
