<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricOPDGrowthMonitoringToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric OPD & Growth Monitoring Tools')],
            [
                'title' => 'Pediatric OPD & Growth Monitoring Tools',
                'slug' => Str::slug('Pediatric OPD & Growth Monitoring Tools'),
                'introduction' => 'Pediatric OPD (Outpatient Department) and growth monitoring tools are specialized healthcare services and equipment used to evaluate, monitor, and manage the health, nutrition, and development of infants, children, and adolescents.',
                'what_is' => 'Pediatric OPD services provide routine consultations, health check-ups, immunization follow-ups, nutritional assessments, and treatment for childhood illnesses. Growth monitoring tools such as infant weighing scales, stadiometers, growth charts, BMI calculators, head circumference tapes, and developmental tracking systems help assess physical and developmental progress. Early detection of growth abnormalities allows timely intervention and improved child health outcomes.',
                'symptoms' => [
            ['value' => 'Poor weight gain or growth delay'],
            ['value' => 'Recurrent childhood illnesses'],
            ['value' => 'Feeding difficulties or nutritional deficiencies'],
            ['value' => 'Delayed physical or developmental milestones'],
            ['value' => 'Weakness, fatigue, or behavioral concerns'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Malnutrition and stunted growth'],
            ['value' => 'Delayed developmental diagnosis'],
            ['value' => 'Untreated chronic pediatric illnesses'],
            ['value' => 'Poor immunity and frequent infections'],
            ['value' => 'Long-term physical and cognitive complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular pediatric follow-up visits'],
            ['value' => 'Monitor height, weight, and developmental milestones'],
            ['value' => 'Maintain balanced nutrition and vaccination schedules'],
            ['value' => 'Follow medical advice regarding supplements or therapies'],
            ['value' => 'Report growth or behavioral concerns early'],
        ],
                'surgery_risks' => [
            ['value' => 'Malnutrition and stunted growth'],
            ['value' => 'Delayed developmental diagnosis'],
            ['value' => 'Untreated chronic pediatric illnesses'],
            ['value' => 'Poor immunity and frequent infections'],
            ['value' => 'Long-term physical and cognitive complications'],
        ],
                'long_term_outlook' => 'Regular pediatric monitoring supports healthy growth, early disease detection, improved nutrition, and better long-term physical and mental development in children.',
                'conclusion' => '',
                'seo_title' => 'Pediatric OPD & Growth Monitoring Tools',
                'seo_description' => 'Pediatric OPD (Outpatient Department) and growth monitoring tools are specialized healthcare services and equipment used to evaluate, monitor, and manage the health, nutrition, and development of infants, children, and adolescents.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
