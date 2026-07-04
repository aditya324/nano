<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativeRehabilitationPhysiotherapyforJawFunctionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Postoperative Rehabilitation & Physiotherapy for Jaw Function')],
            [
                'name' => 'Postoperative Rehabilitation & Physiotherapy for Jaw Function',
                'slug' => Str::slug('Postoperative Rehabilitation & Physiotherapy for Jaw Function'),
                'h1' => 'Postoperative Rehabilitation & Physiotherapy for Jaw Function',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Postoperative rehabilitation and physiotherapy for jaw function involve specialized recovery programs designed to restore normal jaw movement, chewing ability, speech, facial muscle coordination, and overall oral function after oral and maxillofacial surgery, trauma, temporomandibular joint procedures, or reconstructive treatment. These therapies play a vital role in improving long-term surgical outcomes and quality of life.',
                'about_more' => '',
                'overview' => 'Jaw rehabilitation programs focus on restoring mouth opening, reducing stiffness, strengthening jaw muscles, improving bite function, and preventing postoperative complications such as fibrosis, ankylosis, or restricted movement. Physiotherapy may include jaw exercises, stretching techniques, muscle strengthening, massage therapy, posture correction, and guided functional training. Rehabilitation is commonly required after jaw fracture repair, orthognathic surgery, TMJ surgery, facial trauma reconstruction, cleft surgery, and oral cancer reconstruction procedures.',
                'symptoms' => [
            ['value' => 'Restricted mouth opening or jaw stiffness after surgery'],
            ['value' => 'Difficulty chewing, speaking, or swallowing'],
            ['value' => 'Jaw pain, muscle tightness, or facial discomfort'],
            ['value' => 'Weakness of facial or jaw muscles'],
            ['value' => 'Bite imbalance or reduced jaw mobility'],
        ],
                'causes' => [
            ['value' => 'Jaw surgery or facial trauma procedures'],
            ['value' => 'Temporomandibular joint disorders and reconstructive surgery'],
            ['value' => 'Postoperative scar tissue formation or fibrosis'],
            ['value' => 'Prolonged immobilization after fracture fixation'],
            ['value' => 'Muscle weakness or reduced jaw movement following treatment'],
        ],
                'risks' => [
            ['value' => 'Persistent jaw stiffness or reduced mouth opening'],
            ['value' => 'Chronic jaw pain or temporomandibular joint dysfunction'],
            ['value' => 'Difficulty eating, speaking, or maintaining oral hygiene'],
            ['value' => 'Facial muscle weakness or poor functional recovery'],
            ['value' => 'Delayed rehabilitation affecting long-term surgical outcomes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical postoperative assessment of jaw movement and function'],
            ['value' => 'Jaw-opening and stretching physiotherapy exercises'],
            ['value' => 'Muscle strengthening and mobility rehabilitation programs'],
            ['value' => 'Pain management, massage therapy, and posture correction techniques'],
            ['value' => 'Long-term rehabilitation, speech therapy, and follow-up support when required'],
        ],
                'recovery' => 'The long-term outlook for postoperative rehabilitation and physiotherapy for jaw function is generally very positive because structured rehabilitation significantly improves mouth opening, chewing efficiency, speech, facial muscle coordination, and overall quality of life. Early physiotherapy, regular exercises, consistent follow-up, and patient compliance are essential for maintaining successful long-term functional recovery and preventing postoperative complications. ________________________ 25. Teleconsultation & Follow-Up Services Teleconsultation & Follow-Up Services Services',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Postoperative Rehabilitation & Physiotherapy for Jaw Function',
                'meta_description' => 'Postoperative rehabilitation and physiotherapy for jaw function involve specialized recovery programs designed to restore normal jaw movement, chewing ability, ',
                'meta_keywords' => '',
            ]
        );
    }
}
