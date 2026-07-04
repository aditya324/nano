<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thyroid Cancer')],
            [
                'name' => 'Thyroid Cancer',
                'slug' => Str::slug('Thyroid Cancer'),
                'h1' => 'Thyroid Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thyroid cancer is a condition in which abnormal cells develop and grow uncontrollably within the thyroid gland located in the front of the neck. It is one of the most treatable forms of cancer when detected early and may occur in different types such as papillary, follicular, medullary, or anaplastic thyroid cancer. Thyroid cancer can affect hormone production, nearby structures in the neck, and, in advanced cases, may spread to lymph nodes or other organs. Early diagnosis and appropriate treatment are essential for achieving favorable outcomes and long-term recovery.',
                'about_more' => '',
                'overview' => 'Thyroid cancer is a condition in which abnormal cells develop and grow uncontrollably within the thyroid gland located in the front of the neck. It is one of the most treatable forms of cancer when detected early and may occur in different types such as papillary, follicular, medullary, or anaplastic thyroid cancer. Thyroid cancer can affect hormone production, nearby structures in the neck, and, in advanced cases, may spread to lymph nodes or other organs. Early diagnosis and appropriate treatment are essential for achieving favorable outcomes and long-term recovery.',
                'symptoms' => [
            ['value' => 'Lump or swelling in the front of the neck'],
            ['value' => 'Hoarseness or persistent voice changes'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Neck pain or throat discomfort'],
            ['value' => 'Enlarged lymph nodes or persistent thyroid swelling'],
        ],
                'causes' => [
            ['value' => 'Genetic predisposition or family history of thyroid cancer'],
            ['value' => 'Exposure to radiation, especially during childhood'],
            ['value' => 'Long-standing thyroid nodules or thyroid disease'],
            ['value' => 'Certain inherited endocrine syndromes'],
            ['value' => 'Hormonal and environmental factors affecting thyroid cells'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to lymph nodes or distant organs'],
            ['value' => 'Difficulty breathing or swallowing due to tumor enlargement'],
            ['value' => 'Thyroid hormone imbalance after treatment'],
            ['value' => 'Vocal cord injury or voice changes after surgery'],
            ['value' => 'Recurrence of thyroid cancer requiring long-term monitoring'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for thyroid cancer focuses on removing or controlling cancer growth, preventing spread, restoring hormonal balance, and improving long-term survival. Management may include thyroid surgery (thyroidectomy), radioactive iodine therapy, thyroid hormone replacement therapy, targeted therapy, chemotherapy, radiotherapy, and long-term cancer surveillance. Patients may also require ultrasound monitoring, biopsy evaluation, endocrinology and oncology follow-up, nutritional counseling, and supportive care to optimize recovery and reduce complications. Early diagnosis and multidisciplinary cancer care play a critical role in successful treatment outcomes.'],
        ],
                'recovery' => 'The long-term outlook for thyroid cancer is generally very positive, especially when diagnosed and treated early. Regular medical follow-up, thyroid hormone management, healthy lifestyle habits, cancer surveillance, medication adherence, and continuous endocrinology and oncology care significantly help reduce recurrence risk, maintain hormonal stability, improve recovery, and enhance overall quality of life. __________________ 9. Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism) Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism)',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Thyroid Cancer',
                'meta_description' => 'Thyroid cancer is a condition in which abnormal cells develop and grow uncontrollably within the thyroid gland located in the front of the neck. It is one of th',
                'meta_keywords' => '',
            ]
        );
    }
}
