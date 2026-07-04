<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiorenalSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cardiorenal Syndrome')],
            [
                'name' => 'Cardiorenal Syndrome',
                'slug' => Str::slug('Cardiorenal Syndrome'),
                'h1' => 'Cardiorenal Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cardiorenal syndrome refers to a complex condition in which heart disease and kidney disease worsen each other. Poor heart function reduces blood flow to the kidneys, while kidney dysfunction increases fluid overload and strain on the heart. This interaction often results in progressive deterioration of both organs.',
                'about_more' => '',
                'overview' => 'Cardiorenal syndrome refers to a complex condition in which heart disease and kidney disease worsen each other. Poor heart function reduces blood flow to the kidneys, while kidney dysfunction increases fluid overload and strain on the heart. This interaction often results in progressive deterioration of both organs.',
                'symptoms' => [
            ['value' => 'Swelling of legs, feet, or abdomen'],
            ['value' => 'Shortness of breath and fatigue'],
            ['value' => 'Reduced urine output'],
            ['value' => 'High blood pressure'],
            ['value' => 'Rapid weight gain due to fluid retention'],
        ],
                'causes' => [
            ['value' => 'Heart failure reducing kidney blood flow'],
            ['value' => 'Chronic kidney disease affecting heart function'],
            ['value' => 'Long-standing hypertension and diabetes'],
            ['value' => 'Fluid overload and vascular disease'],
            ['value' => 'Severe infections or cardiac events'],
        ],
                'risks' => [
            ['value' => 'Progressive kidney and heart failure'],
            ['value' => 'Severe fluid overload causing lung congestion'],
            ['value' => 'Dangerous electrolyte imbalance'],
            ['value' => 'Increased hospitalization and mortality risk'],
            ['value' => 'Reduced quality of life and physical functioning'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Careful fluid and salt management'],
            ['value' => 'Medications for heart failure and blood pressure control'],
            ['value' => 'Diuretics to reduce fluid overload'],
            ['value' => 'Dialysis support in severe kidney dysfunction'],
            ['value' => 'Regular cardiology and nephrology follow-up'],
        ],
                'recovery' => 'Cardiorenal syndrome is usually a chronic condition requiring long-term management. Proper treatment can improve symptoms, reduce hospitalizations, and slow disease progression.',
                'sort_order' => 43,
                'is_active' => true,
                'meta_title' => 'Cardiorenal Syndrome',
                'meta_description' => 'Cardiorenal syndrome refers to a complex condition in which heart disease and kidney disease worsen each other. Poor heart function reduces blood flow to the ki',
                'meta_keywords' => '',
            ]
        );
    }
}
