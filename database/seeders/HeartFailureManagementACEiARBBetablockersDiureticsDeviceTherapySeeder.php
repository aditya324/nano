<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeartFailureManagementACEiARBBetablockersDiureticsDeviceTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Heart Failure Management (ACEi/ARB, Beta-blockers, Diuretics, Device Therapy)')],
            [
                'title' => 'Heart Failure Management (ACEi/ARB, Beta-blockers, Diuretics, Device Therapy)',
                'slug' => Str::slug('Heart Failure Management (ACEi/ARB, Beta-blockers, Diuretics, Device Therapy)'),
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
                'seo_title' => 'Heart Failure Management (ACEi/ARB, Beta-blockers, Diuretics, Device Therapy)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
