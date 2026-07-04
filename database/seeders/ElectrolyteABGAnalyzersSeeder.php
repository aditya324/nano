<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteABGAnalyzersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Electrolyte & ABG Analyzers')],
            [
                'title' => 'Electrolyte & ABG Analyzers',
                'slug' => Str::slug('Electrolyte & ABG Analyzers'),
                'introduction' => 'Electrolyte and Arterial Blood Gas (ABG) analyzers are specialized laboratory diagnostic systems used to rapidly evaluate electrolyte balance, oxygen levels, acid-base status, and respiratory function in critically ill and nephrology patients. These analyzers play a crucial role in emergency medicine, dialysis care, ICU monitoring, and kidney disease management. Rapid and accurate testing helps doctors make timely life-saving treatment decisions.',
                'what_is' => 'The analyzers measure: Sodium Potassium Chloride Calcium Blood pH Oxygen levels Carbon dioxide levels Bicarbonate levels The facility supports: Dialysis monitoring ICU patient care Emergency electrolyte correction Acid-base disorder management Respiratory assessment Doctors use these results to manage: Hyperkalemia Metabolic acidosis Respiratory failure Fluid imbalance Critical renal conditions Modern analyzers provide rapid bedside or laboratory-based results for emergency clinical decision-making.',
                'symptoms' => [
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Severe kidney disease'],
            ['value' => 'Respiratory distress'],
            ['value' => 'Altered consciousness'],
            ['value' => 'Acid-base disorders'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis if testing is unavailable'],
            ['value' => 'Severe cardiac arrhythmias'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Metabolic instability'],
            ['value' => 'Critical illness progression'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular laboratory monitoring'],
            ['value' => 'Follow prescribed treatment carefully'],
            ['value' => 'Maintain dialysis schedules consistently'],
            ['value' => 'Monitor symptoms closely'],
            ['value' => 'Report breathing difficulty or weakness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis if testing is unavailable'],
            ['value' => 'Severe cardiac arrhythmias'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Metabolic instability'],
            ['value' => 'Critical illness progression'],
        ],
                'long_term_outlook' => 'Electrolyte and ABG analyzers improve emergency diagnosis, dialysis monitoring, and critical care management. Rapid laboratory assessment supports safer nephrology care and improved long-term patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Electrolyte & ABG Analyzers',
                'seo_description' => 'Electrolyte and Arterial Blood Gas (ABG) analyzers are specialized laboratory diagnostic systems used to rapidly evaluate electrolyte balance, oxygen levels, acid-base status, and respiratory function in critically ill and nephrology patients. These analyzers play a crucial role in emergency medicine, dialysis care, ICU monitoring, and kidney disease management. Rapid and accurate testing helps doctors make timely life-saving treatment decisions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
