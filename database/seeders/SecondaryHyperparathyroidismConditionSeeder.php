<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SecondaryHyperparathyroidismConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Secondary Hyperparathyroidism')],
            [
                'name' => 'Secondary Hyperparathyroidism',
                'slug' => Str::slug('Secondary Hyperparathyroidism'),
                'h1' => 'Secondary Hyperparathyroidism',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Secondary hyperparathyroidism is a condition commonly seen in chronic kidney disease where the parathyroid glands produce excessive parathyroid hormone (PTH) due to low calcium, high phosphorus, and vitamin D imbalance.',
                'about_more' => '',
                'overview' => 'Secondary hyperparathyroidism is a condition commonly seen in chronic kidney disease where the parathyroid glands produce excessive parathyroid hormone (PTH) due to low calcium, high phosphorus, and vitamin D imbalance.',
                'symptoms' => [
            ['value' => 'Bone and joint pain'],
            ['value' => 'Muscle weakness and fatigue'],
            ['value' => 'Bone fractures or deformities'],
            ['value' => 'Itching and weakness'],
            ['value' => 'Elevated parathyroid hormone levels on testing'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease affecting mineral regulation'],
            ['value' => 'High blood phosphorus levels'],
            ['value' => 'Vitamin D deficiency'],
            ['value' => 'Low calcium levels in blood'],
            ['value' => 'Long-term dialysis dependence'],
        ],
                'risks' => [
            ['value' => 'Severe bone disease and fractures'],
            ['value' => 'Calcification of blood vessels and heart valves'],
            ['value' => 'Muscle weakness and mobility problems'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Persistent bone pain and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Phosphate control through diet and medications'],
            ['value' => 'Vitamin D and calcium supplementation'],
            ['value' => 'Calcimimetic medications to reduce PTH levels'],
            ['value' => 'Dialysis optimization'],
            ['value' => 'Parathyroid surgery in severe resistant cases'],
        ],
                'recovery' => 'Secondary hyperparathyroidism can often be controlled with medical treatment and dietary management. Early treatment helps protect bone strength and cardiovascular health.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Secondary Hyperparathyroidism',
                'meta_description' => 'Secondary hyperparathyroidism is a condition commonly seen in chronic kidney disease where the parathyroid glands produce excessive parathyroid hormone (PTH) du',
                'meta_keywords' => '',
            ]
        );
    }
}
