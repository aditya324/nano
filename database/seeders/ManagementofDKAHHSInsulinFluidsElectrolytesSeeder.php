<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofDKAHHSInsulinFluidsElectrolytesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of DKA / HHS (Insulin, Fluids, Electrolytes)')],
            [
                'title' => 'Management of DKA / HHS (Insulin, Fluids, Electrolytes)',
                'slug' => Str::slug('Management of DKA / HHS (Insulin, Fluids, Electrolytes)'),
                'introduction' => 'Management of Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) involves emergency critical care procedures used to stabilize patients with severe diabetic metabolic emergencies caused by dangerously high blood sugar levels, dehydration, electrolyte imbalance, and impaired insulin activity. These procedures focus on restoring fluid balance, correcting blood glucose levels, managing electrolyte abnormalities, and preventing life-threatening complications affecting the brain, heart, kidneys, and other organs.',
                'what_is' => 'DKA and HHS management procedures are commonly performed in emergency departments, intensive care units, and critical care settings under continuous medical monitoring. Treatment involves rapid intravenous fluid resuscitation to correct dehydration, insulin therapy to reduce blood glucose levels, and careful electrolyte replacement to stabilize heart, nerve, and muscle function. Patients also require monitoring of blood pressure, urine output, acid-base balance, kidney function, and neurological status. Early identification and treatment of underlying triggers such as infections, medication noncompliance, or acute illness are essential components of comprehensive diabetic emergency management.',
                'symptoms' => [
            ['value' => 'Excessive thirst and frequent urination'],
            ['value' => 'Severe dehydration, weakness, or fatigue'],
            ['value' => 'Nausea, vomiting, or abdominal pain'],
            ['value' => 'Confusion, dizziness, or altered consciousness'],
            ['value' => 'Rapid breathing, fruity-smelling breath, or signs of severe metabolic imbalance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe dehydration and circulatory collapse'],
            ['value' => 'Electrolyte imbalance causing cardiac arrhythmias or muscle dysfunction'],
            ['value' => 'Acute kidney injury or worsening renal failure'],
            ['value' => 'Brain swelling or neurological complications'],
            ['value' => 'Multi-organ dysfunction and life-threatening metabolic complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of DKA and HHS focuses on stabilizing circulation, reducing blood glucose levels, correcting metabolic abnormalities, and treating the underlying cause. Treatment may include intravenous fluid therapy, insulin infusion, electrolyte replacement, cardiac monitoring, oxygen support, infection management, intensive care monitoring, and supportive critical care interventions. Patients may also require nutritional counseling, diabetes education, medication adjustment, glucose monitoring, endocrinology consultation, and long-term diabetes management planning to prevent recurrence and improve metabolic control.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous blood glucose and electrolyte monitoring'],
            ['value' => 'Monitoring kidney function, urine output, and acid-base balance'],
            ['value' => 'Adjustment of insulin therapy and diabetic medications'],
            ['value' => 'Nutritional counseling and diabetes education support'],
            ['value' => 'Long-term endocrinology follow-up and diabetic care planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe dehydration and circulatory collapse'],
            ['value' => 'Electrolyte imbalance causing cardiac arrhythmias or muscle dysfunction'],
            ['value' => 'Acute kidney injury or worsening renal failure'],
            ['value' => 'Brain swelling or neurological complications'],
            ['value' => 'Multi-organ dysfunction and life-threatening metabolic complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of DKA and HHS focuses on stabilizing circulation, reducing blood glucose levels, correcting metabolic abnormalities, and treating the underlying cause. Treatment may include intravenous fluid therapy, insulin infusion, electrolyte replacement, cardiac monitoring, oxygen support, infection management, intensive care monitoring, and supportive critical care interventions. Patients may also require nutritional counseling, diabetes education, medication adjustment, glucose monitoring, endocrinology consultation, and long-term diabetes management planning to prevent recurrence and improve metabolic control.'],
        ],
                'long_term_outlook' => 'The long-term outlook following management of DKA or HHS depends on the severity of metabolic imbalance, speed of treatment, underlying health conditions, and long-term diabetes control. Early intervention, proper insulin management, regular glucose monitoring, medication adherence, healthy lifestyle habits, diabetes education, and continuous medical follow-up significantly help reduce complications, prevent recurrence, improve metabolic stability, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Management of DKA / HHS (Insulin, Fluids, Electrolytes)',
                'seo_description' => 'Management of Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) involves emergency critical care procedures used to stabilize patients with severe diabetic metabolic emergencies caused by dangerously high blood sugar levels, dehydration, electrolyte imbalance, and impaired insulin activity. These procedures focus on restoring fluid balance, correcting blood glucose levels, managing electrolyte abnormalities, and preventing life-threatening complications affecting the brain, heart, kidneys, and other organs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
