<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeckSwellingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neck Swelling')],
            [
                'name' => 'Neck Swelling',
                'slug' => Str::slug('Neck Swelling'),
                'h1' => 'Neck Swelling',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neck swelling refers to enlargement or lumps in the neck caused by infections, enlarged lymph nodes, thyroid disease, cysts, or tumors. Proper evaluation is essential to determine the underlying cause.',
                'about_more' => '',
                'overview' => 'Neck swelling refers to enlargement or lumps in the neck caused by infections, enlarged lymph nodes, thyroid disease, cysts, or tumors. Proper evaluation is essential to determine the underlying cause.',
                'symptoms' => [
            ['value' => 'Visible or palpable neck lump'],
            ['value' => 'Pain or tenderness in the neck'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Fever or infection symptoms'],
            ['value' => 'Persistent swelling or weight loss'],
        ],
                'causes' => [
            ['value' => 'Enlarged lymph nodes due to infection'],
            ['value' => 'Thyroid gland disorders'],
            ['value' => 'Congenital cysts or swellings'],
            ['value' => 'Salivary gland disease'],
            ['value' => 'Benign or malignant tumors'],
        ],
                'risks' => [
            ['value' => 'Airway compression in severe cases'],
            ['value' => 'Spread of infection'],
            ['value' => 'Delayed diagnosis of cancer'],
            ['value' => 'Cosmetic concerns and discomfort'],
            ['value' => 'Difficulty swallowing or speaking'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and imaging studies'],
            ['value' => 'Blood tests and biopsy if needed'],
            ['value' => 'Antibiotics for infections'],
            ['value' => 'Surgical removal of suspicious masses'],
            ['value' => 'Cancer referral and multidisciplinary care'],
        ],
                'recovery' => 'Outcome depends on the underlying cause. Early diagnosis improves treatment success and reduces complications.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Neck Swelling',
                'meta_description' => 'Neck swelling refers to enlargement or lumps in the neck caused by infections, enlarged lymph nodes, thyroid disease, cysts, or tumors. Proper evaluation is ess',
                'meta_keywords' => '',
            ]
        );
    }
}
