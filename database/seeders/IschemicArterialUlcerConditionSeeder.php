<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IschemicArterialUlcerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ischemic / Arterial Ulcer')],
            [
                'name' => 'Ischemic / Arterial Ulcer',
                'slug' => Str::slug('Ischemic / Arterial Ulcer'),
                'h1' => 'Ischemic / Arterial Ulcer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ischemic ulcers develop due to poor blood supply to the feet and legs, commonly caused by peripheral arterial disease in diabetic patients.',
                'about_more' => '',
                'overview' => 'Ischemic ulcers develop due to poor blood supply to the feet and legs, commonly caused by peripheral arterial disease in diabetic patients.',
                'symptoms' => [
            ['value' => 'Painful foot ulcers'],
            ['value' => 'Cold feet and weak pulses'],
            ['value' => 'Blackened or dead tissue'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Severe pain at rest'],
        ],
                'causes' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Diabetes-related vascular damage'],
            ['value' => 'Smoking and hypertension'],
            ['value' => 'High cholesterol levels'],
            ['value' => 'Reduced blood circulation'],
        ],
                'risks' => [
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Tissue necrosis and gangrene'],
            ['value' => 'Severe infection'],
            ['value' => 'Limb amputation'],
            ['value' => 'Chronic disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Vascular assessment and Doppler studies'],
            ['value' => 'Blood circulation improving medications'],
            ['value' => 'Angioplasty or bypass surgery'],
            ['value' => 'Wound care and infection control'],
            ['value' => 'Smoking cessation and diabetes management'],
        ],
                'recovery' => 'Healing depends on restoring adequate blood supply. Early vascular treatment improves limb survival.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Ischemic / Arterial Ulcer',
                'meta_description' => 'Ischemic ulcers develop due to poor blood supply to the feet and legs, commonly caused by peripheral arterial disease in diabetic patients.',
                'meta_keywords' => '',
            ]
        );
    }
}
