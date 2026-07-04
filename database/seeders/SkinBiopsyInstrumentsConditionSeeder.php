<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinBiopsyInstrumentsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Skin Biopsy Instruments')],
            [
                'name' => 'Skin Biopsy Instruments',
                'slug' => Str::slug('Skin Biopsy Instruments'),
                'h1' => 'Skin Biopsy Instruments',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Skin biopsy instruments are specialized medical tools used to collect small samples of skin tissue for diagnostic examination. These instruments help dermatologists evaluate suspicious skin lesions, infections, inflammatory conditions, autoimmune diseases, and skin cancers through microscopic analysis.',
                'about_more' => '',
                'overview' => 'Skin biopsy procedures are commonly performed using punch biopsy tools, scalpels, curettes, forceps, scissors, and suturing instruments. Different biopsy techniques such as punch biopsy, shave biopsy, and excisional biopsy are selected depending on the size, depth, and location of the skin lesion. The collected tissue samples are examined in a laboratory to support accurate diagnosis and treatment planning.',
                'symptoms' => [
            ['value' => 'Suspicious moles or changing skin lesions'],
            ['value' => 'Persistent skin rashes or unexplained inflammation'],
            ['value' => 'Non-healing sores or ulcers'],
            ['value' => 'Pigmented, raised, or irregular skin growths'],
            ['value' => 'Suspected skin infections or autoimmune skin diseases'],
            ['value' => 'Common Causes'],
            ['value' => 'Abnormal skin growth or pigmentation changes'],
            ['value' => 'Chronic inflammatory or autoimmune skin disorders'],
            ['value' => 'Persistent skin infections or lesions'],
            ['value' => 'Precancerous or cancerous skin changes'],
            ['value' => 'Unexplained skin symptoms requiring diagnostic evaluation'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Mild pain, bleeding, or swelling at the biopsy site'],
            ['value' => 'Temporary redness or skin irritation'],
            ['value' => 'Small scars or pigmentation changes after healing'],
            ['value' => 'Infection at the biopsy site in rare cases'],
            ['value' => 'Delayed wound healing in some individuals'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Skin biopsy instruments are used as part of diagnostic dermatologic procedures to identify the underlying cause of skin abnormalities. Biopsy findings help guide treatment plans, which may include medications, surgical procedures, laser therapy, cancer treatment, or long-term dermatologic monitoring depending on the diagnosis.'],
            ['value' => 'Keeping the biopsy site clean and protected'],
            ['value' => 'Following wound care and dressing instructions'],
            ['value' => 'Monitoring for bleeding, redness, or signs of infection'],
            ['value' => 'Avoiding scratching or trauma to the treated area'],
            ['value' => 'Follow-up visits for biopsy results and further management'],
        ],
                'recovery' => 'The long-term outlook after skin biopsy procedures is generally very good. Skin biopsies are important diagnostic tools that support early detection and accurate management of many dermatologic conditions. Proper wound care, regular dermatologic follow-up, and timely treatment based on biopsy results help maintain long-term skin health and improve treatment outcomes. _______________________ 126. Electrocautery / Radiofrequency Devices Equipment',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Skin Biopsy Instruments',
                'meta_description' => 'Skin biopsy instruments are specialized medical tools used to collect small samples of skin tissue for diagnostic examination. These instruments help dermatolog',
                'meta_keywords' => '',
            ]
        );
    }
}
