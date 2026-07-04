<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SoftTissueInfectionsCellulitisAbscessConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Soft Tissue Infections (Cellulitis, Abscess)')],
            [
                'name' => 'Soft Tissue Infections (Cellulitis, Abscess)',
                'slug' => Str::slug('Soft Tissue Infections (Cellulitis, Abscess)'),
                'h1' => 'Soft Tissue Infections (Cellulitis, Abscess)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Soft tissue infections involve bacterial infection of the skin, underlying tissues, or muscles. Cellulitis causes widespread skin inflammation, while abscesses are localized collections of pus.',
                'about_more' => '',
                'overview' => 'Soft tissue infections involve bacterial infection of the skin, underlying tissues, or muscles. Cellulitis causes widespread skin inflammation, while abscesses are localized collections of pus.',
                'symptoms' => [
            ['value' => 'Redness and swelling of affected area'],
            ['value' => 'Pain and warmth over the skin'],
            ['value' => 'Fever and chills'],
            ['value' => 'Pus discharge in abscess cases'],
            ['value' => 'Tenderness and difficulty moving affected part'],
        ],
                'causes' => [
            ['value' => 'Bacterial infection through skin cuts or wounds'],
            ['value' => 'Poor hygiene or contaminated injuries'],
            ['value' => 'Diabetes and weak immunity'],
            ['value' => 'Insect bites or skin ulcers'],
            ['value' => 'Poor blood circulation'],
        ],
                'risks' => [
            ['value' => 'Spread of infection into deeper tissues'],
            ['value' => 'Sepsis and bloodstream infection'],
            ['value' => 'Tissue destruction and gangrene'],
            ['value' => 'Recurrent infections'],
            ['value' => 'Delayed wound healing'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics and pain management'],
            ['value' => 'Surgical drainage of abscesses'],
            ['value' => 'Wound care and dressing changes'],
            ['value' => 'Blood sugar control in diabetic patients'],
            ['value' => 'Hospitalization for severe infection cases'],
        ],
                'recovery' => 'Most infections improve with early antibiotics and drainage. Severe untreated infections may become life-threatening.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Soft Tissue Infections (Cellulitis, Abscess)',
                'meta_description' => 'Soft tissue infections involve bacterial infection of the skin, underlying tissues, or muscles. Cellulitis causes widespread skin inflammation, while abscesses ',
                'meta_keywords' => '',
            ]
        );
    }
}
