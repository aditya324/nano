<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SleepStudyAccessforSleepApneaEvaluationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Sleep Study Access for Sleep Apnea Evaluation')],
            [
                'title' => 'Sleep Study Access for Sleep Apnea Evaluation',
                'slug' => Str::slug('Sleep Study Access for Sleep Apnea Evaluation'),
                'introduction' => 'Sleep study access for sleep apnea evaluation provides specialized diagnostic services to assess breathing disturbances, oxygen levels, and sleep quality during sleep. The evaluation helps diagnose obstructive sleep apnea (OSA), snoring disorders, and other sleep-related breathing conditions. Early diagnosis improves overall health and reduces complications related to untreated sleep disorders.',
                'what_is' => 'Sleep studies, also called polysomnography, monitor multiple body functions during sleep, including: Breathing pattern Oxygen saturation Heart rate Brain activity Muscle movements Snoring episodes The evaluation helps identify: Obstructive sleep apnea Central sleep apnea Sleep-related breathing disorders Severe snoring Sleep disturbances ENT specialists often coordinate with sleep medicine experts for comprehensive management.',
                'symptoms' => [
            ['value' => 'Loud snoring'],
            ['value' => 'Excessive daytime sleepiness'],
            ['value' => 'Interrupted breathing during sleep'],
            ['value' => 'Morning headaches'],
            ['value' => 'Poor concentration or fatigue'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Untreated sleep apnea complications'],
            ['value' => 'Cardiovascular strain'],
            ['value' => 'High blood pressure'],
            ['value' => 'Sleep disturbance during testing'],
            ['value' => 'Anxiety during overnight monitoring'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow sleep specialist recommendations carefully'],
            ['value' => 'Maintain healthy body weight'],
            ['value' => 'Avoid alcohol and sedatives before sleep'],
            ['value' => 'Attend follow-up sleep evaluations regularly'],
            ['value' => 'Use prescribed sleep therapy devices consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Untreated sleep apnea complications'],
            ['value' => 'Cardiovascular strain'],
            ['value' => 'High blood pressure'],
            ['value' => 'Sleep disturbance during testing'],
            ['value' => 'Anxiety during overnight monitoring'],
        ],
                'long_term_outlook' => 'Sleep study evaluation improves early diagnosis and treatment of sleep disorders, leading to better sleep quality, cardiovascular health, and overall well-being.',
                'conclusion' => '',
                'seo_title' => 'Sleep Study Access for Sleep Apnea Evaluation',
                'seo_description' => 'Sleep study access for sleep apnea evaluation provides specialized diagnostic services to assess breathing disturbances, oxygen levels, and sleep quality during sleep. The evaluation helps diagnose obstructive sleep apnea (OSA), snoring disorders, and other sleep-related breathing conditions. Early diagnosis improves overall health and reduces complications related to untreated sleep disorders.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
