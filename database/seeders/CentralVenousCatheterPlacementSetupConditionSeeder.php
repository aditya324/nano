<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CentralVenousCatheterPlacementSetupConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Central Venous Catheter Placement Setup')],
            [
                'name' => 'Central Venous Catheter Placement Setup',
                'slug' => Str::slug('Central Venous Catheter Placement Setup'),
                'h1' => 'Central Venous Catheter Placement Setup',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A Central Venous Catheter Placement Setup is a specialized procedural facility used for inserting dialysis catheters into large veins to provide temporary vascular access for dialysis.',
                'about_more' => 'This setup is commonly used in emergency kidney failure situations when urgent dialysis is required. Sterile technique and imaging guidance help improve patient safety during catheter insertion.',
                'overview' => 'The setup includes: Sterile catheter insertion kits Ultrasound guidance systems Central venous catheters Patient monitoring equipment Emergency resuscitation support Common insertion sites include: Internal jugular vein Femoral vein Subclavian vein The facility supports: Emergency dialysis access ICU dialysis support Temporary vascular access Acute kidney injury management Continuous patient monitoring helps detect complications early and improve procedural success.',
                'symptoms' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe electrolyte abnormalities'],
            ['value' => 'Emergency dialysis need'],
            ['value' => 'Fluid overload'],
            ['value' => 'Severe metabolic acidosis'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Pneumothorax'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Catheter blockage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Keep catheter dressing clean and dry'],
            ['value' => 'Avoid pulling or bending the catheter'],
            ['value' => 'Attend regular dressing changes'],
            ['value' => 'Monitor for fever or swelling'],
            ['value' => 'Follow dialysis team instructions carefully'],
        ],
                'recovery' => 'Safe catheter placement facilities improve emergency dialysis access and reduce treatment delays. Modern imaging-guided catheter placement improves procedural safety and patient outcomes.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Central Venous Catheter Placement Setup',
                'meta_description' => 'A Central Venous Catheter Placement Setup is a specialized procedural facility used for inserting dialysis catheters into large veins to provide temporary vascu',
                'meta_keywords' => '',
            ]
        );
    }
}
