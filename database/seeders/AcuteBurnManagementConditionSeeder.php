<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteBurnManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Burn Management')],
            [
                'name' => 'Acute Burn Management',
                'slug' => Str::slug('Acute Burn Management'),
                'h1' => 'Acute Burn Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute burn management involves the emergency medical care and stabilization of patients with thermal, chemical, electrical, or radiation burns. Early treatment focuses on fluid resuscitation, wound care, pain control, infection prevention, and protection of vital organs to reduce complications and improve survival and recovery outcomes.',
                'about_more' => '',
                'overview' => 'Acute burn management involves the emergency medical care and stabilization of patients with thermal, chemical, electrical, or radiation burns. Early treatment focuses on fluid resuscitation, wound care, pain control, infection prevention, and protection of vital organs to reduce complications and improve survival and recovery outcomes.',
                'symptoms' => [
            ['value' => 'Severe pain, redness, or blistering of the skin'],
            ['value' => 'Swelling, skin peeling, or tissue damage'],
            ['value' => 'Difficulty breathing or smoke inhalation symptoms'],
            ['value' => 'Fever, weakness, or signs of dehydration'],
            ['value' => 'Open wounds, burns, or signs of infection in severe cases'],
        ],
                'causes' => [
            ['value' => 'Thermal burns from fire, hot liquids, steam, or heated objects'],
            ['value' => 'Chemical burns caused by corrosive substances'],
            ['value' => 'Electrical burns from high-voltage injuries'],
            ['value' => 'Radiation exposure or industrial accidents'],
            ['value' => 'Extensive tissue damage requiring emergency burn care'],
        ],
                'risks' => [
            ['value' => 'Severe dehydration and fluid loss'],
            ['value' => 'Burn wound infection and sepsis'],
            ['value' => 'Respiratory complications from inhalation injury'],
            ['value' => 'Tissue necrosis, scarring, or contracture formation'],
            ['value' => 'Organ failure or life-threatening complications in severe burns'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency burn assessment and stabilization'],
            ['value' => 'Fluid resuscitation and electrolyte management'],
            ['value' => 'Advanced wound care and dressing management'],
            ['value' => 'Infection control with antibiotics and sterile burn care protocols'],
            ['value' => 'Surgical debridement, skin grafting, and intensive care support when required'],
        ],
                'recovery' => 'The long-term outlook for acute burn management depends on the severity, depth, and extent of burn injuries as well as the timing of medical intervention. Early fluid management, proper wound care, infection prevention, nutritional support, and rehabilitation significantly improve healing and survival outcomes. Continuous follow-up, physiotherapy, scar management, and psychological support are important for long-term recovery and quality of life. ___________________________ 2. Surgical Debridement of Burns & Wounds Surgical Debridement of Burns & Wounds Procedures',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Acute Burn Management',
                'meta_description' => 'Acute burn management involves the emergency medical care and stabilization of patients with thermal, chemical, electrical, or radiation burns. Early treatment ',
                'meta_keywords' => '',
            ]
        );
    }
}
