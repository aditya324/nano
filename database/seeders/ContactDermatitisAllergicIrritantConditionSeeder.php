<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactDermatitisAllergicIrritantConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Contact Dermatitis (Allergic / Irritant)')],
            [
                'name' => 'Contact Dermatitis (Allergic / Irritant)',
                'slug' => Str::slug('Contact Dermatitis (Allergic / Irritant)'),
                'h1' => 'Contact Dermatitis (Allergic / Irritant)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Contact dermatitis is a common inflammatory skin condition that develops when the skin reacts to direct contact with allergens or irritating substances. The condition may appear as allergic contact dermatitis, caused by an immune reaction to specific allergens, or irritant contact dermatitis, caused by direct damage to the skin barrier from harsh substances. Contact dermatitis commonly affects the hands, face, neck, and exposed skin areas.',
                'about_more' => '',
                'overview' => 'Contact dermatitis is a common inflammatory skin condition that develops when the skin reacts to direct contact with allergens or irritating substances. The condition may appear as allergic contact dermatitis, caused by an immune reaction to specific allergens, or irritant contact dermatitis, caused by direct damage to the skin barrier from harsh substances. Contact dermatitis commonly affects the hands, face, neck, and exposed skin areas.',
                'symptoms' => [
            ['value' => 'Red, itchy, or inflamed skin'],
            ['value' => 'Dry, cracked, or scaly skin patches'],
            ['value' => 'Burning, stinging, or tenderness of the skin'],
            ['value' => 'Swelling or skin sensitivity'],
            ['value' => 'Blisters, oozing, or crusting in severe cases'],
        ],
                'causes' => [
            ['value' => 'Soaps, detergents, and cleaning chemicals'],
            ['value' => 'Cosmetics, perfumes, or skincare products'],
            ['value' => 'Metals such as nickel found in jewelry or accessories'],
            ['value' => 'Latex, plants, or environmental allergens'],
            ['value' => 'Frequent hand washing or prolonged exposure to irritants'],
        ],
                'risks' => [
            ['value' => 'Chronic skin irritation and discomfort'],
            ['value' => 'Skin infections caused by scratching or skin damage'],
            ['value' => 'Thickened or discolored skin from repeated inflammation'],
            ['value' => 'Sleep disturbances due to severe itching'],
            ['value' => 'Recurrent flare-ups if triggers are not avoided'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Identifying and avoiding allergens or irritants'],
            ['value' => 'Regular use of moisturizers and protective skincare products'],
            ['value' => 'Topical corticosteroids and anti-inflammatory medications'],
            ['value' => 'Antihistamines to reduce itching and irritation'],
            ['value' => 'Dermatology consultation and allergy testing when required'],
        ],
                'recovery' => 'The long-term outlook for contact dermatitis is generally very good when triggers are identified and managed appropriately. Most cases improve with proper skin care, avoidance of irritants, and medical treatment. Preventive measures, skin protection, and regular dermatologic care help reduce flare-ups and support long-term skin health and comfort. __________________________ 9. Alopecia Areata / Pattern Hair Loss Alopecia Areata Alopecia Areata',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Contact Dermatitis (Allergic / Irritant)',
                'meta_description' => 'Contact dermatitis is a common inflammatory skin condition that develops when the skin reacts to direct contact with allergens or irritating substances. The con',
                'meta_keywords' => '',
            ]
        );
    }
}
