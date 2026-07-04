<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CTAngiographyMRAngiographySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('CT Angiography / MR Angiography')],
            [
                'title' => 'CT Angiography / MR Angiography',
                'slug' => Str::slug('CT Angiography / MR Angiography'),
                'introduction' => 'CT angiography and MR angiography are advanced imaging techniques used to visualize arteries and veins throughout the body.',
                'what_is' => 'These imaging methods provide detailed vascular images that help diagnose aneurysms, arterial narrowing, dissections, and blood vessel abnormalities.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Aneurysm evaluation'],
            ['value' => 'Peripheral arterial disease imaging'],
            ['value' => 'Carotid artery assessment'],
            ['value' => 'Mesenteric ischemia diagnosis'],
            ['value' => 'Preoperative vascular planning'],
            ['value' => 'Postoperative graft monitoring'],
            ['value' => 'Treatments'],
            ['value' => 'These imaging facilities support treatment planning for aneurysm repair, angioplasty, vascular bypass surgery, carotid stenting, thrombectomy, and endovascular interventions.'],
            ['value' => 'Benefits'],
            ['value' => 'High-resolution vascular imaging'],
            ['value' => 'Accurate diagnosis'],
            ['value' => 'Minimally invasive'],
            ['value' => 'Useful for surgical planning'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Contrast-related kidney injury'],
            ['value' => 'Allergic reactions to dye'],
            ['value' => 'Radiation exposure with CT angiography'],
            ['value' => 'MRI restrictions in some patients'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Adequate hydration after contrast use'],
            ['value' => 'Monitor kidney function if needed'],
            ['value' => 'Follow medical advice regarding medications'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Advanced vascular imaging supports early diagnosis and improves treatment outcomes in vascular surgery patients.',
                'conclusion' => '',
                'seo_title' => 'CT Angiography / MR Angiography',
                'seo_description' => 'CT angiography and MR angiography are advanced imaging techniques used to visualize arteries and veins throughout the body.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
