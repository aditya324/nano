<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfusionPumpsSyringePumpsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infusion Pumps / Syringe Pumps')],
            [
                'name' => 'Infusion Pumps / Syringe Pumps',
                'slug' => Str::slug('Infusion Pumps / Syringe Pumps'),
                'h1' => 'Infusion Pumps / Syringe Pumps',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infusion pumps and syringe pumps are advanced medical devices used to deliver precise amounts of fluids, medications, nutrients, blood products, and critical care drugs into a patient’s body in a controlled and accurate manner. These devices play a vital role in intensive care, emergency medicine, anesthesia, neonatal care, and long-term therapeutic management by ensuring safe and continuous medication administration.',
                'about_more' => '',
                'overview' => 'Infusion pumps are designed to deliver larger volumes of fluids or medications over a specified period, while syringe pumps are specialized devices used for highly accurate administration of smaller medication doses through syringes. These systems are commonly used for delivering vasopressors, inotropes, insulin, sedatives, analgesics, antibiotics, chemotherapy, parenteral nutrition, and other critical medications. Infusion and syringe pumps are widely utilized in intensive care units, operation theaters, emergency departments, neonatal ICUs, and postoperative recovery settings where precise medication control and continuous monitoring are essential.',
                'symptoms' => [
            ['value' => 'Critical illness requiring continuous medication infusion'],
            ['value' => 'Severe pain, shock, or circulatory instability'],
            ['value' => 'Need for precise drug dosing or fluid administration'],
            ['value' => 'Diabetes management requiring insulin infusion'],
            ['value' => 'Postoperative care or intensive monitoring requiring controlled medication delivery'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Medication dosing errors due to incorrect pump programming'],
            ['value' => 'Air embolism or infusion-related complications'],
            ['value' => 'Infection or inflammation at intravenous access sites'],
            ['value' => 'Mechanical malfunction or interruption of medication delivery'],
            ['value' => 'Fluid overload or inadequate drug administration in critically ill patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Infusion pumps and syringe pumps support advanced patient care by enabling controlled and accurate delivery of medications and fluids during emergency, critical care, surgical, and long-term treatment procedures. These systems assist healthcare professionals in managing sedation, pain control, cardiovascular support, insulin therapy, nutritional support, chemotherapy, antibiotic administration, and fluid resuscitation. They are commonly integrated with ICU monitoring systems, ventilators, dialysis machines, and other life-support equipment to improve treatment precision, patient safety, and overall healthcare outcomes.'],
            ['value' => 'Continuous monitoring of infusion rates and medication delivery'],
            ['value' => 'Regular inspection of intravenous access sites and tubing systems'],
            ['value' => 'Monitoring for medication side effects or infusion complications'],
            ['value' => 'Routine maintenance, calibration, and safety checks of pump systems'],
            ['value' => 'Adjustment of therapy based on patient response and clinical condition'],
        ],
                'recovery' => 'The long-term outlook associated with infusion pumps and syringe pumps is generally positive as these devices significantly improve medication accuracy, treatment safety, and critical care management. Advancements in smart infusion technology, digital monitoring systems, automated safety features, and integrated ICU support continue to enhance treatment efficiency, reduce medication errors, improve patient outcomes, and support high-quality healthcare delivery across medical specialties. _______________________ 76. Non-Invasive & Invasive Ventilators Non-Invasive & Invasive Ventilators Equipment',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Infusion Pumps / Syringe Pumps',
                'meta_description' => 'Infusion pumps and syringe pumps are advanced medical devices used to deliver precise amounts of fluids, medications, nutrients, blood products, and critical ca',
                'meta_keywords' => '',
            ]
        );
    }
}
