<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InpatientNephrologyCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Inpatient Nephrology Care')],
            [
                'name' => 'Inpatient Nephrology Care',
                'slug' => Str::slug('Inpatient Nephrology Care'),
                'h1' => 'Inpatient Nephrology Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Inpatient nephrology care is a hospital-based medical service designed for patients with severe kidney diseases or complications requiring continuous monitoring, intensive treatment, and specialized renal management.',
                'about_more' => 'This service is essential for patients with acute kidney injury, severe electrolyte imbalance, uncontrolled hypertension, fluid overload, kidney infections, or advanced chronic kidney disease. Hospital-based nephrology care allows rapid medical intervention and close supervision during critical illness.',
                'overview' => 'The inpatient nephrology team manages: Acute kidney failure Severe fluid retention Electrolyte disturbances Dialysis needs Kidney-related infections Hypertensive emergencies Treatment may include: IV medications Dialysis support Fluid management Electrolyte correction Blood pressure stabilization Nutritional support Patients are continuously monitored using blood investigations, urine output measurements, cardiac monitoring, and kidney function assessments. The nephrology team coordinates with intensive care specialists, diabetologists, cardiologists, and surgeons when necessary.',
                'symptoms' => [
            ['value' => 'Severe swelling or edema'],
            ['value' => 'Sudden decrease in urine output'],
            ['value' => 'Severe weakness or confusion'],
            ['value' => 'Breathing difficulty due to fluid overload'],
            ['value' => 'Uncontrolled blood pressure'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure progression'],
            ['value' => 'Cardiac complications'],
            ['value' => 'Severe electrolyte abnormalities'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Multi-organ complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continue medications after discharge'],
            ['value' => 'Attend nephrology follow-up appointments'],
            ['value' => 'Monitor blood pressure and urine output'],
            ['value' => 'Follow fluid and dietary recommendations'],
            ['value' => 'Maintain regular kidney function testing'],
        ],
                'recovery' => 'Inpatient nephrology care improves stabilization and survival in severe kidney disorders. Comprehensive hospital management and long-term renal monitoring help reduce complications and support improved kidney function outcomes.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Inpatient Nephrology Care',
                'meta_description' => 'Inpatient nephrology care is a hospital-based medical service designed for patients with severe kidney diseases or complications requiring continuous monitoring',
                'meta_keywords' => '',
            ]
        );
    }
}
