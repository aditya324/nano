<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AtopicDermatitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Atopic Dermatitis')],
            [
                'name' => 'Atopic Dermatitis',
                'slug' => Str::slug('Atopic Dermatitis'),
                'h1' => 'Atopic Dermatitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Atopic dermatitis is a chronic skin condition that causes dry, itchy, inflamed, and discolored patches of skin. It is one of the most common forms of eczema and may occur in children as well as adults. The condition often develops in flare-ups and can vary from mild irritation to severe skin inflammation affecting daily comfort and quality of life.',
                'about_more' => '',
                'overview' => 'Atopic dermatitis is a chronic skin condition that causes dry, itchy, inflamed, and discolored patches of skin. It is one of the most common forms of eczema and may occur in children as well as adults. The condition often develops in flare-ups and can vary from mild irritation to severe skin inflammation affecting daily comfort and quality of life.',
                'symptoms' => [
            ['value' => 'Dry or cracked skin'],
            ['value' => 'Severe itching or skin irritation'],
            ['value' => 'Red, purple, brown, or gray skin discoloration'],
            ['value' => 'Small fluid-filled bumps, crusting, or oozing skin lesions'],
            ['value' => 'Swelling and skin sensitivity during flare-ups'],
        ],
                'causes' => [
            ['value' => 'Exposure to allergens or skin irritants'],
            ['value' => 'Hormonal changes, including during pregnancy'],
            ['value' => 'Temperature or weather changes such as heat or cold'],
            ['value' => 'Skin infections and bacterial irritation'],
            ['value' => 'Food allergies such as peanuts, eggs, soy, wheat, or shellfish'],
        ],
                'risks' => [
            ['value' => 'Asthma and hay fever associated with allergic conditions'],
            ['value' => 'Food allergies and hypersensitivity reactions'],
            ['value' => 'Chronic itchy and thickened skin changes'],
            ['value' => 'Skin discoloration or pigmentation changes'],
            ['value' => 'Irritant hand dermatitis and recurrent skin infections'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Identifying and avoiding triggers or allergens'],
            ['value' => 'Regular use of fragrance-free moisturizers and skincare products'],
            ['value' => 'Topical prescription medications as advised by a healthcare provider'],
            ['value' => 'Light therapy (phototherapy) for severe or persistent cases'],
            ['value' => 'Allergen immunotherapy and advanced dermatologic treatments when required'],
        ],
                'recovery' => 'The long-term outlook for atopic dermatitis is generally positive with proper skincare, trigger management, and medical treatment. Although the condition may be chronic and recurrent, regular dermatologic care and preventive measures can significantly reduce flare-ups, improve skin health, and enhance overall comfort and quality of life. _____________________ 3. Psoriasis Psoriasis',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Atopic Dermatitis',
                'meta_description' => 'Atopic dermatitis is a chronic skin condition that causes dry, itchy, inflamed, and discolored patches of skin. It is one of the most common forms of eczema and',
                'meta_keywords' => '',
            ]
        );
    }
}
