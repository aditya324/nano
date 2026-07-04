<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiposuctionFatTransferConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Liposuction & Fat Transfer')],
            [
                'name' => 'Liposuction & Fat Transfer',
                'slug' => Str::slug('Liposuction & Fat Transfer'),
                'h1' => 'Liposuction & Fat Transfer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Liposuction and fat transfer are specialized cosmetic and reconstructive procedures performed to remove excess fat from specific body areas and redistribute purified fat to enhance body contour, restore volume, and improve overall appearance. These procedures help achieve better body proportion, facial balance, and aesthetic enhancement while using the patient’s own natural tissue.',
                'about_more' => '',
                'overview' => 'Liposuction involves the removal of localized fat deposits from areas such as the abdomen, thighs, hips, arms, neck, or back using minimally invasive suction techniques. Fat transfer, also known as fat grafting, involves processing the removed fat and injecting it into areas requiring volume enhancement such as the face, breasts, buttocks, hands, or scarred tissues. These procedures are widely used for body contouring, facial rejuvenation, reconstructive correction, and aesthetic enhancement.',
                'symptoms' => [
            ['value' => 'Localized excess fat deposits resistant to diet and exercise'],
            ['value' => 'Loss of facial or body volume due to aging or weight loss'],
            ['value' => 'Body contour irregularities or asymmetry'],
            ['value' => 'Cosmetic concerns related to body shape or facial fullness'],
            ['value' => 'Scarring or soft tissue defects requiring volume restoration'],
        ],
                'causes' => [
            ['value' => 'Weight gain and uneven fat distribution'],
            ['value' => 'Aging-related loss of facial or body volume'],
            ['value' => 'Genetic body contour variations'],
            ['value' => 'Trauma, surgery, or tissue loss requiring reconstruction'],
            ['value' => 'Cosmetic and aesthetic appearance concerns'],
        ],
                'risks' => [
            ['value' => 'Swelling, bruising, or temporary discomfort after procedures'],
            ['value' => 'Infection, bleeding, or fluid accumulation'],
            ['value' => 'Uneven contour or fat absorption irregularities'],
            ['value' => 'Temporary numbness or changes in skin sensation'],
            ['value' => 'Need for repeat or revision procedures in certain cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Liposuction for targeted fat removal and body contouring'],
            ['value' => 'Fat transfer procedures for facial and body volume enhancement'],
            ['value' => 'Reconstructive fat grafting for soft tissue correction'],
            ['value' => 'Combination body contouring and aesthetic enhancement procedures'],
            ['value' => 'Long-term postoperative care, lifestyle management, and follow-up support'],
        ],
                'recovery' => 'The long-term outlook for liposuction and fat transfer procedures is generally very positive because these treatments can significantly improve body contour, facial balance, and overall appearance using natural tissue restoration techniques. Proper surgical planning, healthy lifestyle habits, weight management, postoperative care, and regular follow-up are important for maintaining long-term aesthetic and reconstructive results. _____________________ 11. Abdominoplasty / Body Contouring Surgery Abdominoplasty / Body Contouring Surgery Procedures',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Liposuction & Fat Transfer',
                'meta_description' => 'Liposuction and fat transfer are specialized cosmetic and reconstructive procedures performed to remove excess fat from specific body areas and redistribute pur',
                'meta_keywords' => '',
            ]
        );
    }
}
