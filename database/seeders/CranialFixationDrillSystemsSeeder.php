<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CranialFixationDrillSystemsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cranial Fixation & Drill Systems')],
            [
                'title' => 'Cranial Fixation & Drill Systems',
                'slug' => Str::slug('Cranial Fixation & Drill Systems'),
                'introduction' => 'Cranial fixation and drill systems are specialized neurosurgical tools used to stabilize the skull and safely create openings in the skull during brain surgery. These systems allow accurate surgical access while maintaining patient safety and surgical precision. They are essential in most cranial neurosurgical procedures.',
                'what_is' => 'The equipment includes: Skull fixation devices High-speed surgical drills Cranial perforators Bone flap systems Precision cutting instruments The systems are commonly used for: Craniotomy procedures Brain tumor surgery Aneurysm surgery Trauma surgery Skull base surgery Modern systems improve safety and reduce surgical complications.',
                'symptoms' => [
            ['value' => 'Brain tumors'],
            ['value' => 'Brain hemorrhage'],
            ['value' => 'Skull fractures'],
            ['value' => 'Vascular abnormalities'],
            ['value' => 'Intracranial pressure disorders'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Bone injury'],
            ['value' => 'Infection'],
            ['value' => 'Technical equipment malfunction'],
            ['value' => 'Neurological complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor surgical wound healing'],
            ['value' => 'Attend follow-up imaging evaluations'],
            ['value' => 'Continue neurological assessments'],
            ['value' => 'Avoid head trauma during recovery'],
            ['value' => 'Take medications as prescribed'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Bone injury'],
            ['value' => 'Infection'],
            ['value' => 'Technical equipment malfunction'],
            ['value' => 'Neurological complications'],
        ],
                'long_term_outlook' => 'Advanced cranial fixation systems improve neurosurgical precision and patient safety. Their use contributes to better surgical access and neurological outcomes.',
                'conclusion' => '',
                'seo_title' => 'Cranial Fixation & Drill Systems',
                'seo_description' => 'Cranial fixation and drill systems are specialized neurosurgical tools used to stabilize the skull and safely create openings in the skull during brain surgery. These systems allow accurate surgical access while maintaining patient safety and surgical precision. They are essential in most cranial neurosurgical procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
