<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TemporaryDialysisCatheterPlacementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Temporary Dialysis Catheter Placement')],
            [
                'name' => 'Temporary Dialysis Catheter Placement',
                'slug' => Str::slug('Temporary Dialysis Catheter Placement'),
                'h1' => 'Temporary Dialysis Catheter Placement',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Temporary dialysis catheter placement is an emergency nephrology procedure used to establish short-term vascular access for urgent hemodialysis treatment.',
                'about_more' => 'This temporary access is commonly required in acute kidney injury, severe electrolyte imbalance, poisoning, or sudden worsening of chronic kidney disease. The procedure allows immediate dialysis support until kidney function recovers or permanent access is created.',
                'overview' => 'A temporary catheter is inserted into a large vein under sterile conditions using ultrasound or imaging guidance. The catheter supports: Emergency blood filtration Fluid removal Electrolyte correction Toxin clearance Temporary catheters are generally used for short durations because prolonged use increases infection and clotting risks. Patients are closely monitored for catheter function, blood flow adequacy, and insertion-site complications.',
                'symptoms' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe hyperkalemia'],
            ['value' => 'Pulmonary edema'],
            ['value' => 'Severe metabolic acidosis'],
            ['value' => 'Emergency dialysis requirement'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Catheter-related infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Poor blood flow'],
            ['value' => 'Vein damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain catheter hygiene strictly'],
            ['value' => 'Avoid wetting the catheter dressing'],
            ['value' => 'Watch for swelling or discharge'],
            ['value' => 'Attend scheduled dialysis sessions'],
            ['value' => 'Report fever or breathing difficulty immediately'],
        ],
                'recovery' => 'Temporary dialysis catheter placement provides rapid access for life-saving dialysis treatment. Careful monitoring and conversion to permanent access when appropriate help reduce long-term complications.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Temporary Dialysis Catheter Placement',
                'meta_description' => 'Temporary dialysis catheter placement is an emergency nephrology procedure used to establish short-term vascular access for urgent hemodialysis treatment.',
                'meta_keywords' => '',
            ]
        );
    }
}
