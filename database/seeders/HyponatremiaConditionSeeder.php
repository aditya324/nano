<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyponatremiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hyponatremia')],
            [
                'name' => 'Hyponatremia',
                'slug' => Str::slug('Hyponatremia'),
                'h1' => 'Hyponatremia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hyponatremia is a condition in which sodium levels in the blood become abnormally low. Since sodium helps regulate fluid balance, nerve function, and muscle activity, severe hyponatremia can cause neurological and life-threatening complications.',
                'about_more' => '',
                'overview' => 'Hyponatremia is a condition in which sodium levels in the blood become abnormally low. Since sodium helps regulate fluid balance, nerve function, and muscle activity, severe hyponatremia can cause neurological and life-threatening complications.',
                'symptoms' => [
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Headache and confusion'],
            ['value' => 'Muscle cramps or weakness'],
            ['value' => 'Fatigue and dizziness'],
            ['value' => 'Seizures or unconsciousness in severe cases'],
        ],
                'causes' => [
            ['value' => 'Kidney disease causing water retention'],
            ['value' => 'Excessive fluid intake or intravenous fluids'],
            ['value' => 'Heart failure or liver disease'],
            ['value' => 'Diuretic medication overuse'],
            ['value' => 'Hormonal imbalances affecting sodium regulation'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and neurological damage'],
            ['value' => 'Seizures and altered consciousness'],
            ['value' => 'Falls and injury due to dizziness'],
            ['value' => 'Worsening kidney or heart disease'],
            ['value' => 'Life-threatening electrolyte imbalance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Controlled sodium correction therapy'],
            ['value' => 'Fluid restriction when appropriate'],
            ['value' => 'Treatment of underlying kidney or hormonal disorder'],
            ['value' => 'Intravenous saline in severe cases'],
            ['value' => 'Careful electrolyte monitoring in hospital settings'],
        ],
                'recovery' => 'Most patients recover well when sodium levels are corrected carefully and gradually. Rapid correction or delayed treatment can lead to serious neurological complications.',
                'sort_order' => 49,
                'is_active' => true,
                'meta_title' => 'Hyponatremia',
                'meta_description' => 'Hyponatremia is a condition in which sodium levels in the blood become abnormally low. Since sodium helps regulate fluid balance, nerve function, and muscle act',
                'meta_keywords' => '',
            ]
        );
    }
}
