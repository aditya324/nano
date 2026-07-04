<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PregnancyRelatedKidneyDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pregnancy-Related Kidney Disorders')],
            [
                'name' => 'Pregnancy-Related Kidney Disorders',
                'slug' => Str::slug('Pregnancy-Related Kidney Disorders'),
                'h1' => 'Pregnancy-Related Kidney Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pregnancy-related kidney disorders include kidney problems that develop or worsen during pregnancy. These conditions may involve high blood pressure disorders, urinary infections, acute kidney injury, or worsening of pre-existing kidney disease. Proper kidney function is essential for both maternal and fetal health.',
                'about_more' => '',
                'overview' => 'Pregnancy-related kidney disorders include kidney problems that develop or worsen during pregnancy. These conditions may involve high blood pressure disorders, urinary infections, acute kidney injury, or worsening of pre-existing kidney disease. Proper kidney function is essential for both maternal and fetal health.',
                'symptoms' => [
            ['value' => 'Swelling of hands, feet, or face'],
            ['value' => 'High blood pressure during pregnancy'],
            ['value' => 'Protein in urine'],
            ['value' => 'Reduced urine output or dark urine'],
            ['value' => 'Headache, fatigue, or breathing difficulty'],
        ],
                'causes' => [
            ['value' => 'Pre-eclampsia or eclampsia'],
            ['value' => 'Pregnancy-related hypertension'],
            ['value' => 'Urinary tract infections'],
            ['value' => 'Pre-existing kidney disease'],
            ['value' => 'Severe dehydration or bleeding during pregnancy'],
        ],
                'risks' => [
            ['value' => 'Premature delivery or low birth weight'],
            ['value' => 'Maternal kidney failure'],
            ['value' => 'Severe hypertension and seizures'],
            ['value' => 'Fetal growth restriction'],
            ['value' => 'Increased maternal and fetal mortality risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Close monitoring of blood pressure and kidney function'],
            ['value' => 'Treatment of infections and fluid imbalance'],
            ['value' => 'Safe pregnancy-compatible medications'],
            ['value' => 'Early delivery in severe complications'],
            ['value' => 'Nephrology and obstetric specialist care'],
        ],
                'recovery' => 'Many pregnancy-related kidney problems improve after delivery with proper treatment and monitoring. Severe conditions require long-term follow-up to protect maternal kidney health.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Pregnancy-Related Kidney Disorders',
                'meta_description' => 'Pregnancy-related kidney disorders include kidney problems that develop or worsen during pregnancy. These conditions may involve high blood pressure disorders, ',
                'meta_keywords' => '',
            ]
        );
    }
}
