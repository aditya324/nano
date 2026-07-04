<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NephroticSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nephrotic Syndrome')],
            [
                'name' => 'Nephrotic Syndrome',
                'slug' => Str::slug('Nephrotic Syndrome'),
                'h1' => 'Nephrotic Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nephrotic syndrome is a kidney disorder characterized by excessive protein loss in urine due to damage to the kidney filtering system. This leads to swelling, low blood protein levels, and increased cholesterol levels.',
                'about_more' => '',
                'overview' => 'Nephrotic syndrome is a kidney disorder characterized by excessive protein loss in urine due to damage to the kidney filtering system. This leads to swelling, low blood protein levels, and increased cholesterol levels.',
                'symptoms' => [
            ['value' => 'Swelling around eyes, legs, and abdomen'],
            ['value' => 'Foamy or frothy urine'],
            ['value' => 'Weight gain due to fluid retention'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Reduced appetite or infections'],
        ],
                'causes' => [
            ['value' => 'Minimal change disease in children'],
            ['value' => 'Diabetes-related kidney disease'],
            ['value' => 'Autoimmune disorders such as lupus'],
            ['value' => 'Kidney infections or inflammation'],
            ['value' => 'Certain medications or systemic illnesses'],
        ],
                'risks' => [
            ['value' => 'Severe swelling and fluid overload'],
            ['value' => 'Increased risk of infections'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Malnutrition due to protein loss'],
            ['value' => 'Chronic kidney disease progression'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Corticosteroids and immunosuppressive medications'],
            ['value' => 'Diuretics to reduce swelling'],
            ['value' => 'Low-salt dietary management'],
            ['value' => 'Blood pressure and cholesterol control'],
            ['value' => 'Regular urine and kidney function monitoring'],
        ],
                'recovery' => 'Many children and adults respond well to treatment, although relapses may occur. Long-term follow-up helps prevent complications and preserve kidney function.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Nephrotic Syndrome',
                'meta_description' => 'Nephrotic syndrome is a kidney disorder characterized by excessive protein loss in urine due to damage to the kidney filtering system. This leads to swelling, l',
                'meta_keywords' => '',
            ]
        );
    }
}
