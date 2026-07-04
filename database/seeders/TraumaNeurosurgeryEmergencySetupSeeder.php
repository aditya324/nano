<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaNeurosurgeryEmergencySetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Trauma Neurosurgery Emergency Setup')],
            [
                'title' => 'Trauma Neurosurgery Emergency Setup',
                'slug' => Str::slug('Trauma Neurosurgery Emergency Setup'),
                'introduction' => 'A trauma neurosurgery emergency setup is a specialized emergency care facility designed for rapid diagnosis and treatment of severe brain, skull, spine, and spinal cord injuries. The setup supports immediate neurosurgical intervention for life-threatening neurological trauma. Rapid treatment improves survival and neurological recovery.',
                'what_is' => 'The emergency setup includes: Emergency imaging access Trauma operating theatre support Neuro ICU coordination Emergency monitoring systems Spine stabilization equipment The facility manages: Head injuries Brain hemorrhage Skull fractures Spinal trauma Polytrauma neurological emergencies Multidisciplinary trauma teams provide coordinated emergency care.',
                'symptoms' => [
            ['value' => 'Loss of consciousness'],
            ['value' => 'Severe head injury'],
            ['value' => 'Paralysis or weakness'],
            ['value' => 'Seizures'],
            ['value' => 'Spinal pain after trauma'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Brain swelling'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Bleeding'],
            ['value' => 'Death in severe trauma'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU and neurological monitoring'],
            ['value' => 'Attend rehabilitation programs regularly'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Follow spinal or head injury precautions'],
            ['value' => 'Attend long-term neurosurgical follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Brain swelling'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Bleeding'],
            ['value' => 'Death in severe trauma'],
        ],
                'long_term_outlook' => 'Emergency neurosurgical trauma setups improve survival and early stabilization. Long-term recovery depends on injury severity and rehabilitation participation.',
                'conclusion' => '',
                'seo_title' => 'Trauma Neurosurgery Emergency Setup',
                'seo_description' => 'A trauma neurosurgery emergency setup is a specialized emergency care facility designed for rapid diagnosis and treatment of severe brain, skull, spine, and spinal cord injuries. The setup supports immediate neurosurgical intervention for life-threatening neurological trauma. Rapid treatment improves survival and neurological recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
