<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicroscopicBrainTumorExcisionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Microscopic Brain Tumor Excision')],
            [
                'title' => 'Microscopic Brain Tumor Excision',
                'slug' => Str::slug('Microscopic Brain Tumor Excision'),
                'introduction' => 'Microscopic brain tumor excision is an advanced neurosurgical procedure in which brain tumors are removed using high-powered surgical microscopes and precision microsurgical techniques. Microscopic surgery allows neurosurgeons to remove tumors more accurately while preserving healthy brain tissue and important neurological structures. The procedure improves surgical safety and outcomes.',
                'what_is' => 'The surgery includes: Detailed MRI-based surgical planning Microsurgical tumor removal Use of operating microscopes Precision brain tissue dissection Intraoperative neurological monitoring Microscopic techniques are used for: Benign brain tumors Malignant tumors Deep-seated brain lesions Skull-base tumors The procedure helps improve tumor removal while reducing damage to surrounding brain tissue.',
                'symptoms' => [
            ['value' => 'Persistent headaches'],
            ['value' => 'Seizures'],
            ['value' => 'Weakness or numbness'],
            ['value' => 'Vision disturbances'],
            ['value' => 'Speech or memory problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Tumor recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue neurological monitoring carefully'],
            ['value' => 'Attend follow-up MRI evaluations'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Participate in rehabilitation if needed'],
            ['value' => 'Monitor for seizures or neurological changes'],
        ],
                'surgery_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Tumor recurrence'],
        ],
                'long_term_outlook' => 'Microscopic brain tumor excision improves surgical precision and neurological preservation. Long-term outcomes depend on tumor type, location, and completeness of tumor removal.',
                'conclusion' => '',
                'seo_title' => 'Microscopic Brain Tumor Excision',
                'seo_description' => 'Microscopic brain tumor excision is an advanced neurosurgical procedure in which brain tumors are removed using high-powered surgical microscopes and precision microsurgical techniques. Microscopic surgery allows neurosurgeons to remove tumors more accurately while preserving healthy brain tissue and important neurological structures. The procedure improves surgical safety and outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
