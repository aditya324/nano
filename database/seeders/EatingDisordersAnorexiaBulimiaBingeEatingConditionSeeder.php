<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EatingDisordersAnorexiaBulimiaBingeEatingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Eating Disorders (Anorexia, Bulimia, Binge Eating)')],
            [
                'name' => 'Eating Disorders (Anorexia, Bulimia, Binge Eating)',
                'slug' => Str::slug('Eating Disorders (Anorexia, Bulimia, Binge Eating)'),
                'h1' => 'Eating Disorders (Anorexia, Bulimia, Binge Eating)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Eating disorders are serious mental health conditions characterized by unhealthy eating behaviors, distorted body image, and abnormal relationships with food, weight, and self-esteem. Common eating disorders include Anorexia Nervosa, Bulimia Nervosa, and Binge Eating Disorder. These conditions can affect physical health, emotional well-being, nutrition, metabolism, and overall quality of life if not identified and treated early.',
                'about_more' => 'Personality disorders are mental health conditions characterized by persistent patterns of thinking, emotional responses, and behaviors that differ significantly from social expectations and interfere with daily life. These patterns can affect relationships, work performance, emotional regulation, and the ability to function effectively in personal and social situations. Personality disorders often develop over time and may impact how individuals perceive themselves and interact with others.',
                'overview' => 'Eating disorders are serious mental health conditions characterized by unhealthy eating behaviors, distorted body image, and abnormal relationships with food, weight, and self-esteem. Common eating disorders include Anorexia Nervosa, Bulimia Nervosa, and Binge Eating Disorder. These conditions can affect physical health, emotional well-being, nutrition, metabolism, and overall quality of life if not identified and treated early. Personality disorders are mental health conditions characterized by persistent patterns of thinking, emotional responses, and behaviors that differ significantly from social expectations and interfere with daily life. These patterns can affect relationships, work performance, emotional regulation, and the ability to function effectively in personal and social situations. Personality disorders often develop over time and may impact how individuals perceive themselves and interact with others.',
                'symptoms' => [
            ['value' => 'Extreme concern about body weight or appearance'],
            ['value' => 'Restrictive eating habits or episodes of overeating'],
            ['value' => 'Frequent dieting, food avoidance, or binge eating behaviors'],
            ['value' => 'Fatigue, weakness, dizziness, or nutritional deficiencies'],
            ['value' => 'Emotional distress, anxiety, depression, or social withdrawal related to eating habits'],
            ['value' => 'Common Causes'],
            ['value' => 'Psychological factors such as low self-esteem, anxiety, or depression'],
            ['value' => 'Social and cultural pressure related to body image and appearance'],
            ['value' => 'Genetic and family history of mental health or eating disorders'],
            ['value' => 'Emotional stress, trauma, or unhealthy coping mechanisms'],
            ['value' => 'Biological and hormonal factors affecting appetite and behavior'],
            ['value' => 'Difficulty maintaining healthy relationships'],
            ['value' => 'Intense or unstable emotions and mood changes'],
            ['value' => 'Impulsive, socially inappropriate, or risky behavior'],
            ['value' => 'Distorted self-image or low self-esteem'],
            ['value' => 'Trouble managing anger, stress, or emotional reactions'],
        ],
                'causes' => [
            ['value' => 'Childhood trauma or emotionally distressing experiences'],
            ['value' => 'Genetic or family history of mental health conditions'],
            ['value' => 'Verbal, emotional, or physical abuse'],
            ['value' => 'Brain chemistry and developmental changes'],
            ['value' => 'Environmental, social, or cultural influences'],
        ],
                'risks' => [
            ['value' => 'Severe nutritional deficiencies and weight-related complications'],
            ['value' => 'Heart problems, hormonal imbalance, and digestive issues'],
            ['value' => 'Anxiety, depression, or self-harm risk'],
            ['value' => 'Weak immune system, bone loss, or muscle weakness'],
            ['value' => 'Long-term physical and emotional health complications if untreated'],
            ['value' => 'Difficulty maintaining social and personal relationships'],
            ['value' => 'Anxiety, depression, or other mental health conditions'],
            ['value' => 'Social isolation and emotional instability'],
            ['value' => 'Occupational, academic, or legal difficulties'],
            ['value' => 'Increased risk of substance misuse or self-harm behaviors'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for eating disorders usually involves a multidisciplinary approach focused on restoring healthy eating behaviors, improving emotional well-being, and addressing underlying psychological concerns. Treatment may include psychotherapy such as cognitive behavioral therapy (CBT), nutritional counseling, supervised meal planning, family therapy, stress management programs, and psychiatric support. Medications may also be prescribed in selected cases to manage anxiety, depression, or associated mental health conditions. Early intervention, emotional support, and long-term follow-up play an important role in recovery and relapse prevention.'],
            ['value' => 'Regular psychological and nutritional follow-up care'],
            ['value' => 'Monitoring weight, nutritional status, and emotional well-being'],
            ['value' => 'Encouragement of healthy eating patterns and lifestyle habits'],
            ['value' => 'Family education and emotional support programs'],
            ['value' => 'Long-term counseling and relapse prevention strategies when required'],
            ['value' => 'Psychotherapy and long-term counseling support'],
            ['value' => 'Cognitive Behavioral Therapy (CBT) and behavioral interventions'],
            ['value' => 'Medications to manage anxiety, depression, or mood symptoms when needed'],
            ['value' => 'Emotional regulation and stress management programs'],
            ['value' => 'Family support, rehabilitation, and ongoing mental health follow-up care'],
        ],
                'recovery' => 'The long-term outlook for eating disorders is generally positive with early diagnosis, proper treatment, emotional support, and continuous mental healthcare. Psychotherapy, nutritional rehabilitation, healthy lifestyle habits, family involvement, stress management, and regular follow-up significantly help improve physical health, emotional stability, self-esteem, eating behaviors, and overall quality of life. ___________ 10. Personality Disorders Personality Disorders Managing personality disorders often requires long-term mental health support, therapy, and lifestyle adjustments. With early diagnosis, appropriate treatment, and continuous emotional support, many individuals can improve their coping skills, relationships, emotional regulation, and overall quality of life. Regular therapy and supportive care play an important role in long-term mental wellness and personal growth. ____________',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Eating Disorders (Anorexia, Bulimia, Binge Eating)',
                'meta_description' => 'Eating disorders are serious mental health conditions characterized by unhealthy eating behaviors, distorted body image, and abnormal relationships with food, w',
                'meta_keywords' => '',
            ]
        );
    }
}
