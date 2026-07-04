<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofEdemainRenalDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Edema in Renal Disease')],
            [
                'name' => 'Management of Edema in Renal Disease',
                'slug' => Str::slug('Management of Edema in Renal Disease'),
                'h1' => 'Management of Edema in Renal Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of edema in renal disease is a nephrology treatment program focused on reducing swelling caused by fluid retention in patients with kidney disorders.',
                'about_more' => 'Damaged kidneys may fail to remove excess fluid properly, leading to swelling in the legs, face, abdomen, or lungs. Proper fluid management improves breathing, comfort, mobility, and overall cardiovascular stability.',
                'overview' => 'Treatment includes: Fluid restriction Salt restriction Diuretic therapy Dialysis support when necessary Kidney disease treatment Weight monitoring Doctors carefully monitor: Fluid balance Body weight Blood pressure Kidney function Electrolyte levels Severe edema may require hospitalization or emergency dialysis in advanced kidney failure. Patient education regarding diet and fluid intake is essential for long-term control.',
                'symptoms' => [
            ['value' => 'Swelling of legs or face'],
            ['value' => 'Rapid weight gain'],
            ['value' => 'Breathing difficulty'],
            ['value' => 'Tightness of skin'],
            ['value' => 'Reduced urine output'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Pulmonary edema'],
            ['value' => 'Heart strain'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Skin breakdown'],
            ['value' => 'Severe fluid overload'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow fluid and salt restrictions carefully'],
            ['value' => 'Monitor daily body weight'],
            ['value' => 'Take prescribed diuretics regularly'],
            ['value' => 'Elevate legs when resting if advised'],
            ['value' => 'Attend routine nephrology monitoring'],
        ],
                'recovery' => 'Effective edema management improves comfort, breathing, and daily functioning in kidney disease patients. Long-term fluid control and kidney treatment help reduce complications and hospitalization risk.',
                'sort_order' => 47,
                'is_active' => true,
                'meta_title' => 'Management of Edema in Renal Disease',
                'meta_description' => 'Management of edema in renal disease is a nephrology treatment program focused on reducing swelling caused by fluid retention in patients with kidney disorders.',
                'meta_keywords' => '',
            ]
        );
    }
}
