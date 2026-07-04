<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InterventionalRadiologyProceduresBiopsyDrainageStentingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Interventional Radiology Procedures (Biopsy, Drainage & Stenting)')],
            [
                'name' => 'Interventional Radiology Procedures (Biopsy, Drainage & Stenting)',
                'slug' => Str::slug('Interventional Radiology Procedures (Biopsy, Drainage & Stenting)'),
                'h1' => 'Interventional Radiology Procedures (Biopsy, Drainage & Stenting)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Interventional radiology procedures are minimally invasive medical techniques performed using imaging guidance such as ultrasound, CT scan, fluoroscopy, or MRI to diagnose and treat a wide range of medical conditions. Procedures such as biopsy, drainage, and stenting help reduce the need for open surgery while improving precision, recovery time, and patient comfort.',
                'about_more' => '',
                'overview' => 'Image-guided biopsy procedures are used to collect tissue samples for diagnosis, drainage procedures help remove infected fluid or abscess collections, and stenting procedures are performed to open narrowed or blocked blood vessels or ducts. Interventional radiology is commonly used in oncology, vascular disease, abdominal disorders, infections, and organ-related conditions. These procedures are performed with small incisions or needle-based techniques under imaging guidance for accurate treatment delivery.',
                'symptoms' => [
            ['value' => 'Persistent pain or unexplained swelling'],
            ['value' => 'Abnormal masses or suspicious lesions'],
            ['value' => 'Fluid collection, abscess, or infection'],
            ['value' => 'Reduced blood flow or organ obstruction'],
            ['value' => 'Symptoms requiring minimally invasive diagnostic or therapeutic intervention'],
        ],
                'causes' => [
            ['value' => 'Tumors, cysts, or abnormal tissue growths'],
            ['value' => 'Infections causing fluid accumulation or abscess formation'],
            ['value' => 'Narrowing or blockage of blood vessels or ducts'],
            ['value' => 'Chronic inflammatory or vascular conditions'],
            ['value' => 'Organ dysfunction requiring image-guided intervention'],
        ],
                'risks' => [
            ['value' => 'Bleeding or infection at the procedure site'],
            ['value' => 'Temporary pain or swelling after intervention'],
            ['value' => 'Allergic reactions to contrast material or medications'],
            ['value' => 'Injury to nearby tissues or blood vessels in rare cases'],
            ['value' => 'Need for repeat procedures if the condition recurs or persists'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Image-guided tissue biopsy for diagnosis'],
            ['value' => 'Drainage of abscesses or fluid collections'],
            ['value' => 'Vascular stenting for narrowed or blocked blood vessels'],
            ['value' => 'Biliary, urinary, or gastrointestinal stenting procedures'],
            ['value' => 'Long-term imaging follow-up and minimally invasive treatment monitoring'],
        ],
                'recovery' => 'The long-term outlook with interventional radiology procedures is generally very positive because these minimally invasive techniques provide accurate diagnosis and effective treatment with shorter recovery times and fewer complications compared to traditional surgery. Regular follow-up, imaging evaluation, and appropriate medical care are important for maintaining long-term treatment success and overall health.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Interventional Radiology Procedures (Biopsy, Drainage & Stenting)',
                'meta_description' => 'Interventional radiology procedures are minimally invasive medical techniques performed using imaging guidance such as ultrasound, CT scan, fluoroscopy, or MRI ',
                'meta_keywords' => '',
            ]
        );
    }
}
