<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidHormoneReplacementTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thyroid Hormone Replacement Therapy')],
            [
                'title' => 'Thyroid Hormone Replacement Therapy',
                'slug' => Str::slug('Thyroid Hormone Replacement Therapy'),
                'introduction' => 'Thyroid hormone replacement therapy is a medical treatment procedure used to restore normal thyroid hormone levels in individuals with hypothyroidism or other conditions causing reduced thyroid gland function. This therapy helps regulate metabolism, energy production, heart function, body temperature, and overall hormonal balance. Proper thyroid hormone replacement plays a vital role in relieving symptoms, preventing complications, and supporting long-term endocrine health.',
                'what_is' => 'Thyroid hormone replacement therapy commonly involves the use of synthetic thyroid hormones, such as levothyroxine, to replace deficient thyroid hormone levels in the body. Treatment is individualized based on the patient’s age, medical condition, hormone levels, body weight, and overall endocrine status. Regular blood tests are required to monitor thyroid-stimulating hormone (TSH) and thyroid hormone levels to ensure accurate dosage adjustment. This therapy is widely used in endocrinology clinics, hospitals, and primary healthcare settings for conditions such as hypothyroidism, thyroiditis, thyroid surgery recovery, congenital thyroid disorders, and thyroid cancer management.',
                'symptoms' => [
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Weight gain or slowed metabolism'],
            ['value' => 'Cold intolerance or dry skin'],
            ['value' => 'Constipation or muscle weakness'],
            ['value' => 'Depression, memory problems, or hair thinning'],
        ],
                'causes' => [
            ['value' => 'Hypothyroidism or underactive thyroid gland'],
            ['value' => 'Hashimoto’s thyroiditis'],
            ['value' => 'Thyroid surgery or radioactive iodine treatment'],
            ['value' => 'Congenital thyroid hormone deficiency'],
            ['value' => 'Thyroid gland damage due to autoimmune or medical conditions'],
        ],
                'condition_risks' => [
            ['value' => 'Incorrect dosage causing overactive or underactive thyroid symptoms'],
            ['value' => 'Palpitations, anxiety, or sleep disturbances with excessive hormone replacement'],
            ['value' => 'Bone loss or heart-related complications from prolonged overtreatment'],
            ['value' => 'Medication interaction affecting hormone absorption'],
            ['value' => 'Fluctuating hormone levels requiring frequent monitoring and dose adjustment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Thyroid hormone replacement therapy focuses on restoring hormonal balance, improving metabolism, relieving symptoms, and preventing long-term complications associated with thyroid hormone deficiency. Treatment may include daily thyroid hormone medication, regular thyroid function testing, nutritional counseling, medication timing education, and monitoring for dose-related side effects. Patients may also benefit from lifestyle modification, stress management, healthy nutrition, endocrinology follow-up, and long-term metabolic monitoring to maintain stable thyroid function and overall well-being.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of thyroid hormone and TSH levels'],
            ['value' => 'Adjustment of medication dosage based on laboratory results and symptoms'],
            ['value' => 'Monitoring for side effects or signs of hormone imbalance'],
            ['value' => 'Nutritional guidance and medication adherence counseling'],
            ['value' => 'Long-term endocrinology follow-up and thyroid health assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Incorrect dosage causing overactive or underactive thyroid symptoms'],
            ['value' => 'Palpitations, anxiety, or sleep disturbances with excessive hormone replacement'],
            ['value' => 'Bone loss or heart-related complications from prolonged overtreatment'],
            ['value' => 'Medication interaction affecting hormone absorption'],
            ['value' => 'Fluctuating hormone levels requiring frequent monitoring and dose adjustment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Thyroid hormone replacement therapy focuses on restoring hormonal balance, improving metabolism, relieving symptoms, and preventing long-term complications associated with thyroid hormone deficiency. Treatment may include daily thyroid hormone medication, regular thyroid function testing, nutritional counseling, medication timing education, and monitoring for dose-related side effects. Patients may also benefit from lifestyle modification, stress management, healthy nutrition, endocrinology follow-up, and long-term metabolic monitoring to maintain stable thyroid function and overall well-being.'],
        ],
                'long_term_outlook' => 'The long-term outlook following thyroid hormone replacement therapy is generally very positive with proper treatment adherence and regular medical monitoring. Consistent medication use, healthy lifestyle habits, stress management, balanced nutrition, routine thyroid testing, and continuous medical follow-up significantly help maintain hormonal stability, improve metabolism, reduce complications, restore energy levels, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Thyroid Hormone Replacement Therapy',
                'seo_description' => 'Thyroid hormone replacement therapy is a medical treatment procedure used to restore normal thyroid hormone levels in individuals with hypothyroidism or other conditions causing reduced thyroid gland function. This therapy helps regulate metabolism, energy production, heart function, body temperature, and overall hormonal balance. Proper thyroid hormone replacement plays a vital role in relieving symptoms, preventing complications, and supporting long-term endocrine health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
