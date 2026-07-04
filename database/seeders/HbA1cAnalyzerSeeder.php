<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HbA1cAnalyzerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('HbA1c Analyzer')],
            [
                'title' => 'HbA1c Analyzer',
                'slug' => Str::slug('HbA1c Analyzer'),
                'introduction' => 'An HbA1c analyzer is a specialized diagnostic medical device used to measure glycated hemoglobin (HbA1c) levels in the blood. This test helps evaluate average blood sugar control over the previous two to three months and plays a crucial role in diagnosing and monitoring diabetes mellitus. HbA1c analyzers support early detection of diabetes, assessment of treatment effectiveness, and long-term metabolic management.',
                'what_is' => 'HbA1c analyzers use advanced laboratory technology to accurately measure the percentage of glucose attached to hemoglobin in red blood cells. These devices are commonly used in hospitals, diagnostic laboratories, endocrinology clinics, diabetes care centers, and preventive health programs. HbA1c testing is essential for monitoring Type 1 Diabetes, Type 2 Diabetes, gestational diabetes, and patients at risk of developing diabetes or metabolic syndrome. Modern analyzers provide rapid, reliable, and automated testing with high precision, supporting effective diabetes management and clinical decision-making.',
                'symptoms' => [
            ['value' => 'Frequent blood sugar fluctuations or uncontrolled diabetes'],
            ['value' => 'Excessive thirst and frequent urination'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Blurred vision or slow wound healing'],
            ['value' => 'Need for long-term diabetes monitoring and treatment evaluation'],
        ],
                'causes' => [
            ['value' => 'Type 1 or Type 2 Diabetes Mellitus'],
            ['value' => 'Poor long-term blood sugar control'],
            ['value' => 'Metabolic syndrome or obesity-related metabolic imbalance'],
            ['value' => 'Family history of diabetes or high-risk metabolic conditions'],
            ['value' => 'Need for routine diabetes screening and treatment monitoring'],
        ],
                'condition_risks' => [
            ['value' => 'Inaccurate results due to improper sample handling or certain blood disorders'],
            ['value' => 'Delayed diagnosis if routine monitoring is not performed regularly'],
            ['value' => 'Misinterpretation of results without proper medical evaluation'],
            ['value' => 'Variations in readings in patients with anemia or hemoglobin abnormalities'],
            ['value' => 'Poor diabetes control if HbA1c levels remain persistently elevated'],
            ['value' => 'Treatment Options'],
            ['value' => 'HbA1c analyzers support effective diabetes management by helping healthcare providers evaluate long-term blood sugar control and adjust treatment plans accordingly. Management may include insulin therapy, oral anti-diabetic medications, dietary planning, exercise programs, lifestyle modification, glucose monitoring, and endocrinology follow-up. Patients may also benefit from preventive health screening, diabetes education, nutritional counseling, weight management, and continuous metabolic assessment to reduce complications and improve long-term health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular HbA1c testing and blood sugar monitoring'],
            ['value' => 'Proper sample collection and laboratory quality control procedures'],
            ['value' => 'Adjustment of diabetes medications based on HbA1c results'],
            ['value' => 'Nutritional counseling and lifestyle management support'],
            ['value' => 'Long-term endocrinology follow-up and metabolic health evaluation'],
        ],
                'surgery_risks' => [
            ['value' => 'Inaccurate results due to improper sample handling or certain blood disorders'],
            ['value' => 'Delayed diagnosis if routine monitoring is not performed regularly'],
            ['value' => 'Misinterpretation of results without proper medical evaluation'],
            ['value' => 'Variations in readings in patients with anemia or hemoglobin abnormalities'],
            ['value' => 'Poor diabetes control if HbA1c levels remain persistently elevated'],
            ['value' => 'Treatment Options'],
            ['value' => 'HbA1c analyzers support effective diabetes management by helping healthcare providers evaluate long-term blood sugar control and adjust treatment plans accordingly. Management may include insulin therapy, oral anti-diabetic medications, dietary planning, exercise programs, lifestyle modification, glucose monitoring, and endocrinology follow-up. Patients may also benefit from preventive health screening, diabetes education, nutritional counseling, weight management, and continuous metabolic assessment to reduce complications and improve long-term health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with HbA1c monitoring is highly positive with regular diabetes assessment and proper medical management. Routine HbA1c testing, medication adherence, healthy nutrition, exercise, blood sugar monitoring, stress management, diabetes education, and continuous healthcare follow-up significantly help improve metabolic stability, reduce diabetic complications, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'HbA1c Analyzer',
                'seo_description' => 'An HbA1c analyzer is a specialized diagnostic medical device used to measure glycated hemoglobin (HbA1c) levels in the blood. This test helps evaluate average blood sugar control over the previous two to three months and plays a crucial role in diagnosing and monitoring diabetes mellitus. HbA1c analyzers support early detection of diabetes, assessment of treatment effectiveness, and long-term metabolic management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
