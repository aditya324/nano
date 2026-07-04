<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComplexWoundsRequiringVascularInterventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Complex Wounds Requiring Vascular Intervention')],
            [
                'name' => 'Complex Wounds Requiring Vascular Intervention',
                'slug' => Str::slug('Complex Wounds Requiring Vascular Intervention'),
                'h1' => 'Complex Wounds Requiring Vascular Intervention',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Complex wounds requiring vascular intervention are chronic or non-healing wounds caused by poor blood circulation. These wounds commonly occur in diabetic patients or individuals with peripheral arterial disease.',
                'about_more' => '',
                'overview' => 'Complex wounds requiring vascular intervention are chronic or non-healing wounds caused by poor blood circulation. These wounds commonly occur in diabetic patients or individuals with peripheral arterial disease.',
                'symptoms' => [
            ['value' => 'Non-healing ulcers or wounds'],
            ['value' => 'Severe pain in the affected area'],
            ['value' => 'Blackened or dead tissue'],
            ['value' => 'Swelling and foul-smelling discharge'],
            ['value' => 'Reduced pulses or cold extremities'],
        ],
                'causes' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Chronic venous insufficiency'],
            ['value' => 'Trauma or pressure injuries'],
            ['value' => 'Poor blood circulation and smoking'],
        ],
                'risks' => [
            ['value' => 'Severe wound infection'],
            ['value' => 'Gangrene and tissue necrosis'],
            ['value' => 'Osteomyelitis (bone infection)'],
            ['value' => 'Limb amputation'],
            ['value' => 'Sepsis and systemic infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Vascular Doppler and angiography evaluation'],
            ['value' => 'Wound debridement and advanced dressings'],
            ['value' => 'Angioplasty or bypass surgery to restore blood flow'],
            ['value' => 'Antibiotics and infection control'],
            ['value' => 'Skin grafting or reconstructive procedures'],
        ],
                'recovery' => 'Healing improves significantly after restoration of adequate blood circulation. Long-term wound care and control of underlying diseases are essential for preventing recurrence.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Complex Wounds Requiring Vascular Intervention',
                'meta_description' => 'Complex wounds requiring vascular intervention are chronic or non-healing wounds caused by poor blood circulation. These wounds commonly occur in diabetic patie',
                'meta_keywords' => '',
            ]
        );
    }
}
