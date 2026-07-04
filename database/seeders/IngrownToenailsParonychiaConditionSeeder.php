<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngrownToenailsParonychiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ingrown Toenails / Paronychia')],
            [
                'name' => 'Ingrown Toenails / Paronychia',
                'slug' => Str::slug('Ingrown Toenails / Paronychia'),
                'h1' => 'Ingrown Toenails / Paronychia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ingrown toenails occur when the edge of the nail grows into the surrounding skin, causing pain and inflammation. Paronychia is an infection around the nail fold, commonly seen in diabetic patients due to poor immunity and delayed healing.',
                'about_more' => '',
                'overview' => 'Ingrown toenails occur when the edge of the nail grows into the surrounding skin, causing pain and inflammation. Paronychia is an infection around the nail fold, commonly seen in diabetic patients due to poor immunity and delayed healing.',
                'symptoms' => [
            ['value' => 'Pain and tenderness around the toenail'],
            ['value' => 'Redness and swelling near the nail'],
            ['value' => 'Pus or discharge from the infected area'],
            ['value' => 'Difficulty walking or wearing footwear'],
            ['value' => 'Thickened or deformed nails'],
        ],
                'causes' => [
            ['value' => 'Improper nail trimming'],
            ['value' => 'Tight-fitting footwear'],
            ['value' => 'Repeated foot trauma'],
            ['value' => 'Poor foot hygiene'],
            ['value' => 'Diabetes-related poor wound healing'],
        ],
                'risks' => [
            ['value' => 'Severe nail infection'],
            ['value' => 'Spread of infection to surrounding tissues'],
            ['value' => 'Foot ulcer formation'],
            ['value' => 'Chronic pain and swelling'],
            ['value' => 'Bone infection in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Proper nail care and trimming'],
            ['value' => 'Warm antiseptic soaks'],
            ['value' => 'Antibiotics for bacterial infection'],
            ['value' => 'Partial nail removal procedures'],
            ['value' => 'Diabetic foot care and monitoring'],
        ],
                'recovery' => 'Most cases heal well with early treatment and proper foot hygiene. Diabetic patients require regular foot examinations.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Ingrown Toenails / Paronychia',
                'meta_description' => 'Ingrown toenails occur when the edge of the nail grows into the surrounding skin, causing pain and inflammation. Paronychia is an infection around the nail fold',
                'meta_keywords' => '',
            ]
        );
    }
}
