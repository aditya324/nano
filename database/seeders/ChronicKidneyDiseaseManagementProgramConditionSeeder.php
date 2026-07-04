<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicKidneyDiseaseManagementProgramConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Kidney Disease Management Program')],
            [
                'name' => 'Chronic Kidney Disease Management Program',
                'slug' => Str::slug('Chronic Kidney Disease Management Program'),
                'h1' => 'Chronic Kidney Disease Management Program',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A chronic kidney disease (CKD) management program is a long-term nephrology care service designed to slow kidney damage progression, manage complications, and improve quality of life in patients with chronic kidney disease.',
                'about_more' => 'CKD is a gradual loss of kidney function that may occur due to diabetes, hypertension, inherited kidney disorders, autoimmune disease, or chronic infections. Early and continuous management is essential to delay kidney failure and reduce cardiovascular complications.',
                'overview' => 'The CKD management program includes: Kidney function monitoring Blood pressure control Diabetes management Dietary counseling Fluid and electrolyte monitoring Medication optimization Dialysis planning when required Patients undergo regular: Blood tests Urine analysis Imaging studies Nutritional assessment The program also emphasizes lifestyle modification, smoking cessation, exercise guidance, and patient education regarding kidney protection. Multidisciplinary care involving nephrologists, dietitians, diabetologists, and dialysis teams helps optimize treatment outcomes.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling of feet or face'],
            ['value' => 'Reduced appetite'],
            ['value' => 'High blood pressure'],
            ['value' => 'Changes in urination'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure'],
            ['value' => 'Heart disease'],
            ['value' => 'Severe anemia'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Need for dialysis or transplant'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow renal diet restrictions carefully'],
            ['value' => 'Take medications consistently'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Maintain follow-up laboratory testing'],
            ['value' => 'Avoid kidney-damaging substances'],
        ],
                'recovery' => 'Proper CKD management significantly slows disease progression and reduces complications. Advances in nephrology care and early intervention continue to improve survival, kidney preservation, and long-term quality of life.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Chronic Kidney Disease Management Program',
                'meta_description' => 'A chronic kidney disease (CKD) management program is a long-term nephrology care service designed to slow kidney damage progression, manage complications, and i',
                'meta_keywords' => '',
            ]
        );
    }
}
