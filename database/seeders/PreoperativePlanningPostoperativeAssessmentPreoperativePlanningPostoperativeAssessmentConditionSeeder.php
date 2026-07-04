<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreoperativePlanningPostoperativeAssessmentPreoperativePlanningPostoperativeAssessmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Preoperative Planning & Postoperative Assessment  Preoperative Planning & Postoperative Assessment')],
            [
                'name' => 'Preoperative Planning & Postoperative Assessment  Preoperative Planning & Postoperative Assessment',
                'slug' => Str::slug('Preoperative Planning & Postoperative Assessment  Preoperative Planning & Postoperative Assessment'),
                'h1' => 'Preoperative Planning & Postoperative Assessment  Preoperative Planning & Postoperative Assessment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Preoperative Planning & Postoperative Assessment  Preoperative Planning & Postoperative Assessment',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
