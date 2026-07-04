<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicKidneyDiseaseCKDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Kidney Disease (CKD)')],
            [
                'name' => 'Chronic Kidney Disease (CKD)',
                'slug' => Str::slug('Chronic Kidney Disease (CKD)'),
                'h1' => 'Chronic Kidney Disease (CKD)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic Kidney Disease (CKD) is a long-term progressive condition in which the kidneys gradually lose their ability to filter waste products and maintain fluid and electrolyte balance. CKD develops slowly over months or years and may eventually progress to kidney failure if untreated. Diabetes and high blood pressure are among the most common causes worldwide.',
                'about_more' => '',
                'overview' => 'Chronic Kidney Disease (CKD) is a long-term progressive condition in which the kidneys gradually lose their ability to filter waste products and maintain fluid and electrolyte balance. CKD develops slowly over months or years and may eventually progress to kidney failure if untreated. Diabetes and high blood pressure are among the most common causes worldwide.',
                'symptoms' => [
            ['value' => 'Fatigue and generalized weakness'],
            ['value' => 'Swelling of legs, ankles, or face'],
            ['value' => 'Changes in urination frequency or appearance'],
            ['value' => 'Loss of appetite, nausea, or weight loss'],
            ['value' => 'High blood pressure and sleep disturbances'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus causing kidney damage'],
            ['value' => 'Long-standing high blood pressure'],
            ['value' => 'Chronic glomerulonephritis or autoimmune diseases'],
            ['value' => 'Recurrent kidney infections or obstruction'],
            ['value' => 'Genetic kidney disorders such as polycystic kidney disease'],
        ],
                'risks' => [
            ['value' => 'Progression to end-stage renal disease'],
            ['value' => 'Heart disease and stroke risk'],
            ['value' => 'Severe anemia and bone disorders'],
            ['value' => 'Electrolyte imbalance and fluid overload'],
            ['value' => 'Reduced quality of life and increased hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Strict blood sugar and blood pressure control'],
            ['value' => 'Kidney-protective medications'],
            ['value' => 'Dietary salt, protein, and fluid management'],
            ['value' => 'Treatment of anemia and bone disease'],
            ['value' => 'Dialysis or kidney transplant in advanced stages'],
        ],
                'recovery' => 'CKD is usually not completely reversible, but early diagnosis and lifestyle management can significantly slow progression. Regular nephrology follow-up helps preserve kidney function and improve long-term outcomes.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Chronic Kidney Disease (CKD)',
                'meta_description' => 'Chronic Kidney Disease (CKD) is a long-term progressive condition in which the kidneys gradually lose their ability to filter waste products and maintain fluid ',
                'meta_keywords' => '',
            ]
        );
    }
}
