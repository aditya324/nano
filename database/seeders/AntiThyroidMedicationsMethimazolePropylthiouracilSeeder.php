<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiThyroidMedicationsMethimazolePropylthiouracilSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anti-Thyroid Medications (Methimazole, Propylthiouracil)')],
            [
                'title' => 'Anti-Thyroid Medications (Methimazole, Propylthiouracil)',
                'slug' => Str::slug('Anti-Thyroid Medications (Methimazole, Propylthiouracil)'),
                'introduction' => 'Anti-thyroid medications are specialized medical treatments used to control excessive thyroid hormone production in conditions such as hyperthyroidism and Graves’ disease. Medications like Methimazole and Propylthiouracil (PTU) help reduce thyroid hormone synthesis, restore hormonal balance, relieve symptoms, and prevent complications associated with overactive thyroid function. These treatments play an important role in stabilizing metabolism, heart function, and overall endocrine health.',
                'what_is' => 'Methimazole and Propylthiouracil work by blocking the thyroid gland’s ability to produce excess thyroid hormones. Methimazole is commonly used as the first-line treatment for most hyperthyroid conditions, while Propylthiouracil may be preferred in selected situations such as early pregnancy or thyroid storm management. Treatment is individualized based on thyroid hormone levels, severity of symptoms, age, pregnancy status, and overall medical condition. Regular thyroid function testing and clinical monitoring are essential to ensure safe dosage adjustment and effective long-term management. These therapies are commonly supervised by endocrinologists in hospitals, endocrine clinics, and primary healthcare settings.',
                'symptoms' => [
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Weight loss despite normal appetite'],
            ['value' => 'Excessive sweating or heat intolerance'],
            ['value' => 'Anxiety, irritability, or tremors'],
            ['value' => 'Fatigue, muscle weakness, or sleep disturbances'],
        ],
                'causes' => [
            ['value' => 'Graves’ disease'],
            ['value' => 'Hyperthyroidism or overactive thyroid gland'],
            ['value' => 'Toxic multinodular goiter'],
            ['value' => 'Thyroid nodules producing excess hormones'],
            ['value' => 'Thyroid storm or severe thyroid hormone imbalance'],
        ],
                'condition_risks' => [
            ['value' => 'Low thyroid hormone levels due to overtreatment'],
            ['value' => 'Liver dysfunction or medication-related liver injury'],
            ['value' => 'Allergic reactions such as skin rash or itching'],
            ['value' => 'Reduced white blood cell count increasing infection risk'],
            ['value' => 'Need for long-term monitoring and medication adjustment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Anti-thyroid medication therapy focuses on reducing excessive thyroid hormone production, stabilizing metabolism, relieving symptoms, and preventing complications related to hyperthyroidism. Treatment may include Methimazole, Propylthiouracil, beta-blockers for symptom control, thyroid function monitoring, and supportive endocrine care. Patients may also benefit from nutritional counseling, stress management, regular laboratory evaluation, radioactive iodine therapy, or thyroid surgery in selected cases. Long-term endocrinology follow-up and lifestyle modification are important to maintain hormonal balance and optimize thyroid health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of thyroid hormone and TSH levels'],
            ['value' => 'Observation for medication side effects or allergic reactions'],
            ['value' => 'Liver function and blood count evaluation during treatment'],
            ['value' => 'Adjustment of medication dosage based on hormone response'],
            ['value' => 'Long-term endocrinology follow-up and thyroid health monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Low thyroid hormone levels due to overtreatment'],
            ['value' => 'Liver dysfunction or medication-related liver injury'],
            ['value' => 'Allergic reactions such as skin rash or itching'],
            ['value' => 'Reduced white blood cell count increasing infection risk'],
            ['value' => 'Need for long-term monitoring and medication adjustment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Anti-thyroid medication therapy focuses on reducing excessive thyroid hormone production, stabilizing metabolism, relieving symptoms, and preventing complications related to hyperthyroidism. Treatment may include Methimazole, Propylthiouracil, beta-blockers for symptom control, thyroid function monitoring, and supportive endocrine care. Patients may also benefit from nutritional counseling, stress management, regular laboratory evaluation, radioactive iodine therapy, or thyroid surgery in selected cases. Long-term endocrinology follow-up and lifestyle modification are important to maintain hormonal balance and optimize thyroid health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following anti-thyroid medication therapy is generally positive with early diagnosis and proper endocrine management. Medication adherence, regular thyroid testing, healthy lifestyle habits, stress reduction, nutritional support, and continuous medical follow-up significantly help maintain hormonal stability, reduce complications, improve metabolic balance, preserve overall health, and enhance quality of life.',
                'conclusion' => '',
                'seo_title' => 'Anti-Thyroid Medications (Methimazole, Propylthiouracil)',
                'seo_description' => 'Anti-thyroid medications are specialized medical treatments used to control excessive thyroid hormone production in conditions such as hyperthyroidism and Graves’ disease. Medications like Methimazole and Propylthiouracil (PTU) help reduce thyroid hormone synthesis, restore hormonal balance, relieve symptoms, and prevent complications associated with overactive thyroid function. These treatments play an important role in stabilizing metabolism, heart function, and overall endocrine health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
