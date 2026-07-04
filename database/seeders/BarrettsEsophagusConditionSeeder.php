<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BarrettsEsophagusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Barrett’s Esophagus')],
            [
                'name' => 'Barrett’s Esophagus',
                'slug' => Str::slug('Barrett’s Esophagus'),
                'h1' => 'Barrett’s Esophagus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Barrett’s esophagus is a condition where chronic acid reflux changes the lining of the lower esophagus, increasing cancer risk.',
                'about_more' => '',
                'overview' => 'Barrett’s esophagus is a condition where chronic acid reflux changes the lining of the lower esophagus, increasing cancer risk.',
                'symptoms' => [
            ['value' => 'Chronic heartburn'],
            ['value' => 'Acid regurgitation'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Chest discomfort'],
            ['value' => 'Symptoms of long-standing GERD'],
        ],
                'causes' => [
            ['value' => 'Chronic untreated GERD'],
            ['value' => 'Obesity'],
            ['value' => 'Smoking'],
            ['value' => 'Hiatal hernia'],
            ['value' => 'Long-term acid exposure'],
        ],
                'risks' => [
            ['value' => 'Esophageal ulcers'],
            ['value' => 'Precancerous cellular changes'],
            ['value' => 'Esophageal adenocarcinoma'],
            ['value' => 'Persistent reflux symptoms'],
            ['value' => 'Swallowing difficulties'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Long-term acid suppression therapy'],
            ['value' => 'Lifestyle and dietary changes'],
            ['value' => 'Regular endoscopic surveillance'],
            ['value' => 'Endoscopic ablation procedures'],
            ['value' => 'Surgery in selected patients'],
        ],
                'recovery' => 'Careful monitoring and treatment help reduce cancer risk and control reflux symptoms effectively.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Barrett’s Esophagus',
                'meta_description' => 'Barrett’s esophagus is a condition where chronic acid reflux changes the lining of the lower esophagus, increasing cancer risk.',
                'meta_keywords' => '',
            ]
        );
    }
}
