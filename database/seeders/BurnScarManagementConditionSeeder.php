<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BurnScarManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Burn Scar Management')],
            [
                'name' => 'Burn Scar Management',
                'slug' => Str::slug('Burn Scar Management'),
                'h1' => 'Burn Scar Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Burn scar management involves specialized medical, surgical, and rehabilitative treatments designed to reduce scarring, improve skin flexibility, restore movement, and enhance cosmetic appearance after burn injuries. Techniques such as laser therapy, reconstructive surgery, and physiotherapy help improve both functional recovery and overall quality of life.',
                'about_more' => '',
                'overview' => 'Burn scars may develop after thermal, chemical, or electrical burns due to abnormal healing and excessive scar tissue formation. These scars can cause skin tightening, contractures, discoloration, itching, pain, and restricted movement. Burn scar management combines advanced wound care, scar revision procedures, laser therapy, compression therapy, physiotherapy, and reconstructive surgery to improve skin texture, mobility, and appearance. Long-term rehabilitation is often required for optimal recovery.',
                'symptoms' => [
            ['value' => 'Thickened, raised, or discolored scars'],
            ['value' => 'Tightened skin or reduced flexibility'],
            ['value' => 'Restricted joint movement or contractures'],
            ['value' => 'Pain, itching, or skin sensitivity in scarred areas'],
            ['value' => 'Cosmetic deformity affecting confidence and daily activities'],
        ],
                'causes' => [
            ['value' => 'Deep thermal, chemical, or electrical burns'],
            ['value' => 'Delayed wound healing or severe tissue damage'],
            ['value' => 'Infection or complications during burn recovery'],
            ['value' => 'Excessive scar tissue formation after burns'],
            ['value' => 'Inadequate rehabilitation or scar care management'],
        ],
                'risks' => [
            ['value' => 'Permanent scar contractures and reduced mobility'],
            ['value' => 'Chronic pain, itching, or skin irritation'],
            ['value' => 'Cosmetic deformity and emotional distress'],
            ['value' => 'Recurrent skin breakdown or wound complications'],
            ['value' => 'Need for repeated reconstructive procedures in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Laser therapy for scar reduction and skin resurfacing'],
            ['value' => 'Surgical scar revision and contracture release procedures'],
            ['value' => 'Physiotherapy and rehabilitation exercises to improve movement'],
            ['value' => 'Compression garments and advanced scar management techniques'],
            ['value' => 'Skin grafting, flap reconstruction, and long-term burn care support when required'],
        ],
                'recovery' => 'The long-term outlook for burn scar management is generally very positive because modern reconstructive treatments, laser technologies, and rehabilitation programs can significantly improve scar appearance, skin flexibility, and functional recovery. Early intervention, continuous physiotherapy, proper scar care, and regular follow-up are important for maintaining long-term mobility, comfort, and cosmetic outcomes. ________________________ 19. Extremity Limb Salvage & Reconstruction Extremity Limb Salvage & Reconstruction Procedures',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Burn Scar Management',
                'meta_description' => 'Burn scar management involves specialized medical, surgical, and rehabilitative treatments designed to reduce scarring, improve skin flexibility, restore moveme',
                'meta_keywords' => '',
            ]
        );
    }
}
