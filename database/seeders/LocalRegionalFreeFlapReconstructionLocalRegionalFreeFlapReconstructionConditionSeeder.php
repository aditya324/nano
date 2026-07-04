<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocalRegionalFreeFlapReconstructionLocalRegionalFreeFlapReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Local / Regional / Free Flap Reconstruction  Local / Regional / Free Flap Reconstruction')],
            [
                'name' => 'Local / Regional / Free Flap Reconstruction  Local / Regional / Free Flap Reconstruction',
                'slug' => Str::slug('Local / Regional / Free Flap Reconstruction  Local / Regional / Free Flap Reconstruction'),
                'h1' => 'Local / Regional / Free Flap Reconstruction  Local / Regional / Free Flap Reconstruction',
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
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Local / Regional / Free Flap Reconstruction  Local / Regional / Free Flap Reconstruction',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
