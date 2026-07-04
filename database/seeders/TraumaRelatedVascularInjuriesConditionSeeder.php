<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaRelatedVascularInjuriesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Trauma-Related Vascular Injuries')],
            [
                'name' => 'Trauma-Related Vascular Injuries',
                'slug' => Str::slug('Trauma-Related Vascular Injuries'),
                'h1' => 'Trauma-Related Vascular Injuries',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Trauma-related vascular injuries involve damage to arteries or veins caused by accidents, fractures, penetrating injuries, or surgical complications. These injuries may lead to severe bleeding or loss of blood supply to limbs.',
                'about_more' => '',
                'overview' => 'Trauma-related vascular injuries involve damage to arteries or veins caused by accidents, fractures, penetrating injuries, or surgical complications. These injuries may lead to severe bleeding or loss of blood supply to limbs.',
                'symptoms' => [
            ['value' => 'Severe bleeding'],
            ['value' => 'Swelling and bruising near the injury'],
            ['value' => 'Weak or absent pulses'],
            ['value' => 'Coldness or numbness of the affected limb'],
            ['value' => 'Severe pain and shock'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents'],
            ['value' => 'Gunshot or stab injuries'],
            ['value' => 'Fractures and dislocations'],
            ['value' => 'Industrial or sports injuries'],
            ['value' => 'Surgical or catheter-related complications'],
        ],
                'risks' => [
            ['value' => 'Limb ischemia and tissue death'],
            ['value' => 'Massive blood loss and shock'],
            ['value' => 'Compartment syndrome'],
            ['value' => 'Infection and gangrene'],
            ['value' => 'Limb amputation if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency vascular assessment'],
            ['value' => 'Bleeding control and stabilization'],
            ['value' => 'Surgical vessel repair or grafting'],
            ['value' => 'Endovascular stenting procedures'],
            ['value' => 'Rehabilitation and physiotherapy'],
        ],
                'recovery' => 'Rapid treatment is critical for saving life and limb. Recovery depends on injury severity and early intervention.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Trauma-Related Vascular Injuries',
                'meta_description' => 'Trauma-related vascular injuries involve damage to arteries or veins caused by accidents, fractures, penetrating injuries, or surgical complications. These inju',
                'meta_keywords' => '',
            ]
        );
    }
}
