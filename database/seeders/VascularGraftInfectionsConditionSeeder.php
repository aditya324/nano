<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VascularGraftInfectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Vascular Graft Infections')],
            [
                'name' => 'Vascular Graft Infections',
                'slug' => Str::slug('Vascular Graft Infections'),
                'h1' => 'Vascular Graft Infections',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Vascular graft infections occur when surgically placed artificial blood vessel grafts become infected. These infections are serious complications that may threaten limb function and life.',
                'about_more' => '',
                'overview' => 'Vascular graft infections occur when surgically placed artificial blood vessel grafts become infected. These infections are serious complications that may threaten limb function and life.',
                'symptoms' => [
            ['value' => 'Fever and chills'],
            ['value' => 'Redness or swelling near the surgical site'],
            ['value' => 'Persistent wound discharge'],
            ['value' => 'Pain around the graft area'],
            ['value' => 'Bleeding or graft exposure through the skin'],
        ],
                'causes' => [
            ['value' => 'Bacterial contamination during surgery'],
            ['value' => 'Poor wound healing'],
            ['value' => 'Diabetes or weakened immunity'],
            ['value' => 'Recurrent bloodstream infections'],
            ['value' => 'Long-standing vascular disease'],
        ],
                'risks' => [
            ['value' => 'Sepsis and bloodstream infection'],
            ['value' => 'Graft blockage or failure'],
            ['value' => 'Pseudoaneurysm formation'],
            ['value' => 'Limb ischemia or tissue death'],
            ['value' => 'Life-threatening hemorrhage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood tests and vascular imaging'],
            ['value' => 'Intravenous antibiotics'],
            ['value' => 'Surgical removal of infected graft'],
            ['value' => 'Bypass reconstruction procedures'],
            ['value' => 'Intensive wound care and drainage'],
        ],
                'recovery' => 'Prompt diagnosis and aggressive treatment are essential. Long-term antibiotics and careful monitoring improve outcomes.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Vascular Graft Infections',
                'meta_description' => 'Vascular graft infections occur when surgically placed artificial blood vessel grafts become infected. These infections are serious complications that may threa',
                'meta_keywords' => '',
            ]
        );
    }
}
