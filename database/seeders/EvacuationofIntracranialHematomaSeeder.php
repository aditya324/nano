<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EvacuationofIntracranialHematomaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Evacuation of Intracranial Hematoma')],
            [
                'title' => 'Evacuation of Intracranial Hematoma',
                'slug' => Str::slug('Evacuation of Intracranial Hematoma'),
                'introduction' => 'Evacuation of intracranial hematoma is a neurosurgical procedure performed to remove blood collections inside the skull caused by trauma, bleeding disorders, or ruptured blood vessels. Removing the hematoma helps reduce pressure on the brain and prevents further neurological damage. The procedure is often performed as an emergency surgery.',
                'what_is' => 'The surgery may involve: Craniotomy or burr hole access Removal of accumulated blood Control of active bleeding Brain pressure relief Intensive neurological monitoring Doctors perform hematoma evacuation for: Epidural hematoma Subdural hematoma Intracerebral hemorrhage Traumatic brain bleeding The surgical approach depends on hematoma size, location, and severity of brain compression.',
                'symptoms' => [
            ['value' => 'Severe headache'],
            ['value' => 'Loss of consciousness'],
            ['value' => 'Weakness or paralysis'],
            ['value' => 'Vomiting'],
            ['value' => 'Confusion or seizures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Re-bleeding'],
            ['value' => 'Brain swelling'],
            ['value' => 'Infection'],
            ['value' => 'Seizures'],
            ['value' => 'Neurological deficits'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain close neurological observation'],
            ['value' => 'Take medications regularly'],
            ['value' => 'Attend follow-up brain imaging evaluations'],
            ['value' => 'Participate in rehabilitation if required'],
            ['value' => 'Monitor for worsening neurological symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Re-bleeding'],
            ['value' => 'Brain swelling'],
            ['value' => 'Infection'],
            ['value' => 'Seizures'],
            ['value' => 'Neurological deficits'],
        ],
                'long_term_outlook' => 'Timely hematoma evacuation improves survival and neurological recovery. Long-term outcomes depend on the severity of bleeding and speed of treatment.',
                'conclusion' => '',
                'seo_title' => 'Evacuation of Intracranial Hematoma',
                'seo_description' => 'Evacuation of intracranial hematoma is a neurosurgical procedure performed to remove blood collections inside the skull caused by trauma, bleeding disorders, or ruptured blood vessels. Removing the hematoma helps reduce pressure on the brain and prevents further neurological damage. The procedure is often performed as an emergency surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
