<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTraumaticFacialReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Traumatic Facial Reconstruction')],
            [
                'name' => 'Post-Traumatic Facial Reconstruction',
                'slug' => Str::slug('Post-Traumatic Facial Reconstruction'),
                'h1' => 'Post-Traumatic Facial Reconstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-traumatic facial reconstruction is a specialized reconstructive surgical procedure performed to restore the structure, appearance, and function of the face following injuries caused by accidents, trauma, burns, fractures, or soft tissue damage. These procedures help improve facial symmetry, breathing, speech, vision, chewing function, and overall quality of life.',
                'about_more' => '',
                'overview' => 'Facial reconstruction procedures may involve repair of facial bones, soft tissues, nerves, muscles, blood vessels, and skin using advanced reconstructive and microsurgical techniques. Commonly treated injuries include fractures of the jaw, cheekbones, nose, eye sockets, and forehead, as well as facial lacerations, tissue loss, and burn-related deformities. Treatment often combines trauma surgery, reconstructive plastic surgery, dental correction, and rehabilitation to restore both functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Facial pain, swelling, or bruising after trauma'],
            ['value' => 'Facial deformity or asymmetry'],
            ['value' => 'Difficulty chewing, speaking, or breathing'],
            ['value' => 'Vision problems or restricted jaw movement'],
            ['value' => 'Soft tissue loss, scarring, or nerve-related facial weakness'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents or high-impact trauma'],
            ['value' => 'Sports injuries or workplace-related facial injuries'],
            ['value' => 'Burns, blast injuries, or severe soft tissue damage'],
            ['value' => 'Facial fractures involving the jaw, nose, or orbital bones'],
            ['value' => 'Post-traumatic tissue loss requiring reconstructive correction'],
        ],
                'risks' => [
            ['value' => 'Infection, bleeding, or delayed healing after surgery'],
            ['value' => 'Permanent facial asymmetry or cosmetic deformity'],
            ['value' => 'Nerve damage causing numbness or facial weakness'],
            ['value' => 'Difficulty with speech, chewing, or breathing in severe cases'],
            ['value' => 'Need for multiple reconstructive or revision procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency facial trauma assessment and imaging evaluation'],
            ['value' => 'Surgical repair of facial fractures and soft tissue injuries'],
            ['value' => 'Bone fixation, skin grafting, and flap reconstruction procedures'],
            ['value' => 'Microsurgical nerve and vascular repair techniques'],
            ['value' => 'Long-term rehabilitation, physiotherapy, and cosmetic reconstruction support'],
        ],
                'recovery' => 'The long-term outlook for post-traumatic facial reconstruction depends on the severity of injury, timing of treatment, and extent of reconstructive care. Early surgical intervention, advanced reconstructive techniques, rehabilitation therapy, and multidisciplinary follow-up can significantly improve facial appearance, function, and overall quality of life. Continuous medical support and rehabilitation are important for achieving successful long-term recovery and functional independence. _______________________ 16. Pressure Sore Management & Surgical Repair Pressure Sore Management & Surgical Repair Procedures',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Post-Traumatic Facial Reconstruction',
                'meta_description' => 'Post-traumatic facial reconstruction is a specialized reconstructive surgical procedure performed to restore the structure, appearance, and function of the face',
                'meta_keywords' => '',
            ]
        );
    }
}
