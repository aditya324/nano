<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HemodynamicMonitoringSupportVasopressorsInotropesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hemodynamic Monitoring & Support (Vasopressors, Inotropes)')],
            [
                'name' => 'Hemodynamic Monitoring & Support (Vasopressors, Inotropes)',
                'slug' => Str::slug('Hemodynamic Monitoring & Support (Vasopressors, Inotropes)'),
                'h1' => 'Hemodynamic Monitoring & Support (Vasopressors, Inotropes)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hemodynamic monitoring and support are critical care procedures used to assess and maintain stable blood circulation, blood pressure, cardiac function, and organ perfusion in critically ill patients. Vasopressors and inotropes are specialized medications used to improve blood pressure, strengthen heart contractions, and support circulation during medical emergencies such as shock, severe heart failure, sepsis, and critical illness.',
                'about_more' => '',
                'overview' => 'Hemodynamic monitoring involves continuous assessment of vital cardiovascular parameters including blood pressure, heart rate, oxygen delivery, cardiac output, and tissue perfusion using advanced monitoring systems and invasive or non-invasive techniques. Vasopressors help constrict blood vessels to increase blood pressure, while inotropes improve the pumping strength of the heart. These procedures are commonly performed in intensive care units, emergency departments, operating rooms, and cardiac care settings for patients with severe circulatory instability or organ dysfunction.',
                'symptoms' => [
            ['value' => 'Severe low blood pressure or circulatory collapse'],
            ['value' => 'Rapid heartbeat, weak pulse, or shock symptoms'],
            ['value' => 'Reduced urine output or signs of poor organ perfusion'],
            ['value' => 'Confusion, dizziness, or altered consciousness'],
            ['value' => 'Respiratory distress, chest pain, or severe cardiac instability'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Abnormal heart rhythms or cardiac complications'],
            ['value' => 'Reduced blood supply to extremities or organs due to excessive vasoconstriction'],
            ['value' => 'Tissue injury from medication leakage outside blood vessels'],
            ['value' => 'Blood pressure fluctuations or hemodynamic instability'],
            ['value' => 'Increased risk of organ dysfunction in prolonged critical illness situations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hemodynamic monitoring and support procedures focus on stabilizing circulation, improving cardiac output, maintaining adequate blood pressure, and supporting vital organ function. Management may include invasive arterial monitoring, central venous catheter placement, vasopressor therapy, inotropic medications, intravenous fluid resuscitation, oxygen therapy, cardiac monitoring, ventilator support, and intensive care management. Patients may also require treatment for underlying conditions such as septic shock, acute heart failure, trauma, respiratory failure, or severe infections. Multidisciplinary critical care support is essential to optimize recovery and reduce complications.'],
            ['value' => 'Continuous cardiovascular and organ function monitoring'],
            ['value' => 'Gradual adjustment or reduction of vasopressor and inotropic support'],
            ['value' => 'Monitoring for medication-related complications or arrhythmias'],
            ['value' => 'Intensive care observation and supportive therapy'],
            ['value' => 'Long-term cardiac, renal, or critical care follow-up when required'],
        ],
                'recovery' => 'The long-term outlook following hemodynamic monitoring and circulatory support depends on the underlying critical illness, severity of organ dysfunction, response to treatment, and overall patient health. Early intensive care intervention, effective cardiovascular stabilization, rehabilitation support, medication management, and regular medical follow-up significantly help improve survival, restore organ function, reduce complications, and enhance overall quality of life. ________________________ 5. Rapid Fluid Resuscitation & Electrolyte Correction Rapid Fluid Resuscitation & Electrolyte Correction Procedures',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Hemodynamic Monitoring & Support (Vasopressors, Inotropes)',
                'meta_description' => 'Hemodynamic monitoring and support are critical care procedures used to assess and maintain stable blood circulation, blood pressure, cardiac function, and orga',
                'meta_keywords' => '',
            ]
        );
    }
}
