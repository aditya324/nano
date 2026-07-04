<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HighResolutionMRICTSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('High-Resolution MRI & CT')],
            [
                'title' => 'High-Resolution MRI & CT',
                'slug' => Str::slug('High-Resolution MRI & CT'),
                'introduction' => 'High-resolution MRI and CT imaging facilities provide detailed visualization of the brain, spine, blood vessels, and nervous system structures for diagnosis and surgical planning. These imaging technologies are essential in modern neurosurgery for detecting tumors, bleeding, spinal disorders, trauma, and neurological abnormalities. They help guide accurate treatment decisions and surgical strategies.',
                'what_is' => 'The imaging facility may include: High-field MRI scanners Advanced CT imaging systems Contrast-enhanced imaging Angiography support 3D reconstruction software MRI and CT scans are commonly used for: Brain tumors Stroke evaluation Spine disorders Head injury Vascular abnormalities Advanced imaging improves diagnostic accuracy and treatment planning.',
                'symptoms' => [
            ['value' => 'Severe headaches'],
            ['value' => 'Neurological weakness'],
            ['value' => 'Seizures'],
            ['value' => 'Spinal pain'],
            ['value' => 'Altered consciousness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Contrast-related reactions'],
            ['value' => 'Radiation exposure with CT'],
            ['value' => 'Claustrophobia during MRI'],
            ['value' => 'Delayed diagnosis if imaging is incomplete'],
            ['value' => 'Motion-related imaging artifacts'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend repeat imaging appointments if advised'],
            ['value' => 'Maintain hydration after contrast studies'],
            ['value' => 'Follow neurological treatment recommendations'],
            ['value' => 'Continue scheduled follow-up evaluations'],
            ['value' => 'Report worsening neurological symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Contrast-related reactions'],
            ['value' => 'Radiation exposure with CT'],
            ['value' => 'Claustrophobia during MRI'],
            ['value' => 'Delayed diagnosis if imaging is incomplete'],
            ['value' => 'Motion-related imaging artifacts'],
        ],
                'long_term_outlook' => 'Advanced MRI and CT imaging improve early diagnosis and surgical planning. Accurate imaging contributes to better neurological treatment outcomes and recovery.',
                'conclusion' => '',
                'seo_title' => 'High-Resolution MRI & CT',
                'seo_description' => 'High-resolution MRI and CT imaging facilities provide detailed visualization of the brain, spine, blood vessels, and nervous system structures for diagnosis and surgical planning. These imaging technologies are essential in modern neurosurgery for detecting tumors, bleeding, spinal disorders, trauma, and neurological abnormalities. They help guide accurate treatment decisions and surgical strategies.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
