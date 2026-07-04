<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnemiaofChronicKidneyDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Anemia of Chronic Kidney Disease')],
            [
                'name' => 'Anemia of Chronic Kidney Disease',
                'slug' => Str::slug('Anemia of Chronic Kidney Disease'),
                'h1' => 'Anemia of Chronic Kidney Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Anemia of chronic kidney disease occurs when damaged kidneys produce insufficient erythropoietin, a hormone responsible for stimulating red blood cell production. This leads to reduced oxygen delivery throughout the body, causing fatigue and weakness.',
                'about_more' => '',
                'overview' => 'Anemia of chronic kidney disease occurs when damaged kidneys produce insufficient erythropoietin, a hormone responsible for stimulating red blood cell production. This leads to reduced oxygen delivery throughout the body, causing fatigue and weakness.',
                'symptoms' => [
            ['value' => 'Persistent tiredness and low energy'],
            ['value' => 'Pale skin and weakness'],
            ['value' => 'Shortness of breath during activity'],
            ['value' => 'Dizziness or headaches'],
            ['value' => 'Reduced concentration and poor exercise tolerance'],
        ],
                'causes' => [
            ['value' => 'Reduced erythropoietin production by kidneys'],
            ['value' => 'Iron deficiency and poor nutrition'],
            ['value' => 'Chronic inflammation in kidney disease'],
            ['value' => 'Blood loss during dialysis treatment'],
            ['value' => 'Deficiency of vitamins such as B12 or folate'],
        ],
                'risks' => [
            ['value' => 'Reduced quality of life and physical capacity'],
            ['value' => 'Worsening heart disease and heart enlargement'],
            ['value' => 'Increased hospitalization risk'],
            ['value' => 'Fatigue affecting daily activities'],
            ['value' => 'Poor oxygen supply to body tissues'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Erythropoietin-stimulating medications'],
            ['value' => 'Iron supplementation therapy'],
            ['value' => 'Nutritional support and vitamin replacement'],
            ['value' => 'Blood transfusion in severe anemia'],
            ['value' => 'Regular hemoglobin and kidney function monitoring'],
        ],
                'recovery' => 'Anemia associated with CKD can often be effectively controlled with medications and proper monitoring. Early treatment improves energy levels, heart health, and overall well-being.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Anemia of Chronic Kidney Disease',
                'meta_description' => 'Anemia of chronic kidney disease occurs when damaged kidneys produce insufficient erythropoietin, a hormone responsible for stimulating red blood cell productio',
                'meta_keywords' => '',
            ]
        );
    }
}
