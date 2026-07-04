<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DrugDoseAdjustmentinRenalFailureConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Drug Dose Adjustment in Renal Failure')],
            [
                'name' => 'Drug Dose Adjustment in Renal Failure',
                'slug' => Str::slug('Drug Dose Adjustment in Renal Failure'),
                'h1' => 'Drug Dose Adjustment in Renal Failure',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Drug dose adjustment in renal failure is a specialized nephrology service focused on safely modifying medication dosages in patients with reduced kidney function.',
                'about_more' => 'Many medicines are removed from the body through the kidneys. When kidney function declines, medications can accumulate in the bloodstream and cause serious side effects or toxicity if doses are not adjusted properly. This service helps ensure safe and effective medication use in patients with acute or chronic kidney disease.',
                'overview' => 'The nephrology team evaluates: Kidney function tests Glomerular filtration rate (GFR) Dialysis status Drug metabolism Risk of medication toxicity Dose adjustment may involve: Reducing medication dosage Increasing time intervals between doses Avoiding certain nephrotoxic drugs Monitoring blood drug levels Special attention is given to: Antibiotics Pain medications Diabetes medicines Blood pressure drugs Chemotherapy agents Doctors coordinate closely with pharmacists and other specialists to optimize patient safety and treatment effectiveness.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Medication-related side effects'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Dialysis-dependent kidney failure'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Drug toxicity'],
            ['value' => 'Kidney damage progression'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Medication overdose'],
            ['value' => 'Adverse drug reactions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Avoid self-medication without medical advice'],
            ['value' => 'Attend regular kidney function testing'],
            ['value' => 'Inform doctors about all medications being used'],
            ['value' => 'Report unusual symptoms immediately'],
        ],
                'recovery' => 'Proper drug dose adjustment significantly improves medication safety and reduces complications in kidney disease patients. Regular monitoring and individualized treatment planning help maintain effective long-term medical care.',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Drug Dose Adjustment in Renal Failure',
                'meta_description' => 'Drug dose adjustment in renal failure is a specialized nephrology service focused on safely modifying medication dosages in patients with reduced kidney functio',
                'meta_keywords' => '',
            ]
        );
    }
}
