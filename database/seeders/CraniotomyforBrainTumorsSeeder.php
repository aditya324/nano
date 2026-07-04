<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CraniotomyforBrainTumorsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Craniotomy for Brain Tumors')],
            [
                'title' => 'Craniotomy for Brain Tumors',
                'slug' => Str::slug('Craniotomy for Brain Tumors'),
                'introduction' => 'Craniotomy for brain tumors is a major neurosurgical procedure in which a section of the skull is temporarily removed to access and remove a brain tumor. The surgery helps reduce pressure on the brain, relieve neurological symptoms, and improve survival or quality of life. It may be performed for benign or malignant brain tumors.',
                'what_is' => 'The procedure involves: Detailed brain imaging and surgical planning General anesthesia Temporary removal of a skull bone flap Microsurgical tumor removal Brain tissue preservation Replacement of the skull bone after surgery Advanced technologies may include: Surgical microscopes Neuronavigation systems Intraoperative monitoring Brain mapping techniques The extent of tumor removal depends on tumor location, size, and involvement of critical brain structures.',
                'symptoms' => [
            ['value' => 'Persistent headaches'],
            ['value' => 'Seizures'],
            ['value' => 'Weakness or paralysis'],
            ['value' => 'Vision or speech problems'],
            ['value' => 'Memory or personality changes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Seizures after surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Intensive neurological monitoring after surgery'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Attend imaging and follow-up evaluations'],
            ['value' => 'Participate in rehabilitation if needed'],
            ['value' => 'Monitor for fever, weakness, or seizures'],
        ],
                'surgery_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Seizures after surgery'],
        ],
                'long_term_outlook' => 'Successful tumor excision can significantly improve neurological symptoms and quality of life. Long-term outcomes depend on tumor type, extent of removal, and additional treatments such as radiotherapy or chemotherapy.',
                'conclusion' => '',
                'seo_title' => 'Craniotomy for Brain Tumors',
                'seo_description' => 'Craniotomy for brain tumors is a major neurosurgical procedure in which a section of the skull is temporarily removed to access and remove a brain tumor. The surgery helps reduce pressure on the brain, relieve neurological symptoms, and improve survival or quality of life. It may be performed for benign or malignant brain tumors.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
