<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PigmentaryDisordersPostinflammatoryNevusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pigmentary Disorders (Post-inflammatory, Nevus)')],
            [
                'name' => 'Pigmentary Disorders (Post-inflammatory, Nevus)',
                'slug' => Str::slug('Pigmentary Disorders (Post-inflammatory, Nevus)'),
                'h1' => 'Pigmentary Disorders (Post-inflammatory, Nevus)',
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
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Pigmentary Disorders (Post-inflammatory, Nevus)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
