<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AneurysmClippingSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Aneurysm Clipping Surgery')],
            [
                'title' => 'Aneurysm Clipping Surgery',
                'slug' => Str::slug('Aneurysm Clipping Surgery'),
                'introduction' => 'Aneurysm clipping surgery is a neurosurgical procedure performed to treat brain aneurysms by placing a small metal clip at the base of the aneurysm to prevent rupture or rebleeding. The procedure helps protect the brain from life-threatening hemorrhage and neurological damage. It is commonly performed for ruptured or high-risk intracranial aneurysms.',
                'what_is' => 'The surgery involves: Craniotomy for brain access Microsurgical identification of aneurysm Placement of aneurysm clip Preservation of normal blood vessels Prevention of future bleeding Advanced techniques include: Surgical microscopy Intraoperative vascular imaging Neuro-monitoring systems The procedure requires specialized neurosurgical expertise due to the delicate blood vessels involved.',
                'symptoms' => [
            ['value' => 'Sudden severe headache'],
            ['value' => 'Vision disturbances'],
            ['value' => 'Loss of consciousness'],
            ['value' => 'Neurological weakness'],
            ['value' => 'Seizures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Stroke'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Brain swelling'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU and neurological monitoring'],
            ['value' => 'Control blood pressure carefully'],
            ['value' => 'Attend follow-up imaging evaluations'],
            ['value' => 'Avoid smoking and vascular risk factors'],
            ['value' => 'Take prescribed medications regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Stroke'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Brain swelling'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
        ],
                'long_term_outlook' => 'Aneurysm clipping effectively prevents future aneurysm rupture in many patients. Long-term neurological recovery depends on whether bleeding occurred before surgery.',
                'conclusion' => '',
                'seo_title' => 'Aneurysm Clipping Surgery',
                'seo_description' => 'Aneurysm clipping surgery is a neurosurgical procedure performed to treat brain aneurysms by placing a small metal clip at the base of the aneurysm to prevent rupture or rebleeding. The procedure helps protect the brain from life-threatening hemorrhage and neurological damage. It is commonly performed for ruptured or high-risk intracranial aneurysms.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
