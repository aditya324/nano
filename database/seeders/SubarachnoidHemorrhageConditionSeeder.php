<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubarachnoidHemorrhageConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Subarachnoid Hemorrhage')],
            [
                'name' => 'Subarachnoid Hemorrhage',
                'slug' => Str::slug('Subarachnoid Hemorrhage'),
                'h1' => 'Subarachnoid Hemorrhage',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Subarachnoid hemorrhage is a serious neurological emergency caused by bleeding into the space between the brain and the surrounding protective membranes. It most commonly occurs due to rupture of a brain aneurysm and can rapidly increase pressure inside the skull. Immediate neurosurgical and intensive care management are essential to reduce brain damage and improve survival.',
                'about_more' => '',
                'overview' => 'Subarachnoid hemorrhage is a serious neurological emergency caused by bleeding into the space between the brain and the surrounding protective membranes. It most commonly occurs due to rupture of a brain aneurysm and can rapidly increase pressure inside the skull. Immediate neurosurgical and intensive care management are essential to reduce brain damage and improve survival.',
                'symptoms' => [
            ['value' => 'Sudden severe “thunderclap” headache'],
            ['value' => 'Neck stiffness and sensitivity to light'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Loss of consciousness or confusion'],
            ['value' => 'Seizures or neurological weakness'],
        ],
                'causes' => [
            ['value' => 'Ruptured intracranial aneurysm'],
            ['value' => 'Head trauma or severe injury'],
            ['value' => 'Arteriovenous malformations (AVMs)'],
            ['value' => 'Uncontrolled high blood pressure'],
            ['value' => 'Blood vessel abnormalities or clotting disorders'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and increased intracranial pressure'],
            ['value' => 'Stroke due to blood vessel spasm'],
            ['value' => 'Hydrocephalus and CSF flow obstruction'],
            ['value' => 'Permanent neurological deficits'],
            ['value' => 'Coma or sudden death in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency CT brain imaging and angiography'],
            ['value' => 'Intensive care monitoring and stabilization'],
            ['value' => 'Surgical clipping or endovascular coiling of aneurysm'],
            ['value' => 'Medications to prevent vasospasm and seizures'],
            ['value' => 'Rehabilitation and neurological follow-up care'],
        ],
                'recovery' => 'Recovery depends on the amount of bleeding and speed of treatment. Early neurosurgical intervention improves survival and neurological recovery outcomes.',
                'sort_order' => 41,
                'is_active' => true,
                'meta_title' => 'Subarachnoid Hemorrhage',
                'meta_description' => 'Subarachnoid hemorrhage is a serious neurological emergency caused by bleeding into the space between the brain and the surrounding protective membranes. It mos',
                'meta_keywords' => '',
            ]
        );
    }
}
