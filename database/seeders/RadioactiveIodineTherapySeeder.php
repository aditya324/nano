<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RadioactiveIodineTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Radioactive Iodine Therapy')],
            [
                'title' => 'Radioactive Iodine Therapy',
                'slug' => Str::slug('Radioactive Iodine Therapy'),
                'introduction' => 'Radioactive iodine therapy is a specialized nuclear medicine treatment procedure used to manage certain thyroid conditions such as hyperthyroidism, Graves’ disease, toxic thyroid nodules, and thyroid cancer. This therapy uses radioactive iodine to selectively target and destroy overactive or abnormal thyroid tissue while minimizing effects on other body tissues. Radioactive iodine therapy helps restore hormonal balance, reduce thyroid gland activity, and support long-term thyroid disease management.',
                'what_is' => 'During radioactive iodine therapy, a controlled dose of radioactive iodine is administered orally in the form of a capsule or liquid. Since thyroid cells naturally absorb iodine, the radioactive iodine concentrates within the thyroid gland and gradually destroys abnormal or overactive thyroid tissue. The procedure is commonly performed in nuclear medicine departments, endocrinology centers, and specialized hospitals under strict medical supervision. Treatment planning is individualized based on thyroid hormone levels, thyroid gland size, underlying thyroid disease, and overall patient health. Regular follow-up and thyroid function monitoring are essential after therapy.',
                'symptoms' => [
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Weight loss or excessive sweating due to hyperthyroidism'],
            ['value' => 'Enlarged thyroid gland or thyroid nodules'],
            ['value' => 'Anxiety, tremors, or heat intolerance'],
            ['value' => 'Persistent thyroid cancer or recurrent thyroid disease requiring targeted treatment'],
        ],
                'causes' => [
            ['value' => 'Graves’ disease'],
            ['value' => 'Hyperthyroidism or overactive thyroid gland'],
            ['value' => 'Toxic thyroid nodules or goiter'],
            ['value' => 'Thyroid cancer requiring targeted treatment'],
            ['value' => 'Persistent or recurrent thyroid hormone imbalance'],
        ],
                'condition_risks' => [
            ['value' => 'Development of hypothyroidism requiring lifelong hormone replacement'],
            ['value' => 'Temporary neck discomfort or throat irritation'],
            ['value' => 'Dry mouth, altered taste, or salivary gland irritation'],
            ['value' => 'Mild nausea or fatigue after treatment'],
            ['value' => 'Radiation safety precautions required for a short period after therapy'],
            ['value' => 'Treatment Options'],
            ['value' => 'Radioactive iodine therapy focuses on reducing abnormal thyroid activity, controlling hormone overproduction, destroying residual thyroid cancer cells, and improving long-term endocrine stability. Treatment may include radioactive iodine administration, thyroid hormone monitoring, supportive medications, beta-blockers for symptom control, and long-term endocrine care. Patients may also require thyroid hormone replacement therapy, nutritional counseling, imaging studies, cancer surveillance, and endocrinology follow-up to optimize recovery and maintain hormonal balance.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of thyroid hormone and TSH levels'],
            ['value' => 'Following temporary radiation safety precautions after treatment'],
            ['value' => 'Monitoring for hypothyroidism or treatment-related side effects'],
            ['value' => 'Adequate hydration and supportive care during recovery'],
            ['value' => 'Long-term endocrinology follow-up and thyroid health assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Development of hypothyroidism requiring lifelong hormone replacement'],
            ['value' => 'Temporary neck discomfort or throat irritation'],
            ['value' => 'Dry mouth, altered taste, or salivary gland irritation'],
            ['value' => 'Mild nausea or fatigue after treatment'],
            ['value' => 'Radiation safety precautions required for a short period after therapy'],
            ['value' => 'Treatment Options'],
            ['value' => 'Radioactive iodine therapy focuses on reducing abnormal thyroid activity, controlling hormone overproduction, destroying residual thyroid cancer cells, and improving long-term endocrine stability. Treatment may include radioactive iodine administration, thyroid hormone monitoring, supportive medications, beta-blockers for symptom control, and long-term endocrine care. Patients may also require thyroid hormone replacement therapy, nutritional counseling, imaging studies, cancer surveillance, and endocrinology follow-up to optimize recovery and maintain hormonal balance.'],
        ],
                'long_term_outlook' => 'The long-term outlook following radioactive iodine therapy is generally positive with proper medical supervision and follow-up care. Regular thyroid monitoring, medication adherence, healthy lifestyle habits, stress management, nutritional support, and continuous endocrinology care significantly help maintain hormonal stability, reduce thyroid-related complications, improve metabolic function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Radioactive Iodine Therapy',
                'seo_description' => 'Radioactive iodine therapy is a specialized nuclear medicine treatment procedure used to manage certain thyroid conditions such as hyperthyroidism, Graves’ disease, toxic thyroid nodules, and thyroid cancer. This therapy uses radioactive iodine to selectively target and destroy overactive or abnormal thyroid tissue while minimizing effects on other body tissues. Radioactive iodine therapy helps restore hormonal balance, reduce thyroid gland activity, and support long-term thyroid disease management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
