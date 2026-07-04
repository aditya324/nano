<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArterialLineCentralLineKitsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Arterial Line / Central Line Kits')],
            [
                'name' => 'Arterial Line / Central Line Kits',
                'slug' => Str::slug('Arterial Line / Central Line Kits'),
                'h1' => 'Arterial Line / Central Line Kits',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Arterial line and central line kits are specialized sterile medical equipment sets used for advanced vascular access, continuous hemodynamic monitoring, blood sampling, medication administration, and critical care management in severely ill patients. These kits contain essential instruments and accessories required for safe and efficient insertion of arterial catheters and central venous catheters in emergency, intensive care, and surgical settings.',
                'about_more' => '',
                'overview' => 'Central line kits are used for placing catheters into large veins such as the internal jugular, subclavian, or femoral vein to administer medications, intravenous fluids, blood products, nutrition, and vasopressor therapy. Arterial line kits are used to insert catheters into arteries, commonly the radial or femoral artery, for continuous blood pressure monitoring and repeated arterial blood gas analysis. These kits typically include sterile drapes, guidewires, needles, catheters, syringes, dilators, dressings, and antiseptic preparation materials. They are widely used in intensive care units, emergency departments, operation theaters, trauma centers, and cardiac care settings.',
                'symptoms' => [
            ['value' => 'Severe shock or hemodynamic instability'],
            ['value' => 'Need for continuous blood pressure monitoring'],
            ['value' => 'Respiratory failure or critical illness requiring intensive care'],
            ['value' => 'Requirement for rapid medication or fluid administration'],
            ['value' => 'Major surgery, trauma, or organ dysfunction requiring advanced vascular access'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding, bruising, or vascular injury during catheter insertion'],
            ['value' => 'Infection or catheter-related bloodstream complications'],
            ['value' => 'Air embolism or catheter malposition'],
            ['value' => 'Blood clot formation or arterial spasm'],
            ['value' => 'Lung complications such as pneumothorax during central line placement'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Arterial line and central line kits support advanced critical care procedures by enabling safe vascular access, continuous hemodynamic monitoring, and rapid therapeutic intervention. These systems assist healthcare professionals in administering vasopressors, intravenous fluids, blood transfusions, parenteral nutrition, antibiotics, and emergency medications while monitoring blood pressure and blood gas levels in real time. They are commonly used alongside ventilators, infusion pumps, dialysis systems, cardiac monitors, and other ICU equipment to support comprehensive patient care and improve treatment outcomes.'],
            ['value' => 'Continuous monitoring of catheter function and vascular access sites'],
            ['value' => 'Regular sterile dressing changes and infection prevention measures'],
            ['value' => 'Monitoring for bleeding, clotting, or catheter-related complications'],
            ['value' => 'Routine flushing and maintenance of catheter patency'],
            ['value' => 'Timely removal of catheters when no longer medically necessary'],
        ],
                'recovery' => 'The long-term outlook associated with arterial line and central line use depends on the underlying medical condition, duration of catheter placement, and effectiveness of critical care management. Proper sterile technique, careful monitoring, timely complication management, and multidisciplinary critical care support significantly help reduce infection risk, improve patient safety, optimize treatment delivery, and enhance overall recovery outcomes. ______________________ 75. Infusion Pumps / Syringe Pumps Infusion Pumps / Syringe Pumps Equipment',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Arterial Line / Central Line Kits',
                'meta_description' => 'Arterial line and central line kits are specialized sterile medical equipment sets used for advanced vascular access, continuous hemodynamic monitoring, blood s',
                'meta_keywords' => '',
            ]
        );
    }
}
