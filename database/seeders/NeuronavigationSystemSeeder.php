<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuronavigationSystemSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neuronavigation System')],
            [
                'title' => 'Neuronavigation System',
                'slug' => Str::slug('Neuronavigation System'),
                'introduction' => 'A neuronavigation system is a computer-assisted surgical guidance technology used during brain and spine surgery to improve surgical precision and localization. The system functions like a GPS for neurosurgeons, helping accurately identify deep or delicate structures during surgery. Neuronavigation improves safety and minimizes damage to healthy tissue.',
                'what_is' => 'The system includes: MRI and CT image integration Real-time surgical guidance 3D anatomical mapping Precision localization tools Intraoperative planning support Neuronavigation is commonly used for: Brain tumor surgery Spine surgery Biopsy procedures Skull base surgery Deep brain lesion treatment Advanced navigation systems improve surgical planning and intraoperative decision-making.',
                'symptoms' => [
            ['value' => 'Brain masses'],
            ['value' => 'Deep-seated tumors'],
            ['value' => 'Spinal abnormalities'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Complex cranial lesions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Technical calibration errors'],
            ['value' => 'Imaging limitations'],
            ['value' => 'Increased surgical setup time'],
            ['value' => 'Equipment malfunction'],
            ['value' => 'Bleeding or neurological complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue follow-up imaging evaluations'],
            ['value' => 'Attend neurological assessments regularly'],
            ['value' => 'Monitor for new neurological symptoms'],
            ['value' => 'Continue rehabilitation if necessary'],
            ['value' => 'Follow medication and recovery plans'],
        ],
                'surgery_risks' => [
            ['value' => 'Technical calibration errors'],
            ['value' => 'Imaging limitations'],
            ['value' => 'Increased surgical setup time'],
            ['value' => 'Equipment malfunction'],
            ['value' => 'Bleeding or neurological complications'],
        ],
                'long_term_outlook' => 'Neuronavigation systems improve surgical precision and neurological preservation. Their use contributes to safer procedures and improved long-term neurosurgical outcomes.',
                'conclusion' => '',
                'seo_title' => 'Neuronavigation System',
                'seo_description' => 'A neuronavigation system is a computer-assisted surgical guidance technology used during brain and spine surgery to improve surgical precision and localization. The system functions like a GPS for neurosurgeons, helping accurately identify deep or delicate structures during surgery. Neuronavigation improves safety and minimizes damage to healthy tissue.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
