<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricKidneyDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Kidney Disorders')],
            [
                'name' => 'Pediatric Kidney Disorders',
                'slug' => Str::slug('Pediatric Kidney Disorders'),
                'h1' => 'Pediatric Kidney Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric kidney disorders include conditions affecting the kidneys and urinary system in infants, children, and adolescents. These disorders may be congenital, inherited, inflammatory, or infection-related and can affect growth, fluid balance, and overall development.',
                'about_more' => '',
                'overview' => 'Pediatric kidney disorders include conditions affecting the kidneys and urinary system in infants, children, and adolescents. These disorders may be congenital, inherited, inflammatory, or infection-related and can affect growth, fluid balance, and overall development.',
                'symptoms' => [
            ['value' => 'Swelling around eyes, legs, or abdomen'],
            ['value' => 'Changes in urine color or frequency'],
            ['value' => 'Recurrent urinary tract infections'],
            ['value' => 'Poor growth or weight gain'],
            ['value' => 'High blood pressure or fatigue'],
        ],
                'causes' => [
            ['value' => 'Congenital kidney abnormalities'],
            ['value' => 'Genetic kidney disorders'],
            ['value' => 'Urinary tract infections affecting kidneys'],
            ['value' => 'Immune-related kidney inflammation'],
            ['value' => 'Metabolic or systemic diseases'],
        ],
                'risks' => [
            ['value' => 'Growth and developmental delay'],
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Electrolyte imbalance and dehydration'],
            ['value' => 'Hypertension and heart strain'],
            ['value' => 'Need for dialysis or transplant in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pediatric nephrology evaluation and monitoring'],
            ['value' => 'Antibiotics or immune therapy depending on cause'],
            ['value' => 'Blood pressure and fluid management'],
            ['value' => 'Nutritional and growth support'],
            ['value' => 'Dialysis or transplantation in advanced disease'],
        ],
                'recovery' => 'Many pediatric kidney disorders respond well to early treatment and regular monitoring. Long-term outcomes improve significantly with specialized pediatric kidney care.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Pediatric Kidney Disorders',
                'meta_description' => 'Pediatric kidney disorders include conditions affecting the kidneys and urinary system in infants, children, and adolescents. These disorders may be congenital,',
                'meta_keywords' => '',
            ]
        );
    }
}
