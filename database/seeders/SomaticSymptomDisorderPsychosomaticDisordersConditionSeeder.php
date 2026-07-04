<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SomaticSymptomDisorderPsychosomaticDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Somatic Symptom Disorder / Psychosomatic Disorders')],
            [
                'name' => 'Somatic Symptom Disorder / Psychosomatic Disorders',
                'slug' => Str::slug('Somatic Symptom Disorder / Psychosomatic Disorders'),
                'h1' => 'Somatic Symptom Disorder / Psychosomatic Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Somatic Symptom Disorder and psychosomatic disorders are mental health conditions in which emotional stress, psychological factors, anxiety, or underlying psychiatric concerns contribute to physical symptoms that significantly affect daily life and well-being. Individuals may experience persistent bodily symptoms such as pain, fatigue, gastrointestinal discomfort, or neurological complaints that cannot be fully explained by medical findings alone or are worsened by emotional distress. These conditions can affect physical, emotional, social, and occupational functioning if not appropriately managed.',
                'about_more' => 'Adjustment Disorder is a mental health condition that develops when a person experiences difficulty coping with a stressful life event or major change. The emotional or behavioral response is often stronger than expected and may interfere with daily activities, relationships, work, or academic performance. Symptoms usually begin within a few months of the stressful event and can affect both emotional and physical well-being.',
                'overview' => 'Somatic Symptom Disorder and psychosomatic disorders are mental health conditions in which emotional stress, psychological factors, anxiety, or underlying psychiatric concerns contribute to physical symptoms that significantly affect daily life and well-being. Individuals may experience persistent bodily symptoms such as pain, fatigue, gastrointestinal discomfort, or neurological complaints that cannot be fully explained by medical findings alone or are worsened by emotional distress. These conditions can affect physical, emotional, social, and occupational functioning if not appropriately managed. Adjustment Disorder is a mental health condition that develops when a person experiences difficulty coping with a stressful life event or major change. The emotional or behavioral response is often stronger than expected and may interfere with daily activities, relationships, work, or academic performance. Symptoms usually begin within a few months of the stressful event and can affect both emotional and physical well-being.',
                'symptoms' => [
            ['value' => 'Persistent physical pain or discomfort without a clear medical cause'],
            ['value' => 'Excessive worry or anxiety about physical health and symptoms'],
            ['value' => 'Fatigue, weakness, or low energy levels'],
            ['value' => 'Headaches, stomach problems, or unexplained body aches'],
            ['value' => 'Emotional distress, sleep disturbances, or difficulty functioning in daily life'],
            ['value' => 'Common Causes'],
            ['value' => 'Chronic stress, anxiety, or depression'],
            ['value' => 'Emotional trauma or unresolved psychological conflicts'],
            ['value' => 'Heightened sensitivity to physical sensations and bodily changes'],
            ['value' => 'Family history of mental health or psychosomatic conditions'],
            ['value' => 'Long-term emotional strain, social stress, or unhealthy coping mechanisms'],
            ['value' => 'Feeling sad, hopeless, or emotionally overwhelmed'],
            ['value' => 'Anxiety, nervousness, or excessive worry'],
            ['value' => 'Irritability, impulsive behavior, or emotional outbursts'],
            ['value' => 'Difficulty sleeping, concentrating, or relaxing'],
            ['value' => 'Physical symptoms such as headaches, body aches, or heart palpitations'],
        ],
                'causes' => [
            ['value' => 'Relationship problems, separation, or divorce'],
            ['value' => 'Loss of a loved one or emotional trauma'],
            ['value' => 'Major life changes such as marriage, parenthood, or retirement'],
            ['value' => 'Academic, workplace, or financial stress'],
            ['value' => 'Lack of emotional support or difficulty coping with stress'],
        ],
                'risks' => [
            ['value' => 'Reduced quality of life and impaired daily functioning'],
            ['value' => 'Frequent healthcare visits and unnecessary medical investigations'],
            ['value' => 'Anxiety, depression, or worsening emotional health'],
            ['value' => 'Sleep disturbances and chronic fatigue'],
            ['value' => 'Social withdrawal, occupational difficulties, or relationship problems'],
            ['value' => 'Anxiety, depression, or emotional instability'],
            ['value' => 'Social withdrawal and relationship difficulties'],
            ['value' => 'Alcohol or substance misuse as a coping mechanism'],
            ['value' => 'Reduced work, school, or daily functioning'],
            ['value' => 'Risk of self-harm or suicidal thoughts in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for somatic symptom disorder and psychosomatic disorders focuses on addressing both physical symptoms and underlying emotional or psychological factors. Management may include psychotherapy such as cognitive behavioral therapy (CBT), stress management techniques, relaxation therapy, mindfulness practices, psychiatric counseling, lifestyle modification, and medications when anxiety or depression is present. Rehabilitation programs, sleep management, emotional support, and multidisciplinary mental healthcare also help improve symptom control and overall well-being. Early intervention and long-term psychological support are important for improving coping skills and reducing symptom-related distress.'],
            ['value' => 'Regular mental health and psychological follow-up care'],
            ['value' => 'Monitoring emotional well-being and physical symptom progression'],
            ['value' => 'Encouragement of healthy sleep, exercise, and stress management habits'],
            ['value' => 'Counseling and emotional support programs for coping improvement'],
            ['value' => 'Long-term psychotherapy and multidisciplinary mental wellness support when required'],
            ['value' => 'Psychological counseling and supportive psychotherapy'],
            ['value' => 'Cognitive Behavioral Therapy (CBT) and stress management techniques'],
            ['value' => 'Emotional support and coping skill development'],
            ['value' => 'Relaxation exercises, healthy lifestyle habits, and routine management'],
            ['value' => 'Medications for anxiety, depression, or sleep disturbances when required'],
        ],
                'recovery' => 'The long-term outlook for somatic symptom disorder and psychosomatic disorders is generally positive with early diagnosis, proper mental healthcare, emotional support, and consistent treatment. Psychotherapy, stress reduction, healthy lifestyle habits, social support, and regular follow-up significantly help improve emotional resilience, reduce physical symptom distress, enhance daily functioning, and improve overall quality of life. ___________________ 17. Adjustment Disorders Adjustment Disorder Recovery from Adjustment Disorder is generally positive with timely emotional support, counseling, and healthy coping strategies. Many individuals improve significantly once the stressful situation is managed or emotional resilience is strengthened. Early intervention, supportive relationships, and mental health care can help restore emotional balance and improve overall quality of life. ________________ 18. Self-Harm / Suicidal Ideation Risk Self-Harm / Suicidal Ideation Risk',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Somatic Symptom Disorder / Psychosomatic Disorders',
                'meta_description' => 'Somatic Symptom Disorder and psychosomatic disorders are mental health conditions in which emotional stress, psychological factors, anxiety, or underlying psych',
                'meta_keywords' => '',
            ]
        );
    }
}
