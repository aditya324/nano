<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalDebridementofBurnsWoundsSurgicalDebridementofBurnsWoundsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('___________________________ 2. Surgical Debridement of Burns & Wounds  Surgical Debridement of Burns & Wounds')],
            [
                'name' => '___________________________ 2. Surgical Debridement of Burns & Wounds  Surgical Debridement of Burns & Wounds',
                'slug' => Str::slug('___________________________ 2. Surgical Debridement of Burns & Wounds  Surgical Debridement of Burns & Wounds'),
                'h1' => '___________________________ 2. Surgical Debridement of Burns & Wounds  Surgical Debridement of Burns & Wounds',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Surgical debridement is a specialized medical procedure performed to remove dead, damaged, infected, or contaminated tissue from burns and wounds to promote healing and prevent infection. This procedure helps create a healthy wound environment, supports tissue regeneration, and reduces the risk of serious complications.',
                'about_more' => '',
                'overview' => 'Surgical debridement is commonly used in severe burns, traumatic injuries, infected wounds, chronic ulcers, diabetic wounds, and necrotic soft tissue infections. During the procedure, unhealthy tissue is carefully removed while preserving healthy surrounding structures. Debridement may be performed using surgical instruments, specialized wound care techniques, or advanced reconstructive methods depending on the severity and extent of tissue damage. Early and effective debridement is essential for improving wound healing and preparing wounds for grafting or reconstructive procedures when required.',
                'symptoms' => [
            ['value' => 'Non-healing wounds or chronic ulcers'],
            ['value' => 'Burn wounds with dead or infected tissue'],
            ['value' => 'Foul-smelling discharge or wound infection'],
            ['value' => 'Pain, swelling, or redness around the wound area'],
            ['value' => 'Tissue discoloration or necrosis affecting healing'],
        ],
                'causes' => [
            ['value' => 'Severe burns or traumatic soft tissue injuries'],
            ['value' => 'Chronic diabetic or pressure-related ulcers'],
            ['value' => 'Infection causing tissue necrosis or abscess formation'],
            ['value' => 'Poor blood circulation affecting wound healing'],
            ['value' => 'Surgical or post-traumatic wound complications'],
        ],
                'risks' => [
            ['value' => 'Bleeding or temporary pain after the procedure'],
            ['value' => 'Infection or delayed wound healing in severe cases'],
            ['value' => 'Damage to nearby healthy tissue in complex wounds'],
            ['value' => 'Scar formation or need for repeat debridement procedures'],
            ['value' => 'Requirement for reconstructive surgery or skin grafting'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of dead or infected tissue'],
            ['value' => 'Advanced wound cleaning and infection control measures'],
            ['value' => 'Burn wound management and dressing care'],
            ['value' => 'Skin grafting or reconstructive procedures when required'],
            ['value' => 'Long-term wound care, rehabilitation, and healing monitoring support'],
        ],
                'recovery' => 'The long-term outlook for surgical debridement of burns and wounds is generally very positive when performed early and combined with proper wound care and infection management. Timely debridement, nutritional support, rehabilitation, and continuous medical follow-up significantly improve healing outcomes and reduce complications. Ongoing wound care and preventive measures are important for maintaining long-term recovery and tissue health.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => '___________________________ 2. Surgical Debridement of Burns & Wounds  Surgical Debridement of Burns & Wounds',
                'meta_description' => 'Surgical debridement is a specialized medical procedure performed to remove dead, damaged, infected, or contaminated tissue from burns and wounds to promote hea',
                'meta_keywords' => '',
            ]
        );
    }
}
