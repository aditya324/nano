<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaResuscitationDamageControlSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Trauma Resuscitation & Damage Control Surgery')],
            [
                'name' => 'Trauma Resuscitation & Damage Control Surgery',
                'slug' => Str::slug('Trauma Resuscitation & Damage Control Surgery'),
                'h1' => 'Trauma Resuscitation & Damage Control Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Trauma resuscitation and damage control surgery are emergency critical care procedures used to stabilize severely injured patients with life-threatening trauma, uncontrolled bleeding, organ damage, or multiple injuries. These procedures focus on rapid stabilization of airway, breathing, circulation, hemorrhage control, and prevention of severe complications such as shock, hypothermia, acidosis, and organ failure. Damage control surgery prioritizes immediate life-saving interventions before definitive surgical repair.',
                'about_more' => '',
                'overview' => 'Trauma resuscitation begins with rapid assessment and stabilization of critically injured patients using advanced emergency and critical care protocols. Management may include airway support, oxygen therapy, fluid resuscitation, blood transfusions, hemorrhage control, fracture stabilization, and continuous hemodynamic monitoring. Damage control surgery involves abbreviated surgical procedures aimed at controlling bleeding, limiting contamination, and temporarily stabilizing injuries before definitive reconstruction is performed once the patient is medically stable. These procedures are commonly performed in trauma centers, emergency departments, operating rooms, and intensive care units by multidisciplinary trauma and critical care teams.',
                'symptoms' => [
            ['value' => 'Severe bleeding or signs of hemorrhagic shock'],
            ['value' => 'Difficulty breathing or respiratory distress following trauma'],
            ['value' => 'Loss of consciousness or altered mental status'],
            ['value' => 'Multiple fractures, open wounds, or organ injuries'],
            ['value' => 'Low blood pressure, rapid heartbeat, or signs of circulatory collapse'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Severe blood loss or hemorrhagic shock'],
            ['value' => 'Multi-organ dysfunction or organ failure'],
            ['value' => 'Infection, sepsis, or wound-related complications'],
            ['value' => 'Respiratory failure requiring ventilator support'],
            ['value' => 'Long-term disability or life-threatening complications from severe trauma'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Trauma resuscitation and damage control surgery procedures focus on stabilizing the patient, preserving organ function, controlling hemorrhage, and preventing further physiological deterioration. Management may include airway management, mechanical ventilation, massive blood transfusion protocols, intravenous fluids, vasopressor support, emergency surgery, temporary abdominal closure techniques, fracture stabilization, wound management, infection prevention, and intensive care monitoring. Patients often require multidisciplinary care involving trauma surgeons, orthopedic specialists, neurosurgeons, anesthesiologists, intensivists, rehabilitation teams, and physiotherapists to optimize survival and recovery outcomes.'],
            ['value' => 'Continuous intensive care monitoring and hemodynamic support'],
            ['value' => 'Blood transfusion management and infection prevention measures'],
            ['value' => 'Respiratory support, physiotherapy, and rehabilitation programs'],
            ['value' => 'Nutritional support and wound care management'],
            ['value' => 'Long-term surgical follow-up and rehabilitation planning when required'],
        ],
                'recovery' => 'The long-term outlook following trauma resuscitation and damage control surgery depends on the severity of injuries, speed of emergency intervention, organ involvement, and rehabilitation progress. Early critical care management, surgical stabilization, physiotherapy, nutritional support, psychological counseling, and long-term multidisciplinary follow-up significantly help improve survival, restore physical function, reduce complications, and enhance overall quality of life. ______________________ 10. Burn Management (Fluid Resuscitation, Wound Care, Infection Control) Burn Management (Fluid Resuscitation, Wound Care, Infection Control) Procedures',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Trauma Resuscitation & Damage Control Surgery',
                'meta_description' => 'Trauma resuscitation and damage control surgery are emergency critical care procedures used to stabilize severely injured patients with life-threatening trauma,',
                'meta_keywords' => '',
            ]
        );
    }
}
