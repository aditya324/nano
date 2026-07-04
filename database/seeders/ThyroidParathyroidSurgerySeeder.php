<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidParathyroidSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thyroid / Parathyroid Surgery')],
            [
                'title' => 'Thyroid / Parathyroid Surgery',
                'slug' => Str::slug('Thyroid / Parathyroid Surgery'),
                'introduction' => 'Thyroid and parathyroid surgery are specialized surgical procedures performed to treat disorders affecting the thyroid and parathyroid glands, including thyroid nodules, goiter, thyroid cancer, hyperparathyroidism, and other endocrine abnormalities. These surgeries help remove abnormal gland tissue, restore hormonal balance, relieve pressure-related symptoms, and prevent complications associated with endocrine gland disorders. Surgical treatment is commonly performed by endocrine or head and neck surgeons under advanced medical supervision.',
                'what_is' => 'Thyroid surgery may involve partial or complete removal of the thyroid gland (thyroidectomy) depending on the underlying condition, while parathyroid surgery focuses on removing overactive or abnormal parathyroid glands causing calcium imbalance. These procedures are commonly performed in hospitals and specialized endocrine surgery centers using minimally invasive or conventional surgical techniques. Preoperative imaging, hormonal evaluation, and laboratory testing are essential to plan treatment and optimize surgical outcomes. Postoperative monitoring of hormone levels, calcium balance, and vocal cord function is an important part of recovery and long-term endocrine care.',
                'symptoms' => [
            ['value' => 'Neck swelling or enlarged thyroid gland'],
            ['value' => 'Difficulty swallowing or breathing due to gland enlargement'],
            ['value' => 'Hormonal imbalance causing weight changes, fatigue, or palpitations'],
            ['value' => 'High calcium levels, kidney stones, or bone pain in parathyroid disorders'],
            ['value' => 'Suspicious thyroid nodules or confirmed thyroid cancer requiring surgical treatment'],
        ],
                'causes' => [
            ['value' => 'Thyroid nodules or enlarged thyroid gland (goiter)'],
            ['value' => 'Hyperthyroidism or overactive thyroid disease'],
            ['value' => 'Thyroid cancer or suspicious thyroid growths'],
            ['value' => 'Hyperparathyroidism causing high calcium levels'],
            ['value' => 'Persistent hormonal imbalance or gland-related complications'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding or infection after surgery'],
            ['value' => 'Temporary or permanent voice changes due to nerve injury'],
            ['value' => 'Low calcium levels following parathyroid or thyroid surgery'],
            ['value' => 'Hormonal imbalance requiring long-term medication management'],
            ['value' => 'Scar formation or postoperative neck discomfort'],
            ['value' => 'Treatment Options'],
            ['value' => 'Thyroid and parathyroid surgery focus on removing abnormal gland tissue, restoring hormonal balance, relieving symptoms, and preventing endocrine complications. Treatment may include thyroidectomy, parathyroidectomy, minimally invasive endocrine surgery, hormonal monitoring, calcium replacement therapy, thyroid hormone replacement therapy, and supportive postoperative care. Patients may also benefit from nutritional counseling, speech and swallowing assessment, endocrinology follow-up, imaging studies, cancer surveillance when indicated, and long-term metabolic monitoring to optimize recovery and endocrine health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of thyroid hormone and calcium levels'],
            ['value' => 'Observation for voice changes, swallowing difficulty, or surgical complications'],
            ['value' => 'Pain management and wound care after surgery'],
            ['value' => 'Thyroid hormone or calcium supplementation when required'],
            ['value' => 'Long-term endocrinology and surgical follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection after surgery'],
            ['value' => 'Temporary or permanent voice changes due to nerve injury'],
            ['value' => 'Low calcium levels following parathyroid or thyroid surgery'],
            ['value' => 'Hormonal imbalance requiring long-term medication management'],
            ['value' => 'Scar formation or postoperative neck discomfort'],
            ['value' => 'Treatment Options'],
            ['value' => 'Thyroid and parathyroid surgery focus on removing abnormal gland tissue, restoring hormonal balance, relieving symptoms, and preventing endocrine complications. Treatment may include thyroidectomy, parathyroidectomy, minimally invasive endocrine surgery, hormonal monitoring, calcium replacement therapy, thyroid hormone replacement therapy, and supportive postoperative care. Patients may also benefit from nutritional counseling, speech and swallowing assessment, endocrinology follow-up, imaging studies, cancer surveillance when indicated, and long-term metabolic monitoring to optimize recovery and endocrine health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following thyroid or parathyroid surgery is generally positive with early diagnosis, proper surgical management, and continuous endocrine follow-up. Medication adherence, hormonal monitoring, healthy lifestyle habits, nutritional support, regular medical evaluations, and long-term endocrine care significantly help maintain hormonal stability, reduce complications, improve metabolic function, preserve overall health, and enhance quality of life.',
                'conclusion' => '',
                'seo_title' => 'Thyroid / Parathyroid Surgery',
                'seo_description' => 'Thyroid and parathyroid surgery are specialized surgical procedures performed to treat disorders affecting the thyroid and parathyroid glands, including thyroid nodules, goiter, thyroid cancer, hyperparathyroidism, and other endocrine abnormalities. These surgeries help remove abnormal gland tissue, restore hormonal balance, relieve pressure-related symptoms, and prevent complications associated with endocrine gland disorders. Surgical treatment is commonly performed by endocrine or head and neck surgeons under advanced medical supervision.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
