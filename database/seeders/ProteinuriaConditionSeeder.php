<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProteinuriaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Proteinuria')],
            [
                'name' => 'Proteinuria',
                'slug' => Str::slug('Proteinuria'),
                'h1' => 'Proteinuria',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Proteinuria refers to the abnormal presence of protein in the urine, indicating possible kidney damage or kidney disease. Healthy kidneys normally prevent significant protein loss into urine.',
                'about_more' => '',
                'overview' => 'Proteinuria refers to the abnormal presence of protein in the urine, indicating possible kidney damage or kidney disease. Healthy kidneys normally prevent significant protein loss into urine.',
                'symptoms' => [
            ['value' => 'Foamy or frothy urine'],
            ['value' => 'Swelling in legs, feet, or around eyes'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Increased urination in some patients'],
            ['value' => 'Often asymptomatic in early stages'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus and hypertension'],
            ['value' => 'Glomerular kidney diseases'],
            ['value' => 'Nephrotic syndrome'],
            ['value' => 'Infections or fever-related temporary protein loss'],
            ['value' => 'Autoimmune or inflammatory conditions'],
        ],
                'risks' => [
            ['value' => 'Progression of kidney disease'],
            ['value' => 'Chronic kidney failure risk'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Nutritional protein loss'],
            ['value' => 'Persistent swelling and fluid imbalance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment of underlying kidney disease'],
            ['value' => 'Blood pressure and diabetes control'],
            ['value' => 'Kidney-protective medications'],
            ['value' => 'Dietary protein and salt management'],
            ['value' => 'Regular urine and kidney function testing'],
        ],
                'recovery' => 'Temporary proteinuria may resolve completely, while persistent proteinuria requires ongoing evaluation and management. Early treatment helps protect kidney function and reduce complications.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Proteinuria',
                'meta_description' => 'Proteinuria refers to the abnormal presence of protein in the urine, indicating possible kidney damage or kidney disease. Healthy kidneys normally prevent signi',
                'meta_keywords' => '',
            ]
        );
    }
}
