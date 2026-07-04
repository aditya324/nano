<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OnychomycosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Onychomycosis')],
            [
                'name' => 'Onychomycosis',
                'slug' => Str::slug('Onychomycosis'),
                'h1' => 'Onychomycosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Onychomycosis, commonly known as nail fungus, is a fungal infection affecting the fingernails or toenails. The infection usually begins as a white or yellow-brown spot under the tip of the nail and may gradually spread deeper into the nail. As the condition progresses, the nail may become thickened, discolored, brittle, and crumbly. Toenails are more commonly affected than fingernails.',
                'about_more' => '',
                'overview' => 'Onychomycosis, commonly known as nail fungus, is a fungal infection affecting the fingernails or toenails. The infection usually begins as a white or yellow-brown spot under the tip of the nail and may gradually spread deeper into the nail. As the condition progresses, the nail may become thickened, discolored, brittle, and crumbly. Toenails are more commonly affected than fingernails.',
                'symptoms' => [
            ['value' => 'Brittle, crumbly, or ragged nails'],
            ['value' => 'Separation of the nail from the nail bed'],
            ['value' => 'Thickened nails'],
            ['value' => 'Yellow, brown, white, or discolored nails'],
            ['value' => 'Unpleasant odor from the affected nail'],
        ],
                'causes' => [
            ['value' => 'Fungal infections caused by dermatophytes, yeasts, or molds'],
            ['value' => 'Walking barefoot in warm, moist public places such as pools or locker rooms'],
            ['value' => 'Excess sweating or prolonged moisture exposure'],
            ['value' => 'Nail injuries or poor nail hygiene'],
            ['value' => 'Diabetes, weakened immunity, or poor circulation increasing infection risk'],
        ],
                'risks' => [
            ['value' => 'Spread of infection to other nails or skin areas'],
            ['value' => 'Pain, discomfort, or difficulty walking in severe cases'],
            ['value' => 'Permanent nail thickening or deformity'],
            ['value' => 'Secondary bacterial infections, especially in diabetic individuals'],
            ['value' => 'Recurrence of fungal infection after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oral antifungal medications'],
            ['value' => 'Topical antifungal nail solutions or creams'],
            ['value' => 'Nail trimming and debridement procedures'],
            ['value' => 'Laser treatment for fungal nail infections'],
            ['value' => 'Proper foot hygiene and preventive nail care'],
        ],
                'recovery' => 'The long-term outlook for onychomycosis is generally good with appropriate antifungal treatment and nail care. However, treatment may take several months because nails grow slowly. Good hygiene, keeping feet dry, and regular dermatologic follow-up are important for preventing recurrence and maintaining healthy nails. ________________________ 19. Nail Disorders (Onychomycosis, Psoriatic Nails) Psoriatic Nails',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Onychomycosis',
                'meta_description' => 'Onychomycosis, commonly known as nail fungus, is a fungal infection affecting the fingernails or toenails. The infection usually begins as a white or yellow-bro',
                'meta_keywords' => '',
            ]
        );
    }
}
