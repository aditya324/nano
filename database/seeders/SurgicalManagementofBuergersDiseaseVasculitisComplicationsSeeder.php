<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalManagementofBuergersDiseaseVasculitisComplicationsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgical Management of Buerger’s Disease / Vasculitis Complications')],
            [
                'title' => 'Surgical Management of Buerger’s Disease / Vasculitis Complications',
                'slug' => Str::slug('Surgical Management of Buerger’s Disease / Vasculitis Complications'),
                'introduction' => 'Surgical management may be required in severe vascular inflammation or tobacco-related vessel disease causing tissue damage.',
                'what_is' => 'Advanced disease may lead to ulcers, gangrene, or severe pain requiring vascular procedures or amputations.',
                'symptoms' => [
            ['value' => 'Severe limb pain'],
            ['value' => 'Finger or toe ulcers'],
            ['value' => 'Skin discoloration'],
            ['value' => 'Gangrene'],
            ['value' => 'Cold extremities'],
        ],
                'causes' => [
            ['value' => 'Tobacco use'],
            ['value' => 'Autoimmune vasculitis'],
            ['value' => 'Chronic vascular inflammation'],
            ['value' => 'Connective tissue disorders'],
        ],
                'condition_risks' => [
            ['value' => 'Tissue loss'],
            ['value' => 'Chronic infection'],
            ['value' => 'Limb amputation'],
            ['value' => 'Recurrent vascular blockage'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment includes smoking cessation, wound care, vascular bypass when possible, sympathectomy, debridement, and limited amputation in severe tissue loss.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Strict tobacco avoidance'],
            ['value' => 'Wound care'],
            ['value' => 'Pain management'],
            ['value' => 'Rehabilitation support'],
        ],
                'surgery_risks' => [
            ['value' => 'Tissue loss'],
            ['value' => 'Chronic infection'],
            ['value' => 'Limb amputation'],
            ['value' => 'Recurrent vascular blockage'],
        ],
                'long_term_outlook' => 'Stopping tobacco and controlling inflammation significantly improve long-term vascular outcomes.',
                'conclusion' => '',
                'seo_title' => 'Surgical Management of Buerger’s Disease / Vasculitis Complications',
                'seo_description' => 'Surgical management may be required in severe vascular inflammation or tobacco-related vessel disease causing tissue damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
