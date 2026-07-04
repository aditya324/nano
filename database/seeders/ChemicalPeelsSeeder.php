<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChemicalPeelsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Chemical Peels')],
            [
                'title' => 'Chemical Peels',
                'slug' => Str::slug('Chemical Peels'),
                'introduction' => 'Chemical peels are dermatologic cosmetic procedures that use specially formulated chemical solutions to exfoliate and remove damaged outer layers of the skin. These treatments help improve skin texture, reduce pigmentation, minimize acne scars, and promote smoother, healthier-looking skin.',
                'what_is' => 'Chemical peels are commonly used to treat hyperpigmentation, melasma, acne scars, uneven skin tone, fine lines, and sun-damaged skin. Depending on the skin condition and treatment goals, superficial, medium, or deep peels may be performed. The procedure stimulates skin renewal and collagen production, resulting in brighter and more even-toned skin over time.',
                'symptoms' => [
            ['value' => 'Acne scars or uneven skin texture'],
            ['value' => 'Hyperpigmentation or melasma'],
            ['value' => 'Dull or sun-damaged skin'],
            ['value' => 'Fine lines or rough skin appearance'],
            ['value' => 'Post-inflammatory skin discoloration'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary redness, peeling, or skin irritation'],
            ['value' => 'Increased skin sensitivity after treatment'],
            ['value' => 'Pigmentation changes or uneven healing'],
            ['value' => 'Mild swelling or burning sensation'],
            ['value' => 'Rare scarring or infection in deeper peels'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Strict sun protection and sunscreen use'],
            ['value' => 'Gentle cleansing and moisturizing of the skin'],
            ['value' => 'Avoiding harsh skincare products during healing'],
            ['value' => 'Preventing scratching or peeling of treated skin'],
            ['value' => 'Regular dermatologic follow-up and repeat sessions if required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, peeling, or skin irritation'],
            ['value' => 'Increased skin sensitivity after treatment'],
            ['value' => 'Pigmentation changes or uneven healing'],
            ['value' => 'Mild swelling or burning sensation'],
            ['value' => 'Rare scarring or infection in deeper peels'],
        ],
                'long_term_outlook' => 'The long-term outlook with chemical peels is generally very positive when treatments are performed under proper medical supervision. Chemical peels can significantly improve skin tone, acne scarring, pigmentation, and overall skin texture. Consistent skincare, sun protection, and regular dermatologic care are important for maintaining long-term treatment results and healthy skin appearance.',
                'conclusion' => '',
                'seo_title' => 'Chemical Peels',
                'seo_description' => 'Chemical peels are dermatologic cosmetic procedures that use specially formulated chemical solutions to exfoliate and remove damaged outer layers of the skin. These treatments help improve skin texture, reduce pigmentation, minimize acne scars, and promote smoother, healthier-looking skin.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
