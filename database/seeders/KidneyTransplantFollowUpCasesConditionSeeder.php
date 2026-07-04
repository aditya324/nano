<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KidneyTransplantFollowUpCasesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Kidney Transplant Follow-Up Cases')],
            [
                'name' => 'Kidney Transplant Follow-Up Cases',
                'slug' => Str::slug('Kidney Transplant Follow-Up Cases'),
                'h1' => 'Kidney Transplant Follow-Up Cases',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Kidney transplant follow-up involves ongoing monitoring and medical care after kidney transplantation to ensure proper kidney function and prevent rejection or complications. Lifelong follow-up is essential for transplant success.',
                'about_more' => '',
                'overview' => 'Kidney transplant follow-up involves ongoing monitoring and medical care after kidney transplantation to ensure proper kidney function and prevent rejection or complications. Lifelong follow-up is essential for transplant success.',
                'symptoms' => [
            ['value' => 'Fatigue or swelling suggesting kidney dysfunction'],
            ['value' => 'Fever or signs of infection'],
            ['value' => 'Reduced urine output'],
            ['value' => 'High blood pressure'],
            ['value' => 'Pain or tenderness around transplant area'],
        ],
                'causes' => [
            ['value' => 'Risk of immune rejection of transplanted kidney'],
            ['value' => 'Infections due to immunosuppressive medications'],
            ['value' => 'Medication non-compliance'],
            ['value' => 'Recurrence of original kidney disease'],
            ['value' => 'Medication side effects affecting organs'],
        ],
                'risks' => [
            ['value' => 'Acute or chronic transplant rejection'],
            ['value' => 'Severe infections due to lowered immunity'],
            ['value' => 'Medication-related liver or metabolic problems'],
            ['value' => 'Cardiovascular disease risk'],
            ['value' => 'Loss of transplanted kidney function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifelong immunosuppressive medications'],
            ['value' => 'Regular blood tests and kidney monitoring'],
            ['value' => 'Infection prevention and vaccination'],
            ['value' => 'Blood pressure and diabetes management'],
            ['value' => 'Prompt treatment of rejection episodes'],
        ],
                'recovery' => 'Most kidney transplant recipients experience greatly improved quality of life and kidney function. Regular follow-up and strict medication adherence are essential for long-term transplant success.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Kidney Transplant Follow-Up Cases',
                'meta_description' => 'Kidney transplant follow-up involves ongoing monitoring and medical care after kidney transplantation to ensure proper kidney function and prevent rejection or ',
                'meta_keywords' => '',
            ]
        );
    }
}
