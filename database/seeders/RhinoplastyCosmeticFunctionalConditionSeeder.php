<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RhinoplastyCosmeticFunctionalConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rhinoplasty (Cosmetic / Functional)')],
            [
                'name' => 'Rhinoplasty (Cosmetic / Functional)',
                'slug' => Str::slug('Rhinoplasty (Cosmetic / Functional)'),
                'h1' => 'Rhinoplasty (Cosmetic / Functional)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Rhinoplasty is a specialized surgical procedure performed to improve the shape, structure, appearance, or function of the nose. Cosmetic rhinoplasty focuses on enhancing facial balance and aesthetic appearance, while functional rhinoplasty aims to improve breathing difficulties and correct structural abnormalities affecting nasal airflow.',
                'about_more' => '',
                'overview' => 'Rhinoplasty procedures may involve reshaping the nasal bones, cartilage, septum, or soft tissues to address cosmetic concerns, nasal deformities, trauma-related changes, congenital abnormalities, or breathing problems. Functional rhinoplasty is commonly performed to correct deviated nasal septum, nasal obstruction, or airway-related issues, while cosmetic rhinoplasty improves nasal symmetry, contour, and facial harmony. Modern surgical techniques focus on achieving natural-looking results while preserving or improving nasal function.',
                'symptoms' => [
            ['value' => 'Difficulty breathing through the nose'],
            ['value' => 'Nasal blockage or chronic congestion'],
            ['value' => 'Visible nasal deformity or asymmetry'],
            ['value' => 'Dissatisfaction with nasal shape or facial balance'],
            ['value' => 'Trauma-related nasal injury or structural abnormalities'],
        ],
                'causes' => [
            ['value' => 'Congenital nasal deformities or structural abnormalities'],
            ['value' => 'Trauma, fractures, or injury affecting the nose'],
            ['value' => 'Deviated nasal septum or airway obstruction'],
            ['value' => 'Cosmetic concerns related to nasal appearance'],
            ['value' => 'Previous surgery, infection, or aging-related nasal changes'],
        ],
                'risks' => [
            ['value' => 'Swelling, bruising, or temporary discomfort after surgery'],
            ['value' => 'Infection, bleeding, or delayed healing'],
            ['value' => 'Breathing difficulty or residual nasal obstruction in rare cases'],
            ['value' => 'Scar formation or cosmetic dissatisfaction'],
            ['value' => 'Need for revision surgery in complex or secondary rhinoplasty cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cosmetic rhinoplasty for nasal reshaping and contour improvement'],
            ['value' => 'Functional rhinoplasty for airway correction and breathing improvement'],
            ['value' => 'Septoplasty and structural nasal reconstruction procedures'],
            ['value' => 'Post-traumatic nasal deformity correction'],
            ['value' => 'Long-term postoperative care and follow-up evaluation'],
        ],
                'recovery' => 'The long-term outlook for rhinoplasty is generally very positive because modern reconstructive and cosmetic surgical techniques can significantly improve both nasal appearance and breathing function. Proper surgical planning, postoperative care, regular follow-up, and healthy healing practices are important for maintaining long-term aesthetic and functional outcomes.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Rhinoplasty (Cosmetic / Functional)',
                'meta_description' => 'Rhinoplasty is a specialized surgical procedure performed to improve the shape, structure, appearance, or function of the nose. Cosmetic rhinoplasty focuses on ',
                'meta_keywords' => '',
            ]
        );
    }
}
