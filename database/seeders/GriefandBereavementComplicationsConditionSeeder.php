<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GriefandBereavementComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Grief and Bereavement Complications')],
            [
                'name' => 'Grief and Bereavement Complications',
                'slug' => Str::slug('Grief and Bereavement Complications'),
                'h1' => 'Grief and Bereavement Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Grief and bereavement complications are emotional and psychological conditions that occur when an individual experiences prolonged, intense, or overwhelming distress following the loss of a loved one, relationship, health condition, or major life change. While grief is a natural emotional response to loss, some individuals may develop complicated grief or prolonged bereavement reactions that significantly affect mental health, physical well-being, social functioning, and daily life.',
                'about_more' => 'Child and adolescent behavioral disorders are mental health conditions that affect a young person’s emotions, behavior, social interactions, and ability to function effectively at home, school, or in social settings. These disorders may involve difficulties with attention, emotional control, communication, impulsive behavior, aggression, or rule-following. Early identification and supportive care are important to help children and adolescents develop healthy coping, learning, and social skills.',
                'overview' => 'Grief and bereavement complications are emotional and psychological conditions that occur when an individual experiences prolonged, intense, or overwhelming distress following the loss of a loved one, relationship, health condition, or major life change. While grief is a natural emotional response to loss, some individuals may develop complicated grief or prolonged bereavement reactions that significantly affect mental health, physical well-being, social functioning, and daily life. Child and adolescent behavioral disorders are mental health conditions that affect a young person’s emotions, behavior, social interactions, and ability to function effectively at home, school, or in social settings. These disorders may involve difficulties with attention, emotional control, communication, impulsive behavior, aggression, or rule-following. Early identification and supportive care are important to help children and adolescents develop healthy coping, learning, and social skills.',
                'symptoms' => [
            ['value' => 'Persistent sadness, emptiness, or emotional pain'],
            ['value' => 'Difficulty accepting or coping with the loss'],
            ['value' => 'Sleep disturbances, fatigue, or loss of appetite'],
            ['value' => 'Anxiety, guilt, anger, or emotional numbness'],
            ['value' => 'Social withdrawal, difficulty concentrating, or loss of interest in daily activities'],
            ['value' => 'Common Causes'],
            ['value' => 'Death of a loved one or significant personal loss'],
            ['value' => 'Sudden traumatic events or unexpected bereavement'],
            ['value' => 'Loss of relationships, employment, or major life roles'],
            ['value' => 'Chronic stress, emotional trauma, or unresolved psychological issues'],
            ['value' => 'Limited social support or difficulty coping with emotional distress'],
            ['value' => 'Frequent anger, irritability, or emotional outbursts'],
            ['value' => 'Difficulty following rules or instructions'],
            ['value' => 'Aggressive, impulsive, or disruptive behavior'],
            ['value' => 'Trouble concentrating, learning, or socializing with others'],
            ['value' => 'Withdrawal from family, friends, or school activities'],
        ],
                'causes' => [
            ['value' => 'Genetic or family history of mental health conditions'],
            ['value' => 'Emotional trauma, neglect, or stressful life events'],
            ['value' => 'Learning difficulties or developmental disorders'],
            ['value' => 'Family conflict, bullying, or social pressure'],
            ['value' => 'Brain development differences and environmental influences'],
        ],
                'risks' => [
            ['value' => 'Depression, anxiety, or prolonged emotional distress'],
            ['value' => 'Sleep disturbances and chronic fatigue'],
            ['value' => 'Social isolation and reduced daily functioning'],
            ['value' => 'Increased risk of substance misuse or unhealthy coping behaviors'],
            ['value' => 'Physical health decline related to chronic stress and emotional burden'],
            ['value' => 'Poor academic performance and learning difficulties'],
            ['value' => 'Relationship and social interaction problems'],
            ['value' => 'Anxiety, depression, or emotional distress'],
            ['value' => 'Risk-taking behavior or substance misuse during adolescence'],
            ['value' => 'Difficulty managing emotions and behavior into adulthood'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for grief and bereavement complications focuses on emotional healing, coping support, and restoration of daily functioning. Management may include grief counseling, psychotherapy such as cognitive behavioral therapy (CBT), support groups, stress management programs, mindfulness practices, emotional wellness therapy, and psychiatric care when severe depression or anxiety is present. Family support, social connection, healthy routines, and long-term psychological follow-up also play an important role in promoting emotional recovery and resilience.'],
            ['value' => 'Regular psychological and emotional wellness follow-up'],
            ['value' => 'Encouragement of healthy coping strategies and social support'],
            ['value' => 'Monitoring for depression, anxiety, or prolonged grief symptoms'],
            ['value' => 'Stress management, sleep improvement, and self-care guidance'],
            ['value' => 'Long-term counseling and emotional rehabilitation support when required'],
            ['value' => 'Behavioral therapy and psychological counseling'],
            ['value' => 'Cognitive Behavioral Therapy (CBT) and emotional support programs'],
            ['value' => 'Parent guidance and family counseling'],
            ['value' => 'Educational support and social skills training'],
            ['value' => 'Medications when recommended for associated mental health conditions'],
        ],
                'recovery' => 'The long-term outlook for grief and bereavement complications is generally positive with compassionate support, early mental healthcare intervention, and healthy coping strategies. Counseling, emotional support systems, psychotherapy, stress reduction, healthy lifestyle habits, and regular follow-up significantly help individuals process grief, improve emotional resilience, restore daily functioning, and enhance overall quality of life. ___________________ 20. Child & Adolescent Behavioral Disorders Child & Adolescent Behavioral Disorders Recovery and long-term improvement are possible with early diagnosis, consistent support, and individualized treatment plans. Many children and adolescents benefit from therapy, structured routines, educational assistance, and positive family involvement. Ongoing mental health care and supportive environments can help improve emotional regulation, behavior, social skills, and overall quality of life. __________________ 21.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Grief and Bereavement Complications',
                'meta_description' => 'Grief and bereavement complications are emotional and psychological conditions that occur when an individual experiences prolonged, intense, or overwhelming dis',
                'meta_keywords' => '',
            ]
        );
    }
}
