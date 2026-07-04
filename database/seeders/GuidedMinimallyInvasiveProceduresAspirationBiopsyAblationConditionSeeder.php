<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GuidedMinimallyInvasiveProceduresAspirationBiopsyAblationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Guided Minimally Invasive Procedures (Aspiration, Biopsy & Ablation)')],
            [
                'name' => 'Guided Minimally Invasive Procedures (Aspiration, Biopsy & Ablation)',
                'slug' => Str::slug('Guided Minimally Invasive Procedures (Aspiration, Biopsy & Ablation)'),
                'h1' => 'Guided Minimally Invasive Procedures (Aspiration, Biopsy & Ablation)',
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
            ['value' => 'Tumors, cysts, or abnormal tissue lesions'],
            ['value' => 'Infections causing abscesses or fluid accumulation'],
            ['value' => 'Chronic inflammatory or vascular conditions'],
            ['value' => 'Organ dysfunction requiring targeted intervention'],
            ['value' => 'Conditions needing tissue diagnosis or localized treatment'],
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
            ['value' => 'Image-guided aspiration of cysts or fluid collections'],
            ['value' => 'Minimally invasive biopsy for tissue diagnosis'],
            ['value' => 'Ablation therapy for tumors or abnormal tissues'],
            ['value' => 'Pain management and targeted therapeutic procedures'],
            ['value' => 'Long-term imaging follow-up and disease monitoring'],
        ],
                'recovery' => 'The long-term outlook with guided minimally invasive procedures is generally very positive because these techniques provide effective diagnosis and treatment with reduced pain, shorter hospital stay, faster recovery, and fewer complications. Regular follow-up care, imaging evaluation, and appropriate medical management are important for maintaining long-term treatment success and overall health.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Guided Minimally Invasive Procedures (Aspiration, Biopsy & Ablation)',
                'meta_description' => 'Guided minimally invasive procedures are specialized medical techniques performed using imaging guidance such as ultrasound, CT scan, fluoroscopy, or MRI to dia',
                'meta_keywords' => '',
            ]
        );
    }
}
