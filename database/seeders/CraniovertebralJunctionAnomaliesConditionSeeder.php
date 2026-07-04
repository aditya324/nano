<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CraniovertebralJunctionAnomaliesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Craniovertebral Junction Anomalies')],
            [
                'name' => 'Craniovertebral Junction Anomalies',
                'slug' => Str::slug('Craniovertebral Junction Anomalies'),
                'h1' => 'Craniovertebral Junction Anomalies',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Craniovertebral junction anomalies are abnormalities involving the region where the skull meets the upper cervical spine. These abnormalities may compress the brainstem, spinal cord, or surrounding nerves, causing neurological symptoms.',
                'about_more' => '',
                'overview' => 'Craniovertebral junction anomalies are abnormalities involving the region where the skull meets the upper cervical spine. These abnormalities may compress the brainstem, spinal cord, or surrounding nerves, causing neurological symptoms.',
                'symptoms' => [
            ['value' => 'Neck pain and stiffness'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Difficulty balancing or walking'],
            ['value' => 'Headaches and dizziness'],
            ['value' => 'Swallowing or speech difficulties'],
        ],
                'causes' => [
            ['value' => 'Congenital developmental abnormalities'],
            ['value' => 'Genetic skeletal disorders'],
            ['value' => 'Trauma affecting the upper spine'],
            ['value' => 'Bone malformations of the skull base'],
            ['value' => 'Associated spinal instability'],
        ],
                'risks' => [
            ['value' => 'Brainstem compression'],
            ['value' => 'Progressive spinal cord injury'],
            ['value' => 'Respiratory or swallowing difficulties'],
            ['value' => 'Paralysis and neurological deficits'],
            ['value' => 'Sudden neurological deterioration'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI and CT craniovertebral imaging'],
            ['value' => 'Neurological monitoring and evaluation'],
            ['value' => 'Cervical immobilization in selected cases'],
            ['value' => 'Surgical decompression and stabilization'],
            ['value' => 'Rehabilitation and long-term follow-up'],
        ],
                'recovery' => 'The prognosis depends on severity and early treatment. Surgical correction often improves neurological function and prevents progression.',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Craniovertebral Junction Anomalies',
                'meta_description' => 'Craniovertebral junction anomalies are abnormalities involving the region where the skull meets the upper cervical spine. These abnormalities may compress the b',
                'meta_keywords' => '',
            ]
        );
    }
}
