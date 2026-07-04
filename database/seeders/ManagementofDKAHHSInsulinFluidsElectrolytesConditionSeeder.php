<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofDKAHHSInsulinFluidsElectrolytesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of DKA / HHS (Insulin, Fluids, Electrolytes)')],
            [
                'name' => 'Management of DKA / HHS (Insulin, Fluids, Electrolytes)',
                'slug' => Str::slug('Management of DKA / HHS (Insulin, Fluids, Electrolytes)'),
                'h1' => 'Management of DKA / HHS (Insulin, Fluids, Electrolytes)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) involves emergency critical care procedures used to stabilize patients with severe diabetic metabolic emergencies caused by dangerously high blood sugar levels, dehydration, electrolyte imbalance, and impaired insulin activity. These procedures focus on restoring fluid balance, correcting blood glucose levels, managing electrolyte abnormalities, and preventing life-threatening complications affecting the brain, heart, kidneys, and other organs.',
                'about_more' => '',
                'overview' => 'DKA and HHS management procedures are commonly performed in emergency departments, intensive care units, and critical care settings under continuous medical monitoring. Treatment involves rapid intravenous fluid resuscitation to correct dehydration, insulin therapy to reduce blood glucose levels, and careful electrolyte replacement to stabilize heart, nerve, and muscle function. Patients also require monitoring of blood pressure, urine output, acid-base balance, kidney function, and neurological status. Early identification and treatment of underlying triggers such as infections, medication noncompliance, or acute illness are essential components of comprehensive diabetic emergency management.',
                'symptoms' => [
            ['value' => 'Excessive thirst and frequent urination'],
            ['value' => 'Severe dehydration, weakness, or fatigue'],
            ['value' => 'Nausea, vomiting, or abdominal pain'],
            ['value' => 'Confusion, dizziness, or altered consciousness'],
            ['value' => 'Rapid breathing, fruity-smelling breath, or signs of severe metabolic imbalance'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Severe dehydration and circulatory collapse'],
            ['value' => 'Electrolyte imbalance causing cardiac arrhythmias or muscle dysfunction'],
            ['value' => 'Acute kidney injury or worsening renal failure'],
            ['value' => 'Brain swelling or neurological complications'],
            ['value' => 'Multi-organ dysfunction and life-threatening metabolic complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Management of DKA and HHS focuses on stabilizing circulation, reducing blood glucose levels, correcting metabolic abnormalities, and treating the underlying cause. Treatment may include intravenous fluid therapy, insulin infusion, electrolyte replacement, cardiac monitoring, oxygen support, infection management, intensive care monitoring, and supportive critical care interventions. Patients may also require nutritional counseling, diabetes education, medication adjustment, glucose monitoring, endocrinology consultation, and long-term diabetes management planning to prevent recurrence and improve metabolic control.'],
            ['value' => 'Continuous blood glucose and electrolyte monitoring'],
            ['value' => 'Monitoring kidney function, urine output, and acid-base balance'],
            ['value' => 'Adjustment of insulin therapy and diabetic medications'],
            ['value' => 'Nutritional counseling and diabetes education support'],
            ['value' => 'Long-term endocrinology follow-up and diabetic care planning'],
        ],
                'recovery' => 'The long-term outlook following management of DKA or HHS depends on the severity of metabolic imbalance, speed of treatment, underlying health conditions, and long-term diabetes control. Early intervention, proper insulin management, regular glucose monitoring, medication adherence, healthy lifestyle habits, diabetes education, and continuous medical follow-up significantly help reduce complications, prevent recurrence, improve metabolic stability, and enhance overall quality of life. ______________________ 17. Management of Shock (Vasopressors, Inotropes, Fluids) Management of Shock (Vasopressors, Inotropes, Fluids) Procedures',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Management of DKA / HHS (Insulin, Fluids, Electrolytes)',
                'meta_description' => 'Management of Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) involves emergency critical care procedures used to stabilize patients with',
                'meta_keywords' => '',
            ]
        );
    }
}
