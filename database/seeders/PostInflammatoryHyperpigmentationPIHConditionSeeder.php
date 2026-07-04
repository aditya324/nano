<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostInflammatoryHyperpigmentationPIHConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Inflammatory Hyperpigmentation (PIH)')],
            [
                'name' => 'Post-Inflammatory Hyperpigmentation (PIH)',
                'slug' => Str::slug('Post-Inflammatory Hyperpigmentation (PIH)'),
                'h1' => 'Post-Inflammatory Hyperpigmentation (PIH)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-inflammatory hyperpigmentation (PIH) is a common skin condition in which dark patches or spots develop after skin inflammation, irritation, or injury. It occurs when excess melanin is produced during the healing process, leading to uneven skin discoloration. PIH may affect individuals of all skin types but is more common in darker skin tones.',
                'about_more' => '',
                'overview' => 'Post-inflammatory hyperpigmentation (PIH) is a common skin condition in which dark patches or spots develop after skin inflammation, irritation, or injury. It occurs when excess melanin is produced during the healing process, leading to uneven skin discoloration. PIH may affect individuals of all skin types but is more common in darker skin tones.',
                'symptoms' => [
            ['value' => 'Dark brown, black, or gray skin patches'],
            ['value' => 'Uneven skin tone after acne, eczema, or skin injury'],
            ['value' => 'Flat discolored spots on the skin'],
            ['value' => 'Pigmentation that becomes darker with sun exposure'],
            ['value' => 'Residual marks after inflammatory skin conditions heal'],
        ],
                'causes' => [
            ['value' => 'Acne, eczema, or inflammatory skin conditions'],
            ['value' => 'Skin injuries, burns, cuts, or irritation'],
            ['value' => 'Excessive scratching or picking at the skin'],
            ['value' => 'Sun exposure worsening pigmentation'],
            ['value' => 'Chemical irritation or cosmetic procedures'],
        ],
                'risks' => [
            ['value' => 'Persistent or recurrent skin discoloration'],
            ['value' => 'Uneven skin tone affecting appearance'],
            ['value' => 'Emotional stress or reduced self-confidence'],
            ['value' => 'Increased pigmentation after sun exposure'],
            ['value' => 'Skin sensitivity from aggressive treatments'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical lightening creams and medicated skincare products'],
            ['value' => 'Chemical peels and laser therapy'],
            ['value' => 'Sunscreen and strict sun protection measures'],
            ['value' => 'Gentle skincare and avoidance of skin irritation'],
            ['value' => 'Dermatologic procedures for resistant pigmentation'],
        ],
                'recovery' => 'The long-term outlook for post-inflammatory hyperpigmentation is generally good with proper skincare and treatment. Pigmentation often fades gradually over time, although some cases may persist longer depending on skin type and severity. Early treatment, sun protection, and regular dermatologic care help improve skin tone and reduce recurrence.',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Post-Inflammatory Hyperpigmentation (PIH)',
                'meta_description' => 'Post-inflammatory hyperpigmentation (PIH) is a common skin condition in which dark patches or spots develop after skin inflammation, irritation, or injury. It o',
                'meta_keywords' => '',
            ]
        );
    }
}
