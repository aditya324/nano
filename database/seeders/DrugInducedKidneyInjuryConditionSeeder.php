<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DrugInducedKidneyInjuryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Drug-Induced Kidney Injury')],
            [
                'name' => 'Drug-Induced Kidney Injury',
                'slug' => Str::slug('Drug-Induced Kidney Injury'),
                'h1' => 'Drug-Induced Kidney Injury',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Drug-induced kidney injury occurs when certain medications or toxic substances damage the kidneys and impair their ability to filter waste products and maintain fluid balance. The injury may be temporary or permanent depending on the severity and duration of exposure. Many commonly used medicines, especially painkillers, antibiotics, chemotherapy drugs, and contrast agents, can affect kidney function in susceptible individuals.',
                'about_more' => '',
                'overview' => 'Drug-induced kidney injury occurs when certain medications or toxic substances damage the kidneys and impair their ability to filter waste products and maintain fluid balance. The injury may be temporary or permanent depending on the severity and duration of exposure. Many commonly used medicines, especially painkillers, antibiotics, chemotherapy drugs, and contrast agents, can affect kidney function in susceptible individuals.',
                'symptoms' => [
            ['value' => 'Reduced urine output or dark-colored urine'],
            ['value' => 'Swelling of legs, feet, or face'],
            ['value' => 'Fatigue, weakness, or confusion'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Elevated blood pressure or fluid retention'],
        ],
                'causes' => [
            ['value' => 'Long-term use of painkillers such as NSAIDs'],
            ['value' => 'Certain antibiotics and antiviral medications'],
            ['value' => 'Chemotherapy or immunosuppressive drugs'],
            ['value' => 'Dehydration while taking kidney-toxic medicines'],
            ['value' => 'Excessive or incorrect medication dosage'],
        ],
                'risks' => [
            ['value' => 'Acute kidney injury or chronic kidney damage'],
            ['value' => 'Electrolyte imbalance affecting heart function'],
            ['value' => 'Fluid overload and breathing difficulty'],
            ['value' => 'Need for dialysis in severe cases'],
            ['value' => 'Permanent loss of kidney function if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Immediate discontinuation of harmful medications'],
            ['value' => 'Intravenous fluids and hydration support'],
            ['value' => 'Monitoring kidney function and electrolyte levels'],
            ['value' => 'Dose adjustment of essential medications'],
            ['value' => 'Dialysis support in severe kidney failure'],
        ],
                'recovery' => 'Many patients recover fully if kidney injury is recognized early and the offending medication is stopped promptly. Delayed treatment may lead to permanent kidney damage or chronic kidney disease.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Drug-Induced Kidney Injury',
                'meta_description' => 'Drug-induced kidney injury occurs when certain medications or toxic substances damage the kidneys and impair their ability to filter waste products and maintain',
                'meta_keywords' => '',
            ]
        );
    }
}
