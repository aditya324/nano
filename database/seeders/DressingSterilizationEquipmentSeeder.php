<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DressingSterilizationEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Dressing & Sterilization Equipment')],
            [
                'title' => 'Dressing & Sterilization Equipment',
                'slug' => Str::slug('Dressing & Sterilization Equipment'),
                'introduction' => 'Dressing and sterilization equipment are essential medical tools and systems used for wound care, infection prevention, surgical safety, and maintenance of sterile healthcare environments. These systems support safe dressing procedures, proper sterilization of instruments, and effective infection control in hospitals, operation theatres, burn units, clinics, and wound care centers.',
                'what_is' => 'Dressing equipment includes sterile dressing trays, wound care instruments, bandages, gauze materials, suction systems, and advanced dressing supplies used for managing surgical wounds, burns, ulcers, and traumatic injuries. Sterilization equipment such as autoclaves, ethylene oxide sterilizers, plasma sterilization systems, and UV sterilization units are used to eliminate microorganisms from surgical instruments, dressings, and medical devices. Proper sterilization and wound dressing practices are critical for preventing healthcare-associated infections and promoting safe healing. Sterile dressing trays and wound care instruments Autoclaves and steam sterilization systems Ethylene oxide and plasma sterilization units Surgical drapes, gauze, and advanced dressing materials Instrument storage, disinfection, and sterile packaging systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Surgical wound dressing and postoperative wound care'],
            ['value' => 'Burn dressing and advanced wound management procedures'],
            ['value' => 'Sterilization of surgical instruments and medical devices'],
            ['value' => 'Infection control in operation theatres and healthcare facilities'],
            ['value' => 'Chronic wound, ulcer, and trauma care management'],
        ],
                'condition_risks' => [
            ['value' => 'Risk of infection from improper sterilization practices'],
            ['value' => 'Cross-contamination in wound care or surgical environments'],
            ['value' => 'Equipment malfunction affecting sterility maintenance'],
            ['value' => 'Need for strict monitoring of sterilization cycles and protocols'],
            ['value' => 'Requirement for trained staff and continuous quality control measures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Dressing and sterilization equipment support surgical care, burn management, reconstructive procedures, trauma care, chronic wound treatment, infection prevention, and postoperative recovery. These systems help maintain sterile environments, improve wound healing, reduce infection risk, and support overall patient safety.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular wound dressing changes under sterile conditions'],
            ['value' => 'Monitoring for signs of infection or delayed healing'],
            ['value' => 'Proper cleaning, disinfection, and sterilization of reusable instruments'],
            ['value' => 'Safe storage and handling of sterile dressing materials'],
            ['value' => 'Continuous infection control monitoring and quality assurance practices'],
        ],
                'surgery_risks' => [
            ['value' => 'Risk of infection from improper sterilization practices'],
            ['value' => 'Cross-contamination in wound care or surgical environments'],
            ['value' => 'Equipment malfunction affecting sterility maintenance'],
            ['value' => 'Need for strict monitoring of sterilization cycles and protocols'],
            ['value' => 'Requirement for trained staff and continuous quality control measures'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced dressing and sterilization equipment is highly positive because proper infection control and sterile wound management significantly improve patient safety, healing outcomes, and surgical success rates. Continuous advancements in sterilization technologies, wound care materials, and infection prevention systems support safer healthcare environments and improved long-term clinical outcomes.',
                'conclusion' => '',
                'seo_title' => 'Dressing & Sterilization Equipment',
                'seo_description' => 'Dressing and sterilization equipment are essential medical tools and systems used for wound care, infection prevention, surgical safety, and maintenance of sterile healthcare environments. These systems support safe dressing procedures, proper sterilization of instruments, and effective infection control in hospitals, operation theatres, burn units, clinics, and wound care centers.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
