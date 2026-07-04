<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DandruffConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dandruff')],
            [
                'name' => 'Dandruff',
                'slug' => Str::slug('Dandruff'),
                'h1' => 'Dandruff',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dandruff is a common scalp condition that causes flaking of the skin on the scalp. It may also lead to itching, irritation, and dryness or oiliness of the scalp. Dandruff is not contagious or serious, but it can be persistent and may affect confidence and comfort. The condition is commonly associated with excess oil production, sensitivity to scalp microorganisms, or underlying scalp inflammation.',
                'about_more' => '',
                'overview' => 'Dandruff is a common scalp condition that causes flaking of the skin on the scalp. It may also lead to itching, irritation, and dryness or oiliness of the scalp. Dandruff is not contagious or serious, but it can be persistent and may affect confidence and comfort. The condition is commonly associated with excess oil production, sensitivity to scalp microorganisms, or underlying scalp inflammation.',
                'symptoms' => [
            ['value' => 'White or yellow flakes on the scalp and hair'],
            ['value' => 'Itchy or irritated scalp'],
            ['value' => 'Dry or oily scalp appearance'],
            ['value' => 'Redness or mild inflammation of the scalp'],
            ['value' => 'Increased flaking during stress or weather changes'],
        ],
                'causes' => [
            ['value' => 'Excess oil production on the scalp'],
            ['value' => 'Overgrowth of Malassezia yeast on the scalp'],
            ['value' => 'Dry skin or sensitivity to hair care products'],
            ['value' => 'Stress, hormonal changes, or lack of regular hair washing'],
            ['value' => 'Cold weather or environmental changes'],
        ],
                'risks' => [
            ['value' => 'Persistent scalp itching and discomfort'],
            ['value' => 'Scalp irritation or inflammation'],
            ['value' => 'Embarrassment or reduced self-confidence'],
            ['value' => 'Worsening of seborrheic dermatitis in some individuals'],
            ['value' => 'Temporary hair shedding due to excessive scratching'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Medicated anti-dandruff shampoos'],
            ['value' => 'Antifungal or anti-inflammatory scalp treatments'],
            ['value' => 'Gentle scalp cleansing and regular hair care'],
            ['value' => 'Avoidance of harsh hair products or irritants'],
            ['value' => 'Dermatologic evaluation for severe or persistent dandruff'],
        ],
                'recovery' => 'The long-term outlook for dandruff is generally very good with proper scalp care and treatment. Although dandruff may recur periodically, regular use of medicated shampoos and maintaining good scalp hygiene can effectively control symptoms. Consistent hair care and medical follow-up help maintain scalp health and reduce flare-ups. ________________________ 24. Hair and Scalp Disorders (Dandruff, Psoriasis, Alopecia) Scalp Psoriasis',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Dandruff',
                'meta_description' => 'Dandruff is a common scalp condition that causes flaking of the skin on the scalp. It may also lead to itching, irritation, and dryness or oiliness of the scalp',
                'meta_keywords' => '',
            ]
        );
    }
}
