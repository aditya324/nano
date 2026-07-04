<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleModificationPreventiveCareDietExerciseSmokingCessationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lifestyle Modification & Preventive Care (Diet, Exercise, Smoking Cessation)')],
            [
                'title' => 'Lifestyle Modification & Preventive Care (Diet, Exercise, Smoking Cessation)',
                'slug' => Str::slug('Lifestyle Modification & Preventive Care (Diet, Exercise, Smoking Cessation)'),
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
                'seo_title' => 'Lifestyle Modification & Preventive Care (Diet, Exercise, Smoking Cessation)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
