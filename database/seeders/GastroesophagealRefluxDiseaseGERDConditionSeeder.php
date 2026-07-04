<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastroesophagealRefluxDiseaseGERDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastroesophageal Reflux Disease (GERD)')],
            [
                'name' => 'Gastroesophageal Reflux Disease (GERD)',
                'slug' => Str::slug('Gastroesophageal Reflux Disease (GERD)'),
                'h1' => 'Gastroesophageal Reflux Disease (GERD)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastroesophageal Reflux Disease (GERD) is a chronic digestive condition in which stomach acid repeatedly flows backward into the esophagus. This acid reflux irritates the lining of the food pipe and may lead to inflammation, ulcers, and long-term complications if untreated.',
                'about_more' => '',
                'overview' => 'Gastroesophageal Reflux Disease (GERD) is a chronic digestive condition in which stomach acid repeatedly flows backward into the esophagus. This acid reflux irritates the lining of the food pipe and may lead to inflammation, ulcers, and long-term complications if untreated.',
                'symptoms' => [
            ['value' => 'Burning sensation in the chest (heartburn)'],
            ['value' => 'Sour or acidic taste in the mouth'],
            ['value' => 'Regurgitation of food or acid'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Chronic cough or throat irritation'],
        ],
                'causes' => [
            ['value' => 'Weak lower esophageal sphincter'],
            ['value' => 'Obesity and increased abdominal pressure'],
            ['value' => 'Spicy, oily, or acidic foods'],
            ['value' => 'Smoking and alcohol consumption'],
            ['value' => 'Hiatal hernia and delayed stomach emptying'],
        ],
                'risks' => [
            ['value' => 'Esophagitis and ulcer formation'],
            ['value' => 'Esophageal narrowing (stricture)'],
            ['value' => 'Barrett’s esophagus'],
            ['value' => 'Chronic cough and asthma worsening'],
            ['value' => 'Increased risk of esophageal cancer'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifestyle and dietary modifications'],
            ['value' => 'Antacid and acid-suppressing medications'],
            ['value' => 'Weight reduction and smoking cessation'],
            ['value' => 'Endoscopic evaluation when needed'],
            ['value' => 'Anti-reflux surgery in severe cases'],
        ],
                'recovery' => 'Most patients improve significantly with proper lifestyle changes and medication. Early treatment helps prevent long-term complications.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Gastroesophageal Reflux Disease (GERD)',
                'meta_description' => 'Gastroesophageal Reflux Disease (GERD) is a chronic digestive condition in which stomach acid repeatedly flows backward into the esophagus. This acid reflux irr',
                'meta_keywords' => '',
            ]
        );
    }
}
