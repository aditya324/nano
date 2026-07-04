<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdvancedNeuroOTwithLaminarFlowSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Advanced Neuro OT with Laminar Flow')],
            [
                'title' => 'Advanced Neuro OT with Laminar Flow',
                'slug' => Str::slug('Advanced Neuro OT with Laminar Flow'),
                'introduction' => 'An Advanced Neuro Operation Theatre (OT) with laminar flow is a highly specialized surgical environment designed for complex brain and spine surgeries under strict sterile conditions. Laminar airflow technology continuously circulates filtered air to reduce airborne contamination and minimize the risk of surgical infections. The facility supports precision neurosurgery using advanced imaging, monitoring, and microsurgical systems.',
                'what_is' => 'The neuro OT is equipped with: Laminar airflow sterilization systems Modular operation theatre design Advanced surgical lighting Neurosurgical operating tables Integrated anesthesia systems High-end neurosurgical equipment support The facility is used for: Brain tumor surgery Spine surgery Vascular neurosurgery Skull base procedures Emergency neurosurgical operations The sterile environment improves patient safety and surgical outcomes.',
                'symptoms' => [
            ['value' => 'Brain tumors'],
            ['value' => 'Spinal cord compression'],
            ['value' => 'Brain hemorrhage'],
            ['value' => 'Head injury'],
            ['value' => 'Complex neurological disorders'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical infection'],
            ['value' => 'Equipment-related technical issues'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Anesthesia-related risks'],
            ['value' => 'Extended surgical duration'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU monitoring if required'],
            ['value' => 'Maintain wound care carefully'],
            ['value' => 'Attend neurological follow-up appointments'],
            ['value' => 'Continue rehabilitation programs'],
            ['value' => 'Monitor for infection symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical infection'],
            ['value' => 'Equipment-related technical issues'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Anesthesia-related risks'],
            ['value' => 'Extended surgical duration'],
        ],
                'long_term_outlook' => 'Advanced neuro OT facilities improve surgical precision, infection control, and patient safety. Modern neurosurgical infrastructure contributes to better recovery and neurological outcomes.',
                'conclusion' => '',
                'seo_title' => 'Advanced Neuro OT with Laminar Flow',
                'seo_description' => 'An Advanced Neuro Operation Theatre (OT) with laminar flow is a highly specialized surgical environment designed for complex brain and spine surgeries under strict sterile conditions. Laminar airflow technology continuously circulates filtered air to reduce airborne contamination and minimize the risk of surgical infections. The facility supports precision neurosurgery using advanced imaging, monitoring, and microsurgical systems.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
