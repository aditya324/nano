<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InsulinPumpAdvancedDiabetesTechnologiesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Insulin Pump / Advanced Diabetes Technologies')],
            [
                'title' => 'Insulin Pump / Advanced Diabetes Technologies',
                'slug' => Str::slug('Insulin Pump / Advanced Diabetes Technologies'),
                'introduction' => 'Insulin pump and advanced diabetes technologies are specialized diabetes management procedures designed to improve blood sugar control, automate insulin delivery, and support long-term metabolic stability in individuals with diabetes. These technologies help provide more precise glucose monitoring and insulin administration, reducing the risk of complications associated with fluctuating blood sugar levels. Advanced diabetes care systems significantly enhance treatment flexibility, patient convenience, and overall quality of life.',
                'what_is' => 'Insulin pumps are wearable medical devices that deliver continuous insulin through a small catheter placed under the skin, closely mimicking the body’s natural insulin release. Advanced diabetes technologies may also include Continuous Glucose Monitoring (CGM) systems, automated insulin delivery systems, smart insulin pens, and hybrid closed-loop systems that integrate glucose monitoring with insulin delivery. These technologies are commonly used in Type 1 Diabetes, insulin-dependent Type 2 Diabetes, gestational diabetes, and patients requiring intensive glucose management. Treatment is supervised by endocrinologists, diabetes educators, and specialized metabolic care teams to optimize blood sugar control and long-term diabetes outcomes.',
                'symptoms' => [
            ['value' => 'Frequent blood sugar fluctuations or unstable diabetes control'],
            ['value' => 'Recurrent hypoglycemia or hyperglycemia episodes'],
            ['value' => 'Difficulty managing diabetes with multiple daily injections'],
            ['value' => 'Elevated HbA1c levels despite ongoing treatment'],
            ['value' => 'Need for continuous glucose monitoring and precise insulin adjustment'],
        ],
                'causes' => [
            ['value' => 'Type 1 Diabetes requiring continuous insulin therapy'],
            ['value' => 'Poorly controlled Type 2 Diabetes'],
            ['value' => 'Frequent blood sugar fluctuations or hypoglycemia episodes'],
            ['value' => 'Need for intensive insulin management and glucose monitoring'],
            ['value' => 'Difficulty managing diabetes with multiple daily injections'],
        ],
                'condition_risks' => [
            ['value' => 'Insulin pump malfunction or infusion site problems'],
            ['value' => 'Risk of diabetic ketoacidosis if insulin delivery is interrupted'],
            ['value' => 'Skin irritation or infection at catheter or sensor sites'],
            ['value' => 'Device-related technical issues or inaccurate glucose readings'],
            ['value' => 'Dependence on regular monitoring and proper device maintenance'],
            ['value' => 'Treatment Options'],
            ['value' => 'Insulin pump and advanced diabetes technologies focus on improving glucose control, reducing diabetes-related complications, supporting flexible insulin management, and enhancing long-term metabolic health. Treatment may include insulin pump therapy, continuous glucose monitoring systems, automated insulin delivery technology, smart insulin management tools, carbohydrate counting, diabetes education, nutritional counseling, exercise planning, and regular endocrinology follow-up. Patients may also benefit from personalized diabetes care plans, lifestyle modification, stress management, and ongoing technical training to optimize treatment effectiveness and overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of blood glucose trends and device performance'],
            ['value' => 'Proper insulin pump and sensor maintenance education'],
            ['value' => 'Monitoring for skin irritation, infection, or infusion-related issues'],
            ['value' => 'Adjustment of insulin settings based on glucose patterns and lifestyle needs'],
            ['value' => 'Long-term endocrinology follow-up and diabetes technology support'],
        ],
                'surgery_risks' => [
            ['value' => 'Insulin pump malfunction or infusion site problems'],
            ['value' => 'Risk of diabetic ketoacidosis if insulin delivery is interrupted'],
            ['value' => 'Skin irritation or infection at catheter or sensor sites'],
            ['value' => 'Device-related technical issues or inaccurate glucose readings'],
            ['value' => 'Dependence on regular monitoring and proper device maintenance'],
            ['value' => 'Treatment Options'],
            ['value' => 'Insulin pump and advanced diabetes technologies focus on improving glucose control, reducing diabetes-related complications, supporting flexible insulin management, and enhancing long-term metabolic health. Treatment may include insulin pump therapy, continuous glucose monitoring systems, automated insulin delivery technology, smart insulin management tools, carbohydrate counting, diabetes education, nutritional counseling, exercise planning, and regular endocrinology follow-up. Patients may also benefit from personalized diabetes care plans, lifestyle modification, stress management, and ongoing technical training to optimize treatment effectiveness and overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following insulin pump therapy and advanced diabetes technology use is generally highly positive with proper training and regular medical supervision. Continuous glucose monitoring, insulin optimization, healthy nutrition, exercise, medication adherence, diabetes education, stress management, and ongoing endocrinology care significantly help maintain metabolic stability, reduce diabetic emergencies, prevent complications, preserve organ health, improve treatment flexibility, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Insulin Pump / Advanced Diabetes Technologies',
                'seo_description' => 'Insulin pump and advanced diabetes technologies are specialized diabetes management procedures designed to improve blood sugar control, automate insulin delivery, and support long-term metabolic stability in individuals with diabetes. These technologies help provide more precise glucose monitoring and insulin administration, reducing the risk of complications associated with fluctuating blood sugar levels. Advanced diabetes care systems significantly enhance treatment flexibility, patient convenience, and overall quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
