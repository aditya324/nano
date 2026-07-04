<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacialNerveRepairReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Facial Nerve Repair / Reconstruction')],
            [
                'name' => 'Facial Nerve Repair / Reconstruction',
                'slug' => Str::slug('Facial Nerve Repair / Reconstruction'),
                'h1' => 'Facial Nerve Repair / Reconstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Facial nerve repair and reconstruction are specialized microsurgical procedures performed to restore movement, symmetry, and function of the face following facial nerve injury, paralysis, trauma, tumor removal, or congenital abnormalities. These procedures help improve facial expression, eye closure, speech, eating function, and overall facial appearance.',
                'about_more' => 'Facial nerve repair and reconstruction are specialized microsurgical procedures performed to restore movement, symmetry, and function of the face following facial nerve injury, paralysis, trauma, tumor removal, or congenital abnormalities. These procedures help improve facial expression, eye closure, speech, eating function, and overall facial appearance.',
                'overview' => 'The facial nerve controls muscles responsible for facial expression, blinking, smiling, and other important functions. Damage to the facial nerve may occur due to trauma, surgery, tumors, infections, or neurological disorders. Facial nerve repair procedures may include direct nerve repair, nerve grafting, nerve transfer, muscle transfer, or dynamic facial reanimation techniques depending on the severity and duration of paralysis. Advanced microsurgical reconstruction and rehabilitation are essential for improving functional and cosmetic outcomes. The facial nerve controls muscles responsible for facial expression, blinking, smiling, and other important functions. Damage to the facial nerve may occur due to trauma, surgery, tumors, infections, or neurological disorders. Facial nerve repair procedures may include direct nerve repair, nerve grafting, nerve transfer, muscle transfer, or dynamic facial reanimation techniques depending on the severity and duration of paralysis. Advanced microsurgical reconstruction and rehabilitation are essential for improving functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Facial weakness or paralysis on one side of the face'],
            ['value' => 'Difficulty smiling, blinking, or closing the eye'],
            ['value' => 'Facial asymmetry or drooping appearance'],
            ['value' => 'Speech difficulties or drooling from the mouth'],
            ['value' => 'Reduced facial movement, numbness, or muscle stiffness'],
            ['value' => 'Facial weakness or paralysis on one side of the face'],
            ['value' => 'Difficulty smiling, blinking, or closing the eye'],
            ['value' => 'Facial asymmetry or drooping appearance'],
            ['value' => 'Speech difficulties or drooling from the mouth'],
            ['value' => 'Reduced facial movement, numbness, or muscle stiffness'],
        ],
                'causes' => [
            ['value' => 'Facial trauma or fractures affecting the facial nerve'],
            ['value' => 'Surgical injury during facial or salivary gland procedures'],
            ['value' => 'Tumors involving the facial nerve or surrounding tissues'],
            ['value' => 'Viral infections or inflammatory nerve disorders'],
            ['value' => 'Congenital facial paralysis or neurological conditions'],
            ['value' => 'Facial trauma or fractures affecting the facial nerve'],
            ['value' => 'Surgical injury during facial or salivary gland procedures'],
            ['value' => 'Tumors involving the facial nerve or surrounding tissues'],
            ['value' => 'Viral infections or inflammatory nerve disorders'],
            ['value' => 'Congenital facial paralysis or neurological conditions'],
        ],
                'risks' => [
            ['value' => 'Incomplete recovery of facial movement'],
            ['value' => 'Infection or delayed wound healing after surgery'],
            ['value' => 'Persistent facial asymmetry or muscle weakness'],
            ['value' => 'Eye dryness or corneal injury due to incomplete eyelid closure'],
            ['value' => 'Need for additional reconstructive or rehabilitation procedures'],
            ['value' => 'Incomplete recovery of facial movement'],
            ['value' => 'Infection or delayed wound healing after surgery'],
            ['value' => 'Persistent facial asymmetry or muscle weakness'],
            ['value' => 'Eye dryness or corneal injury due to incomplete eyelid closure'],
            ['value' => 'Need for additional reconstructive or rehabilitation procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical neurological assessment and facial nerve imaging evaluation'],
            ['value' => 'Direct facial nerve repair or microsurgical nerve grafting'],
            ['value' => 'Nerve transfer and facial reanimation procedures'],
            ['value' => 'Muscle transfer and reconstructive facial surgery techniques'],
            ['value' => 'Long-term physiotherapy, eye protection, and rehabilitation support'],
            ['value' => 'Clinical neurological assessment and facial nerve imaging evaluation'],
            ['value' => 'Direct facial nerve repair or microsurgical nerve grafting'],
            ['value' => 'Nerve transfer and facial reanimation procedures'],
            ['value' => 'Muscle transfer and reconstructive facial surgery techniques'],
            ['value' => 'Long-term physiotherapy, eye protection, and rehabilitation support'],
        ],
                'recovery' => 'The long-term outlook for facial nerve repair and reconstruction depends on the severity of nerve injury, timing of treatment, and rehabilitation support. Early surgical intervention, advanced microsurgical techniques, physiotherapy, and continuous rehabilitation significantly improve facial movement, symmetry, eye protection, and overall quality of life. Long-term follow-up and rehabilitation are important for maintaining successful functional and cosmetic outcomes. ______________________ 13. Distraction Osteogenesis for Jaw Lengthening Facial Nerve Repair / Reconstruction Procedures Facial Nerve Repair / Reconstruction The long-term outlook for facial nerve repair and reconstruction depends on the severity of nerve injury, timing of treatment, and rehabilitation support. Early surgical intervention, advanced microsurgical techniques, physiotherapy, and continuous rehabilitation significantly improve facial movement, symmetry, eye protection, and overall quality of life. Long-term follow-up and rehabilitation are important for maintaining successful functional and cosmetic outcomes. _______________________',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Facial Nerve Repair / Reconstruction',
                'meta_description' => 'Facial nerve repair and reconstruction are specialized microsurgical procedures performed to restore movement, symmetry, and function of the face following faci',
                'meta_keywords' => '',
            ]
        );
    }
}
