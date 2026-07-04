<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricICUPICUSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric ICU (PICU)')],
            [
                'title' => 'Pediatric ICU (PICU)',
                'slug' => Str::slug('Pediatric ICU (PICU)'),
                'introduction' => 'Pediatric Intensive Care Unit (PICU) is a specialized hospital facility equipped to provide advanced medical care and continuous monitoring for critically ill infants, children, and adolescents.',
                'what_is' => 'PICUs are designed to manage severe infections, respiratory failure, trauma, neurological emergencies, cardiac conditions, poisoning, and postoperative complications. The unit is staffed by pediatric intensivists, nurses, respiratory therapists, and emergency specialists. Advanced monitoring systems, ventilators, infusion pumps, and life-support equipment are used to stabilize critically ill children.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty or respiratory failure'],
            ['value' => 'High fever with altered consciousness'],
            ['value' => 'Serious infections or sepsis'],
            ['value' => 'Severe trauma or accidental injuries'],
            ['value' => 'Convulsions, shock, or unconsciousness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Multi-organ failure in critical illness'],
            ['value' => 'Hospital-acquired infections'],
            ['value' => 'Breathing and cardiac complications'],
            ['value' => 'Emotional stress for families and children'],
            ['value' => 'Long-term neurological or developmental complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of vital signs and organ function'],
            ['value' => 'Strict infection prevention and hygiene measures'],
            ['value' => 'Nutritional and fluid management support'],
            ['value' => 'Physiotherapy and rehabilitation if needed'],
            ['value' => 'Regular specialist follow-up after discharge'],
        ],
                'surgery_risks' => [
            ['value' => 'Multi-organ failure in critical illness'],
            ['value' => 'Hospital-acquired infections'],
            ['value' => 'Breathing and cardiac complications'],
            ['value' => 'Emotional stress for families and children'],
            ['value' => 'Long-term neurological or developmental complications'],
        ],
                'long_term_outlook' => 'PICU care significantly improves survival and recovery in critically ill children through advanced life-support management and specialized pediatric intensive care.',
                'conclusion' => '',
                'seo_title' => 'Pediatric ICU (PICU)',
                'seo_description' => 'Pediatric Intensive Care Unit (PICU) is a specialized hospital facility equipped to provide advanced medical care and continuous monitoring for critically ill infants, children, and adolescents.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
