<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RhinoplastyCosmeticFunctionalRhinoplastyCosmeticFunctionalConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rhinoplasty (Cosmetic / Functional)  Rhinoplasty (Cosmetic / Functional)')],
            [
                'name' => 'Rhinoplasty (Cosmetic / Functional)  Rhinoplasty (Cosmetic / Functional)',
                'slug' => Str::slug('Rhinoplasty (Cosmetic / Functional)  Rhinoplasty (Cosmetic / Functional)'),
                'h1' => 'Rhinoplasty (Cosmetic / Functional)  Rhinoplasty (Cosmetic / Functional)',
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
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Rhinoplasty (Cosmetic / Functional)  Rhinoplasty (Cosmetic / Functional)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
