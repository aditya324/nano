<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaBluntSharpAbdominalChestExtremityConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Trauma (Blunt/Sharp Abdominal, Chest, Extremity)')],
            [
                'name' => 'Trauma (Blunt/Sharp Abdominal, Chest, Extremity)',
                'slug' => Str::slug('Trauma (Blunt/Sharp Abdominal, Chest, Extremity)'),
                'h1' => 'Trauma (Blunt/Sharp Abdominal, Chest, Extremity)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Trauma refers to injuries caused by accidents, falls, violence, or penetrating objects affecting the abdomen, chest, or limbs. Injuries may involve internal organs, blood vessels, bones, muscles, or soft tissues.',
                'about_more' => '',
                'overview' => 'Trauma refers to injuries caused by accidents, falls, violence, or penetrating objects affecting the abdomen, chest, or limbs. Injuries may involve internal organs, blood vessels, bones, muscles, or soft tissues.',
                'symptoms' => [
            ['value' => 'Severe pain and swelling'],
            ['value' => 'Bleeding or open wounds'],
            ['value' => 'Difficulty breathing in chest trauma'],
            ['value' => 'Abdominal tenderness or distension'],
            ['value' => 'Weakness, dizziness, or shock symptoms'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents'],
            ['value' => 'Falls and sports injuries'],
            ['value' => 'Assault or violence'],
            ['value' => 'Penetrating injuries from sharp objects'],
            ['value' => 'Industrial or workplace accidents'],
        ],
                'risks' => [
            ['value' => 'Internal bleeding and organ damage'],
            ['value' => 'Fractures and nerve injury'],
            ['value' => 'Shock and blood loss'],
            ['value' => 'Infection and wound complications'],
            ['value' => 'Long-term disability or organ failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency trauma assessment and stabilization'],
            ['value' => 'Imaging such as X-ray, CT, or ultrasound'],
            ['value' => 'Wound cleaning and suturing'],
            ['value' => 'Emergency surgery for organ injuries'],
            ['value' => 'Intensive care and rehabilitation support'],
        ],
                'recovery' => 'Recovery depends on the severity and location of injury. Rapid emergency care significantly improves survival and functional recovery.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Trauma (Blunt/Sharp Abdominal, Chest, Extremity)',
                'meta_description' => 'Trauma refers to injuries caused by accidents, falls, violence, or penetrating objects affecting the abdomen, chest, or limbs. Injuries may involve internal org',
                'meta_keywords' => '',
            ]
        );
    }
}
