<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinBiopsyInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Biopsy Instruments')],
            [
                'title' => 'Skin Biopsy Instruments',
                'slug' => Str::slug('Skin Biopsy Instruments'),
                'introduction' => 'Skin biopsy instruments are specialized medical tools used to collect small samples of skin tissue for diagnostic examination. These instruments help dermatologists evaluate suspicious skin lesions, infections, inflammatory conditions, autoimmune diseases, and skin cancers through microscopic analysis.',
                'what_is' => 'Skin biopsy procedures are commonly performed using punch biopsy tools, scalpels, curettes, forceps, scissors, and suturing instruments. Different biopsy techniques such as punch biopsy, shave biopsy, and excisional biopsy are selected depending on the size, depth, and location of the skin lesion. The collected tissue samples are examined in a laboratory to support accurate diagnosis and treatment planning.',
                'symptoms' => [
            ['value' => 'Suspicious moles or changing skin lesions'],
            ['value' => 'Persistent skin rashes or unexplained inflammation'],
            ['value' => 'Non-healing sores or ulcers'],
            ['value' => 'Pigmented, raised, or irregular skin growths'],
            ['value' => 'Suspected skin infections or autoimmune skin diseases'],
        ],
                'causes' => [
            ['value' => 'Abnormal skin growth or pigmentation changes'],
            ['value' => 'Chronic inflammatory or autoimmune skin disorders'],
            ['value' => 'Persistent skin infections or lesions'],
            ['value' => 'Precancerous or cancerous skin changes'],
            ['value' => 'Unexplained skin symptoms requiring diagnostic evaluation'],
        ],
                'condition_risks' => [
            ['value' => 'Mild pain, bleeding, or swelling at the biopsy site'],
            ['value' => 'Temporary redness or skin irritation'],
            ['value' => 'Small scars or pigmentation changes after healing'],
            ['value' => 'Infection at the biopsy site in rare cases'],
            ['value' => 'Delayed wound healing in some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Skin biopsy instruments are used as part of diagnostic dermatologic procedures to identify the underlying cause of skin abnormalities. Biopsy findings help guide treatment plans, which may include medications, surgical procedures, laser therapy, cancer treatment, or long-term dermatologic monitoring depending on the diagnosis.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping the biopsy site clean and protected'],
            ['value' => 'Following wound care and dressing instructions'],
            ['value' => 'Monitoring for bleeding, redness, or signs of infection'],
            ['value' => 'Avoiding scratching or trauma to the treated area'],
            ['value' => 'Follow-up visits for biopsy results and further management'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild pain, bleeding, or swelling at the biopsy site'],
            ['value' => 'Temporary redness or skin irritation'],
            ['value' => 'Small scars or pigmentation changes after healing'],
            ['value' => 'Infection at the biopsy site in rare cases'],
            ['value' => 'Delayed wound healing in some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Skin biopsy instruments are used as part of diagnostic dermatologic procedures to identify the underlying cause of skin abnormalities. Biopsy findings help guide treatment plans, which may include medications, surgical procedures, laser therapy, cancer treatment, or long-term dermatologic monitoring depending on the diagnosis.'],
        ],
                'long_term_outlook' => 'The long-term outlook after skin biopsy procedures is generally very good. Skin biopsies are important diagnostic tools that support early detection and accurate management of many dermatologic conditions. Proper wound care, regular dermatologic follow-up, and timely treatment based on biopsy results help maintain long-term skin health and improve treatment outcomes.',
                'conclusion' => '',
                'seo_title' => 'Skin Biopsy Instruments',
                'seo_description' => 'Skin biopsy instruments are specialized medical tools used to collect small samples of skin tissue for diagnostic examination. These instruments help dermatologists evaluate suspicious skin lesions, infections, inflammatory conditions, autoimmune diseases, and skin cancers through microscopic analysis.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
