<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MechanicalVentilationInvasiveNonInvasiveMechanicalVentilationInvasiveNonInvasiveConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mechanical Ventilation (Invasive / Non-Invasive)  Mechanical Ventilation (Invasive / Non-Invasive)')],
            [
                'name' => 'Mechanical Ventilation (Invasive / Non-Invasive)  Mechanical Ventilation (Invasive / Non-Invasive)',
                'slug' => Str::slug('Mechanical Ventilation (Invasive / Non-Invasive)  Mechanical Ventilation (Invasive / Non-Invasive)'),
                'h1' => 'Mechanical Ventilation (Invasive / Non-Invasive)  Mechanical Ventilation (Invasive / Non-Invasive)',
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
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Mechanical Ventilation (Invasive / Non-Invasive)  Mechanical Ventilation (Invasive / Non-Invasive)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
