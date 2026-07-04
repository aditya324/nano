<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SelfHarmSuicidalIdeationRiskConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Self-Harm / Suicidal Ideation Risk')],
            [
                'name' => 'Self-Harm / Suicidal Ideation Risk',
                'slug' => Str::slug('Self-Harm / Suicidal Ideation Risk'),
                'h1' => 'Self-Harm / Suicidal Ideation Risk',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Self-harm and suicidal ideation are serious mental health concerns involving emotional distress, overwhelming psychological pain, thoughts of self-injury, or thoughts about ending one’s life. These conditions may occur in individuals experiencing depression, anxiety, trauma, substance use disorders, personality disorders, chronic stress, or other mental health challenges. Early identification, emotional support, crisis intervention, and professional mental healthcare are essential to ensure safety, recovery, and long-term well-being.',
                'about_more' => '',
                'overview' => 'Self-harm and suicidal ideation are serious mental health concerns involving emotional distress, overwhelming psychological pain, thoughts of self-injury, or thoughts about ending one’s life. These conditions may occur in individuals experiencing depression, anxiety, trauma, substance use disorders, personality disorders, chronic stress, or other mental health challenges. Early identification, emotional support, crisis intervention, and professional mental healthcare are essential to ensure safety, recovery, and long-term well-being.',
                'symptoms' => [
            ['value' => 'Persistent sadness, hopelessness, or emotional numbness'],
            ['value' => 'Thoughts of self-harm, suicide, or feeling like a burden'],
            ['value' => 'Withdrawal from family, friends, or social activities'],
            ['value' => 'Sudden mood changes, irritability, or emotional instability'],
            ['value' => 'Self-injurious behaviors, sleep disturbances, or loss of interest in daily activities'],
            ['value' => 'Common Causes'],
            ['value' => 'Depression, anxiety, or other psychiatric disorders'],
            ['value' => 'Emotional trauma, abuse, or chronic stress'],
            ['value' => 'Substance use disorders or unhealthy coping mechanisms'],
            ['value' => 'Social isolation, relationship difficulties, or major life changes'],
            ['value' => 'Chronic illness, pain conditions, or overwhelming emotional distress'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Increased risk of self-injury or suicide attempts'],
            ['value' => 'Worsening depression, anxiety, or emotional instability'],
            ['value' => 'Social withdrawal and impaired daily functioning'],
            ['value' => 'Substance misuse and unhealthy coping behaviors'],
            ['value' => 'Serious physical harm or life-threatening mental health emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for self-harm and suicidal ideation focuses on ensuring immediate safety, emotional stabilization, and long-term mental health support. Management may include crisis intervention, psychiatric evaluation, psychotherapy such as cognitive behavioral therapy (CBT) or dialectical behavior therapy (DBT), medication management for underlying psychiatric conditions, stress management, emotional support programs, and rehabilitation-based mental healthcare. Family involvement, safety planning, support groups, and long-term counseling are also important in promoting emotional recovery and preventing relapse.'],
            ['value' => 'Regular psychiatric and psychological follow-up care'],
            ['value' => 'Continuous monitoring of emotional well-being and safety concerns'],
            ['value' => 'Development of coping strategies and stress management skills'],
            ['value' => 'Family education and emotional support involvement'],
            ['value' => 'Long-term therapy, crisis support, and relapse prevention planning when required'],
        ],
                'recovery' => 'The long-term outlook for individuals experiencing self-harm or suicidal ideation can improve significantly with early intervention, compassionate support, professional treatment, and continuous mental healthcare. Psychotherapy, medication adherence when prescribed, strong social support systems, healthy coping strategies, stress reduction, and regular follow-up play a vital role in emotional recovery, resilience building, improved daily functioning, and overall quality of life. __________________ 19. Grief and Bereavement Complications Grief and Bereavement Complications',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Self-Harm / Suicidal Ideation Risk',
                'meta_description' => 'Self-harm and suicidal ideation are serious mental health concerns involving emotional distress, overwhelming psychological pain, thoughts of self-injury, or th',
                'meta_keywords' => '',
            ]
        );
    }
}
