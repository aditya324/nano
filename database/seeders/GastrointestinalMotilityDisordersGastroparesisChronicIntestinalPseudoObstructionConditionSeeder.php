<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastrointestinalMotilityDisordersGastroparesisChronicIntestinalPseudoObstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastrointestinal Motility Disorders (Gastroparesis, Chronic Intestinal Pseudo-Obstruction)')],
            [
                'name' => 'Gastrointestinal Motility Disorders (Gastroparesis, Chronic Intestinal Pseudo-Obstruction)',
                'slug' => Str::slug('Gastrointestinal Motility Disorders (Gastroparesis, Chronic Intestinal Pseudo-Obstruction)'),
                'h1' => 'Gastrointestinal Motility Disorders (Gastroparesis, Chronic Intestinal Pseudo-Obstruction)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastrointestinal motility disorders affect the normal movement of food through the digestive tract, causing delayed emptying and bowel dysfunction.',
                'about_more' => '',
                'overview' => 'Gastrointestinal motility disorders affect the normal movement of food through the digestive tract, causing delayed emptying and bowel dysfunction.',
                'symptoms' => [
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Abdominal bloating and fullness'],
            ['value' => 'Early satiety after meals'],
            ['value' => 'Constipation and abdominal pain'],
            ['value' => 'Weight loss and malnutrition'],
        ],
                'causes' => [
            ['value' => 'Diabetes-related nerve damage'],
            ['value' => 'Neurological disorders'],
            ['value' => 'Previous abdominal surgery'],
            ['value' => 'Autoimmune and muscular disorders'],
            ['value' => 'Certain medications affecting bowel movement'],
        ],
                'risks' => [
            ['value' => 'Severe malnutrition'],
            ['value' => 'Dehydration and electrolyte imbalance'],
            ['value' => 'Recurrent vomiting and aspiration'],
            ['value' => 'Intestinal obstruction-like symptoms'],
            ['value' => 'Poor quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dietary modifications and small frequent meals'],
            ['value' => 'Medications to improve motility'],
            ['value' => 'Nutritional supplementation'],
            ['value' => 'Endoscopic or surgical interventions'],
            ['value' => 'Management of underlying disease'],
        ],
                'recovery' => 'Long-term management is often required, but symptoms can improve significantly with proper treatment and dietary care.',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Gastrointestinal Motility Disorders (Gastroparesis, Chronic Intestinal Pseudo-Obstruction)',
                'meta_description' => 'Gastrointestinal motility disorders affect the normal movement of food through the digestive tract, causing delayed emptying and bowel dysfunction.',
                'meta_keywords' => '',
            ]
        );
    }
}
