<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodGlucoseHbA1cTestingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Glucose & HbA1c Testing')],
            [
                'title' => 'Blood Glucose & HbA1c Testing',
                'slug' => Str::slug('Blood Glucose & HbA1c Testing'),
                'introduction' => 'Blood glucose and HbA1c testing monitor short-term and long-term blood sugar control in diabetic patients.',
                'what_is' => 'Good glucose control is essential for wound healing and prevention of diabetic foot complications.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetes monitoring'],
            ['value' => 'Wound healing assessment'],
            ['value' => 'Treatment adjustment'],
            ['value' => 'Prevention of diabetic complications'],
            ['value' => 'Long-term diabetic management'],
            ['value' => 'Treatments'],
            ['value' => 'Testing helps doctors adjust insulin therapy, oral diabetic medications, dietary plans, and lifestyle modifications for better glucose control.'],
            ['value' => 'Benefits'],
            ['value' => 'Better diabetic management'],
            ['value' => 'Improved wound healing'],
            ['value' => 'Reduced infection risk'],
            ['value' => 'Prevention of complications'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Fluctuating glucose readings'],
            ['value' => 'Need for repeated testing'],
            ['value' => 'Poor compliance affecting results'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue prescribed medications'],
            ['value' => 'Maintain diabetic diet'],
            ['value' => 'Monitor glucose regularly'],
            ['value' => 'Attend follow-up appointments'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Routine glucose and HbA1c monitoring improve diabetic control and reduce long-term foot complications.',
                'conclusion' => '',
                'seo_title' => 'Blood Glucose & HbA1c Testing',
                'seo_description' => 'Blood glucose and HbA1c testing monitor short-term and long-term blood sugar control in diabetic patients.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
