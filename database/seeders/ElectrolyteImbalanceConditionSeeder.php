<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteImbalanceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Electrolyte Imbalance')],
            [
                'name' => 'Electrolyte Imbalance',
                'slug' => Str::slug('Electrolyte Imbalance'),
                'h1' => 'Electrolyte Imbalance',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Electrolyte imbalance occurs when the levels of essential minerals such as sodium, potassium, calcium, magnesium, or phosphate in the body become too high or too low. The kidneys play a major role in maintaining electrolyte balance, and kidney disorders are among the most common causes of electrolyte disturbances. These imbalances can affect nerve function, muscle activity, heart rhythm, and overall body function, sometimes becoming life-threatening if untreated.',
                'about_more' => '',
                'overview' => 'Electrolyte imbalance occurs when the levels of essential minerals such as sodium, potassium, calcium, magnesium, or phosphate in the body become too high or too low. The kidneys play a major role in maintaining electrolyte balance, and kidney disorders are among the most common causes of electrolyte disturbances. These imbalances can affect nerve function, muscle activity, heart rhythm, and overall body function, sometimes becoming life-threatening if untreated.',
                'symptoms' => [
            ['value' => 'Muscle weakness, cramps, or twitching'],
            ['value' => 'Fatigue, confusion, or dizziness'],
            ['value' => 'Irregular heartbeat or palpitations'],
            ['value' => 'Nausea, vomiting, or poor appetite'],
            ['value' => 'Swelling, dehydration, or altered consciousness in severe cases'],
        ],
                'causes' => [
            ['value' => 'Acute or chronic kidney disease'],
            ['value' => 'Severe dehydration or excessive fluid loss'],
            ['value' => 'Diarrhea, vomiting, or prolonged illness'],
            ['value' => 'Certain medications such as diuretics'],
            ['value' => 'Hormonal or metabolic disorders'],
        ],
                'risks' => [
            ['value' => 'Dangerous heart rhythm abnormalities'],
            ['value' => 'Muscle paralysis or severe weakness'],
            ['value' => 'Seizures or neurological disturbances'],
            ['value' => 'Worsening kidney dysfunction'],
            ['value' => 'Life-threatening metabolic complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Correction of electrolyte levels through fluids or medications'],
            ['value' => 'Intravenous electrolyte replacement when required'],
            ['value' => 'Treatment of underlying kidney or metabolic disease'],
            ['value' => 'Dietary modifications based on electrolyte disturbance'],
            ['value' => 'Dialysis in severe or refractory cases'],
        ],
                'recovery' => 'Most electrolyte imbalances improve with early diagnosis and appropriate treatment. Continuous monitoring is important in patients with kidney disease to prevent recurrence and complications.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Electrolyte Imbalance',
                'meta_description' => 'Electrolyte imbalance occurs when the levels of essential minerals such as sodium, potassium, calcium, magnesium, or phosphate in the body become too high or to',
                'meta_keywords' => '',
            ]
        );
    }
}
