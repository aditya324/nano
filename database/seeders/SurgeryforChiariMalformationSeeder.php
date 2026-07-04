<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgeryforChiariMalformationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgery for Chiari Malformation')],
            [
                'title' => 'Surgery for Chiari Malformation',
                'slug' => Str::slug('Surgery for Chiari Malformation'),
                'introduction' => 'Surgery for Chiari malformation is a neurosurgical procedure performed to relieve pressure caused by downward displacement of brain tissue into the spinal canal. The condition can interfere with cerebrospinal fluid flow and compress neurological structures. Surgery helps reduce symptoms and improve neurological function.',
                'what_is' => 'The procedure commonly involves: Posterior fossa decompression Removal of small portions of bone Restoration of CSF circulation Relief of brainstem compression Dural expansion procedures when necessary The surgery is performed for symptomatic Chiari malformations causing neurological complications. MRI imaging helps guide surgical planning and postoperative monitoring.',
                'symptoms' => [
            ['value' => 'Severe headaches'],
            ['value' => 'Neck pain'],
            ['value' => 'Balance problems'],
            ['value' => 'Numbness or weakness'],
            ['value' => 'Difficulty swallowing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'CSF leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Persistent symptoms'],
            ['value' => 'Neurological complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy strain during recovery'],
            ['value' => 'Attend follow-up MRI evaluations'],
            ['value' => 'Continue rehabilitation if advised'],
            ['value' => 'Monitor for worsening headaches or weakness'],
            ['value' => 'Take medications as prescribed'],
        ],
                'surgery_risks' => [
            ['value' => 'CSF leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Persistent symptoms'],
            ['value' => 'Neurological complications'],
        ],
                'long_term_outlook' => 'Chiari decompression surgery improves symptoms and neurological function in many patients. Long-term outcomes depend on the severity of neurological compression and postoperative recovery.',
                'conclusion' => '',
                'seo_title' => 'Surgery for Chiari Malformation',
                'seo_description' => 'Surgery for Chiari malformation is a neurosurgical procedure performed to relieve pressure caused by downward displacement of brain tissue into the spinal canal. The condition can interfere with cerebrospinal fluid flow and compress neurological structures. Surgery helps reduce symptoms and improve neurological function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
