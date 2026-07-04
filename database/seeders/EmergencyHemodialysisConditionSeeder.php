<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyHemodialysisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Emergency Hemodialysis')],
            [
                'name' => 'Emergency Hemodialysis',
                'slug' => Str::slug('Emergency Hemodialysis'),
                'h1' => 'Emergency Hemodialysis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Emergency hemodialysis is an urgent kidney replacement therapy performed when life-threatening complications of kidney failure require immediate blood purification.',
                'about_more' => 'This emergency treatment rapidly removes toxins, excess fluids, and dangerous electrolyte abnormalities that cannot be controlled through medication alone. Emergency dialysis can be lifesaving in critically ill patients.',
                'overview' => 'Emergency hemodialysis is commonly required for: Severe hyperkalemia Pulmonary edema Severe acidosis Poisoning Acute kidney injury Uremic complications The procedure includes: Emergency vascular access insertion Intensive monitoring Rapid blood filtration Electrolyte correction Patients are closely observed during treatment for blood pressure changes, heart rhythm disturbances, and respiratory stability. After stabilization, long-term renal management planning is initiated.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty'],
            ['value' => 'Confusion or altered consciousness'],
            ['value' => 'Very low urine output'],
            ['value' => 'Severe swelling'],
            ['value' => 'Dangerous electrolyte imbalance'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Sudden blood pressure drop'],
            ['value' => 'Cardiac arrhythmias'],
            ['value' => 'Access-related bleeding'],
            ['value' => 'Infection risk'],
            ['value' => 'Dialysis complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continue nephrology monitoring closely'],
            ['value' => 'Follow fluid restrictions carefully'],
            ['value' => 'Maintain dialysis access hygiene'],
            ['value' => 'Attend scheduled follow-up dialysis sessions'],
            ['value' => 'Monitor symptoms of kidney failure'],
        ],
                'recovery' => 'Emergency dialysis often stabilizes life-threatening kidney complications successfully. Early treatment and continued renal care improve long-term survival and kidney disease management outcomes.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Emergency Hemodialysis',
                'meta_description' => 'Emergency hemodialysis is an urgent kidney replacement therapy performed when life-threatening complications of kidney failure require immediate blood purificat',
                'meta_keywords' => '',
            ]
        );
    }
}
