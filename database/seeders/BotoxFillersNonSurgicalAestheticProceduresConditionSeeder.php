<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BotoxFillersNonSurgicalAestheticProceduresConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Botox / Fillers / Non-Surgical Aesthetic Procedures')],
            [
                'name' => 'Botox / Fillers / Non-Surgical Aesthetic Procedures',
                'slug' => Str::slug('Botox / Fillers / Non-Surgical Aesthetic Procedures'),
                'h1' => 'Botox / Fillers / Non-Surgical Aesthetic Procedures',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Botox, dermal fillers, and non-surgical aesthetic procedures are minimally invasive cosmetic treatments designed to improve facial appearance, reduce signs of aging, restore facial volume, and enhance skin texture and contour without major surgery. These procedures help achieve natural-looking rejuvenation with minimal downtime and faster recovery.',
                'about_more' => '',
                'overview' => 'Botox injections are commonly used to reduce dynamic wrinkles and fine lines caused by muscle movement, while dermal fillers restore lost facial volume, improve contour, and enhance features such as lips, cheeks, jawline, and under-eye areas. Other non-surgical aesthetic procedures may include skin tightening, laser treatments, chemical peels, collagen stimulation therapies, and facial rejuvenation techniques. These procedures are widely used for anti-aging treatment, facial contouring, and cosmetic enhancement.',
                'symptoms' => [
            ['value' => 'Wrinkles, fine lines, or facial aging signs'],
            ['value' => 'Loss of facial volume or skin elasticity'],
            ['value' => 'Sagging skin or uneven facial contours'],
            ['value' => 'Thin lips or reduced facial definition'],
            ['value' => 'Cosmetic concerns affecting confidence and appearance'],
        ],
                'causes' => [
            ['value' => 'Natural aging and collagen loss'],
            ['value' => 'Repetitive facial muscle movements'],
            ['value' => 'Sun exposure and environmental skin damage'],
            ['value' => 'Weight loss or reduced skin elasticity'],
            ['value' => 'Genetic and lifestyle-related aesthetic concerns'],
        ],
                'risks' => [
            ['value' => 'Temporary swelling, redness, or bruising at injection sites'],
            ['value' => 'Mild discomfort or skin sensitivity after procedures'],
            ['value' => 'Temporary asymmetry or uneven cosmetic results'],
            ['value' => 'Allergic reactions or filler-related complications in rare cases'],
            ['value' => 'Need for maintenance or repeat treatments over time'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Botox injections for wrinkle reduction and facial relaxation'],
            ['value' => 'Dermal fillers for volume restoration and contour enhancement'],
            ['value' => 'Non-surgical facial rejuvenation and skin tightening procedures'],
            ['value' => 'Laser therapy, chemical peels, and collagen stimulation treatments'],
            ['value' => 'Long-term skincare, aesthetic maintenance, and follow-up support'],
        ],
                'recovery' => 'The long-term outlook for Botox, fillers, and non-surgical aesthetic procedures is generally very positive because these treatments can significantly improve facial appearance, skin texture, and self-confidence with minimal downtime. Proper skincare, sun protection, healthy lifestyle habits, regular follow-up, and maintenance treatments are important for maintaining long-term aesthetic results and skin health. ____________________________ 13. Hair Transplantation / Scalp Reconstruction Hair Transplantation / Scalp Reconstruction Procedures',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Botox / Fillers / Non-Surgical Aesthetic Procedures',
                'meta_description' => 'Botox, dermal fillers, and non-surgical aesthetic procedures are minimally invasive cosmetic treatments designed to improve facial appearance, reduce signs of a',
                'meta_keywords' => '',
            ]
        );
    }
}
