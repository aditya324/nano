<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatchTestingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patch Testing')],
            [
                'title' => 'Patch Testing',
                'slug' => Str::slug('Patch Testing'),
                'introduction' => 'Patch testing is a specialized dermatologic procedure used to identify substances that may be causing allergic contact dermatitis. The test helps determine whether a person is allergic to specific allergens such as metals, fragrances, cosmetics, preservatives, rubber, or chemicals commonly found in daily products.',
                'what_is' => 'During patch testing, small amounts of potential allergens are applied to the skin, usually on the back, using adhesive patches. The patches remain in place for a specific period, typically 48 hours, after which the skin is examined for allergic reactions. Patch testing is commonly recommended for individuals with chronic, recurrent, or unexplained skin rashes suspected to be related to allergies or contact exposure.',
                'symptoms' => [
            ['value' => 'Persistent or recurrent skin rashes'],
            ['value' => 'Itching, redness, or skin irritation'],
            ['value' => 'Dry, cracked, or inflamed skin'],
            ['value' => 'Burning or stinging sensation after product use'],
            ['value' => 'Skin reactions related to cosmetics, metals, or chemicals'],
        ],
                'causes' => [
            ['value' => 'Allergic contact dermatitis occurs when the skin reacts to substances that trigger an immune response after repeated exposure. Common causes include metals such as nickel, fragrances in perfumes and cosmetics, preservatives in skincare products, hair dyes, rubber materials, detergents, adhesives, topical medications, and industrial chemicals. Exposure to certain plants, fabrics, and occupational irritants may also contribute to allergic skin reactions. Individuals with sensitive skin, chronic eczema, or frequent exposure to chemicals are at a higher risk of developing contact allergies.'],
        ],
                'condition_risks' => [
            ['value' => 'Mild itching or redness at test sites'],
            ['value' => 'Temporary skin irritation or discomfort'],
            ['value' => 'Localized swelling or rash reactions'],
            ['value' => 'Rare flare-up of existing dermatitis'],
            ['value' => 'Mild skin discoloration after testing in some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment for allergic contact dermatitis primarily focuses on identifying and avoiding the allergens responsible for skin reactions. Patch testing plays a key role in determining specific triggers so patients can modify their skincare products, cosmetics, workplace exposure, or lifestyle habits accordingly. Medical treatment may include topical corticosteroids to reduce inflammation, moisturizers to restore the skin barrier, antihistamines to relieve itching, and oral medications in more severe cases. In chronic or persistent dermatitis, dermatologists may recommend advanced therapies and personalized skincare plans to help prevent future flare-ups and maintain healthy skin.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping the test area dry until evaluation is complete'],
            ['value' => 'Avoiding scratching or rubbing the patches'],
            ['value' => 'Following dermatologist instructions regarding medications or skincare'],
            ['value' => 'Monitoring for delayed allergic reactions'],
            ['value' => 'Reviewing test results and trigger avoidance strategies during follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild itching or redness at test sites'],
            ['value' => 'Temporary skin irritation or discomfort'],
            ['value' => 'Localized swelling or rash reactions'],
            ['value' => 'Rare flare-up of existing dermatitis'],
            ['value' => 'Mild skin discoloration after testing in some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment for allergic contact dermatitis primarily focuses on identifying and avoiding the allergens responsible for skin reactions. Patch testing plays a key role in determining specific triggers so patients can modify their skincare products, cosmetics, workplace exposure, or lifestyle habits accordingly. Medical treatment may include topical corticosteroids to reduce inflammation, moisturizers to restore the skin barrier, antihistamines to relieve itching, and oral medications in more severe cases. In chronic or persistent dermatitis, dermatologists may recommend advanced therapies and personalized skincare plans to help prevent future flare-ups and maintain healthy skin.'],
        ],
                'long_term_outlook' => 'The long-term outlook after patch testing is generally very positive because identifying allergens helps prevent recurrent allergic skin reactions. Proper avoidance of identified triggers, regular dermatologic care, and appropriate skincare can significantly reduce flare-ups and improve long-term skin health and comfort.',
                'conclusion' => '',
                'seo_title' => 'Patch Testing',
                'seo_description' => 'Patch testing is a specialized dermatologic procedure used to identify substances that may be causing allergic contact dermatitis. The test helps determine whether a person is allergic to specific allergens such as metals, fragrances, cosmetics, preservatives, rubber, or chemicals commonly found in daily products.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
