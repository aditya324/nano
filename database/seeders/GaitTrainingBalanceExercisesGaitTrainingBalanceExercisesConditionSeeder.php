<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GaitTrainingBalanceExercisesGaitTrainingBalanceExercisesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gait Training & Balance Exercises  Gait Training & Balance Exercises')],
            [
                'name' => 'Gait Training & Balance Exercises  Gait Training & Balance Exercises',
                'slug' => Str::slug('Gait Training & Balance Exercises  Gait Training & Balance Exercises'),
                'h1' => 'Gait Training & Balance Exercises  Gait Training & Balance Exercises',
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
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Gait Training & Balance Exercises  Gait Training & Balance Exercises',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
