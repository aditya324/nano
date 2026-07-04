<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticFootSepsisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Foot Sepsis')],
            [
                'name' => 'Diabetic Foot Sepsis',
                'slug' => Str::slug('Diabetic Foot Sepsis'),
                'h1' => 'Diabetic Foot Sepsis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic foot sepsis is a severe systemic infection arising from infected diabetic foot ulcers or wounds. The infection can spread rapidly into deeper tissues and bloodstream.',
                'about_more' => '',
                'overview' => 'Diabetic foot sepsis is a severe systemic infection arising from infected diabetic foot ulcers or wounds. The infection can spread rapidly into deeper tissues and bloodstream.',
                'symptoms' => [
            ['value' => 'Fever and chills'],
            ['value' => 'Severe foot pain and swelling'],
            ['value' => 'Foul-smelling infected wound'],
            ['value' => 'Confusion or weakness in severe cases'],
            ['value' => 'Low blood pressure and rapid heartbeat'],
        ],
                'causes' => [
            ['value' => 'Infected diabetic foot ulcers'],
            ['value' => 'Delayed wound treatment'],
            ['value' => 'Poor blood sugar control'],
            ['value' => 'Peripheral vascular disease'],
            ['value' => 'Deep tissue or bone infection'],
        ],
                'risks' => [
            ['value' => 'Septic shock'],
            ['value' => 'Organ failure'],
            ['value' => 'Gangrene and tissue death'],
            ['value' => 'Limb amputation'],
            ['value' => 'Death in advanced infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency intravenous antibiotics'],
            ['value' => 'Blood sugar stabilization'],
            ['value' => 'Surgical drainage and debridement'],
            ['value' => 'Intensive wound care'],
            ['value' => 'Amputation in severe uncontrolled infection'],
        ],
                'recovery' => 'Prompt medical and surgical treatment improves survival and limb preservation outcomes.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Diabetic Foot Sepsis',
                'meta_description' => 'Diabetic foot sepsis is a severe systemic infection arising from infected diabetic foot ulcers or wounds. The infection can spread rapidly into deeper tissues a',
                'meta_keywords' => '',
            ]
        );
    }
}
