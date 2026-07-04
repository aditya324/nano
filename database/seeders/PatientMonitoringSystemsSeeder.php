<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientMonitoringSystemsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Monitoring Systems')],
            [
                'title' => 'Patient Monitoring Systems',
                'slug' => Str::slug('Patient Monitoring Systems'),
                'introduction' => 'Patient monitoring systems are advanced medical devices used to continuously track vital signs during and after surgery. These systems are essential for detecting complications early and ensuring patient safety.',
                'what_is' => 'Monitoring systems measure: Heart rate Blood pressure Oxygen saturation Respiratory rate ECG activity Temperature These systems are used in: Operating rooms Intensive care units Recovery rooms Emergency departments Continuous monitoring allows immediate medical intervention if abnormalities occur.',
                'symptoms' => [
            ['value' => 'Major surgical procedures'],
            ['value' => 'Critical illness or trauma'],
            ['value' => 'Unstable blood pressure or heart rate'],
            ['value' => 'Respiratory distress'],
            ['value' => 'Need for intensive postoperative observation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Technical equipment malfunction'],
            ['value' => 'False alarms or inaccurate readings'],
            ['value' => 'Delayed detection if monitoring is interrupted'],
            ['value' => 'Skin irritation from sensors'],
            ['value' => 'Rare electrical issues'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue monitoring as advised by medical team'],
            ['value' => 'Report dizziness, chest pain, or breathing difficulty'],
            ['value' => 'Maintain proper hydration and recovery'],
            ['value' => 'Attend postoperative evaluations regularly'],
            ['value' => 'Follow medication and rehabilitation instructions carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Technical equipment malfunction'],
            ['value' => 'False alarms or inaccurate readings'],
            ['value' => 'Delayed detection if monitoring is interrupted'],
            ['value' => 'Skin irritation from sensors'],
            ['value' => 'Rare electrical issues'],
        ],
                'long_term_outlook' => 'Advanced monitoring systems improve patient safety, support early complication detection, and enhance surgical recovery and survival outcomes.',
                'conclusion' => '',
                'seo_title' => 'Patient Monitoring Systems',
                'seo_description' => 'Patient monitoring systems are advanced medical devices used to continuously track vital signs during and after surgery. These systems are essential for detecting complications early and ensuring patient safety.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
