<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CriticalCareUltrasoundPointofCareImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Critical Care Ultrasound & Point-of-Care Imaging')],
            [
                'name' => 'Critical Care Ultrasound & Point-of-Care Imaging',
                'slug' => Str::slug('Critical Care Ultrasound & Point-of-Care Imaging'),
                'h1' => 'Critical Care Ultrasound & Point-of-Care Imaging',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Critical care ultrasound and point-of-care imaging are advanced bedside diagnostic procedures used to rapidly evaluate organ function, fluid status, blood flow, cardiac activity, lung conditions, and emergency medical complications in critically ill patients. These imaging techniques provide real-time assessment and immediate clinical guidance, helping healthcare professionals make rapid decisions during emergency and intensive care management.',
                'about_more' => '',
                'overview' => 'Point-of-care ultrasound (POCUS) involves the use of portable ultrasound devices at the patient’s bedside to assess the heart, lungs, abdomen, blood vessels, and other organs without transferring critically ill patients to imaging departments. Critical care ultrasound is commonly used for evaluating shock, respiratory failure, cardiac function, fluid accumulation, vascular access, trauma, and organ dysfunction. These procedures are widely performed in intensive care units, emergency departments, trauma centers, and operating rooms by intensivists, emergency physicians, anesthesiologists, and critical care specialists.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty or respiratory distress'],
            ['value' => 'Low blood pressure or circulatory instability'],
            ['value' => 'Chest pain, abdominal pain, or suspected internal bleeding'],
            ['value' => 'Shock, trauma, or altered organ function'],
            ['value' => 'Fluid overload, swelling, or signs of critical illness requiring urgent assessment'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Limited diagnostic detail compared to advanced radiological imaging in certain cases'],
            ['value' => 'Operator-dependent interpretation variability'],
            ['value' => 'Difficulty obtaining clear images in some critically ill patients'],
            ['value' => 'Delayed diagnosis if findings are inconclusive'],
            ['value' => 'Need for additional imaging or specialist evaluation when required'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Critical care ultrasound and point-of-care imaging procedures focus on rapid bedside diagnosis, monitoring organ function, guiding emergency procedures, and supporting critical care decision-making. These procedures may assist in fluid resuscitation assessment, cardiac function evaluation, detection of pleural or abdominal fluid, vascular access guidance, trauma assessment, and respiratory monitoring. Point-of-care imaging also supports procedures such as central line insertion, thoracentesis, paracentesis, pericardiocentesis, and airway management. Patients may additionally receive intensive monitoring, respiratory support, hemodynamic stabilization, and multidisciplinary critical care management based on imaging findings.'],
            ['value' => 'Continuous monitoring of clinical status and organ function'],
            ['value' => 'Follow-up imaging or diagnostic evaluation when required'],
            ['value' => 'Monitoring response to treatment and bedside interventions'],
            ['value' => 'Adjustment of critical care management based on imaging findings'],
            ['value' => 'Ongoing multidisciplinary critical care support and follow-up'],
        ],
                'recovery' => 'The long-term outlook following critical care ultrasound and point-of-care imaging depends on the underlying medical condition, speed of diagnosis, and effectiveness of treatment interventions. Early bedside assessment, rapid clinical decision-making, continuous monitoring, rehabilitation support, and multidisciplinary critical care management significantly help improve survival, reduce complications, optimize organ function, and enhance overall quality of life. ______________ 24. Multidisciplinary ICU Rounds & Care Protocols Multidisciplinary ICU Rounds & Care Protocols Procedures',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Critical Care Ultrasound & Point-of-Care Imaging',
                'meta_description' => 'Critical care ultrasound and point-of-care imaging are advanced bedside diagnostic procedures used to rapidly evaluate organ function, fluid status, blood flow,',
                'meta_keywords' => '',
            ]
        );
    }
}
