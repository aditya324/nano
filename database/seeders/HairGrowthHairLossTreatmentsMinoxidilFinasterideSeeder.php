<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HairGrowthHairLossTreatmentsMinoxidilFinasterideSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hair Growth & Hair Loss Treatments (Minoxidil, Finasteride)')],
            [
                'title' => 'Hair Growth & Hair Loss Treatments (Minoxidil, Finasteride)',
                'slug' => Str::slug('Hair Growth & Hair Loss Treatments (Minoxidil, Finasteride)'),
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
                'seo_title' => 'Hair Growth & Hair Loss Treatments (Minoxidil, Finasteride)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
