<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GuidedMinimallyInvasiveProceduresConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Guided Minimally Invasive Procedures')],
            [
                'name' => 'Guided Minimally Invasive Procedures',
                'slug' => Str::slug('Guided Minimally Invasive Procedures'),
                'h1' => 'Guided Minimally Invasive Procedures',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Guided minimally invasive procedures are specialized medical techniques performed using imaging guidance such as ultrasound, CT scan, fluoroscopy, or MRI to diagnose and treat various medical conditions with minimal surgical intervention. Procedures such as aspiration, biopsy, and ablation help improve precision, reduce recovery time, and minimize complications compared to traditional surgery.',
                'about_more' => '',
                'overview' => 'Aspiration procedures are used to remove fluid, pus, or cystic collections from the body, biopsy procedures collect tissue samples for diagnostic evaluation, and ablation procedures destroy abnormal tissue such as tumors or lesions using heat, cold, or energy-based techniques. These procedures are commonly performed for infections, tumors, cysts, organ abnormalities, and chronic pain conditions. Real-time imaging guidance ensures accurate targeting and safe treatment delivery.',
                'symptoms' => [
            ['value' => 'Persistent swelling or fluid collection'],
            ['value' => 'Unexplained masses or abnormal tissue growths'],
            ['value' => 'Chronic pain or inflammatory conditions'],
            ['value' => 'Suspicion of infection or tumor formation'],
            ['value' => 'Symptoms requiring minimally invasive diagnostic evaluation or treatment'],
        ],
                'causes' => [
            ['value' => 'Aspiration of cysts, abscesses, or fluid collections'],
            ['value' => 'Image-guided tissue biopsy for diagnosis'],
            ['value' => 'Ablation of tumors or abnormal tissue growths'],
            ['value' => 'Minimally invasive pain management procedures'],
            ['value' => 'Long-term disease monitoring and treatment planning'],
        ],
                'risks' => [
            ['value' => 'Bleeding or infection at the procedure site'],
            ['value' => 'Temporary pain, swelling, or discomfort after the procedure'],
            ['value' => 'Rare injury to nearby tissues or organs'],
            ['value' => 'Allergic reactions to medications or contrast material'],
            ['value' => 'Need for repeat procedures in certain conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Guided minimally invasive procedures support accurate diagnosis, targeted treatment, and faster recovery across multiple medical specialties. They are commonly used in oncology, pain management, vascular medicine, orthopedics, gastroenterology, and infection management to reduce surgical risk and improve treatment outcomes.'],
            ['value' => 'Monitoring for pain, swelling, bleeding, or fever after the procedure'],
            ['value' => 'Following wound care and medication instructions carefully'],
            ['value' => 'Avoiding strenuous activities temporarily if advised'],
            ['value' => 'Attending follow-up imaging or specialist consultations'],
            ['value' => 'Reporting unusual symptoms or complications promptly'],
        ],
                'recovery' => 'The long-term outlook with guided minimally invasive procedures is generally very positive because these techniques provide effective diagnosis and treatment with reduced pain, shorter hospital stay, faster recovery, and fewer complications. Regular follow-up care and ongoing medical monitoring are important for maintaining long-term treatment success and overall health. ______________________________ 15. Contrast-Enhanced Imaging (CT, MRI, Ultrasound) Contrast-Enhanced Imaging (CT, MRI & Ultrasound) Procedures',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Guided Minimally Invasive Procedures',
                'meta_description' => 'Guided minimally invasive procedures are specialized medical techniques performed using imaging guidance such as ultrasound, CT scan, fluoroscopy, or MRI to dia',
                'meta_keywords' => '',
            ]
        );
    }
}
