<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteImbalancesNaKCaMgDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Electrolyte Imbalances (Na, K, Ca, Mg Disorders)')],
            [
                'name' => 'Electrolyte Imbalances (Na, K, Ca, Mg Disorders)',
                'slug' => Str::slug('Electrolyte Imbalances (Na, K, Ca, Mg Disorders)'),
                'h1' => 'Electrolyte Imbalances (Na, K, Ca, Mg Disorders)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Electrolyte imbalances are medical conditions caused by abnormal levels of essential minerals such as sodium (Na), potassium (K), calcium (Ca), and magnesium (Mg) in the body. These electrolytes play critical roles in maintaining fluid balance, nerve signaling, muscle function, heart rhythm, and overall metabolic stability. Imbalances may occur due to dehydration, kidney disease, hormonal disorders, medications, infections, or chronic medical conditions. Early diagnosis and prompt treatment are essential to prevent serious complications affecting the heart, brain, muscles, and other vital organs.',
                'about_more' => '',
                'overview' => 'Electrolyte imbalances are medical conditions caused by abnormal levels of essential minerals such as sodium (Na), potassium (K), calcium (Ca), and magnesium (Mg) in the body. These electrolytes play critical roles in maintaining fluid balance, nerve signaling, muscle function, heart rhythm, and overall metabolic stability. Imbalances may occur due to dehydration, kidney disease, hormonal disorders, medications, infections, or chronic medical conditions. Early diagnosis and prompt treatment are essential to prevent serious complications affecting the heart, brain, muscles, and other vital organs.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or muscle cramps'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Irregular heartbeat or palpitations'],
            ['value' => 'Confusion, dizziness, or altered mental status'],
            ['value' => 'Tingling, numbness, seizures, or muscle spasms in severe cases'],
        ],
                'causes' => [
            ['value' => 'Dehydration, excessive sweating, or fluid loss'],
            ['value' => 'Kidney disease or impaired electrolyte regulation'],
            ['value' => 'Hormonal or endocrine disorders affecting mineral balance'],
            ['value' => 'Medications such as diuretics, laxatives, or certain antibiotics'],
            ['value' => 'Severe infections, gastrointestinal disorders, or poor nutritional intake'],
        ],
                'risks' => [
            ['value' => 'Heart rhythm abnormalities or cardiac arrest'],
            ['value' => 'Severe dehydration or fluid overload'],
            ['value' => 'Muscle weakness, paralysis, or respiratory complications'],
            ['value' => 'Neurological complications such as confusion or seizures'],
            ['value' => 'Kidney dysfunction and long-term metabolic instability if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for electrolyte imbalances focuses on restoring normal mineral levels, correcting the underlying cause, maintaining fluid balance, and preventing complications. Management may include oral or intravenous electrolyte replacement, hydration therapy, medication adjustment, dietary modification, kidney function management, and treatment of associated medical conditions. Severe cases may require intensive monitoring, cardiac observation, or hospitalization. Patients may also benefit from nutritional counseling, endocrinology or nephrology follow-up, preventive health screening, and long-term metabolic monitoring to maintain electrolyte stability and overall health.'],
        ],
                'recovery' => 'The long-term outlook for electrolyte imbalances is generally positive with early diagnosis and appropriate medical management. Proper hydration, balanced nutrition, medication adherence, routine laboratory monitoring, management of underlying diseases, healthy lifestyle habits, and continuous medical follow-up significantly help maintain electrolyte balance, prevent complications, preserve organ function, and improve overall quality of life. _______________ 15. Anemia (Iron Deficiency, B12, Hemolytic, Aplastic) Anemia (Iron Deficiency, B12, Hemolytic, Aplastic)',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Electrolyte Imbalances (Na, K, Ca, Mg Disorders)',
                'meta_description' => 'Electrolyte imbalances are medical conditions caused by abnormal levels of essential minerals such as sodium (Na), potassium (K), calcium (Ca), and magnesium (M',
                'meta_keywords' => '',
            ]
        );
    }
}
