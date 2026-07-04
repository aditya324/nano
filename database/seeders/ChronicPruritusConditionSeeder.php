<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicPruritusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Pruritus')],
            [
                'name' => 'Chronic Pruritus',
                'slug' => Str::slug('Chronic Pruritus'),
                'h1' => 'Chronic Pruritus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic pruritus is persistent itching of the skin lasting for six weeks or longer. It may occur due to skin conditions, allergies, systemic diseases, nerve-related disorders, or unknown causes. Chronic itching can affect localized areas or the entire body and may significantly interfere with sleep, daily activities, and quality of life.',
                'about_more' => '',
                'overview' => 'Chronic pruritus is persistent itching of the skin lasting for six weeks or longer. It may occur due to skin conditions, allergies, systemic diseases, nerve-related disorders, or unknown causes. Chronic itching can affect localized areas or the entire body and may significantly interfere with sleep, daily activities, and quality of life.',
                'symptoms' => [
            ['value' => 'Persistent itching or skin irritation'],
            ['value' => 'Dry, rough, or flaky skin'],
            ['value' => 'Redness, scratch marks, or skin thickening'],
            ['value' => 'Burning or stinging sensation on the skin'],
            ['value' => 'Sleep disturbances caused by severe itching'],
        ],
                'causes' => [
            ['value' => 'Skin conditions such as eczema, psoriasis, or dermatitis'],
            ['value' => 'Allergic reactions or environmental irritants'],
            ['value' => 'Chronic medical conditions affecting the liver, kidneys, or thyroid'],
            ['value' => 'Stress, anxiety, or nerve-related disorders'],
            ['value' => 'Dry skin, temperature changes, or certain medications'],
        ],
                'risks' => [
            ['value' => 'Skin damage or infections caused by repeated scratching'],
            ['value' => 'Thickened or discolored skin changes'],
            ['value' => 'Sleep problems and chronic fatigue'],
            ['value' => 'Emotional stress, anxiety, or depression'],
            ['value' => 'Reduced quality of life due to persistent discomfort'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Moisturizers and soothing skincare products'],
            ['value' => 'Antihistamines and anti-itch medications'],
            ['value' => 'Topical corticosteroids or medicated creams'],
            ['value' => 'Treatment of underlying medical or skin conditions'],
            ['value' => 'Phototherapy or advanced dermatologic therapies for severe cases'],
        ],
                'recovery' => 'The long-term outlook for chronic pruritus depends on identifying and managing the underlying cause. Many individuals experience significant relief with proper treatment, skin care, and trigger avoidance. Regular dermatologic evaluation, healthy skincare practices, and ongoing medical management are important for improving comfort and maintaining long-term skin health. ___________________________ 21. Pigmentary Disorders (Post-inflammatory, Nevus) Post-Inflammatory Hyperpigmentation (PIH)',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Chronic Pruritus',
                'meta_description' => 'Chronic pruritus is persistent itching of the skin lasting for six weeks or longer. It may occur due to skin conditions, allergies, systemic diseases, nerve-rel',
                'meta_keywords' => '',
            ]
        );
    }
}
