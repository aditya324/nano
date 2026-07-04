<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpasticityManagementBotulinumToxinStretchingOrthosesSpasticityManagementBotulinumToxinStretchingOrthosesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spasticity Management (Botulinum Toxin, Stretching, Orthoses)  Spasticity Management (Botulinum Toxin, Stretching & Orthoses)')],
            [
                'name' => 'Spasticity Management (Botulinum Toxin, Stretching, Orthoses)  Spasticity Management (Botulinum Toxin, Stretching & Orthoses)',
                'slug' => Str::slug('Spasticity Management (Botulinum Toxin, Stretching, Orthoses)  Spasticity Management (Botulinum Toxin, Stretching & Orthoses)'),
                'h1' => 'Spasticity Management (Botulinum Toxin, Stretching, Orthoses)  Spasticity Management (Botulinum Toxin, Stretching & Orthoses)',
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
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Spasticity Management (Botulinum Toxin, Stretching, Orthoses)  Spasticity Management (Botulinum Toxin, Stretching & Orthoses)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
