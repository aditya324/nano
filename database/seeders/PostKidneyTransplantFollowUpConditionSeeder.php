<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostKidneyTransplantFollowUpConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post–Kidney Transplant Follow-Up')],
            [
                'name' => 'Post–Kidney Transplant Follow-Up',
                'slug' => Str::slug('Post–Kidney Transplant Follow-Up'),
                'h1' => 'Post–Kidney Transplant Follow-Up',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post–kidney transplant follow-up is a long-term nephrology care program focused on monitoring transplanted kidney function and preventing complications after kidney transplantation.',
                'about_more' => 'Continuous follow-up is essential because transplant patients require lifelong monitoring, medication adjustment, and early detection of rejection or infection. Regular care helps maintain healthy transplant function and improve survival outcomes.',
                'overview' => 'Follow-up care includes: Kidney function testing Immunosuppressive medication monitoring Blood pressure control Infection screening Blood sugar monitoring Nutritional counseling Doctors carefully monitor: Creatinine levels Urine output Drug levels Signs of rejection Cardiovascular health Patients receive guidance regarding: Medication adherence Infection prevention Hydration Healthy lifestyle practices Frequent monitoring is especially important during the early months after transplantation.',
                'symptoms' => [
            ['value' => 'Fever or infection symptoms'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Swelling or weight gain'],
            ['value' => 'Elevated creatinine levels'],
            ['value' => 'Pain near transplant area'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Organ rejection'],
            ['value' => 'Serious infections'],
            ['value' => 'Medication toxicity'],
            ['value' => 'High blood pressure'],
            ['value' => 'Diabetes after transplant'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Take immunosuppressive medications regularly'],
            ['value' => 'Attend all transplant follow-up appointments'],
            ['value' => 'Monitor blood pressure and weight'],
            ['value' => 'Maintain hygiene and infection precautions'],
            ['value' => 'Report fever or reduced urine output immediately'],
        ],
                'recovery' => 'Regular post-transplant follow-up significantly improves transplant survival and long-term kidney function. Modern transplant medicine and careful monitoring continue to enhance long-term patient outcomes and quality of life.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Post–Kidney Transplant Follow-Up',
                'meta_description' => 'Post–kidney transplant follow-up is a long-term nephrology care program focused on monitoring transplanted kidney function and preventing complications after ki',
                'meta_keywords' => '',
            ]
        );
    }
}
