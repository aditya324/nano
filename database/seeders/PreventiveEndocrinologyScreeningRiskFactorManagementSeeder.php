<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreventiveEndocrinologyScreeningRiskFactorManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Preventive Endocrinology (Screening, Risk Factor Management)')],
            [
                'title' => 'Preventive Endocrinology (Screening, Risk Factor Management)',
                'slug' => Str::slug('Preventive Endocrinology (Screening, Risk Factor Management)'),
                'introduction' => 'Preventive endocrinology is a proactive healthcare approach focused on early detection, risk assessment, lifestyle modification, and prevention of endocrine and metabolic disorders before serious complications develop. This preventive care procedure helps identify hormonal imbalances, metabolic abnormalities, and endocrine risk factors at an early stage, allowing timely intervention to maintain long-term hormonal and metabolic health.',
                'what_is' => 'Preventive endocrinology includes routine health screenings, hormonal evaluations, metabolic assessments, lifestyle counseling, and risk factor management for conditions such as diabetes, thyroid disorders, obesity, osteoporosis, metabolic syndrome, adrenal disorders, and reproductive endocrine conditions. Screening procedures may involve blood sugar testing, thyroid function tests, lipid profiling, bone density scans, hormonal analysis, body composition assessment, and cardiovascular risk evaluation. Preventive endocrine care is commonly supervised by endocrinologists, physicians, nutritionists, diabetes educators, and wellness specialists in hospitals, clinics, and preventive healthcare centers.',
                'symptoms' => [
            ['value' => 'Weight gain or difficulty maintaining healthy metabolism'],
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Family history of diabetes, thyroid disease, or hormonal disorders'],
            ['value' => 'Elevated blood sugar, cholesterol, or blood pressure levels'],
            ['value' => 'Hormonal imbalance or early signs of metabolic dysfunction'],
        ],
                'causes' => [
            ['value' => 'Family history of endocrine or metabolic disorders'],
            ['value' => 'Sedentary lifestyle and unhealthy dietary habits'],
            ['value' => 'Obesity, hypertension, or elevated cholesterol levels'],
            ['value' => 'Hormonal imbalance or unexplained metabolic symptoms'],
            ['value' => 'Increased risk factors for diabetes or cardiovascular disease'],
        ],
                'condition_risks' => [
            ['value' => 'Increased risk of diabetes and metabolic syndrome'],
            ['value' => 'Cardiovascular disease, hypertension, or obesity-related complications'],
            ['value' => 'Hormonal imbalance affecting reproductive and bone health'],
            ['value' => 'Delayed diagnosis of endocrine disorders without regular screening'],
            ['value' => 'Long-term organ damage caused by unmanaged metabolic conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Preventive endocrinology focuses on early detection, risk reduction, metabolic stabilization, and long-term health preservation. Management may include routine endocrine screening, healthy diet planning, weight management programs, regular physical activity, stress management, smoking cessation counseling, blood sugar and cholesterol monitoring, hormonal evaluation, and lifestyle modification support. Patients may also benefit from nutritional counseling, osteoporosis prevention strategies, cardiovascular assessment, diabetes education, and continuous endocrinology follow-up to reduce disease risk and maintain overall health and wellness.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular endocrine and metabolic health screenings'],
            ['value' => 'Monitoring of blood sugar, cholesterol, and hormone levels'],
            ['value' => 'Nutritional counseling and healthy lifestyle guidance'],
            ['value' => 'Risk factor assessment and preventive healthcare planning'],
            ['value' => 'Long-term medical follow-up and wellness monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased risk of diabetes and metabolic syndrome'],
            ['value' => 'Cardiovascular disease, hypertension, or obesity-related complications'],
            ['value' => 'Hormonal imbalance affecting reproductive and bone health'],
            ['value' => 'Delayed diagnosis of endocrine disorders without regular screening'],
            ['value' => 'Long-term organ damage caused by unmanaged metabolic conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Preventive endocrinology focuses on early detection, risk reduction, metabolic stabilization, and long-term health preservation. Management may include routine endocrine screening, healthy diet planning, weight management programs, regular physical activity, stress management, smoking cessation counseling, blood sugar and cholesterol monitoring, hormonal evaluation, and lifestyle modification support. Patients may also benefit from nutritional counseling, osteoporosis prevention strategies, cardiovascular assessment, diabetes education, and continuous endocrinology follow-up to reduce disease risk and maintain overall health and wellness.'],
        ],
                'long_term_outlook' => 'The long-term outlook following preventive endocrinology care is highly positive when patients actively participate in healthy lifestyle and preventive healthcare programs. Regular screenings, healthy nutrition, exercise, stress reduction, weight management, medical monitoring, and continuous healthcare follow-up significantly help prevent endocrine disorders, reduce metabolic complications, preserve organ function, improve long-term health outcomes, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Preventive Endocrinology (Screening, Risk Factor Management)',
                'seo_description' => 'Preventive endocrinology is a proactive healthcare approach focused on early detection, risk assessment, lifestyle modification, and prevention of endocrine and metabolic disorders before serious complications develop. This preventive care procedure helps identify hormonal imbalances, metabolic abnormalities, and endocrine risk factors at an early stage, allowing timely intervention to maintain long-term hormonal and metabolic health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
