<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TelemedicineRemoteMonitoringforChronicPatientsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Telemedicine & Remote Monitoring for Chronic Patients')],
            [
                'title' => 'Telemedicine & Remote Monitoring for Chronic Patients',
                'slug' => Str::slug('Telemedicine & Remote Monitoring for Chronic Patients'),
                'introduction' => 'Telemedicine and remote monitoring are healthcare services that allow patients with chronic illnesses to receive medical consultations, health monitoring, and follow-up care from a distance using digital technology and communication platforms. These services improve access to healthcare, support continuous disease management, and help patients receive timely medical guidance without frequent hospital visits.',
                'what_is' => 'Remote healthcare services are commonly used for patients with diabetes, hypertension, heart disease, respiratory disorders, kidney disease, obesity, and other chronic medical conditions. Telemedicine may include virtual consultations, electronic prescriptions, symptom assessment, and review of laboratory reports, while remote monitoring involves tracking vital signs such as blood pressure, blood sugar, oxygen levels, heart rate, and body weight through connected medical devices. These services support early detection of complications and improve long-term disease management.',
                'symptoms' => [
            ['value' => 'Chronic medical conditions requiring regular follow-up'],
            ['value' => 'Frequent fluctuations in blood pressure or blood sugar levels'],
            ['value' => 'Reduced mobility or difficulty attending hospital visits'],
            ['value' => 'Persistent symptoms needing continuous monitoring'],
            ['value' => 'Increased risk of disease-related complications'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed detection of worsening symptoms without regular monitoring'],
            ['value' => 'Poor medication adherence or treatment interruption'],
            ['value' => 'Increased hospitalization risk due to uncontrolled chronic disease'],
            ['value' => 'Limited access to healthcare in remote or underserved areas'],
            ['value' => 'Reduced continuity of long-term medical care'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular virtual consultations and health assessments'],
            ['value' => 'Remote monitoring of vital signs and disease indicators'],
            ['value' => 'Medication review and treatment adjustment when required'],
            ['value' => 'Lifestyle counseling and preventive healthcare guidance'],
            ['value' => 'Ongoing communication between patients and healthcare providers'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed detection of worsening symptoms without regular monitoring'],
            ['value' => 'Poor medication adherence or treatment interruption'],
            ['value' => 'Increased hospitalization risk due to uncontrolled chronic disease'],
            ['value' => 'Limited access to healthcare in remote or underserved areas'],
            ['value' => 'Reduced continuity of long-term medical care'],
        ],
                'long_term_outlook' => 'The long-term outlook with telemedicine and remote monitoring is highly positive for chronic disease management. These services improve healthcare accessibility, support early intervention, reduce unnecessary hospital visits, and enhance patient engagement in long-term care. Continuous monitoring, timely medical guidance, and preventive healthcare can significantly improve quality of life and long-term health outcomes for chronic patients.',
                'conclusion' => '',
                'seo_title' => 'Telemedicine & Remote Monitoring for Chronic Patients',
                'seo_description' => 'Telemedicine and remote monitoring are healthcare services that allow patients with chronic illnesses to receive medical consultations, health monitoring, and follow-up care from a distance using digital technology and communication platforms. These services improve access to healthcare, support continuous disease management, and help patients receive timely medical guidance without frequent hospital visits.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
