<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RapidFluidResuscitationElectrolyteCorrectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rapid Fluid Resuscitation & Electrolyte Correction')],
            [
                'name' => 'Rapid Fluid Resuscitation & Electrolyte Correction',
                'slug' => Str::slug('Rapid Fluid Resuscitation & Electrolyte Correction'),
                'h1' => 'Rapid Fluid Resuscitation & Electrolyte Correction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Rapid fluid resuscitation and electrolyte correction are emergency medical procedures used to restore circulating blood volume, maintain blood pressure, improve organ perfusion, and correct dangerous electrolyte imbalances in critically ill patients. These interventions are essential in conditions such as shock, severe dehydration, sepsis, trauma, diabetic emergencies, kidney dysfunction, and critical illness where rapid stabilization of fluid and metabolic balance is necessary to prevent organ failure and life-threatening complications.',
                'about_more' => '',
                'overview' => 'Fluid resuscitation involves the rapid administration of intravenous fluids such as crystalloids, colloids, or blood products to restore circulation and improve oxygen delivery to tissues. Electrolyte correction focuses on balancing essential minerals including sodium, potassium, calcium, magnesium, and chloride that are necessary for normal heart, nerve, muscle, and organ function. These procedures are commonly performed in emergency departments, intensive care units, trauma centers, and critical care settings with continuous monitoring of vital signs, urine output, cardiac function, and laboratory parameters.',
                'symptoms' => [
            ['value' => 'Severe dehydration, low blood pressure, or shock'],
            ['value' => 'Rapid heartbeat, dizziness, or fainting episodes'],
            ['value' => 'Muscle weakness, cramps, or abnormal heart rhythms'],
            ['value' => 'Confusion, fatigue, or altered mental status'],
            ['value' => 'Reduced urine output or signs of organ dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Fluid overload causing respiratory or cardiac complications'],
            ['value' => 'Electrolyte overcorrection leading to cardiac arrhythmias or neurological symptoms'],
            ['value' => 'Tissue swelling or pulmonary edema in severe cases'],
            ['value' => 'Blood pressure instability during rapid fluid administration'],
            ['value' => 'Kidney dysfunction or metabolic imbalance in critically ill patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Rapid fluid resuscitation and electrolyte correction procedures focus on stabilizing circulation, restoring fluid balance, correcting metabolic abnormalities, and supporting organ function. Management may include intravenous fluid therapy, electrolyte replacement, blood transfusions, cardiac monitoring, oxygen therapy, vasopressor support, laboratory monitoring, and intensive care management when required. Patients may also receive treatment for underlying conditions such as sepsis, trauma, diabetic emergencies, kidney disease, gastrointestinal fluid loss, or severe infections. Multidisciplinary critical care support is essential to optimize recovery and reduce complications.'],
            ['value' => 'Continuous monitoring of blood pressure, heart rate, and urine output'],
            ['value' => 'Regular laboratory evaluation of electrolyte and metabolic status'],
            ['value' => 'Monitoring for signs of fluid overload or cardiac complications'],
            ['value' => 'Adjustment of intravenous fluids and electrolyte therapy as needed'],
            ['value' => 'Long-term medical follow-up and supportive care depending on the underlying condition'],
        ],
                'recovery' => 'The long-term outlook following rapid fluid resuscitation and electrolyte correction depends on the underlying illness, severity of metabolic imbalance, speed of treatment, and overall patient health. Early medical intervention, careful monitoring, rehabilitation support, medication adherence, hydration management, and regular follow-up significantly help restore normal organ function, prevent complications, improve recovery outcomes, and enhance overall quality of life. _______________________ 6. Central Line & Arterial Line Insertion Central Line & Arterial Line Insertion Procedures',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Rapid Fluid Resuscitation & Electrolyte Correction',
                'meta_description' => 'Rapid fluid resuscitation and electrolyte correction are emergency medical procedures used to restore circulating blood volume, maintain blood pressure, improve',
                'meta_keywords' => '',
            ]
        );
    }
}
