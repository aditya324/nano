<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UltrasoundAbdomenPelvisObstetricMusculoskeletalVascularConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal & Vascular)')],
            [
                'name' => 'Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal & Vascular)',
                'slug' => Str::slug('Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal & Vascular)'),
                'h1' => 'Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal & Vascular)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ultrasound imaging is a noninvasive diagnostic procedure that uses high-frequency sound waves to create real-time images of internal organs, soft tissues, muscles, joints, blood vessels, and developing fetuses. It is widely used because it is safe, painless, radiation-free, and highly effective for evaluating a wide range of medical conditions.',
                'about_more' => '',
                'overview' => 'Ultrasound procedures are commonly performed for abdominal, pelvic, obstetric, musculoskeletal, and vascular evaluations. Abdominal ultrasound helps assess organs such as the liver, kidneys, gallbladder, and pancreas, while pelvic ultrasound evaluates reproductive and pelvic structures. Obstetric ultrasound monitors fetal growth and pregnancy health, musculoskeletal ultrasound examines muscles, tendons, and joints, and vascular ultrasound assesses blood flow and blood vessel abnormalities. Real-time imaging allows accurate diagnosis, treatment planning, and long-term monitoring.',
                'symptoms' => [
            ['value' => 'Abdominal pain or swelling'],
            ['value' => 'Pelvic pain or menstrual irregularities'],
            ['value' => 'Pregnancy-related concerns or fetal monitoring needs'],
            ['value' => 'Joint pain, muscle injury, or movement limitations'],
            ['value' => 'Leg swelling, circulation problems, or suspected vascular disorders'],
        ],
                'causes' => [
            ['value' => 'Organ inflammation, infection, or structural abnormalities'],
            ['value' => 'Pregnancy monitoring and fetal development assessment'],
            ['value' => 'Muscle, tendon, or ligament injuries'],
            ['value' => 'Blood vessel narrowing, clots, or circulation disorders'],
            ['value' => 'Cysts, tumors, stones, or fluid collections affecting organs or soft tissues'],
        ],
                'risks' => [
            ['value' => 'Minimal discomfort during the examination'],
            ['value' => 'Temporary pressure sensation from the ultrasound probe'],
            ['value' => 'Limited imaging quality in some deep or air-filled structures'],
            ['value' => 'Need for additional imaging in complex conditions'],
            ['value' => 'Rare difficulty obtaining clear images in certain individuals'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Diagnostic abdominal, pelvic, obstetric, musculoskeletal, and vascular ultrasound evaluation'],
            ['value' => 'Image-guided procedures such as biopsy or fluid drainage'],
            ['value' => 'Monitoring pregnancy and fetal development'],
            ['value' => 'Assessment and follow-up of vascular and circulation disorders'],
            ['value' => 'Long-term monitoring of organ, joint, and soft tissue conditions'],
        ],
                'recovery' => 'The long-term outlook with ultrasound imaging is highly positive because it supports safe, accurate, and radiation-free diagnosis and monitoring of numerous medical conditions. Early detection, timely medical intervention, regular follow-up, and preventive healthcare practices help improve treatment outcomes and maintain long-term health and well-being.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal & Vascular)',
                'meta_description' => 'Ultrasound imaging is a noninvasive diagnostic procedure that uses high-frequency sound waves to create real-time images of internal organs, soft tissues, muscl',
                'meta_keywords' => '',
            ]
        );
    }
}
