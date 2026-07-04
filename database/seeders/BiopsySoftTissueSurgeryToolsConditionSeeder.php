<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BiopsySoftTissueSurgeryToolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Biopsy & Soft Tissue Surgery Tools')],
            [
                'name' => 'Biopsy & Soft Tissue Surgery Tools',
                'slug' => Str::slug('Biopsy & Soft Tissue Surgery Tools'),
                'h1' => 'Biopsy & Soft Tissue Surgery Tools',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Biopsy and soft tissue surgery tools are specialized surgical instruments and devices used for diagnosing, excising, repairing, and managing abnormalities affecting the oral cavity, facial soft tissues, gums, mucosa, salivary glands, and surrounding maxillofacial structures. These tools support precision, minimal tissue trauma, effective bleeding control, and safe surgical outcomes.',
                'about_more' => '',
                'overview' => 'Soft tissue surgical procedures commonly include biopsy of oral lesions, cyst removal, excision of tumors, frenectomy, soft tissue reconstruction, periodontal surgery, and management of oral mucosal abnormalities. Specialized instruments such as biopsy punches, scalpels, tissue forceps, scissors, retractors, electrosurgical units, laser systems, and suturing tools are used to perform these procedures safely and accurately. Modern surgical technologies help improve diagnostic accuracy, healing, infection control, and cosmetic outcomes. Biopsy punches, scalpels, and precision cutting instruments Tissue forceps, scissors, and surgical retractors Electrocautery and soft tissue coagulation systems Laser-assisted soft tissue surgical devices Needle holders, suturing instruments, and sterile surgical trays',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Biopsy of oral lesions, cysts, and suspicious growths'],
            ['value' => 'Excision of benign or malignant soft tissue lesions'],
            ['value' => 'Gum and periodontal soft tissue procedures'],
            ['value' => 'Oral mucosal reconstruction and wound closure'],
            ['value' => 'Minor oral and maxillofacial soft tissue surgeries'],
        ],
                'risks' => [
            ['value' => 'Bleeding or infection during soft tissue procedures'],
            ['value' => 'Tissue damage or delayed wound healing in sensitive areas'],
            ['value' => 'Need for accurate biopsy sampling and histopathological diagnosis'],
            ['value' => 'Instrument contamination without proper sterilization protocols'],
            ['value' => 'Requirement for precise handling near nerves and blood vessels'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Biopsy and soft tissue surgery tools support oral pathology diagnosis, lesion excision, periodontal surgery, salivary gland procedures, reconstructive oral surgery, oral cancer diagnosis, and maxillofacial soft tissue management. These instruments improve surgical precision, diagnostic accuracy, patient safety, and postoperative healing outcomes.'],
            ['value' => 'Proper sterilization and maintenance of surgical instruments'],
            ['value' => 'Monitoring surgical sites for bleeding, infection, or delayed healing'],
            ['value' => 'Oral hygiene and wound care management after procedures'],
            ['value' => 'Histopathological evaluation and follow-up care when required'],
            ['value' => 'Regular inspection and calibration of powered surgical devices'],
        ],
                'recovery' => 'The long-term outlook with advanced biopsy and soft tissue surgery tools is highly positive because modern surgical technologies significantly improve precision, diagnostic efficiency, wound healing, and patient safety. Continuous advancements in minimally invasive instruments, laser-assisted surgery, and sterilization systems continue to enhance oral and maxillofacial surgical care and long-term clinical outcomes. ___________________ 175. Microsurgery & Fixation Devices Microsurgery & Fixation Devices Equipment',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Biopsy & Soft Tissue Surgery Tools',
                'meta_description' => 'Biopsy and soft tissue surgery tools are specialized surgical instruments and devices used for diagnosing, excising, repairing, and managing abnormalities affec',
                'meta_keywords' => '',
            ]
        );
    }
}
