<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScarRevisionContractureReleaseSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Scar Revision & Contracture Release Surgery')],
            [
                'name' => 'Scar Revision & Contracture Release Surgery',
                'slug' => Str::slug('Scar Revision & Contracture Release Surgery'),
                'h1' => 'Scar Revision & Contracture Release Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Scar revision and contracture release surgery are reconstructive surgical procedures performed to improve the appearance, flexibility, and function of scars caused by burns, trauma, surgery, infections, or chronic wounds. These procedures help release tightened scar tissue, restore movement, reduce discomfort, and improve cosmetic outcomes and quality of life.',
                'about_more' => '',
                'overview' => 'Scar revision surgery focuses on improving the texture, size, color, and appearance of abnormal scars, while contracture release surgery is performed to release tightened scar tissue that restricts movement around joints, the neck, face, or limbs. These procedures are commonly used in burn reconstruction, post-traumatic deformities, chronic scar management, and reconstructive plastic surgery. Advanced techniques such as skin grafting, flap reconstruction, laser therapy, and tissue rearrangement may also be combined when required.',
                'symptoms' => [
            ['value' => 'Tightened or thickened scar tissue'],
            ['value' => 'Restricted joint movement or stiffness'],
            ['value' => 'Raised, painful, or discolored scars'],
            ['value' => 'Cosmetic deformity or skin irregularities'],
            ['value' => 'Difficulty performing daily activities due to scar contractures'],
        ],
                'causes' => [
            ['value' => 'Severe burns or deep skin injuries'],
            ['value' => 'Post-surgical scar formation or wound healing complications'],
            ['value' => 'Trauma, infection, or chronic inflammatory skin conditions'],
            ['value' => 'Delayed healing leading to excessive scar tissue formation'],
            ['value' => 'Contractures affecting the face, neck, hands, or limbs'],
        ],
                'risks' => [
            ['value' => 'Infection, bleeding, or delayed wound healing'],
            ['value' => 'Recurrence of scar contractures or abnormal scarring'],
            ['value' => 'Temporary pain, swelling, or skin sensitivity after surgery'],
            ['value' => 'Cosmetic asymmetry or skin discoloration'],
            ['value' => 'Need for additional reconstructive or rehabilitation procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical scar revision and contracture release procedures'],
            ['value' => 'Skin grafting or flap reconstruction when required'],
            ['value' => 'Laser therapy and advanced scar management techniques'],
            ['value' => 'Physiotherapy, splinting, and rehabilitation exercises'],
            ['value' => 'Long-term scar care, compression therapy, and follow-up support'],
        ],
                'recovery' => 'The long-term outlook for scar revision and contracture release surgery is generally very positive because modern reconstructive techniques can significantly improve movement, comfort, skin flexibility, and cosmetic appearance. Early intervention, physiotherapy, proper wound care, scar management, and regular follow-up are important for maintaining long-term functional and aesthetic outcomes. ________________________________ 6. Microsurgical Reconstruction (Limb / Hand / Face) Microsurgical Reconstruction (Limb / Hand / Face) Procedures',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Scar Revision & Contracture Release Surgery',
                'meta_description' => 'Scar revision and contracture release surgery are reconstructive surgical procedures performed to improve the appearance, flexibility, and function of scars cau',
                'meta_keywords' => '',
            ]
        );
    }
}
