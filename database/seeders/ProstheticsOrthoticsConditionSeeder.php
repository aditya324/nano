<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProstheticsOrthoticsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Prosthetics & Orthotics')],
            [
                'name' => 'Prosthetics & Orthotics',
                'slug' => Str::slug('Prosthetics & Orthotics'),
                'h1' => 'Prosthetics & Orthotics',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Prosthetics and orthotics are specialized medical devices designed to improve mobility, stability, posture, and physical function in individuals with limb loss, muscle weakness, joint instability, or neurological and musculoskeletal conditions. These supportive devices help restore movement, enhance independence, and improve overall quality of life.',
                'about_more' => '',
                'overview' => 'Prosthetic devices are artificial limbs used to replace missing arms, legs, hands, or feet after amputation or congenital limb loss. Orthotic devices are external supports such as braces, splints, and corrective supports designed to stabilize joints, improve alignment, and assist movement. Prosthetics and orthotics are commonly used in rehabilitation programs for amputations, stroke, cerebral palsy, spinal cord injuries, orthopedic conditions, and neuromuscular disorders.',
                'symptoms' => [
            ['value' => 'Limb loss or reduced limb function'],
            ['value' => 'Difficulty walking or maintaining balance'],
            ['value' => 'Joint instability or abnormal posture'],
            ['value' => 'Muscle weakness affecting mobility'],
            ['value' => 'Reduced independence in daily activities'],
            ['value' => 'Common Causes'],
            ['value' => 'Trauma or accidents leading to limb loss'],
            ['value' => 'Diabetes or vascular disease causing amputations'],
            ['value' => 'Neurological disorders affecting movement and posture'],
            ['value' => 'Congenital limb or musculoskeletal abnormalities'],
            ['value' => 'Orthopedic injuries or chronic joint instability'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Skin irritation or pressure sores from device use'],
            ['value' => 'Discomfort due to improper fitting'],
            ['value' => 'Muscle weakness or imbalance affecting mobility'],
            ['value' => 'Falls or instability during movement'],
            ['value' => 'Emotional adjustment challenges related to mobility limitations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Prosthetics and orthotics are used in rehabilitation programs involving gait training, posture correction, mobility exercises, strengthening programs, balance rehabilitation, and functional movement training. Rehabilitation specialists may customize devices, provide fitting adjustments, and offer education on device care, safe usage, and long-term mobility management to improve comfort and functional independence.'],
            ['value' => 'Maintaining proper skin and stump care'],
            ['value' => 'Cleaning and maintaining devices regularly'],
            ['value' => 'Monitoring for pressure points, redness, or discomfort'],
            ['value' => 'Performing prescribed rehabilitation exercises consistently'],
            ['value' => 'Attending follow-up appointments for fitting and adjustments'],
        ],
                'recovery' => 'The long-term outlook with prosthetics and orthotics is generally very positive when devices are properly fitted and combined with structured rehabilitation. These supportive technologies can significantly improve mobility, balance, posture, independence, and quality of life. Continuous rehabilitation, regular device maintenance, and ongoing medical follow-up are important for maintaining long-term functional outcomes and comfort. ________________________ 135. Gait Training Devices Gait Training Devices Equipment',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Prosthetics & Orthotics',
                'meta_description' => 'Prosthetics and orthotics are specialized medical devices designed to improve mobility, stability, posture, and physical function in individuals with limb loss,',
                'meta_keywords' => '',
            ]
        );
    }
}
