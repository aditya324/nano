<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NonHealingPostSurgicalWoundsinDiabeticFootConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Non-Healing Post-Surgical Wounds in Diabetic Foot')],
            [
                'name' => 'Non-Healing Post-Surgical Wounds in Diabetic Foot',
                'slug' => Str::slug('Non-Healing Post-Surgical Wounds in Diabetic Foot'),
                'h1' => 'Non-Healing Post-Surgical Wounds in Diabetic Foot',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Non-healing post-surgical wounds in diabetic patients occur due to poor blood circulation, infection, neuropathy, and impaired immune response after foot surgery.',
                'about_more' => '',
                'overview' => 'Non-healing post-surgical wounds in diabetic patients occur due to poor blood circulation, infection, neuropathy, and impaired immune response after foot surgery.',
                'symptoms' => [
            ['value' => 'Persistent wound opening after surgery'],
            ['value' => 'Redness and swelling around the surgical site'],
            ['value' => 'Delayed tissue healing'],
            ['value' => 'Pain, discharge, or foul odor'],
            ['value' => 'Fever if infection develops'],
        ],
                'causes' => [
            ['value' => 'Poor blood sugar control'],
            ['value' => 'Reduced blood circulation'],
            ['value' => 'Surgical site infection'],
            ['value' => 'Peripheral neuropathy'],
            ['value' => 'Nutritional deficiencies and poor immunity'],
        ],
                'risks' => [
            ['value' => 'Deep wound infection'],
            ['value' => 'Bone infection (osteomyelitis)'],
            ['value' => 'Tissue necrosis and gangrene'],
            ['value' => 'Repeat surgery or amputation'],
            ['value' => 'Prolonged hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Advanced wound care and dressing'],
            ['value' => 'Blood sugar optimization'],
            ['value' => 'Antibiotics and infection control'],
            ['value' => 'Surgical debridement or reconstruction'],
            ['value' => 'Vascular procedures to improve circulation'],
        ],
                'recovery' => 'Careful diabetic management and multidisciplinary wound care significantly improve healing and reduce complications.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Non-Healing Post-Surgical Wounds in Diabetic Foot',
                'meta_description' => 'Non-healing post-surgical wounds in diabetic patients occur due to poor blood circulation, infection, neuropathy, and impaired immune response after foot surger',
                'meta_keywords' => '',
            ]
        );
    }
}
