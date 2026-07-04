<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyAirwayIntubationEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Emergency Airway & Intubation Equipment')],
            [
                'name' => 'Emergency Airway & Intubation Equipment',
                'slug' => Str::slug('Emergency Airway & Intubation Equipment'),
                'h1' => 'Emergency Airway & Intubation Equipment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Emergency airway and intubation equipment consists of specialized medical devices and instruments used to establish, maintain, and protect the airway in patients experiencing respiratory failure, airway obstruction, trauma, cardiac arrest, or critical illness. These equipment systems are essential for ensuring adequate oxygen delivery and ventilation during medical emergencies and intensive care management.',
                'about_more' => '',
                'overview' => 'Emergency airway equipment includes laryngoscopes, endotracheal tubes, video laryngoscopes, bag-valve masks, suction devices, airway adjuncts, oxygen delivery systems, and tracheostomy supplies used to support airway access and breathing. Intubation equipment is specifically designed to assist healthcare professionals in placing breathing tubes into the trachea to secure the airway and connect patients to ventilators or respiratory support systems. These devices are commonly used in emergency departments, ambulances, intensive care units, operation theaters, trauma centers, and critical care settings for rapid airway stabilization and life-support management.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty or respiratory distress'],
            ['value' => 'Airway obstruction or inability to maintain normal breathing'],
            ['value' => 'Low oxygen levels or respiratory failure'],
            ['value' => 'Reduced consciousness or inability to protect the airway'],
            ['value' => 'Trauma, cardiac arrest, or critical illness requiring emergency airway support'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Airway trauma or injury during intubation procedures'],
            ['value' => 'Bleeding, swelling, or vocal cord damage'],
            ['value' => 'Incorrect tube placement or airway obstruction complications'],
            ['value' => 'Infection risk associated with prolonged airway management'],
            ['value' => 'Respiratory complications or oxygen deprivation if airway support is delayed'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency airway and intubation equipment support rapid airway stabilization, oxygen delivery, and respiratory management in critically ill patients. These systems assist healthcare professionals in performing airway clearance, oxygen therapy, bag-mask ventilation, endotracheal intubation, mechanical ventilation, suctioning, and emergency respiratory resuscitation. Airway equipment is commonly integrated with ventilators, anesthesia systems, multipara monitors, suction units, and critical care devices to optimize respiratory support, patient safety, and emergency care outcomes.'],
            ['value' => 'Continuous monitoring of airway position and respiratory function'],
            ['value' => 'Regular suctioning, airway care, and infection prevention measures'],
            ['value' => 'Monitoring for airway trauma or ventilator-related complications'],
            ['value' => 'Gradual weaning from respiratory support when clinically stable'],
            ['value' => 'Long-term respiratory follow-up and rehabilitation when required'],
        ],
                'recovery' => 'The long-term outlook associated with emergency airway and intubation equipment use depends on the underlying medical condition, duration of airway support, severity of respiratory compromise, and overall patient health. Early airway intervention, effective respiratory management, rehabilitation support, physiotherapy, and regular medical follow-up significantly help improve breathing function, reduce complications, restore organ stability, and enhance overall quality of life.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Emergency Airway & Intubation Equipment',
                'meta_description' => 'Emergency airway and intubation equipment consists of specialized medical devices and instruments used to establish, maintain, and protect the airway in patient',
                'meta_keywords' => '',
            ]
        );
    }
}
