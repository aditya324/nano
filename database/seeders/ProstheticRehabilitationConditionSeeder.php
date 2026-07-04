<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProstheticRehabilitationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Prosthetic Rehabilitation')],
            [
                'name' => 'Prosthetic Rehabilitation',
                'slug' => Str::slug('Prosthetic Rehabilitation'),
                'h1' => 'Prosthetic Rehabilitation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Prosthetic rehabilitation involving obturators and facial prostheses is a specialized reconstructive treatment used to restore facial appearance, oral function, speech, swallowing, and psychological well-being in patients with facial defects caused by trauma, cancer surgery, congenital abnormalities, or severe tissue loss. These prosthetic devices help improve both functional recovery and cosmetic outcomes.',
                'about_more' => '',
                'overview' => 'Obturators are prosthetic devices used to close defects in the palate or oral cavity, especially after maxillofacial surgery, cleft conditions, or tumor removal. Facial prostheses are custom-made artificial replacements for facial structures such as the nose, ears, eyes, cheeks, or orbital regions lost due to trauma, burns, cancer surgery, or congenital deformities. These prosthetic solutions are carefully designed to restore appearance, support oral and facial functions, and improve patient confidence and quality of life.',
                'symptoms' => [
            ['value' => 'Facial defects or tissue loss after surgery or trauma'],
            ['value' => 'Difficulty speaking, swallowing, or chewing'],
            ['value' => 'Nasal leakage of food or liquids due to palatal defects'],
            ['value' => 'Facial asymmetry or cosmetic disfigurement'],
            ['value' => 'Emotional distress and reduced self-confidence related to appearance'],
        ],
                'causes' => [
            ['value' => 'Surgical removal of oral or facial tumors'],
            ['value' => 'Congenital craniofacial abnormalities or cleft defects'],
            ['value' => 'Trauma, burns, or severe facial injuries'],
            ['value' => 'Infection or tissue destruction affecting facial structures'],
            ['value' => 'Postoperative defects following maxillofacial surgery'],
        ],
                'risks' => [
            ['value' => 'Difficulty adapting to prosthetic devices initially'],
            ['value' => 'Irritation or discomfort at prosthesis contact areas'],
            ['value' => 'Prosthesis loosening or maintenance-related issues'],
            ['value' => 'Speech or chewing difficulties if adjustments are needed'],
            ['value' => 'Emotional and psychological adjustment challenges during rehabilitation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical maxillofacial assessment and prosthetic planning'],
            ['value' => 'Fabrication of obturators for oral and palatal defects'],
            ['value' => 'Custom facial prostheses for nasal, orbital, auricular, or facial reconstruction'],
            ['value' => 'Implant-supported prosthetic rehabilitation when required'],
            ['value' => 'Long-term prosthesis maintenance, rehabilitation, and follow-up care support'],
        ],
                'recovery' => 'The long-term outlook for prosthetic rehabilitation is generally very positive because modern prosthetic technologies significantly improve speech, swallowing, facial appearance, oral function, and overall quality of life. Proper prosthesis care, regular adjustments, hygiene maintenance, psychological support, and continuous follow-up are important for maintaining successful long-term functional and cosmetic outcomes. ________________________',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Prosthetic Rehabilitation',
                'meta_description' => 'Prosthetic rehabilitation involving obturators and facial prostheses is a specialized reconstructive treatment used to restore facial appearance, oral function,',
                'meta_keywords' => '',
            ]
        );
    }
}
