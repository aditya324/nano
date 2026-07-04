<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabetesMellitusType2ConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetes Mellitus Type 2')],
            [
                'name' => 'Diabetes Mellitus Type 2',
                'slug' => Str::slug('Diabetes Mellitus Type 2'),
                'h1' => 'Diabetes Mellitus Type 2',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Type 2 Diabetes Mellitus is a chronic metabolic disorder in which the body becomes resistant to insulin or does not produce enough insulin to maintain normal blood sugar levels. This leads to elevated glucose levels in the blood, which can gradually affect multiple organs and body systems over time. Type 2 diabetes is commonly associated with obesity, sedentary lifestyle, family history, and aging, and it is one of the most common chronic health conditions worldwide. Early diagnosis and proper long-term management are essential to prevent serious complications and maintain overall health.',
                'about_more' => '',
                'overview' => 'Type 2 Diabetes Mellitus is a chronic metabolic disorder in which the body becomes resistant to insulin or does not produce enough insulin to maintain normal blood sugar levels. This leads to elevated glucose levels in the blood, which can gradually affect multiple organs and body systems over time. Type 2 diabetes is commonly associated with obesity, sedentary lifestyle, family history, and aging, and it is one of the most common chronic health conditions worldwide. Early diagnosis and proper long-term management are essential to prevent serious complications and maintain overall health.',
                'symptoms' => [
            ['value' => 'Frequent urination and increased thirst'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Increased hunger or unexplained weight changes'],
            ['value' => 'Blurred vision or slow wound healing'],
            ['value' => 'Numbness, tingling, or recurrent infections in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Insulin resistance affecting normal glucose metabolism'],
            ['value' => 'Obesity or excess body weight, especially abdominal obesity'],
            ['value' => 'Sedentary lifestyle and lack of physical activity'],
            ['value' => 'Family history or genetic predisposition to diabetes'],
            ['value' => 'Unhealthy diet, stress, aging, or hormonal and metabolic disorders'],
        ],
                'risks' => [
            ['value' => 'Heart disease, stroke, or high blood pressure'],
            ['value' => 'Kidney damage or chronic kidney disease'],
            ['value' => 'Nerve damage causing numbness or reduced sensation'],
            ['value' => 'Vision problems or diabetic retinopathy'],
            ['value' => 'Poor wound healing, infections, or diabetic foot complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for Type 2 Diabetes Mellitus focuses on controlling blood sugar levels, improving insulin sensitivity, preventing complications, and supporting overall metabolic health. Management may include lifestyle modification, healthy diet planning, regular physical activity, weight management, oral anti-diabetic medications, insulin therapy when required, and continuous blood sugar monitoring. Patients may also benefit from nutritional counseling, stress management, smoking cessation, regular health screenings, foot care, and long-term endocrinology follow-up to optimize diabetes control and reduce the risk of complications.'],
        ],
                'recovery' => 'The long-term outlook for Type 2 diabetes depends on blood sugar control, lifestyle habits, treatment adherence, and early complication prevention. Healthy nutrition, regular exercise, weight management, medication adherence, routine medical follow-up, blood pressure and cholesterol control, and continuous diabetes education significantly help improve metabolic stability, reduce complications, preserve organ function, and enhance overall quality of life. ____________________ 3. Gestational Diabetes Gestational Diabetes',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Diabetes Mellitus Type 2',
                'meta_description' => 'Type 2 Diabetes Mellitus is a chronic metabolic disorder in which the body becomes resistant to insulin or does not produce enough insulin to maintain normal bl',
                'meta_keywords' => '',
            ]
        );
    }
}
