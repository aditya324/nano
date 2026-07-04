<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AbdominoplastyBodyContouringSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Abdominoplasty / Body Contouring Surgery')],
            [
                'name' => 'Abdominoplasty / Body Contouring Surgery',
                'slug' => Str::slug('Abdominoplasty / Body Contouring Surgery'),
                'h1' => 'Abdominoplasty / Body Contouring Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Abdominoplasty and body contouring surgery are specialized cosmetic and reconstructive procedures performed to remove excess skin and fat, tighten underlying muscles, and improve body shape and contour. These procedures help restore body proportion, improve skin firmness, and enhance physical appearance and confidence after weight loss, pregnancy, aging, or body changes.',
                'about_more' => '',
                'overview' => 'Abdominoplasty, commonly known as a tummy tuck, focuses on removing excess abdominal skin and tightening weakened abdominal muscles, while body contouring surgery addresses excess skin and soft tissue in areas such as the abdomen, thighs, arms, buttocks, and flanks. These procedures are commonly performed after significant weight loss, pregnancy, or aging-related skin laxity. Modern surgical techniques aim to improve body symmetry, contour, and overall comfort while maintaining natural-looking results.',
                'symptoms' => [
            ['value' => 'Excess loose skin or sagging tissues'],
            ['value' => 'Weak or separated abdominal muscles'],
            ['value' => 'Body contour irregularities after weight loss or pregnancy'],
            ['value' => 'Stretch marks and skin folds causing discomfort'],
            ['value' => 'Cosmetic concerns affecting body image and confidence'],
        ],
                'causes' => [
            ['value' => 'Significant weight loss or obesity-related skin changes'],
            ['value' => 'Pregnancy and abdominal muscle stretching'],
            ['value' => 'Aging-related loss of skin elasticity'],
            ['value' => 'Genetic and lifestyle-related body contour variations'],
            ['value' => 'Previous surgery, trauma, or soft tissue deformities'],
        ],
                'risks' => [
            ['value' => 'Swelling, bruising, or temporary postoperative discomfort'],
            ['value' => 'Infection, bleeding, or delayed wound healing'],
            ['value' => 'Scar formation or contour irregularities'],
            ['value' => 'Fluid accumulation or temporary numbness'],
            ['value' => 'Need for revision procedures in certain cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Abdominoplasty for abdominal contour improvement and muscle tightening'],
            ['value' => 'Body contouring surgery for removal of excess skin and fat'],
            ['value' => 'Liposuction-assisted contour enhancement procedures'],
            ['value' => 'Reconstructive soft tissue correction and skin tightening techniques'],
            ['value' => 'Long-term postoperative care, physiotherapy, and lifestyle management support'],
        ],
                'recovery' => 'The long-term outlook for abdominoplasty and body contouring surgery is generally very positive because these procedures can significantly improve body shape, posture, comfort, mobility, and self-confidence. Proper surgical planning, healthy nutrition, regular exercise, weight management, postoperative care, and continuous follow-up are important for maintaining long-term aesthetic and functional outcomes. ______________________ 12. Botox / Fillers / Non-Surgical Aesthetic Procedures Botox / Fillers / Non-Surgical Aesthetic Procedures Procedures',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Abdominoplasty / Body Contouring Surgery',
                'meta_description' => 'Abdominoplasty and body contouring surgery are specialized cosmetic and reconstructive procedures performed to remove excess skin and fat, tighten underlying mu',
                'meta_keywords' => '',
            ]
        );
    }
}
