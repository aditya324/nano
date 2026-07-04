<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $title = 'Beyond BMI: Why Body Composition Matters More Than Your Weight';
        $slug = Str::slug($title);

        Blog::updateOrCreate(
            ['slug' => $slug],
            [
                'title' => $title,
                'slug' => $slug,
                'meta_title' => $title,
                'meta_description' => 'BMI has long been used to measure health, but it does not reflect true metabolic risk. Learn why body composition analysis provides deeper insights into fat, muscle, and overall health at Nano Hospitals.',
                'meta_keywords' => 'body composition analysis, BMI limitations, visceral fat, metabolic health, body fat percentage, muscle mass, preventive health screening, Nano Hospitals',
                'excerpt' => 'BMI alone cannot accurately measure health. Body composition analysis provides deeper insights into fat distribution, muscle mass, and metabolic risk for better preventive care.',
                'featured_image' => null,
                'is_published' => true,
                'published_at' => Carbon::now(),
                'content_blocks' => [

                    ['type' => 'heading', 'data' => ['text' => 'A Smarter Way to Measure Health at Nano Hospitals']],
                    ['type' => 'paragraph', 'data' => ['text' => 'For decades, Body Mass Index (BMI) has been used to measure health. However, modern research shows that BMI limitations in measuring health make it an incomplete indicator.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Today, doctors focus on body composition analysis for health to better understand metabolic risk.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Two people can have the same weight but very different levels of fat, muscle, and metabolic health.']],

                    ['type' => 'heading', 'data' => ['text' => 'The Problem with BMI']],
                    ['type' => 'paragraph', 'data' => ['text' => 'BMI calculates weight relative to height but cannot determine body structure.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'This means BMI cannot:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Differentiate fat from muscle'],
                                ['text' => 'Identify visceral fat'],
                                ['text' => 'Detect sarcopenia'],
                                ['text' => 'Assess bone health'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'Because of these limitations, many experts say BMI is outdated for measuring health risk.']],

                    ['type' => 'heading', 'data' => ['text' => 'What Body Composition Analysis Reveals']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Modern body composition analysis tests provide deeper insight into physical health.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Advanced body composition testing measures:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Body fat percentage'],
                                ['text' => 'Muscle mass'],
                                ['text' => 'Visceral fat levels'],
                                ['text' => 'Bone density'],
                                ['text' => 'Metabolic age'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'These measurements provide a more accurate metabolic health assessment than BMI alone.']],

                    ['type' => 'heading', 'data' => ['text' => 'Why Visceral Fat is Dangerous']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Visceral fat surrounds internal organs and plays a major role in chronic disease.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'High visceral fat levels increase risk of:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Heart disease'],
                                ['text' => 'Type 2 diabetes'],
                                ['text' => 'Fatty liver disease'],
                                ['text' => 'Hormonal imbalance'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'This explains why many people with normal weight still face serious metabolic risk.']],

                    ['type' => 'heading', 'data' => ['text' => 'Muscle Mass and Metabolism']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Healthy muscle mass plays a key role in metabolic function.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Higher muscle mass improves:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Blood sugar control'],
                                ['text' => 'Resting metabolic rate'],
                                ['text' => 'Joint stability'],
                                ['text' => 'Cardiovascular health'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'Maintaining the right muscle mass vs body weight balance is essential for long-term health.']],

                    ['type' => 'heading', 'data' => ['text' => 'Body Fat Percentage and Health Risk']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Doctors now evaluate body fat percentage and metabolic health to better predict disease risk.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'High body fat levels, especially visceral fat, are linked to:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Insulin resistance'],
                                ['text' => 'Inflammation'],
                                ['text' => 'Cardiovascular disease'],
                                ['text' => 'Hormonal imbalance'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'Understanding how body composition affects disease risk helps doctors create personalized health plans.']],

                    ['type' => 'heading', 'data' => ['text' => 'Women’s Health and Body Composition']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Hormonal changes after 40 often lead to increased fat accumulation and muscle loss.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Regular body composition testing for preventive health helps detect early risk factors such as:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Osteoporosis'],
                                ['text' => 'Metabolic syndrome'],
                                ['text' => 'Cardiovascular disease'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'Early detection allows targeted lifestyle intervention.']],

                    ['type' => 'heading', 'data' => ['text' => 'Why Body Composition is Better Than BMI']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Modern medicine increasingly emphasizes body composition vs BMI health measurement.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Body composition provides insights into:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Fat distribution'],
                                ['text' => 'Muscle balance'],
                                ['text' => 'Metabolic health'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'This approach supports better preventive care and personalized health strategies.']],

                    ['type' => 'heading', 'data' => ['text' => 'Move Beyond the Weighing Scale']],
                    ['type' => 'paragraph', 'data' => ['text' => 'The weighing scale does not tell the complete story of health.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Instead of focusing only on weight loss, modern healthcare emphasizes:']],
                    [
                        'type' => 'list',
                        'data' => [
                            'items' => [
                                ['text' => 'Fat reduction'],
                                ['text' => 'Muscle preservation'],
                                ['text' => 'Metabolic health improvement'],
                            ],
                        ],
                    ],
                    ['type' => 'paragraph', 'data' => ['text' => 'At Nano Hospitals, body composition analysis for preventive health screening helps individuals understand their true metabolic condition.']],

                    ['type' => 'heading', 'data' => ['text' => 'A New Era of Health Measurement']],
                    ['type' => 'paragraph', 'data' => ['text' => 'In 2026, the goal is not just losing weight — it is building metabolic strength.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'If you want to understand your real health status, consider body composition analysis testing as part of advanced health screening tests.']],
                    ['type' => 'paragraph', 'data' => ['text' => 'Book your comprehensive preventive health assessment at Nano Hospitals and move beyond BMI.']],

                ],
            ],
        );
    }
}