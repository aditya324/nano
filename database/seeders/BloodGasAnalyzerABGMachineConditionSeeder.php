<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodGasAnalyzerABGMachineConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Blood Gas Analyzer / ABG Machine')],
            [
                'name' => 'Blood Gas Analyzer / ABG Machine',
                'slug' => Str::slug('Blood Gas Analyzer / ABG Machine'),
                'h1' => 'Blood Gas Analyzer / ABG Machine',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A Blood Gas Analyzer, also known as an Arterial Blood Gas (ABG) machine, is an advanced diagnostic device used to measure oxygen levels, carbon dioxide levels, blood pH, and other important metabolic parameters in blood samples. This equipment plays a critical role in evaluating respiratory function, acid-base balance, oxygenation status, and metabolic stability in critically ill patients.',
                'about_more' => '',
                'overview' => 'Blood gas analyzers are commonly used in intensive care units, emergency departments, operation theaters, neonatal care units, and critical care settings for rapid bedside assessment of respiratory and metabolic conditions. The machine analyzes arterial blood samples to provide immediate information regarding oxygen exchange, ventilation efficiency, electrolyte balance, and overall organ function. ABG analysis helps healthcare professionals diagnose respiratory failure, metabolic disorders, shock, sepsis, and acid-base abnormalities while guiding ventilator management and emergency treatment decisions.',
                'symptoms' => [
            ['value' => 'Severe shortness of breath or respiratory distress'],
            ['value' => 'Low oxygen levels or breathing abnormalities'],
            ['value' => 'Shock, sepsis, or circulatory instability'],
            ['value' => 'Altered mental status or metabolic disturbances'],
            ['value' => 'Critical illness requiring intensive respiratory and metabolic monitoring'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding or bruising during arterial blood sample collection'],
            ['value' => 'Pain or discomfort at the puncture site'],
            ['value' => 'Infection risk associated with repeated arterial sampling'],
            ['value' => 'Inaccurate results due to improper sample handling'],
            ['value' => 'Delayed diagnosis if equipment malfunction or calibration issues occur'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood gas analyzers support critical patient management by providing rapid diagnostic information that guides oxygen therapy, ventilator adjustments, electrolyte correction, fluid management, and emergency medical treatment. ABG analysis assists healthcare professionals in managing respiratory failure, COPD exacerbation, ARDS, sepsis, diabetic emergencies, metabolic acidosis, kidney dysfunction, and cardiac instability. These systems are often integrated with ICU monitoring, ventilators, and critical care protocols to improve treatment accuracy and patient outcomes.'],
            ['value' => 'Continuous monitoring of respiratory and metabolic parameters'],
            ['value' => 'Regular assessment of oxygenation and acid-base balance'],
            ['value' => 'Monitoring arterial puncture sites for bleeding or complications'],
            ['value' => 'Calibration, maintenance, and quality control of analyzer systems'],
            ['value' => 'Ongoing critical care observation and treatment adjustment based on ABG results'],
        ],
                'recovery' => 'The long-term outlook associated with blood gas analyzer use is generally positive as rapid and accurate blood gas assessment significantly improves diagnosis, respiratory management, critical care decision-making, and patient safety. Advancements in point-of-care testing, automated analyzers, and integrated monitoring technologies continue to enhance critical care efficiency, improve treatment precision, reduce complications, and support better patient outcomes across various medical specialties. ____________________ 78. Portable Ultrasound / Echo Portable Ultrasound / Echo Equipment',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Blood Gas Analyzer / ABG Machine',
                'meta_description' => 'A Blood Gas Analyzer, also known as an Arterial Blood Gas (ABG) machine, is an advanced diagnostic device used to measure oxygen levels, carbon dioxide levels, ',
                'meta_keywords' => '',
            ]
        );
    }
}
