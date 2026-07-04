<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubmandibularGlandDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Submandibular Gland Disorders')],
            [
                'name' => 'Submandibular Gland Disorders',
                'slug' => Str::slug('Submandibular Gland Disorders'),
                'h1' => 'Submandibular Gland Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Submandibular gland disorders affect the salivary glands located beneath the lower jaw. These conditions may include infections, salivary stones, inflammation, cysts, or tumors, leading to swelling and pain during eating or speaking.',
                'about_more' => '',
                'overview' => 'Submandibular gland disorders affect the salivary glands located beneath the lower jaw. These conditions may include infections, salivary stones, inflammation, cysts, or tumors, leading to swelling and pain during eating or speaking.',
                'symptoms' => [
            ['value' => 'Swelling below the jaw'],
            ['value' => 'Pain during eating or chewing'],
            ['value' => 'Dry mouth or reduced saliva production'],
            ['value' => 'Tenderness or redness in the gland area'],
            ['value' => 'Fever in infectious conditions'],
        ],
                'causes' => [
            ['value' => 'Salivary gland stones blocking ducts'],
            ['value' => 'Bacterial or viral infections'],
            ['value' => 'Dehydration and poor oral hygiene'],
            ['value' => 'Autoimmune diseases affecting salivary glands'],
            ['value' => 'Benign or malignant gland tumors'],
        ],
                'risks' => [
            ['value' => 'Recurrent gland swelling and pain'],
            ['value' => 'Abscess formation and infection spread'],
            ['value' => 'Difficulty swallowing or eating'],
            ['value' => 'Chronic dry mouth and dental problems'],
            ['value' => 'Facial discomfort and cosmetic concerns'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics and pain management'],
            ['value' => 'Hydration and salivary gland massage'],
            ['value' => 'Removal of salivary stones'],
            ['value' => 'Imaging and biopsy evaluation'],
            ['value' => 'Surgical treatment for persistent disease or tumors'],
        ],
                'recovery' => 'Most infections and obstructive conditions improve with proper treatment. Early diagnosis helps prevent complications and preserves gland function.',
                'sort_order' => 41,
                'is_active' => true,
                'meta_title' => 'Submandibular Gland Disorders',
                'meta_description' => 'Submandibular gland disorders affect the salivary glands located beneath the lower jaw. These conditions may include infections, salivary stones, inflammation, ',
                'meta_keywords' => '',
            ]
        );
    }
}
