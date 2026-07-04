<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IndianMobileNumber implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || self::normalizeForLookup($value) === null) {
            $fail('Please enter a valid 10-digit mobile number.');
        }
    }

    public static function normalize(string $value): ?string
    {
        return self::normalizeForLookup($value);
    }

    public static function normalizeForLookup(string $value): ?string
    {
        $digits = self::extractDigits($value);

        if ($digits === null) {
            return null;
        }

        if (self::isAllowlisted($digits)) {
            return $digits;
        }

        if (! preg_match('/^[6-9]\d{9}$/', $digits)) {
            return null;
        }

        return $digits;
    }

    public static function isValidForRegistration(string $value): bool
    {
        $digits = self::normalizeForLookup($value);

        return $digits !== null && preg_match('/^[6-9]\d{9}$/', $digits) === 1;
    }

    /**
     * @return list<string>
     */
    public static function lookupAllowlist(): array
    {
        $raw = (string) config('services.karexpert.lookup_mobile_allowlist', '');

        if ($raw === '') {
            return [];
        }

        return array_values(array_filter(array_map(
            static fn (string $number) => self::extractDigits($number) ?? '',
            array_map('trim', explode(',', $raw)),
        )));
    }

    private static function isAllowlisted(string $digits): bool
    {
        return in_array($digits, self::lookupAllowlist(), true);
    }

    private static function extractDigits(string $value): ?string
    {
        $digits = preg_replace('/\D/', '', trim($value)) ?? '';

        if (str_starts_with($digits, '91') && strlen($digits) === 12) {
            $digits = substr($digits, 2);
        }

        if (str_starts_with($digits, '0') && strlen($digits) === 11) {
            $digits = substr($digits, 1);
        }

        if (strlen($digits) !== 10) {
            return null;
        }

        return $digits;
    }
}
