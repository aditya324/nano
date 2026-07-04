<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyDialysisAccessConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Emergency Dialysis Access')],
            [
                'name' => 'Emergency Dialysis Access',
                'slug' => Str::slug('Emergency Dialysis Access'),
                'h1' => 'Emergency Dialysis Access',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Emergency Dialysis Access is a critical nephrology facility designed to provide immediate dialysis support for patients with life-threatening kidney failure or severe metabolic disturbances.',
                'about_more' => 'Rapid dialysis access is essential in emergencies such as severe hyperkalemia, pulmonary edema, toxin accumulation, or acute kidney injury. The facility ensures prompt evaluation, vascular access placement, and initiation of urgent dialysis therapy.',
                'overview' => 'Emergency dialysis services include: Rapid nephrology assessment Emergency vascular access placement Urgent hemodialysis initiation ICU dialysis coordination Electrolyte correction Fluid overload management Continuous patient monitoring The facility is equipped with: Emergency dialysis machines Dialysis catheters Monitoring systems Resuscitation equipment Trained dialysis and ICU staff Doctors carefully monitor: Blood pressure Electrolyte levels Heart rhythm Fluid status Oxygen levels Kidney function Quick intervention helps prevent life-threatening complications related to kidney failure.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty from fluid overload'],
            ['value' => 'Dangerous hyperkalemia'],
            ['value' => 'Severe metabolic acidosis'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Altered consciousness due to uremia'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Sudden cardiac complications'],
            ['value' => 'Blood pressure instability'],
            ['value' => 'Infection risk'],
            ['value' => 'Catheter-related complications'],
            ['value' => 'Critical illness progression'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continue dialysis follow-up as advised'],
            ['value' => 'Maintain catheter hygiene carefully'],
            ['value' => 'Follow fluid and dietary restrictions'],
            ['value' => 'Attend regular nephrology reviews'],
            ['value' => 'Monitor symptoms closely after emergency treatment'],
        ],
                'recovery' => 'Rapid emergency dialysis access significantly improves survival in life-threatening renal emergencies. Early intervention and specialized nephrology support help stabilize patients and improve long-term kidney care outcomes.',
                'sort_order' => 44,
                'is_active' => true,
                'meta_title' => 'Emergency Dialysis Access',
                'meta_description' => 'Emergency Dialysis Access is a critical nephrology facility designed to provide immediate dialysis support for patients with life-threatening kidney failure or ',
                'meta_keywords' => '',
            ]
        );
    }
}
