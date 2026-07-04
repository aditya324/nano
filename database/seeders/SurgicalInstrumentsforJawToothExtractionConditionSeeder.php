<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalInstrumentsforJawToothExtractionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Surgical Instruments for Jaw / Tooth Extraction')],
            [
                'name' => 'Surgical Instruments for Jaw / Tooth Extraction',
                'slug' => Str::slug('Surgical Instruments for Jaw / Tooth Extraction'),
                'h1' => 'Surgical Instruments for Jaw / Tooth Extraction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Surgical instruments for jaw and tooth extraction are specialized dental and oral surgery tools designed for the safe removal of teeth, impacted teeth, bone fragments, and diseased oral tissues. These instruments support precision, controlled force application, soft tissue handling, and surgical efficiency during oral and maxillofacial procedures.',
                'about_more' => '',
                'overview' => 'Tooth and jaw extraction procedures may involve simple dental extractions, surgical removal of impacted teeth, jawbone procedures, fracture management, and reconstructive oral surgery. Specialized instruments such as extraction forceps, elevators, retractors, bone-cutting tools, surgical handpieces, and suturing instruments are used to safely remove teeth and manage surrounding bone and soft tissues. Modern surgical equipment improves procedural accuracy, patient safety, infection control, and postoperative recovery. Dental extraction forceps and elevators Surgical retractors and soft tissue instruments Bone-cutting burs, chisels, and surgical handpieces Curettes, suction devices, and irrigation systems Needle holders, suturing instruments, and surgical trays',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Extraction of damaged or infected teeth'],
            ['value' => 'Surgical removal of impacted wisdom teeth and canines'],
            ['value' => 'Jaw surgery and oral bone procedures'],
            ['value' => 'Management of jaw fractures and oral infections'],
            ['value' => 'Pre-implant and reconstructive oral surgery procedures'],
        ],
                'risks' => [
            ['value' => 'Risk of bleeding, infection, or soft tissue injury during procedures'],
            ['value' => 'Need for precise handling near nerves and vital structures'],
            ['value' => 'Instrument wear requiring regular sterilization and maintenance'],
            ['value' => 'Bone fracture or tooth root breakage in difficult extractions'],
            ['value' => 'Requirement for strict infection control and sterile surgical protocols'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical instruments for jaw and tooth extraction support oral surgery, impacted tooth removal, facial trauma management, jaw reconstruction, implant dentistry, cyst and tumor surgery, periodontal procedures, and maxillofacial surgical treatments. These instruments improve procedural precision, surgical safety, and overall treatment outcomes.'],
            ['value' => 'Sterilization and disinfection of surgical instruments after use'],
            ['value' => 'Monitoring extraction sites for bleeding or infection'],
            ['value' => 'Wound care and postoperative oral hygiene management'],
            ['value' => 'Regular maintenance and calibration of powered surgical devices'],
            ['value' => 'Safe storage and quality control of surgical equipment'],
        ],
                'recovery' => 'The long-term outlook with advanced surgical extraction instruments is highly positive because modern oral surgical tools significantly improve precision, patient safety, procedural efficiency, and postoperative recovery. Continuous advancements in ergonomic instrument design, minimally invasive technology, and infection control systems continue to enhance oral and maxillofacial surgical outcomes and patient care. ___________________ 174. Biopsy & Soft Tissue Surgery Tools Biopsy & Soft Tissue Surgery Tools Equipment',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Surgical Instruments for Jaw / Tooth Extraction',
                'meta_description' => 'Surgical instruments for jaw and tooth extraction are specialized dental and oral surgery tools designed for the safe removal of teeth, impacted teeth, bone fra',
                'meta_keywords' => '',
            ]
        );
    }
}
