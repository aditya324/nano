<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyDialysisAccessSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Emergency Dialysis Access')],
            [
                'title' => 'Emergency Dialysis Access',
                'slug' => Str::slug('Emergency Dialysis Access'),
                'introduction' => 'Emergency Dialysis Access is a critical nephrology facility designed to provide immediate dialysis support for patients with life-threatening kidney failure or severe metabolic disturbances. Rapid dialysis access is essential in emergencies such as severe hyperkalemia, pulmonary edema, toxin accumulation, or acute kidney injury. The facility ensures prompt evaluation, vascular access placement, and initiation of urgent dialysis therapy.',
                'what_is' => 'Emergency dialysis services include: Rapid nephrology assessment Emergency vascular access placement Urgent hemodialysis initiation ICU dialysis coordination Electrolyte correction Fluid overload management Continuous patient monitoring The facility is equipped with: Emergency dialysis machines Dialysis catheters Monitoring systems Resuscitation equipment Trained dialysis and ICU staff Doctors carefully monitor: Blood pressure Electrolyte levels Heart rhythm Fluid status Oxygen levels Kidney function Quick intervention helps prevent life-threatening complications related to kidney failure.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty from fluid overload'],
            ['value' => 'Dangerous hyperkalemia'],
            ['value' => 'Severe metabolic acidosis'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Altered consciousness due to uremia'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Sudden cardiac complications'],
            ['value' => 'Blood pressure instability'],
            ['value' => 'Infection risk'],
            ['value' => 'Catheter-related complications'],
            ['value' => 'Critical illness progression'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue dialysis follow-up as advised'],
            ['value' => 'Maintain catheter hygiene carefully'],
            ['value' => 'Follow fluid and dietary restrictions'],
            ['value' => 'Attend regular nephrology reviews'],
            ['value' => 'Monitor symptoms closely after emergency treatment'],
        ],
                'surgery_risks' => [
            ['value' => 'Sudden cardiac complications'],
            ['value' => 'Blood pressure instability'],
            ['value' => 'Infection risk'],
            ['value' => 'Catheter-related complications'],
            ['value' => 'Critical illness progression'],
        ],
                'long_term_outlook' => 'Rapid emergency dialysis access significantly improves survival in life-threatening renal emergencies. Early intervention and specialized nephrology support help stabilize patients and improve long-term kidney care outcomes.',
                'conclusion' => '',
                'seo_title' => 'Emergency Dialysis Access',
                'seo_description' => 'Emergency Dialysis Access is a critical nephrology facility designed to provide immediate dialysis support for patients with life-threatening kidney failure or severe metabolic disturbances. Rapid dialysis access is essential in emergencies such as severe hyperkalemia, pulmonary edema, toxin accumulation, or acute kidney injury. The facility ensures prompt evaluation, vascular access placement, and initiation of urgent dialysis therapy.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
