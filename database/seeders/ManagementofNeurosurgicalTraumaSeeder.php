<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofNeurosurgicalTraumaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Neurosurgical Trauma')],
            [
                'title' => 'Management of Neurosurgical Trauma',
                'slug' => Str::slug('Management of Neurosurgical Trauma'),
                'introduction' => 'Management of neurosurgical trauma involves specialized emergency treatment for injuries affecting the brain, skull, spine, and nervous system. These injuries may result from road accidents, falls, sports injuries, or violence. Rapid diagnosis and intervention are essential to reduce neurological damage and improve survival.',
                'what_is' => 'Trauma management includes: Emergency neurological evaluation Brain and spinal imaging Surgical stabilization Intracranial pressure monitoring ICU coordination Rehabilitation planning Conditions commonly treated include: Head injury Skull fractures Brain hemorrhage Spinal cord trauma Nerve injuries Multidisciplinary teams work together to provide critical neurological care.',
                'symptoms' => [
            ['value' => 'Loss of consciousness'],
            ['value' => 'Severe head or spinal pain'],
            ['value' => 'Weakness or paralysis'],
            ['value' => 'Seizures'],
            ['value' => 'Confusion or memory loss'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Permanent disability'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Infection'],
            ['value' => 'Death in severe trauma'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue intensive neurological monitoring'],
            ['value' => 'Attend rehabilitation programs regularly'],
            ['value' => 'Follow medication schedules carefully'],
            ['value' => 'Monitor neurological recovery closely'],
            ['value' => 'Attend long-term neurosurgical follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Permanent disability'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Infection'],
            ['value' => 'Death in severe trauma'],
        ],
                'long_term_outlook' => 'Comprehensive neurosurgical trauma care improves survival and neurological recovery. Long-term outcomes depend on trauma severity and rehabilitation progress.',
                'conclusion' => '',
                'seo_title' => 'Management of Neurosurgical Trauma',
                'seo_description' => 'Management of neurosurgical trauma involves specialized emergency treatment for injuries affecting the brain, skull, spine, and nervous system. These injuries may result from road accidents, falls, sports injuries, or violence. Rapid diagnosis and intervention are essential to reduce neurological damage and improve survival.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
