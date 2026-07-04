<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NephrologyOutpatientConsultationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nephrology Outpatient Consultation')],
            [
                'name' => 'Nephrology Outpatient Consultation',
                'slug' => Str::slug('Nephrology Outpatient Consultation'),
                'h1' => 'Nephrology Outpatient Consultation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nephrology outpatient consultation is a specialized medical service focused on the evaluation, diagnosis, treatment, and long-term monitoring of kidney-related diseases and urinary system disorders without hospital admission.',
                'about_more' => 'This service helps patients with early kidney disease, hypertension, electrolyte imbalance, diabetes-related kidney problems, and chronic renal disorders receive expert medical care through scheduled clinic visits. Early nephrology consultation plays an important role in preventing kidney damage, slowing disease progression, and improving overall health outcomes.',
                'overview' => 'During outpatient consultation, nephrologists assess: Kidney function Blood pressure Urine abnormalities Swelling and fluid retention Electrolyte balance Symptoms related to kidney disease The consultation may include: Blood and urine investigations Ultrasound review Medication adjustment Dietary counseling Blood pressure monitoring Lifestyle guidance Patients with conditions such as chronic kidney disease (CKD), kidney stones, diabetic nephropathy, glomerulonephritis, and hypertension may require regular nephrology follow-up visits. Long-term monitoring helps detect disease progression early and supports better kidney preservation strategies.',
                'symptoms' => [
            ['value' => 'Swelling of legs or face'],
            ['value' => 'High blood pressure'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Blood or protein in urine'],
            ['value' => 'Fatigue or weakness'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Progressive kidney damage'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Uncontrolled hypertension'],
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Increased cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular nephrology follow-up visits'],
            ['value' => 'Follow prescribed medications carefully'],
            ['value' => 'Maintain dietary and fluid restrictions if advised'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Complete kidney function tests as scheduled'],
        ],
                'recovery' => 'Regular nephrology consultation helps slow kidney disease progression, improve symptom control, and reduce complications. Early specialist intervention and continuous monitoring significantly improve long-term kidney health and overall quality of life.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Nephrology Outpatient Consultation',
                'meta_description' => 'Nephrology outpatient consultation is a specialized medical service focused on the evaluation, diagnosis, treatment, and long-term monitoring of kidney-related ',
                'meta_keywords' => '',
            ]
        );
    }
}
