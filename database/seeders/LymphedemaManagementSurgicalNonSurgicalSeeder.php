<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LymphedemaManagementSurgicalNonSurgicalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lymphedema Management (Surgical & Non-Surgical)')],
            [
                'title' => 'Lymphedema Management (Surgical & Non-Surgical)',
                'slug' => Str::slug('Lymphedema Management (Surgical & Non-Surgical)'),
                'introduction' => 'Lymphedema management aims to reduce swelling caused by impaired lymphatic drainage.',
                'what_is' => 'Both conservative and surgical methods are used depending on disease severity and response to therapy.',
                'symptoms' => [
            ['value' => 'Limb swelling'],
            ['value' => 'Tightness'],
            ['value' => 'Reduced movement'],
            ['value' => 'Skin thickening'],
            ['value' => 'Recurrent infections'],
        ],
                'causes' => [
            ['value' => 'Lymph node removal'],
            ['value' => 'Cancer treatment'],
            ['value' => 'Congenital lymphatic disorders'],
            ['value' => 'Infection'],
            ['value' => 'Trauma'],
            ['value' => 'Obesity'],
        ],
                'condition_risks' => [
            ['value' => 'Cellulitis'],
            ['value' => 'Chronic pain'],
            ['value' => 'Functional disability'],
            ['value' => 'Skin fibrosis'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Non-surgical treatment includes compression garments, physiotherapy, lymphatic drainage massage, exercise, and skin care. Severe cases may require lymphatic bypass surgery or tissue reduction procedures.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue compression therapy'],
            ['value' => 'Skin hygiene'],
            ['value' => 'Physiotherapy exercises'],
            ['value' => 'Infection prevention'],
            ['value' => 'Limb elevation'],
        ],
                'surgery_risks' => [
            ['value' => 'Cellulitis'],
            ['value' => 'Chronic pain'],
            ['value' => 'Functional disability'],
            ['value' => 'Skin fibrosis'],
        ],
                'long_term_outlook' => 'Long-term therapy helps control swelling, improve mobility, and reduce recurrent infections.',
                'conclusion' => '',
                'seo_title' => 'Lymphedema Management (Surgical & Non-Surgical)',
                'seo_description' => 'Lymphedema management aims to reduce swelling caused by impaired lymphatic drainage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
