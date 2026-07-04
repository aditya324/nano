<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricVentilatorsCPAPSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Ventilators & CPAP')],
            [
                'title' => 'Pediatric Ventilators & CPAP',
                'slug' => Str::slug('Pediatric Ventilators & CPAP'),
                'introduction' => 'Pediatric ventilators and Continuous Positive Airway Pressure (CPAP) systems are respiratory support devices used to assist breathing in infants and children with respiratory distress or lung disease.',
                'what_is' => 'Ventilators provide mechanical breathing support for critically ill children unable to breathe adequately on their own. CPAP delivers continuous air pressure to keep airways open and improve oxygenation. These systems are commonly used in PICUs, NICUs, and emergency care settings for pneumonia, respiratory distress syndrome, asthma, and neonatal breathing disorders.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty or rapid breathing'],
            ['value' => 'Low oxygen levels in the blood'],
            ['value' => 'Respiratory distress in newborns or children'],
            ['value' => 'Chest retractions or noisy breathing'],
            ['value' => 'Cyanosis or bluish discoloration of lips and skin'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Lung injury from prolonged ventilation'],
            ['value' => 'Infection associated with respiratory devices'],
            ['value' => 'Oxygen imbalance complications'],
            ['value' => 'Airway irritation or discomfort'],
            ['value' => 'Dependence on long-term respiratory support'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of oxygen saturation and breathing'],
            ['value' => 'Maintain proper airway hygiene and suctioning'],
            ['value' => 'Follow ventilator safety and infection control protocols'],
            ['value' => 'Gradually reduce respiratory support as condition improves'],
            ['value' => 'Provide nutritional and physiotherapy support during recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Lung injury from prolonged ventilation'],
            ['value' => 'Infection associated with respiratory devices'],
            ['value' => 'Oxygen imbalance complications'],
            ['value' => 'Airway irritation or discomfort'],
            ['value' => 'Dependence on long-term respiratory support'],
        ],
                'long_term_outlook' => 'Advanced respiratory support systems improve survival and recovery in children with severe respiratory illnesses and neonatal breathing complications.',
                'conclusion' => '',
                'seo_title' => 'Pediatric Ventilators & CPAP',
                'seo_description' => 'Pediatric ventilators and Continuous Positive Airway Pressure (CPAP) systems are respiratory support devices used to assist breathing in infants and children with respiratory distress or lung disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
