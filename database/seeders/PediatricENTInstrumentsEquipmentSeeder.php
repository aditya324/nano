<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricENTInstrumentsEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric ENT Instruments & Equipment')],
            [
                'title' => 'Pediatric ENT Instruments & Equipment',
                'slug' => Str::slug('Pediatric ENT Instruments & Equipment'),
                'introduction' => 'Pediatric ENT instruments and equipment are specialized tools designed specifically for diagnosing and treating ear, nose, and throat disorders in infants and children. The equipment is adapted to the smaller anatomy and unique needs of pediatric patients. Specialized pediatric ENT care improves safety, comfort, and treatment outcomes.',
                'what_is' => 'The equipment may include: Pediatric endoscopes Small surgical instruments Pediatric airway equipment Ear examination tools Suction devices Tonsil and adenoid surgery instruments The setup supports treatment of: Ear infections Tonsil and adenoid disorders Airway obstruction Foreign body removal Congenital ENT abnormalities Child-friendly equipment improves precision and reduces procedural trauma.',
                'symptoms' => [
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Snoring or breathing difficulty'],
            ['value' => 'Hearing problems'],
            ['value' => 'Nasal obstruction'],
            ['value' => 'Speech or swallowing difficulties'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Anxiety in children during procedures'],
            ['value' => 'Airway-related complications'],
            ['value' => 'Bleeding or infection after surgery'],
            ['value' => 'Anesthesia-related risks'],
            ['value' => 'Difficulty cooperating during examinations'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Provide medications exactly as prescribed'],
            ['value' => 'Maintain hydration and proper nutrition'],
            ['value' => 'Attend pediatric ENT follow-up visits regularly'],
            ['value' => 'Monitor for fever, bleeding, or breathing difficulty'],
            ['value' => 'Offer emotional support during recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Anxiety in children during procedures'],
            ['value' => 'Airway-related complications'],
            ['value' => 'Bleeding or infection after surgery'],
            ['value' => 'Anesthesia-related risks'],
            ['value' => 'Difficulty cooperating during examinations'],
        ],
                'long_term_outlook' => 'Specialized pediatric ENT equipment improves diagnostic accuracy, treatment safety, and long-term hearing, breathing, and developmental outcomes in children.',
                'conclusion' => '',
                'seo_title' => 'Pediatric ENT Instruments & Equipment',
                'seo_description' => 'Pediatric ENT instruments and equipment are specialized tools designed specifically for diagnosing and treating ear, nose, and throat disorders in infants and children. The equipment is adapted to the smaller anatomy and unique needs of pediatric patients. Specialized pediatric ENT care improves safety, comfort, and treatment outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
