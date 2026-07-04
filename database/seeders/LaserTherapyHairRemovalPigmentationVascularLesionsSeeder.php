<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaserTherapyHairRemovalPigmentationVascularLesionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laser Therapy (Hair Removal, Pigmentation, Vascular Lesions)')],
            [
                'title' => 'Laser Therapy (Hair Removal, Pigmentation, Vascular Lesions)',
                'slug' => Str::slug('Laser Therapy (Hair Removal, Pigmentation, Vascular Lesions)'),
                'introduction' => '',
                'what_is' => '',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Laser Therapy (Hair Removal, Pigmentation, Vascular Lesions)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
