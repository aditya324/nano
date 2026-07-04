<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaserTherapyDevicesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Laser Therapy Devices')],
            [
                'name' => 'Laser Therapy Devices',
                'slug' => Str::slug('Laser Therapy Devices'),
                'h1' => 'Laser Therapy Devices',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Laser therapy devices are advanced dermatologic systems that use focused light energy to treat a wide range of skin, hair, and vascular conditions. These devices are designed to target specific pigments, blood vessels, or hair follicles while minimizing damage to surrounding healthy tissue.',
                'about_more' => '',
                'overview' => 'Laser therapy devices are commonly used for hair removal, pigmentation disorders, vascular lesions, acne scars, skin rejuvenation, and cosmetic dermatology procedures. Different laser technologies are selected based on the condition being treated. Hair removal lasers target hair follicles, pigmentation lasers treat melasma and uneven skin tone, and vascular lasers help manage rosacea, visible blood vessels, and vascular birthmarks. These treatments are usually performed under dermatologic supervision in specialized clinics.',
                'symptoms' => [
            ['value' => 'Unwanted hair growth'],
            ['value' => 'Hyperpigmentation or uneven skin tone'],
            ['value' => 'Visible blood vessels or vascular lesions'],
            ['value' => 'Acne scars or rough skin texture'],
            ['value' => 'Cosmetic skin concerns affecting appearance and confidence'],
            ['value' => 'Common Causes'],
            ['value' => 'Hormonal imbalance causing excessive hair growth'],
            ['value' => 'Sun exposure leading to pigmentation disorders'],
            ['value' => 'Vascular abnormalities or rosacea'],
            ['value' => 'Acne, inflammation, or skin injury causing scars'],
            ['value' => 'Aging-related skin texture and tone changes'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Temporary redness, swelling, or irritation'],
            ['value' => 'Increased skin sensitivity after treatment'],
            ['value' => 'Pigmentation changes or temporary darkening of the skin'],
            ['value' => 'Mild blistering or scarring in rare cases'],
            ['value' => 'Need for multiple treatment sessions for optimal results'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Laser therapy devices are used in various dermatologic and cosmetic procedures depending on the patient’s skin type and condition. Treatments may include laser hair reduction, pigmentation correction, vascular lesion therapy, acne scar resurfacing, and skin rejuvenation procedures. Dermatologists customize laser settings and treatment plans to ensure safe, effective, and long-lasting results while minimizing complications.'],
            ['value' => 'Strict sun protection and sunscreen use'],
            ['value' => 'Gentle skincare and regular moisturization'],
            ['value' => 'Avoiding harsh cosmetic products or heat exposure'],
            ['value' => 'Monitoring for redness, swelling, or pigmentation changes'],
            ['value' => 'Regular dermatologic follow-up and maintenance sessions if required'],
        ],
                'recovery' => 'The long-term outlook with laser therapy devices is generally very positive when treatments are performed under professional supervision. Laser procedures can significantly improve skin appearance, reduce unwanted hair or pigmentation, and enhance overall skin texture and confidence. Proper skincare, sun protection, and regular follow-up help maintain long-term treatment results and healthy skin. ________________________ 124. Phototherapy Units (UVB, PUVA) Phototherapy Units (UVB & PUVA) Equipment',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Laser Therapy Devices',
                'meta_description' => 'Laser therapy devices are advanced dermatologic systems that use focused light energy to treat a wide range of skin, hair, and vascular conditions. These device',
                'meta_keywords' => '',
            ]
        );
    }
}
