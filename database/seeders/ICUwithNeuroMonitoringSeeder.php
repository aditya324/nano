<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ICUwithNeuroMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ICU with Neuro Monitoring')],
            [
                'title' => 'ICU with Neuro Monitoring',
                'slug' => Str::slug('ICU with Neuro Monitoring'),
                'introduction' => 'An ICU with neuro monitoring is a specialized intensive care facility designed for critically ill neurological and neurosurgical patients requiring continuous brain and neurological assessment. The unit provides advanced life-support systems and neurological monitoring technologies. It is essential for patients with severe brain injury, stroke, or post-neurosurgical complications.',
                'what_is' => 'The ICU may include: Intracranial pressure monitoring Continuous neurological observation Ventilator support systems Cardiac and respiratory monitoring Seizure monitoring equipment The unit commonly manages: Severe head injury Brain hemorrhage Stroke Post-operative neurosurgical patients Neurocritical emergencies Specialized neurocritical teams provide round-the-clock care.',
                'symptoms' => [
            ['value' => 'Altered consciousness'],
            ['value' => 'Severe neurological weakness'],
            ['value' => 'Respiratory failure'],
            ['value' => 'Seizures'],
            ['value' => 'Brain swelling'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Brain swelling progression'],
            ['value' => 'Organ dysfunction'],
            ['value' => 'Increased mortality risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU monitoring until stable'],
            ['value' => 'Follow rehabilitation recommendations'],
            ['value' => 'Continue medications regularly'],
            ['value' => 'Attend neurological follow-up visits'],
            ['value' => 'Monitor recovery progress carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Brain swelling progression'],
            ['value' => 'Organ dysfunction'],
            ['value' => 'Increased mortality risk'],
        ],
                'long_term_outlook' => 'Neuro-monitoring ICUs improve survival and neurological stabilization in critically ill patients. Long-term outcomes depend on early treatment and rehabilitation support.',
                'conclusion' => '',
                'seo_title' => 'ICU with Neuro Monitoring',
                'seo_description' => 'An ICU with neuro monitoring is a specialized intensive care facility designed for critically ill neurological and neurosurgical patients requiring continuous brain and neurological assessment. The unit provides advanced life-support systems and neurological monitoring technologies. It is essential for patients with severe brain injury, stroke, or post-neurosurgical complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
