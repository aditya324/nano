<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StereotacticBiopsyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Stereotactic Biopsy Equipment')],
            [
                'title' => 'Stereotactic Biopsy Equipment',
                'slug' => Str::slug('Stereotactic Biopsy Equipment'),
                'introduction' => 'Stereotactic biopsy equipment is an advanced neurosurgical system used to obtain precise tissue samples from deep or difficult-to-reach areas of the brain or spine. The technology uses computerized imaging guidance to improve accuracy while minimizing injury to surrounding tissue. It is commonly used for diagnosis of tumors and neurological lesions.',
                'what_is' => 'The system includes: Stereotactic frames or navigation systems Imaging-guided targeting software Precision biopsy needles MRI or CT integration Real-time localization tools The equipment is commonly used for: Brain tumor diagnosis Deep brain lesions Infection evaluation Neurological tissue sampling Complex intracranial abnormalities Accurate biopsy helps guide appropriate treatment planning.',
                'symptoms' => [
            ['value' => 'Brain masses'],
            ['value' => 'Seizures'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Deep brain lesions'],
            ['value' => 'Unexplained neurological symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Neurological injury'],
            ['value' => 'Inadequate tissue sampling'],
            ['value' => 'Seizure complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up pathology review appointments'],
            ['value' => 'Monitor for headaches or weakness'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Attend imaging follow-up evaluations'],
            ['value' => 'Report neurological changes immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Neurological injury'],
            ['value' => 'Inadequate tissue sampling'],
            ['value' => 'Seizure complications'],
        ],
                'long_term_outlook' => 'Stereotactic biopsy systems improve diagnostic accuracy and treatment planning in neurosurgery. Precise tissue diagnosis supports better long-term neurological management.',
                'conclusion' => '',
                'seo_title' => 'Stereotactic Biopsy Equipment',
                'seo_description' => 'Stereotactic biopsy equipment is an advanced neurosurgical system used to obtain precise tissue samples from deep or difficult-to-reach areas of the brain or spine. The technology uses computerized imaging guidance to improve accuracy while minimizing injury to surrounding tissue. It is commonly used for diagnosis of tumors and neurological lesions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
