<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CosmeticDermatologyEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cosmetic Dermatology Equipment')],
            [
                'name' => 'Cosmetic Dermatology Equipment',
                'slug' => Str::slug('Cosmetic Dermatology Equipment'),
                'h1' => 'Cosmetic Dermatology Equipment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cosmetic dermatology equipment includes specialized medical devices, injection systems, and aesthetic tools used for minimally invasive skin rejuvenation and anti-aging procedures. These treatments help improve facial appearance, reduce wrinkles, restore volume, and enhance overall skin texture and contour.',
                'about_more' => '',
                'overview' => 'Cosmetic dermatology procedures commonly involve the use of dermal fillers and botulinum toxin (Botox) injections to address signs of aging and cosmetic skin concerns. Fillers are used to restore facial volume, smooth lines, and improve facial contours, while Botox helps relax targeted facial muscles to reduce wrinkles and fine lines. Specialized equipment such as injection systems, microcannulas, skin analyzers, and aesthetic devices are used to perform these procedures safely and accurately under dermatologic supervision.',
                'symptoms' => [
            ['value' => 'Fine lines and facial wrinkles'],
            ['value' => 'Loss of facial volume or skin elasticity'],
            ['value' => 'Sagging skin or facial contour changes'],
            ['value' => 'Dull or aging skin appearance'],
            ['value' => 'Cosmetic concerns affecting appearance and confidence'],
            ['value' => 'Common Causes'],
            ['value' => 'Natural aging and collagen loss'],
            ['value' => 'Repeated facial muscle movement'],
            ['value' => 'Sun exposure and environmental skin damage'],
            ['value' => 'Reduced skin elasticity over time'],
            ['value' => 'Lifestyle factors such as stress, smoking, or poor skincare habits'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Temporary redness, swelling, or bruising after treatment'],
            ['value' => 'Mild pain or tenderness at injection sites'],
            ['value' => 'Allergic reactions or skin sensitivity in rare cases'],
            ['value' => 'Temporary asymmetry or uneven cosmetic results'],
            ['value' => 'Infection or vascular complications in uncommon cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cosmetic dermatology equipment is used in procedures such as Botox injections, dermal filler treatments, facial contouring, skin rejuvenation, and wrinkle reduction therapies. Treatment plans are customized according to facial anatomy, skin condition, and cosmetic goals. Dermatologists may combine injectable treatments with laser therapy, chemical peels, microneedling, or PRP therapy to achieve comprehensive aesthetic improvement.'],
            ['value' => 'Avoiding excessive touching or pressure on treated areas'],
            ['value' => 'Following skincare and medication instructions carefully'],
            ['value' => 'Avoiding strenuous activity or heat exposure immediately after procedures'],
            ['value' => 'Monitoring for swelling, bruising, or unusual reactions'],
            ['value' => 'Regular follow-up and maintenance sessions for long-term results'],
        ],
                'recovery' => 'The long-term outlook with cosmetic dermatology procedures is generally very positive when treatments are performed by qualified professionals. These treatments can improve skin appearance, reduce visible signs of aging, and enhance confidence with minimal downtime. Consistent skincare, sun protection, and regular maintenance treatments help preserve long-term aesthetic results and healthy skin. ______________________________ 128. Skin Grafting Tools Skin Grafting Tools Equipment',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Cosmetic Dermatology Equipment',
                'meta_description' => 'Cosmetic dermatology equipment includes specialized medical devices, injection systems, and aesthetic tools used for minimally invasive skin rejuvenation and an',
                'meta_keywords' => '',
            ]
        );
    }
}
