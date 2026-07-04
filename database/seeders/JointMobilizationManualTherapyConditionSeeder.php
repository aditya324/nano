<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JointMobilizationManualTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Joint Mobilization & Manual Therapy')],
            [
                'name' => 'Joint Mobilization & Manual Therapy',
                'slug' => Str::slug('Joint Mobilization & Manual Therapy'),
                'h1' => 'Joint Mobilization & Manual Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Joint mobilization and manual therapy are hands-on rehabilitation techniques used to improve joint movement, reduce pain, relieve muscle tension, and restore physical function. These therapies are commonly used in physiotherapy and musculoskeletal rehabilitation to treat joint stiffness, muscle tightness, postural problems, and movement restrictions.',
                'about_more' => '',
                'overview' => 'Joint mobilization involves controlled passive movements applied to joints to improve flexibility, alignment, and range of motion. Manual therapy may include soft tissue manipulation, stretching, muscle release techniques, and therapeutic hand movements to reduce pain and improve mobility. These treatments are commonly used for neck pain, back pain, frozen shoulder, sports injuries, arthritis, and post-surgical rehabilitation.',
                'symptoms' => [
            ['value' => 'Joint stiffness or restricted movement'],
            ['value' => 'Neck, back, or shoulder pain'],
            ['value' => 'Muscle tightness or spasms'],
            ['value' => 'Reduced flexibility or mobility'],
            ['value' => 'Pain during movement or physical activity'],
            ['value' => 'Common Causes'],
            ['value' => 'Musculoskeletal injuries or trauma'],
            ['value' => 'Poor posture or repetitive strain'],
            ['value' => 'Arthritis or degenerative joint disorders'],
            ['value' => 'Prolonged immobilization or post-surgical stiffness'],
            ['value' => 'Sports injuries or overuse conditions'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Temporary soreness or discomfort after therapy'],
            ['value' => 'Mild swelling or muscle tenderness'],
            ['value' => 'Fatigue after intensive treatment sessions'],
            ['value' => 'Rare aggravation of underlying injuries if performed improperly'],
            ['value' => 'Temporary dizziness or stiffness following manipulation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Joint mobilization and manual therapy may include passive joint movements, soft tissue massage, stretching techniques, trigger point therapy, myofascial release, spinal mobilization, and posture correction. These therapies are often combined with physiotherapy exercises, strengthening programs, and rehabilitation training to improve flexibility, reduce pain, and restore functional movement.'],
            ['value' => 'Performing prescribed stretching and strengthening exercises'],
            ['value' => 'Maintaining proper posture and body mechanics'],
            ['value' => 'Applying heat or cold therapy if recommended'],
            ['value' => 'Staying physically active within advised limits'],
            ['value' => 'Attending regular physiotherapy and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with joint mobilization and manual therapy is generally very positive when therapy is performed consistently and combined with rehabilitation exercises. These treatments can significantly improve flexibility, mobility, pain relief, and physical function. Ongoing exercise, posture correction, and preventive care are important for maintaining long-term musculoskeletal health and reducing recurrence of movement problems. ___________________________',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Joint Mobilization & Manual Therapy',
                'meta_description' => 'Joint mobilization and manual therapy are hands-on rehabilitation techniques used to improve joint movement, reduce pain, relieve muscle tension, and restore ph',
                'meta_keywords' => '',
            ]
        );
    }
}
