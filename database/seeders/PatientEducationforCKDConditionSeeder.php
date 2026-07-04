<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationforCKDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Patient Education for CKD')],
            [
                'name' => 'Patient Education for CKD',
                'slug' => Str::slug('Patient Education for CKD'),
                'h1' => 'Patient Education for CKD',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Patient education for chronic kidney disease (CKD) is a structured nephrology program designed to help patients understand kidney disease, treatment options, lifestyle changes, and methods to protect remaining kidney function.',
                'about_more' => 'Education empowers patients to actively participate in their healthcare and make informed treatment decisions. Proper understanding of CKD improves treatment adherence and reduces complications.',
                'overview' => 'The education program includes guidance regarding: Kidney disease stages Medication management Blood pressure control Diabetes management Diet and fluid restrictions Dialysis and transplant options Lifestyle modifications Patients learn about: Warning signs of worsening kidney disease Importance of laboratory monitoring Medication safety Infection prevention Long-term renal care planning Educational sessions may involve nephrologists, nurses, dietitians, and dialysis educators. Family participation is encouraged to improve support and long-term care compliance.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling or fluid retention'],
            ['value' => 'High blood pressure'],
            ['value' => 'Progressive kidney dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Poor treatment adherence'],
            ['value' => 'Rapid kidney disease progression'],
            ['value' => 'Medication errors'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Increased hospitalization risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend CKD education sessions regularly'],
            ['value' => 'Follow prescribed treatment plans carefully'],
            ['value' => 'Maintain recommended dietary restrictions'],
            ['value' => 'Monitor blood pressure and kidney function'],
            ['value' => 'Ask healthcare providers questions when needed'],
        ],
                'recovery' => 'CKD education improves self-care, treatment compliance, and disease understanding. Well-informed patients often experience better kidney preservation, fewer complications, and improved quality of life.',
                'sort_order' => 43,
                'is_active' => true,
                'meta_title' => 'Patient Education for CKD',
                'meta_description' => 'Patient education for chronic kidney disease (CKD) is a structured nephrology program designed to help patients understand kidney disease, treatment options, li',
                'meta_keywords' => '',
            ]
        );
    }
}
