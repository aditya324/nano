<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeborrheicDermatitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Seborrheic Dermatitis')],
            [
                'name' => 'Seborrheic Dermatitis',
                'slug' => Str::slug('Seborrheic Dermatitis'),
                'h1' => 'Seborrheic Dermatitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Seborrheic dermatitis is a common inflammatory skin condition that mainly affects the scalp and areas rich in oil-producing glands. It causes dandruff, scaly patches, redness, and skin irritation. The condition may also affect the face, ears, chest, and other oily areas of the body. Seborrheic dermatitis can occur in both adults and infants and often develops in recurring flare-ups.',
                'about_more' => '',
                'overview' => 'Seborrheic dermatitis is a common inflammatory skin condition that mainly affects the scalp and areas rich in oil-producing glands. It causes dandruff, scaly patches, redness, and skin irritation. The condition may also affect the face, ears, chest, and other oily areas of the body. Seborrheic dermatitis can occur in both adults and infants and often develops in recurring flare-ups.',
                'symptoms' => [
            ['value' => 'Dry or greasy scalp scaling (dandruff)'],
            ['value' => 'Thick, scaly skin patches or plaques'],
            ['value' => 'Small yellow, red, or dark raised bumps'],
            ['value' => 'Itchy or irritated skin'],
            ['value' => 'Ring-shaped rash in petaloid seborrheic dermatitis'],
        ],
                'causes' => [
            ['value' => 'Infections or overgrowth of skin yeast (Malassezia)'],
            ['value' => 'Use of alcohol-based skincare products'],
            ['value' => 'Excessive sun exposure or weather changes'],
            ['value' => 'Emotional stress or fatigue'],
            ['value' => 'Exposure to harsh chemicals or irritants'],
        ],
                'risks' => [
            ['value' => 'Family history of dermatitis or skin disorders'],
            ['value' => 'Nervous system conditions such as Parkinson’s disease'],
            ['value' => 'Immune system disorders including HIV infection'],
            ['value' => 'Associated skin conditions such as rosacea, psoriasis, or acne'],
            ['value' => 'Mental health conditions such as depression or chronic stress'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Medicated anti-dandruff shampoos and cleansers'],
            ['value' => 'Topical antifungal or anti-inflammatory medications'],
            ['value' => 'Corticosteroid creams or lotions for flare-ups'],
            ['value' => 'Gentle skincare and avoidance of triggers'],
            ['value' => 'Regular dermatologic follow-up and long-term scalp care'],
        ],
                'recovery' => 'The long-term outlook for seborrheic dermatitis is generally good with proper skin and scalp care. Although the condition may be chronic and recurrent, symptoms can usually be controlled with regular treatment and trigger management. Consistent skincare, stress reduction, and medical follow-up help improve symptom control and overall skin health. ____________________ 13. Rosacea Rosacea',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Seborrheic Dermatitis',
                'meta_description' => 'Seborrheic dermatitis is a common inflammatory skin condition that mainly affects the scalp and areas rich in oil-producing glands. It causes dandruff, scaly pa',
                'meta_keywords' => '',
            ]
        );
    }
}
