<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TracheostomySetEmergencyAirwayEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tracheostomy Set & Emergency Airway Equipment')],
            [
                'title' => 'Tracheostomy Set & Emergency Airway Equipment',
                'slug' => Str::slug('Tracheostomy Set & Emergency Airway Equipment'),
                'introduction' => 'A tracheostomy set and emergency airway equipment are specialized tools used to establish and maintain a safe airway in patients with severe breathing difficulty or airway obstruction. These life-saving systems are essential in emergency ENT, ICU, and surgical settings. They support rapid airway management during critical situations.',
                'what_is' => 'The setup may include: Tracheostomy tubes Airway dilators Suction systems Oxygen support devices Emergency intubation equipment Airway monitoring tools The equipment is used for: Airway obstruction Severe trauma Prolonged ventilation Head and neck cancers Emergency respiratory compromise Prompt airway management is critical for patient survival and oxygen delivery.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty'],
            ['value' => 'Airway obstruction'],
            ['value' => 'Noisy breathing (stridor)'],
            ['value' => 'Respiratory distress'],
            ['value' => 'Inability to maintain oxygen levels'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Tube blockage'],
            ['value' => 'Accidental tube displacement'],
            ['value' => 'Airway injury'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain tracheostomy tube cleanliness carefully'],
            ['value' => 'Perform regular suctioning when advised'],
            ['value' => 'Attend airway follow-up appointments'],
            ['value' => 'Monitor for breathing difficulty or infection'],
            ['value' => 'Ensure proper humidification and hydration'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Tube blockage'],
            ['value' => 'Accidental tube displacement'],
            ['value' => 'Airway injury'],
        ],
                'long_term_outlook' => 'Advanced airway equipment improves survival and respiratory support in critical airway conditions. Proper long-term care enhances patient safety and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Tracheostomy Set & Emergency Airway Equipment',
                'seo_description' => 'A tracheostomy set and emergency airway equipment are specialized tools used to establish and maintain a safe airway in patients with severe breathing difficulty or airway obstruction. These life-saving systems are essential in emergency ENT, ICU, and surgical settings. They support rapid airway management during critical situations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
