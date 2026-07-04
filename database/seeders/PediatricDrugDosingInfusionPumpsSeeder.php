<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricDrugDosingInfusionPumpsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Drug Dosing & Infusion Pumps')],
            [
                'title' => 'Pediatric Drug Dosing & Infusion Pumps',
                'slug' => Str::slug('Pediatric Drug Dosing & Infusion Pumps'),
                'introduction' => 'Pediatric drug dosing systems and infusion pumps are specialized devices used to deliver precise amounts of medications and fluids safely to infants and children.',
                'what_is' => 'Because children require carefully calculated medication doses based on age and body weight, pediatric infusion systems ensure accurate administration of antibiotics, fluids, nutrition, insulin, chemotherapy, and emergency medications. Smart infusion pumps reduce medication errors and improve safety in PICUs, NICUs, emergency units, and inpatient wards.',
                'symptoms' => [
            ['value' => 'Severe illness requiring intravenous medications'],
            ['value' => 'Dehydration needing controlled fluid administration'],
            ['value' => 'Critical conditions requiring continuous drug infusion'],
            ['value' => 'Premature infants requiring precise medication dosing'],
            ['value' => 'Long-term nutritional or antibiotic therapy needs'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Medication dosing errors without proper systems'],
            ['value' => 'Fluid overload or dehydration complications'],
            ['value' => 'Infection risk through intravenous lines'],
            ['value' => 'Device malfunction or infusion interruption'],
            ['value' => 'Drug reaction or overdose complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor infusion rates and medication schedules carefully'],
            ['value' => 'Regularly inspect IV lines and infusion sites'],
            ['value' => 'Maintain strict infection control practices'],
            ['value' => 'Calibrate and maintain equipment properly'],
            ['value' => 'Observe for side effects or allergic reactions'],
        ],
                'surgery_risks' => [
            ['value' => 'Medication dosing errors without proper systems'],
            ['value' => 'Fluid overload or dehydration complications'],
            ['value' => 'Infection risk through intravenous lines'],
            ['value' => 'Device malfunction or infusion interruption'],
            ['value' => 'Drug reaction or overdose complications'],
        ],
                'long_term_outlook' => 'Accurate pediatric dosing systems improve treatment safety, reduce medication-related complications, and support effective recovery in hospitalized children.',
                'conclusion' => '',
                'seo_title' => 'Pediatric Drug Dosing & Infusion Pumps',
                'seo_description' => 'Pediatric drug dosing systems and infusion pumps are specialized devices used to deliver precise amounts of medications and fluids safely to infants and children.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
