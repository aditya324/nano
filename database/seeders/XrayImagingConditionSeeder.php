<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class XrayImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('X-ray Imaging')],
            [
                'name' => 'X-ray Imaging',
                'slug' => Str::slug('X-ray Imaging'),
                'h1' => 'X-ray Imaging',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'X-ray imaging is a commonly used diagnostic procedure that uses controlled radiation to create images of bones, joints, organs, and internal body structures. It helps healthcare professionals diagnose injuries, infections, abnormalities, and chronic medical conditions affecting different parts of the body.',
                'about_more' => '',
                'overview' => 'X-ray imaging is widely used for evaluating the chest, skeletal system, abdomen, and spine. Chest X-rays help assess lung and heart conditions, skeletal X-rays detect fractures and joint disorders, abdominal X-rays evaluate digestive and abdominal abnormalities, and spine X-rays help identify spinal injuries and degenerative conditions. X-ray procedures are quick, noninvasive, and commonly performed in hospitals, clinics, and emergency care settings.',
                'symptoms' => [
            ['value' => 'Chest pain or breathing difficulty'],
            ['value' => 'Bone pain, swelling, or suspected fractures'],
            ['value' => 'Abdominal pain or digestive discomfort'],
            ['value' => 'Back pain, neck pain, or spinal stiffness'],
            ['value' => 'Reduced mobility or unexplained physical symptoms'],
        ],
                'causes' => [
            ['value' => 'Detection of fractures and skeletal injuries'],
            ['value' => 'Evaluation of lung infections and chest conditions'],
            ['value' => 'Assessment of spinal alignment and degenerative disorders'],
            ['value' => 'Identification of abdominal obstruction or abnormalities'],
            ['value' => 'Monitoring recovery after injury, surgery, or treatment'],
        ],
                'risks' => [
            ['value' => 'Minimal exposure to ionizing radiation'],
            ['value' => 'Rare allergic reactions to contrast material when used'],
            ['value' => 'Limited imaging detail for certain soft tissue conditions'],
            ['value' => 'Need for additional imaging in complex cases'],
            ['value' => 'Special precautions required during pregnancy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'X-ray imaging supports diagnosis, treatment planning, surgical evaluation, and long-term monitoring of various medical conditions. It is commonly used in orthopedics, pulmonology, emergency medicine, gastroenterology, and spinal care to guide appropriate medical or surgical management.'],
            ['value' => 'Most patients can resume normal activities immediately'],
            ['value' => 'Follow-up imaging or additional tests may be recommended'],
            ['value' => 'Hydration may be advised after contrast studies'],
            ['value' => 'Patients should report unusual symptoms if contrast was used'],
            ['value' => 'Regular medical follow-up may be required depending on findings'],
        ],
                'recovery' => 'The long-term outlook with X-ray imaging is highly positive because it supports early diagnosis, accurate treatment planning, and effective monitoring of medical conditions. Timely imaging evaluation and appropriate medical follow-up can significantly improve treatment outcomes and overall patient care. _______________________________ 2. Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal, Vascular) Ultrasound (Abdomen, Pelvis, Obstetric, Musculoskeletal & Vascular) Procedures',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'X-ray Imaging',
                'meta_description' => 'X-ray imaging is a commonly used diagnostic procedure that uses controlled radiation to create images of bones, joints, organs, and internal body structures. It',
                'meta_keywords' => '',
            ]
        );
    }
}
