<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FootDeformitiesClawToeHammerToeHalluxValgusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Foot Deformities (Claw Toe, Hammer Toe, Hallux Valgus)')],
            [
                'name' => 'Foot Deformities (Claw Toe, Hammer Toe, Hallux Valgus)',
                'slug' => Str::slug('Foot Deformities (Claw Toe, Hammer Toe, Hallux Valgus)'),
                'h1' => 'Foot Deformities (Claw Toe, Hammer Toe, Hallux Valgus)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Foot deformities in diabetic patients alter pressure distribution during walking, increasing the risk of ulcers and infections.',
                'about_more' => '',
                'overview' => 'Foot deformities in diabetic patients alter pressure distribution during walking, increasing the risk of ulcers and infections.',
                'symptoms' => [
            ['value' => 'Abnormal toe or foot shape'],
            ['value' => 'Pain while walking'],
            ['value' => 'Corns and calluses'],
            ['value' => 'Difficulty wearing shoes'],
            ['value' => 'Pressure-related ulcers'],
        ],
                'causes' => [
            ['value' => 'Diabetic neuropathy'],
            ['value' => 'Muscle imbalance and weakness'],
            ['value' => 'Arthritis and joint disease'],
            ['value' => 'Long-standing diabetes'],
            ['value' => 'Poor footwear support'],
        ],
                'risks' => [
            ['value' => 'Recurrent foot ulcers'],
            ['value' => 'Walking difficulty'],
            ['value' => 'Joint stiffness and pain'],
            ['value' => 'Skin breakdown and infection'],
            ['value' => 'Increased amputation risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Customized orthopedic footwear'],
            ['value' => 'Physiotherapy and exercises'],
            ['value' => 'Pressure offloading devices'],
            ['value' => 'Surgical correction when necessary'],
            ['value' => 'Regular diabetic foot monitoring'],
        ],
                'recovery' => 'Early correction and foot care improve mobility and reduce ulcer formation.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Foot Deformities (Claw Toe, Hammer Toe, Hallux Valgus)',
                'meta_description' => 'Foot deformities in diabetic patients alter pressure distribution during walking, increasing the risk of ulcers and infections.',
                'meta_keywords' => '',
            ]
        );
    }
}
