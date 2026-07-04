<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidNoduleGoiterConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thyroid Nodule / Goiter')],
            [
                'name' => 'Thyroid Nodule / Goiter',
                'slug' => Str::slug('Thyroid Nodule / Goiter'),
                'h1' => 'Thyroid Nodule / Goiter',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A thyroid nodule is an abnormal growth within the thyroid gland, while goiter refers to enlargement of the thyroid gland. Most nodules are benign, but some may require evaluation for cancer.',
                'about_more' => '',
                'overview' => 'A thyroid nodule is an abnormal growth within the thyroid gland, while goiter refers to enlargement of the thyroid gland. Most nodules are benign, but some may require evaluation for cancer.',
                'symptoms' => [
            ['value' => 'Swelling in the front of the neck'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Neck discomfort or tightness'],
            ['value' => 'Symptoms of thyroid hormone imbalance'],
        ],
                'causes' => [
            ['value' => 'Iodine deficiency'],
            ['value' => 'Hormonal imbalance'],
            ['value' => 'Benign thyroid cysts or nodules'],
            ['value' => 'Autoimmune thyroid disease'],
            ['value' => 'Rarely thyroid malignancy'],
        ],
                'risks' => [
            ['value' => 'Compression of airway or esophagus'],
            ['value' => 'Cosmetic concerns'],
            ['value' => 'Thyroid hormone abnormalities'],
            ['value' => 'Risk of malignancy in suspicious nodules'],
            ['value' => 'Progressive enlargement of the gland'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Thyroid function tests and ultrasound'],
            ['value' => 'Fine needle aspiration biopsy'],
            ['value' => 'Medications for thyroid imbalance'],
            ['value' => 'Surgical thyroid removal when indicated'],
            ['value' => 'Regular monitoring and follow-up'],
        ],
                'recovery' => 'Most thyroid nodules are benign and manageable. Early evaluation helps identify malignant conditions promptly.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Thyroid Nodule / Goiter',
                'meta_description' => 'A thyroid nodule is an abnormal growth within the thyroid gland, while goiter refers to enlargement of the thyroid gland. Most nodules are benign, but some may ',
                'meta_keywords' => '',
            ]
        );
    }
}
