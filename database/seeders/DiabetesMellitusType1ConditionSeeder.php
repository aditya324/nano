<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabetesMellitusType1ConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetes Mellitus Type 1')],
            [
                'name' => 'Diabetes Mellitus Type 1',
                'slug' => Str::slug('Diabetes Mellitus Type 1'),
                'h1' => 'Diabetes Mellitus Type 1',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Type 1 Diabetes Mellitus is a chronic autoimmune condition in which the body’s immune system attacks and destroys the insulin-producing beta cells of the pancreas. As a result, the body is unable to produce sufficient insulin, leading to elevated blood sugar levels. Type 1 diabetes commonly develops in children, adolescents, or young adults, but it can occur at any age. Lifelong insulin therapy and regular blood sugar monitoring are essential to maintain metabolic balance and prevent complications.',
                'about_more' => '',
                'overview' => 'Type 1 Diabetes Mellitus is a chronic autoimmune condition in which the body’s immune system attacks and destroys the insulin-producing beta cells of the pancreas. As a result, the body is unable to produce sufficient insulin, leading to elevated blood sugar levels. Type 1 diabetes commonly develops in children, adolescents, or young adults, but it can occur at any age. Lifelong insulin therapy and regular blood sugar monitoring are essential to maintain metabolic balance and prevent complications.',
                'symptoms' => [
            ['value' => 'Frequent urination and excessive thirst'],
            ['value' => 'Increased hunger despite normal eating habits'],
            ['value' => 'Unexplained weight loss or fatigue'],
            ['value' => 'Blurred vision or difficulty concentrating'],
            ['value' => 'Nausea, vomiting, or signs of diabetic ketoacidosis in severe cases'],
        ],
                'causes' => [
            ['value' => 'Autoimmune destruction of insulin-producing pancreatic cells'],
            ['value' => 'Genetic predisposition or family history of autoimmune disease'],
            ['value' => 'Viral infections or environmental triggers affecting immune response'],
            ['value' => 'Immune system abnormalities leading to pancreatic damage'],
            ['value' => 'Unknown factors contributing to autoimmune activation'],
        ],
                'risks' => [
            ['value' => 'Diabetic ketoacidosis (DKA) causing life-threatening metabolic imbalance'],
            ['value' => 'Severe low blood sugar (hypoglycemia) episodes'],
            ['value' => 'Long-term damage to eyes, kidneys, nerves, and blood vessels'],
            ['value' => 'Increased risk of heart disease and circulation problems'],
            ['value' => 'Delayed growth, fatigue, or reduced quality of life if poorly controlled'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for Type 1 Diabetes Mellitus focuses on maintaining normal blood sugar levels, preventing complications, and supporting long-term metabolic health. Management may include insulin therapy through injections or insulin pumps, continuous glucose monitoring, blood sugar testing, nutritional counseling, carbohydrate counting, exercise planning, and diabetes education. Patients may also benefit from lifestyle modification, hydration management, regular endocrinology follow-up, psychological support, and preventive healthcare measures to improve long-term diabetes control and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for Type 1 diabetes depends on blood sugar control, treatment adherence, early complication prevention, and overall lifestyle management. Regular insulin therapy, healthy nutrition, physical activity, continuous glucose monitoring, routine medical follow-up, and diabetes education significantly help reduce complications, improve metabolic stability, maintain organ health, and enhance overall quality of life. __________________ 2. Diabetes Mellitus Type 2 Diabetes Mellitus Type 2',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Diabetes Mellitus Type 1',
                'meta_description' => 'Type 1 Diabetes Mellitus is a chronic autoimmune condition in which the body’s immune system attacks and destroys the insulin-producing beta cells of the pancre',
                'meta_keywords' => '',
            ]
        );
    }
}
