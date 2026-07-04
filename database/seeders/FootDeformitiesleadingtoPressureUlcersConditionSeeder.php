<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FootDeformitiesleadingtoPressureUlcersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Foot Deformities leading to Pressure Ulcers')],
            [
                'name' => 'Foot Deformities leading to Pressure Ulcers',
                'slug' => Str::slug('Foot Deformities leading to Pressure Ulcers'),
                'h1' => 'Foot Deformities leading to Pressure Ulcers',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic foot deformities alter pressure distribution during walking, increasing friction and leading to pressure ulcers and chronic wounds.',
                'about_more' => '',
                'overview' => 'Diabetic foot deformities alter pressure distribution during walking, increasing friction and leading to pressure ulcers and chronic wounds.',
                'symptoms' => [
            ['value' => 'Abnormal foot or toe shape'],
            ['value' => 'Pressure sores and ulcers'],
            ['value' => 'Corns and calluses'],
            ['value' => 'Pain while walking'],
            ['value' => 'Difficulty fitting footwear properly'],
        ],
                'causes' => [
            ['value' => 'Diabetic neuropathy'],
            ['value' => 'Muscle imbalance and weakness'],
            ['value' => 'Previous foot injuries'],
            ['value' => 'Arthritis and joint disease'],
            ['value' => 'Long-standing diabetes mellitus'],
        ],
                'risks' => [
            ['value' => 'Chronic ulcer formation'],
            ['value' => 'Recurrent infections'],
            ['value' => 'Walking disability'],
            ['value' => 'Osteomyelitis and gangrene'],
            ['value' => 'Increased amputation risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Customized orthopedic footwear'],
            ['value' => 'Pressure redistribution devices'],
            ['value' => 'Physiotherapy and exercises'],
            ['value' => 'Corrective foot surgery in selected cases'],
            ['value' => 'Regular diabetic foot monitoring'],
        ],
                'recovery' => 'Early management of deformities helps prevent ulcers and improves mobility.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Foot Deformities leading to Pressure Ulcers',
                'meta_description' => 'Diabetic foot deformities alter pressure distribution during walking, increasing friction and leading to pressure ulcers and chronic wounds.',
                'meta_keywords' => '',
            ]
        );
    }
}
