<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntracranialHemorrhageConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Intracranial Hemorrhage')],
            [
                'name' => 'Intracranial Hemorrhage',
                'slug' => Str::slug('Intracranial Hemorrhage'),
                'h1' => 'Intracranial Hemorrhage',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Intracranial hemorrhage refers to bleeding within the skull, which can occur inside the brain tissue or surrounding spaces. It is a medical emergency that can rapidly increase pressure on the brain and damage neurological structures.',
                'about_more' => '',
                'overview' => 'Intracranial hemorrhage refers to bleeding within the skull, which can occur inside the brain tissue or surrounding spaces. It is a medical emergency that can rapidly increase pressure on the brain and damage neurological structures.',
                'symptoms' => [
            ['value' => 'Sudden severe headache'],
            ['value' => 'Vomiting and confusion'],
            ['value' => 'Weakness or paralysis'],
            ['value' => 'Loss of consciousness'],
            ['value' => 'Seizures or speech difficulties'],
        ],
                'causes' => [
            ['value' => 'Severe head injury or trauma'],
            ['value' => 'Uncontrolled high blood pressure'],
            ['value' => 'Ruptured brain aneurysms'],
            ['value' => 'Blood clotting disorders or anticoagulant use'],
            ['value' => 'Brain tumors or vascular malformations'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and compression'],
            ['value' => 'Stroke-like neurological deficits'],
            ['value' => 'Seizures and cognitive impairment'],
            ['value' => 'Permanent disability or paralysis'],
            ['value' => 'Life-threatening brain herniation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency brain imaging and ICU monitoring'],
            ['value' => 'Blood pressure and bleeding control'],
            ['value' => 'Neurosurgical evacuation of blood collections'],
            ['value' => 'Medications to reduce brain swelling'],
            ['value' => 'Rehabilitation and neurological recovery care'],
        ],
                'recovery' => 'Prompt diagnosis and emergency neurosurgical treatment improve survival and neurological recovery. Severe bleeding may result in long-term disability.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Intracranial Hemorrhage',
                'meta_description' => 'Intracranial hemorrhage refers to bleeding within the skull, which can occur inside the brain tissue or surrounding spaces. It is a medical emergency that can r',
                'meta_keywords' => '',
            ]
        );
    }
}
