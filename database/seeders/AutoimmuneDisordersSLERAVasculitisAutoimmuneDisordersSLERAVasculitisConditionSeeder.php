<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AutoimmuneDisordersSLERAVasculitisAutoimmuneDisordersSLERAVasculitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Autoimmune Disorders (SLE, RA, Vasculitis)  Autoimmune Disorders (SLE, RA, Vasculitis)')],
            [
                'name' => 'Autoimmune Disorders (SLE, RA, Vasculitis)  Autoimmune Disorders (SLE, RA, Vasculitis)',
                'slug' => Str::slug('Autoimmune Disorders (SLE, RA, Vasculitis)  Autoimmune Disorders (SLE, RA, Vasculitis)'),
                'h1' => 'Autoimmune Disorders (SLE, RA, Vasculitis)  Autoimmune Disorders (SLE, RA, Vasculitis)',
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
                'meta_title' => 'Autoimmune Disorders (SLE, RA, Vasculitis)  Autoimmune Disorders (SLE, RA, Vasculitis)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
