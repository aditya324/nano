<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalTubularDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Tubular Disorders')],
            [
                'name' => 'Renal Tubular Disorders',
                'slug' => Str::slug('Renal Tubular Disorders'),
                'h1' => 'Renal Tubular Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal tubular disorders are conditions affecting the kidney tubules, which are responsible for reabsorbing water, electrolytes, and nutrients while removing waste products. Dysfunction of these tubules can lead to electrolyte imbalance, dehydration, and metabolic disturbances.',
                'about_more' => '',
                'overview' => 'Renal tubular disorders are conditions affecting the kidney tubules, which are responsible for reabsorbing water, electrolytes, and nutrients while removing waste products. Dysfunction of these tubules can lead to electrolyte imbalance, dehydration, and metabolic disturbances.',
                'symptoms' => [
            ['value' => 'Excessive urination and thirst'],
            ['value' => 'Muscle weakness or cramps'],
            ['value' => 'Growth delay in children'],
            ['value' => 'Dehydration and fatigue'],
            ['value' => 'Bone pain or rickets in severe cases'],
        ],
                'causes' => [
            ['value' => 'Genetic tubular disorders'],
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Certain medications or toxins'],
            ['value' => 'Metabolic and endocrine diseases'],
            ['value' => 'Autoimmune kidney disorders'],
        ],
                'risks' => [
            ['value' => 'Severe electrolyte imbalance'],
            ['value' => 'Chronic dehydration'],
            ['value' => 'Bone disease and growth problems'],
            ['value' => 'Kidney stones or calcification'],
            ['value' => 'Progressive kidney dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Electrolyte and fluid replacement therapy'],
            ['value' => 'Medications to correct acid-base imbalance'],
            ['value' => 'Nutritional and vitamin supplementation'],
            ['value' => 'Monitoring kidney function regularly'],
            ['value' => 'Treatment of underlying kidney disease'],
        ],
                'recovery' => 'Some renal tubular disorders can be managed effectively for many years with medication and dietary support. Early diagnosis helps prevent growth and kidney complications.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Renal Tubular Disorders',
                'meta_description' => 'Renal tubular disorders are conditions affecting the kidney tubules, which are responsible for reabsorbing water, electrolytes, and nutrients while removing was',
                'meta_keywords' => '',
            ]
        );
    }
}
