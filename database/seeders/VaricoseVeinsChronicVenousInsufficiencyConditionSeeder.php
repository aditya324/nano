<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VaricoseVeinsChronicVenousInsufficiencyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Varicose Veins / Chronic Venous Insufficiency')],
            [
                'name' => 'Varicose Veins / Chronic Venous Insufficiency',
                'slug' => Str::slug('Varicose Veins / Chronic Venous Insufficiency'),
                'h1' => 'Varicose Veins / Chronic Venous Insufficiency',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Varicose veins are enlarged twisted veins caused by poor venous circulation. Chronic venous insufficiency occurs when leg veins cannot efficiently return blood to the heart.',
                'about_more' => '',
                'overview' => 'Varicose veins are enlarged twisted veins caused by poor venous circulation. Chronic venous insufficiency occurs when leg veins cannot efficiently return blood to the heart.',
                'symptoms' => [
            ['value' => 'Visible swollen veins'],
            ['value' => 'Leg heaviness and aching'],
            ['value' => 'Swelling around ankles'],
            ['value' => 'Skin discoloration and itching'],
            ['value' => 'Venous ulcers in severe cases'],
        ],
                'causes' => [
            ['value' => 'Weak venous valves'],
            ['value' => 'Prolonged standing or sitting'],
            ['value' => 'Pregnancy and obesity'],
            ['value' => 'Aging and family history'],
            ['value' => 'Lack of exercise'],
        ],
                'risks' => [
            ['value' => 'Venous ulcers'],
            ['value' => 'Bleeding from varicose veins'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Chronic swelling and pain'],
            ['value' => 'Skin thickening and pigmentation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Compression stockings'],
            ['value' => 'Exercise and leg elevation'],
            ['value' => 'Sclerotherapy'],
            ['value' => 'Laser or radiofrequency ablation'],
            ['value' => 'Surgical vein removal'],
        ],
                'recovery' => 'Most patients experience good symptom relief with minimally invasive treatment and lifestyle modifications.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Varicose Veins / Chronic Venous Insufficiency',
                'meta_description' => 'Varicose veins are enlarged twisted veins caused by poor venous circulation. Chronic venous insufficiency occurs when leg veins cannot efficiently return blood ',
                'meta_keywords' => '',
            ]
        );
    }
}
