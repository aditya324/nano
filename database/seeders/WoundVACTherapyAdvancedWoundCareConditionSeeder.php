<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WoundVACTherapyAdvancedWoundCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Wound VAC Therapy / Advanced Wound Care')],
            [
                'name' => 'Wound VAC Therapy / Advanced Wound Care',
                'slug' => Str::slug('Wound VAC Therapy / Advanced Wound Care'),
                'h1' => 'Wound VAC Therapy / Advanced Wound Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Wound VAC (Vacuum-Assisted Closure) therapy and advanced wound care are specialized medical treatments used to promote healing of complex, chronic, or non-healing wounds. These therapies help remove excess fluid, reduce infection risk, improve blood circulation, and stimulate healthy tissue growth for faster and more effective wound healing.',
                'about_more' => '',
                'overview' => 'Wound VAC therapy uses controlled negative pressure through a sealed dressing system to support wound healing by removing fluids and promoting tissue regeneration. Advanced wound care may include specialized dressings, debridement, infection control, skin substitutes, biological therapies, and reconstructive procedures depending on the severity and type of wound. These treatments are commonly used for diabetic ulcers, pressure sores, burn wounds, traumatic injuries, post-surgical wounds, and chronic soft tissue infections.',
                'symptoms' => [
            ['value' => 'Non-healing wounds or chronic ulcers'],
            ['value' => 'Excess wound drainage or foul-smelling discharge'],
            ['value' => 'Pain, swelling, or redness around the wound area'],
            ['value' => 'Tissue loss or exposed underlying structures'],
            ['value' => 'Recurrent infection or delayed healing'],
        ],
                'causes' => [
            ['value' => 'Diabetes and poor blood circulation'],
            ['value' => 'Pressure injuries and prolonged immobility'],
            ['value' => 'Burns, trauma, or surgical wound complications'],
            ['value' => 'Chronic infections or soft tissue damage'],
            ['value' => 'Poor nutrition or medical conditions affecting healing capacity'],
        ],
                'risks' => [
            ['value' => 'Wound infection or spread of infection to deeper tissues'],
            ['value' => 'Delayed healing and chronic tissue damage'],
            ['value' => 'Bleeding or pain during dressing changes'],
            ['value' => 'Tissue necrosis or wound recurrence'],
            ['value' => 'Increased risk of hospitalization or reconstructive surgery in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Wound VAC therapy with negative pressure wound management'],
            ['value' => 'Advanced wound dressings and infection control techniques'],
            ['value' => 'Surgical debridement and removal of unhealthy tissue'],
            ['value' => 'Skin grafting, flap reconstruction, or biological wound therapies when required'],
            ['value' => 'Long-term wound monitoring, nutritional support, and rehabilitation care'],
        ],
                'recovery' => 'The long-term outlook for Wound VAC therapy and advanced wound care is generally very positive because modern wound management techniques can significantly improve healing, reduce infection risk, and preserve tissue function. Early intervention, proper wound care, infection control, nutritional support, and regular medical follow-up are important for maintaining long-term recovery and preventing wound recurrence. ________________________ 22. Management of Soft Tissue Infections & Necrotizing Fasciitis Management of Soft Tissue Infections & Necrotizing Fasciitis Procedures',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Wound VAC Therapy / Advanced Wound Care',
                'meta_description' => 'Wound VAC (Vacuum-Assisted Closure) therapy and advanced wound care are specialized medical treatments used to promote healing of complex, chronic, or non-heali',
                'meta_keywords' => '',
            ]
        );
    }
}
