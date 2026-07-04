<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EsophagealStricturesMotilityDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Esophageal Strictures / Motility Disorders')],
            [
                'name' => 'Esophageal Strictures / Motility Disorders',
                'slug' => Str::slug('Esophageal Strictures / Motility Disorders'),
                'h1' => 'Esophageal Strictures / Motility Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Esophageal strictures are abnormal narrowing of the food pipe, while motility disorders affect the normal movement of food through the esophagus.',
                'about_more' => '',
                'overview' => 'Esophageal strictures are abnormal narrowing of the food pipe, while motility disorders affect the normal movement of food through the esophagus.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Food sticking in the chest'],
            ['value' => 'Chest pain after eating'],
            ['value' => 'Regurgitation of food'],
            ['value' => 'Weight loss in severe cases'],
        ],
                'causes' => [
            ['value' => 'Chronic acid reflux disease'],
            ['value' => 'Scarring after inflammation'],
            ['value' => 'Neuromuscular disorders'],
            ['value' => 'Esophageal tumors'],
            ['value' => 'Previous surgery or radiation'],
        ],
                'risks' => [
            ['value' => 'Severe swallowing difficulty'],
            ['value' => 'Malnutrition and dehydration'],
            ['value' => 'Aspiration pneumonia'],
            ['value' => 'Esophageal ulceration'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Endoscopic dilation procedures'],
            ['value' => 'Acid suppression therapy'],
            ['value' => 'Medications for motility disorders'],
            ['value' => 'Nutritional support'],
            ['value' => 'Surgery for severe cases'],
        ],
                'recovery' => 'Many patients improve significantly with endoscopic and medical treatment. Long-term follow-up may be necessary.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Esophageal Strictures / Motility Disorders',
                'meta_description' => 'Esophageal strictures are abnormal narrowing of the food pipe, while motility disorders affect the normal movement of food through the esophagus.',
                'meta_keywords' => '',
            ]
        );
    }
}
