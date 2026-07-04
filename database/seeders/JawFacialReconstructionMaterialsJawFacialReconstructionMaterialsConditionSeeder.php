<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JawFacialReconstructionMaterialsJawFacialReconstructionMaterialsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Jaw / Facial Reconstruction Materials  Jaw / Facial Reconstruction Materials')],
            [
                'name' => 'Jaw / Facial Reconstruction Materials  Jaw / Facial Reconstruction Materials',
                'slug' => Str::slug('Jaw / Facial Reconstruction Materials  Jaw / Facial Reconstruction Materials'),
                'h1' => 'Jaw / Facial Reconstruction Materials  Jaw / Facial Reconstruction Materials',
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
                'sort_order' => 177,
                'is_active' => true,
                'meta_title' => 'Jaw / Facial Reconstruction Materials  Jaw / Facial Reconstruction Materials',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
