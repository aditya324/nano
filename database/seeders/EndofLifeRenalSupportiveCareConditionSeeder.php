<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndofLifeRenalSupportiveCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('End-of-Life Renal Supportive Care')],
            [
                'name' => 'End-of-Life Renal Supportive Care',
                'slug' => Str::slug('End-of-Life Renal Supportive Care'),
                'h1' => 'End-of-Life Renal Supportive Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'End-of-life renal supportive care is a compassionate nephrology service focused on improving comfort, dignity, and quality of life for patients with advanced kidney failure who may not benefit from aggressive treatment or dialysis.',
                'about_more' => 'This care approach emphasizes symptom relief, emotional support, pain management, and individualized medical care according to the patient’s wishes and overall health condition. The goal is to provide holistic support for both patients and families during advanced stages of kidney disease.',
                'overview' => 'The supportive care program includes: Pain and symptom management Breathlessness relief Fluid balance support Emotional and psychological counseling Nutritional guidance Family counseling Palliative care coordination Doctors carefully manage: Fatigue Swelling Nausea Anxiety Sleep disturbances Difficulty breathing The care team works closely with nephrologists, palliative care specialists, nurses, and family members to ensure patient comfort and dignity. Care plans are individualized according to medical condition, cultural preferences, and patient goals.',
                'symptoms' => [
            ['value' => 'Advanced kidney failure'],
            ['value' => 'Severe fatigue and weakness'],
            ['value' => 'Fluid retention and swelling'],
            ['value' => 'Loss of appetite'],
            ['value' => 'Difficulty breathing or discomfort'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Progressive kidney failure'],
            ['value' => 'Emotional distress'],
            ['value' => 'Severe symptom burden'],
            ['value' => 'Reduced physical functioning'],
            ['value' => 'Increased risk of infections and complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain regular supportive care follow-up'],
            ['value' => 'Continue prescribed comfort medications'],
            ['value' => 'Monitor symptoms closely'],
            ['value' => 'Provide emotional and family support'],
            ['value' => 'Communicate healthcare preferences openly'],
        ],
                'recovery' => 'End-of-life renal supportive care helps improve comfort, emotional well-being, and dignity for patients with advanced kidney disease. Comprehensive supportive management allows patients and families to receive compassionate care focused on quality of life and symptom relief.',
                'sort_order' => 41,
                'is_active' => true,
                'meta_title' => 'End-of-Life Renal Supportive Care',
                'meta_description' => 'End-of-life renal supportive care is a compassionate nephrology service focused on improving comfort, dignity, and quality of life for patients with advanced ki',
                'meta_keywords' => '',
            ]
        );
    }
}
