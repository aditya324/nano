<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SterilizationInfectionControlSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Sterilization & Infection Control Setup')],
            [
                'title' => 'Sterilization & Infection Control Setup',
                'slug' => Str::slug('Sterilization & Infection Control Setup'),
                'introduction' => 'Sterilization and infection control setup refers to the specialized infrastructure, equipment, protocols, and safety systems designed to prevent contamination and reduce the risk of infection in healthcare facilities. These setups are essential in dental clinics, operation theatres, oral and maxillofacial surgery units, burn care centers, and hospital environments to ensure patient safety and maintain sterile clinical practices.',
                'what_is' => 'A comprehensive sterilization and infection control setup includes sterilization rooms, autoclaves, disinfection systems, instrument processing areas, biomedical waste management systems, and infection monitoring protocols. These systems are used to sterilize surgical instruments, maintain aseptic environments, prevent cross-contamination, and comply with healthcare safety standards. Proper infection control measures are critical for reducing healthcare-associated infections and supporting safe surgical and clinical outcomes. Steam autoclaves and low-temperature sterilization units Ultrasonic cleaners and instrument disinfection systems Sterile storage cabinets and packaging systems Hand hygiene stations and PPE supplies Biomedical waste segregation and disposal systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Dedicated sterilization and instrument processing areas'],
            ['value' => 'Autoclave and advanced sterilization systems'],
            ['value' => 'Biomedical waste disposal and infection control protocols'],
            ['value' => 'Personal protective equipment (PPE) and barrier protection systems'],
            ['value' => 'Air quality, surface disinfection, and environmental hygiene management'],
        ],
                'condition_risks' => [
            ['value' => 'Cross-contamination due to improper sterilization practices'],
            ['value' => 'Spread of healthcare-associated infections'],
            ['value' => 'Equipment malfunction affecting sterility maintenance'],
            ['value' => 'Need for continuous staff training and protocol compliance'],
            ['value' => 'Requirement for regular monitoring, validation, and quality control'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Sterilization of surgical, dental, and diagnostic instruments Infection prevention during oral, maxillofacial, and reconstructive procedures Surface disinfection and environmental hygiene management Biomedical waste handling and contamination control Continuous infection surveillance and quality assurance monitoring',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [
            ['value' => 'Cross-contamination due to improper sterilization practices'],
            ['value' => 'Spread of healthcare-associated infections'],
            ['value' => 'Equipment malfunction affecting sterility maintenance'],
            ['value' => 'Need for continuous staff training and protocol compliance'],
            ['value' => 'Requirement for regular monitoring, validation, and quality control'],
        ],
                'long_term_outlook' => 'A well-established sterilization and infection control setup significantly improves patient safety, reduces infection risk, supports surgical success, and enhances overall healthcare quality. Continuous advancements in sterilization technology, infection monitoring systems, and healthcare safety protocols continue to improve operational efficiency, regulatory compliance, and long-term clinical outcomes.',
                'conclusion' => '',
                'seo_title' => 'Sterilization & Infection Control Setup',
                'seo_description' => 'Sterilization and infection control setup refers to the specialized infrastructure, equipment, protocols, and safety systems designed to prevent contamination and reduce the risk of infection in healthcare facilities. These setups are essential in dental clinics, operation theatres, oral and maxillofacial surgery units, burn care centers, and hospital environments to ensure patient safety and maintain sterile clinical practices.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
