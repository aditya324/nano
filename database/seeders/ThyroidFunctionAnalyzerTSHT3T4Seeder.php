<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidFunctionAnalyzerTSHT3T4Seeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thyroid Function Analyzer (TSH, T3, T4)')],
            [
                'title' => 'Thyroid Function Analyzer (TSH, T3, T4)',
                'slug' => Str::slug('Thyroid Function Analyzer (TSH, T3, T4)'),
                'introduction' => 'A thyroid function analyzer is a specialized diagnostic medical device used to measure thyroid-related hormones such as Thyroid Stimulating Hormone (TSH), Triiodothyronine (T3), and Thyroxine (T4) in the blood. These analyzers help evaluate thyroid gland function, diagnose thyroid disorders, monitor treatment effectiveness, and support long-term endocrine health management. Accurate thyroid hormone testing plays a vital role in detecting hormonal imbalances affecting metabolism, energy levels, growth, and overall body function.',
                'what_is' => 'Thyroid function analyzers use advanced immunoassay and automated laboratory technologies to provide rapid and accurate measurement of thyroid hormone levels. These devices are commonly used in hospitals, diagnostic laboratories, endocrinology clinics, preventive healthcare centers, and research facilities. Thyroid function testing is essential in diagnosing conditions such as hypothyroidism, hyperthyroidism, thyroiditis, thyroid nodules, Graves’ disease, Hashimoto’s thyroiditis, and thyroid cancer follow-up. Modern analyzers provide high-precision results, automated processing, and efficient workflow support for comprehensive endocrine evaluation and long-term patient monitoring.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Weight gain or unexplained weight loss'],
            ['value' => 'Palpitations, heat intolerance, or excessive sweating'],
            ['value' => 'Cold intolerance, dry skin, or constipation'],
            ['value' => 'Hormonal imbalance symptoms requiring thyroid evaluation and monitoring'],
        ],
                'causes' => [
            ['value' => 'Hypothyroidism or hyperthyroidism'],
            ['value' => 'Autoimmune thyroid disorders such as Hashimoto’s thyroiditis or Graves’ disease'],
            ['value' => 'Thyroid nodules, goiter, or thyroid enlargement'],
            ['value' => 'Hormonal imbalance affecting metabolism and energy levels'],
            ['value' => 'Family history of thyroid disease or endocrine disorders'],
        ],
                'condition_risks' => [
            ['value' => 'Inaccurate results due to improper sample handling or laboratory errors'],
            ['value' => 'Delayed diagnosis if thyroid screening is not performed regularly'],
            ['value' => 'Misinterpretation of thyroid hormone levels without proper clinical evaluation'],
            ['value' => 'Variations in results due to medications or underlying medical conditions'],
            ['value' => 'Poor thyroid disease control if hormone abnormalities remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Thyroid function analyzers support effective endocrine management by helping healthcare providers diagnose thyroid disorders, monitor hormone levels, and adjust treatment plans appropriately. Management may include thyroid hormone replacement therapy, anti-thyroid medications, radioactive iodine therapy, endocrine surgery, nutritional counseling, lifestyle modification, and regular endocrinology follow-up. Patients may also benefit from preventive thyroid screening, metabolic monitoring, and long-term hormonal assessment to maintain endocrine stability and overall health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular thyroid hormone and TSH level monitoring'],
            ['value' => 'Proper blood sample collection and laboratory quality control procedures'],
            ['value' => 'Adjustment of thyroid medications based on test results'],
            ['value' => 'Nutritional counseling and endocrine health management support'],
            ['value' => 'Long-term endocrinology follow-up and thyroid function evaluation'],
        ],
                'surgery_risks' => [
            ['value' => 'Inaccurate results due to improper sample handling or laboratory errors'],
            ['value' => 'Delayed diagnosis if thyroid screening is not performed regularly'],
            ['value' => 'Misinterpretation of thyroid hormone levels without proper clinical evaluation'],
            ['value' => 'Variations in results due to medications or underlying medical conditions'],
            ['value' => 'Poor thyroid disease control if hormone abnormalities remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Thyroid function analyzers support effective endocrine management by helping healthcare providers diagnose thyroid disorders, monitor hormone levels, and adjust treatment plans appropriately. Management may include thyroid hormone replacement therapy, anti-thyroid medications, radioactive iodine therapy, endocrine surgery, nutritional counseling, lifestyle modification, and regular endocrinology follow-up. Patients may also benefit from preventive thyroid screening, metabolic monitoring, and long-term hormonal assessment to maintain endocrine stability and overall health.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with thyroid function monitoring is generally highly positive with regular endocrine assessment and appropriate medical management. Routine thyroid testing, medication adherence, healthy lifestyle habits, stress management, balanced nutrition, continuous hormonal evaluation, and ongoing healthcare follow-up significantly help maintain thyroid stability, reduce complications, improve metabolic function, preserve overall health, and enhance quality of life.',
                'conclusion' => '',
                'seo_title' => 'Thyroid Function Analyzer (TSH, T3, T4)',
                'seo_description' => 'A thyroid function analyzer is a specialized diagnostic medical device used to measure thyroid-related hormones such as Thyroid Stimulating Hormone (TSH), Triiodothyronine (T3), and Thyroxine (T4) in the blood. These analyzers help evaluate thyroid gland function, diagnose thyroid disorders, monitor treatment effectiveness, and support long-term endocrine health management. Accurate thyroid hormone testing plays a vital role in detecting hormonal imbalances affecting metabolism, energy levels, growth, and overall body function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
