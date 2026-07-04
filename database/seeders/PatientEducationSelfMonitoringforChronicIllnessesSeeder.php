<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationSelfMonitoringforChronicIllnessesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Education & Self-Monitoring for Chronic Illnesses')],
            [
                'title' => 'Patient Education & Self-Monitoring for Chronic Illnesses',
                'slug' => Str::slug('Patient Education & Self-Monitoring for Chronic Illnesses'),
                'introduction' => 'Patient education and self-monitoring programs help individuals understand their chronic medical conditions, treatment plans, lifestyle modifications, and warning signs that require medical attention. These programs encourage patients to actively participate in managing their health through regular monitoring, medication adherence, and healthy daily habits.',
                'what_is' => 'Self-monitoring and educational support are important components of long-term care for conditions such as diabetes, hypertension, heart disease, asthma, kidney disease, obesity, and other chronic illnesses. Patients are guided on monitoring blood pressure, blood sugar, body weight, symptoms, medication schedules, diet, physical activity, and preventive care measures. Education programs improve treatment adherence, early detection of complications, and overall disease control.',
                'symptoms' => [
            ['value' => 'Persistent symptoms related to chronic medical conditions'],
            ['value' => 'Difficulty managing medications or treatment routines'],
            ['value' => 'Fatigue, weakness, or reduced physical stamina'],
            ['value' => 'Frequent fluctuations in blood pressure or blood sugar levels'],
            ['value' => 'Recurrent hospital visits or uncontrolled chronic illness symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Poor disease control and progression of chronic illness'],
            ['value' => 'Increased risk of complications and hospitalization'],
            ['value' => 'Medication non-adherence or treatment interruption'],
            ['value' => 'Reduced quality of life and emotional stress'],
            ['value' => 'Delayed recognition of serious warning signs'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular health monitoring and symptom tracking'],
            ['value' => 'Medication adherence counseling and treatment review'],
            ['value' => 'Lifestyle guidance including diet, exercise, and stress management'],
            ['value' => 'Routine follow-up visits and preventive health screening'],
            ['value' => 'Ongoing communication with healthcare professionals and caregivers'],
        ],
                'surgery_risks' => [
            ['value' => 'Poor disease control and progression of chronic illness'],
            ['value' => 'Increased risk of complications and hospitalization'],
            ['value' => 'Medication non-adherence or treatment interruption'],
            ['value' => 'Reduced quality of life and emotional stress'],
            ['value' => 'Delayed recognition of serious warning signs'],
        ],
                'long_term_outlook' => 'The long-term outlook with proper patient education and self-monitoring is highly positive for individuals living with chronic illnesses. Active participation in healthcare management can improve disease control, reduce complications, lower hospitalization rates, and enhance overall quality of life. Continuous education, regular monitoring, and preventive care are essential for maintaining long-term health and wellness.',
                'conclusion' => '',
                'seo_title' => 'Patient Education & Self-Monitoring for Chronic Illnesses',
                'seo_description' => 'Patient education and self-monitoring programs help individuals understand their chronic medical conditions, treatment plans, lifestyle modifications, and warning signs that require medical attention. These programs encourage patients to actively participate in managing their health through regular monitoring, medication adherence, and healthy daily habits.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
