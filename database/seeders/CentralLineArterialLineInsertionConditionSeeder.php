<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CentralLineArterialLineInsertionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Central Line & Arterial Line Insertion')],
            [
                'name' => 'Central Line & Arterial Line Insertion',
                'slug' => Str::slug('Central Line & Arterial Line Insertion'),
                'h1' => 'Central Line & Arterial Line Insertion',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Central line and arterial line insertion are specialized invasive procedures performed in critically ill patients to provide advanced vascular access, continuous hemodynamic monitoring, medication administration, and blood sampling. Central venous lines allow delivery of medications, fluids, blood products, and nutritional support directly into large veins, while arterial lines provide continuous blood pressure monitoring and facilitate repeated arterial blood gas sampling in intensive care and emergency settings.',
                'about_more' => '',
                'overview' => 'Central line insertion involves placing a catheter into a major vein such as the internal jugular, subclavian, or femoral vein under sterile conditions, often guided by ultrasound imaging. Arterial line insertion involves placement of a catheter into an artery, commonly the radial or femoral artery, to continuously monitor blood pressure and assess oxygenation and acid-base balance. These procedures are commonly performed in intensive care units, operating rooms, emergency departments, trauma centers, and critical care settings for patients requiring close cardiovascular monitoring and advanced medical management.',
                'symptoms' => [
            ['value' => 'Severe shock or circulatory instability'],
            ['value' => 'Need for continuous blood pressure monitoring'],
            ['value' => 'Respiratory failure or critical illness requiring intensive care'],
            ['value' => 'Requirement for rapid medication, fluid, or blood administration'],
            ['value' => 'Severe infections, trauma, or organ dysfunction requiring advanced monitoring'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding, bruising, or vascular injury during catheter insertion'],
            ['value' => 'Infection or bloodstream-related complications'],
            ['value' => 'Air embolism or catheter malposition'],
            ['value' => 'Blood clot formation or arterial spasm'],
            ['value' => 'Lung complications such as pneumothorax during central line placement'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Central line and arterial line insertion procedures support advanced critical care management by enabling continuous monitoring and rapid therapeutic intervention. These lines may be used for administration of vasopressors, inotropes, intravenous fluids, blood products, antibiotics, parenteral nutrition, and emergency medications. Arterial lines assist in real-time blood pressure monitoring and repeated blood gas analysis to guide respiratory and hemodynamic management. Patients often require multidisciplinary critical care involving intensivists, anesthesiologists, surgeons, emergency physicians, and nursing teams to optimize treatment and improve patient outcomes.'],
            ['value' => 'Continuous monitoring of catheter position and vascular function'],
            ['value' => 'Regular sterile dressing changes and infection prevention measures'],
            ['value' => 'Monitoring for bleeding, clotting, or catheter-related complications'],
            ['value' => 'Routine flushing and maintenance of vascular access lines'],
            ['value' => 'Removal of lines when no longer medically required'],
        ],
                'recovery' => 'The long-term outlook following central line and arterial line insertion depends on the underlying critical illness, duration of catheter use, and effectiveness of intensive medical management. Proper sterile technique, careful monitoring, early complication detection, and multidisciplinary critical care support significantly help reduce complications, improve treatment effectiveness, support organ function, and enhance overall patient recovery outcomes. __________________________ 7. Emergency Dialysis / Renal Replacement Therapy (CRRT / HD) Emergency Dialysis / Renal Replacement Therapy (CRRT / HD) Procedures',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Central Line & Arterial Line Insertion',
                'meta_description' => 'Central line and arterial line insertion are specialized invasive procedures performed in critically ill patients to provide advanced vascular access, continuou',
                'meta_keywords' => '',
            ]
        );
    }
}
