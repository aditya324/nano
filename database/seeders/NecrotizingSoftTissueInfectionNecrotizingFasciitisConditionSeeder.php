<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NecrotizingSoftTissueInfectionNecrotizingFasciitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Necrotizing Soft Tissue Infection / Necrotizing Fasciitis')],
            [
                'name' => 'Necrotizing Soft Tissue Infection / Necrotizing Fasciitis',
                'slug' => Str::slug('Necrotizing Soft Tissue Infection / Necrotizing Fasciitis'),
                'h1' => 'Necrotizing Soft Tissue Infection / Necrotizing Fasciitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Necrotizing soft tissue infection is a rapidly spreading, life-threatening infection that destroys skin, fat, and muscle tissue. Necrotizing fasciitis is a severe form commonly associated with diabetes and immune weakness.',
                'about_more' => '',
                'overview' => 'Necrotizing soft tissue infection is a rapidly spreading, life-threatening infection that destroys skin, fat, and muscle tissue. Necrotizing fasciitis is a severe form commonly associated with diabetes and immune weakness.',
                'symptoms' => [
            ['value' => 'Severe rapidly worsening pain'],
            ['value' => 'Swelling and redness of the foot or leg'],
            ['value' => 'Fever and chills'],
            ['value' => 'Skin discoloration or blackening'],
            ['value' => 'Foul-smelling discharge and tissue destruction'],
        ],
                'causes' => [
            ['value' => 'Severe bacterial infection'],
            ['value' => 'Untreated diabetic wounds or ulcers'],
            ['value' => 'Trauma or cuts in the skin'],
            ['value' => 'Poor blood circulation'],
            ['value' => 'Reduced immunity due to diabetes'],
        ],
                'risks' => [
            ['value' => 'Sepsis and septic shock'],
            ['value' => 'Rapid tissue destruction'],
            ['value' => 'Limb amputation'],
            ['value' => 'Multi-organ failure'],
            ['value' => 'Death if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency hospitalization'],
            ['value' => 'Broad-spectrum intravenous antibiotics'],
            ['value' => 'Immediate surgical debridement'],
            ['value' => 'Intensive care support'],
            ['value' => 'Reconstructive surgery after infection control'],
        ],
                'recovery' => 'Early aggressive treatment is critical for survival. Delayed treatment significantly increases mortality and amputation risk.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Necrotizing Soft Tissue Infection / Necrotizing Fasciitis',
                'meta_description' => 'Necrotizing soft tissue infection is a rapidly spreading, life-threatening infection that destroys skin, fat, and muscle tissue. Necrotizing fasciitis is a seve',
                'meta_keywords' => '',
            ]
        );
    }
}
