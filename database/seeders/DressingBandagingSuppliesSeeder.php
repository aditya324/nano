<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DressingBandagingSuppliesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Dressing & Bandaging Supplies')],
            [
                'title' => 'Dressing & Bandaging Supplies',
                'slug' => Str::slug('Dressing & Bandaging Supplies'),
                'introduction' => 'Dressing and bandaging supplies are essential materials used for diabetic wound protection and healing.',
                'what_is' => 'Proper wound dressing helps maintain a clean, moist environment that supports tissue repair and prevents infection.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Post-debridement wound care'],
            ['value' => 'Surgical wound management'],
            ['value' => 'Infection prevention'],
            ['value' => 'Pressure sore management'],
            ['value' => 'Treatments'],
            ['value' => 'Supplies may include gauze, foam dressings, hydrocolloid dressings, alginate dressings, antimicrobial dressings, and compression bandages.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved wound healing'],
            ['value' => 'Infection prevention'],
            ['value' => 'Better moisture control'],
            ['value' => 'Protection from further injury'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Skin irritation'],
            ['value' => 'Frequent dressing changes required'],
            ['value' => 'Allergy to dressing materials in some patients'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular wound inspection'],
            ['value' => 'Keep dressings clean and dry'],
            ['value' => 'Replace dressings as advised'],
            ['value' => 'Follow wound care instructions carefully'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Consistent wound care and proper dressings improve diabetic ulcer healing and reduce complications.',
                'conclusion' => '',
                'seo_title' => 'Dressing & Bandaging Supplies',
                'seo_description' => 'Dressing and bandaging supplies are essential materials used for diabetic wound protection and healing.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
