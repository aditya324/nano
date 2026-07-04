<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GIMotilityTestingEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('GI Motility Testing Equipment')],
            [
                'name' => 'GI Motility Testing Equipment',
                'slug' => Str::slug('GI Motility Testing Equipment'),
                'h1' => 'GI Motility Testing Equipment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'GI motility testing equipment evaluates movement and function of the digestive tract to diagnose swallowing disorders, reflux disease, constipation, and intestinal motility problems.',
                'about_more' => 'These tests assess how effectively food and waste move through the gastrointestinal system.',
                'overview' => 'Services and capabilities include: Esophageal manometry Gastric emptying studies Colonic transit testing Anorectal manometry Functional motility evaluation Testing helps guide treatment planning for chronic digestive symptoms. Symptoms Indicating Evaluation Difficulty swallowing Chronic constipation Persistent bloating Severe reflux symptoms Unexplained abdominal discomfort',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Mild discomfort during catheter placement'],
            ['value' => 'Temporary throat irritation'],
            ['value' => 'Gagging sensation'],
            ['value' => 'Rare nasal irritation or bleeding'],
            ['value' => 'Anxiety during testing'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Resume normal diet unless instructed otherwise'],
            ['value' => 'Follow medication advice carefully'],
            ['value' => 'Attend review for test interpretation'],
            ['value' => 'Maintain symptom diary if advised'],
            ['value' => 'Continue lifestyle modifications'],
        ],
                'recovery' => 'Accurate motility testing improves diagnosis and supports targeted treatment for chronic gastrointestinal disorders, leading to better symptom control and quality of life.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'GI Motility Testing Equipment',
                'meta_description' => 'GI motility testing equipment evaluates movement and function of the digestive tract to diagnose swallowing disorders, reflux disease, constipation, and intesti',
                'meta_keywords' => '',
            ]
        );
    }
}
