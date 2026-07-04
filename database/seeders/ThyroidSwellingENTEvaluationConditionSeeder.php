<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidSwellingENTEvaluationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thyroid Swelling (ENT Evaluation)')],
            [
                'name' => 'Thyroid Swelling (ENT Evaluation)',
                'slug' => Str::slug('Thyroid Swelling (ENT Evaluation)'),
                'h1' => 'Thyroid Swelling (ENT Evaluation)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thyroid swelling refers to enlargement of the thyroid gland in the neck, also called goiter. It may result from hormonal imbalance, nodules, inflammation, or thyroid tumors.',
                'about_more' => '',
                'overview' => 'Thyroid swelling refers to enlargement of the thyroid gland in the neck, also called goiter. It may result from hormonal imbalance, nodules, inflammation, or thyroid tumors.',
                'symptoms' => [
            ['value' => 'Visible swelling in the front of the neck'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Neck discomfort or tightness'],
            ['value' => 'Symptoms of thyroid hormone imbalance'],
        ],
                'causes' => [
            ['value' => 'Iodine deficiency'],
            ['value' => 'Thyroid nodules or cysts'],
            ['value' => 'Autoimmune thyroid disease'],
            ['value' => 'Thyroid infections or inflammation'],
            ['value' => 'Benign or malignant thyroid tumors'],
        ],
                'risks' => [
            ['value' => 'Compression of airway or esophagus'],
            ['value' => 'Hormonal imbalance complications'],
            ['value' => 'Cosmetic concerns'],
            ['value' => 'Risk of thyroid cancer in some nodules'],
            ['value' => 'Voice changes due to nerve involvement'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Thyroid function tests and ultrasound'],
            ['value' => 'Fine needle aspiration biopsy'],
            ['value' => 'Medications for thyroid imbalance'],
            ['value' => 'Surgical thyroid removal if indicated'],
            ['value' => 'Long-term endocrine and ENT follow-up'],
        ],
                'recovery' => 'Most thyroid swellings are manageable with medical or surgical treatment. Early evaluation helps rule out malignancy.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Thyroid Swelling (ENT Evaluation)',
                'meta_description' => 'Thyroid swelling refers to enlargement of the thyroid gland in the neck, also called goiter. It may result from hormonal imbalance, nodules, inflammation, or th',
                'meta_keywords' => '',
            ]
        );
    }
}
