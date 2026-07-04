<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTraumaticFacialReconstructionPostTraumaticFacialReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Traumatic Facial Reconstruction  Post-Traumatic Facial Reconstruction')],
            [
                'name' => 'Post-Traumatic Facial Reconstruction  Post-Traumatic Facial Reconstruction',
                'slug' => Str::slug('Post-Traumatic Facial Reconstruction  Post-Traumatic Facial Reconstruction'),
                'h1' => 'Post-Traumatic Facial Reconstruction  Post-Traumatic Facial Reconstruction',
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
                'meta_title' => 'Post-Traumatic Facial Reconstruction  Post-Traumatic Facial Reconstruction',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
