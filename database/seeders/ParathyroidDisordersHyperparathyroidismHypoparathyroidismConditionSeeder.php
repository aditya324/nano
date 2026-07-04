<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParathyroidDisordersHyperparathyroidismHypoparathyroidismConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism)')],
            [
                'name' => 'Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism)',
                'slug' => Str::slug('Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism)'),
                'h1' => 'Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Parathyroid disorders are hormonal conditions affecting the parathyroid glands, which are small glands located behind the thyroid gland and are responsible for regulating calcium and phosphorus balance in the body. Hyperparathyroidism occurs when the glands produce excessive parathyroid hormone (PTH), leading to high calcium levels in the blood, while hypoparathyroidism results from insufficient PTH production causing low calcium levels. These conditions can affect bones, kidneys, muscles, nerves, and overall metabolic health if not properly diagnosed and treated.',
                'about_more' => '',
                'overview' => 'Parathyroid disorders are hormonal conditions affecting the parathyroid glands, which are small glands located behind the thyroid gland and are responsible for regulating calcium and phosphorus balance in the body. Hyperparathyroidism occurs when the glands produce excessive parathyroid hormone (PTH), leading to high calcium levels in the blood, while hypoparathyroidism results from insufficient PTH production causing low calcium levels. These conditions can affect bones, kidneys, muscles, nerves, and overall metabolic health if not properly diagnosed and treated.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or muscle cramps'],
            ['value' => 'Bone pain, muscle aches, or increased fracture risk'],
            ['value' => 'Tingling, numbness, or muscle spasms'],
            ['value' => 'Kidney stones, abdominal discomfort, or digestive disturbances'],
            ['value' => 'Mood changes, anxiety, or difficulty concentrating'],
        ],
                'causes' => [
            ['value' => 'Benign enlargement or tumor of the parathyroid glands'],
            ['value' => 'Autoimmune disorders affecting hormone production'],
            ['value' => 'Thyroid or neck surgery causing gland injury or removal'],
            ['value' => 'Genetic conditions or inherited endocrine disorders'],
            ['value' => 'Vitamin D imbalance, kidney disease, or magnesium deficiency affecting calcium regulation'],
        ],
                'risks' => [
            ['value' => 'Osteoporosis or increased fracture risk due to calcium imbalance'],
            ['value' => 'Kidney stones or kidney dysfunction in hyperparathyroidism'],
            ['value' => 'Severe low calcium levels causing seizures or cardiac complications'],
            ['value' => 'Muscle weakness, nerve dysfunction, or chronic fatigue'],
            ['value' => 'Long-term metabolic imbalance affecting multiple organ systems'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for parathyroid disorders focuses on restoring calcium balance, regulating hormone levels, preventing complications, and improving overall metabolic health. Management may include calcium and vitamin D supplementation, medications to regulate calcium metabolism, hydration therapy, dietary modification, and regular laboratory monitoring. Patients with severe hyperparathyroidism may require parathyroid surgery to remove overactive glands. Long-term endocrinology follow-up, bone health monitoring, kidney function assessment, and lifestyle modification are important components of ongoing care and recovery.'],
        ],
                'recovery' => 'The long-term outlook for parathyroid disorders is generally positive with early diagnosis and proper endocrine management. Regular monitoring of calcium and hormone levels, medication adherence, healthy nutrition, hydration, bone health support, and continuous medical follow-up significantly help reduce complications, maintain metabolic stability, preserve organ function, and enhance overall quality of life. ___________________ 10. Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors) Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors)',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Parathyroid Disorders (Hyperparathyroidism, Hypoparathyroidism)',
                'meta_description' => 'Parathyroid disorders are hormonal conditions affecting the parathyroid glands, which are small glands located behind the thyroid gland and are responsible for ',
                'meta_keywords' => '',
            ]
        );
    }
}
