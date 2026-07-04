<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryTeamApproachConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Team Approach')],
            [
                'name' => 'Multidisciplinary Team Approach',
                'slug' => Str::slug('Multidisciplinary Team Approach'),
                'h1' => 'Multidisciplinary Team Approach',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A multidisciplinary team approach involves coordinated care provided by specialists from multiple medical disciplines working together to manage complex injuries, burns, reconstructive conditions, trauma, and critical illnesses. Collaboration between plastic surgeons, physiotherapists, critical care specialists, rehabilitation experts, and other healthcare professionals helps improve treatment outcomes, recovery, and overall patient care.',
                'about_more' => '',
                'overview' => 'Complex medical and reconstructive conditions often require comprehensive treatment involving emergency stabilization, surgery, wound care, rehabilitation, infection control, pain management, and long-term recovery planning. Plastic surgeons focus on reconstruction and tissue repair, physiotherapists help restore movement and functional recovery, while critical care specialists manage life-threatening conditions, organ support, and intensive monitoring. This collaborative approach ensures holistic patient care and improves both functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Severe trauma, burns, or complex soft tissue injuries'],
            ['value' => 'Loss of movement, mobility, or physical function'],
            ['value' => 'Critical illness requiring intensive medical support'],
            ['value' => 'Chronic wounds, infections, or reconstructive needs'],
            ['value' => 'Long-term rehabilitation and recovery challenges'],
        ],
                'causes' => [
            ['value' => 'Major trauma, accidents, or burn injuries'],
            ['value' => 'Complex reconstructive surgical conditions'],
            ['value' => 'Severe infections or critical medical emergencies'],
            ['value' => 'Postoperative recovery requiring rehabilitation support'],
            ['value' => 'Chronic conditions affecting mobility and tissue healing'],
        ],
                'risks' => [
            ['value' => 'Delayed recovery without coordinated specialist care'],
            ['value' => 'Functional impairment or long-term disability'],
            ['value' => 'Infection, wound complications, or prolonged hospitalization'],
            ['value' => 'Reduced mobility and muscle weakness after critical illness'],
            ['value' => 'Emotional and psychological stress during recovery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Coordinated reconstructive and plastic surgery management'],
            ['value' => 'Intensive care monitoring and organ support when required'],
            ['value' => 'Physiotherapy, mobility training, and rehabilitation programs'],
            ['value' => 'Advanced wound care, pain management, and infection control'],
            ['value' => 'Long-term multidisciplinary follow-up and recovery planning'],
        ],
                'recovery' => 'The long-term outlook with a multidisciplinary team approach is generally very positive because coordinated specialist care improves treatment accuracy, healing, rehabilitation, and overall patient outcomes. Early intervention, continuous physiotherapy, reconstructive support, critical care management, and long-term follow-up are important for restoring function, improving quality of life, and achieving successful long-term recovery. ___________________________ 24. Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care Procedures',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Multidisciplinary Team Approach',
                'meta_description' => 'A multidisciplinary team approach involves coordinated care provided by specialists from multiple medical disciplines working together to manage complex injurie',
                'meta_keywords' => '',
            ]
        );
    }
}
