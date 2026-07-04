<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidDisordersHypothyroidismHyperthyroidismConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thyroid Disorders (Hypothyroidism, Hyperthyroidism)')],
            [
                'name' => 'Thyroid Disorders (Hypothyroidism, Hyperthyroidism)',
                'slug' => Str::slug('Thyroid Disorders (Hypothyroidism, Hyperthyroidism)'),
                'h1' => 'Thyroid Disorders (Hypothyroidism, Hyperthyroidism)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thyroid disorders are hormonal conditions that occur when the thyroid gland produces either too little or too much thyroid hormone, affecting metabolism, energy levels, heart function, body temperature regulation, and overall health. Hypothyroidism occurs when the thyroid gland is underactive and does not produce enough hormones, while hyperthyroidism results from excessive thyroid hormone production causing increased metabolic activity. These conditions can affect multiple organ systems and require proper diagnosis and long-term endocrine management.',
                'about_more' => '',
                'overview' => 'Thyroid disorders are hormonal conditions that occur when the thyroid gland produces either too little or too much thyroid hormone, affecting metabolism, energy levels, heart function, body temperature regulation, and overall health. Hypothyroidism occurs when the thyroid gland is underactive and does not produce enough hormones, while hyperthyroidism results from excessive thyroid hormone production causing increased metabolic activity. These conditions can affect multiple organ systems and require proper diagnosis and long-term endocrine management.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or low energy levels'],
            ['value' => 'Unexplained weight changes or metabolic imbalance'],
            ['value' => 'Palpitations, rapid heartbeat, or anxiety'],
            ['value' => 'Heat or cold intolerance with excessive sweating or dry skin'],
            ['value' => 'Digestive changes, sleep disturbances, or difficulty concentrating'],
        ],
                'causes' => [
            ['value' => 'Autoimmune thyroid disease such as Hashimoto’s thyroiditis or Graves’ disease'],
            ['value' => 'Thyroid inflammation, infection, or nodules'],
            ['value' => 'Iodine imbalance affecting thyroid hormone production'],
            ['value' => 'Genetic predisposition or family history of thyroid disease'],
            ['value' => 'Certain medications, pregnancy-related hormonal changes, or thyroid surgery'],
        ],
                'risks' => [
            ['value' => 'Heart rhythm disturbances or cardiovascular complications'],
            ['value' => 'Severe metabolic imbalance affecting multiple organs'],
            ['value' => 'Infertility, menstrual irregularities, or pregnancy complications'],
            ['value' => 'Osteoporosis or muscle weakness in untreated hyperthyroidism'],
            ['value' => 'Myxedema coma or thyroid storm in severe untreated cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for thyroid disorders focuses on restoring normal hormone balance, relieving symptoms, preventing complications, and improving overall metabolic health. Management may include thyroid hormone replacement therapy for hypothyroidism, anti-thyroid medications for hyperthyroidism, radioactive iodine therapy, beta-blockers, nutritional counseling, and regular thyroid function monitoring. Some patients may require thyroid surgery for large goiters, nodules, or uncontrolled thyroid disease. Lifestyle modification, stress management, healthy nutrition, and regular endocrinology follow-up are important for long-term thyroid health and hormonal stability.'],
        ],
                'recovery' => 'The long-term outlook for thyroid disorders is generally positive with early diagnosis and proper treatment. Regular medication adherence, routine thyroid function testing, healthy lifestyle habits, stress management, nutritional support, and continuous medical follow-up significantly help maintain hormonal balance, reduce complications, improve metabolic function, and enhance overall quality of life. _________________________ 7. Goiter / Thyroid Nodules Goiter / Thyroid Nodules',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Thyroid Disorders (Hypothyroidism, Hyperthyroidism)',
                'meta_description' => 'Thyroid disorders are hormonal conditions that occur when the thyroid gland produces either too little or too much thyroid hormone, affecting metabolism, energy',
                'meta_keywords' => '',
            ]
        );
    }
}
