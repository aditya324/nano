<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FootUlcerswithPoorWoundHealingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Foot Ulcers with Poor Wound Healing')],
            [
                'name' => 'Foot Ulcers with Poor Wound Healing',
                'slug' => Str::slug('Foot Ulcers with Poor Wound Healing'),
                'h1' => 'Foot Ulcers with Poor Wound Healing',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Foot ulcers with poor wound healing are chronic wounds commonly seen in diabetic patients due to nerve damage, poor circulation, and infection.',
                'about_more' => '',
                'overview' => 'Foot ulcers with poor wound healing are chronic wounds commonly seen in diabetic patients due to nerve damage, poor circulation, and infection.',
                'symptoms' => [
            ['value' => 'Persistent open wound on the foot'],
            ['value' => 'Delayed healing over weeks or months'],
            ['value' => 'Swelling and redness around the ulcer'],
            ['value' => 'Discharge or foul smell from infected wounds'],
            ['value' => 'Pain or numbness in the affected foot'],
        ],
                'causes' => [
            ['value' => 'Poor diabetes control'],
            ['value' => 'Peripheral neuropathy'],
            ['value' => 'Reduced blood circulation'],
            ['value' => 'Repeated pressure or trauma'],
            ['value' => 'Infection and poor hygiene'],
        ],
                'risks' => [
            ['value' => 'Chronic infection'],
            ['value' => 'Osteomyelitis and bone involvement'],
            ['value' => 'Gangrene and tissue loss'],
            ['value' => 'Limb amputation'],
            ['value' => 'Recurrent hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Advanced wound dressing techniques'],
            ['value' => 'Blood sugar optimization'],
            ['value' => 'Debridement of dead tissue'],
            ['value' => 'Antibiotics for infection control'],
            ['value' => 'Vascular intervention if circulation is poor'],
        ],
                'recovery' => 'Early wound management and proper diabetic care significantly improve healing outcomes.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Foot Ulcers with Poor Wound Healing',
                'meta_description' => 'Foot ulcers with poor wound healing are chronic wounds commonly seen in diabetic patients due to nerve damage, poor circulation, and infection.',
                'meta_keywords' => '',
            ]
        );
    }
}
