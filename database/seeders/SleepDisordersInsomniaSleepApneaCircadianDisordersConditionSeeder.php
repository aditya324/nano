<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SleepDisordersInsomniaSleepApneaCircadianDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders)')],
            [
                'name' => 'Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders)',
                'slug' => Str::slug('Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders)'),
                'h1' => 'Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Sleep disorders are conditions that affect the quality, timing, and duration of sleep, leading to physical fatigue, emotional distress, reduced concentration, and impaired daily functioning. Common sleep disorders include insomnia, sleep apnea, and circadian rhythm disorders. These conditions can impact mental health, cardiovascular health, metabolism, immune function, and overall quality of life if left untreated.',
                'about_more' => '',
                'overview' => 'Sleep disorders are conditions that affect the quality, timing, and duration of sleep, leading to physical fatigue, emotional distress, reduced concentration, and impaired daily functioning. Common sleep disorders include insomnia, sleep apnea, and circadian rhythm disorders. These conditions can impact mental health, cardiovascular health, metabolism, immune function, and overall quality of life if left untreated.',
                'symptoms' => [
            ['value' => 'Difficulty falling asleep or staying asleep'],
            ['value' => 'Excessive daytime sleepiness or fatigue'],
            ['value' => 'Loud snoring, interrupted breathing, or gasping during sleep'],
            ['value' => 'Poor concentration, irritability, or mood changes'],
            ['value' => 'Irregular sleep patterns or difficulty maintaining a normal sleep schedule'],
            ['value' => 'Common Causes'],
            ['value' => 'Stress, anxiety, depression, or emotional difficulties'],
            ['value' => 'Obesity, airway obstruction, or respiratory problems'],
            ['value' => 'Poor sleep habits and irregular sleep schedules'],
            ['value' => 'Neurological, hormonal, or metabolic disorders'],
            ['value' => 'Shift work, excessive screen exposure, or circadian rhythm disruption'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Chronic fatigue and reduced work or academic performance'],
            ['value' => 'Increased risk of hypertension, heart disease, and diabetes'],
            ['value' => 'Anxiety, depression, and emotional instability'],
            ['value' => 'Impaired concentration and higher accident risk due to sleep deprivation'],
            ['value' => 'Long-term metabolic, cardiovascular, and cognitive health complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for sleep disorders depends on the underlying condition and severity of symptoms. Management may include sleep hygiene counseling, lifestyle modification, stress management, cognitive behavioral therapy for insomnia (CBT-I), breathing support devices such as CPAP therapy for sleep apnea, weight management programs, medications when required, and circadian rhythm correction strategies. Relaxation techniques, exercise programs, nutritional guidance, and long-term sleep monitoring may also be recommended to improve sleep quality and overall health.'],
            ['value' => 'Regular sleep evaluation and follow-up care'],
            ['value' => 'Monitoring response to therapy and sleep improvement progress'],
            ['value' => 'Encouragement of healthy sleep routines and lifestyle habits'],
            ['value' => 'Stress reduction and emotional wellness support'],
            ['value' => 'Long-term management and monitoring for chronic sleep-related conditions'],
        ],
                'recovery' => 'The long-term outlook for sleep disorders is generally positive with early diagnosis, proper treatment, and healthy lifestyle habits. Consistent sleep routines, stress management, weight control, medical treatment adherence, behavioral therapy, and regular follow-up significantly help improve sleep quality, physical health, emotional well-being, daily functioning, and overall quality of life. ___________ 13. Dementia (Alzheimer’s, Vascular, Other) Dementia (Alzheimer’s, Vascular, Other)',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders)',
                'meta_description' => 'Sleep disorders are conditions that affect the quality, timing, and duration of sleep, leading to physical fatigue, emotional distress, reduced concentration, a',
                'meta_keywords' => '',
            ]
        );
    }
}
