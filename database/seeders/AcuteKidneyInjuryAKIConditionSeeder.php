<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteKidneyInjuryAKIConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Kidney Injury (AKI)')],
            [
                'name' => 'Acute Kidney Injury (AKI)',
                'slug' => Str::slug('Acute Kidney Injury (AKI)'),
                'h1' => 'Acute Kidney Injury (AKI)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute Kidney Injury (AKI) is a sudden decline in kidney function that develops over hours to days. The kidneys become unable to effectively filter waste products, regulate fluids, maintain electrolyte balance, and support normal body functions. AKI may occur due to severe dehydration, infections, medications, reduced blood flow to the kidneys, or obstruction of urine flow. It is a serious medical condition that requires prompt diagnosis and treatment to prevent permanent kidney damage and life-threatening complications.',
                'about_more' => '',
                'overview' => 'Acute Kidney Injury (AKI) is a sudden decline in kidney function that develops over hours to days. The kidneys become unable to effectively filter waste products, regulate fluids, maintain electrolyte balance, and support normal body functions. AKI may occur due to severe dehydration, infections, medications, reduced blood flow to the kidneys, or obstruction of urine flow. It is a serious medical condition that requires prompt diagnosis and treatment to prevent permanent kidney damage and life-threatening complications.',
                'symptoms' => [
            ['value' => 'Reduced urine output or difficulty urinating'],
            ['value' => 'Swelling of legs, feet, or face due to fluid retention'],
            ['value' => 'Fatigue, weakness, or confusion'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Shortness of breath due to fluid overload'],
        ],
                'causes' => [
            ['value' => 'Severe dehydration or blood loss'],
            ['value' => 'Severe infections or sepsis'],
            ['value' => 'Kidney-toxic medications or contrast dyes'],
            ['value' => 'Heart failure or low blood pressure reducing kidney blood flow'],
            ['value' => 'Urinary tract obstruction from stones or enlarged prostate'],
        ],
                'risks' => [
            ['value' => 'Electrolyte imbalance affecting heart rhythm'],
            ['value' => 'Fluid accumulation in lungs causing breathing difficulty'],
            ['value' => 'Permanent kidney damage or progression to CKD'],
            ['value' => 'Severe metabolic disturbances and toxin buildup'],
            ['value' => 'Need for emergency dialysis in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Intravenous fluids and hydration support'],
            ['value' => 'Treatment of underlying infections or medical conditions'],
            ['value' => 'Stopping harmful medications affecting kidneys'],
            ['value' => 'Electrolyte and blood pressure management'],
            ['value' => 'Dialysis support if kidney function becomes critically low'],
        ],
                'recovery' => 'Many patients recover fully when AKI is recognized and treated early. Recovery depends on the underlying cause, severity, and overall health status. Delayed treatment can lead to chronic kidney disease or long-term kidney complications.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Acute Kidney Injury (AKI)',
                'meta_description' => 'Acute Kidney Injury (AKI) is a sudden decline in kidney function that develops over hours to days. The kidneys become unable to effectively filter waste product',
                'meta_keywords' => '',
            ]
        );
    }
}
