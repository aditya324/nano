<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetabolicSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Metabolic Syndrome')],
            [
                'name' => 'Metabolic Syndrome',
                'slug' => Str::slug('Metabolic Syndrome'),
                'h1' => 'Metabolic Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Metabolic syndrome is a group of interconnected metabolic conditions that occur together and significantly increase the risk of heart disease, stroke, Type 2 diabetes, and other serious health complications. It is characterized by a combination of abdominal obesity, high blood pressure, elevated blood sugar levels, abnormal cholesterol levels, and insulin resistance. Metabolic syndrome is commonly associated with unhealthy lifestyle habits, obesity, and reduced physical activity, making early diagnosis and long-term lifestyle management essential for preventing chronic disease progression.',
                'about_more' => '',
                'overview' => 'Metabolic syndrome is a group of interconnected metabolic conditions that occur together and significantly increase the risk of heart disease, stroke, Type 2 diabetes, and other serious health complications. It is characterized by a combination of abdominal obesity, high blood pressure, elevated blood sugar levels, abnormal cholesterol levels, and insulin resistance. Metabolic syndrome is commonly associated with unhealthy lifestyle habits, obesity, and reduced physical activity, making early diagnosis and long-term lifestyle management essential for preventing chronic disease progression.',
                'symptoms' => [
            ['value' => 'Increased abdominal or central body fat'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Elevated blood pressure or blood sugar levels'],
            ['value' => 'Increased thirst or frequent urination in some patients'],
            ['value' => 'Often asymptomatic and detected during routine health screening'],
        ],
                'causes' => [
            ['value' => 'Obesity and excess abdominal fat accumulation'],
            ['value' => 'Sedentary lifestyle and lack of physical activity'],
            ['value' => 'Insulin resistance affecting glucose metabolism'],
            ['value' => 'Unhealthy diet high in sugar, fats, and processed foods'],
            ['value' => 'Genetic predisposition, stress, aging, or hormonal imbalance'],
        ],
                'risks' => [
            ['value' => 'Increased risk of Type 2 diabetes mellitus'],
            ['value' => 'Heart disease, stroke, or cardiovascular complications'],
            ['value' => 'High cholesterol and blood vessel damage'],
            ['value' => 'Fatty liver disease or chronic kidney disease'],
            ['value' => 'Increased risk of obesity-related hormonal and metabolic disorders'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for metabolic syndrome focuses on improving metabolic health, reducing cardiovascular risk factors, controlling blood sugar and cholesterol levels, and supporting long-term weight management. Management may include healthy diet planning, regular physical activity, weight reduction programs, blood pressure control, cholesterol-lowering medications, diabetes management, stress reduction, and lifestyle modification counseling. Patients may also benefit from nutritional counseling, smoking cessation, regular health screenings, endocrinology follow-up, and preventive cardiovascular care to reduce long-term complications and improve overall health outcomes.'],
        ],
                'recovery' => 'The long-term outlook for metabolic syndrome is generally positive with early intervention and consistent lifestyle modification. Healthy nutrition, regular exercise, weight management, medication adherence, stress control, smoking cessation, routine medical monitoring, and continuous healthcare follow-up significantly help improve metabolic stability, reduce cardiovascular and diabetic complications, preserve organ function, and enhance overall quality of life. _______________________ 14. Obesity / Morbid Obesity Obesity / Morbid Obesity',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Metabolic Syndrome',
                'meta_description' => 'Metabolic syndrome is a group of interconnected metabolic conditions that occur together and significantly increase the risk of heart disease, stroke, Type 2 di',
                'meta_keywords' => '',
            ]
        );
    }
}
