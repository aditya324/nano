<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyDialysisRenalReplacementTherapyCRRTHDSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Emergency Dialysis / Renal Replacement Therapy (CRRT / HD)')],
            [
                'title' => 'Emergency Dialysis / Renal Replacement Therapy (CRRT / HD)',
                'slug' => Str::slug('Emergency Dialysis / Renal Replacement Therapy (CRRT / HD)'),
                'introduction' => 'Emergency dialysis and renal replacement therapy are advanced medical procedures used to support kidney function in critically ill patients whose kidneys are unable to effectively remove waste products, excess fluids, and toxins from the body. Continuous Renal Replacement Therapy (CRRT) and Hemodialysis (HD) are commonly used forms of dialysis that help maintain fluid, electrolyte, and metabolic balance in patients with severe kidney dysfunction, shock, sepsis, or multi-organ failure.',
                'what_is' => 'Hemodialysis (HD) is a procedure in which blood is filtered through a dialysis machine to remove toxins and excess fluid before being returned to the body. Continuous Renal Replacement Therapy (CRRT) is a slower and continuous form of dialysis commonly used in critically ill or hemodynamically unstable patients in intensive care units. These procedures are performed using specialized dialysis machines and vascular access catheters under close monitoring by nephrologists, intensivists, and critical care teams to support organ function and stabilize critically ill patients.',
                'symptoms' => [
            ['value' => 'Severe kidney failure or reduced urine output'],
            ['value' => 'Fluid overload causing swelling or breathing difficulty'],
            ['value' => 'Severe electrolyte imbalance or metabolic acidosis'],
            ['value' => 'Confusion, fatigue, or altered mental status due to toxin buildup'],
            ['value' => 'Life-threatening complications associated with acute kidney injury or chronic kidney disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Low blood pressure or circulatory instability during dialysis'],
            ['value' => 'Bleeding, infection, or clotting related to dialysis access'],
            ['value' => 'Electrolyte imbalance or rapid fluid shifts'],
            ['value' => 'Catheter-related complications or bloodstream infections'],
            ['value' => 'Increased risk of organ dysfunction in critically ill patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Emergency dialysis and renal replacement therapy procedures focus on removing toxins, correcting electrolyte abnormalities, maintaining fluid balance, and supporting kidney function during critical illness. Management may include CRRT, intermittent hemodialysis, fluid removal therapy, electrolyte correction, blood pressure support, intensive care monitoring, and treatment of underlying conditions such as sepsis, shock, acute kidney injury, or chronic kidney disease. Patients often require multidisciplinary care involving nephrologists, intensivists, cardiologists, critical care nurses, and rehabilitation specialists to optimize recovery and long-term kidney health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of kidney function and fluid balance'],
            ['value' => 'Regular laboratory evaluation of electrolytes and metabolic status'],
            ['value' => 'Monitoring dialysis access sites for infection or bleeding'],
            ['value' => 'Adjustment of dialysis settings and supportive medications as needed'],
            ['value' => 'Long-term nephrology follow-up and renal care planning when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Low blood pressure or circulatory instability during dialysis'],
            ['value' => 'Bleeding, infection, or clotting related to dialysis access'],
            ['value' => 'Electrolyte imbalance or rapid fluid shifts'],
            ['value' => 'Catheter-related complications or bloodstream infections'],
            ['value' => 'Increased risk of organ dysfunction in critically ill patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Emergency dialysis and renal replacement therapy procedures focus on removing toxins, correcting electrolyte abnormalities, maintaining fluid balance, and supporting kidney function during critical illness. Management may include CRRT, intermittent hemodialysis, fluid removal therapy, electrolyte correction, blood pressure support, intensive care monitoring, and treatment of underlying conditions such as sepsis, shock, acute kidney injury, or chronic kidney disease. Patients often require multidisciplinary care involving nephrologists, intensivists, cardiologists, critical care nurses, and rehabilitation specialists to optimize recovery and long-term kidney health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following emergency dialysis or renal replacement therapy depends on the underlying kidney condition, severity of critical illness, response to treatment, and overall patient health. Early intervention, effective critical care management, medication adherence, nutritional support, rehabilitation, and regular nephrology follow-up significantly help improve kidney recovery, reduce complications, support organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Emergency Dialysis / Renal Replacement Therapy (CRRT / HD)',
                'seo_description' => 'Emergency dialysis and renal replacement therapy are advanced medical procedures used to support kidney function in critically ill patients whose kidneys are unable to effectively remove waste products, excess fluids, and toxins from the body. Continuous Renal Replacement Therapy (CRRT) and Hemodialysis (HD) are commonly used forms of dialysis that help maintain fluid, electrolyte, and metabolic balance in patients with severe kidney dysfunction, shock, sepsis, or multi-organ failure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
