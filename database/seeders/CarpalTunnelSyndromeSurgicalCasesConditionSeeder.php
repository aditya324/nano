<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarpalTunnelSyndromeSurgicalCasesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Carpal Tunnel Syndrome (Surgical Cases)')],
            [
                'name' => 'Carpal Tunnel Syndrome (Surgical Cases)',
                'slug' => Str::slug('Carpal Tunnel Syndrome (Surgical Cases)'),
                'h1' => 'Carpal Tunnel Syndrome (Surgical Cases)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Carpal tunnel syndrome is caused by compression of the median nerve as it passes through the wrist. Severe or persistent cases may require surgical decompression to relieve nerve pressure and restore hand function.',
                'about_more' => '',
                'overview' => 'Carpal tunnel syndrome is caused by compression of the median nerve as it passes through the wrist. Severe or persistent cases may require surgical decompression to relieve nerve pressure and restore hand function.',
                'symptoms' => [
            ['value' => 'Numbness or tingling in fingers'],
            ['value' => 'Hand weakness and reduced grip strength'],
            ['value' => 'Pain worsening at night'],
            ['value' => 'Difficulty holding objects'],
            ['value' => 'Burning sensations in the hand or wrist'],
        ],
                'causes' => [
            ['value' => 'Repetitive wrist movements'],
            ['value' => 'Diabetes and thyroid disorders'],
            ['value' => 'Pregnancy-related swelling'],
            ['value' => 'Wrist injuries or arthritis'],
            ['value' => 'Occupational strain and prolonged typing'],
        ],
                'risks' => [
            ['value' => 'Permanent nerve damage if untreated'],
            ['value' => 'Muscle wasting at the thumb base'],
            ['value' => 'Reduced hand coordination and strength'],
            ['value' => 'Chronic pain and numbness'],
            ['value' => 'Difficulty performing daily tasks'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Wrist splints and activity modification'],
            ['value' => 'Anti-inflammatory medications'],
            ['value' => 'Steroid injections into the carpal tunnel'],
            ['value' => 'Carpal tunnel release surgery'],
            ['value' => 'Postoperative physiotherapy and rehabilitation'],
        ],
                'recovery' => 'Most patients experience excellent symptom relief after surgery. Early treatment prevents permanent nerve damage and improves hand function.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Carpal Tunnel Syndrome (Surgical Cases)',
                'meta_description' => 'Carpal tunnel syndrome is caused by compression of the median nerve as it passes through the wrist. Severe or persistent cases may require surgical decompressio',
                'meta_keywords' => '',
            ]
        );
    }
}
