<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SterilizationInfectionControlSetupConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Sterilization & Infection Control Setup')],
            [
                'name' => 'Sterilization & Infection Control Setup',
                'slug' => Str::slug('Sterilization & Infection Control Setup'),
                'h1' => 'Sterilization & Infection Control Setup',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Sterilization and infection control setup refers to the specialized infrastructure, equipment, protocols, and safety systems designed to prevent contamination and reduce the risk of infection in healthcare facilities. These setups are essential in dental clinics, operation theatres, oral and maxillofacial surgery units, burn care centers, and hospital environments to ensure patient safety and maintain sterile clinical practices.',
                'about_more' => '',
                'overview' => 'A comprehensive sterilization and infection control setup includes sterilization rooms, autoclaves, disinfection systems, instrument processing areas, biomedical waste management systems, and infection monitoring protocols. These systems are used to sterilize surgical instruments, maintain aseptic environments, prevent cross-contamination, and comply with healthcare safety standards. Proper infection control measures are critical for reducing healthcare-associated infections and supporting safe surgical and clinical outcomes. Steam autoclaves and low-temperature sterilization units Ultrasonic cleaners and instrument disinfection systems Sterile storage cabinets and packaging systems Hand hygiene stations and PPE supplies Biomedical waste segregation and disposal systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Dedicated sterilization and instrument processing areas'],
            ['value' => 'Autoclave and advanced sterilization systems'],
            ['value' => 'Biomedical waste disposal and infection control protocols'],
            ['value' => 'Personal protective equipment (PPE) and barrier protection systems'],
            ['value' => 'Air quality, surface disinfection, and environmental hygiene management'],
        ],
                'risks' => [
            ['value' => 'Cross-contamination due to improper sterilization practices'],
            ['value' => 'Spread of healthcare-associated infections'],
            ['value' => 'Equipment malfunction affecting sterility maintenance'],
            ['value' => 'Need for continuous staff training and protocol compliance'],
            ['value' => 'Requirement for regular monitoring, validation, and quality control'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Sterilization of surgical, dental, and diagnostic instruments'],
            ['value' => 'Infection prevention during oral, maxillofacial, and reconstructive procedures'],
            ['value' => 'Surface disinfection and environmental hygiene management'],
            ['value' => 'Biomedical waste handling and contamination control'],
            ['value' => 'Continuous infection surveillance and quality assurance monitoring'],
        ],
                'recovery' => 'A well-established sterilization and infection control setup significantly improves patient safety, reduces infection risk, supports surgical success, and enhances overall healthcare quality. Continuous advancements in sterilization technology, infection monitoring systems, and healthcare safety protocols continue to improve operational efficiency, regulatory compliance, and long-term clinical outcomes. __________________ 179. Postoperative Physiotherapy Equipment Postoperative Physiotherapy Equipment Equipment',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Sterilization & Infection Control Setup',
                'meta_description' => 'Sterilization and infection control setup refers to the specialized infrastructure, equipment, protocols, and safety systems designed to prevent contamination a',
                'meta_keywords' => '',
            ]
        );
    }
}
