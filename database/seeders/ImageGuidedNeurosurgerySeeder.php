<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImageGuidedNeurosurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Image-Guided Neurosurgery')],
            [
                'title' => 'Image-Guided Neurosurgery',
                'slug' => Str::slug('Image-Guided Neurosurgery'),
                'introduction' => 'Image-guided neurosurgery is an advanced surgical technology that uses real-time imaging and computer-assisted navigation to improve precision during brain and spine surgery. The system helps neurosurgeons accurately identify surgical targets while minimizing damage to healthy tissue. It significantly improves surgical safety and accuracy.',
                'what_is' => 'The technology includes: MRI and CT-based navigation systems Real-time surgical guidance Brain mapping integration Precision localization tools Minimally invasive surgical assistance Image-guided systems are used in: Brain tumor surgery Spine surgery Biopsy procedures Skull base surgery Deep brain lesion treatment The technology improves surgical planning and helps reduce complications.',
                'symptoms' => [
            ['value' => 'Brain tumors'],
            ['value' => 'Complex spinal disorders'],
            ['value' => 'Deep-seated neurological lesions'],
            ['value' => 'Skull base abnormalities'],
            ['value' => 'Neurological compression symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Technical equipment limitations'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Need for additional surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend imaging follow-up appointments'],
            ['value' => 'Continue neurological rehabilitation if needed'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Monitor neurological symptoms carefully'],
            ['value' => 'Maintain regular neurosurgical follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Technical equipment limitations'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Need for additional surgery'],
        ],
                'long_term_outlook' => 'Image-guided neurosurgery improves surgical precision and neurological preservation. Advanced technology contributes to safer procedures and better long-term recovery outcomes.',
                'conclusion' => '',
                'seo_title' => 'Image-Guided Neurosurgery',
                'seo_description' => 'Image-guided neurosurgery is an advanced surgical technology that uses real-time imaging and computer-assisted navigation to improve precision during brain and spine surgery. The system helps neurosurgeons accurately identify surgical targets while minimizing damage to healthy tissue. It significantly improves surgical safety and accuracy.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
