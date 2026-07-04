<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ICUBedwithVentilatorConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('ICU Bed with Ventilator')],
            [
                'name' => 'ICU Bed with Ventilator',
                'slug' => Str::slug('ICU Bed with Ventilator'),
                'h1' => 'ICU Bed with Ventilator',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An ICU bed with ventilator is an advanced critical care setup designed to support critically ill patients requiring intensive monitoring, respiratory assistance, and continuous life-support management. The ICU bed provides patient positioning, mobility support, and emergency access, while the ventilator assists or completely supports breathing in patients with respiratory failure, severe illness, trauma, or postoperative complications.',
                'about_more' => '',
                'overview' => 'ICU beds are specially designed hospital beds equipped with adjustable positioning systems, safety features, pressure-relief support, and integrated monitoring compatibility to improve patient care and comfort during intensive treatment. Ventilators are advanced respiratory support machines connected to patients through invasive or non-invasive airway systems to deliver oxygen, regulate breathing patterns, and maintain adequate gas exchange. ICU bed and ventilator systems are commonly used in intensive care units, emergency departments, trauma centers, postoperative recovery units, and critical care facilities for patients requiring continuous life-support management and close medical supervision.',
                'symptoms' => [
            ['value' => 'Severe respiratory distress or respiratory failure'],
            ['value' => 'Low oxygen levels or difficulty maintaining normal breathing'],
            ['value' => 'Critical illness requiring intensive monitoring and organ support'],
            ['value' => 'Trauma, sepsis, or neurological conditions affecting breathing'],
            ['value' => 'Postoperative complications or prolonged unconsciousness requiring ventilatory support'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Ventilator-associated pneumonia or respiratory infections'],
            ['value' => 'Pressure ulcers or reduced mobility during prolonged ICU stay'],
            ['value' => 'Airway complications or ventilator-related lung injury'],
            ['value' => 'Muscle weakness or difficulty weaning from ventilator support'],
            ['value' => 'Increased risk of multi-organ complications in critically ill patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ICU beds with ventilator support systems are used to stabilize critically ill patients, improve oxygen delivery, maintain respiratory function, and support recovery from severe illness or injury. Management may include invasive or non-invasive ventilation, oxygen therapy, hemodynamic monitoring, suctioning, airway care, sedation management, physiotherapy, nutritional support, and continuous critical care observation. Patients may also require multidisciplinary treatment involving intensivists, pulmonologists, respiratory therapists, nurses, physiotherapists, and rehabilitation specialists to optimize recovery and reduce complications.'],
            ['value' => 'Continuous monitoring of respiratory and cardiovascular function'],
            ['value' => 'Regular airway care, suctioning, and ventilator management'],
            ['value' => 'Prevention of pressure injuries and infection control measures'],
            ['value' => 'Physiotherapy, mobility support, and gradual ventilator weaning'],
            ['value' => 'Long-term rehabilitation and follow-up care when required'],
        ],
                'recovery' => 'The long-term outlook following ICU ventilator support depends on the underlying medical condition, duration of intensive care treatment, severity of respiratory dysfunction, and overall patient health. Early critical care intervention, effective ventilator management, rehabilitation support, nutritional care, physiotherapy, and regular medical follow-up significantly help improve respiratory recovery, reduce complications, restore physical function, and enhance overall quality of life. ________________________ 72. Multipara Monitors Multipara Monitor Procedures',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'ICU Bed with Ventilator',
                'meta_description' => 'An ICU bed with ventilator is an advanced critical care setup designed to support critically ill patients requiring intensive monitoring, respiratory assistance',
                'meta_keywords' => '',
            ]
        );
    }
}
