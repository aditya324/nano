<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionControlSterilizationEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Infection Control & Sterilization Equipment')],
            [
                'title' => 'Infection Control & Sterilization Equipment',
                'slug' => Str::slug('Infection Control & Sterilization Equipment'),
                'introduction' => 'Infection control and sterilization equipment help maintain a safe environment during diabetic foot treatment and wound care procedures.',
                'what_is' => 'Strict infection prevention is necessary because diabetic patients are at increased risk of severe wound infections.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Wound care procedures'],
            ['value' => 'Surgical debridement'],
            ['value' => 'Dressing changes'],
            ['value' => 'Minor diabetic foot surgeries'],
            ['value' => 'Prevention of hospital-acquired infections'],
            ['value' => 'Treatments'],
            ['value' => 'Sterilization systems, disinfectants, protective equipment, and aseptic wound care practices are used to reduce infection risk during treatment.'],
            ['value' => 'Benefits'],
            ['value' => 'Reduced infection rates'],
            ['value' => 'Safer wound management'],
            ['value' => 'Improved healing outcomes'],
            ['value' => 'Better patient safety'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Equipment maintenance requirements'],
            ['value' => 'Risk of contamination if protocols are not followed'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue wound hygiene'],
            ['value' => 'Follow infection prevention advice'],
            ['value' => 'Monitor for fever or wound discharge'],
            ['value' => 'Maintain regular follow-up'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Effective infection control improves wound healing and reduces serious diabetic foot complications.',
                'conclusion' => '',
                'seo_title' => 'Infection Control & Sterilization Equipment',
                'seo_description' => 'Infection control and sterilization equipment help maintain a safe environment during diabetic foot treatment and wound care procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
