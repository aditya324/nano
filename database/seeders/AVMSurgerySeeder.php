<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AVMSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('AVM Surgery')],
            [
                'title' => 'AVM Surgery',
                'slug' => Str::slug('AVM Surgery'),
                'introduction' => 'AVM (Arteriovenous Malformation) surgery is a neurosurgical procedure performed to remove abnormal tangles of blood vessels connecting arteries and veins within the brain or spinal cord. AVMs can cause bleeding, seizures, headaches, and neurological deficits. Surgical treatment aims to eliminate the risk of hemorrhage and neurological complications.',
                'what_is' => 'The procedure may involve: Microsurgical AVM removal Craniotomy access Blood vessel isolation and disconnection Bleeding control techniques Intraoperative vascular imaging Treatment planning depends on: AVM size Location Bleeding history Neurological involvement Some patients may also require embolization or radiosurgery as part of treatment.',
                'symptoms' => [
            ['value' => 'Seizures'],
            ['value' => 'Sudden brain hemorrhage'],
            ['value' => 'Headaches'],
            ['value' => 'Weakness or numbness'],
            ['value' => 'Vision or speech disturbances'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Stroke'],
            ['value' => 'Seizures'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular imaging follow-up appointments'],
            ['value' => 'Continue seizure medications if prescribed'],
            ['value' => 'Monitor neurological symptoms carefully'],
            ['value' => 'Participate in rehabilitation if needed'],
            ['value' => 'Maintain blood pressure control'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Stroke'],
            ['value' => 'Seizures'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
        ],
                'long_term_outlook' => 'Successful AVM surgery significantly reduces the risk of future brain bleeding. Long-term outcomes depend on AVM size, location, and neurological condition before surgery.',
                'conclusion' => '',
                'seo_title' => 'AVM Surgery',
                'seo_description' => 'AVM (Arteriovenous Malformation) surgery is a neurosurgical procedure performed to remove abnormal tangles of blood vessels connecting arteries and veins within the brain or spinal cord. AVMs can cause bleeding, seizures, headaches, and neurological deficits. Surgical treatment aims to eliminate the risk of hemorrhage and neurological complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
