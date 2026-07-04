<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UltrasoundImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ultrasound Imaging')],
            [
                'name' => 'Ultrasound Imaging',
                'slug' => Str::slug('Ultrasound Imaging'),
                'h1' => 'Ultrasound Imaging',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ultrasound imaging is a noninvasive diagnostic procedure that uses high-frequency sound waves to create real-time images of internal organs, blood vessels, muscles, joints, and developing fetuses. It is widely used for safe, painless, and radiation-free evaluation of various medical conditions across multiple specialties.',
                'about_more' => '',
                'overview' => 'Ultrasound procedures are commonly used for abdominal, pelvic, obstetric, musculoskeletal, and vascular evaluations. Abdominal ultrasound helps assess organs such as the liver, gallbladder, kidneys, and pancreas, while pelvic ultrasound evaluates reproductive organs and pelvic structures. Obstetric ultrasound monitors fetal growth and pregnancy health, musculoskeletal ultrasound examines muscles, tendons, and joints, and vascular ultrasound assesses blood flow and blood vessel abnormalities. Ultrasound imaging provides real-time visualization that supports diagnosis, treatment planning, and follow-up care.',
                'symptoms' => [
            ['value' => 'Abdominal or pelvic pain'],
            ['value' => 'Swelling, lumps, or soft tissue abnormalities'],
            ['value' => 'Pregnancy-related concerns or fetal monitoring needs'],
            ['value' => 'Joint pain, muscle injury, or movement limitations'],
            ['value' => 'Circulation problems, swelling, or suspected vascular disorders'],
        ],
                'causes' => [
            ['value' => 'Evaluation of abdominal and pelvic organs'],
            ['value' => 'Monitoring fetal growth and pregnancy development'],
            ['value' => 'Detection of cysts, tumors, stones, or fluid collections'],
            ['value' => 'Assessment of muscles, tendons, ligaments, and joints'],
            ['value' => 'Evaluation of blood flow, clots, or vascular blockages'],
        ],
                'risks' => [
            ['value' => 'Minimal discomfort during the procedure'],
            ['value' => 'Rare difficulty obtaining clear images in certain individuals'],
            ['value' => 'Need for additional imaging in complex conditions'],
            ['value' => 'Temporary pressure discomfort during scanning'],
            ['value' => 'Limited evaluation of certain deep or air-filled structures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound imaging is used for diagnostic evaluation, image-guided procedures, pregnancy monitoring, vascular assessment, and follow-up care. It also supports minimally invasive procedures such as biopsies, fluid drainage, and therapeutic interventions guided by real-time imaging.'],
            ['value' => 'Most individuals can resume normal activities immediately'],
            ['value' => 'Follow-up imaging or specialist consultation may be recommended'],
            ['value' => 'Hydration and dietary instructions may be advised for certain scans'],
            ['value' => 'Patients should discuss abnormal findings with their healthcare provider'],
            ['value' => 'Regular monitoring may be required depending on the diagnosis'],
        ],
                'recovery' => 'The long-term outlook with ultrasound imaging is highly positive because it supports early diagnosis, safe monitoring, and accurate assessment of a wide range of medical conditions. Regular imaging follow-up and timely medical care can significantly improve treatment planning, disease monitoring, and overall patient outcomes. __________________________ 3. Computed Tomography (CT) Scan (Head, Chest, Abdomen, Pelvis) Computed Tomography (CT) Scan (Head, Chest, Abdomen & Pelvis) Procedures',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Ultrasound Imaging',
                'meta_description' => 'Ultrasound imaging is a noninvasive diagnostic procedure that uses high-frequency sound waves to create real-time images of internal organs, blood vessels, musc',
                'meta_keywords' => '',
            ]
        );
    }
}
