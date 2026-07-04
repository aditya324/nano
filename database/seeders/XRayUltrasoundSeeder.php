<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class XRayUltrasoundSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('X-Ray / Ultrasound')],
            [
                'title' => 'X-Ray / Ultrasound',
                'slug' => Str::slug('X-Ray / Ultrasound'),
                'introduction' => 'X-ray and ultrasound are commonly used diagnostic imaging procedures that help healthcare providers evaluate internal organs, bones, soft tissues, blood vessels, and other body structures. These imaging techniques assist in the early detection, diagnosis, monitoring, and treatment planning of a wide range of medical conditions. While X-rays use small amounts of radiation to create images, ultrasound uses high-frequency sound waves and does not involve radiation exposure.',
                'what_is' => 'X-rays are widely used to assess bones, joints, chest conditions, lung infections, fractures, and certain abdominal abnormalities. Ultrasound imaging provides real-time visualization of internal organs such as the liver, kidneys, gallbladder, thyroid, heart, reproductive organs, and blood vessels. Ultrasound is also commonly used during pregnancy for fetal monitoring and in vascular studies to assess blood flow. Both procedures are non-invasive, quick, widely available, and commonly performed in hospitals, diagnostic centers, emergency departments, and outpatient clinics to support accurate diagnosis and ongoing disease monitoring.',
                'symptoms' => [
            ['value' => 'Chest pain or breathing difficulty'],
            ['value' => 'Bone pain, injury, or suspected fracture'],
            ['value' => 'Abdominal pain, swelling, or digestive concerns'],
            ['value' => 'Pelvic pain or reproductive health issues'],
            ['value' => 'Persistent cough, fluid buildup, or unexplained medical symptoms'],
        ],
                'causes' => [
            ['value' => 'Chest pain, breathing difficulty, or persistent cough'],
            ['value' => 'Bone injuries, fractures, or joint pain'],
            ['value' => 'Abdominal pain, swelling, or digestive problems'],
            ['value' => 'Kidney stones, gallbladder disease, or urinary symptoms'],
            ['value' => 'Pregnancy monitoring or evaluation of reproductive health conditions'],
        ],
                'condition_risks' => [
            ['value' => 'Minimal radiation exposure during X-ray procedures'],
            ['value' => 'Delayed diagnosis if imaging is not performed when clinically required'],
            ['value' => 'Missed fractures, organ abnormalities, or internal conditions without proper evaluation'],
            ['value' => 'Pregnancy-related imaging precautions may be necessary'],
            ['value' => 'Need for additional advanced imaging in complex medical conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'X-ray and ultrasound imaging support accurate diagnosis, treatment planning, disease monitoring, and preventive healthcare management. These procedures help guide treatment for fractures, arthritis, respiratory infections, heart enlargement, abdominal disorders, kidney disease, liver conditions, gallstones, vascular abnormalities, gynecological concerns, and many other medical conditions. Depending on the findings, treatment may include medications, physiotherapy, surgical evaluation, rehabilitation, lifestyle modification, specialist referral, or additional diagnostic investigations. Patients may also benefit from follow-up imaging, preventive screening, and continuous medical monitoring to support recovery and long-term health management.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Review and interpretation of imaging findings'],
            ['value' => 'Follow-up imaging when clinically indicated'],
            ['value' => 'Additional diagnostic evaluation if abnormalities are detected'],
            ['value' => 'Coordination with specialist care and treatment planning'],
            ['value' => 'Ongoing monitoring based on the underlying medical condition'],
        ],
                'surgery_risks' => [
            ['value' => 'Minimal radiation exposure during X-ray procedures'],
            ['value' => 'Delayed diagnosis if imaging is not performed when clinically required'],
            ['value' => 'Missed fractures, organ abnormalities, or internal conditions without proper evaluation'],
            ['value' => 'Pregnancy-related imaging precautions may be necessary'],
            ['value' => 'Need for additional advanced imaging in complex medical conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'X-ray and ultrasound imaging support accurate diagnosis, treatment planning, disease monitoring, and preventive healthcare management. These procedures help guide treatment for fractures, arthritis, respiratory infections, heart enlargement, abdominal disorders, kidney disease, liver conditions, gallstones, vascular abnormalities, gynecological concerns, and many other medical conditions. Depending on the findings, treatment may include medications, physiotherapy, surgical evaluation, rehabilitation, lifestyle modification, specialist referral, or additional diagnostic investigations. Patients may also benefit from follow-up imaging, preventive screening, and continuous medical monitoring to support recovery and long-term health management.'],
        ],
                'long_term_outlook' => 'X-ray and ultrasound are safe, effective, and widely trusted diagnostic imaging tools that play an important role in early disease detection, treatment guidance, and long-term health monitoring. Timely imaging evaluation, accurate interpretation, preventive healthcare, regular medical follow-up, and appropriate treatment planning significantly help improve diagnosis, support recovery outcomes, reduce complications, preserve organ and musculoskeletal health, and enhance overall well-being.',
                'conclusion' => '',
                'seo_title' => 'X-Ray / Ultrasound',
                'seo_description' => 'X-ray and ultrasound are commonly used diagnostic imaging procedures that help healthcare providers evaluate internal organs, bones, soft tissues, blood vessels, and other body structures. These imaging techniques assist in the early detection, diagnosis, monitoring, and treatment planning of a wide range of medical conditions. While X-rays use small amounts of radiation to create images, ultrasound uses high-frequency sound waves and does not involve radiation exposure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
