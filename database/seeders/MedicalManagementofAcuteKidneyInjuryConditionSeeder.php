<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MedicalManagementofAcuteKidneyInjuryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Medical Management of Acute Kidney Injury')],
            [
                'name' => 'Medical Management of Acute Kidney Injury',
                'slug' => Str::slug('Medical Management of Acute Kidney Injury'),
                'h1' => 'Medical Management of Acute Kidney Injury',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Medical management of acute kidney injury (AKI) is a specialized nephrology treatment focused on diagnosing and reversing sudden loss of kidney function.',
                'about_more' => 'Acute kidney injury can occur due to dehydration, severe infection, medications, shock, obstruction, or major illness. Prompt treatment is critical because untreated AKI may rapidly progress to permanent kidney damage or life-threatening complications. The primary goal is to restore kidney function, maintain fluid balance, and prevent organ failure.',
                'overview' => 'The management process includes: Identifying the underlying cause Monitoring urine output Correcting dehydration Managing electrolyte imbalance Avoiding kidney-toxic medications Supporting blood pressure and circulation Treatment may involve: IV fluid therapy Electrolyte correction Dialysis support if required Infection treatment Intensive monitoring Doctors regularly monitor kidney function tests, fluid balance, blood pressure, and metabolic status throughout treatment. Early intervention significantly improves recovery chances.',
                'symptoms' => [
            ['value' => 'Reduced urine output'],
            ['value' => 'Swelling of body or legs'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Confusion or breathing difficulty'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Permanent kidney damage'],
            ['value' => 'Severe electrolyte imbalance'],
            ['value' => 'Fluid overload'],
            ['value' => 'Heart complications'],
            ['value' => 'Need for emergency dialysis'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Avoid unnecessary painkiller medications'],
            ['value' => 'Monitor kidney function regularly'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Attend nephrology follow-up appointments'],
        ],
                'recovery' => 'Many patients recover kidney function completely with early diagnosis and appropriate treatment. Close follow-up after acute kidney injury helps prevent future renal complications and supports long-term kidney health.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Medical Management of Acute Kidney Injury',
                'meta_description' => 'Medical management of acute kidney injury (AKI) is a specialized nephrology treatment focused on diagnosing and reversing sudden loss of kidney function.',
                'meta_keywords' => '',
            ]
        );
    }
}
