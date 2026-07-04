<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalInstrumentsforJawToothExtractionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgical Instruments for Jaw / Tooth Extraction')],
            [
                'title' => 'Surgical Instruments for Jaw / Tooth Extraction',
                'slug' => Str::slug('Surgical Instruments for Jaw / Tooth Extraction'),
                'introduction' => 'Surgical instruments for jaw and tooth extraction are specialized dental and oral surgery tools designed for the safe removal of teeth, impacted teeth, bone fragments, and diseased oral tissues. These instruments support precision, controlled force application, soft tissue handling, and surgical efficiency during oral and maxillofacial procedures.',
                'what_is' => 'Tooth and jaw extraction procedures may involve simple dental extractions, surgical removal of impacted teeth, jawbone procedures, fracture management, and reconstructive oral surgery. Specialized instruments such as extraction forceps, elevators, retractors, bone-cutting tools, surgical handpieces, and suturing instruments are used to safely remove teeth and manage surrounding bone and soft tissues. Modern surgical equipment improves procedural accuracy, patient safety, infection control, and postoperative recovery. Dental extraction forceps and elevators Surgical retractors and soft tissue instruments Bone-cutting burs, chisels, and surgical handpieces Curettes, suction devices, and irrigation systems Needle holders, suturing instruments, and surgical trays',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Extraction of damaged or infected teeth'],
            ['value' => 'Surgical removal of impacted wisdom teeth and canines'],
            ['value' => 'Jaw surgery and oral bone procedures'],
            ['value' => 'Management of jaw fractures and oral infections'],
            ['value' => 'Pre-implant and reconstructive oral surgery procedures'],
        ],
                'condition_risks' => [
            ['value' => 'Risk of bleeding, infection, or soft tissue injury during procedures'],
            ['value' => 'Need for precise handling near nerves and vital structures'],
            ['value' => 'Instrument wear requiring regular sterilization and maintenance'],
            ['value' => 'Bone fracture or tooth root breakage in difficult extractions'],
            ['value' => 'Requirement for strict infection control and sterile surgical protocols'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Surgical instruments for jaw and tooth extraction support oral surgery, impacted tooth removal, facial trauma management, jaw reconstruction, implant dentistry, cyst and tumor surgery, periodontal procedures, and maxillofacial surgical treatments. These instruments improve procedural precision, surgical safety, and overall treatment outcomes.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Sterilization and disinfection of surgical instruments after use'],
            ['value' => 'Monitoring extraction sites for bleeding or infection'],
            ['value' => 'Wound care and postoperative oral hygiene management'],
            ['value' => 'Regular maintenance and calibration of powered surgical devices'],
            ['value' => 'Safe storage and quality control of surgical equipment'],
        ],
                'surgery_risks' => [
            ['value' => 'Risk of bleeding, infection, or soft tissue injury during procedures'],
            ['value' => 'Need for precise handling near nerves and vital structures'],
            ['value' => 'Instrument wear requiring regular sterilization and maintenance'],
            ['value' => 'Bone fracture or tooth root breakage in difficult extractions'],
            ['value' => 'Requirement for strict infection control and sterile surgical protocols'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced surgical extraction instruments is highly positive because modern oral surgical tools significantly improve precision, patient safety, procedural efficiency, and postoperative recovery. Continuous advancements in ergonomic instrument design, minimally invasive technology, and infection control systems continue to enhance oral and maxillofacial surgical outcomes and patient care.',
                'conclusion' => '',
                'seo_title' => 'Surgical Instruments for Jaw / Tooth Extraction',
                'seo_description' => 'Surgical instruments for jaw and tooth extraction are specialized dental and oral surgery tools designed for the safe removal of teeth, impacted teeth, bone fragments, and diseased oral tissues. These instruments support precision, controlled force application, soft tissue handling, and surgical efficiency during oral and maxillofacial procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
