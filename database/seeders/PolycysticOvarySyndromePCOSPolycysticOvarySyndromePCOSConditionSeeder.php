<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PolycysticOvarySyndromePCOSPolycysticOvarySyndromePCOSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Polycystic Ovary Syndrome (PCOS)  Polycystic Ovary Syndrome (PCOS)')],
            [
                'name' => 'Polycystic Ovary Syndrome (PCOS)  Polycystic Ovary Syndrome (PCOS)',
                'slug' => Str::slug('Polycystic Ovary Syndrome (PCOS)  Polycystic Ovary Syndrome (PCOS)'),
                'h1' => 'Polycystic Ovary Syndrome (PCOS)  Polycystic Ovary Syndrome (PCOS)',
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
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Polycystic Ovary Syndrome (PCOS)  Polycystic Ovary Syndrome (PCOS)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
