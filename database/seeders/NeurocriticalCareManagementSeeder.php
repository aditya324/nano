<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeurocriticalCareManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neurocritical Care Management')],
            [
                'title' => 'Neurocritical Care Management',
                'slug' => Str::slug('Neurocritical Care Management'),
                'introduction' => 'Neurocritical care management is a specialized intensive-care service focused on critically ill patients with severe neurological and neurosurgical conditions. The service provides advanced monitoring, life-support treatment, and emergency neurological intervention. Neurocritical care improves survival and neurological stabilization in life-threatening conditions.',
                'what_is' => 'Management includes: Continuous neurological monitoring Ventilator support Brain pressure monitoring Emergency surgical coordination Seizure control Hemodynamic monitoring Conditions commonly managed include: Severe brain injury Stroke Brain hemorrhage Status epilepticus Post-neurosurgical complications Multidisciplinary teams including neurosurgeons, neurologists, and intensivists provide coordinated care.',
                'symptoms' => [
            ['value' => 'Severe neurological impairment'],
            ['value' => 'Unconsciousness'],
            ['value' => 'Brain swelling'],
            ['value' => 'Respiratory weakness'],
            ['value' => 'Persistent seizures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Brain damage'],
            ['value' => 'Respiratory failure'],
            ['value' => 'Infection'],
            ['value' => 'Organ complications'],
            ['value' => 'Increased mortality risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU monitoring closely'],
            ['value' => 'Follow rehabilitation recommendations'],
            ['value' => 'Continue medications regularly'],
            ['value' => 'Attend neurological follow-up appointments'],
            ['value' => 'Monitor recovery progress carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Brain damage'],
            ['value' => 'Respiratory failure'],
            ['value' => 'Infection'],
            ['value' => 'Organ complications'],
            ['value' => 'Increased mortality risk'],
        ],
                'long_term_outlook' => 'Neurocritical care improves stabilization and survival in critically ill neurological patients. Long-term recovery depends on early treatment and rehabilitation participation.',
                'conclusion' => '',
                'seo_title' => 'Neurocritical Care Management',
                'seo_description' => 'Neurocritical care management is a specialized intensive-care service focused on critically ill patients with severe neurological and neurosurgical conditions. The service provides advanced monitoring, life-support treatment, and emergency neurological intervention. Neurocritical care improves survival and neurological stabilization in life-threatening conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
