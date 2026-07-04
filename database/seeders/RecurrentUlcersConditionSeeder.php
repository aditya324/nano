<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecurrentUlcersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Recurrent Ulcers')],
            [
                'name' => 'Recurrent Ulcers',
                'slug' => Str::slug('Recurrent Ulcers'),
                'h1' => 'Recurrent Ulcers',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Recurrent diabetic foot ulcers are wounds that repeatedly develop after previous healing, commonly due to continued pressure, neuropathy, and poor foot care.',
                'about_more' => '',
                'overview' => 'Recurrent diabetic foot ulcers are wounds that repeatedly develop after previous healing, commonly due to continued pressure, neuropathy, and poor foot care.',
                'symptoms' => [
            ['value' => 'Repeated ulcer formation in the same area'],
            ['value' => 'Thick callus around pressure points'],
            ['value' => 'Foot pain or numbness'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Chronic skin breakdown'],
        ],
                'causes' => [
            ['value' => 'Peripheral neuropathy'],
            ['value' => 'Improper footwear'],
            ['value' => 'Foot deformities'],
            ['value' => 'Poor diabetic control'],
            ['value' => 'Inadequate foot care practices'],
        ],
                'risks' => [
            ['value' => 'Chronic infection'],
            ['value' => 'Bone involvement and osteomyelitis'],
            ['value' => 'Gangrene formation'],
            ['value' => 'Repeated surgeries or hospitalization'],
            ['value' => 'Increased amputation risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Specialized diabetic footwear'],
            ['value' => 'Pressure offloading devices'],
            ['value' => 'Regular podiatric evaluation'],
            ['value' => 'Wound care and callus removal'],
            ['value' => 'Diabetes and vascular management'],
        ],
                'recovery' => 'Long-term preventive care and proper footwear are essential to prevent recurrence.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Recurrent Ulcers',
                'meta_description' => 'Recurrent diabetic foot ulcers are wounds that repeatedly develop after previous healing, commonly due to continued pressure, neuropathy, and poor foot care.',
                'meta_keywords' => '',
            ]
        );
    }
}
