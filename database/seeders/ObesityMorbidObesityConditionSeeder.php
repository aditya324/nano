<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ObesityMorbidObesityConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Obesity / Morbid Obesity')],
            [
                'name' => 'Obesity / Morbid Obesity',
                'slug' => Str::slug('Obesity / Morbid Obesity'),
                'h1' => 'Obesity / Morbid Obesity',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Obesity and morbid obesity are chronic medical conditions characterized by excessive body fat accumulation that can negatively affect overall health, metabolism, mobility, and organ function. Obesity is commonly assessed using Body Mass Index (BMI), while morbid obesity refers to severe obesity associated with a significantly increased risk of serious medical complications. These conditions are closely linked to diabetes, heart disease, hypertension, sleep apnea, joint disorders, and metabolic syndrome, making early intervention and long-term weight management essential for improving health outcomes.',
                'about_more' => '',
                'overview' => 'Obesity and morbid obesity are chronic medical conditions characterized by excessive body fat accumulation that can negatively affect overall health, metabolism, mobility, and organ function. Obesity is commonly assessed using Body Mass Index (BMI), while morbid obesity refers to severe obesity associated with a significantly increased risk of serious medical complications. These conditions are closely linked to diabetes, heart disease, hypertension, sleep apnea, joint disorders, and metabolic syndrome, making early intervention and long-term weight management essential for improving health outcomes.',
                'symptoms' => [
            ['value' => 'Excessive weight gain or increased body fat accumulation'],
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Shortness of breath during physical activity'],
            ['value' => 'Joint pain, back pain, or mobility difficulties'],
            ['value' => 'Sleep disturbances, snoring, or daytime sleepiness'],
        ],
                'causes' => [
            ['value' => 'Excess calorie intake and unhealthy dietary habits'],
            ['value' => 'Sedentary lifestyle and lack of physical activity'],
            ['value' => 'Genetic predisposition or family history of obesity'],
            ['value' => 'Hormonal or metabolic disorders affecting weight regulation'],
            ['value' => 'Stress, emotional eating, medications, or sleep disturbances contributing to weight gain'],
        ],
                'risks' => [
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'High blood pressure, heart disease, or stroke'],
            ['value' => 'Sleep apnea and chronic breathing difficulties'],
            ['value' => 'Joint disorders, osteoarthritis, or reduced mobility'],
            ['value' => 'Increased risk of fatty liver disease, infertility, depression, and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for obesity and morbid obesity focuses on achieving healthy weight reduction, improving metabolic health, preventing complications, and supporting long-term lifestyle changes. Management may include personalized diet planning, regular physical activity, behavioral therapy, nutritional counseling, weight-loss medications, and structured exercise programs. Patients with severe obesity may also benefit from bariatric surgery, hormonal evaluation, sleep disorder management, psychological counseling, and multidisciplinary obesity care programs. Long-term endocrinology follow-up, metabolic monitoring, and lifestyle modification are essential to maintain sustainable weight loss and overall health improvement.'],
        ],
                'recovery' => 'The long-term outlook for obesity and morbid obesity is generally positive with early intervention and consistent lifestyle management. Healthy nutrition, regular exercise, weight monitoring, behavioral support, medication adherence, stress management, smoking cessation, and continuous medical follow-up significantly help reduce complications, improve metabolic stability, enhance mobility, support cardiovascular health, and improve overall quality of life. ___________________',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Obesity / Morbid Obesity',
                'meta_description' => 'Obesity and morbid obesity are chronic medical conditions characterized by excessive body fat accumulation that can negatively affect overall health, metabolism',
                'meta_keywords' => '',
            ]
        );
    }
}
