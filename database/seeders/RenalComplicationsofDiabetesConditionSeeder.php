<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalComplicationsofDiabetesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Complications of Diabetes')],
            [
                'name' => 'Renal Complications of Diabetes',
                'slug' => Str::slug('Renal Complications of Diabetes'),
                'h1' => 'Renal Complications of Diabetes',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal complications of diabetes refer to kidney damage caused by long-standing diabetes mellitus, commonly known as diabetic nephropathy. High blood sugar damages the kidney’s filtering units over time, leading to protein leakage, declining kidney function, and eventually chronic kidney disease or kidney failure.',
                'about_more' => '',
                'overview' => 'Renal complications of diabetes refer to kidney damage caused by long-standing diabetes mellitus, commonly known as diabetic nephropathy. High blood sugar damages the kidney’s filtering units over time, leading to protein leakage, declining kidney function, and eventually chronic kidney disease or kidney failure.',
                'symptoms' => [
            ['value' => 'Protein in urine causing foamy urine'],
            ['value' => 'Swelling of legs, feet, or face'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Reduced kidney function in advanced stages'],
        ],
                'causes' => [
            ['value' => 'Poorly controlled blood sugar levels'],
            ['value' => 'Long duration of diabetes mellitus'],
            ['value' => 'High blood pressure accelerating kidney damage'],
            ['value' => 'Obesity and unhealthy lifestyle habits'],
            ['value' => 'Smoking and cardiovascular disease risk factors'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'End-stage kidney failure requiring dialysis'],
            ['value' => 'Heart disease and stroke risk'],
            ['value' => 'Eye and nerve complications from diabetes'],
            ['value' => 'Increased hospitalization and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Strict blood sugar control and diabetes management'],
            ['value' => 'Kidney-protective blood pressure medications'],
            ['value' => 'Dietary salt, protein, and fluid management'],
            ['value' => 'Regular urine and kidney function testing'],
            ['value' => 'Dialysis or kidney transplantation in advanced disease'],
        ],
                'recovery' => 'Early diabetic kidney disease can often be slowed significantly through proper blood sugar control, healthy lifestyle changes, and regular medical monitoring. Delayed treatment increases the risk of permanent kidney failure and cardiovascular complications.',
                'sort_order' => 50,
                'is_active' => true,
                'meta_title' => 'Renal Complications of Diabetes',
                'meta_description' => 'Renal complications of diabetes refer to kidney damage caused by long-standing diabetes mellitus, commonly known as diabetic nephropathy. High blood sugar damag',
                'meta_keywords' => '',
            ]
        );
    }
}
