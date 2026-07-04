<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubstanceUseDisordersAlcoholDrugsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Substance Use Disorders (Alcohol, Drugs)')],
            [
                'name' => 'Substance Use Disorders (Alcohol, Drugs)',
                'slug' => Str::slug('Substance Use Disorders (Alcohol, Drugs)'),
                'h1' => 'Substance Use Disorders (Alcohol, Drugs)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Substance use disorders are mental and behavioral health conditions characterized by the harmful or excessive use of alcohol, prescription medications, or recreational drugs that lead to physical dependence, emotional distress, impaired judgment, and disruption of daily life. These disorders can affect mental health, physical well-being, relationships, work performance, and overall quality of life. Early diagnosis and comprehensive treatment are essential to support recovery and prevent long-term complications.',
                'about_more' => '',
                'overview' => 'Substance use disorders are mental and behavioral health conditions characterized by the harmful or excessive use of alcohol, prescription medications, or recreational drugs that lead to physical dependence, emotional distress, impaired judgment, and disruption of daily life. These disorders can affect mental health, physical well-being, relationships, work performance, and overall quality of life. Early diagnosis and comprehensive treatment are essential to support recovery and prevent long-term complications.',
                'symptoms' => [
            ['value' => 'Cravings or strong urges to use alcohol or drugs'],
            ['value' => 'Loss of control over substance use or inability to stop'],
            ['value' => 'Behavioral changes, mood swings, or irritability'],
            ['value' => 'Withdrawal symptoms such as anxiety, sweating, tremors, or nausea'],
            ['value' => 'Decline in social, occupational, or academic functioning'],
            ['value' => 'Common Causes'],
            ['value' => 'Genetic and family history of addiction or mental health disorders'],
            ['value' => 'Chronic stress, trauma, or emotional difficulties'],
            ['value' => 'Peer pressure and environmental influences'],
            ['value' => 'Anxiety, depression, or other underlying psychiatric conditions'],
            ['value' => 'Long-term exposure to addictive substances or unhealthy coping mechanisms'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Liver, heart, lung, or neurological complications'],
            ['value' => 'Anxiety, depression, and increased mental health problems'],
            ['value' => 'Relationship difficulties and social isolation'],
            ['value' => 'Accidents, injuries, or impaired judgment-related complications'],
            ['value' => 'Risk of overdose, long-term dependency, or life-threatening health conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for substance use disorders usually involves a multidisciplinary approach focused on detoxification, emotional support, behavioral therapy, relapse prevention, and long-term recovery management. Treatment may include counseling, cognitive behavioral therapy (CBT), medication-assisted treatment, psychiatric care, rehabilitation programs, support groups, stress management techniques, and family therapy. Lifestyle modification, healthy routines, rehabilitation support, and continuous follow-up are also important for maintaining long-term recovery and emotional well-being.'],
            ['value' => 'Regular psychological and medical follow-up care'],
            ['value' => 'Monitoring withdrawal symptoms and recovery progress'],
            ['value' => 'Participation in counseling, rehabilitation, or support programs'],
            ['value' => 'Encouragement of healthy lifestyle habits and stress management'],
            ['value' => 'Long-term relapse prevention and emotional wellness support'],
        ],
                'recovery' => 'The long-term outlook for substance use disorders is generally positive with early intervention, proper treatment, emotional support, and continuous rehabilitation care. Therapy, medication adherence when prescribed, social support, healthy lifestyle habits, relapse prevention strategies, and regular follow-up significantly help improve recovery outcomes, emotional stability, physical health, daily functioning, and overall quality of life. ___________ 12. Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders) Sleep Disorders (Insomnia, Sleep Apnea, Circadian Disorders)',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Substance Use Disorders (Alcohol, Drugs)',
                'meta_description' => 'Substance use disorders are mental and behavioral health conditions characterized by the harmful or excessive use of alcohol, prescription medications, or recre',
                'meta_keywords' => '',
            ]
        );
    }
}
