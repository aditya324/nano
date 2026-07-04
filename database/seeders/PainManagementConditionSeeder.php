<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PainManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pain Management')],
            [
                'name' => 'Pain Management',
                'slug' => Str::slug('Pain Management'),
                'h1' => 'Pain Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pain management is a comprehensive treatment approach aimed at reducing pain, improving physical function, and enhancing quality of life in individuals experiencing acute or chronic pain conditions. Physiotherapeutic techniques and adjunct medications are commonly combined to address musculoskeletal, neurological, post-surgical, and chronic pain disorders effectively.',
                'about_more' => '',
                'overview' => 'Pain management programs may include physiotherapy, exercise therapy, electrotherapy, manual therapy, heat and cold therapy, posture correction, and mobility rehabilitation. Adjunct medications such as pain relievers, anti-inflammatory drugs, muscle relaxants, or nerve pain medications may also be prescribed depending on the underlying condition. Treatment plans are individualized to improve mobility, reduce discomfort, and support long-term functional recovery.',
                'symptoms' => [
            ['value' => 'Persistent or recurrent pain'],
            ['value' => 'Muscle stiffness or joint discomfort'],
            ['value' => 'Reduced mobility or physical activity tolerance'],
            ['value' => 'Muscle spasms or nerve-related pain'],
            ['value' => 'Difficulty performing daily activities due to pain'],
            ['value' => 'Common Causes'],
            ['value' => 'Musculoskeletal injuries or arthritis'],
            ['value' => 'Neurological disorders or nerve compression'],
            ['value' => 'Post-surgical pain or rehabilitation needs'],
            ['value' => 'Chronic pain syndromes and inflammatory conditions'],
            ['value' => 'Sports injuries or repetitive strain disorders'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Reduced mobility and physical functioning'],
            ['value' => 'Sleep disturbances and fatigue'],
            ['value' => 'Muscle weakness or joint stiffness'],
            ['value' => 'Emotional stress, anxiety, or depression related to chronic pain'],
            ['value' => 'Dependence on medications if not properly monitored'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain management may include physiotherapy exercises, stretching and strengthening programs, electrotherapy modalities such as TENS or ultrasound, manual therapy, posture correction, and rehabilitation training. Adjunct medications may be used to reduce inflammation, muscle spasms, or nerve pain while supporting rehabilitation and improving overall comfort and function.'],
            ['value' => 'Following prescribed therapy and medication plans'],
            ['value' => 'Practicing rehabilitation exercises regularly'],
            ['value' => 'Maintaining proper posture and body mechanics'],
            ['value' => 'Monitoring for medication side effects or worsening symptoms'],
            ['value' => 'Attending regular medical and rehabilitation follow-up appointments'],
        ],
                'recovery' => 'The long-term outlook for pain management is generally positive with early intervention, structured rehabilitation, and appropriate medical care. Comprehensive pain management can significantly improve mobility, reduce discomfort, enhance physical functioning, and improve quality of life. Ongoing therapy, healthy lifestyle habits, and regular medical follow-up are important for maintaining long-term pain control and functional independence. _______________________ 9. Postural Correction & Ergonomic Training Postural Correction & Ergonomic Training Procedures',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Pain Management',
                'meta_description' => 'Pain management is a comprehensive treatment approach aimed at reducing pain, improving physical function, and enhancing quality of life in individuals experien',
                'meta_keywords' => '',
            ]
        );
    }
}
