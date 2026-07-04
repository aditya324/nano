<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OralHypoglycemicAgentsMetforminSulfonylureasSGLT2iDPP4iSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Oral Hypoglycemic Agents (Metformin, Sulfonylureas, SGLT2i, DPP4i)')],
            [
                'title' => 'Oral Hypoglycemic Agents (Metformin, Sulfonylureas, SGLT2i, DPP4i)',
                'slug' => Str::slug('Oral Hypoglycemic Agents (Metformin, Sulfonylureas, SGLT2i, DPP4i)'),
                'introduction' => 'Oral hypoglycemic agents are medications used to help control blood sugar levels in individuals with Type 2 Diabetes Mellitus and other insulin resistance-related conditions. These medications work through different mechanisms to improve insulin sensitivity, stimulate insulin release, reduce glucose production, or enhance glucose excretion from the body. Proper use of oral anti-diabetic medications plays a vital role in maintaining blood sugar control, preventing complications, and supporting long-term metabolic health.',
                'what_is' => 'Oral hypoglycemic therapy includes several classes of medications such as Metformin, Sulfonylureas, Sodium-Glucose Cotransporter-2 Inhibitors (SGLT2i), and Dipeptidyl Peptidase-4 Inhibitors (DPP4i). Metformin primarily improves insulin sensitivity and reduces glucose production in the liver. Sulfonylureas stimulate insulin release from the pancreas, while SGLT2 inhibitors help remove excess glucose through urine. DPP4 inhibitors improve blood sugar regulation by enhancing natural incretin hormone activity. These medications are commonly prescribed in endocrinology clinics, diabetes care centers, and primary healthcare settings as part of long-term diabetes management programs.',
                'symptoms' => [
            ['value' => 'Elevated blood sugar levels or uncontrolled diabetes'],
            ['value' => 'Frequent urination and excessive thirst'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Increased hunger or unexplained weight changes'],
            ['value' => 'Difficulty maintaining stable blood glucose levels despite lifestyle modification'],
        ],
                'causes' => [
            ['value' => 'Type 2 Diabetes Mellitus'],
            ['value' => 'Insulin resistance and metabolic syndrome'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Family history of diabetes'],
            ['value' => 'Poor dietary habits and uncontrolled blood sugar levels'],
        ],
                'condition_risks' => [
            ['value' => 'Low blood sugar (hypoglycemia), especially with Sulfonylureas'],
            ['value' => 'Gastrointestinal discomfort such as nausea or diarrhea with Metformin'],
            ['value' => 'Urinary tract or genital infections associated with SGLT2 inhibitors'],
            ['value' => 'Weight gain or fluid imbalance in selected patients'],
            ['value' => 'Reduced medication effectiveness or side effects requiring treatment adjustment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Oral hypoglycemic therapy focuses on improving blood sugar control, reducing insulin resistance, preventing diabetic complications, and supporting long-term metabolic health. Treatment may include single-drug therapy or combination therapy using Metformin, Sulfonylureas, SGLT2 inhibitors, DPP4 inhibitors, or other anti-diabetic medications. Patients may also benefit from blood sugar monitoring, healthy diet planning, regular exercise, weight management, diabetes education, stress management, and long-term endocrinology follow-up to optimize treatment outcomes and overall metabolic stability.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of blood sugar levels and HbA1c'],
            ['value' => 'Monitoring for medication side effects or hypoglycemia episodes'],
            ['value' => 'Nutritional counseling and diabetes lifestyle management'],
            ['value' => 'Periodic kidney, liver, and cardiovascular health evaluation'],
            ['value' => 'Long-term endocrinology follow-up and medication adjustment when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Low blood sugar (hypoglycemia), especially with Sulfonylureas'],
            ['value' => 'Gastrointestinal discomfort such as nausea or diarrhea with Metformin'],
            ['value' => 'Urinary tract or genital infections associated with SGLT2 inhibitors'],
            ['value' => 'Weight gain or fluid imbalance in selected patients'],
            ['value' => 'Reduced medication effectiveness or side effects requiring treatment adjustment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Oral hypoglycemic therapy focuses on improving blood sugar control, reducing insulin resistance, preventing diabetic complications, and supporting long-term metabolic health. Treatment may include single-drug therapy or combination therapy using Metformin, Sulfonylureas, SGLT2 inhibitors, DPP4 inhibitors, or other anti-diabetic medications. Patients may also benefit from blood sugar monitoring, healthy diet planning, regular exercise, weight management, diabetes education, stress management, and long-term endocrinology follow-up to optimize treatment outcomes and overall metabolic stability.'],
        ],
                'long_term_outlook' => 'The long-term outlook following oral hypoglycemic therapy is generally positive with proper medication adherence and healthy lifestyle management. Regular blood sugar monitoring, balanced nutrition, exercise, weight control, medication compliance, stress reduction, and continuous medical follow-up significantly help maintain metabolic stability, reduce diabetic complications, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Oral Hypoglycemic Agents (Metformin, Sulfonylureas, SGLT2i, DPP4i)',
                'seo_description' => 'Oral hypoglycemic agents are medications used to help control blood sugar levels in individuals with Type 2 Diabetes Mellitus and other insulin resistance-related conditions. These medications work through different mechanisms to improve insulin sensitivity, stimulate insulin release, reduce glucose production, or enhance glucose excretion from the body. Proper use of oral anti-diabetic medications plays a vital role in maintaining blood sugar control, preventing complications, and supporting long-term metabolic health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
