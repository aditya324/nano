<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperpigmentationMelasmaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hyperpigmentation / Melasma')],
            [
                'name' => 'Hyperpigmentation / Melasma',
                'slug' => Str::slug('Hyperpigmentation / Melasma'),
                'h1' => 'Hyperpigmentation / Melasma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hyperpigmentation is a common skin condition in which certain areas of the skin become darker than the surrounding skin due to increased melanin production. Melasma is a specific type of hyperpigmentation that commonly appears as brown or grayish patches on the face, especially on the cheeks, forehead, nose, and upper lip. These conditions are often associated with sun exposure, hormonal changes, inflammation, and genetic factors.',
                'about_more' => '',
                'overview' => 'Hyperpigmentation is a common skin condition in which certain areas of the skin become darker than the surrounding skin due to increased melanin production. Melasma is a specific type of hyperpigmentation that commonly appears as brown or grayish patches on the face, especially on the cheeks, forehead, nose, and upper lip. These conditions are often associated with sun exposure, hormonal changes, inflammation, and genetic factors.',
                'symptoms' => [
            ['value' => 'Darkened patches or uneven skin tone'],
            ['value' => 'Brown, gray, or tan discoloration on the skin'],
            ['value' => 'Symmetrical facial pigmentation in melasma'],
            ['value' => 'Increased pigmentation after acne, inflammation, or skin injury'],
            ['value' => 'Worsening pigmentation with sun exposure'],
        ],
                'causes' => [
            ['value' => 'Excessive exposure to sunlight and ultraviolet (UV) radiation'],
            ['value' => 'Hormonal changes during pregnancy or due to hormonal medications'],
            ['value' => 'Inflammation or skin irritation after acne or injury'],
            ['value' => 'Genetic predisposition and sensitive skin'],
            ['value' => 'Certain cosmetics, medications, or heat exposure'],
        ],
                'risks' => [
            ['value' => 'Persistent or recurrent skin discoloration'],
            ['value' => 'Uneven skin tone affecting cosmetic appearance'],
            ['value' => 'Increased skin sensitivity after cosmetic treatments'],
            ['value' => 'Emotional stress or reduced self-confidence'],
            ['value' => 'Worsening pigmentation without proper sun protection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical lightening creams and medicated skincare products'],
            ['value' => 'Chemical peels and laser-based treatments'],
            ['value' => 'Daily use of broad-spectrum sunscreen and sun protection'],
            ['value' => 'Oral medications or hormonal management when required'],
            ['value' => 'Dermatologic procedures for resistant pigmentation cases'],
        ],
                'recovery' => 'The long-term outlook for hyperpigmentation and melasma is generally positive with proper skincare, medical treatment, and sun protection. Although pigmentation may recur, especially with continued sun exposure or hormonal triggers, regular dermatologic care and preventive measures can significantly improve skin tone, reduce discoloration, and support long-term skin health. ___________________________________ 15. Skin Cancers (Basal Cell Carcinoma, Squamous Cell Carcinoma, Melanoma) Basal Cell Carcinoma Basal Cell Carcinoma',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Hyperpigmentation / Melasma',
                'meta_description' => 'Hyperpigmentation is a common skin condition in which certain areas of the skin become darker than the surrounding skin due to increased melanin production. Mel',
                'meta_keywords' => '',
            ]
        );
    }
}
