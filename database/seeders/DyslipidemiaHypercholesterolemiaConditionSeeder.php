<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DyslipidemiaHypercholesterolemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dyslipidemia / Hypercholesterolemia')],
            [
                'name' => 'Dyslipidemia / Hypercholesterolemia',
                'slug' => Str::slug('Dyslipidemia / Hypercholesterolemia'),
                'h1' => 'Dyslipidemia / Hypercholesterolemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dyslipidemia, also known as hypercholesterolemia when cholesterol levels are specifically elevated, is a metabolic disorder characterized by abnormal levels of lipids such as cholesterol and triglycerides in the blood. This condition can lead to plaque buildup within blood vessels, increasing the risk of heart disease, stroke, and other cardiovascular complications. Dyslipidemia may involve elevated low-density lipoprotein (LDL) cholesterol, reduced high-density lipoprotein (HDL) cholesterol, or increased triglyceride levels. Early diagnosis and long-term lipid management are essential to maintain cardiovascular and metabolic health.',
                'about_more' => '',
                'overview' => 'Dyslipidemia, also known as hypercholesterolemia when cholesterol levels are specifically elevated, is a metabolic disorder characterized by abnormal levels of lipids such as cholesterol and triglycerides in the blood. This condition can lead to plaque buildup within blood vessels, increasing the risk of heart disease, stroke, and other cardiovascular complications. Dyslipidemia may involve elevated low-density lipoprotein (LDL) cholesterol, reduced high-density lipoprotein (HDL) cholesterol, or increased triglyceride levels. Early diagnosis and long-term lipid management are essential to maintain cardiovascular and metabolic health.',
                'symptoms' => [
            ['value' => 'Often asymptomatic and detected during routine blood testing'],
            ['value' => 'Chest discomfort or reduced exercise tolerance in advanced cardiovascular disease'],
            ['value' => 'Fat deposits under the skin or around the eyes in severe cases'],
            ['value' => 'Fatigue or poor circulation-related symptoms'],
            ['value' => 'High blood pressure or obesity-related metabolic symptoms associated with lipid imbalance'],
        ],
                'causes' => [
            ['value' => 'Unhealthy diet high in saturated fats and processed foods'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Genetic predisposition or family history of high cholesterol'],
            ['value' => 'Diabetes, hypothyroidism, or metabolic disorders affecting lipid metabolism'],
            ['value' => 'Smoking, excessive alcohol consumption, or certain medications'],
        ],
                'risks' => [
            ['value' => 'Coronary artery disease and heart attack'],
            ['value' => 'Stroke or peripheral vascular disease'],
            ['value' => 'Fatty liver disease and metabolic syndrome'],
            ['value' => 'High blood pressure and cardiovascular complications'],
            ['value' => 'Long-term blood vessel damage and reduced organ circulation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for dyslipidemia and hypercholesterolemia focuses on reducing abnormal lipid levels, preventing cardiovascular complications, and improving long-term metabolic health. Management may include lifestyle modification, low-fat and heart-healthy diet planning, regular physical activity, weight management, smoking cessation, and cholesterol-lowering medications such as statins or other lipid-lowering therapies. Patients may also benefit from nutritional counseling, diabetes management, blood pressure control, preventive cardiovascular screening, endocrinology or cardiology follow-up, and regular lipid profile monitoring to maintain healthy cholesterol levels and overall cardiovascular stability.'],
        ],
                'recovery' => 'The long-term outlook for dyslipidemia and hypercholesterolemia is generally positive with early diagnosis and proper lifestyle and medical management. Healthy nutrition, regular exercise, weight control, medication adherence, stress management, routine lipid monitoring, smoking cessation, and continuous medical follow-up significantly help reduce cardiovascular risk, improve metabolic stability, preserve blood vessel health, and enhance overall quality of life. __________________ 4. Coronary Artery Disease / Ischemic Heart Disease Coronary Artery Disease / Ischemic Heart Disease',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Dyslipidemia / Hypercholesterolemia',
                'meta_description' => 'Dyslipidemia, also known as hypercholesterolemia when cholesterol levels are specifically elevated, is a metabolic disorder characterized by abnormal levels of ',
                'meta_keywords' => '',
            ]
        );
    }
}
