<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofAcuteExacerbationsCOPDAsthmaHeartFailureSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Acute Exacerbations (COPD, Asthma & Heart Failure)')],
            [
                'title' => 'Management of Acute Exacerbations (COPD, Asthma & Heart Failure)',
                'slug' => Str::slug('Management of Acute Exacerbations (COPD, Asthma & Heart Failure)'),
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
                'seo_title' => 'Management of Acute Exacerbations (COPD, Asthma & Heart Failure)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
