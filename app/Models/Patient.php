<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'mobile',
        'patient_name',
        'uh_id',
        'pre_registration_no',
        'external_id',
        'mr_code',
        'registration_type',
        'source',
        'lookup_response',
        'registration_response',
        'last_verified_at',
    ];

    protected function casts(): array
    {
        return [
            'lookup_response' => 'array',
            'registration_response' => 'array',
            'last_verified_at' => 'datetime',
        ];
    }
}
