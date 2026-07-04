<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticKidneyDiseaseManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Kidney Disease Management')],
            [
                'name' => 'Diabetic Kidney Disease Management',
                'slug' => Str::slug('Diabetic Kidney Disease Management'),
                'h1' => 'Diabetic Kidney Disease Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic kidney disease management is a specialized nephrology and diabetes care program focused on preventing and treating kidney damage caused by diabetes mellitus.',
                'about_more' => 'Diabetes is one of the leading causes of chronic kidney disease and kidney failure worldwide. Elevated blood sugar levels gradually damage the kidney’s filtering system over time. Early diagnosis and aggressive management are essential to protect kidney function and reduce long-term complications.',
                'overview' => 'The management plan includes: Blood sugar control Kidney function monitoring Urine protein assessment Blood pressure management Dietary counseling Medication optimization Treatment commonly involves: Diabetes medications or insulin Kidney-protective medications Low-salt and diabetic diet planning Lifestyle modification Doctors regularly monitor kidney filtration rate, urine protein levels, blood pressure, and cardiovascular health. Education regarding diabetes control and kidney protection is a major part of treatment.',
                'symptoms' => [
            ['value' => 'Swelling of feet or face'],
            ['value' => 'Protein in urine'],
            ['value' => 'Fatigue'],
            ['value' => 'High blood pressure'],
            ['value' => 'Poor blood sugar control'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Progressive kidney failure'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Heart disease'],
            ['value' => 'Severe hypertension'],
            ['value' => 'Nerve and eye complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain strict blood sugar control'],
            ['value' => 'Follow diabetic and renal diet plans'],
            ['value' => 'Monitor kidney function regularly'],
            ['value' => 'Take medications consistently'],
            ['value' => 'Attend regular nephrology and diabetes follow-up visits'],
        ],
                'recovery' => 'Early diabetic kidney disease management significantly delays kidney failure and improves survival. Integrated diabetes and nephrology care continues to improve long-term renal and cardiovascular outcomes.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Diabetic Kidney Disease Management',
                'meta_description' => 'Diabetic kidney disease management is a specialized nephrology and diabetes care program focused on preventing and treating kidney damage caused by diabetes mel',
                'meta_keywords' => '',
            ]
        );
    }
}
