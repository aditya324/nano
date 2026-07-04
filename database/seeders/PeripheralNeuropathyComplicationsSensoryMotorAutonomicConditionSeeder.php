<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralNeuropathyComplicationsSensoryMotorAutonomicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Neuropathy Complications (Sensory / Motor / Autonomic)')],
            [
                'name' => 'Peripheral Neuropathy Complications (Sensory / Motor / Autonomic)',
                'slug' => Str::slug('Peripheral Neuropathy Complications (Sensory / Motor / Autonomic)'),
                'h1' => 'Peripheral Neuropathy Complications (Sensory / Motor / Autonomic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral neuropathy complications occur due to diabetic nerve damage affecting sensation, muscle control, and autonomic functions of the feet and lower limbs.',
                'about_more' => '',
                'overview' => 'Peripheral neuropathy complications occur due to diabetic nerve damage affecting sensation, muscle control, and autonomic functions of the feet and lower limbs.',
                'symptoms' => [
            ['value' => 'Numbness or tingling in the feet'],
            ['value' => 'Burning pain or electric shock sensations'],
            ['value' => 'Muscle weakness and imbalance'],
            ['value' => 'Dry cracked skin due to reduced sweating'],
            ['value' => 'Loss of protective sensation leading to injuries'],
        ],
                'causes' => [
            ['value' => 'Long-standing uncontrolled diabetes'],
            ['value' => 'Poor blood glucose management'],
            ['value' => 'Nutritional deficiencies'],
            ['value' => 'Alcohol use and smoking'],
            ['value' => 'Reduced blood supply to nerves'],
        ],
                'risks' => [
            ['value' => 'Foot ulcers and unnoticed injuries'],
            ['value' => 'Foot deformities and imbalance'],
            ['value' => 'Walking difficulty and falls'],
            ['value' => 'Chronic pain syndromes'],
            ['value' => 'Increased risk of amputation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Strict blood sugar control'],
            ['value' => 'Neuropathy pain medications'],
            ['value' => 'Physiotherapy and balance training'],
            ['value' => 'Foot protection and specialized footwear'],
            ['value' => 'Regular neurological and foot examinations'],
        ],
                'recovery' => 'Neuropathy progression can be slowed with proper diabetes control and preventive foot care.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Peripheral Neuropathy Complications (Sensory / Motor / Autonomic)',
                'meta_description' => 'Peripheral neuropathy complications occur due to diabetic nerve damage affecting sensation, muscle control, and autonomic functions of the feet and lower limbs.',
                'meta_keywords' => '',
            ]
        );
    }
}
