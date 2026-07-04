<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PepticUlcerDiseasePerforatedPepticUlcerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peptic Ulcer Disease / Perforated Peptic Ulcer')],
            [
                'name' => 'Peptic Ulcer Disease / Perforated Peptic Ulcer',
                'slug' => Str::slug('Peptic Ulcer Disease / Perforated Peptic Ulcer'),
                'h1' => 'Peptic Ulcer Disease / Perforated Peptic Ulcer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peptic ulcer disease refers to sores or ulcers that develop in the lining of the stomach or upper part of the small intestine due to acid damage. A perforated peptic ulcer is a serious complication where the ulcer creates a hole in the stomach or intestinal wall, causing leakage into the abdominal cavity.',
                'about_more' => '',
                'overview' => 'Peptic ulcer disease refers to sores or ulcers that develop in the lining of the stomach or upper part of the small intestine due to acid damage. A perforated peptic ulcer is a serious complication where the ulcer creates a hole in the stomach or intestinal wall, causing leakage into the abdominal cavity.',
                'symptoms' => [
            ['value' => 'Burning or gnawing upper abdominal pain'],
            ['value' => 'Pain worsening on an empty stomach'],
            ['value' => 'Nausea and bloating'],
            ['value' => 'Vomiting or loss of appetite'],
            ['value' => 'Sudden severe abdominal pain in perforation cases'],
        ],
                'causes' => [
            ['value' => 'Helicobacter pylori bacterial infection'],
            ['value' => 'Long-term painkiller (NSAID) use'],
            ['value' => 'Excess acid production'],
            ['value' => 'Smoking and alcohol consumption'],
            ['value' => 'Severe stress and unhealthy diet habits'],
        ],
                'risks' => [
            ['value' => 'Gastrointestinal bleeding'],
            ['value' => 'Perforation causing peritonitis'],
            ['value' => 'Gastric outlet obstruction'],
            ['value' => 'Severe infection and sepsis'],
            ['value' => 'Shock due to internal bleeding or perforation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Endoscopy and imaging evaluation'],
            ['value' => 'Acid-reducing medications'],
            ['value' => 'Antibiotics for H. pylori infection'],
            ['value' => 'Emergency surgery for perforated ulcers'],
            ['value' => 'Lifestyle and dietary modification'],
        ],
                'recovery' => 'Most uncomplicated ulcers heal well with medication and lifestyle changes. Perforated ulcers require urgent surgery but recovery is good with timely treatment.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Peptic Ulcer Disease / Perforated Peptic Ulcer',
                'meta_description' => 'Peptic ulcer disease refers to sores or ulcers that develop in the lining of the stomach or upper part of the small intestine due to acid damage. A perforated p',
                'meta_keywords' => '',
            ]
        );
    }
}
