<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TineaRingwormDermatophytosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tinea (Ringworm / Dermatophytosis)')],
            [
                'name' => 'Tinea (Ringworm / Dermatophytosis)',
                'slug' => Str::slug('Tinea (Ringworm / Dermatophytosis)'),
                'h1' => 'Tinea (Ringworm / Dermatophytosis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tinea, also known as ringworm or dermatophytosis, is a common fungal skin infection caused by dermatophyte fungi that affect the skin, hair, or nails. Despite its name, ringworm is not caused by worms. The infection can occur on different parts of the body, including the scalp, feet, groin, nails, and body skin, often causing itchy, circular, and scaly skin lesions.',
                'about_more' => '',
                'overview' => 'Tinea, also known as ringworm or dermatophytosis, is a common fungal skin infection caused by dermatophyte fungi that affect the skin, hair, or nails. Despite its name, ringworm is not caused by worms. The infection can occur on different parts of the body, including the scalp, feet, groin, nails, and body skin, often causing itchy, circular, and scaly skin lesions.',
                'symptoms' => [
            ['value' => 'Itchy, red, or scaly skin patches'],
            ['value' => 'Ring-shaped rash with raised borders'],
            ['value' => 'Dry, cracked, or peeling skin'],
            ['value' => 'Hair loss or scalp scaling in scalp infections'],
            ['value' => 'Thickened, brittle, or discolored nails in nail infections'],
        ],
                'causes' => [
            ['value' => 'Fungal infection caused by dermatophytes'],
            ['value' => 'Excess sweating and warm, humid environments'],
            ['value' => 'Sharing personal items such as towels, clothing, or footwear'],
            ['value' => 'Poor hygiene or prolonged moisture exposure'],
            ['value' => 'Contact with infected individuals, animals, or contaminated surfaces'],
        ],
                'risks' => [
            ['value' => 'Spread of infection to other body areas'],
            ['value' => 'Secondary bacterial skin infections due to scratching'],
            ['value' => 'Nail damage or permanent nail changes'],
            ['value' => 'Hair loss or scalp inflammation in severe scalp infections'],
            ['value' => 'Recurrence of fungal infections, especially in humid conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical antifungal creams, lotions, or powders'],
            ['value' => 'Oral antifungal medications for severe or widespread infections'],
            ['value' => 'Medicated shampoos for scalp infections'],
            ['value' => 'Maintaining proper skin hygiene and dryness'],
            ['value' => 'Avoiding sharing personal items and reducing moisture exposure'],
        ],
                'recovery' => 'The long-term outlook for tinea infections is generally very good with proper antifungal treatment and hygiene practices. Most infections improve within a few weeks, although some cases may require prolonged treatment. Preventive care, maintaining dry skin, and avoiding reinfection are important for long-term skin health and reducing recurrence. _____________________________ 4. Fungal Skin Infections (Tinea, Candidiasis) Candidiasis',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Tinea (Ringworm / Dermatophytosis)',
                'meta_description' => 'Tinea, also known as ringworm or dermatophytosis, is a common fungal skin infection caused by dermatophyte fungi that affect the skin, hair, or nails. Despite i',
                'meta_keywords' => '',
            ]
        );
    }
}
