<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WoundHealingComplicationsChronicUlcersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Wound Healing Complications / Chronic Ulcers')],
            [
                'name' => 'Wound Healing Complications / Chronic Ulcers',
                'slug' => Str::slug('Wound Healing Complications / Chronic Ulcers'),
                'h1' => 'Wound Healing Complications / Chronic Ulcers',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Wound healing complications and chronic ulcers are conditions in which wounds fail to heal properly or remain open for an extended period of time. These wounds may develop due to poor circulation, diabetes, infections, pressure injuries, trauma, or underlying medical conditions. Chronic ulcers commonly affect the legs, feet, or pressure-prone areas of the body and require specialized medical care to prevent complications.',
                'about_more' => '',
                'overview' => 'Wound healing complications and chronic ulcers are conditions in which wounds fail to heal properly or remain open for an extended period of time. These wounds may develop due to poor circulation, diabetes, infections, pressure injuries, trauma, or underlying medical conditions. Chronic ulcers commonly affect the legs, feet, or pressure-prone areas of the body and require specialized medical care to prevent complications.',
                'symptoms' => [
            ['value' => 'Open sores or wounds that heal slowly'],
            ['value' => 'Pain, swelling, or redness around the wound'],
            ['value' => 'Discharge, bleeding, or foul odor from the ulcer'],
            ['value' => 'Skin discoloration or tissue breakdown'],
            ['value' => 'Persistent inflammation or repeated wound infections'],
        ],
                'causes' => [
            ['value' => 'Diabetes and poor blood circulation'],
            ['value' => 'Pressure injuries or prolonged immobility'],
            ['value' => 'Infections or repeated skin trauma'],
            ['value' => 'Venous insufficiency or arterial disease'],
            ['value' => 'Poor nutrition, smoking, or weakened immunity'],
        ],
                'risks' => [
            ['value' => 'Severe skin or soft tissue infections'],
            ['value' => 'Delayed healing and chronic pain'],
            ['value' => 'Tissue damage or gangrene in severe cases'],
            ['value' => 'Reduced mobility and physical functioning'],
            ['value' => 'Increased risk of hospitalization or surgical intervention'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Wound cleaning and specialized wound dressings'],
            ['value' => 'Antibiotics for infected wounds'],
            ['value' => 'Debridement to remove damaged tissue'],
            ['value' => 'Compression therapy or circulation-improving treatments'],
            ['value' => 'Advanced wound care procedures and surgical management when required'],
        ],
                'recovery' => 'The long-term outlook for wound healing complications and chronic ulcers depends on the underlying cause, severity of the wound, and overall health condition. Early treatment, infection control, proper wound care, and management of contributing medical conditions can significantly improve healing outcomes. Continuous medical follow-up, good nutrition, and preventive care are important for long-term recovery and reducing recurrence risk. _________________________ 23. Dermatologic Manifestations of Systemic Disease Dermatologic Manifestations of Systemic Disease',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Wound Healing Complications / Chronic Ulcers',
                'meta_description' => 'Wound healing complications and chronic ulcers are conditions in which wounds fail to heal properly or remain open for an extended period of time. These wounds ',
                'meta_keywords' => '',
            ]
        );
    }
}
