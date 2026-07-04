<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacialSoftTissueLacerationRepairFacialSoftTissueLacerationRepairConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Facial Soft Tissue Laceration Repair  Facial Soft Tissue Laceration Repair')],
            [
                'name' => 'Facial Soft Tissue Laceration Repair  Facial Soft Tissue Laceration Repair',
                'slug' => Str::slug('Facial Soft Tissue Laceration Repair  Facial Soft Tissue Laceration Repair'),
                'h1' => 'Facial Soft Tissue Laceration Repair  Facial Soft Tissue Laceration Repair',
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
                'meta_title' => 'Facial Soft Tissue Laceration Repair  Facial Soft Tissue Laceration Repair',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
