<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcidBaseDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acid–Base Disorders')],
            [
                'name' => 'Acid–Base Disorders',
                'slug' => Str::slug('Acid–Base Disorders'),
                'h1' => 'Acid–Base Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acid–base disorders occur when the balance between acids and bases in the body becomes disturbed. The kidneys and lungs normally maintain this balance, and kidney disease frequently contributes to metabolic acidosis or alkalosis. Severe acid–base disturbances can impair organ function and become medical emergencies.',
                'about_more' => '',
                'overview' => 'Acid–base disorders occur when the balance between acids and bases in the body becomes disturbed. The kidneys and lungs normally maintain this balance, and kidney disease frequently contributes to metabolic acidosis or alkalosis. Severe acid–base disturbances can impair organ function and become medical emergencies.',
                'symptoms' => [
            ['value' => 'Rapid breathing or shortness of breath'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Confusion or altered mental status'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Muscle twitching or irregular heartbeat'],
        ],
                'causes' => [
            ['value' => 'Kidney failure reducing acid excretion'],
            ['value' => 'Severe diarrhea or dehydration'],
            ['value' => 'Uncontrolled diabetes causing ketoacidosis'],
            ['value' => 'Lung disorders affecting carbon dioxide balance'],
            ['value' => 'Excessive vomiting or medication-related disturbances'],
        ],
                'risks' => [
            ['value' => 'Heart rhythm abnormalities'],
            ['value' => 'Reduced oxygen delivery to tissues'],
            ['value' => 'Severe neurological complications'],
            ['value' => 'Muscle weakness and respiratory failure'],
            ['value' => 'Progression of kidney dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Correction of underlying kidney or metabolic disorder'],
            ['value' => 'Intravenous fluids and electrolyte management'],
            ['value' => 'Bicarbonate therapy in metabolic acidosis'],
            ['value' => 'Oxygen and respiratory support if needed'],
            ['value' => 'Dialysis in severe acid–base imbalance'],
        ],
                'recovery' => 'Most acid–base disorders improve once the underlying cause is treated. Early recognition and correction are essential to prevent serious organ dysfunction and long-term complications.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Acid–Base Disorders',
                'meta_description' => 'Acid–base disorders occur when the balance between acids and bases in the body becomes disturbed. The kidneys and lungs normally maintain this balance, and kidn',
                'meta_keywords' => '',
            ]
        );
    }
}
