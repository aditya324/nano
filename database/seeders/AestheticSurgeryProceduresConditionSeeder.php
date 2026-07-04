<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AestheticSurgeryProceduresConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Aesthetic Surgery Procedures')],
            [
                'name' => 'Aesthetic Surgery Procedures',
                'slug' => Str::slug('Aesthetic Surgery Procedures'),
                'h1' => 'Aesthetic Surgery Procedures',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Aesthetic surgery procedures are specialized cosmetic surgical treatments performed to enhance physical appearance, improve body contour, restore facial balance, and increase self-confidence. These procedures focus on refining facial features, body shape, and breast appearance while maintaining natural-looking and proportionate results.',
                'about_more' => '',
                'overview' => 'Aesthetic surgery procedures may involve facial rejuvenation, body contouring, breast enhancement, skin tightening, and reconstructive cosmetic correction. Common facial procedures include rhinoplasty, facelift, eyelid surgery, chin contouring, and lip enhancement. Body procedures include liposuction, abdominoplasty, and body contouring surgery, while breast procedures include augmentation, reduction, lift, and reconstructive correction. Modern aesthetic surgery combines advanced surgical techniques with individualized treatment planning to improve both cosmetic appearance and overall well-being.',
                'symptoms' => [
            ['value' => 'Facial aging signs such as wrinkles or sagging skin'],
            ['value' => 'Body contour irregularities or excess fat deposits'],
            ['value' => 'Breast asymmetry, volume loss, or cosmetic concerns'],
            ['value' => 'Loose skin after weight loss or pregnancy'],
            ['value' => 'Dissatisfaction with physical appearance affecting confidence'],
        ],
                'causes' => [
            ['value' => 'Natural aging and loss of skin elasticity'],
            ['value' => 'Weight fluctuations or body contour changes'],
            ['value' => 'Pregnancy and post-delivery body changes'],
            ['value' => 'Genetic or hereditary physical characteristics'],
            ['value' => 'Trauma, previous surgery, or cosmetic appearance concerns'],
        ],
                'risks' => [
            ['value' => 'Swelling, bruising, or temporary postoperative discomfort'],
            ['value' => 'Infection, bleeding, or delayed wound healing'],
            ['value' => 'Scar formation or cosmetic asymmetry'],
            ['value' => 'Temporary numbness or changes in skin sensation'],
            ['value' => 'Need for revision or additional corrective procedures in certain cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Facial aesthetic and rejuvenation surgical procedures'],
            ['value' => 'Body contouring and fat reduction procedures'],
            ['value' => 'Breast enhancement, lift, reduction, or reconstruction procedures'],
            ['value' => 'Minimally invasive cosmetic and skin rejuvenation treatments'],
            ['value' => 'Long-term postoperative care, rehabilitation, and aesthetic follow-up support'],
        ],
                'recovery' => 'The long-term outlook for aesthetic surgery procedures is generally very positive because modern cosmetic and reconstructive techniques can significantly improve appearance, body confidence, comfort, and emotional well-being. Proper surgical planning, healthy lifestyle practices, skincare, regular follow-up, and postoperative care are important for maintaining long-term aesthetic results and overall satisfaction. __________________________ 21. Wound VAC Therapy / Advanced Wound Care Wound VAC Therapy / Advanced Wound Care Procedures',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Aesthetic Surgery Procedures',
                'meta_description' => 'Aesthetic surgery procedures are specialized cosmetic surgical treatments performed to enhance physical appearance, improve body contour, restore facial balance',
                'meta_keywords' => '',
            ]
        );
    }
}
