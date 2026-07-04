<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InsulinTherapyMultipleRegimensPumpTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Insulin Therapy (Multiple Regimens, Pump Therapy)')],
            [
                'title' => 'Insulin Therapy (Multiple Regimens, Pump Therapy)',
                'slug' => Str::slug('Insulin Therapy (Multiple Regimens, Pump Therapy)'),
                'introduction' => 'Insulin therapy is a specialized diabetes management procedure used to regulate blood sugar levels in individuals whose bodies cannot produce sufficient insulin or cannot effectively use insulin. It is essential in the treatment of Type 1 Diabetes Mellitus and may also be required in Type 2 diabetes, gestational diabetes, and certain endocrine or metabolic conditions. Insulin therapy helps maintain metabolic balance, prevent diabetic emergencies, and reduce the risk of long-term complications affecting major organs.',
                'what_is' => 'Insulin therapy involves administering insulin through injections or insulin pump systems to maintain stable blood glucose levels throughout the day. Multiple insulin regimens may include rapid-acting, short-acting, intermediate-acting, and long-acting insulin combinations tailored to the patient’s lifestyle and medical needs. Insulin pump therapy delivers continuous insulin through a wearable device that closely mimics natural pancreatic insulin release and allows more precise glucose control. These therapies are commonly managed in endocrinology clinics, diabetes care centers, hospitals, and specialized metabolic care programs with regular blood sugar monitoring and treatment adjustment.',
                'symptoms' => [
            ['value' => 'Elevated blood sugar levels or poorly controlled diabetes'],
            ['value' => 'Frequent urination and excessive thirst'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Weight loss or increased hunger'],
            ['value' => 'Recurrent diabetic emergencies such as DKA or severe hyperglycemia'],
        ],
                'causes' => [
            ['value' => 'Type 1 Diabetes Mellitus'],
            ['value' => 'Poorly controlled Type 2 Diabetes'],
            ['value' => 'Gestational diabetes requiring insulin support'],
            ['value' => 'Pancreatic disorders affecting insulin production'],
            ['value' => 'Severe hyperglycemia or diabetic emergencies such as DKA'],
        ],
                'condition_risks' => [
            ['value' => 'Low blood sugar (hypoglycemia) due to excessive insulin dosing'],
            ['value' => 'Weight gain or fluctuations in blood glucose levels'],
            ['value' => 'Injection site irritation or skin infections'],
            ['value' => 'Insulin pump malfunction or infusion set problems'],
            ['value' => 'Difficulty maintaining stable blood sugar without regular monitoring and adherence'],
            ['value' => 'Treatment Options'],
            ['value' => 'Insulin therapy focuses on maintaining normal blood sugar levels, preventing diabetic complications, and supporting long-term metabolic health. Treatment may include basal-bolus insulin regimens, sliding-scale insulin therapy, premixed insulin preparations, insulin pump therapy, and continuous glucose monitoring systems. Patients may also benefit from carbohydrate counting, nutritional counseling, diabetes education, exercise planning, stress management, and regular endocrinology follow-up to optimize blood sugar control and improve overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood sugar and HbA1c monitoring'],
            ['value' => 'Monitoring for hypoglycemia or insulin-related side effects'],
            ['value' => 'Proper insulin storage, injection technique, and pump maintenance education'],
            ['value' => 'Nutritional counseling and individualized diabetes meal planning'],
            ['value' => 'Long-term endocrinology follow-up and insulin dose adjustment when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Low blood sugar (hypoglycemia) due to excessive insulin dosing'],
            ['value' => 'Weight gain or fluctuations in blood glucose levels'],
            ['value' => 'Injection site irritation or skin infections'],
            ['value' => 'Insulin pump malfunction or infusion set problems'],
            ['value' => 'Difficulty maintaining stable blood sugar without regular monitoring and adherence'],
            ['value' => 'Treatment Options'],
            ['value' => 'Insulin therapy focuses on maintaining normal blood sugar levels, preventing diabetic complications, and supporting long-term metabolic health. Treatment may include basal-bolus insulin regimens, sliding-scale insulin therapy, premixed insulin preparations, insulin pump therapy, and continuous glucose monitoring systems. Patients may also benefit from carbohydrate counting, nutritional counseling, diabetes education, exercise planning, stress management, and regular endocrinology follow-up to optimize blood sugar control and improve overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following insulin therapy is generally positive with proper treatment adherence and regular metabolic monitoring. Consistent insulin use, healthy nutrition, physical activity, blood sugar monitoring, diabetes education, stress management, and continuous medical follow-up significantly help maintain metabolic stability, prevent diabetic complications, preserve organ function, improve daily functioning, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Insulin Therapy (Multiple Regimens, Pump Therapy)',
                'seo_description' => 'Insulin therapy is a specialized diabetes management procedure used to regulate blood sugar levels in individuals whose bodies cannot produce sufficient insulin or cannot effectively use insulin. It is essential in the treatment of Type 1 Diabetes Mellitus and may also be required in Type 2 diabetes, gestational diabetes, and certain endocrine or metabolic conditions. Insulin therapy helps maintain metabolic balance, prevent diabetic emergencies, and reduce the risk of long-term complications affecting major organs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
