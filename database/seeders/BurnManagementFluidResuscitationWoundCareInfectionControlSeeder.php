<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BurnManagementFluidResuscitationWoundCareInfectionControlSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Burn Management (Fluid Resuscitation, Wound Care, Infection Control)')],
            [
                'title' => 'Burn Management (Fluid Resuscitation, Wound Care, Infection Control)',
                'slug' => Str::slug('Burn Management (Fluid Resuscitation, Wound Care, Infection Control)'),
                'introduction' => 'Burn management is a specialized emergency and critical care procedure focused on stabilizing patients with burn injuries, preventing complications, promoting wound healing, and supporting recovery. Severe burns can lead to major fluid loss, infection, tissue damage, organ dysfunction, and life-threatening complications. Burn management procedures involve fluid resuscitation, wound care, infection prevention, pain management, and multidisciplinary rehabilitation to improve survival and long-term recovery outcomes.',
                'what_is' => 'Burn management begins with rapid assessment of burn severity, airway stability, breathing, circulation, and extent of tissue injury. Fluid resuscitation is initiated to replace lost body fluids and maintain organ perfusion, especially in extensive burns. Wound care procedures include cleaning, dressing changes, removal of dead tissue, topical medications, and monitoring for infection. Patients with severe burns may require intensive care support, airway management, surgical intervention, skin grafting, nutritional therapy, and long-term rehabilitation. Burn management is commonly performed in emergency departments, burn units, intensive care units, and specialized trauma centers.',
                'symptoms' => [
            ['value' => 'Severe pain, redness, or blistering of the skin'],
            ['value' => 'Swelling, fluid loss, or signs of dehydration'],
            ['value' => 'Charred, pale, or leathery skin in deep burns'],
            ['value' => 'Difficulty breathing in inhalation or airway burns'],
            ['value' => 'Fever, weakness, or signs of wound infection'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe dehydration or burn shock due to fluid loss'],
            ['value' => 'Infection, sepsis, or delayed wound healing'],
            ['value' => 'Respiratory complications from inhalation injury'],
            ['value' => 'Scarring, contractures, or long-term physical disability'],
            ['value' => 'Multi-organ dysfunction and life-threatening complications in extensive burns'],
            ['value' => 'Treatment Options'],
            ['value' => 'Burn management procedures focus on stabilizing circulation, protecting damaged tissue, preventing infection, relieving pain, and supporting wound healing. Management may include intravenous fluid resuscitation, wound cleaning, sterile dressings, pain control medications, antibiotics, oxygen therapy, airway support, skin grafting procedures, nutritional support, and intensive care monitoring. Patients may also require physiotherapy, occupational therapy, reconstructive surgery, psychological support, and long-term rehabilitation to restore mobility, function, and quality of life. Multidisciplinary burn care teams play an essential role in optimizing recovery and reducing complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular wound assessment and sterile dressing changes'],
            ['value' => 'Monitoring for infection, fluid balance, and organ function'],
            ['value' => 'Pain management and nutritional support during recovery'],
            ['value' => 'Physiotherapy, rehabilitation, and scar management programs'],
            ['value' => 'Long-term follow-up for reconstructive care and functional recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe dehydration or burn shock due to fluid loss'],
            ['value' => 'Infection, sepsis, or delayed wound healing'],
            ['value' => 'Respiratory complications from inhalation injury'],
            ['value' => 'Scarring, contractures, or long-term physical disability'],
            ['value' => 'Multi-organ dysfunction and life-threatening complications in extensive burns'],
            ['value' => 'Treatment Options'],
            ['value' => 'Burn management procedures focus on stabilizing circulation, protecting damaged tissue, preventing infection, relieving pain, and supporting wound healing. Management may include intravenous fluid resuscitation, wound cleaning, sterile dressings, pain control medications, antibiotics, oxygen therapy, airway support, skin grafting procedures, nutritional support, and intensive care monitoring. Patients may also require physiotherapy, occupational therapy, reconstructive surgery, psychological support, and long-term rehabilitation to restore mobility, function, and quality of life. Multidisciplinary burn care teams play an essential role in optimizing recovery and reducing complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook following burn management depends on the severity and extent of burns, presence of complications, speed of treatment, and rehabilitation progress. Early emergency care, infection prevention, surgical management, nutritional support, rehabilitation therapy, psychological counseling, and long-term multidisciplinary follow-up significantly help improve wound healing, reduce disability, restore physical function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Burn Management (Fluid Resuscitation, Wound Care, Infection Control)',
                'seo_description' => 'Burn management is a specialized emergency and critical care procedure focused on stabilizing patients with burn injuries, preventing complications, promoting wound healing, and supporting recovery. Severe burns can lead to major fluid loss, infection, tissue damage, organ dysfunction, and life-threatening complications. Burn management procedures involve fluid resuscitation, wound care, infection prevention, pain management, and multidisciplinary rehabilitation to improve survival and long-term recovery outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
