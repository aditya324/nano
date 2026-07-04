<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicVenousUlcersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Venous Ulcers')],
            [
                'name' => 'Chronic Venous Ulcers',
                'slug' => Str::slug('Chronic Venous Ulcers'),
                'h1' => 'Chronic Venous Ulcers',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic venous ulcers are long-standing wounds usually occurring around the ankles due to poor venous blood circulation in the legs. They commonly develop as a complication of chronic venous insufficiency and varicose veins.',
                'about_more' => '',
                'overview' => 'Chronic venous ulcers are long-standing wounds usually occurring around the ankles due to poor venous blood circulation in the legs. They commonly develop as a complication of chronic venous insufficiency and varicose veins.',
                'symptoms' => [
            ['value' => 'Non-healing wounds near the ankle'],
            ['value' => 'Leg swelling and heaviness'],
            ['value' => 'Skin discoloration and thickening'],
            ['value' => 'Pain or burning sensation around the ulcer'],
            ['value' => 'Fluid discharge or foul smell from infected ulcers'],
        ],
                'causes' => [
            ['value' => 'Chronic venous insufficiency'],
            ['value' => 'Varicose veins and damaged vein valves'],
            ['value' => 'Deep vein thrombosis history'],
            ['value' => 'Obesity and prolonged standing'],
            ['value' => 'Poor mobility and advanced age'],
        ],
                'risks' => [
            ['value' => 'Recurrent wound infections'],
            ['value' => 'Severe pain and mobility problems'],
            ['value' => 'Cellulitis and soft tissue infection'],
            ['value' => 'Chronic skin changes and scarring'],
            ['value' => 'Delayed wound healing and disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Compression therapy and leg elevation'],
            ['value' => 'Regular wound cleaning and dressing'],
            ['value' => 'Antibiotics for infected ulcers'],
            ['value' => 'Venous ablation or vascular procedures'],
            ['value' => 'Skin grafting in severe cases'],
        ],
                'recovery' => 'Healing may take weeks to months. Long-term vein care and compression therapy help prevent recurrence.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Chronic Venous Ulcers',
                'meta_description' => 'Chronic venous ulcers are long-standing wounds usually occurring around the ankles due to poor venous blood circulation in the legs. They commonly develop as a ',
                'meta_keywords' => '',
            ]
        );
    }
}
