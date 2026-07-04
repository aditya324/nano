<?php

namespace App\Support;

use App\Rules\IndianMobileNumber;
use App\Rules\InternationalPhoneNumber;

class LeadFormRules
{
    public static function isInternationalSource(?string $source): bool
    {
        return is_string($source) && str_contains(strtolower($source), 'international');
    }

    /**
     * @return list<string|\Illuminate\Contracts\Validation\ValidationRule>
     */
    public static function nameRules(): array
    {
        return [
            'required',
            'string',
            'min:2',
            'max:255',
            'regex:/^[\pL\s.\'\-]+$/u',
        ];
    }

    /**
     * @return list<string|\Illuminate\Contracts\Validation\ValidationRule>
     */
    public static function mobileRules(?string $source = null): array
    {
        return [
            'required',
            'string',
            'max:20',
            self::isInternationalSource($source)
                ? new InternationalPhoneNumber()
                : new IndianMobileNumber(),
        ];
    }

    /**
     * @return list<string>
     */
    public static function emailRules(bool $required = false): array
    {
        $rules = ['string', 'email:rfc,filter', 'max:255'];

        return $required
            ? array_merge(['required'], $rules)
            : array_merge(['nullable'], $rules);
    }

    /**
     * @return array<string, list<string|\Illuminate\Contracts\Validation\ValidationRule>>
     */
    public static function contactRules(?string $source = null): array
    {
        return [
            'name' => self::nameRules(),
            'mobile' => self::mobileRules($source),
            'email' => self::emailRules(required: false),
            'message' => ['nullable', 'string', 'max:5000'],
            'source' => ['required', 'string', 'max:255'],
            'report' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:10240'],
        ];
    }

    /**
     * @return array<string, list<string|\Illuminate\Contracts\Validation\ValidationRule>>
     */
    public static function requestCallRules(): array
    {
        return [
            'name' => self::nameRules(),
            'mobile' => self::mobileRules(),
            'email' => self::emailRules(required: false),
            'source' => ['required', 'string', 'max:255'],
            'speciality' => ['nullable', 'string', 'max:255'],
            'branch' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * @return array<string, list<string|\Illuminate\Contracts\Validation\ValidationRule>>
     */
    public static function jobRules(): array
    {
        return [
            'name' => self::nameRules(),
            'mobile' => self::mobileRules(),
            'email' => self::emailRules(required: true),
            'department' => ['required', 'string', 'max:255'],
            'resume' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:10240'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public static function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.min' => 'Name must be at least 2 characters.',
            'name.regex' => 'Name may only contain letters, spaces, dots, hyphens, and apostrophes.',
            'mobile.required' => 'Please enter your mobile number.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
        ];
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    public static function normalize(array $data, ?string $source = null): array
    {
        if (isset($data['name']) && is_string($data['name'])) {
            $data['name'] = trim(preg_replace('/\s+/', ' ', $data['name']) ?? $data['name']);
        }

        if (isset($data['mobile']) && is_string($data['mobile'])) {
            $normalized = self::isInternationalSource($source)
                ? InternationalPhoneNumber::normalize($data['mobile'])
                : IndianMobileNumber::normalize($data['mobile']);

            if ($normalized !== null) {
                $data['mobile'] = $normalized;
            }
        }

        if (isset($data['email']) && is_string($data['email']) && trim($data['email']) !== '') {
            $data['email'] = strtolower(trim($data['email']));
        } elseif (array_key_exists('email', $data) && ($data['email'] === null || $data['email'] === '')) {
            $data['email'] = null;
        }

        return $data;
    }
}
