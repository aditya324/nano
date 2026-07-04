<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InsulinResistanceSyndromesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Insulin Resistance Syndromes')],
            [
                'name' => 'Insulin Resistance Syndromes',
                'slug' => Str::slug('Insulin Resistance Syndromes'),
                'h1' => 'Insulin Resistance Syndromes',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Insulin resistance syndromes are metabolic disorders in which the body’s cells do not respond properly to insulin, resulting in difficulty regulating blood sugar levels and maintaining normal metabolic function. As insulin resistance progresses, the pancreas produces more insulin to compensate, which can eventually lead to elevated blood glucose levels, Type 2 diabetes, obesity-related complications, and cardiovascular disease. These syndromes are commonly associated with obesity, metabolic syndrome, hormonal imbalance, and sedentary lifestyle habits, requiring early diagnosis and long-term metabolic management.',
                'about_more' => '',
                'overview' => 'Insulin resistance syndromes are metabolic disorders in which the body’s cells do not respond properly to insulin, resulting in difficulty regulating blood sugar levels and maintaining normal metabolic function. As insulin resistance progresses, the pancreas produces more insulin to compensate, which can eventually lead to elevated blood glucose levels, Type 2 diabetes, obesity-related complications, and cardiovascular disease. These syndromes are commonly associated with obesity, metabolic syndrome, hormonal imbalance, and sedentary lifestyle habits, requiring early diagnosis and long-term metabolic management.',
                'symptoms' => [
            ['value' => 'Weight gain, especially around the abdomen'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Increased hunger or sugar cravings'],
            ['value' => 'Darkened skin patches, especially around the neck or underarms (acanthosis nigricans)'],
            ['value' => 'Elevated blood sugar levels or difficulty losing weight'],
        ],
                'causes' => [
            ['value' => 'Obesity and excess abdominal fat accumulation'],
            ['value' => 'Sedentary lifestyle and lack of physical activity'],
            ['value' => 'Genetic predisposition or family history of diabetes'],
            ['value' => 'Hormonal disorders such as PCOS or metabolic syndrome'],
            ['value' => 'Unhealthy diet, chronic stress, or sleep disturbances affecting metabolism'],
        ],
                'risks' => [
            ['value' => 'Type 2 diabetes mellitus'],
            ['value' => 'High blood pressure and cardiovascular disease'],
            ['value' => 'Fatty liver disease and metabolic syndrome'],
            ['value' => 'Polycystic ovary syndrome (PCOS) and reproductive health issues'],
            ['value' => 'Increased risk of obesity-related complications and chronic inflammation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for insulin resistance syndromes focuses on improving insulin sensitivity, controlling blood sugar levels, reducing metabolic risk factors, and preventing long-term complications. Management may include healthy diet planning, weight reduction programs, regular physical activity, oral medications such as insulin sensitizers, blood sugar monitoring, and lifestyle modification counseling. Patients may also benefit from nutritional counseling, stress management, sleep optimization, hormonal evaluation, endocrinology follow-up, and cardiovascular risk assessment to support long-term metabolic health and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for insulin resistance syndromes is generally positive with early intervention and consistent lifestyle management. Healthy nutrition, regular exercise, weight management, medication adherence, stress reduction, routine medical monitoring, and continuous endocrinology follow-up significantly help improve insulin sensitivity, prevent diabetes progression, reduce cardiovascular complications, maintain metabolic stability, and enhance overall quality of life. _____________ 25. Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma) Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma)',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Insulin Resistance Syndromes',
                'meta_description' => 'Insulin resistance syndromes are metabolic disorders in which the body’s cells do not respond properly to insulin, resulting in difficulty regulating blood suga',
                'meta_keywords' => '',
            ]
        );
    }
}
