<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VentricularDrainageICPMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ventricular Drainage & ICP Monitoring')],
            [
                'title' => 'Ventricular Drainage & ICP Monitoring',
                'slug' => Str::slug('Ventricular Drainage & ICP Monitoring'),
                'introduction' => 'Ventricular drainage and intracranial pressure (ICP) monitoring systems are specialized neurosurgical devices used to monitor and control pressure within the brain. These systems help manage hydrocephalus, brain swelling, bleeding, and severe neurological emergencies. They are commonly used in neuro ICUs and emergency neurosurgery.',
                'what_is' => 'The system includes: External ventricular drainage catheters ICP monitoring devices Pressure transducers CSF drainage systems Continuous neurological monitoring The equipment is commonly used for: Hydrocephalus Severe head injury Brain hemorrhage Brain swelling Neurocritical care management Continuous pressure monitoring helps guide emergency treatment decisions.',
                'symptoms' => [
            ['value' => 'Severe headache'],
            ['value' => 'Altered consciousness'],
            ['value' => 'Vomiting'],
            ['value' => 'Brain swelling'],
            ['value' => 'Neurological deterioration'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Catheter blockage'],
            ['value' => 'Over-drainage of CSF'],
            ['value' => 'Neurological complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU neurological monitoring'],
            ['value' => 'Maintain sterile catheter care'],
            ['value' => 'Monitor drainage levels carefully'],
            ['value' => 'Attend imaging follow-up evaluations'],
            ['value' => 'Report worsening neurological symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Catheter blockage'],
            ['value' => 'Over-drainage of CSF'],
            ['value' => 'Neurological complications'],
        ],
                'long_term_outlook' => 'ICP monitoring and ventricular drainage improve emergency brain pressure management and neurological stabilization. Long-term recovery depends on the underlying neurological condition and response to treatment.',
                'conclusion' => '',
                'seo_title' => 'Ventricular Drainage & ICP Monitoring',
                'seo_description' => 'Ventricular drainage and intracranial pressure (ICP) monitoring systems are specialized neurosurgical devices used to monitor and control pressure within the brain. These systems help manage hydrocephalus, brain swelling, bleeding, and severe neurological emergencies. They are commonly used in neuro ICUs and emergency neurosurgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
