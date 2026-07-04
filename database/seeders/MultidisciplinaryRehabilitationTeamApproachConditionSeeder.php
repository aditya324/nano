<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryRehabilitationTeamApproachConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Rehabilitation Team Approach')],
            [
                'name' => 'Multidisciplinary Rehabilitation Team Approach',
                'slug' => Str::slug('Multidisciplinary Rehabilitation Team Approach'),
                'h1' => 'Multidisciplinary Rehabilitation Team Approach',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A multidisciplinary rehabilitation team approach involves coordinated care provided by healthcare professionals from different specialties working together to support recovery, improve function, and enhance quality of life for individuals with complex medical, neurological, orthopedic, cardiopulmonary, or developmental conditions. This collaborative approach ensures comprehensive and patient-centered rehabilitation care.',
                'about_more' => '',
                'overview' => 'Multidisciplinary rehabilitation teams may include physiatrists, physiotherapists, occupational therapists, speech and language therapists, rehabilitation nurses, psychologists, prosthetists, nutritionists, respiratory therapists, neurologists, orthopedic specialists, and social workers. The team works together to create individualized rehabilitation plans that address physical, cognitive, emotional, communication, and functional needs throughout recovery and long-term care.',
                'symptoms' => [
            ['value' => 'Reduced mobility or physical functioning'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Speech, swallowing, or communication difficulties'],
            ['value' => 'Balance, coordination, or neurological impairments'],
            ['value' => 'Chronic pain, fatigue, or reduced endurance'],
            ['value' => 'Common Causes'],
            ['value' => 'Stroke or neurological disorders'],
            ['value' => 'Orthopedic injuries or post-surgical recovery'],
            ['value' => 'Spinal cord injuries or traumatic brain injuries'],
            ['value' => 'Cardiopulmonary or chronic medical conditions'],
            ['value' => 'Developmental, musculoskeletal, or neuromuscular disorders'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delayed recovery without coordinated rehabilitation care'],
            ['value' => 'Reduced independence and functional ability'],
            ['value' => 'Increased risk of complications or recurrent injuries'],
            ['value' => 'Emotional stress, anxiety, or depression during recovery'],
            ['value' => 'Difficulty managing multiple medical and rehabilitation needs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'A multidisciplinary rehabilitation approach may include physiotherapy, occupational therapy, speech therapy, pain management, respiratory therapy, psychological support, nutritional counseling, mobility training, assistive device management, and patient education. Team members regularly assess progress, adjust treatment goals, and coordinate care to improve recovery outcomes and long-term functional independence.'],
            ['value' => 'Following individualized rehabilitation programs consistently'],
            ['value' => 'Attending scheduled therapy and follow-up appointments'],
            ['value' => 'Maintaining communication with rehabilitation specialists'],
            ['value' => 'Monitoring physical, emotional, and functional progress'],
            ['value' => 'Practicing prescribed exercises and self-care strategies regularly'],
        ],
                'recovery' => 'The long-term outlook with a multidisciplinary rehabilitation team approach is generally very positive because coordinated care improves recovery, mobility, independence, and overall quality of life. Early intervention, continuous rehabilitation, patient participation, and ongoing specialist support are important for achieving long-term functional improvement and maintaining overall health and well-being. ______________________ 25. Assessment & Monitoring of Functional Outcome Assessment & Monitoring of Functional Outcome Procedures',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Multidisciplinary Rehabilitation Team Approach',
                'meta_description' => 'A multidisciplinary rehabilitation team approach involves coordinated care provided by healthcare professionals from different specialties working together to s',
                'meta_keywords' => '',
            ]
        );
    }
}
