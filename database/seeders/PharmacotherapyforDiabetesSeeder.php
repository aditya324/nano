<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PharmacotherapyforDiabetesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pharmacotherapy for Diabetes')],
            [
                'title' => 'Pharmacotherapy for Diabetes',
                'slug' => Str::slug('Pharmacotherapy for Diabetes'),
                'introduction' => 'Pharmacotherapy for diabetes involves the use of medications to control blood sugar levels and reduce the risk of diabetes-related complications. Diabetes medications help improve insulin function, regulate glucose metabolism, and maintain stable blood sugar levels to support overall metabolic health.',
                'what_is' => 'Diabetes treatment plans are individualized based on the type of diabetes, blood sugar levels, age, lifestyle, and associated medical conditions. Common treatment options include oral antidiabetic medications, insulin therapy, and newer glucose-lowering agents that help improve blood sugar control and reduce cardiovascular risk. Pharmacotherapy is usually combined with healthy diet, exercise, weight management, and regular blood glucose monitoring for effective long-term diabetes management.',
                'symptoms' => [
            ['value' => 'High blood sugar levels'],
            ['value' => 'Frequent urination and excessive thirst'],
            ['value' => 'Fatigue or weakness'],
            ['value' => 'Blurred vision or slow wound healing'],
            ['value' => 'Increased hunger or unexplained weight changes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart disease and stroke'],
            ['value' => 'Kidney damage and chronic kidney disease'],
            ['value' => 'Nerve damage and peripheral neuropathy'],
            ['value' => 'Vision problems and diabetic retinopathy'],
            ['value' => 'Increased risk of infections and poor wound healing'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood sugar monitoring and HbA1c testing'],
            ['value' => 'Medication adherence and insulin management when required'],
            ['value' => 'Dietary counseling and lifestyle modification support'],
            ['value' => 'Routine kidney, eye, and nerve function assessments'],
            ['value' => 'Long-term follow-up with internal medicine or endocrinology specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart disease and stroke'],
            ['value' => 'Kidney damage and chronic kidney disease'],
            ['value' => 'Nerve damage and peripheral neuropathy'],
            ['value' => 'Vision problems and diabetic retinopathy'],
            ['value' => 'Increased risk of infections and poor wound healing'],
        ],
                'long_term_outlook' => 'The long-term outlook with diabetes pharmacotherapy is generally positive when blood sugar levels are effectively controlled through medications and healthy lifestyle practices. Proper diabetes management can significantly reduce the risk of complications affecting the heart, kidneys, nerves, eyes, and blood vessels. Continuous medical follow-up, preventive care, and treatment adherence are important for maintaining long-term metabolic health and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Pharmacotherapy for Diabetes',
                'seo_description' => 'Pharmacotherapy for diabetes involves the use of medications to control blood sugar levels and reduce the risk of diabetes-related complications. Diabetes medications help improve insulin function, regulate glucose metabolism, and maintain stable blood sugar levels to support overall metabolic health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
