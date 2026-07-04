<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImagingforSurgeryCArmUltrasoundSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Imaging for Surgery (C-Arm / Ultrasound)')],
            [
                'title' => 'Imaging for Surgery (C-Arm / Ultrasound)',
                'slug' => Str::slug('Imaging for Surgery (C-Arm / Ultrasound)'),
                'introduction' => 'Imaging systems such as C-arm fluoroscopy and surgical ultrasound provide real-time visualization during surgical procedures to improve accuracy and safety.',
                'what_is' => 'These imaging technologies help surgeons: Identify anatomical structures Guide instrument placement Monitor surgical progress Reduce complications Applications include: Trauma surgery Vascular procedures Gallbladder surgery Urological interventions Orthopedic procedures Real-time imaging improves surgical precision and reduces operative risks.',
                'symptoms' => [
            ['value' => 'Conditions requiring image-guided surgery'],
            ['value' => 'Trauma or fracture-related surgery'],
            ['value' => 'Vascular or biliary obstruction'],
            ['value' => 'Internal organ abnormalities'],
            ['value' => 'Complex minimally invasive procedures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Radiation exposure from fluoroscopy'],
            ['value' => 'Rare imaging inaccuracies'],
            ['value' => 'Technical equipment failure'],
            ['value' => 'Procedure delays due to equipment issues'],
            ['value' => 'Contrast-related complications in some cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend imaging follow-up if advised'],
            ['value' => 'Maintain hydration after contrast use'],
            ['value' => 'Follow surgical recovery instructions carefully'],
            ['value' => 'Monitor for pain or swelling'],
            ['value' => 'Attend scheduled surgical reviews'],
        ],
                'surgery_risks' => [
            ['value' => 'Radiation exposure from fluoroscopy'],
            ['value' => 'Rare imaging inaccuracies'],
            ['value' => 'Technical equipment failure'],
            ['value' => 'Procedure delays due to equipment issues'],
            ['value' => 'Contrast-related complications in some cases'],
        ],
                'long_term_outlook' => 'Advanced intraoperative imaging enhances surgical safety, improves procedural accuracy, and contributes to better long-term surgical outcomes.',
                'conclusion' => '',
                'seo_title' => 'Imaging for Surgery (C-Arm / Ultrasound)',
                'seo_description' => 'Imaging systems such as C-arm fluoroscopy and surgical ultrasound provide real-time visualization during surgical procedures to improve accuracy and safety.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
