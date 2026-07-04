<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MalabsorptionSyndromesCeliacDiseaseTropicalSprueConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Malabsorption Syndromes (Celiac Disease, Tropical Sprue)')],
            [
                'name' => 'Malabsorption Syndromes (Celiac Disease, Tropical Sprue)',
                'slug' => Str::slug('Malabsorption Syndromes (Celiac Disease, Tropical Sprue)'),
                'h1' => 'Malabsorption Syndromes (Celiac Disease, Tropical Sprue)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Malabsorption syndromes occur when the intestines cannot properly absorb nutrients from food, leading to nutritional deficiencies and digestive symptoms.',
                'about_more' => '',
                'overview' => 'Malabsorption syndromes occur when the intestines cannot properly absorb nutrients from food, leading to nutritional deficiencies and digestive symptoms.',
                'symptoms' => [
            ['value' => 'Chronic diarrhea'],
            ['value' => 'Weight loss and weakness'],
            ['value' => 'Abdominal bloating and gas'],
            ['value' => 'Anemia and nutritional deficiencies'],
            ['value' => 'Poor growth in children'],
        ],
                'causes' => [
            ['value' => 'Celiac disease triggered by gluten'],
            ['value' => 'Tropical sprue and intestinal infections'],
            ['value' => 'Pancreatic enzyme deficiency'],
            ['value' => 'Chronic intestinal inflammation'],
            ['value' => 'Small intestinal disorders affecting absorption'],
        ],
                'risks' => [
            ['value' => 'Severe malnutrition'],
            ['value' => 'Vitamin and mineral deficiencies'],
            ['value' => 'Osteoporosis and bone weakness'],
            ['value' => 'Growth delay in children'],
            ['value' => 'Chronic fatigue and immune weakness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Gluten-free diet in celiac disease'],
            ['value' => 'Nutritional supplementation'],
            ['value' => 'Antibiotics for tropical sprue'],
            ['value' => 'Digestive enzyme replacement'],
            ['value' => 'Regular monitoring and dietary counseling'],
        ],
                'recovery' => 'Most patients improve significantly with proper nutritional management and treatment of the underlying cause.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Malabsorption Syndromes (Celiac Disease, Tropical Sprue)',
                'meta_description' => 'Malabsorption syndromes occur when the intestines cannot properly absorb nutrients from food, leading to nutritional deficiencies and digestive symptoms.',
                'meta_keywords' => '',
            ]
        );
    }
}
