<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticFootwithEdemaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Foot with Edema')],
            [
                'name' => 'Diabetic Foot with Edema',
                'slug' => Str::slug('Diabetic Foot with Edema'),
                'h1' => 'Diabetic Foot with Edema',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Edema in the diabetic foot refers to abnormal swelling caused by poor circulation, infection, inflammation, or kidney and heart-related complications.',
                'about_more' => '',
                'overview' => 'Edema in the diabetic foot refers to abnormal swelling caused by poor circulation, infection, inflammation, or kidney and heart-related complications.',
                'symptoms' => [
            ['value' => 'Swollen feet and ankles'],
            ['value' => 'Tight or shiny skin'],
            ['value' => 'Pain or heaviness in the foot'],
            ['value' => 'Reduced mobility and walking discomfort'],
            ['value' => 'Associated ulcers or skin breakdown'],
        ],
                'causes' => [
            ['value' => 'Poor venous circulation'],
            ['value' => 'Diabetic kidney disease'],
            ['value' => 'Heart failure or vascular disease'],
            ['value' => 'Infection or inflammation'],
            ['value' => 'Prolonged standing and obesity'],
        ],
                'risks' => [
            ['value' => 'Delayed wound healing'],
            ['value' => 'Skin breakdown and ulcers'],
            ['value' => 'Increased infection risk'],
            ['value' => 'Reduced blood circulation'],
            ['value' => 'Mobility problems and pain'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Elevation and compression therapy'],
            ['value' => 'Treatment of underlying medical causes'],
            ['value' => 'Diuretic medications when indicated'],
            ['value' => 'Foot care and wound management'],
            ['value' => 'Vascular assessment and monitoring'],
        ],
                'recovery' => 'Managing the underlying cause of swelling improves comfort, mobility, and wound healing.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Diabetic Foot with Edema',
                'meta_description' => 'Edema in the diabetic foot refers to abnormal swelling caused by poor circulation, infection, inflammation, or kidney and heart-related complications.',
                'meta_keywords' => '',
            ]
        );
    }
}
