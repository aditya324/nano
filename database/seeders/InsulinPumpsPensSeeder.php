<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InsulinPumpsPensSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Insulin Pumps / Pens')],
            [
                'title' => 'Insulin Pumps / Pens',
                'slug' => Str::slug('Insulin Pumps / Pens'),
                'introduction' => 'Insulin pumps and insulin pens are advanced diabetes management devices used to deliver insulin accurately and conveniently in individuals with diabetes requiring insulin therapy. These devices help maintain stable blood sugar levels, improve treatment flexibility, reduce glucose fluctuations, and support long-term metabolic control. Insulin delivery devices are essential tools in the management of Type 1 Diabetes, insulin-dependent Type 2 Diabetes, and other conditions requiring precise insulin administration.',
                'what_is' => 'Insulin pens are portable injection devices designed for easy and accurate insulin administration using prefilled or replaceable insulin cartridges. They offer greater convenience, dosing accuracy, and ease of use compared to traditional syringe-based insulin delivery. Insulin pumps are wearable electronic devices that continuously deliver insulin through a small catheter placed under the skin, closely mimicking natural insulin secretion. Advanced insulin pump systems may integrate with Continuous Glucose Monitoring (CGM) technology for automated insulin delivery and improved glucose management. These devices are widely used in hospitals, diabetes clinics, endocrinology centers, and home-care settings for intensive diabetes management and long-term metabolic stability.',
                'symptoms' => [
            ['value' => 'Frequent blood sugar fluctuations or uncontrolled diabetes'],
            ['value' => 'Recurrent hypoglycemia or hyperglycemia episodes'],
            ['value' => 'Need for multiple daily insulin injections'],
            ['value' => 'Difficulty maintaining stable blood glucose levels'],
            ['value' => 'Requirement for intensive insulin therapy and continuous glucose management'],
        ],
                'causes' => [
            ['value' => 'Type 1 Diabetes requiring lifelong insulin therapy'],
            ['value' => 'Insulin-dependent Type 2 Diabetes'],
            ['value' => 'Frequent blood sugar fluctuations or uncontrolled diabetes'],
            ['value' => 'Recurrent hypoglycemia or hyperglycemia episodes'],
            ['value' => 'Need for intensive insulin therapy and continuous glucose management'],
        ],
                'condition_risks' => [
            ['value' => 'Hypoglycemia due to incorrect insulin dosing'],
            ['value' => 'Insulin pump malfunction or infusion site complications'],
            ['value' => 'Skin irritation, infection, or injection site discomfort'],
            ['value' => 'Risk of diabetic ketoacidosis if insulin delivery is interrupted'],
            ['value' => 'Device handling errors or improper insulin administration techniques'],
            ['value' => 'Treatment Options'],
            ['value' => 'Insulin pumps and pens support effective diabetes management by improving insulin delivery accuracy, optimizing blood sugar control, and reducing diabetes-related complications. Treatment may include basal-bolus insulin therapy, insulin pump therapy, CGM integration, carbohydrate counting, nutritional counseling, exercise planning, diabetes education, and regular endocrinology follow-up. Patients may also benefit from remote glucose monitoring, smart insulin management technologies, lifestyle modification programs, and individualized diabetes care plans to maintain long-term metabolic health and overall well-being.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of blood glucose levels and insulin requirements'],
            ['value' => 'Proper device handling, injection technique, and pump maintenance education'],
            ['value' => 'Monitoring for skin irritation, infection, or infusion-related complications'],
            ['value' => 'Adjustment of insulin dosage based on glucose trends and lifestyle needs'],
            ['value' => 'Long-term endocrinology follow-up and diabetes management support'],
        ],
                'surgery_risks' => [
            ['value' => 'Hypoglycemia due to incorrect insulin dosing'],
            ['value' => 'Insulin pump malfunction or infusion site complications'],
            ['value' => 'Skin irritation, infection, or injection site discomfort'],
            ['value' => 'Risk of diabetic ketoacidosis if insulin delivery is interrupted'],
            ['value' => 'Device handling errors or improper insulin administration techniques'],
            ['value' => 'Treatment Options'],
            ['value' => 'Insulin pumps and pens support effective diabetes management by improving insulin delivery accuracy, optimizing blood sugar control, and reducing diabetes-related complications. Treatment may include basal-bolus insulin therapy, insulin pump therapy, CGM integration, carbohydrate counting, nutritional counseling, exercise planning, diabetes education, and regular endocrinology follow-up. Patients may also benefit from remote glucose monitoring, smart insulin management technologies, lifestyle modification programs, and individualized diabetes care plans to maintain long-term metabolic health and overall well-being.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with insulin pumps and insulin pens is generally highly positive with proper device usage and regular medical supervision. Consistent insulin therapy, glucose monitoring, healthy nutrition, physical activity, stress management, diabetes education, and ongoing healthcare follow-up significantly help improve metabolic stability, reduce diabetic emergencies, prevent long-term complications, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Insulin Pumps / Pens',
                'seo_description' => 'Insulin pumps and insulin pens are advanced diabetes management devices used to deliver insulin accurately and conveniently in individuals with diabetes requiring insulin therapy. These devices help maintain stable blood sugar levels, improve treatment flexibility, reduce glucose fluctuations, and support long-term metabolic control. Insulin delivery devices are essential tools in the management of Type 1 Diabetes, insulin-dependent Type 2 Diabetes, and other conditions requiring precise insulin administration.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
