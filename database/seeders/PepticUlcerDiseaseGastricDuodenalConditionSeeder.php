<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PepticUlcerDiseaseGastricDuodenalConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peptic Ulcer Disease (Gastric / Duodenal)')],
            [
                'name' => 'Peptic Ulcer Disease (Gastric / Duodenal)',
                'slug' => Str::slug('Peptic Ulcer Disease (Gastric / Duodenal)'),
                'h1' => 'Peptic Ulcer Disease (Gastric / Duodenal)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peptic ulcer disease refers to open sores that develop in the lining of the stomach or upper small intestine due to acid-related damage.',
                'about_more' => '',
                'overview' => 'Peptic ulcer disease refers to open sores that develop in the lining of the stomach or upper small intestine due to acid-related damage.',
                'symptoms' => [
            ['value' => 'Burning abdominal pain'],
            ['value' => 'Bloating and indigestion'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Loss of appetite'],
            ['value' => 'Black stools or vomiting blood in severe cases'],
        ],
                'causes' => [
            ['value' => 'Helicobacter pylori infection'],
            ['value' => 'Excessive painkiller (NSAID) use'],
            ['value' => 'Smoking and alcohol intake'],
            ['value' => 'Stress and irregular meals'],
            ['value' => 'Excess stomach acid production'],
        ],
                'risks' => [
            ['value' => 'Gastrointestinal bleeding'],
            ['value' => 'Perforation of the stomach or intestine'],
            ['value' => 'Gastric outlet obstruction'],
            ['value' => 'Severe anemia'],
            ['value' => 'Life-threatening abdominal infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Acid suppression therapy'],
            ['value' => 'Antibiotics for H. pylori infection'],
            ['value' => 'Avoidance of NSAIDs and alcohol'],
            ['value' => 'Dietary modifications'],
            ['value' => 'Endoscopy and surgery for complications'],
        ],
                'recovery' => 'Most ulcers heal completely with medications and infection control. Untreated ulcers can lead to serious complications.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Peptic Ulcer Disease (Gastric / Duodenal)',
                'meta_description' => 'Peptic ulcer disease refers to open sores that develop in the lining of the stomach or upper small intestine due to acid-related damage.',
                'meta_keywords' => '',
            ]
        );
    }
}
