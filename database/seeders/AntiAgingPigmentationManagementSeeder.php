<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiAgingPigmentationManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anti-Aging & Pigmentation Management')],
            [
                'title' => 'Anti-Aging & Pigmentation Management',
                'slug' => Str::slug('Anti-Aging & Pigmentation Management'),
                'introduction' => 'Anti-aging and pigmentation management involves medical and cosmetic dermatologic treatments aimed at reducing signs of skin aging, improving uneven skin tone, and enhancing overall skin appearance. Treatments may include topical skincare products, minimally invasive procedures, and advanced dermatologic therapies tailored to individual skin concerns.',
                'what_is' => 'Anti-aging therapies commonly address fine lines, wrinkles, loss of skin elasticity, dullness, and sun damage. Pigmentation management focuses on conditions such as melasma, hyperpigmentation, sunspots, and post-inflammatory discoloration. Treatment approaches may include topical medications, chemical peels, laser therapy, microneedling, PRP therapy, and skin rejuvenation procedures designed to improve collagen production and skin texture.',
                'symptoms' => [
            ['value' => 'Fine lines and wrinkles'],
            ['value' => 'Uneven skin tone or dark patches'],
            ['value' => 'Sun damage or age spots'],
            ['value' => 'Dull, rough, or tired-looking skin'],
            ['value' => 'Loss of skin elasticity and firmness'],
        ],
                'causes' => [
            ['value' => 'Skin aging and pigmentation changes may occur due to prolonged sun exposure, aging, hormonal fluctuations, genetics, pollution, stress, smoking, and unhealthy lifestyle habits. Ultraviolet (UV) radiation is one of the major causes of premature aging, wrinkles, and uneven pigmentation. Conditions such as melasma, post-inflammatory hyperpigmentation, acne scars, and age spots may also develop due to hormonal changes, inflammation, skin injuries, or improper skincare practices. Reduced collagen production and environmental damage further contribute to dullness, loss of elasticity, and visible aging signs.'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary redness, irritation, or skin sensitivity'],
            ['value' => 'Dryness, peeling, or mild swelling after procedures'],
            ['value' => 'Pigmentation changes or uneven healing'],
            ['value' => 'Increased sun sensitivity after treatment'],
            ['value' => 'Rare scarring or allergic reactions in sensitive individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for anti-aging and pigmentation management are personalized according to skin type, severity of pigmentation, and cosmetic goals. Topical therapies may include retinoids, antioxidants, skin-lightening agents, moisturizers, and medicated creams that help improve collagen production, reduce discoloration, and enhance skin texture. Procedural treatments such as chemical peels, laser therapy, microneedling, PRP therapy, dermabrasion, and skin rejuvenation procedures may be recommended to reduce wrinkles, improve pigmentation, and restore skin radiance. In some cases, combination therapies are used for better and longer-lasting cosmetic results. Proper sun protection, hydration, balanced nutrition, and consistent skincare routines play an essential role in maintaining healthy and youthful-looking skin.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Daily use of sunscreen and sun protection measures'],
            ['value' => 'Gentle skincare and regular moisturization'],
            ['value' => 'Avoiding harsh cosmetic products during healing'],
            ['value' => 'Maintaining hydration and healthy lifestyle habits'],
            ['value' => 'Regular dermatologic follow-up and maintenance treatments'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, irritation, or skin sensitivity'],
            ['value' => 'Dryness, peeling, or mild swelling after procedures'],
            ['value' => 'Pigmentation changes or uneven healing'],
            ['value' => 'Increased sun sensitivity after treatment'],
            ['value' => 'Rare scarring or allergic reactions in sensitive individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for anti-aging and pigmentation management are personalized according to skin type, severity of pigmentation, and cosmetic goals. Topical therapies may include retinoids, antioxidants, skin-lightening agents, moisturizers, and medicated creams that help improve collagen production, reduce discoloration, and enhance skin texture. Procedural treatments such as chemical peels, laser therapy, microneedling, PRP therapy, dermabrasion, and skin rejuvenation procedures may be recommended to reduce wrinkles, improve pigmentation, and restore skin radiance. In some cases, combination therapies are used for better and longer-lasting cosmetic results. Proper sun protection, hydration, balanced nutrition, and consistent skincare routines play an essential role in maintaining healthy and youthful-looking skin.'],
        ],
                'long_term_outlook' => 'The long-term outlook for anti-aging and pigmentation management is generally very positive with consistent treatment and proper skincare practices. Combined topical and procedural therapies can significantly improve skin tone, texture, elasticity, and overall appearance. Ongoing dermatologic care, sun protection, and healthy lifestyle habits are important for maintaining long-term cosmetic results and skin health.',
                'conclusion' => '',
                'seo_title' => 'Anti-Aging & Pigmentation Management',
                'seo_description' => 'Anti-aging and pigmentation management involves medical and cosmetic dermatologic treatments aimed at reducing signs of skin aging, improving uneven skin tone, and enhancing overall skin appearance. Treatments may include topical skincare products, minimally invasive procedures, and advanced dermatologic therapies tailored to individual skin concerns.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
