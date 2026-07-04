<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ECMOExtracorporealMembraneOxygenationinSelectedCasesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('ECMO (Extracorporeal Membrane Oxygenation) in Selected Cases')],
            [
                'name' => 'ECMO (Extracorporeal Membrane Oxygenation) in Selected Cases',
                'slug' => Str::slug('ECMO (Extracorporeal Membrane Oxygenation) in Selected Cases'),
                'h1' => 'ECMO (Extracorporeal Membrane Oxygenation) in Selected Cases',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Extracorporeal Membrane Oxygenation (ECMO) is an advanced life-support procedure used in critically ill patients with severe heart or lung failure who do not respond adequately to conventional medical treatment. ECMO temporarily takes over the function of the heart and/or lungs by circulating blood through an external machine that removes carbon dioxide, adds oxygen, and returns oxygenated blood back to the body. This procedure is used as a bridge to recovery, surgery, transplantation, or advanced critical care management in selected high-risk cases.',
                'about_more' => '',
                'overview' => 'ECMO is performed in intensive care units and specialized cardiac or critical care centers under continuous monitoring by multidisciplinary teams including intensivists, cardiothoracic surgeons, perfusionists, and critical care specialists. The procedure involves inserting large cannulas into major blood vessels to connect the patient to the ECMO circuit. There are two main types of ECMO: veno-venous (VV-ECMO) for severe respiratory failure and veno-arterial (VA-ECMO) for combined heart and lung support. ECMO is commonly used in conditions such as severe ARDS, cardiogenic shock, massive pulmonary embolism, severe myocarditis, or refractory cardiac arrest.',
                'symptoms' => [
            ['value' => 'Severe respiratory failure unresponsive to ventilator support'],
            ['value' => 'Critical heart failure or cardiogenic shock'],
            ['value' => 'Severe low oxygen levels despite intensive respiratory treatment'],
            ['value' => 'Circulatory collapse or life-threatening cardiac instability'],
            ['value' => 'Multi-organ dysfunction due to severe cardiac or respiratory compromise'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding complications related to anticoagulation therapy'],
            ['value' => 'Blood clot formation within the ECMO circuit'],
            ['value' => 'Infection or bloodstream-related complications'],
            ['value' => 'Stroke, neurological injury, or organ dysfunction'],
            ['value' => 'Mechanical complications involving the ECMO equipment or vascular access'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ECMO procedures focus on temporarily supporting heart and lung function while the underlying condition is treated and organ recovery occurs. Management may include oxygenation support, mechanical ventilation adjustment, anticoagulation therapy, hemodynamic monitoring, infection control, fluid management, dialysis support, nutritional therapy, and intensive care monitoring. Patients may also require treatment for underlying conditions such as severe pneumonia, ARDS, myocarditis, cardiac failure, pulmonary embolism, trauma, or sepsis. Multidisciplinary critical care and rehabilitation support are essential to optimize survival and long-term recovery outcomes.'],
            ['value' => 'Continuous cardiac, respiratory, and neurological monitoring'],
            ['value' => 'Monitoring for bleeding, clotting, or infection-related complications'],
            ['value' => 'Gradual weaning from ECMO support when organ function improves'],
            ['value' => 'Respiratory rehabilitation, physiotherapy, and nutritional support'],
            ['value' => 'Long-term critical care follow-up and recovery planning when required'],
        ],
                'recovery' => 'The long-term outlook following ECMO support depends on the underlying medical condition, duration of organ failure, response to treatment, and overall patient health. Early intervention, advanced critical care management, rehabilitation support, infection prevention, physiotherapy, and multidisciplinary follow-up significantly help improve survival, restore organ function, reduce complications, and enhance overall quality of life. __________________ 22. Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis) Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis) Procedures',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'ECMO (Extracorporeal Membrane Oxygenation) in Selected Cases',
                'meta_description' => 'Extracorporeal Membrane Oxygenation (ECMO) is an advanced life-support procedure used in critically ill patients with severe heart or lung failure who do not re',
                'meta_keywords' => '',
            ]
        );
    }
}
