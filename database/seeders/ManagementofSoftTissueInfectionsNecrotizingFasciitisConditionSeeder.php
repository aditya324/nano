<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofSoftTissueInfectionsNecrotizingFasciitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Soft Tissue Infections & Necrotizing Fasciitis')],
            [
                'name' => 'Management of Soft Tissue Infections & Necrotizing Fasciitis',
                'slug' => Str::slug('Management of Soft Tissue Infections & Necrotizing Fasciitis'),
                'h1' => 'Management of Soft Tissue Infections & Necrotizing Fasciitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of soft tissue infections and necrotizing fasciitis involves emergency medical and surgical treatment for severe infections affecting the skin, fat, muscles, fascia, and deeper soft tissues. Necrotizing fasciitis is a rapidly spreading and potentially life-threatening infection that requires immediate diagnosis, aggressive surgical intervention, and intensive medical care to prevent severe complications and tissue destruction.',
                'about_more' => '',
                'overview' => 'Soft tissue infections can range from localized abscesses and cellulitis to severe necrotizing infections involving widespread tissue damage. Necrotizing fasciitis rapidly destroys soft tissues and may spread through the body if not treated urgently. Management typically includes emergency surgical debridement, infection control, intravenous antibiotics, intensive wound care, fluid and organ support, and reconstructive procedures when required. Early intervention is critical for improving survival and preserving tissue and limb function.',
                'symptoms' => [
            ['value' => 'Severe pain, swelling, or redness of the affected area'],
            ['value' => 'Fever, chills, or generalized weakness'],
            ['value' => 'Rapidly spreading skin discoloration or tissue damage'],
            ['value' => 'Foul-smelling discharge, blisters, or pus formation'],
            ['value' => 'Skin necrosis, severe tenderness, or signs of systemic infection'],
        ],
                'causes' => [
            ['value' => 'Bacterial soft tissue infections and abscess formation'],
            ['value' => 'Trauma, cuts, burns, or surgical wound infections'],
            ['value' => 'Diabetes, poor circulation, or weakened immune system'],
            ['value' => 'Delayed treatment of skin or soft tissue infections'],
            ['value' => 'Deep tissue infection spreading through fascia and muscles'],
        ],
                'risks' => [
            ['value' => 'Rapid tissue destruction and necrosis'],
            ['value' => 'Sepsis and life-threatening bloodstream infection'],
            ['value' => 'Organ failure or severe systemic complications'],
            ['value' => 'Limb loss or permanent disability in advanced cases'],
            ['value' => 'Extensive reconstructive surgery and prolonged hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency surgical debridement and removal of infected tissue'],
            ['value' => 'Intravenous antibiotics and intensive infection control management'],
            ['value' => 'Advanced wound care and Wound VAC therapy support'],
            ['value' => 'Skin grafting, flap reconstruction, or limb salvage procedures when required'],
            ['value' => 'Intensive care monitoring, rehabilitation, and long-term reconstructive follow-up'],
        ],
                'recovery' => 'The long-term outlook for soft tissue infections and necrotizing fasciitis depends on the severity of infection, speed of diagnosis, and timing of surgical intervention. Early aggressive treatment, infection control, intensive wound care, nutritional support, and rehabilitation significantly improve survival and recovery outcomes. Continuous medical follow-up, reconstructive care, physiotherapy, and preventive healthcare are important for maintaining long-term healing, mobility, and quality of life. ___________________ 23. Multidisciplinary Team Approach (Plastic, Physiotherapy, Critical Care) Multidisciplinary Team Approach (Plastic Surgery, Physiotherapy & Critical Care) Procedures',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Management of Soft Tissue Infections & Necrotizing Fasciitis',
                'meta_description' => 'Management of soft tissue infections and necrotizing fasciitis involves emergency medical and surgical treatment for severe infections affecting the skin, fat, ',
                'meta_keywords' => '',
            ]
        );
    }
}
