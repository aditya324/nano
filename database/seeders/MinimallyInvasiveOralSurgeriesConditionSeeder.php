<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MinimallyInvasiveOralSurgeriesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Minimally Invasive Oral Surgeries')],
            [
                'name' => 'Minimally Invasive Oral Surgeries',
                'slug' => Str::slug('Minimally Invasive Oral Surgeries'),
                'h1' => 'Minimally Invasive Oral Surgeries',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Minimally invasive oral surgeries are advanced surgical procedures performed using endoscopic, laser-assisted, and precision-guided techniques to diagnose and treat oral and maxillofacial conditions with reduced tissue trauma, smaller incisions, faster healing, and improved patient comfort. These procedures help enhance surgical precision while minimizing pain, swelling, and recovery time.',
                'about_more' => '',
                'overview' => 'Minimally invasive oral surgery techniques are commonly used for impacted tooth removal, cyst and tumor management, salivary gland procedures, temporomandibular joint surgery, soft tissue correction, and biopsy procedures. Endoscopic surgery uses small cameras and specialized instruments to access surgical areas with minimal disruption to surrounding tissues, while laser-assisted surgery uses focused light energy for precise cutting, coagulation, and tissue removal. These techniques improve visualization, reduce bleeding, and support quicker postoperative recovery.',
                'symptoms' => [
            ['value' => 'Impacted teeth or oral lesions requiring surgical treatment'],
            ['value' => 'Jaw pain, swelling, or restricted mouth opening'],
            ['value' => 'Salivary gland obstruction or cyst formation'],
            ['value' => 'Oral soft tissue growths, ulcers, or abnormal lesions'],
            ['value' => 'Functional or cosmetic oral and facial concerns needing surgical correction'],
        ],
                'causes' => [
            ['value' => 'Impacted or malposed teeth and jaw abnormalities'],
            ['value' => 'Oral cysts, tumors, or soft tissue lesions'],
            ['value' => 'Temporomandibular joint disorders and salivary gland conditions'],
            ['value' => 'Chronic oral infections or inflammatory diseases'],
            ['value' => 'Need for minimally traumatic oral and facial surgical procedures'],
        ],
                'risks' => [
            ['value' => 'Mild pain, swelling, or temporary discomfort after surgery'],
            ['value' => 'Infection or delayed healing in certain cases'],
            ['value' => 'Bleeding or tissue irritation during recovery'],
            ['value' => 'Temporary numbness or sensitivity near the surgical site'],
            ['value' => 'Requirement for additional procedures in complex conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Endoscopic oral and maxillofacial surgical procedures'],
            ['value' => 'Laser-assisted soft tissue and lesion removal surgeries'],
            ['value' => 'Minimally invasive biopsy and cyst management procedures'],
            ['value' => 'Precision-guided salivary gland and TMJ surgeries'],
            ['value' => 'Long-term postoperative care, rehabilitation, and follow-up support'],
        ],
                'recovery' => 'The long-term outlook for minimally invasive oral surgeries is generally very positive because modern endoscopic and laser-assisted techniques significantly reduce surgical trauma, improve healing, minimize scarring, and enhance patient recovery. Proper postoperative care, oral hygiene maintenance, regular follow-up, and adherence to medical advice are important for maintaining successful long-term functional and cosmetic outcomes. __________________ 23. Preoperative Planning with 3D Imaging / Virtual Surgical Planning Preoperative Planning with 3D Imaging / Virtual Surgical Planning Procedures',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Minimally Invasive Oral Surgeries',
                'meta_description' => 'Minimally invasive oral surgeries are advanced surgical procedures performed using endoscopic, laser-assisted, and precision-guided techniques to diagnose and t',
                'meta_keywords' => '',
            ]
        );
    }
}
