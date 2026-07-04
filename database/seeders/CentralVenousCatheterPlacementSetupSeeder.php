<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CentralVenousCatheterPlacementSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Central Venous Catheter Placement Setup')],
            [
                'title' => 'Central Venous Catheter Placement Setup',
                'slug' => Str::slug('Central Venous Catheter Placement Setup'),
                'introduction' => 'A Central Venous Catheter Placement Setup is a specialized procedural facility used for inserting dialysis catheters into large veins to provide temporary vascular access for dialysis. This setup is commonly used in emergency kidney failure situations when urgent dialysis is required. Sterile technique and imaging guidance help improve patient safety during catheter insertion.',
                'what_is' => 'The setup includes: Sterile catheter insertion kits Ultrasound guidance systems Central venous catheters Patient monitoring equipment Emergency resuscitation support Common insertion sites include: Internal jugular vein Femoral vein Subclavian vein The facility supports: Emergency dialysis access ICU dialysis support Temporary vascular access Acute kidney injury management Continuous patient monitoring helps detect complications early and improve procedural success.',
                'symptoms' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe electrolyte abnormalities'],
            ['value' => 'Emergency dialysis need'],
            ['value' => 'Fluid overload'],
            ['value' => 'Severe metabolic acidosis'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Pneumothorax'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Catheter blockage'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep catheter dressing clean and dry'],
            ['value' => 'Avoid pulling or bending the catheter'],
            ['value' => 'Attend regular dressing changes'],
            ['value' => 'Monitor for fever or swelling'],
            ['value' => 'Follow dialysis team instructions carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Pneumothorax'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Catheter blockage'],
        ],
                'long_term_outlook' => 'Safe catheter placement facilities improve emergency dialysis access and reduce treatment delays. Modern imaging-guided catheter placement improves procedural safety and patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Central Venous Catheter Placement Setup',
                'seo_description' => 'A Central Venous Catheter Placement Setup is a specialized procedural facility used for inserting dialysis catheters into large veins to provide temporary vascular access for dialysis. This setup is commonly used in emergency kidney failure situations when urgent dialysis is required. Sterile technique and imaging guidance help improve patient safety during catheter insertion.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
