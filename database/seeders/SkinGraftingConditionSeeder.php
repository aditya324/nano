<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinGraftingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Skin Grafting')],
            [
                'name' => 'Skin Grafting',
                'slug' => Str::slug('Skin Grafting'),
                'h1' => 'Skin Grafting',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Skin grafting is a reconstructive surgical procedure used to repair areas of skin loss caused by burns, trauma, chronic wounds, infections, or surgical removal of damaged tissue. Healthy skin is taken from a donor area of the body and transplanted to the affected area to promote healing, protect underlying tissues, and improve both function and appearance.',
                'about_more' => '',
                'overview' => 'Skin grafting procedures are commonly classified into split-thickness skin grafts and full-thickness skin grafts. Split-thickness grafts include the upper layers of the skin and are widely used for large wounds and burn injuries, while full-thickness grafts include all layers of the skin and are often used for areas requiring better cosmetic and functional outcomes. Skin grafting plays an important role in burn reconstruction, trauma care, chronic wound management, and reconstructive surgery.',
                'symptoms' => [
            ['value' => 'Large open wounds or skin loss'],
            ['value' => 'Severe burns or traumatic soft tissue injuries'],
            ['value' => 'Non-healing ulcers or chronic wounds'],
            ['value' => 'Exposed muscles, tendons, or underlying structures'],
            ['value' => 'Functional or cosmetic deformities requiring skin reconstruction'],
        ],
                'causes' => [
            ['value' => 'Thermal, chemical, or electrical burns'],
            ['value' => 'Trauma, accidents, or surgical tissue removal'],
            ['value' => 'Chronic ulcers or diabetic wound complications'],
            ['value' => 'Infection causing skin and soft tissue loss'],
            ['value' => 'Reconstructive needs after cancer or deformity correction surgery'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Partial or complete graft failure'],
            ['value' => 'Scarring, discoloration, or uneven skin texture'],
            ['value' => 'Pain or sensitivity at donor and graft sites'],
            ['value' => 'Need for repeat grafting procedures in complex cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Split-thickness skin grafting for large wound coverage'],
            ['value' => 'Full-thickness skin grafting for cosmetic and functional reconstruction'],
            ['value' => 'Advanced wound care and infection management'],
            ['value' => 'Burn reconstruction and reconstructive plastic surgery support'],
            ['value' => 'Long-term rehabilitation, scar management, and follow-up care'],
        ],
                'recovery' => 'The long-term outlook for skin grafting procedures is generally very positive when wounds are properly prepared and postoperative care is maintained. Early intervention, infection control, nutritional support, physiotherapy, and regular follow-up significantly improve graft healing and functional outcomes. Continuous wound care and rehabilitation are important for maintaining long-term recovery, mobility, and cosmetic appearance. ________________________',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Skin Grafting',
                'meta_description' => 'Skin grafting is a reconstructive surgical procedure used to repair areas of skin loss caused by burns, trauma, chronic wounds, infections, or surgical removal ',
                'meta_keywords' => '',
            ]
        );
    }
}
