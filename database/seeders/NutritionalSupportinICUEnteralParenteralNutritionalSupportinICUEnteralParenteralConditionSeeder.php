<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NutritionalSupportinICUEnteralParenteralNutritionalSupportinICUEnteralParenteralConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nutritional Support in ICU (Enteral / Parenteral)  Nutritional Support in ICU (Enteral / Parenteral)')],
            [
                'name' => 'Nutritional Support in ICU (Enteral / Parenteral)  Nutritional Support in ICU (Enteral / Parenteral)',
                'slug' => Str::slug('Nutritional Support in ICU (Enteral / Parenteral)  Nutritional Support in ICU (Enteral / Parenteral)'),
                'h1' => 'Nutritional Support in ICU (Enteral / Parenteral)  Nutritional Support in ICU (Enteral / Parenteral)',
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
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Nutritional Support in ICU (Enteral / Parenteral)  Nutritional Support in ICU (Enteral / Parenteral)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
