<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisCatheterInsertionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dialysis Catheter Insertion')],
            [
                'name' => 'Dialysis Catheter Insertion',
                'slug' => Str::slug('Dialysis Catheter Insertion'),
                'h1' => 'Dialysis Catheter Insertion',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dialysis catheter insertion is a medical procedure performed to provide immediate vascular access for hemodialysis in patients with severe kidney failure or urgent dialysis needs.',
                'about_more' => 'A dialysis catheter is a flexible tube inserted into a large vein, usually in the neck, chest, or groin, allowing blood to flow to and from the dialysis machine safely. This procedure is commonly performed when emergency dialysis is required or when permanent dialysis access is not yet available.',
                'overview' => 'The procedure is usually performed under sterile conditions using local anesthesia and imaging guidance. Common insertion sites include: Internal jugular vein Femoral vein Subclavian vein The catheter allows: Rapid initiation of dialysis Blood purification Fluid removal Emergency renal support Doctors monitor the catheter position, blood flow, and signs of complications after insertion. The catheter may be temporary or used until permanent dialysis access becomes functional.',
                'symptoms' => [
            ['value' => 'Severe kidney failure'],
            ['value' => 'Fluid overload'],
            ['value' => 'Dangerous electrolyte imbalance'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Urgent need for dialysis'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Infection at insertion site'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Catheter blockage'],
            ['value' => 'Vein injury or pneumothorax'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Keep the catheter area clean and dry'],
            ['value' => 'Avoid pulling or bending the catheter'],
            ['value' => 'Monitor for fever or redness'],
            ['value' => 'Attend regular catheter dressing changes'],
            ['value' => 'Follow dialysis team instructions carefully'],
        ],
                'recovery' => 'Dialysis catheter insertion provides life-saving vascular access for urgent renal replacement therapy. Proper catheter care and timely transition to permanent access improve long-term dialysis outcomes and reduce complications.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Dialysis Catheter Insertion',
                'meta_description' => 'Dialysis catheter insertion is a medical procedure performed to provide immediate vascular access for hemodialysis in patients with severe kidney failure or urg',
                'meta_keywords' => '',
            ]
        );
    }
}
