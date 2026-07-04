<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScarManagementCosmeticDermatologyProceduresSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Scar Management & Cosmetic Dermatology Procedures')],
            [
                'title' => 'Scar Management & Cosmetic Dermatology Procedures',
                'slug' => Str::slug('Scar Management & Cosmetic Dermatology Procedures'),
                'introduction' => 'Scar management and cosmetic dermatology procedures are specialized treatments designed to improve the appearance, texture, and function of the skin affected by scars, pigmentation, aging changes, or other cosmetic concerns. These procedures aim to restore smoother skin, enhance confidence, and support overall skin health.',
                'what_is' => 'Cosmetic dermatology treatments may include laser therapy, chemical peels, microneedling, dermabrasion, fillers, scar revision procedures, PRP therapy, and other advanced skin rejuvenation techniques. Scar management is commonly recommended for acne scars, surgical scars, injury-related scars, stretch marks, and keloids. Treatment plans are personalized based on skin type, scar severity, and cosmetic goals.',
                'symptoms' => [
            ['value' => 'Acne scars or uneven skin texture'],
            ['value' => 'Raised, depressed, or discolored scars'],
            ['value' => 'Fine lines, wrinkles, or aging skin changes'],
            ['value' => 'Pigmentation disorders or uneven skin tone'],
            ['value' => 'Cosmetic skin concerns affecting appearance and confidence'],
        ],
                'causes' => [
            ['value' => 'Scars and cosmetic skin concerns may develop due to acne, injuries, burns, surgeries, infections, inflammatory skin conditions, aging, excessive sun exposure, hormonal changes, or genetic factors. Keloids and hypertrophic scars can occur due to abnormal wound healing, while pigmentation disorders may result from sun damage, inflammation, or hormonal imbalance. Fine lines, wrinkles, uneven skin texture, and skin laxity commonly develop with aging, environmental exposure, and lifestyle-related factors such as stress, smoking, and inadequate skincare practices.'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary redness, swelling, or skin irritation'],
            ['value' => 'Pigmentation changes or uneven healing'],
            ['value' => 'Mild discomfort or sensitivity after procedures'],
            ['value' => 'Rare scarring or infection complications'],
            ['value' => 'Need for multiple treatment sessions for optimal results'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for scar management and cosmetic dermatology procedures are tailored according to the type of scar, skin condition, and individual cosmetic goals. Laser therapy is commonly used to improve scar texture, pigmentation, and skin rejuvenation, while chemical peels and microneedling help stimulate collagen production and enhance skin smoothness. Dermal fillers may be used to improve depressed scars and restore facial volume, whereas PRP therapy supports skin healing and rejuvenation. Raised scars and keloids may require corticosteroid injections, cryotherapy, or scar revision procedures. Additional treatments such as dermabrasion, radiofrequency therapy, and skin tightening procedures may also be recommended to improve overall skin appearance, reduce signs of aging, and enhance skin confidence.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Gentle skincare and regular moisturizing'],
            ['value' => 'Strict sun protection and sunscreen use'],
            ['value' => 'Avoiding harsh cosmetic products during healing'],
            ['value' => 'Following dermatologist instructions and medication guidance'],
            ['value' => 'Regular follow-up sessions and maintenance treatments when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, swelling, or skin irritation'],
            ['value' => 'Pigmentation changes or uneven healing'],
            ['value' => 'Mild discomfort or sensitivity after procedures'],
            ['value' => 'Rare scarring or infection complications'],
            ['value' => 'Need for multiple treatment sessions for optimal results'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for scar management and cosmetic dermatology procedures are tailored according to the type of scar, skin condition, and individual cosmetic goals. Laser therapy is commonly used to improve scar texture, pigmentation, and skin rejuvenation, while chemical peels and microneedling help stimulate collagen production and enhance skin smoothness. Dermal fillers may be used to improve depressed scars and restore facial volume, whereas PRP therapy supports skin healing and rejuvenation. Raised scars and keloids may require corticosteroid injections, cryotherapy, or scar revision procedures. Additional treatments such as dermabrasion, radiofrequency therapy, and skin tightening procedures may also be recommended to improve overall skin appearance, reduce signs of aging, and enhance skin confidence.'],
        ],
                'long_term_outlook' => 'The long-term outlook for scar management and cosmetic dermatology procedures is generally very positive when treatments are performed under professional supervision. These procedures can significantly improve skin appearance, texture, and confidence. Consistent skincare, sun protection, healthy lifestyle habits, and regular dermatologic follow-up help maintain long-lasting cosmetic results and support overall skin health.',
                'conclusion' => '',
                'seo_title' => 'Scar Management & Cosmetic Dermatology Procedures',
                'seo_description' => 'Scar management and cosmetic dermatology procedures are specialized treatments designed to improve the appearance, texture, and function of the skin affected by scars, pigmentation, aging changes, or other cosmetic concerns. These procedures aim to restore smoother skin, enhance confidence, and support overall skin health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
