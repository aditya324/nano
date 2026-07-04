<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticFootUlcerLimbThreateningInfectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Foot Ulcer / Limb Threatening Infection')],
            [
                'name' => 'Diabetic Foot Ulcer / Limb Threatening Infection',
                'slug' => Str::slug('Diabetic Foot Ulcer / Limb Threatening Infection'),
                'h1' => 'Diabetic Foot Ulcer / Limb Threatening Infection',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic foot ulcers are open sores or infections occurring in patients with diabetes due to poor circulation and nerve damage. Severe infections may threaten limb survival.',
                'about_more' => '',
                'overview' => 'Diabetic foot ulcers are open sores or infections occurring in patients with diabetes due to poor circulation and nerve damage. Severe infections may threaten limb survival.',
                'symptoms' => [
            ['value' => 'Foot ulcer or nonhealing wound'],
            ['value' => 'Swelling and redness of the foot'],
            ['value' => 'Pus discharge or foul smell'],
            ['value' => 'Reduced sensation or numbness'],
            ['value' => 'Fever in severe infection cases'],
        ],
                'causes' => [
            ['value' => 'Poorly controlled diabetes'],
            ['value' => 'Peripheral neuropathy and loss of sensation'],
            ['value' => 'Poor blood circulation'],
            ['value' => 'Foot injuries or pressure sores'],
            ['value' => 'Improper footwear and hygiene'],
        ],
                'risks' => [
            ['value' => 'Severe soft tissue infection'],
            ['value' => 'Bone infection (osteomyelitis)'],
            ['value' => 'Gangrene and tissue death'],
            ['value' => 'Need for limb amputation'],
            ['value' => 'Sepsis and systemic illness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood sugar control and wound care'],
            ['value' => 'Antibiotics and infection management'],
            ['value' => 'Surgical cleaning and debridement'],
            ['value' => 'Vascular assessment and circulation improvement'],
            ['value' => 'Advanced wound care or amputation if necessary'],
        ],
                'recovery' => 'Early treatment and proper diabetic foot care improve healing and reduce amputation risk significantly.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Diabetic Foot Ulcer / Limb Threatening Infection',
                'meta_description' => 'Diabetic foot ulcers are open sores or infections occurring in patients with diabetes due to poor circulation and nerve damage. Severe infections may threaten l',
                'meta_keywords' => '',
            ]
        );
    }
}
