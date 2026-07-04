<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thyroid Cancer')],
            [
                'title' => 'Thyroid Cancer',
                'slug' => Str::slug('Thyroid Cancer'),
                'introduction' => '',
                'what_is' => 'Thyroid cancer is a type of cancer that develops in the thyroid gland, a butterfly-shaped gland located at the base of the neck below the Adam’s apple. The thyroid produces hormones that regulate heart rate, metabolism, body temperature, and blood pressure. Thyroid cancer is often highly treatable, especially when detected early. Common Symptoms A lump or swelling in the neck that can be felt through the skin Difficulty breathing or swallowing A feeling of tightness around the neck or shirt collar Hoarseness or voice changes Pain in the neck or throat area Causes & Triggers Exposure to radiation, especially during childhood Family history or inherited genetic syndromes Thyroid nodules or chronic thyroid disease Hormonal and endocrine-related factors Female gender and increasing age Risks & Complications Spread of cancer to nearby lymph nodes or distant organs Difficulty swallowing or breathing in advanced disease Hormonal imbalance related to thyroid dysfunction Voice changes due to nerve involvement or surgery Recurrence of cancer after treatment Treatment Options Surgical removal of part or all of the thyroid gland Radioactive iodine therapy Thyroid hormone replacement therapy Radiation therapy or targeted therapy when required Long-term monitoring and endocrine follow-up care Recovery & Outlook The long-term outlook for thyroid cancer is generally very positive, especially when diagnosed early and treated appropriately. Many individuals achieve excellent recovery with surgery and supportive therapy. Regular follow-up, hormone monitoring, imaging studies, and ongoing endocrine care are important for detecting recurrence and maintaining long-term health and quality of life.',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Thyroid Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
