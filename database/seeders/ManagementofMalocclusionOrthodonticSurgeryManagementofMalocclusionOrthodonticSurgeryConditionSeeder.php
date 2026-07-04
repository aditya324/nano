<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofMalocclusionOrthodonticSurgeryManagementofMalocclusionOrthodonticSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Malocclusion & Orthodontic Surgery  Management of Malocclusion & Orthodontic Surgery')],
            [
                'name' => 'Management of Malocclusion & Orthodontic Surgery  Management of Malocclusion & Orthodontic Surgery',
                'slug' => Str::slug('Management of Malocclusion & Orthodontic Surgery  Management of Malocclusion & Orthodontic Surgery'),
                'h1' => 'Management of Malocclusion & Orthodontic Surgery  Management of Malocclusion & Orthodontic Surgery',
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
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Management of Malocclusion & Orthodontic Surgery  Management of Malocclusion & Orthodontic Surgery',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
