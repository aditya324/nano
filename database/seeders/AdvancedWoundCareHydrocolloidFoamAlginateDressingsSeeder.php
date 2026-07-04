<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdvancedWoundCareHydrocolloidFoamAlginateDressingsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Advanced Wound Care (Hydrocolloid, Foam, Alginate Dressings)')],
            [
                'title' => 'Advanced Wound Care (Hydrocolloid, Foam, Alginate Dressings)',
                'slug' => Str::slug('Advanced Wound Care (Hydrocolloid, Foam, Alginate Dressings)'),
                'introduction' => 'Advanced wound care uses specialized dressings to promote healing in diabetic foot ulcers.',
                'what_is' => 'Modern wound dressings maintain a moist healing environment and help manage infection, drainage, and tissue repair.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Chronic diabetic ulcers'],
            ['value' => 'Post-debridement wounds'],
            ['value' => 'Infected wounds'],
            ['value' => 'Exudative ulcers'],
            ['value' => 'Surgical wound care'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include hydrocolloid dressings, foam dressings, alginate dressings, antimicrobial dressings, negative pressure wound therapy, and biologic wound care products.'],
            ['value' => 'Benefits'],
            ['value' => 'Faster wound healing'],
            ['value' => 'Better moisture balance'],
            ['value' => 'Reduced infection risk'],
            ['value' => 'Improved tissue repair'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Dressing-related skin irritation'],
            ['value' => 'Frequent dressing changes in severe wounds'],
            ['value' => 'Cost of advanced materials'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular wound assessment'],
            ['value' => 'Dressing replacement as advised'],
            ['value' => 'Blood sugar management'],
            ['value' => 'Pressure offloading'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Advanced wound care significantly improves healing outcomes and reduces complications in diabetic foot management.',
                'conclusion' => '',
                'seo_title' => 'Advanced Wound Care (Hydrocolloid, Foam, Alginate Dressings)',
                'seo_description' => 'Advanced wound care uses specialized dressings to promote healing in diabetic foot ulcers.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
