<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HandSurgeryTendonRepairNerveRepairReplantationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hand Surgery (Tendon Repair, Nerve Repair & Replantation)')],
            [
                'name' => 'Hand Surgery (Tendon Repair, Nerve Repair & Replantation)',
                'slug' => Str::slug('Hand Surgery (Tendon Repair, Nerve Repair & Replantation)'),
                'h1' => 'Hand Surgery (Tendon Repair, Nerve Repair & Replantation)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hand surgery is a specialized surgical field focused on the treatment and reconstruction of injuries, deformities, and disorders affecting the hand, wrist, fingers, tendons, nerves, blood vessels, and soft tissues. Procedures such as tendon repair, nerve repair, and replantation help restore movement, sensation, circulation, and overall hand function after trauma or disease.',
                'about_more' => '',
                'overview' => 'Hand surgery procedures are commonly performed for traumatic injuries, tendon lacerations, nerve damage, fractures, crush injuries, congenital deformities, and amputations. Tendon repair restores movement and flexibility, nerve repair improves sensation and muscle control, and replantation involves microsurgical reattachment of amputated fingers or hand parts. Advanced microsurgical techniques and rehabilitation programs play a vital role in improving functional recovery and preserving hand function.',
                'symptoms' => [
            ['value' => 'Hand pain, swelling, or deformity'],
            ['value' => 'Loss of finger movement or grip strength'],
            ['value' => 'Numbness, tingling, or reduced sensation'],
            ['value' => 'Open wounds, tendon injuries, or amputations'],
            ['value' => 'Difficulty performing daily activities requiring hand function'],
        ],
                'causes' => [
            ['value' => 'Trauma, crush injuries, or accidental hand injuries'],
            ['value' => 'Tendon lacerations or nerve damage'],
            ['value' => 'Fractures, dislocations, or soft tissue injuries'],
            ['value' => 'Industrial, workplace, or sports-related accidents'],
            ['value' => 'Congenital hand abnormalities or severe infections affecting hand structures'],
        ],
                'risks' => [
            ['value' => 'Infection, bleeding, or delayed wound healing'],
            ['value' => 'Permanent stiffness or reduced hand mobility'],
            ['value' => 'Nerve-related weakness or sensory impairment'],
            ['value' => 'Reduced blood circulation affecting tissue healing'],
            ['value' => 'Need for repeat surgery or prolonged rehabilitation in complex cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Tendon repair and reconstructive hand surgery procedures'],
            ['value' => 'Nerve repair and microsurgical reconstruction techniques'],
            ['value' => 'Replantation of amputated fingers or hand parts when possible'],
            ['value' => 'Fracture fixation and soft tissue reconstruction procedures'],
            ['value' => 'Long-term physiotherapy, occupational therapy, and rehabilitation support'],
        ],
                'recovery' => 'The long-term outlook for hand surgery procedures depends on the severity of injury, timing of surgical intervention, and rehabilitation support. Early treatment, advanced microsurgical techniques, physiotherapy, and continuous follow-up can significantly improve movement, sensation, strength, and overall hand function. Long-term rehabilitation and specialized hand therapy are important for restoring independence and improving quality of life.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Hand Surgery (Tendon Repair, Nerve Repair & Replantation)',
                'meta_description' => 'Hand surgery is a specialized surgical field focused on the treatment and reconstruction of injuries, deformities, and disorders affecting the hand, wrist, fing',
                'meta_keywords' => '',
            ]
        );
    }
}
