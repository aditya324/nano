<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativeRehabilitationFollowupCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Postoperative Rehabilitation & Follow-up Care')],
            [
                'title' => 'Postoperative Rehabilitation & Follow-up Care',
                'slug' => Str::slug('Postoperative Rehabilitation & Follow-up Care'),
                'introduction' => 'Postoperative rehabilitation and follow-up care involve structured recovery programs designed to restore physical function, monitor healing, and prevent complications after surgery.',
                'what_is' => 'Rehabilitation programs may include: Physiotherapy Nutritional support Pain management Wound care Mobility training Psychological support Regular follow-up helps monitor: Surgical healing Infection signs Functional recovery Medication response Long-term surgical outcomes The rehabilitation plan is tailored according to the type of surgery and patient needs.',
                'symptoms' => [
            ['value' => 'Weakness after surgery'],
            ['value' => 'Reduced mobility or stiffness'],
            ['value' => 'Pain during recovery'],
            ['value' => 'Fatigue or delayed healing'],
            ['value' => 'Functional limitations after major procedures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed recovery'],
            ['value' => 'Muscle weakness or stiffness'],
            ['value' => 'Chronic pain development'],
            ['value' => 'Blood clots from immobility'],
            ['value' => 'Recurrent surgical complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend rehabilitation sessions regularly'],
            ['value' => 'Follow exercise programs consistently'],
            ['value' => 'Maintain proper nutrition and hydration'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Attend scheduled follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed recovery'],
            ['value' => 'Muscle weakness or stiffness'],
            ['value' => 'Chronic pain development'],
            ['value' => 'Blood clots from immobility'],
            ['value' => 'Recurrent surgical complications'],
        ],
                'long_term_outlook' => 'Comprehensive rehabilitation and follow-up care improve healing, restore independence, reduce complications, and enhance long-term quality of life after surgery.',
                'conclusion' => '',
                'seo_title' => 'Postoperative Rehabilitation & Follow-up Care',
                'seo_description' => 'Postoperative rehabilitation and follow-up care involve structured recovery programs designed to restore physical function, monitor healing, and prevent complications after surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
