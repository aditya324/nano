<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofAcuteFebrileIllnessSepsisProtocolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Acute Febrile Illness & Sepsis Protocols')],
            [
                'title' => 'Management of Acute Febrile Illness & Sepsis Protocols',
                'slug' => Str::slug('Management of Acute Febrile Illness & Sepsis Protocols'),
                'introduction' => 'Management of acute febrile illness and sepsis protocols involves the early diagnosis, rapid treatment, and continuous monitoring of patients presenting with fever, severe infections, or systemic inflammatory response. These protocols are designed to stabilize patients, control infection, prevent organ damage, and improve survival outcomes through timely medical intervention.',
                'what_is' => 'Acute febrile illness management focuses on identifying and treating infections such as dengue, malaria, typhoid, influenza, pneumonia, and other bacterial or viral illnesses. Sepsis protocols are advanced emergency treatment pathways used when infections lead to widespread inflammation, organ dysfunction, or septic shock. Treatment may include intravenous fluids, antibiotics, antivirals, antimalarial medications, oxygen therapy, laboratory monitoring, and intensive care support depending on the severity of the condition.',
                'symptoms' => [
            ['value' => 'High or persistent fever with chills'],
            ['value' => 'Rapid breathing or shortness of breath'],
            ['value' => 'Fatigue, weakness, or confusion'],
            ['value' => 'Low blood pressure or rapid heart rate'],
            ['value' => 'Reduced urine output or signs of organ dysfunction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe infection and septic shock'],
            ['value' => 'Multi-organ dysfunction and respiratory failure'],
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Prolonged hospitalization or ICU admission'],
            ['value' => 'Increased mortality risk if treatment is delayed'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of vital signs and infection markers'],
            ['value' => 'Intravenous medication and fluid management'],
            ['value' => 'Laboratory testing and organ function assessment'],
            ['value' => 'Nutritional support and infection prevention measures'],
            ['value' => 'Long-term follow-up and recovery monitoring after severe illness'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe infection and septic shock'],
            ['value' => 'Multi-organ dysfunction and respiratory failure'],
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Prolonged hospitalization or ICU admission'],
            ['value' => 'Increased mortality risk if treatment is delayed'],
        ],
                'long_term_outlook' => 'The long-term outlook for acute febrile illness and sepsis depends on the severity of infection, speed of treatment, and overall patient health. Early diagnosis and standardized sepsis management protocols significantly improve recovery and survival outcomes. Ongoing medical follow-up, rehabilitation, and preventive healthcare are important for reducing complications and supporting long-term recovery and overall health.',
                'conclusion' => '',
                'seo_title' => 'Management of Acute Febrile Illness & Sepsis Protocols',
                'seo_description' => 'Management of acute febrile illness and sepsis protocols involves the early diagnosis, rapid treatment, and continuous monitoring of patients presenting with fever, severe infections, or systemic inflammatory response. These protocols are designed to stabilize patients, control infection, prevent organ damage, and improve survival outcomes through timely medical intervention.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
