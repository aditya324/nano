<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionControlinCriticalCareVAPCLABSIPreventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infection Control in Critical Care (VAP, CLABSI Prevention)')],
            [
                'name' => 'Infection Control in Critical Care (VAP, CLABSI Prevention)',
                'slug' => Str::slug('Infection Control in Critical Care (VAP, CLABSI Prevention)'),
                'h1' => 'Infection Control in Critical Care (VAP, CLABSI Prevention)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infection control in critical care involves specialized preventive procedures and monitoring strategies used to reduce healthcare-associated infections in critically ill patients. Ventilator-Associated Pneumonia (VAP) and Central Line-Associated Bloodstream Infection (CLABSI) are serious ICU-related infections that can increase complications, prolong hospitalization, and worsen patient outcomes. Infection prevention protocols play a vital role in improving patient safety, reducing infection rates, and supporting recovery in intensive care settings.',
                'about_more' => '',
                'overview' => 'Critical care infection control procedures focus on maintaining strict hygiene standards, sterile techniques, equipment care, and continuous monitoring to prevent infections associated with mechanical ventilation, invasive catheters, and prolonged ICU stay. VAP prevention includes airway care, ventilator hygiene, suctioning protocols, head elevation, oral care, and respiratory monitoring. CLABSI prevention involves sterile central line insertion techniques, catheter care, dressing management, hand hygiene, and early removal of unnecessary vascular lines. These protocols are implemented by intensivists, nurses, infection control teams, respiratory therapists, and critical care specialists in intensive care units and emergency care settings.',
                'symptoms' => [
            ['value' => 'Fever, chills, or signs of infection in critically ill patients'],
            ['value' => 'Increased respiratory secretions or breathing difficulty'],
            ['value' => 'Redness, swelling, or discharge around catheter insertion sites'],
            ['value' => 'Low blood pressure, confusion, or signs of sepsis'],
            ['value' => 'Elevated infection markers or worsening organ dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Ventilator-associated pneumonia causing respiratory complications'],
            ['value' => 'Bloodstream infections related to invasive vascular catheters'],
            ['value' => 'Sepsis, septic shock, or multi-organ dysfunction'],
            ['value' => 'Prolonged ICU stay and increased need for critical care support'],
            ['value' => 'Increased mortality risk and delayed patient recovery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Infection control procedures in critical care focus on preventing hospital-acquired infections, maintaining sterile care environments, and supporting patient safety during intensive treatment. Management may include strict hand hygiene protocols, sterile catheter insertion techniques, ventilator care bundles, oral hygiene measures, antimicrobial therapy, respiratory support, infection surveillance, early mobilization, nutritional support, and intensive monitoring. Patients with suspected infections may require antibiotics, removal or replacement of infected devices, respiratory therapy, isolation precautions, and multidisciplinary critical care management to reduce complications and improve outcomes.'],
            ['value' => 'Continuous monitoring for signs of infection or sepsis'],
            ['value' => 'Regular catheter care, dressing changes, and airway hygiene'],
            ['value' => 'Monitoring laboratory markers and culture reports'],
            ['value' => 'Early removal of unnecessary invasive devices when possible'],
            ['value' => 'Ongoing infection prevention protocols and critical care follow-up'],
        ],
                'recovery' => 'The long-term outlook following infection control management in critical care depends on the patient’s underlying illness, duration of ICU stay, effectiveness of infection prevention measures, and overall health condition. Early infection prevention, strict sterile practices, multidisciplinary ICU care, rehabilitation support, and ongoing monitoring significantly help reduce healthcare-associated infections, improve recovery outcomes, shorten hospitalization, and enhance overall quality of life. ____________________',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Infection Control in Critical Care (VAP, CLABSI Prevention)',
                'meta_description' => 'Infection control in critical care involves specialized preventive procedures and monitoring strategies used to reduce healthcare-associated infections in criti',
                'meta_keywords' => '',
            ]
        );
    }
}
