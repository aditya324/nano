<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteABGAnalyzersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Electrolyte & ABG Analyzers')],
            [
                'name' => 'Electrolyte & ABG Analyzers',
                'slug' => Str::slug('Electrolyte & ABG Analyzers'),
                'h1' => 'Electrolyte & ABG Analyzers',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Electrolyte and Arterial Blood Gas (ABG) analyzers are specialized laboratory diagnostic systems used to rapidly evaluate electrolyte balance, oxygen levels, acid-base status, and respiratory function in critically ill and nephrology patients.',
                'about_more' => 'These analyzers play a crucial role in emergency medicine, dialysis care, ICU monitoring, and kidney disease management. Rapid and accurate testing helps doctors make timely life-saving treatment decisions.',
                'overview' => 'The analyzers measure: Sodium Potassium Chloride Calcium Blood pH Oxygen levels Carbon dioxide levels Bicarbonate levels The facility supports: Dialysis monitoring ICU patient care Emergency electrolyte correction Acid-base disorder management Respiratory assessment Doctors use these results to manage: Hyperkalemia Metabolic acidosis Respiratory failure Fluid imbalance Critical renal conditions Modern analyzers provide rapid bedside or laboratory-based results for emergency clinical decision-making.',
                'symptoms' => [
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Severe kidney disease'],
            ['value' => 'Respiratory distress'],
            ['value' => 'Altered consciousness'],
            ['value' => 'Acid-base disorders'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delayed diagnosis if testing is unavailable'],
            ['value' => 'Severe cardiac arrhythmias'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Metabolic instability'],
            ['value' => 'Critical illness progression'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular laboratory monitoring'],
            ['value' => 'Follow prescribed treatment carefully'],
            ['value' => 'Maintain dialysis schedules consistently'],
            ['value' => 'Monitor symptoms closely'],
            ['value' => 'Report breathing difficulty or weakness immediately'],
        ],
                'recovery' => 'Electrolyte and ABG analyzers improve emergency diagnosis, dialysis monitoring, and critical care management. Rapid laboratory assessment supports safer nephrology care and improved long-term patient outcomes.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Electrolyte & ABG Analyzers',
                'meta_description' => 'Electrolyte and Arterial Blood Gas (ABG) analyzers are specialized laboratory diagnostic systems used to rapidly evaluate electrolyte balance, oxygen levels, ac',
                'meta_keywords' => '',
            ]
        );
    }
}
