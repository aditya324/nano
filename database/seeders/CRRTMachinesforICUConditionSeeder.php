<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CRRTMachinesforICUConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('CRRT Machines for ICU')],
            [
                'name' => 'CRRT Machines for ICU',
                'slug' => Str::slug('CRRT Machines for ICU'),
                'h1' => 'CRRT Machines for ICU',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Continuous Renal Replacement Therapy (CRRT) machines are advanced dialysis systems used in intensive care units (ICUs) for critically ill patients with severe kidney failure and unstable medical conditions.',
                'about_more' => 'CRRT provides slow, continuous blood purification and fluid removal, making it safer for critically ill patients who cannot tolerate regular dialysis. This therapy is commonly used in severe sepsis, shock, and multi-organ failure.',
                'overview' => 'CRRT machines provide: Continuous blood filtration Fluid balance correction Electrolyte stabilization Acid-base correction Gentle toxin removal The system is used in: Severe acute kidney injury Septic shock Multi-organ dysfunction ICU fluid overload Hemodynamic instability Critical-care specialists and nephrologists continuously monitor: Blood pressure Fluid status Electrolytes Oxygen levels Kidney function CRRT helps stabilize critically ill patients while supporting recovery from severe illness.',
                'symptoms' => [
            ['value' => 'Severe acute kidney injury'],
            ['value' => 'Septic shock'],
            ['value' => 'Multi-organ failure'],
            ['value' => 'Critical fluid overload'],
            ['value' => 'Severe metabolic disturbances'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Blood clotting in dialysis circuits'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Blood pressure instability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continue ICU monitoring carefully'],
            ['value' => 'Maintain dialysis catheter hygiene'],
            ['value' => 'Monitor fluid and electrolyte balance'],
            ['value' => 'Follow nephrology treatment plans'],
            ['value' => 'Attend follow-up care after ICU recovery'],
        ],
                'recovery' => 'CRRT technology significantly improves renal support for critically ill patients in intensive care settings. Advanced ICU nephrology care helps improve survival and recovery in severe kidney-related emergencies.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'CRRT Machines for ICU',
                'meta_description' => 'Continuous Renal Replacement Therapy (CRRT) machines are advanced dialysis systems used in intensive care units (ICUs) for critically ill patients with severe k',
                'meta_keywords' => '',
            ]
        );
    }
}
