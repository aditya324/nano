<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SalivaryGlandDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Salivary Gland Disorders')],
            [
                'name' => 'Salivary Gland Disorders',
                'slug' => Str::slug('Salivary Gland Disorders'),
                'h1' => 'Salivary Gland Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Salivary gland disorders affect the glands producing saliva and may include infections, stones, cysts, autoimmune diseases, or tumors. These conditions can interfere with eating, speaking, and oral health.',
                'about_more' => '',
                'overview' => 'Salivary gland disorders affect the glands producing saliva and may include infections, stones, cysts, autoimmune diseases, or tumors. These conditions can interfere with eating, speaking, and oral health.',
                'symptoms' => [
            ['value' => 'Swelling near the jaw or mouth'],
            ['value' => 'Pain during eating'],
            ['value' => 'Dry mouth or reduced saliva'],
            ['value' => 'Fever and redness in infections'],
            ['value' => 'Difficulty opening the mouth'],
        ],
                'causes' => [
            ['value' => 'Salivary gland infections'],
            ['value' => 'Salivary duct stones'],
            ['value' => 'Autoimmune diseases such as Sjögren syndrome'],
            ['value' => 'Dehydration and poor oral hygiene'],
            ['value' => 'Benign or malignant gland tumors'],
        ],
                'risks' => [
            ['value' => 'Recurrent painful swelling'],
            ['value' => 'Abscess formation'],
            ['value' => 'Difficulty chewing and swallowing'],
            ['value' => 'Chronic dry mouth and dental problems'],
            ['value' => 'Spread of infection to nearby tissues'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics and hydration'],
            ['value' => 'Massage and warm compresses'],
            ['value' => 'Removal of salivary stones'],
            ['value' => 'Imaging and biopsy for tumors'],
            ['value' => 'Surgical treatment if necessary'],
        ],
                'recovery' => 'Most infections and stones respond well to treatment. Early diagnosis is important for tumor-related conditions.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'Salivary Gland Disorders',
                'meta_description' => 'Salivary gland disorders affect the glands producing saliva and may include infections, stones, cysts, autoimmune diseases, or tumors. These conditions can inte',
                'meta_keywords' => '',
            ]
        );
    }
}
