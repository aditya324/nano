<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalNutritionTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Nutrition Therapy')],
            [
                'name' => 'Renal Nutrition Therapy',
                'slug' => Str::slug('Renal Nutrition Therapy'),
                'h1' => 'Renal Nutrition Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal nutrition therapy is a comprehensive medical nutrition program designed to support kidney disease patients through scientifically planned dietary interventions.',
                'about_more' => 'Kidney disease significantly affects the body’s ability to regulate nutrients, fluids, electrolytes, and waste products. Proper nutrition helps protect kidney function, reduce symptoms, and support overall metabolic health. This therapy is essential in both early and advanced stages of renal disease.',
                'overview' => 'Renal nutrition therapy focuses on: Balanced protein intake Electrolyte control Adequate calorie support Fluid balance Mineral management Dialysis nutrition support Nutrition specialists create personalized meal plans based on: Kidney disease stage Laboratory results Body weight Diabetes status Dialysis treatment The therapy may also include nutritional supplements for patients with poor appetite or protein-energy malnutrition. Continuous dietary monitoring is important because nutritional needs change as kidney disease progresses.',
                'symptoms' => [
            ['value' => 'Weight loss or malnutrition'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling or fluid retention'],
            ['value' => 'Poor appetite'],
            ['value' => 'Electrolyte imbalance'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Severe malnutrition'],
            ['value' => 'Muscle wasting'],
            ['value' => 'Electrolyte complications'],
            ['value' => 'Increased infection risk'],
            ['value' => 'Poor dialysis outcomes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain prescribed meal plans consistently'],
            ['value' => 'Attend dietitian follow-up appointments'],
            ['value' => 'Monitor fluid and salt intake carefully'],
            ['value' => 'Report appetite or weight changes'],
            ['value' => 'Continue routine laboratory testing'],
        ],
                'recovery' => 'Renal nutrition therapy improves nutritional status, energy levels, and disease management in kidney patients. Long-term dietary support helps slow disease progression and enhances treatment effectiveness and quality of life.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Renal Nutrition Therapy',
                'meta_description' => 'Renal nutrition therapy is a comprehensive medical nutrition program designed to support kidney disease patients through scientifically planned dietary interven',
                'meta_keywords' => '',
            ]
        );
    }
}
