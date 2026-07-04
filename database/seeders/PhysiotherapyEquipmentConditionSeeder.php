<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PhysiotherapyEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Physiotherapy Equipment')],
            [
                'name' => 'Physiotherapy Equipment',
                'slug' => Str::slug('Physiotherapy Equipment'),
                'h1' => 'Physiotherapy Equipment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Physiotherapy equipment includes specialized rehabilitation tools and exercise devices used to improve strength, mobility, balance, endurance, coordination, and overall physical function. These tools support recovery from injuries, surgeries, neurological disorders, musculoskeletal conditions, and chronic mobility limitations.',
                'about_more' => '',
                'overview' => 'Common physiotherapy equipment includes treadmills for gait and endurance training, weights for muscle strengthening, and exercise bands for resistance and flexibility exercises. Additional rehabilitation tools may include balance boards, therapy balls, parallel bars, stationary cycles, pulley systems, and mobility aids. Physiotherapy equipment is widely used in rehabilitation centers, hospitals, sports medicine clinics, and fitness-based recovery programs under professional supervision.',
                'symptoms' => [
            ['value' => 'Muscle weakness or reduced endurance'],
            ['value' => 'Difficulty walking or maintaining balance'],
            ['value' => 'Joint stiffness or limited mobility'],
            ['value' => 'Reduced coordination or physical performance'],
            ['value' => 'Pain affecting movement and daily activities'],
            ['value' => 'Common Causes'],
            ['value' => 'Orthopedic injuries or post-surgical recovery'],
            ['value' => 'Neurological disorders affecting mobility'],
            ['value' => 'Sports injuries or muscle deconditioning'],
            ['value' => 'Chronic pain or musculoskeletal disorders'],
            ['value' => 'Age-related weakness and reduced physical activity'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Muscle soreness or fatigue after exercise'],
            ['value' => 'Risk of strain or injury if equipment is used improperly'],
            ['value' => 'Joint discomfort during rehabilitation exercises'],
            ['value' => 'Falls or imbalance during mobility training'],
            ['value' => 'Overexertion without proper supervision or guidance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Physiotherapy equipment is used in rehabilitation programs for strengthening exercises, gait training, flexibility improvement, endurance conditioning, balance rehabilitation, posture correction, and functional mobility training. Rehabilitation specialists customize exercise programs using appropriate equipment to support safe recovery, improve physical performance, and restore independence.'],
            ['value' => 'Using rehabilitation equipment under professional guidance'],
            ['value' => 'Following prescribed exercise programs consistently'],
            ['value' => 'Maintaining proper posture and exercise techniques'],
            ['value' => 'Monitoring for pain, swelling, or excessive fatigue'],
            ['value' => 'Attending regular rehabilitation and progress evaluation sessions'],
        ],
                'recovery' => 'The long-term outlook with physiotherapy equipment-based rehabilitation is generally very positive when exercises are performed consistently and safely. Rehabilitation equipment helps improve strength, flexibility, balance, endurance, and functional independence while supporting long-term physical health and recovery. Continuous exercise, rehabilitation follow-up, and healthy lifestyle practices are important for maintaining long-term mobility and overall well-being. ________________________ 132. Electrotherapy Devices (TENS, NMES, Ultrasound) Electrotherapy Devices (TENS, NMES & Ultrasound) Equipment',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Physiotherapy Equipment',
                'meta_description' => 'Physiotherapy equipment includes specialized rehabilitation tools and exercise devices used to improve strength, mobility, balance, endurance, coordination, and',
                'meta_keywords' => '',
            ]
        );
    }
}
