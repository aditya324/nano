<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastAbscessConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Breast Abscess')],
            [
                'name' => 'Breast Abscess',
                'slug' => Str::slug('Breast Abscess'),
                'h1' => 'Breast Abscess',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A breast abscess is a localized collection of pus within the breast tissue, commonly occurring due to bacterial infection. It is frequently seen in breastfeeding women but can also occur in non-lactating individuals.',
                'about_more' => '',
                'overview' => 'A breast abscess is a localized collection of pus within the breast tissue, commonly occurring due to bacterial infection. It is frequently seen in breastfeeding women but can also occur in non-lactating individuals.',
                'symptoms' => [
            ['value' => 'Painful swelling in the breast'],
            ['value' => 'Redness and warmth over the affected area'],
            ['value' => 'Fever and chills'],
            ['value' => 'Pus discharge from the nipple or skin'],
            ['value' => 'Difficulty breastfeeding due to pain'],
        ],
                'causes' => [
            ['value' => 'Bacterial infection entering through cracked nipples'],
            ['value' => 'Blocked milk ducts during breastfeeding'],
            ['value' => 'Poor breast drainage or milk stasis'],
            ['value' => 'Diabetes or weak immunity'],
            ['value' => 'Smoking and poor hygiene practices'],
        ],
                'risks' => [
            ['value' => 'Spread of infection to surrounding tissue'],
            ['value' => 'Recurrent breast abscess formation'],
            ['value' => 'Breast tissue destruction or scarring'],
            ['value' => 'Difficulty breastfeeding'],
            ['value' => 'Rare spread of infection into bloodstream'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and ultrasound evaluation'],
            ['value' => 'Antibiotics and pain management'],
            ['value' => 'Needle aspiration or surgical drainage'],
            ['value' => 'Continued breast emptying during lactation'],
            ['value' => 'Proper wound care and follow-up'],
        ],
                'recovery' => 'Most patients recover completely with drainage and antibiotics. Early treatment prevents complications and preserves breast health.',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Breast Abscess',
                'meta_description' => 'A breast abscess is a localized collection of pus within the breast tissue, commonly occurring due to bacterial infection. It is frequently seen in breastfeedin',
                'meta_keywords' => '',
            ]
        );
    }
}
