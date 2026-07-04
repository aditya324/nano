<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofShockVasopressorsInotropesFluidsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Shock (Vasopressors, Inotropes, Fluids)')],
            [
                'title' => 'Management of Shock (Vasopressors, Inotropes, Fluids)',
                'slug' => Str::slug('Management of Shock (Vasopressors, Inotropes, Fluids)'),
                'introduction' => 'Management of shock involves emergency critical care procedures used to restore blood circulation, maintain blood pressure, improve oxygen delivery, and support vital organ function in patients experiencing severe circulatory failure. Shock is a life-threatening condition that can result from severe infection, blood loss, heart failure, trauma, dehydration, or other critical illnesses. Vasopressors, inotropes, and intravenous fluids are essential components of shock management used to stabilize circulation and prevent organ damage.',
                'what_is' => 'Shock management procedures are commonly performed in emergency departments, intensive care units, trauma centers, and critical care settings under continuous cardiovascular and hemodynamic monitoring. Intravenous fluid resuscitation is used to restore circulating blood volume and improve tissue perfusion. Vasopressors help constrict blood vessels to raise blood pressure, while inotropes strengthen heart contractions to improve cardiac output. Patients may also require oxygen therapy, ventilator support, invasive monitoring, and treatment of the underlying cause contributing to circulatory collapse.',
                'symptoms' => [
            ['value' => 'Low blood pressure or weak pulse'],
            ['value' => 'Rapid heartbeat and breathing difficulty'],
            ['value' => 'Cold, clammy, or pale skin'],
            ['value' => 'Confusion, dizziness, or altered consciousness'],
            ['value' => 'Reduced urine output, severe weakness, or signs of organ dysfunction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Multi-organ dysfunction or organ failure'],
            ['value' => 'Cardiac arrhythmias or severe cardiovascular instability'],
            ['value' => 'Respiratory failure requiring ventilatory support'],
            ['value' => 'Kidney injury or severe metabolic imbalance'],
            ['value' => 'Increased risk of circulatory collapse and life-threatening complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of shock focuses on restoring circulation, stabilizing blood pressure, improving oxygen delivery, and treating the underlying medical condition. Treatment may include intravenous fluid therapy, vasopressor medications, inotropic support, oxygen therapy, blood transfusions, cardiac monitoring, ventilator support, electrolyte correction, and intensive care management. Patients may also require antibiotics for septic shock, emergency surgery for trauma or bleeding, cardiac intervention for cardiogenic shock, and dialysis or organ support therapies in severe cases. Multidisciplinary critical care management is essential to optimize survival and recovery outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous hemodynamic and organ function monitoring'],
            ['value' => 'Adjustment of vasopressor, inotropic, and fluid therapy as required'],
            ['value' => 'Monitoring for arrhythmias, fluid overload, or organ complications'],
            ['value' => 'Nutritional support, physiotherapy, and rehabilitation care'],
            ['value' => 'Long-term medical follow-up and management of underlying conditions'],
        ],
                'surgery_risks' => [
            ['value' => 'Multi-organ dysfunction or organ failure'],
            ['value' => 'Cardiac arrhythmias or severe cardiovascular instability'],
            ['value' => 'Respiratory failure requiring ventilatory support'],
            ['value' => 'Kidney injury or severe metabolic imbalance'],
            ['value' => 'Increased risk of circulatory collapse and life-threatening complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of shock focuses on restoring circulation, stabilizing blood pressure, improving oxygen delivery, and treating the underlying medical condition. Treatment may include intravenous fluid therapy, vasopressor medications, inotropic support, oxygen therapy, blood transfusions, cardiac monitoring, ventilator support, electrolyte correction, and intensive care management. Patients may also require antibiotics for septic shock, emergency surgery for trauma or bleeding, cardiac intervention for cardiogenic shock, and dialysis or organ support therapies in severe cases. Multidisciplinary critical care management is essential to optimize survival and recovery outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following shock management depends on the underlying cause, severity of organ dysfunction, speed of emergency treatment, and overall patient health. Early intensive care intervention, effective circulatory stabilization, rehabilitation support, medication adherence, nutritional management, and regular medical follow-up significantly help improve survival, restore organ function, reduce complications, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Management of Shock (Vasopressors, Inotropes, Fluids)',
                'seo_description' => 'Management of shock involves emergency critical care procedures used to restore blood circulation, maintain blood pressure, improve oxygen delivery, and support vital organ function in patients experiencing severe circulatory failure. Shock is a life-threatening condition that can result from severe infection, blood loss, heart failure, trauma, dehydration, or other critical illnesses. Vasopressors, inotropes, and intravenous fluids are essential components of shock management used to stabilize circulation and prevent organ damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
