<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GrowthDisordersShortStatureGigantismConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Growth Disorders (Short Stature, Gigantism)')],
            [
                'name' => 'Growth Disorders (Short Stature, Gigantism)',
                'slug' => Str::slug('Growth Disorders (Short Stature, Gigantism)'),
                'h1' => 'Growth Disorders (Short Stature, Gigantism)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Growth disorders are endocrine and developmental conditions that affect normal physical growth and height progression in children and adolescents. Short stature occurs when a child’s height is significantly below the average for age and gender, while gigantism results from excessive growth hormone production causing abnormal height and body growth. These disorders may arise due to hormonal imbalance, genetic conditions, nutritional deficiencies, chronic illnesses, or abnormalities affecting the pituitary gland and growth regulation. Early diagnosis and specialized endocrine care are important to support healthy growth and overall development.',
                'about_more' => '',
                'overview' => 'Growth disorders are endocrine and developmental conditions that affect normal physical growth and height progression in children and adolescents. Short stature occurs when a child’s height is significantly below the average for age and gender, while gigantism results from excessive growth hormone production causing abnormal height and body growth. These disorders may arise due to hormonal imbalance, genetic conditions, nutritional deficiencies, chronic illnesses, or abnormalities affecting the pituitary gland and growth regulation. Early diagnosis and specialized endocrine care are important to support healthy growth and overall development.',
                'symptoms' => [
            ['value' => 'Abnormal growth patterns or height changes'],
            ['value' => 'Delayed growth, puberty, or developmental milestones'],
            ['value' => 'Enlarged hands, feet, or changes in facial features'],
            ['value' => 'Fatigue, muscle weakness, or joint pain'],
            ['value' => 'Headaches, vision disturbances, or hormonal imbalance symptoms'],
        ],
                'causes' => [
            ['value' => 'Growth hormone deficiency or excess growth hormone production'],
            ['value' => 'Pituitary gland disorders or tumors affecting hormone regulation'],
            ['value' => 'Genetic or inherited growth-related conditions'],
            ['value' => 'Chronic illnesses, malnutrition, or metabolic disorders'],
            ['value' => 'Hormonal imbalance affecting growth and puberty development'],
        ],
                'risks' => [
            ['value' => 'Delayed physical and emotional development'],
            ['value' => 'Bone and joint problems affecting mobility and posture'],
            ['value' => 'Hormonal imbalance impacting puberty and reproductive health'],
            ['value' => 'Cardiovascular or metabolic complications in gigantism'],
            ['value' => 'Reduced self-esteem, social stress, or psychological challenges'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for growth disorders focuses on correcting hormonal imbalance, supporting healthy growth, improving physical development, and preventing complications. Management may include growth hormone therapy, medications to control excessive hormone production, nutritional counseling, treatment of underlying endocrine disorders, and regular growth monitoring. Patients with pituitary tumors or severe hormonal abnormalities may require surgery, radiotherapy, or specialized endocrine intervention. Psychological counseling, developmental support, exercise programs, and long-term endocrinology follow-up are also important to support overall health and emotional well-being.'],
        ],
                'recovery' => 'The long-term outlook for growth disorders depends on the underlying cause, severity of hormonal imbalance, timing of diagnosis, and response to treatment. Early intervention, proper hormonal therapy, healthy nutrition, regular medical follow-up, emotional support, and continuous endocrine care significantly help improve growth outcomes, support normal physical development, reduce complications, and enhance overall quality of life. ___________ 18. Hyperprolactinemia Hyperprolactinemia',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Growth Disorders (Short Stature, Gigantism)',
                'meta_description' => 'Growth disorders are endocrine and developmental conditions that affect normal physical growth and height progression in children and adolescents. Short stature',
                'meta_keywords' => '',
            ]
        );
    }
}
