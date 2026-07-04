<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostOperativeENTCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Post-Operative ENT Care')],
            [
                'title' => 'Post-Operative ENT Care',
                'slug' => Str::slug('Post-Operative ENT Care'),
                'introduction' => 'Post-operative ENT care involves specialized monitoring and recovery support after ENT surgeries involving the ear, nose, throat, head, or neck. The care focuses on pain control, infection prevention, wound healing, and restoration of normal function. Proper postoperative management improves recovery and surgical outcomes.',
                'what_is' => 'The care plan depends on the type of surgery performed and may include: Wound and dressing care Medication management Airway monitoring Voice and swallowing assessment Hearing evaluation Nutritional support ENT specialists monitor for complications such as bleeding, infection, airway obstruction, or delayed healing. Regular follow-up visits help ensure successful recovery.',
                'symptoms' => [
            ['value' => 'Surgical pain or swelling'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Nasal blockage after surgery'],
            ['value' => 'Mild bleeding or discharge'],
            ['value' => 'Temporary voice or hearing changes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Delayed healing'],
            ['value' => 'Airway complications'],
            ['value' => 'Recurrence of underlying disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Maintain proper wound hygiene'],
            ['value' => 'Attend all follow-up appointments'],
            ['value' => 'Avoid smoking and irritants'],
            ['value' => 'Report severe pain, fever, or bleeding immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Delayed healing'],
            ['value' => 'Airway complications'],
            ['value' => 'Recurrence of underlying disease'],
        ],
                'long_term_outlook' => 'Good postoperative care improves healing, reduces complications, and supports long-term recovery and functional improvement after ENT surgery.',
                'conclusion' => '',
                'seo_title' => 'Post-Operative ENT Care',
                'seo_description' => 'Post-operative ENT care involves specialized monitoring and recovery support after ENT surgeries involving the ear, nose, throat, head, or neck. The care focuses on pain control, infection prevention, wound healing, and restoration of normal function. Proper postoperative management improves recovery and surgical outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
