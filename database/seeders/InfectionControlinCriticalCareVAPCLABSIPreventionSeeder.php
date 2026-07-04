<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionControlinCriticalCareVAPCLABSIPreventionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Infection Control in Critical Care (VAP, CLABSI Prevention)')],
            [
                'title' => 'Infection Control in Critical Care (VAP, CLABSI Prevention)',
                'slug' => Str::slug('Infection Control in Critical Care (VAP, CLABSI Prevention)'),
                'introduction' => 'Infection control in critical care involves specialized preventive procedures and monitoring strategies used to reduce healthcare-associated infections in critically ill patients. Ventilator-Associated Pneumonia (VAP) and Central Line-Associated Bloodstream Infection (CLABSI) are serious ICU-related infections that can increase complications, prolong hospitalization, and worsen patient outcomes. Infection prevention protocols play a vital role in improving patient safety, reducing infection rates, and supporting recovery in intensive care settings.',
                'what_is' => 'Critical care infection control procedures focus on maintaining strict hygiene standards, sterile techniques, equipment care, and continuous monitoring to prevent infections associated with mechanical ventilation, invasive catheters, and prolonged ICU stay. VAP prevention includes airway care, ventilator hygiene, suctioning protocols, head elevation, oral care, and respiratory monitoring. CLABSI prevention involves sterile central line insertion techniques, catheter care, dressing management, hand hygiene, and early removal of unnecessary vascular lines. These protocols are implemented by intensivists, nurses, infection control teams, respiratory therapists, and critical care specialists in intensive care units and emergency care settings.',
                'symptoms' => [
            ['value' => 'Fever, chills, or signs of infection in critically ill patients'],
            ['value' => 'Increased respiratory secretions or breathing difficulty'],
            ['value' => 'Redness, swelling, or discharge around catheter insertion sites'],
            ['value' => 'Low blood pressure, confusion, or signs of sepsis'],
            ['value' => 'Elevated infection markers or worsening organ dysfunction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Ventilator-associated pneumonia causing respiratory complications'],
            ['value' => 'Bloodstream infections related to invasive vascular catheters'],
            ['value' => 'Sepsis, septic shock, or multi-organ dysfunction'],
            ['value' => 'Prolonged ICU stay and increased need for critical care support'],
            ['value' => 'Increased mortality risk and delayed patient recovery'],
            ['value' => 'Treatment Options'],
            ['value' => 'Infection control procedures in critical care focus on preventing hospital-acquired infections, maintaining sterile care environments, and supporting patient safety during intensive treatment. Management may include strict hand hygiene protocols, sterile catheter insertion techniques, ventilator care bundles, oral hygiene measures, antimicrobial therapy, respiratory support, infection surveillance, early mobilization, nutritional support, and intensive monitoring. Patients with suspected infections may require antibiotics, removal or replacement of infected devices, respiratory therapy, isolation precautions, and multidisciplinary critical care management to reduce complications and improve outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring for signs of infection or sepsis'],
            ['value' => 'Regular catheter care, dressing changes, and airway hygiene'],
            ['value' => 'Monitoring laboratory markers and culture reports'],
            ['value' => 'Early removal of unnecessary invasive devices when possible'],
            ['value' => 'Ongoing infection prevention protocols and critical care follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Ventilator-associated pneumonia causing respiratory complications'],
            ['value' => 'Bloodstream infections related to invasive vascular catheters'],
            ['value' => 'Sepsis, septic shock, or multi-organ dysfunction'],
            ['value' => 'Prolonged ICU stay and increased need for critical care support'],
            ['value' => 'Increased mortality risk and delayed patient recovery'],
            ['value' => 'Treatment Options'],
            ['value' => 'Infection control procedures in critical care focus on preventing hospital-acquired infections, maintaining sterile care environments, and supporting patient safety during intensive treatment. Management may include strict hand hygiene protocols, sterile catheter insertion techniques, ventilator care bundles, oral hygiene measures, antimicrobial therapy, respiratory support, infection surveillance, early mobilization, nutritional support, and intensive monitoring. Patients with suspected infections may require antibiotics, removal or replacement of infected devices, respiratory therapy, isolation precautions, and multidisciplinary critical care management to reduce complications and improve outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following infection control management in critical care depends on the patient’s underlying illness, duration of ICU stay, effectiveness of infection prevention measures, and overall health condition. Early infection prevention, strict sterile practices, multidisciplinary ICU care, rehabilitation support, and ongoing monitoring significantly help reduce healthcare-associated infections, improve recovery outcomes, shorten hospitalization, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Infection Control in Critical Care (VAP, CLABSI Prevention)',
                'seo_description' => 'Infection control in critical care involves specialized preventive procedures and monitoring strategies used to reduce healthcare-associated infections in critically ill patients. Ventilator-Associated Pneumonia (VAP) and Central Line-Associated Bloodstream Infection (CLABSI) are serious ICU-related infections that can increase complications, prolong hospitalization, and worsen patient outcomes. Infection prevention protocols play a vital role in improving patient safety, reducing infection rates, and supporting recovery in intensive care settings.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
