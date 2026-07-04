<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContrastEnhancedImagingCTMRIUltrasoundConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Contrast-Enhanced Imaging (CT, MRI & Ultrasound)')],
            [
                'name' => 'Contrast-Enhanced Imaging (CT, MRI & Ultrasound)',
                'slug' => Str::slug('Contrast-Enhanced Imaging (CT, MRI & Ultrasound)'),
                'h1' => 'Contrast-Enhanced Imaging (CT, MRI & Ultrasound)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Contrast-enhanced imaging is an advanced diagnostic procedure that uses special contrast agents along with imaging techniques such as CT, MRI, or ultrasound to improve visualization of organs, blood vessels, tissues, and internal body structures. These procedures help healthcare professionals obtain clearer and more detailed images for accurate diagnosis and treatment planning.',
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
            ['value' => 'Blood vessel abnormalities or circulation disorders'],
            ['value' => 'Tumors, cysts, or abnormal tissue growths'],
            ['value' => 'Organ inflammation or infections'],
            ['value' => 'Neurological and cardiovascular conditions'],
            ['value' => 'Chronic diseases requiring enhanced diagnostic evaluation'],
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
            ['value' => 'Contrast-enhanced CT, MRI, and ultrasound imaging evaluation'],
            ['value' => 'Detection and monitoring of tumors and vascular abnormalities'],
            ['value' => 'Assessment of organ inflammation, infection, or injury'],
            ['value' => 'Image-guided treatment planning and postoperative monitoring'],
            ['value' => 'Long-term follow-up imaging for chronic and complex conditions'],
        ],
                'recovery' => 'The long-term outlook with contrast-enhanced imaging is highly positive because these advanced imaging techniques improve diagnostic accuracy and support early detection of medical conditions. Timely imaging evaluation, regular follow-up, appropriate medical treatment, and preventive healthcare practices can significantly improve treatment outcomes and long-term health management.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Contrast-Enhanced Imaging (CT, MRI & Ultrasound)',
                'meta_description' => 'Contrast-enhanced imaging is an advanced diagnostic procedure that uses special contrast agents along with imaging techniques such as CT, MRI, or ultrasound to ',
                'meta_keywords' => '',
            ]
        );
    }
}
