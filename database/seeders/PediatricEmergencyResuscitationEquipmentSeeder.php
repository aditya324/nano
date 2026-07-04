<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricEmergencyResuscitationEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Emergency Resuscitation Equipment')],
            [
                'title' => 'Pediatric Emergency Resuscitation Equipment',
                'slug' => Str::slug('Pediatric Emergency Resuscitation Equipment'),
                'introduction' => 'Pediatric emergency resuscitation equipment includes specialized medical devices and emergency support systems used to stabilize and revive infants and children during life-threatening medical emergencies.',
                'what_is' => 'Children require age-appropriate emergency equipment because their airway size, body weight, and physiological responses differ from adults. Pediatric resuscitation equipment commonly includes pediatric crash carts, defibrillators, Ambu bags, suction machines, oxygen delivery systems, airway devices, laryngoscopes, emergency medications, and monitoring systems. These facilities are essential in pediatric emergency departments, PICUs, NICUs, ambulances, and operation theaters.',
                'symptoms' => [
            ['value' => 'Sudden breathing difficulty or respiratory arrest'],
            ['value' => 'Cardiac arrest or severe shock'],
            ['value' => 'Severe allergic reactions or anaphylaxis'],
            ['value' => 'Trauma, drowning, or poisoning emergencies'],
            ['value' => 'Seizures, unconsciousness, or severe infections'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed emergency response without proper equipment'],
            ['value' => 'Oxygen deprivation causing brain injury'],
            ['value' => 'Cardiac complications during resuscitation'],
            ['value' => 'Infection risks during emergency procedures'],
            ['value' => 'Increased mortality in critical emergencies'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of vital signs after stabilization'],
            ['value' => 'Maintain oxygen support and airway care'],
            ['value' => 'Follow emergency medication and fluid management protocols'],
            ['value' => 'Provide intensive observation in PICU or emergency unit'],
            ['value' => 'Arrange rehabilitation and follow-up care if needed'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed emergency response without proper equipment'],
            ['value' => 'Oxygen deprivation causing brain injury'],
            ['value' => 'Cardiac complications during resuscitation'],
            ['value' => 'Infection risks during emergency procedures'],
            ['value' => 'Increased mortality in critical emergencies'],
        ],
                'long_term_outlook' => 'Availability of pediatric resuscitation equipment significantly improves survival rates, emergency response efficiency, and recovery outcomes in critically ill or injured children.',
                'conclusion' => '',
                'seo_title' => 'Pediatric Emergency Resuscitation Equipment',
                'seo_description' => 'Pediatric emergency resuscitation equipment includes specialized medical devices and emergency support systems used to stabilize and revive infants and children during life-threatening medical emergencies.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
