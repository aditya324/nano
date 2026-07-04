<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SplintingCastingforContracturePreventionSplintingCastingforContracturePreventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Splinting & Casting for Contracture Prevention  Splinting & Casting for Contracture Prevention')],
            [
                'name' => 'Splinting & Casting for Contracture Prevention  Splinting & Casting for Contracture Prevention',
                'slug' => Str::slug('Splinting & Casting for Contracture Prevention  Splinting & Casting for Contracture Prevention'),
                'h1' => 'Splinting & Casting for Contracture Prevention  Splinting & Casting for Contracture Prevention',
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
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Splinting & Casting for Contracture Prevention  Splinting & Casting for Contracture Prevention',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
