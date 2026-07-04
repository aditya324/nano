<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GangreneDryWetGasformingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gangrene (Dry / Wet / Gas-forming)')],
            [
                'name' => 'Gangrene (Dry / Wet / Gas-forming)',
                'slug' => Str::slug('Gangrene (Dry / Wet / Gas-forming)'),
                'h1' => 'Gangrene (Dry / Wet / Gas-forming)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gangrene is death of body tissue caused by severe infection or loss of blood supply. It is a serious diabetic foot complication requiring urgent treatment.',
                'about_more' => '',
                'overview' => 'Gangrene is death of body tissue caused by severe infection or loss of blood supply. It is a serious diabetic foot complication requiring urgent treatment.',
                'symptoms' => [
            ['value' => 'Blackened or discolored skin'],
            ['value' => 'Severe swelling and pain'],
            ['value' => 'Foul-smelling discharge'],
            ['value' => 'Fever and signs of infection'],
            ['value' => 'Numbness or tissue breakdown'],
        ],
                'causes' => [
            ['value' => 'Severe diabetic foot infection'],
            ['value' => 'Poor blood circulation'],
            ['value' => 'Untreated ulcers or wounds'],
            ['value' => 'Trauma or burns'],
            ['value' => 'Gas-forming bacterial infections'],
        ],
                'risks' => [
            ['value' => 'Rapid spread of infection'],
            ['value' => 'Sepsis and shock'],
            ['value' => 'Tissue destruction'],
            ['value' => 'Limb amputation'],
            ['value' => 'Death if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency hospitalization'],
            ['value' => 'Intravenous antibiotics'],
            ['value' => 'Surgical debridement'],
            ['value' => 'Amputation in severe cases'],
            ['value' => 'Vascular procedures to improve circulation'],
        ],
                'recovery' => 'Early aggressive treatment improves survival and reduces the extent of tissue loss.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Gangrene (Dry / Wet / Gas-forming)',
                'meta_description' => 'Gangrene is death of body tissue caused by severe infection or loss of blood supply. It is a serious diabetic foot complication requiring urgent treatment.',
                'meta_keywords' => '',
            ]
        );
    }
}
