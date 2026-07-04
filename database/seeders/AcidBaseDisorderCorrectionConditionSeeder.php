<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcidBaseDisorderCorrectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acid–Base Disorder Correction')],
            [
                'name' => 'Acid–Base Disorder Correction',
                'slug' => Str::slug('Acid–Base Disorder Correction'),
                'h1' => 'Acid–Base Disorder Correction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acid–base disorder correction is a nephrology treatment focused on restoring the body’s normal acid and alkaline balance, which is often disturbed in kidney disease and critical illness.',
                'about_more' => 'The kidneys play a major role in regulating acid levels in the blood. When kidney function becomes impaired, dangerous acid accumulation or imbalance may occur. Prompt correction is important because severe acid–base disorders can affect breathing, heart function, brain activity, and metabolism.',
                'overview' => 'The treatment includes: Blood gas analysis Electrolyte monitoring Kidney function evaluation IV bicarbonate therapy when required Dialysis support in severe cases Conditions commonly associated with acid–base disorders include: Kidney failure Diabetic ketoacidosis Severe infections Respiratory disease Dehydration Doctors closely monitor breathing patterns, blood chemistry, heart rhythm, and neurological status during treatment. Management focuses on correcting the underlying cause while restoring normal blood chemistry.',
                'symptoms' => [
            ['value' => 'Rapid breathing'],
            ['value' => 'Fatigue or confusion'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Weakness'],
            ['value' => 'Abnormal blood test findings'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Heart rhythm disturbances'],
            ['value' => 'Respiratory failure'],
            ['value' => 'Severe metabolic complications'],
            ['value' => 'Organ dysfunction'],
            ['value' => 'Life-threatening acid imbalance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular laboratory monitoring'],
            ['value' => 'Maintain medication compliance'],
            ['value' => 'Follow dietary and fluid advice'],
            ['value' => 'Monitor breathing or weakness symptoms'],
            ['value' => 'Continue nephrology follow-up care'],
        ],
                'recovery' => 'Early correction of acid–base disorders greatly improves stability and reduces complications in kidney disease patients. Modern nephrology monitoring and critical care management continue to improve long-term treatment outcomes.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Acid–Base Disorder Correction',
                'meta_description' => 'Acid–base disorder correction is a nephrology treatment focused on restoring the body’s normal acid and alkaline balance, which is often disturbed in kidney dis',
                'meta_keywords' => '',
            ]
        );
    }
}
