<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InflammatoryBowelDiseaseCrohnsDiseaseUlcerativeColitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Inflammatory Bowel Disease (Crohn’s Disease / Ulcerative Colitis)')],
            [
                'name' => 'Inflammatory Bowel Disease (Crohn’s Disease / Ulcerative Colitis)',
                'slug' => Str::slug('Inflammatory Bowel Disease (Crohn’s Disease / Ulcerative Colitis)'),
                'h1' => 'Inflammatory Bowel Disease (Crohn’s Disease / Ulcerative Colitis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Inflammatory bowel disease (IBD) includes chronic inflammatory disorders of the digestive tract such as Crohn’s disease and ulcerative colitis.',
                'about_more' => '',
                'overview' => 'Inflammatory bowel disease (IBD) includes chronic inflammatory disorders of the digestive tract such as Crohn’s disease and ulcerative colitis.',
                'symptoms' => [
            ['value' => 'Chronic diarrhea'],
            ['value' => 'Abdominal pain and cramping'],
            ['value' => 'Blood in stools'],
            ['value' => 'Weight loss and fatigue'],
            ['value' => 'Fever during disease flare-ups'],
        ],
                'causes' => [
            ['value' => 'Autoimmune intestinal inflammation'],
            ['value' => 'Genetic predisposition'],
            ['value' => 'Environmental triggers'],
            ['value' => 'Abnormal immune response'],
            ['value' => 'Smoking and dietary factors'],
        ],
                'risks' => [
            ['value' => 'Intestinal obstruction or perforation'],
            ['value' => 'Severe malnutrition'],
            ['value' => 'Fistula and abscess formation'],
            ['value' => 'Increased colorectal cancer risk'],
            ['value' => 'Chronic anemia and weakness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Anti-inflammatory medications'],
            ['value' => 'Immunosuppressive therapy'],
            ['value' => 'Biologic treatment options'],
            ['value' => 'Nutritional support and dietary care'],
            ['value' => 'Surgery for severe complications'],
        ],
                'recovery' => 'IBD is a chronic condition requiring long-term management. Many patients achieve good symptom control with modern therapies.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Inflammatory Bowel Disease (Crohn’s Disease / Ulcerative Colitis)',
                'meta_description' => 'Inflammatory bowel disease (IBD) includes chronic inflammatory disorders of the digestive tract such as Crohn’s disease and ulcerative colitis.',
                'meta_keywords' => '',
            ]
        );
    }
}
