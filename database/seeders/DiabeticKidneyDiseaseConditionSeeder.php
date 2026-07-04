<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticKidneyDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Kidney Disease')],
            [
                'name' => 'Diabetic Kidney Disease',
                'slug' => Str::slug('Diabetic Kidney Disease'),
                'h1' => 'Diabetic Kidney Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic kidney disease, also called diabetic nephropathy, is kidney damage caused by long-standing diabetes mellitus. High blood sugar levels gradually damage the tiny blood vessels in the kidneys, reducing their filtering ability over time. It is one of the leading causes of chronic kidney disease and kidney failure worldwide.',
                'about_more' => '',
                'overview' => 'Diabetic kidney disease, also called diabetic nephropathy, is kidney damage caused by long-standing diabetes mellitus. High blood sugar levels gradually damage the tiny blood vessels in the kidneys, reducing their filtering ability over time. It is one of the leading causes of chronic kidney disease and kidney failure worldwide.',
                'symptoms' => [
            ['value' => 'Swelling of feet, ankles, or face'],
            ['value' => 'Persistent protein in urine'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Increased blood pressure'],
            ['value' => 'Reduced kidney function in advanced stages'],
        ],
                'causes' => [
            ['value' => 'Poorly controlled diabetes mellitus'],
            ['value' => 'Long duration of diabetes'],
            ['value' => 'High blood pressure'],
            ['value' => 'Obesity and unhealthy lifestyle habits'],
            ['value' => 'Smoking and cardiovascular disease risk factors'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'End-stage kidney failure requiring dialysis'],
            ['value' => 'Heart disease and stroke'],
            ['value' => 'Vision and nerve complications from diabetes'],
            ['value' => 'Increased hospitalization and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Tight blood sugar control'],
            ['value' => 'Blood pressure management with kidney-protective drugs'],
            ['value' => 'Dietary modification and reduced salt intake'],
            ['value' => 'Regular kidney function monitoring'],
            ['value' => 'Dialysis or transplant in advanced disease'],
        ],
                'recovery' => 'Early diabetic kidney disease can often be slowed significantly with proper diabetes control and healthy lifestyle changes. Delayed treatment increases the risk of permanent kidney damage and kidney failure.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Diabetic Kidney Disease',
                'meta_description' => 'Diabetic kidney disease, also called diabetic nephropathy, is kidney damage caused by long-standing diabetes mellitus. High blood sugar levels gradually damage ',
                'meta_keywords' => '',
            ]
        );
    }
}
