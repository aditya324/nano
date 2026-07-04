<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodGlucoseOptimizationDiabetesManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Glucose Optimization & Diabetes Management')],
            [
                'title' => 'Blood Glucose Optimization & Diabetes Management',
                'slug' => Str::slug('Blood Glucose Optimization & Diabetes Management'),
                'introduction' => 'Blood glucose optimization and diabetes management are essential for preventing and treating diabetic foot complications.',
                'what_is' => 'Poor blood sugar control damages blood vessels and nerves, increasing the risk of foot ulcers, infections, and delayed wound healing.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcer prevention'],
            ['value' => 'Infection risk reduction'],
            ['value' => 'Neuropathy management'],
            ['value' => 'Wound healing support'],
            ['value' => 'Prevention of amputations'],
            ['value' => 'Treatments'],
            ['value' => 'Management includes blood sugar monitoring, insulin therapy, oral diabetic medications, dietary regulation, exercise guidance, and regular diabetic foot evaluation to improve circulation and healing.'],
            ['value' => 'Benefits'],
            ['value' => 'Better wound healing'],
            ['value' => 'Reduced infection risk'],
            ['value' => 'Improved circulation'],
            ['value' => 'Prevention of complications'],
            ['value' => 'Reduced hospitalization'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Hypoglycemia from medications'],
            ['value' => 'Poor compliance affecting outcomes'],
            ['value' => 'Long-term diabetic complications'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood sugar monitoring'],
            ['value' => 'Medication adherence'],
            ['value' => 'Diabetic diet control'],
            ['value' => 'Routine foot inspection'],
            ['value' => 'Follow-up diabetic care'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Effective diabetes management significantly reduces diabetic foot complications and improves long-term limb preservation.',
                'conclusion' => '',
                'seo_title' => 'Blood Glucose Optimization & Diabetes Management',
                'seo_description' => 'Blood glucose optimization and diabetes management are essential for preventing and treating diabetic foot complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
