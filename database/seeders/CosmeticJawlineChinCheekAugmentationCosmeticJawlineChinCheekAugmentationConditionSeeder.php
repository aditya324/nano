<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CosmeticJawlineChinCheekAugmentationCosmeticJawlineChinCheekAugmentationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cosmetic Jawline / Chin / Cheek Augmentation  Cosmetic Jawline / Chin / Cheek Augmentation')],
            [
                'name' => 'Cosmetic Jawline / Chin / Cheek Augmentation  Cosmetic Jawline / Chin / Cheek Augmentation',
                'slug' => Str::slug('Cosmetic Jawline / Chin / Cheek Augmentation  Cosmetic Jawline / Chin / Cheek Augmentation'),
                'h1' => 'Cosmetic Jawline / Chin / Cheek Augmentation  Cosmetic Jawline / Chin / Cheek Augmentation',
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
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Cosmetic Jawline / Chin / Cheek Augmentation  Cosmetic Jawline / Chin / Cheek Augmentation',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
