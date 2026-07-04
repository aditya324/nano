<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BalanceVestibularTherapyEquipmentBalanceVestibularTherapyEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Balance & Vestibular Therapy Equipment  Balance & Vestibular Therapy Equipment')],
            [
                'name' => 'Balance & Vestibular Therapy Equipment  Balance & Vestibular Therapy Equipment',
                'slug' => Str::slug('Balance & Vestibular Therapy Equipment  Balance & Vestibular Therapy Equipment'),
                'h1' => 'Balance & Vestibular Therapy Equipment  Balance & Vestibular Therapy Equipment',
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
                'sort_order' => 138,
                'is_active' => true,
                'meta_title' => 'Balance & Vestibular Therapy Equipment  Balance & Vestibular Therapy Equipment',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
