<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContrastEnhancedImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Contrast-Enhanced Imaging')],
            [
                'name' => 'Contrast-Enhanced Imaging',
                'slug' => Str::slug('Contrast-Enhanced Imaging'),
                'h1' => 'Contrast-Enhanced Imaging',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Contrast-enhanced imaging is an advanced diagnostic procedure that uses special contrast agents along with imaging techniques such as CT, MRI, or ultrasound to improve visualization of organs, blood vessels, tissues, and abnormalities within the body. These procedures help healthcare professionals obtain clearer and more detailed images for accurate diagnosis and treatment planning.',
                'about_more' => '',
                'overview' => 'Contrast-enhanced CT scans use iodine-based contrast material to highlight blood vessels and internal organs, contrast-enhanced MRI uses specialized contrast agents to improve soft tissue visualization, and contrast-enhanced ultrasound uses microbubble contrast agents to evaluate blood flow and organ function in real time. These imaging techniques are commonly used to detect tumors, infections, vascular disorders, inflammation, organ abnormalities, and treatment response.',
                'symptoms' => [
            ['value' => 'Persistent pain or unexplained swelling'],
            ['value' => 'Neurological symptoms or severe headaches'],
            ['value' => 'Chest pain or circulation-related symptoms'],
            ['value' => 'Abdominal pain or organ-related abnormalities'],
            ['value' => 'Suspicion of tumors, infection, or vascular disease'],
        ],
                'causes' => [
            ['value' => 'Detection of tumors and abnormal tissue growths'],
            ['value' => 'Evaluation of blood vessels and circulation disorders'],
            ['value' => 'Assessment of organ inflammation or infection'],
            ['value' => 'Monitoring treatment response and disease progression'],
            ['value' => 'Preoperative planning and follow-up imaging evaluation'],
        ],
                'risks' => [
            ['value' => 'Allergic reactions to contrast material in some individuals'],
            ['value' => 'Temporary nausea, warmth, or discomfort after contrast injection'],
            ['value' => 'Rare kidney-related complications from certain contrast agents'],
            ['value' => 'Special precautions required during pregnancy or kidney disease'],
            ['value' => 'Claustrophobia or discomfort during MRI procedures in some patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Contrast-enhanced imaging supports accurate diagnosis, surgical planning, treatment monitoring, and long-term follow-up across multiple medical specialties. These procedures are widely used in oncology, cardiology, neurology, gastroenterology, vascular medicine, and emergency care to guide medical and interventional treatment decisions.'],
            ['value' => 'Drinking adequate fluids to help eliminate contrast material'],
            ['value' => 'Monitoring for allergic reactions or unusual symptoms after the procedure'],
            ['value' => 'Following dietary or medication instructions when advised'],
            ['value' => 'Resuming normal activities unless otherwise instructed'],
            ['value' => 'Attending follow-up consultations to review imaging results'],
        ],
                'recovery' => 'The long-term outlook with contrast-enhanced imaging is highly positive because these advanced imaging techniques improve diagnostic accuracy and support early detection of medical conditions. Timely imaging evaluation, regular follow-up, and appropriate medical management can significantly improve treatment outcomes and long-term health monitoring. ______________________ 16. Pediatric Imaging Protocols (Low Dose, Safety Measures) Pediatric Imaging Protocols (Low Dose & Safety Measures) Procedures',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Contrast-Enhanced Imaging',
                'meta_description' => 'Contrast-enhanced imaging is an advanced diagnostic procedure that uses special contrast agents along with imaging techniques such as CT, MRI, or ultrasound to ',
                'meta_keywords' => '',
            ]
        );
    }
}
