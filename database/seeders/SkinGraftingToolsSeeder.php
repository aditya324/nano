<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinGraftingToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Grafting Tools')],
            [
                'title' => 'Skin Grafting Tools',
                'slug' => Str::slug('Skin Grafting Tools'),
                'introduction' => 'Skin grafting tools are specialized surgical instruments used to remove, prepare, and transplant healthy skin from one area of the body to another for wound coverage and reconstruction. These tools help dermatologists and surgeons manage severe wounds, burns, chronic ulcers, trauma-related skin loss, and reconstructive skin procedures.',
                'what_is' => 'Skin grafting procedures involve harvesting healthy skin, known as a graft, from a donor site and placing it over damaged or missing skin areas. Commonly used instruments include dermatomes, skin meshers, scalpels, forceps, graft carriers, and dressing systems. Skin grafting tools support accurate tissue handling, wound preparation, and graft placement to promote proper healing and skin regeneration.',
                'symptoms' => [
            ['value' => 'Severe skin wounds or tissue loss'],
            ['value' => 'Burns or trauma-related skin damage'],
            ['value' => 'Chronic non-healing ulcers'],
            ['value' => 'Large surgical wounds requiring reconstruction'],
            ['value' => 'Skin defects following tumor or skin cancer removal'],
        ],
                'causes' => [
            ['value' => 'Burns and thermal injuries'],
            ['value' => 'Chronic wounds or diabetic ulcers'],
            ['value' => 'Trauma, accidents, or deep skin injuries'],
            ['value' => 'Surgical excision of skin cancers or tumors'],
            ['value' => 'Infections causing extensive skin damage'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding, swelling, or pain after surgery'],
            ['value' => 'Infection at donor or graft sites'],
            ['value' => 'Delayed wound healing or graft failure'],
            ['value' => 'Scarring or pigmentation changes'],
            ['value' => 'Need for repeat grafting procedures in severe cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'Skin grafting tools are used during reconstructive procedures to restore skin coverage and support wound healing. Treatment approaches may involve split-thickness grafts, full-thickness grafts, wound debridement, advanced dressings, and supportive therapies depending on the size and severity of the wound. Post-surgical care and multidisciplinary wound management are important for successful recovery.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping graft and donor sites clean and protected'],
            ['value' => 'Proper wound dressing and infection prevention'],
            ['value' => 'Monitoring graft healing and blood supply'],
            ['value' => 'Limiting pressure or trauma to treated areas during recovery'],
            ['value' => 'Regular follow-up visits for wound assessment and healing progress'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding, swelling, or pain after surgery'],
            ['value' => 'Infection at donor or graft sites'],
            ['value' => 'Delayed wound healing or graft failure'],
            ['value' => 'Scarring or pigmentation changes'],
            ['value' => 'Need for repeat grafting procedures in severe cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'Skin grafting tools are used during reconstructive procedures to restore skin coverage and support wound healing. Treatment approaches may involve split-thickness grafts, full-thickness grafts, wound debridement, advanced dressings, and supportive therapies depending on the size and severity of the wound. Post-surgical care and multidisciplinary wound management are important for successful recovery.'],
        ],
                'long_term_outlook' => 'The long-term outlook after skin grafting procedures is generally positive when wounds are managed appropriately and graft healing is successful. Skin grafting helps restore skin integrity, improve wound healing, and support functional and cosmetic recovery. Proper wound care, rehabilitation, and regular medical follow-up are important for achieving long-term healing and preventing complications.',
                'conclusion' => '',
                'seo_title' => 'Skin Grafting Tools',
                'seo_description' => 'Skin grafting tools are specialized surgical instruments used to remove, prepare, and transplant healthy skin from one area of the body to another for wound coverage and reconstruction. These tools help dermatologists and surgeons manage severe wounds, burns, chronic ulcers, trauma-related skin loss, and reconstructive skin procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
