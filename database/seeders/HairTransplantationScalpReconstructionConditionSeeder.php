<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HairTransplantationScalpReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hair Transplantation / Scalp Reconstruction')],
            [
                'name' => 'Hair Transplantation / Scalp Reconstruction',
                'slug' => Str::slug('Hair Transplantation / Scalp Reconstruction'),
                'h1' => 'Hair Transplantation / Scalp Reconstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hair transplantation and scalp reconstruction are specialized cosmetic and reconstructive procedures performed to restore hair growth, improve scalp coverage, and correct hair loss or scalp defects caused by genetics, burns, trauma, surgery, infections, or medical conditions. These procedures help enhance appearance, confidence, and overall quality of life.',
                'about_more' => '',
                'overview' => 'Hair transplantation involves relocating healthy hair follicles from donor areas of the scalp to regions affected by thinning or baldness. Common techniques include follicular unit transplantation (FUT) and follicular unit extraction (FUE). Scalp reconstruction procedures are performed for patients with scar-related hair loss, burns, traumatic scalp injuries, congenital deformities, or tissue loss requiring advanced reconstructive techniques such as tissue expansion, flap reconstruction, or scar revision. Modern procedures focus on achieving natural hair growth patterns and improved cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Thinning hair or bald patches on the scalp'],
            ['value' => 'Receding hairline or uneven hair density'],
            ['value' => 'Scar-related hair loss after burns, trauma, or surgery'],
            ['value' => 'Scalp deformities or tissue defects affecting appearance'],
            ['value' => 'Emotional distress or reduced confidence related to hair loss'],
        ],
                'causes' => [
            ['value' => 'Genetic or hereditary hair loss conditions'],
            ['value' => 'Burns, trauma, or scar-related alopecia'],
            ['value' => 'Hormonal imbalance or aging-related hair thinning'],
            ['value' => 'Surgical procedures, infections, or radiation-related hair loss'],
            ['value' => 'Congenital scalp abnormalities or tissue damage'],
        ],
                'risks' => [
            ['value' => 'Swelling, redness, or temporary discomfort after procedures'],
            ['value' => 'Infection or delayed healing at donor or recipient sites'],
            ['value' => 'Uneven hair growth or temporary hair shedding'],
            ['value' => 'Scar formation or reduced hair density in certain areas'],
            ['value' => 'Need for additional sessions or corrective procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follicular unit extraction (FUE) hair transplantation'],
            ['value' => 'Follicular unit transplantation (FUT) procedures'],
            ['value' => 'Scalp reconstruction using tissue expansion or flap techniques'],
            ['value' => 'Scar revision and reconstructive scalp surgery'],
            ['value' => 'Long-term hair restoration follow-up and scalp care support'],
        ],
                'recovery' => 'The long-term outlook for hair transplantation and scalp reconstruction is generally very positive because modern restorative and reconstructive techniques can significantly improve hair density, scalp appearance, and self-confidence. Proper postoperative care, healthy scalp maintenance, medical follow-up, and long-term hair management are important for maintaining successful aesthetic and reconstructive outcomes. _________________________________',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Hair Transplantation / Scalp Reconstruction',
                'meta_description' => 'Hair transplantation and scalp reconstruction are specialized cosmetic and reconstructive procedures performed to restore hair growth, improve scalp coverage, a',
                'meta_keywords' => '',
            ]
        );
    }
}
