<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IrritableBowelSyndromeIBSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Irritable Bowel Syndrome (IBS)')],
            [
                'name' => 'Irritable Bowel Syndrome (IBS)',
                'slug' => Str::slug('Irritable Bowel Syndrome (IBS)'),
                'h1' => 'Irritable Bowel Syndrome (IBS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Irritable bowel syndrome is a functional gastrointestinal disorder affecting bowel habits and abdominal comfort without structural intestinal disease.',
                'about_more' => '',
                'overview' => 'Irritable bowel syndrome is a functional gastrointestinal disorder affecting bowel habits and abdominal comfort without structural intestinal disease.',
                'symptoms' => [
            ['value' => 'Abdominal pain or cramping'],
            ['value' => 'Bloating and gas formation'],
            ['value' => 'Diarrhea or constipation'],
            ['value' => 'Alternating bowel habits'],
            ['value' => 'Relief of pain after bowel movement'],
        ],
                'causes' => [
            ['value' => 'Stress and anxiety'],
            ['value' => 'Abnormal bowel motility'],
            ['value' => 'Food intolerance or dietary triggers'],
            ['value' => 'Gut-brain interaction disturbances'],
            ['value' => 'Previous gastrointestinal infections'],
        ],
                'risks' => [
            ['value' => 'Chronic discomfort and stress'],
            ['value' => 'Reduced quality of life'],
            ['value' => 'Sleep and emotional disturbances'],
            ['value' => 'Social embarrassment'],
            ['value' => 'Dietary restrictions and nutritional imbalance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dietary and lifestyle modifications'],
            ['value' => 'Stress reduction and counseling'],
            ['value' => 'Medications for bowel symptoms'],
            ['value' => 'Probiotics and fiber supplementation'],
            ['value' => 'Regular follow-up and reassurance'],
        ],
                'recovery' => 'Although IBS is a chronic condition, symptoms can usually be controlled effectively with lifestyle changes, stress management, and proper medical care.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Irritable Bowel Syndrome (IBS)',
                'meta_description' => 'Irritable bowel syndrome is a functional gastrointestinal disorder affecting bowel habits and abdominal comfort without structural intestinal disease.',
                'meta_keywords' => '',
            ]
        );
    }
}
