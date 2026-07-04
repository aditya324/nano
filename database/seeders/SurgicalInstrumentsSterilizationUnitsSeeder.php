<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalInstrumentsSterilizationUnitsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgical Instruments & Sterilization Units')],
            [
                'title' => 'Surgical Instruments & Sterilization Units',
                'slug' => Str::slug('Surgical Instruments & Sterilization Units'),
                'introduction' => 'Surgical instruments and sterilization units are essential hospital facilities used to maintain sterile surgical equipment and prevent infection during operations. Proper sterilization is critical for patient safety and surgical success.',
                'what_is' => 'The setup includes: Surgical instrument trays Autoclaves Sterile storage systems Cleaning and disinfection equipment Central Sterile Supply Department (CSSD) Sterilization eliminates microorganisms and reduces surgical site infection risk. Strict sterilization protocols are followed for: General surgery Orthopedic surgery Neurosurgery Gynecological surgery Emergency procedures',
                'symptoms' => [
            ['value' => 'Patients requiring surgical procedures'],
            ['value' => 'Risk of hospital-acquired infection'],
            ['value' => 'Need for sterile surgical environment'],
            ['value' => 'Complex or prolonged surgeries'],
            ['value' => 'Repeated instrument use in operating rooms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection from improper sterilization'],
            ['value' => 'Equipment contamination'],
            ['value' => 'Delayed surgery due to equipment failure'],
            ['value' => 'Sterilization-related instrument damage'],
            ['value' => 'Cross-contamination risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor surgical wounds carefully'],
            ['value' => 'Maintain postoperative hygiene'],
            ['value' => 'Follow infection prevention measures'],
            ['value' => 'Report fever or wound discharge immediately'],
            ['value' => 'Attend regular postoperative evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection from improper sterilization'],
            ['value' => 'Equipment contamination'],
            ['value' => 'Delayed surgery due to equipment failure'],
            ['value' => 'Sterilization-related instrument damage'],
            ['value' => 'Cross-contamination risk'],
        ],
                'long_term_outlook' => 'High-quality sterilization systems greatly improve surgical safety, reduce infection rates, and support better long-term patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Surgical Instruments & Sterilization Units',
                'seo_description' => 'Surgical instruments and sterilization units are essential hospital facilities used to maintain sterile surgical equipment and prevent infection during operations. Proper sterilization is critical for patient safety and surgical success.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
