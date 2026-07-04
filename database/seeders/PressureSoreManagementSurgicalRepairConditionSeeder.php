<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PressureSoreManagementSurgicalRepairConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pressure Sore Management & Surgical Repair')],
            [
                'name' => 'Pressure Sore Management & Surgical Repair',
                'slug' => Str::slug('Pressure Sore Management & Surgical Repair'),
                'h1' => 'Pressure Sore Management & Surgical Repair',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pressure sore management and surgical repair involve specialized medical and reconstructive procedures used to treat pressure ulcers, bed sores, and chronic wounds caused by prolonged pressure, poor circulation, immobility, or underlying medical conditions. These treatments aim to control infection, promote healing, restore tissue coverage, and improve patient comfort and mobility.',
                'about_more' => '',
                'overview' => 'Pressure sores commonly develop over bony areas such as the back, hips, heels, elbows, and sacral region due to prolonged pressure and reduced blood supply to the skin and soft tissues. Management includes wound assessment, pressure relief, infection control, advanced wound care, and nutritional support. Surgical repair procedures such as debridement, skin grafting, flap reconstruction, and soft tissue coverage are performed in severe or non-healing ulcers to restore tissue integrity and prevent complications.',
                'symptoms' => [
            ['value' => 'Persistent skin breakdown or open ulcers'],
            ['value' => 'Redness, swelling, or discoloration over pressure areas'],
            ['value' => 'Pain, foul-smelling discharge, or wound infection'],
            ['value' => 'Tissue loss or exposed underlying structures in severe cases'],
            ['value' => 'Difficulty sitting, lying down, or moving comfortably'],
        ],
                'causes' => [
            ['value' => 'Prolonged immobility or bed rest'],
            ['value' => 'Poor blood circulation and pressure-related tissue damage'],
            ['value' => 'Diabetes, spinal cord injury, or chronic illness'],
            ['value' => 'Malnutrition or reduced wound healing capacity'],
            ['value' => 'Inadequate pressure relief or wound care management'],
        ],
                'risks' => [
            ['value' => 'Severe wound infection or tissue necrosis'],
            ['value' => 'Spread of infection to bone or bloodstream'],
            ['value' => 'Chronic pain and delayed wound healing'],
            ['value' => 'Functional limitations and prolonged hospitalization'],
            ['value' => 'Recurrence of pressure sores after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Comprehensive wound assessment and pressure sore staging'],
            ['value' => 'Advanced wound dressings and infection control management'],
            ['value' => 'Surgical debridement and removal of dead tissue'],
            ['value' => 'Skin grafting and flap reconstruction for wound closure'],
            ['value' => 'Long-term rehabilitation, nutritional support, and preventive pressure care'],
        ],
                'recovery' => 'The long-term outlook for pressure sore management and surgical repair depends on the severity of the ulcer, underlying medical conditions, and consistency of wound care and rehabilitation. Early intervention, pressure relief measures, infection control, reconstructive surgery, and multidisciplinary rehabilitation significantly improve healing outcomes and reduce recurrence risk. Ongoing preventive care, mobility support, nutrition management, and regular follow-up are important for maintaining long-term skin integrity and quality of life. _________________ 17. Pediatric Congenital Deformity Correction Pediatric Congenital Deformity Correction Procedures',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Pressure Sore Management & Surgical Repair',
                'meta_description' => 'Pressure sore management and surgical repair involve specialized medical and reconstructive procedures used to treat pressure ulcers, bed sores, and chronic wou',
                'meta_keywords' => '',
            ]
        );
    }
}
