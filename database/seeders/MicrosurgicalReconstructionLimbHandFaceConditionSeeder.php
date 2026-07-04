<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicrosurgicalReconstructionLimbHandFaceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Microsurgical Reconstruction (Limb / Hand / Face)')],
            [
                'name' => 'Microsurgical Reconstruction (Limb / Hand / Face)',
                'slug' => Str::slug('Microsurgical Reconstruction (Limb / Hand / Face)'),
                'h1' => 'Microsurgical Reconstruction (Limb / Hand / Face)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Microsurgical reconstruction is an advanced surgical technique that uses specialized microscopes and precision instruments to repair or reconstruct small blood vessels, nerves, muscles, tendons, and soft tissues. These procedures are commonly performed for complex injuries and deformities involving the limbs, hands, and face to restore function, circulation, sensation, and appearance.',
                'about_more' => '',
                'overview' => 'Microsurgical reconstruction is widely used in limb salvage, hand surgery, facial reconstruction, trauma repair, cancer reconstruction, and congenital deformity correction. The procedure may involve tissue transfer, nerve repair, blood vessel reconstruction, reattachment of amputated parts, or free flap reconstruction using tissue from another part of the body. Microsurgery allows precise restoration of delicate structures and improves both functional and cosmetic outcomes in complex reconstructive cases.',
                'symptoms' => [
            ['value' => 'Severe soft tissue loss or traumatic injury'],
            ['value' => 'Loss of hand, limb, or facial function'],
            ['value' => 'Nerve damage causing numbness or weakness'],
            ['value' => 'Facial deformity or tissue defects after trauma or surgery'],
            ['value' => 'Reduced blood circulation or tissue viability in affected areas'],
        ],
                'causes' => [
            ['value' => 'Major trauma, crush injuries, or amputations'],
            ['value' => 'Burns or severe soft tissue damage'],
            ['value' => 'Cancer surgery requiring reconstructive tissue restoration'],
            ['value' => 'Congenital deformities affecting limbs or facial structures'],
            ['value' => 'Nerve, tendon, or vascular injuries requiring precision repair'],
        ],
                'risks' => [
            ['value' => 'Infection, bleeding, or delayed wound healing'],
            ['value' => 'Reduced blood supply leading to tissue or flap failure'],
            ['value' => 'Nerve-related weakness or sensory changes'],
            ['value' => 'Scar formation or cosmetic asymmetry'],
            ['value' => 'Need for repeat reconstructive or revision procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Microsurgical repair of nerves, tendons, and blood vessels'],
            ['value' => 'Free flap tissue transfer and complex soft tissue reconstruction'],
            ['value' => 'Replantation of amputated limbs or fingers when possible'],
            ['value' => 'Facial and hand reconstructive microsurgery procedures'],
            ['value' => 'Long-term physiotherapy, rehabilitation, and reconstructive follow-up care'],
        ],
                'recovery' => 'The long-term outlook for microsurgical reconstruction depends on the severity of injury, blood supply restoration, timing of surgery, and rehabilitation support. Early microsurgical intervention, advanced reconstructive techniques, physiotherapy, and continuous follow-up can significantly improve movement, sensation, appearance, and overall functional recovery. Long-term rehabilitation and multidisciplinary care are important for maintaining independence and quality of life.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Microsurgical Reconstruction (Limb / Hand / Face)',
                'meta_description' => 'Microsurgical reconstruction is an advanced surgical technique that uses specialized microscopes and precision instruments to repair or reconstruct small blood ',
                'meta_keywords' => '',
            ]
        );
    }
}
