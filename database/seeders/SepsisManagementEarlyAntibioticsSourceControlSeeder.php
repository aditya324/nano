<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SepsisManagementEarlyAntibioticsSourceControlSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Sepsis Management (Early Antibiotics, Source Control)')],
            [
                'title' => 'Sepsis Management (Early Antibiotics, Source Control)',
                'slug' => Str::slug('Sepsis Management (Early Antibiotics, Source Control)'),
                'introduction' => 'Sepsis management is a critical care procedure focused on the rapid diagnosis, stabilization, and treatment of severe systemic infections that can lead to organ dysfunction, septic shock, and life-threatening complications. Early antibiotic administration and source control are essential components of sepsis treatment aimed at controlling infection, improving circulation, supporting organ function, and reducing mortality.',
                'what_is' => 'Sepsis management involves immediate assessment of the patient’s airway, breathing, circulation, infection source, and organ function. Early broad-spectrum antibiotics are administered promptly to control infection, while source control procedures focus on removing or treating the underlying source of infection such as abscesses, infected wounds, contaminated devices, or infected tissues. Patients with severe sepsis often require intensive care monitoring, intravenous fluids, vasopressor support, oxygen therapy, laboratory monitoring, and multidisciplinary critical care management to stabilize their condition and prevent organ failure.',
                'symptoms' => [
            ['value' => 'High fever, chills, or low body temperature'],
            ['value' => 'Rapid heartbeat, fast breathing, or low blood pressure'],
            ['value' => 'Confusion, dizziness, or altered mental status'],
            ['value' => 'Severe weakness, fatigue, or reduced urine output'],
            ['value' => 'Signs of severe infection, shock, or organ dysfunction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Septic shock with severe circulatory collapse'],
            ['value' => 'Multi-organ dysfunction affecting kidneys, lungs, heart, or liver'],
            ['value' => 'Respiratory failure requiring ventilator support'],
            ['value' => 'Blood clotting abnormalities and severe metabolic imbalance'],
            ['value' => 'Increased risk of prolonged ICU stay or life-threatening complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Sepsis management procedures focus on rapid infection control, restoration of circulation, stabilization of organ function, and prevention of complications. Management may include early administration of broad-spectrum antibiotics, intravenous fluid resuscitation, vasopressor therapy, oxygen support, mechanical ventilation, laboratory monitoring, source control surgery or drainage procedures, dialysis when required, and intensive care support. Patients may also require nutritional therapy, rehabilitation services, infection monitoring, and long-term follow-up to improve recovery and reduce the risk of recurrent infections or organ dysfunction.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of vital signs and organ function'],
            ['value' => 'Adjustment of antibiotic therapy based on infection response and culture results'],
            ['value' => 'Monitoring for complications such as shock or organ failure'],
            ['value' => 'Nutritional support, physiotherapy, and rehabilitation when required'],
            ['value' => 'Long-term medical follow-up and infection prevention planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Septic shock with severe circulatory collapse'],
            ['value' => 'Multi-organ dysfunction affecting kidneys, lungs, heart, or liver'],
            ['value' => 'Respiratory failure requiring ventilator support'],
            ['value' => 'Blood clotting abnormalities and severe metabolic imbalance'],
            ['value' => 'Increased risk of prolonged ICU stay or life-threatening complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Sepsis management procedures focus on rapid infection control, restoration of circulation, stabilization of organ function, and prevention of complications. Management may include early administration of broad-spectrum antibiotics, intravenous fluid resuscitation, vasopressor therapy, oxygen support, mechanical ventilation, laboratory monitoring, source control surgery or drainage procedures, dialysis when required, and intensive care support. Patients may also require nutritional therapy, rehabilitation services, infection monitoring, and long-term follow-up to improve recovery and reduce the risk of recurrent infections or organ dysfunction.'],
        ],
                'long_term_outlook' => 'The long-term outlook following sepsis management depends on the severity of infection, speed of treatment, organ involvement, and overall patient health. Early diagnosis, timely antibiotic therapy, effective source control, rehabilitation support, medication adherence, and regular medical follow-up significantly help improve survival, restore organ function, reduce complications, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Sepsis Management (Early Antibiotics, Source Control)',
                'seo_description' => 'Sepsis management is a critical care procedure focused on the rapid diagnosis, stabilization, and treatment of severe systemic infections that can lead to organ dysfunction, septic shock, and life-threatening complications. Early antibiotic administration and source control are essential components of sepsis treatment aimed at controlling infection, improving circulation, supporting organ function, and reducing mortality.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
