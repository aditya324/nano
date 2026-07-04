<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProstheticsOrthoticsProstheticsOrthoticsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Prosthetics & Orthotics  Prosthetics & Orthotics')],
            [
                'name' => 'Prosthetics & Orthotics  Prosthetics & Orthotics',
                'slug' => Str::slug('Prosthetics & Orthotics  Prosthetics & Orthotics'),
                'h1' => 'Prosthetics & Orthotics  Prosthetics & Orthotics',
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
                'sort_order' => 134,
                'is_active' => true,
                'meta_title' => 'Prosthetics & Orthotics  Prosthetics & Orthotics',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
