<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CallositiesPressureSoresinDiabeticsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Callosities / Pressure Sores in Diabetics')],
            [
                'name' => 'Callosities / Pressure Sores in Diabetics',
                'slug' => Str::slug('Callosities / Pressure Sores in Diabetics'),
                'h1' => 'Callosities / Pressure Sores in Diabetics',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Callosities and pressure sores occur due to repeated pressure and friction on insensitive diabetic feet, increasing the risk of ulcer formation.',
                'about_more' => '',
                'overview' => 'Callosities and pressure sores occur due to repeated pressure and friction on insensitive diabetic feet, increasing the risk of ulcer formation.',
                'symptoms' => [
            ['value' => 'Thickened hard skin areas'],
            ['value' => 'Pain or discomfort while walking'],
            ['value' => 'Redness or skin breakdown'],
            ['value' => 'Cracked skin and dryness'],
            ['value' => 'Formation of underlying ulcers'],
        ],
                'causes' => [
            ['value' => 'Neuropathy and loss of sensation'],
            ['value' => 'Improper footwear'],
            ['value' => 'Foot deformities'],
            ['value' => 'Repeated pressure points'],
            ['value' => 'Poor foot hygiene'],
        ],
                'risks' => [
            ['value' => 'Ulcer formation beneath calluses'],
            ['value' => 'Secondary infections'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Deep tissue injury'],
            ['value' => 'Progression to gangrene'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular foot examination'],
            ['value' => 'Removal of calluses by specialists'],
            ['value' => 'Pressure-relieving footwear'],
            ['value' => 'Moisturizing and skin care'],
            ['value' => 'Diabetic foot education'],
        ],
                'recovery' => 'Preventive care and proper footwear greatly reduce complications and ulcer risk.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Callosities / Pressure Sores in Diabetics',
                'meta_description' => 'Callosities and pressure sores occur due to repeated pressure and friction on insensitive diabetic feet, increasing the risk of ulcer formation.',
                'meta_keywords' => '',
            ]
        );
    }
}
