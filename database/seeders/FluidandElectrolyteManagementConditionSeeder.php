<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FluidandElectrolyteManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fluid and Electrolyte Management')],
            [
                'name' => 'Fluid and Electrolyte Management',
                'slug' => Str::slug('Fluid and Electrolyte Management'),
                'h1' => 'Fluid and Electrolyte Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fluid and electrolyte management is a nephrology treatment service focused on maintaining proper body fluid balance and correcting abnormalities in minerals such as sodium, potassium, calcium, and magnesium.',
                'about_more' => 'Kidney disorders often disrupt the body’s ability to regulate fluids and electrolytes, leading to serious medical complications if untreated. Proper balance is essential for healthy heart, nerve, muscle, and kidney function.',
                'overview' => 'The treatment process includes: Monitoring fluid intake and output Blood electrolyte testing IV fluid therapy Correction of sodium or potassium abnormalities Dialysis support when required Conditions commonly requiring electrolyte management include: Kidney failure Severe dehydration Heart failure Diabetic emergencies Critical illness Doctors carefully monitor heart rhythm, blood pressure, urine output, and neurological symptoms during treatment. Dietary adjustments may also be recommended to maintain safe electrolyte levels.',
                'symptoms' => [
            ['value' => 'Swelling or dehydration'],
            ['value' => 'Muscle weakness'],
            ['value' => 'Irregular heartbeat'],
            ['value' => 'Confusion or dizziness'],
            ['value' => 'Abnormal blood test results'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Cardiac arrhythmias'],
            ['value' => 'Seizures'],
            ['value' => 'Severe dehydration'],
            ['value' => 'Organ dysfunction'],
            ['value' => 'Life-threatening electrolyte imbalance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow fluid restrictions if advised'],
            ['value' => 'Attend regular blood testing'],
            ['value' => 'Maintain prescribed dietary changes'],
            ['value' => 'Monitor swelling or dehydration symptoms'],
            ['value' => 'Take medications exactly as directed'],
        ],
                'recovery' => 'Proper fluid and electrolyte management improves organ function and reduces complications in kidney disease patients. Regular monitoring and individualized treatment plans support safer long-term health outcomes.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Fluid and Electrolyte Management',
                'meta_description' => 'Fluid and electrolyte management is a nephrology treatment service focused on maintaining proper body fluid balance and correcting abnormalities in minerals suc',
                'meta_keywords' => '',
            ]
        );
    }
}
