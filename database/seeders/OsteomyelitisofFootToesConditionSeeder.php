<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OsteomyelitisofFootToesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Osteomyelitis of Foot / Toes')],
            [
                'name' => 'Osteomyelitis of Foot / Toes',
                'slug' => Str::slug('Osteomyelitis of Foot / Toes'),
                'h1' => 'Osteomyelitis of Foot / Toes',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Osteomyelitis is infection of the bone, commonly affecting the toes or foot bones in diabetic patients with deep ulcers or wounds.',
                'about_more' => '',
                'overview' => 'Osteomyelitis is infection of the bone, commonly affecting the toes or foot bones in diabetic patients with deep ulcers or wounds.',
                'symptoms' => [
            ['value' => 'Persistent foot pain'],
            ['value' => 'Swelling and redness'],
            ['value' => 'Deep non-healing ulcers'],
            ['value' => 'Fever and fatigue'],
            ['value' => 'Pus discharge from wounds'],
        ],
                'causes' => [
            ['value' => 'Infected diabetic foot ulcers'],
            ['value' => 'Poor blood circulation'],
            ['value' => 'Delayed wound treatment'],
            ['value' => 'Recurrent foot trauma'],
            ['value' => 'Severe bacterial infection'],
        ],
                'risks' => [
            ['value' => 'Bone destruction'],
            ['value' => 'Chronic infection'],
            ['value' => 'Sepsis and systemic infection'],
            ['value' => 'Foot deformity'],
            ['value' => 'Amputation risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Long-term antibiotics'],
            ['value' => 'MRI and bone imaging'],
            ['value' => 'Surgical removal of infected bone'],
            ['value' => 'Wound care and debridement'],
            ['value' => 'Blood sugar control'],
        ],
                'recovery' => 'Early diagnosis and prolonged treatment are necessary for successful recovery and limb preservation.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Osteomyelitis of Foot / Toes',
                'meta_description' => 'Osteomyelitis is infection of the bone, commonly affecting the toes or foot bones in diabetic patients with deep ulcers or wounds.',
                'meta_keywords' => '',
            ]
        );
    }
}
