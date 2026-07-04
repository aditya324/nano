<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ObesityMetabolicSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Obesity / Metabolic Syndrome')],
            [
                'name' => 'Obesity / Metabolic Syndrome',
                'slug' => Str::slug('Obesity / Metabolic Syndrome'),
                'h1' => 'Obesity / Metabolic Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Obesity and metabolic syndrome are chronic metabolic conditions characterized by excessive body fat accumulation and a cluster of health abnormalities that increase the risk of cardiovascular disease, diabetes, stroke, and other serious medical complications. Metabolic syndrome commonly includes obesity, high blood pressure, elevated blood sugar, abnormal cholesterol levels, and insulin resistance. These conditions can significantly affect overall physical health, hormonal balance, mobility, and quality of life. Early diagnosis and long-term lifestyle and medical management are essential to reduce complications and improve metabolic health.',
                'about_more' => '',
                'overview' => 'Obesity and metabolic syndrome are chronic metabolic conditions characterized by excessive body fat accumulation and a cluster of health abnormalities that increase the risk of cardiovascular disease, diabetes, stroke, and other serious medical complications. Metabolic syndrome commonly includes obesity, high blood pressure, elevated blood sugar, abnormal cholesterol levels, and insulin resistance. These conditions can significantly affect overall physical health, hormonal balance, mobility, and quality of life. Early diagnosis and long-term lifestyle and medical management are essential to reduce complications and improve metabolic health.',
                'symptoms' => [
            ['value' => 'Excessive weight gain or increased abdominal fat'],
            ['value' => 'Fatigue, low energy, or reduced physical endurance'],
            ['value' => 'Elevated blood pressure or blood sugar levels'],
            ['value' => 'Difficulty losing weight or maintaining healthy metabolism'],
            ['value' => 'Sleep disturbances, excessive sweating, or shortness of breath during activity'],
        ],
                'causes' => [
            ['value' => 'Unhealthy diet high in calories, sugar, and processed foods'],
            ['value' => 'Sedentary lifestyle and lack of regular physical activity'],
            ['value' => 'Genetic predisposition or family history of obesity and diabetes'],
            ['value' => 'Hormonal imbalance, insulin resistance, or endocrine disorders'],
            ['value' => 'Chronic stress, poor sleep habits, smoking, or excessive alcohol consumption'],
        ],
                'risks' => [
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'Heart disease, stroke, and hypertension'],
            ['value' => 'Fatty liver disease and cholesterol abnormalities'],
            ['value' => 'Sleep apnea, joint problems, and reduced mobility'],
            ['value' => 'Increased risk of hormonal imbalance, kidney disease, and chronic inflammation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for obesity and metabolic syndrome focuses on improving metabolic health, reducing body weight, controlling associated medical conditions, and preventing long-term complications. Management may include lifestyle modification, healthy diet planning, calorie control, regular physical activity, weight management programs, stress reduction, and medications for diabetes, cholesterol, or blood pressure control. Severe obesity may require bariatric surgery or advanced metabolic treatment programs. Patients may also benefit from nutritional counseling, behavioral therapy, sleep management, endocrinology follow-up, rehabilitation programs, and long-term preventive healthcare support to optimize overall wellness and metabolic stability.'],
        ],
                'recovery' => 'The long-term outlook for obesity and metabolic syndrome is generally positive with early intervention and consistent lifestyle management. Healthy nutrition, regular exercise, weight control, medication adherence, stress management, proper sleep, routine health monitoring, preventive healthcare, and continuous medical follow-up significantly help improve metabolic stability, reduce cardiovascular complications, maintain physical fitness, preserve organ function, and enhance overall quality of life. ______________ 20. Coagulation Disorders (Hemophilia, DVT, PE) Coagulation Disorders (Hemophilia, DVT, PE)',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Obesity / Metabolic Syndrome',
                'meta_description' => 'Obesity and metabolic syndrome are chronic metabolic conditions characterized by excessive body fat accumulation and a cluster of health abnormalities that incr',
                'meta_keywords' => '',
            ]
        );
    }
}
