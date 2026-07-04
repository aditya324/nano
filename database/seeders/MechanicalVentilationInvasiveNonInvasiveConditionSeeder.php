<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MechanicalVentilationInvasiveNonInvasiveConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mechanical Ventilation (Invasive / Non-Invasive)')],
            [
                'name' => 'Mechanical Ventilation (Invasive / Non-Invasive)',
                'slug' => Str::slug('Mechanical Ventilation (Invasive / Non-Invasive)'),
                'h1' => 'Mechanical Ventilation (Invasive / Non-Invasive)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mechanical ventilation is an advanced respiratory support procedure used to assist or completely support breathing in patients who are unable to breathe adequately on their own. Ventilation may be provided through invasive methods using an endotracheal tube or tracheostomy, or through non-invasive methods using specialized masks and positive airway pressure systems. Mechanical ventilation plays a critical role in emergency medicine, intensive care, anesthesia, trauma management, and respiratory failure treatment.',
                'about_more' => '',
                'overview' => 'Mechanical ventilation helps deliver oxygen to the lungs, remove carbon dioxide, and maintain stable respiratory function in critically ill patients. Invasive mechanical ventilation involves placement of a breathing tube into the airway connected to a ventilator machine, while non-invasive ventilation uses external masks to support breathing without airway insertion. These procedures are commonly used in intensive care units, emergency departments, operating rooms, and critical care settings for patients with respiratory distress, lung disease, neurological emergencies, trauma, or post-surgical respiratory complications.',
                'symptoms' => [
            ['value' => 'Severe shortness of breath or respiratory distress'],
            ['value' => 'Low oxygen levels or difficulty maintaining adequate breathing'],
            ['value' => 'Rapid breathing, fatigue, or use of accessory breathing muscles'],
            ['value' => 'Altered consciousness or inability to protect the airway'],
            ['value' => 'Respiratory failure, cardiac instability, or severe lung dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Lung injury or airway trauma from prolonged ventilation'],
            ['value' => 'Ventilator-associated pneumonia or respiratory infections'],
            ['value' => 'Difficulty weaning from ventilator support in prolonged critical illness'],
            ['value' => 'Low blood pressure or complications related to sedation'],
            ['value' => 'Airway irritation, discomfort, or vocal cord injury in invasive ventilation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Mechanical ventilation procedures focus on improving oxygen delivery, supporting breathing, stabilizing respiratory function, and treating the underlying medical condition. Management may include oxygen therapy, ventilator support, airway management, bronchodilator therapy, sedation, intensive respiratory monitoring, infection control, fluid management, and pulmonary rehabilitation. Patients may also require treatment for underlying conditions such as pneumonia, ARDS, COPD exacerbation, trauma, neurological disorders, or cardiac emergencies. Multidisciplinary critical care management is essential to optimize respiratory recovery and overall patient outcomes.'],
            ['value' => 'Continuous respiratory and cardiac monitoring during recovery'],
            ['value' => 'Gradual weaning from ventilator support when clinically stable'],
            ['value' => 'Airway care, suctioning, and infection prevention measures'],
            ['value' => 'Physiotherapy, breathing exercises, and pulmonary rehabilitation'],
            ['value' => 'Long-term respiratory follow-up and supportive care when required'],
        ],
                'recovery' => 'The long-term outlook following mechanical ventilation depends on the underlying illness, duration of respiratory support, severity of lung injury, and overall patient health. Early intervention, effective critical care management, pulmonary rehabilitation, nutritional support, medication adherence, and regular respiratory follow-up significantly help improve breathing function, reduce complications, restore physical strength, and enhance overall quality of life. ________________ 4. Pulmonary Rehabilitation Programs Procedures',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Mechanical Ventilation (Invasive / Non-Invasive)',
                'meta_description' => 'Mechanical ventilation is an advanced respiratory support procedure used to assist or completely support breathing in patients who are unable to breathe adequat',
                'meta_keywords' => '',
            ]
        );
    }
}
