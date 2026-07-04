<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'leads' => [
        'webhook_url' => env('LEADS_WEBHOOK_URL', 'https://crm.ind.thbcare.in/api/v1/nanohospitals/hooks/add-lead-webhook'),
        'webhook_api_key' => env('LEADS_WEBHOOK_API_KEY'),
        // Nano website lead codes (event_master); must not use Truscan *_truscan codes.
        'default_event_name' => env('LEADS_DEFAULT_EVENT_NAME', 'callback_second_opinion_nano'),
        'careers_event_name' => env('LEADS_CAREERS_EVENT_NAME', 'callback_careers_nano'),
        'send_notification_mail' => env('LEADS_SEND_NOTIFICATION_MAIL', true),
        'log_payload' => env('LEADS_LOG_PAYLOAD', false),
        'verify_ssl' => env('LEADS_VERIFY_SSL', true),
    ],

    'karexpert' => [
        'token_url' => env('KAREXPERT_TOKEN_URL', 'https://nanohospitals.karexpert.com/external/api/v1/token'),
        'integrate_url' => env('KAREXPERT_INTEGRATE_URL', 'https://nanohospitals.karexpert.com/external/api/v1/integrate'),
        'api_key' => env('KAREXPERT_API_KEY'),
        'integration_key' => env('KAREXPERT_INTEGRATION_KEY', 'GET_SLOT_AVAILABILITY'),
        'client_code' => env('KAREXPERT_CLIENT_CODE', 'NANOBG_WEBSITE'),
        'message_type' => env('KAREXPERT_MESSAGE_TYPE', 'request'),
        'facility_id' => env('KAREXPERT_FACILITY_ID', 'Nano'),
        'slot_facilities' => [
            'uttarahalli' => env('KAREXPERT_SLOT_FACILITY_ID_UTTARAHALLI', env('KAREXPERT_FACILITY_ID', 'Nano')),
            'hulimavu' => env('KAREXPERT_SLOT_FACILITY_ID_HULIMAVU', 'Nano_BG'),
        ],
        'service_item_code' => env('KAREXPERT_SERVICE_ITEM_CODE', 'opd'),
        'slot_visibility' => env('KAREXPERT_SLOT_VISIBILITY', 'Online'),
        'practice_type_code' => env('KAREXPERT_PRACTICE_TYPE_CODE', 'individual'),
        'timezone' => env('KAREXPERT_TIMEZONE', 'Asia/Kolkata'),
        'timeout' => (int) env('KAREXPERT_TIMEOUT', 15),
        'verify_ssl' => env('KAREXPERT_VERIFY_SSL', true),
        'log_payload' => env('KAREXPERT_LOG_PAYLOAD', true),
        'lookup_mobile_allowlist' => env('KAREXPERT_LOOKUP_MOBILE_ALLOWLIST', '3322116655'),
        'registration_facility_id' => env('KAREXPERT_REGISTRATION_FACILITY_ID', 'ARTEMIS'),
        'registration_payer_id' => env('KAREXPERT_REGISTRATION_PAYER_ID'),
        'registration_payer_name' => env('KAREXPERT_REGISTRATION_PAYER_NAME'),
        'appointment_facility_id' => env('KAREXPERT_APPOINTMENT_FACILITY_ID', 'c7dfa7d1-ede2-11ef-810e-460d90e19dd0-48'),
        'appointment_facilities' => [
            'uttarahalli' => env('KAREXPERT_APPOINTMENT_FACILITY_ID_UTTARAHALLI', 'c7dfa7d1-ede2-11ef-810e-460d90e19dd0-48'),
            'hulimavu' => env('KAREXPERT_APPOINTMENT_FACILITY_ID_HULIMAVU', '1e91a4e0-3895-11f1-984b-ca0e67c3ae89-94'),
        ],
        'appointment_remarks' => env('KAREXPERT_APPOINTMENT_REMARKS', 'Appointment Booking'),
        'appointment_ext_payer_code' => env('KAREXPERT_APPOINTMENT_EXT_PAYER_CODE', 'CA'),
        'appointment_ext_billing_category_code' => env('KAREXPERT_APPOINTMENT_EXT_BILLING_CATEGORY_CODE', 'OP'),
        'integrations' => [
            'slot_availability' => [
                'integration_key' => env('KAREXPERT_INTEGRATION_KEY', 'GET_SLOT_AVAILABILITY'),
                'api_key' => env('KAREXPERT_API_KEY'),
            ],
            'patient_lookup' => [
                'integration_key' => env('KAREXPERT_PATIENT_LOOKUP_INTEGRATION_KEY', 'PATIENT_LOOKUP'),
                'api_key' => env('KAREXPERT_PATIENT_LOOKUP_API_KEY'),
            ],
            'patient_registration' => [
                'integration_key' => env('KAREXPERT_PATIENT_REGISTRATION_INTEGRATION_KEY', 'PATIENT_REGISTRATION'),
                'api_key' => env('KAREXPERT_PATIENT_REGISTRATION_API_KEY'),
            ],
            'appointment' => [
                'integration_key' => env('KAREXPERT_APPOINTMENT_INTEGRATION_KEY', 'APPOINTMENT_NEW'),
                'api_key' => env('KAREXPERT_APPOINTMENT_API_KEY'),
            ],
        ],
    ],

    'otp' => [
        'length' => (int) env('OTP_LENGTH', 6),
        'ttl_minutes' => (int) env('OTP_TTL_MINUTES', 10),
        'verified_ttl_minutes' => (int) env('OTP_VERIFIED_TTL_MINUTES', 30),
        'resend_cooldown_seconds' => (int) env('OTP_RESEND_COOLDOWN_SECONDS', 60),
        'max_verify_attempts' => (int) env('OTP_MAX_VERIFY_ATTEMPTS', 5),
        // Return OTP in API response for local/testing until an SMS provider is added.
        'expose_in_response' => env('OTP_EXPOSE_IN_RESPONSE', env('APP_DEBUG', false)),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
