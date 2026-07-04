<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryICURoundsCareProtocolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary ICU Rounds & Care Protocols')],
            [
                'name' => 'Multidisciplinary ICU Rounds & Care Protocols',
                'slug' => Str::slug('Multidisciplinary ICU Rounds & Care Protocols'),
                'h1' => 'Multidisciplinary ICU Rounds & Care Protocols',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Multidisciplinary ICU rounds and care protocols are coordinated critical care procedures involving collaborative evaluation, treatment planning, and continuous monitoring of critically ill patients by a team of healthcare specialists. These structured care approaches help improve patient safety, optimize treatment outcomes, enhance communication among healthcare providers, and ensure comprehensive management of complex medical conditions in the Intensive Care Unit (ICU).',
                'about_more' => '',
                'overview' => 'Multidisciplinary ICU rounds involve daily bedside discussions and coordinated decision-making by intensivists, physicians, nurses, respiratory therapists, pharmacists, nutritionists, physiotherapists, infection control teams, and other specialists involved in patient care. ICU care protocols provide standardized clinical guidelines for managing ventilation, sedation, infection prevention, nutrition, fluid balance, hemodynamic support, organ dysfunction, rehabilitation, and emergency interventions. These procedures are designed to support evidence-based critical care management, improve recovery outcomes, and reduce ICU-related complications.',
                'symptoms' => [
            ['value' => 'Severe critical illness requiring intensive monitoring and organ support'],
            ['value' => 'Respiratory failure, shock, or circulatory instability'],
            ['value' => 'Multi-organ dysfunction or complex medical conditions'],
            ['value' => 'Neurological deterioration or reduced consciousness'],
            ['value' => 'Severe infections, trauma, or postoperative complications requiring coordinated ICU care'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Multi-organ failure or worsening critical illness'],
            ['value' => 'Ventilator-associated infections or ICU-related complications'],
            ['value' => 'Medication-related adverse effects or treatment delays'],
            ['value' => 'Prolonged ICU stay and reduced physical function'],
            ['value' => 'Increased risk of mortality in severe critical care conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Multidisciplinary ICU rounds and care protocols focus on comprehensive patient assessment, coordinated treatment planning, prevention of complications, and optimization of critical care outcomes. Management may include respiratory support, hemodynamic stabilization, medication management, nutritional therapy, infection control measures, ventilator management, renal replacement therapy, rehabilitation services, and psychological support. Patients may also receive individualized care plans involving physiotherapy, occupational therapy, wound care, neurological monitoring, and long-term recovery planning. Continuous communication among multidisciplinary teams ensures safe, efficient, and evidence-based critical care delivery.'],
            ['value' => 'Continuous monitoring of vital signs, organ function, and treatment response'],
            ['value' => 'Regular multidisciplinary review and adjustment of care plans'],
            ['value' => 'Prevention and monitoring of ICU-related complications'],
            ['value' => 'Rehabilitation support, nutritional management, and physiotherapy'],
            ['value' => 'Long-term follow-up and recovery planning after ICU discharge'],
        ],
                'recovery' => 'The long-term outlook following multidisciplinary ICU care depends on the severity of critical illness, speed of intervention, effectiveness of coordinated treatment, and overall patient health. Early critical care intervention, structured ICU protocols, rehabilitation support, nutritional care, psychological support, and regular multidisciplinary follow-up significantly help improve survival, reduce complications, restore organ function, and enhance overall quality of life. ______________________',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Multidisciplinary ICU Rounds & Care Protocols',
                'meta_description' => 'Multidisciplinary ICU rounds and care protocols are coordinated critical care procedures involving collaborative evaluation, treatment planning, and continuous ',
                'meta_keywords' => '',
            ]
        );
    }
}
