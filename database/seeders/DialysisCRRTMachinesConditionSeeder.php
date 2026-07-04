<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisCRRTMachinesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dialysis / CRRT Machines')],
            [
                'name' => 'Dialysis / CRRT Machines',
                'slug' => Str::slug('Dialysis / CRRT Machines'),
                'h1' => 'Dialysis / CRRT Machines',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dialysis and Continuous Renal Replacement Therapy (CRRT) machines are advanced medical devices used to support kidney function in patients with severe kidney failure, critical illness, fluid overload, or life-threatening metabolic imbalances. These machines help remove waste products, toxins, excess fluids, and electrolyte abnormalities from the blood when the kidneys are unable to function effectively.',
                'about_more' => '',
                'overview' => 'Dialysis machines are commonly used for hemodialysis procedures in patients with acute or chronic kidney disease, while CRRT machines provide continuous and slower blood purification therapy for critically ill or hemodynamically unstable patients in intensive care units. These systems circulate blood through specialized filters that remove toxins, excess fluid, and metabolic waste before returning purified blood to the body. Dialysis and CRRT machines are widely used in nephrology units, intensive care units, emergency departments, and critical care settings for patients requiring advanced renal support and metabolic stabilization.',
                'symptoms' => [
            ['value' => 'Severe kidney failure or reduced urine output'],
            ['value' => 'Fluid overload causing swelling or breathing difficulty'],
            ['value' => 'Severe electrolyte imbalance or metabolic acidosis'],
            ['value' => 'Confusion, fatigue, or toxin buildup affecting organ function'],
            ['value' => 'Critical illness requiring continuous renal and metabolic support'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Low blood pressure or circulatory instability during treatment'],
            ['value' => 'Infection or clotting related to dialysis access sites'],
            ['value' => 'Electrolyte imbalance or rapid fluid shifts'],
            ['value' => 'Bleeding complications associated with anticoagulation therapy'],
            ['value' => 'Mechanical malfunction or interruption of blood purification therapy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dialysis and CRRT machines support critical patient care by maintaining fluid balance, correcting electrolyte abnormalities, removing toxins, and supporting organ function during severe kidney dysfunction or critical illness. These systems assist healthcare professionals in managing acute kidney injury, chronic kidney disease, sepsis, shock, multi-organ failure, severe metabolic disturbances, and fluid overload conditions. Treatment may include intermittent hemodialysis, continuous renal replacement therapy, fluid removal management, electrolyte correction, anticoagulation monitoring, and integration with ICU monitoring and life-support systems to optimize patient recovery and survival.'],
            ['value' => 'Continuous monitoring of kidney function and fluid balance'],
            ['value' => 'Regular assessment of dialysis access sites and machine performance'],
            ['value' => 'Monitoring electrolyte levels, blood pressure, and metabolic status'],
            ['value' => 'Infection prevention and anticoagulation management during therapy'],
            ['value' => 'Long-term nephrology follow-up and renal care planning when required'],
        ],
                'recovery' => 'The long-term outlook associated with dialysis and CRRT machine support depends on the underlying kidney condition, severity of critical illness, duration of renal dysfunction, and overall patient health. Early renal support, effective critical care management, nutritional therapy, rehabilitation, medication adherence, and regular nephrology follow-up significantly help improve metabolic stability, support organ recovery, reduce complications, and enhance overall quality of life. ________________ 80. Emergency Airway & Intubation Equipment Emergency Airway & Intubation Equipment Equipment',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Dialysis / CRRT Machines',
                'meta_description' => 'Dialysis and Continuous Renal Replacement Therapy (CRRT) machines are advanced medical devices used to support kidney function in patients with severe kidney fa',
                'meta_keywords' => '',
            ]
        );
    }
}
