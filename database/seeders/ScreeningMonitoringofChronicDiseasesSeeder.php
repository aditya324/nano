<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScreeningMonitoringofChronicDiseasesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Screening & Monitoring of Chronic Diseases')],
            [
                'title' => 'Screening & Monitoring of Chronic Diseases',
                'slug' => Str::slug('Screening & Monitoring of Chronic Diseases'),
                'introduction' => 'Screening and monitoring of chronic diseases involve regular medical evaluations, diagnostic tests, and health assessments used to detect diseases early, monitor disease progression, and prevent long-term complications. These healthcare services support timely diagnosis, effective treatment planning, and ongoing management of chronic medical conditions.',
                'what_is' => 'Chronic disease screening and monitoring are commonly recommended for conditions such as diabetes, hypertension, heart disease, kidney disease, liver disorders, obesity, thyroid disorders, and respiratory illnesses. Evaluations may include blood tests, imaging studies, blood pressure monitoring, glucose testing, cholesterol assessment, organ function tests, and routine physical examinations. Early detection and continuous monitoring help improve treatment outcomes and reduce the risk of serious complications.',
                'symptoms' => [
            ['value' => 'Persistent fatigue or weakness'],
            ['value' => 'High blood pressure or abnormal blood sugar levels'],
            ['value' => 'Weight changes or metabolic imbalance'],
            ['value' => 'Shortness of breath or reduced physical stamina'],
            ['value' => 'Symptoms related to chronic organ dysfunction or inflammation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis of chronic medical conditions'],
            ['value' => 'Progression of disease leading to organ damage'],
            ['value' => 'Increased risk of heart disease, stroke, or kidney failure'],
            ['value' => 'Reduced quality of life due to uncontrolled illness'],
            ['value' => 'Higher risk of hospitalization and long-term complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular health check-ups and laboratory testing'],
            ['value' => 'Monitoring blood pressure, blood sugar, cholesterol, and organ function'],
            ['value' => 'Lifestyle counseling including diet and exercise guidance'],
            ['value' => 'Medication review and treatment adjustment when required'],
            ['value' => 'Long-term follow-up with healthcare specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis of chronic medical conditions'],
            ['value' => 'Progression of disease leading to organ damage'],
            ['value' => 'Increased risk of heart disease, stroke, or kidney failure'],
            ['value' => 'Reduced quality of life due to uncontrolled illness'],
            ['value' => 'Higher risk of hospitalization and long-term complications'],
        ],
                'long_term_outlook' => 'The long-term outlook with proper chronic disease screening and monitoring is highly positive. Early diagnosis, preventive healthcare, and continuous medical follow-up can significantly reduce complications, improve quality of life, and support long-term health management. Regular screening and patient education play an important role in maintaining overall wellness and preventing disease progression.',
                'conclusion' => '',
                'seo_title' => 'Screening & Monitoring of Chronic Diseases',
                'seo_description' => 'Screening and monitoring of chronic diseases involve regular medical evaluations, diagnostic tests, and health assessments used to detect diseases early, monitor disease progression, and prevent long-term complications. These healthcare services support timely diagnosis, effective treatment planning, and ongoing management of chronic medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
