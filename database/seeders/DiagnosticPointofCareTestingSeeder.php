<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiagnosticPointofCareTestingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diagnostic & Point-of-Care Testing')],
            [
                'title' => 'Diagnostic & Point-of-Care Testing',
                'slug' => Str::slug('Diagnostic & Point-of-Care Testing'),
                'introduction' => 'Diagnostic and point-of-care testing involve rapid medical evaluations and investigations used to assess health conditions, detect diseases, monitor treatment response, and support timely clinical decision-making. These tests help healthcare providers quickly evaluate organ function, heart health, infections, metabolic disorders, and other medical conditions.',
                'what_is' => 'Point-of-care testing is commonly performed in outpatient clinics, emergency departments, intensive care units, and hospital wards for faster diagnosis and monitoring. Common investigations include electrocardiogram (ECG), echocardiography (Echo), blood tests, urine tests, blood glucose monitoring, cardiac markers, infection screening, and electrolyte analysis. These diagnostic tools assist in identifying acute and chronic illnesses while supporting immediate treatment planning and long-term disease monitoring.',
                'symptoms' => [
            ['value' => 'Chest pain or palpitations'],
            ['value' => 'Shortness of breath or fatigue'],
            ['value' => 'Fever or signs of infection'],
            ['value' => 'Abnormal blood pressure, blood sugar, or heart rhythm'],
            ['value' => 'Weakness, dizziness, or unexplained health symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis of serious medical conditions'],
            ['value' => 'Progression of untreated cardiovascular or metabolic disorders'],
            ['value' => 'Missed detection of infections or organ dysfunction'],
            ['value' => 'Increased complications due to lack of early intervention'],
            ['value' => 'Reduced treatment effectiveness without proper monitoring'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of vital signs and test results'],
            ['value' => 'Repeat laboratory testing and cardiac evaluations when required'],
            ['value' => 'Review of treatment response and medication adjustments'],
            ['value' => 'Early detection of complications or disease progression'],
            ['value' => 'Long-term follow-up and preventive healthcare monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis of serious medical conditions'],
            ['value' => 'Progression of untreated cardiovascular or metabolic disorders'],
            ['value' => 'Missed detection of infections or organ dysfunction'],
            ['value' => 'Increased complications due to lack of early intervention'],
            ['value' => 'Reduced treatment effectiveness without proper monitoring'],
        ],
                'long_term_outlook' => 'The long-term outlook with proper diagnostic and point-of-care testing is highly beneficial for early disease detection, effective treatment planning, and continuous health monitoring. Timely investigations and regular monitoring help reduce complications, improve treatment outcomes, and support long-term patient health and preventive care.',
                'conclusion' => '',
                'seo_title' => 'Diagnostic & Point-of-Care Testing',
                'seo_description' => 'Diagnostic and point-of-care testing involve rapid medical evaluations and investigations used to assess health conditions, detect diseases, monitor treatment response, and support timely clinical decision-making. These tests help healthcare providers quickly evaluate organ function, heart health, infections, metabolic disorders, and other medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
