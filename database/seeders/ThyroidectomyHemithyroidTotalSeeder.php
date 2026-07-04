<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidectomyHemithyroidTotalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thyroidectomy (Hemithyroid / Total)')],
            [
                'title' => 'Thyroidectomy (Hemithyroid / Total)',
                'slug' => Str::slug('Thyroidectomy (Hemithyroid / Total)'),
                'introduction' => 'Thyroidectomy is a surgical procedure performed to remove part or all of the thyroid gland for thyroid nodules, goiter, hyperthyroidism, or thyroid cancer. Hemithyroidectomy removes one side of the thyroid gland, while total thyroidectomy removes the entire gland.',
                'what_is' => 'The surgery may be recommended for: Thyroid cancer Large goiter causing pressure symptoms Hyperthyroidism not controlled medically Suspicious thyroid nodules The procedure is performed under general anesthesia through an incision in the neck. Modern surgical techniques focus on preserving nearby nerves and parathyroid glands to minimize complications. Patients undergoing total thyroidectomy usually require lifelong thyroid hormone replacement.',
                'symptoms' => [
            ['value' => 'Neck swelling or thyroid enlargement'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Symptoms of hyperthyroidism'],
            ['value' => 'Suspicious thyroid nodules'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or neck hematoma'],
            ['value' => 'Hoarseness due to nerve injury'],
            ['value' => 'Low calcium levels from parathyroid injury'],
            ['value' => 'Infection or scarring'],
            ['value' => 'Need for lifelong thyroid hormone therapy'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take thyroid medications as prescribed'],
            ['value' => 'Monitor calcium levels if advised'],
            ['value' => 'Keep the surgical wound clean'],
            ['value' => 'Attend regular thyroid follow-up evaluations'],
            ['value' => 'Report breathing difficulty or severe swelling immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or neck hematoma'],
            ['value' => 'Hoarseness due to nerve injury'],
            ['value' => 'Low calcium levels from parathyroid injury'],
            ['value' => 'Infection or scarring'],
            ['value' => 'Need for lifelong thyroid hormone therapy'],
        ],
                'long_term_outlook' => 'Most patients recover successfully after thyroidectomy and maintain good quality of life with appropriate hormone management and regular monitoring.',
                'conclusion' => '',
                'seo_title' => 'Thyroidectomy (Hemithyroid / Total)',
                'seo_description' => 'Thyroidectomy is a surgical procedure performed to remove part or all of the thyroid gland for thyroid nodules, goiter, hyperthyroidism, or thyroid cancer. Hemithyroidectomy removes one side of the thyroid gland, while total thyroidectomy removes the entire gland.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
