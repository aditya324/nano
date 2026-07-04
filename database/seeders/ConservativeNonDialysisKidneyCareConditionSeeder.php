<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConservativeNonDialysisKidneyCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Conservative (Non-Dialysis) Kidney Care')],
            [
                'name' => 'Conservative (Non-Dialysis) Kidney Care',
                'slug' => Str::slug('Conservative (Non-Dialysis) Kidney Care'),
                'h1' => 'Conservative (Non-Dialysis) Kidney Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Conservative kidney care is a supportive nephrology treatment approach for patients with advanced kidney disease who are not undergoing dialysis or kidney transplantation.',
                'about_more' => 'This care focuses on symptom control, quality of life, emotional support, and slowing disease progression while avoiding aggressive renal replacement therapies. Conservative management is individualized based on the patient’s medical condition, preferences, and overall health goals.',
                'overview' => 'The care program includes: Symptom management Blood pressure control Fluid balance monitoring Anemia treatment Nutritional counseling Pain and palliative care support Emotional and family counseling Doctors help manage: Fatigue Swelling Breathlessness Nausea Sleep problems Electrolyte imbalance The goal is to maintain comfort, independence, and dignity while minimizing hospitalizations and treatment burden. Multidisciplinary care teams provide ongoing physical, psychological, and social support.',
                'symptoms' => [
            ['value' => 'Advanced kidney failure'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Fluid retention'],
            ['value' => 'Poor appetite'],
            ['value' => 'Reduced quality of life'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Progressive kidney failure'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Increasing symptom burden'],
            ['value' => 'Reduced physical functioning'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular nephrology follow-up visits'],
            ['value' => 'Follow medication and dietary advice carefully'],
            ['value' => 'Monitor symptoms and fluid status'],
            ['value' => 'Maintain emotional and family support'],
            ['value' => 'Communicate care preferences openly with healthcare providers'],
        ],
                'recovery' => 'Conservative kidney care can provide meaningful symptom relief, improved comfort, and better quality of life for patients with advanced kidney disease. Supportive multidisciplinary care helps patients maintain dignity, emotional well-being, and individualized healthcare goals over the long term.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Conservative (Non-Dialysis) Kidney Care',
                'meta_description' => 'Conservative kidney care is a supportive nephrology treatment approach for patients with advanced kidney disease who are not undergoing dialysis or kidney trans',
                'meta_keywords' => '',
            ]
        );
    }
}
