<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarcinomaThyroidConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Carcinoma Thyroid')],
            [
                'name' => 'Carcinoma Thyroid',
                'slug' => Str::slug('Carcinoma Thyroid'),
                'h1' => 'Carcinoma Thyroid',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thyroid carcinoma is cancer arising from the thyroid gland. Many thyroid cancers grow slowly and have favorable outcomes when detected early.',
                'about_more' => '',
                'overview' => 'Thyroid carcinoma is cancer arising from the thyroid gland. Many thyroid cancers grow slowly and have favorable outcomes when detected early.',
                'symptoms' => [
            ['value' => 'Painless neck swelling or lump'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Enlarged neck lymph nodes'],
            ['value' => 'Persistent throat discomfort'],
        ],
                'causes' => [
            ['value' => 'Radiation exposure to the neck'],
            ['value' => 'Family history of thyroid cancer'],
            ['value' => 'Genetic mutations'],
            ['value' => 'Long-standing thyroid nodules'],
            ['value' => 'Certain hereditary syndromes'],
        ],
                'risks' => [
            ['value' => 'Spread to lymph nodes and lungs'],
            ['value' => 'Compression of nearby structures'],
            ['value' => 'Hormonal imbalance after surgery'],
            ['value' => 'Recurrence of cancer'],
            ['value' => 'Voice changes from nerve involvement'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Thyroid ultrasound and biopsy'],
            ['value' => 'Surgical thyroidectomy'],
            ['value' => 'Radioactive iodine treatment'],
            ['value' => 'Thyroid hormone replacement therapy'],
            ['value' => 'Long-term oncology follow-up'],
        ],
                'recovery' => 'Most thyroid cancers have excellent survival rates with early diagnosis and proper treatment. Lifelong follow-up may be necessary.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Carcinoma Thyroid',
                'meta_description' => 'Thyroid carcinoma is cancer arising from the thyroid gland. Many thyroid cancers grow slowly and have favorable outcomes when detected early.',
                'meta_keywords' => '',
            ]
        );
    }
}
