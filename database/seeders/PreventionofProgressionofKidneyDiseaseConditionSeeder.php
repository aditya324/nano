<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreventionofProgressionofKidneyDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Prevention of Progression of Kidney Disease')],
            [
                'name' => 'Prevention of Progression of Kidney Disease',
                'slug' => Str::slug('Prevention of Progression of Kidney Disease'),
                'h1' => 'Prevention of Progression of Kidney Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Prevention of progression of kidney disease is a comprehensive nephrology care program aimed at slowing or stopping worsening kidney damage in patients with chronic kidney disorders.',
                'about_more' => 'Early intervention is critical because progressive kidney disease may eventually lead to kidney failure requiring dialysis or transplantation. This program focuses on preserving remaining kidney function and reducing long-term complications.',
                'overview' => 'The prevention strategy includes: Blood pressure control Diabetes management Proteinuria treatment Dietary counseling Medication optimization Lifestyle modification Regular kidney function monitoring Doctors carefully monitor: Kidney filtration rate Urine protein levels Blood pressure Electrolytes Cardiovascular health Patients receive education regarding: Avoidance of nephrotoxic medications Importance of hydration Infection prevention Long-term follow-up care Multidisciplinary management helps improve overall renal outcomes.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Protein in urine'],
            ['value' => 'High blood pressure'],
            ['value' => 'Swelling or fluid retention'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure progression'],
            ['value' => 'Cardiovascular disease'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Take medications consistently'],
            ['value' => 'Follow renal dietary recommendations'],
            ['value' => 'Attend regular nephrology reviews'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Avoid kidney-damaging substances'],
        ],
                'recovery' => 'Early prevention strategies greatly slow kidney disease progression and improve long-term kidney preservation. Continuous nephrology care helps reduce complications and supports healthier long-term outcomes.',
                'sort_order' => 45,
                'is_active' => true,
                'meta_title' => 'Prevention of Progression of Kidney Disease',
                'meta_description' => 'Prevention of progression of kidney disease is a comprehensive nephrology care program aimed at slowing or stopping worsening kidney damage in patients with chr',
                'meta_keywords' => '',
            ]
        );
    }
}
