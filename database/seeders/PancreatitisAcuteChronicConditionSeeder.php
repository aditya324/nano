<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreatitisAcuteChronicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pancreatitis (Acute / Chronic)')],
            [
                'name' => 'Pancreatitis (Acute / Chronic)',
                'slug' => Str::slug('Pancreatitis (Acute / Chronic)'),
                'h1' => 'Pancreatitis (Acute / Chronic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pancreatitis is inflammation of the pancreas that may occur suddenly (acute) or persist over time (chronic), affecting digestion and blood sugar regulation.',
                'about_more' => '',
                'overview' => 'Pancreatitis is inflammation of the pancreas that may occur suddenly (acute) or persist over time (chronic), affecting digestion and blood sugar regulation.',
                'symptoms' => [
            ['value' => 'Severe upper abdominal pain'],
            ['value' => 'Pain radiating to the back'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever and abdominal tenderness'],
            ['value' => 'Weight loss in chronic pancreatitis'],
        ],
                'causes' => [
            ['value' => 'Gallstones blocking pancreatic ducts'],
            ['value' => 'Excess alcohol consumption'],
            ['value' => 'High triglyceride levels'],
            ['value' => 'Pancreatic injury or trauma'],
            ['value' => 'Certain medications and infections'],
        ],
                'risks' => [
            ['value' => 'Pancreatic necrosis or infection'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Malabsorption and nutritional deficiency'],
            ['value' => 'Pancreatic pseudocyst formation'],
            ['value' => 'Organ failure in severe attacks'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hospitalization and fluid therapy'],
            ['value' => 'Pain management and bowel rest'],
            ['value' => 'Nutritional and dietary support'],
            ['value' => 'Treatment of gallstones or alcohol dependence'],
            ['value' => 'Surgery or endoscopic procedures if needed'],
        ],
                'recovery' => 'Mild cases recover well with treatment, while chronic pancreatitis may require long-term management and lifestyle modifications.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Pancreatitis (Acute / Chronic)',
                'meta_description' => 'Pancreatitis is inflammation of the pancreas that may occur suddenly (acute) or persist over time (chronic), affecting digestion and blood sugar regulation.',
                'meta_keywords' => '',
            ]
        );
    }
}
