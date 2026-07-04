<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NonInvasiveInvasiveVentilatorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Non-Invasive & Invasive Ventilators')],
            [
                'name' => 'Non-Invasive & Invasive Ventilators',
                'slug' => Str::slug('Non-Invasive & Invasive Ventilators'),
                'h1' => 'Non-Invasive & Invasive Ventilators',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Non-invasive and invasive ventilators are advanced respiratory support devices used to assist or completely support breathing in patients with respiratory distress, respiratory failure, or critical illness. These ventilators help deliver oxygen, remove carbon dioxide, and maintain stable breathing patterns in patients who are unable to breathe effectively on their own. They play a crucial role in intensive care, emergency medicine, anesthesia, trauma management, and postoperative respiratory support.',
                'about_more' => '',
                'overview' => 'Non-invasive ventilators provide respiratory support through external masks without the need for airway insertion and are commonly used in conditions such as COPD exacerbation, sleep apnea, pulmonary edema, and moderate respiratory distress. Invasive ventilators are connected to patients through endotracheal tubes or tracheostomy tubes and are used for severe respiratory failure, critical illness, trauma, neurological emergencies, and surgical support. These ventilator systems are equipped with advanced monitoring features, adjustable ventilation modes, alarm systems, oxygen delivery controls, and respiratory monitoring capabilities to support safe and effective patient care in critical care environments.',
                'symptoms' => [
            ['value' => 'Severe shortness of breath or respiratory distress'],
            ['value' => 'Low oxygen levels or difficulty maintaining adequate breathing'],
            ['value' => 'Respiratory failure or severe lung dysfunction'],
            ['value' => 'Altered consciousness or inability to protect the airway'],
            ['value' => 'Critical illness requiring intensive respiratory support and monitoring'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Ventilator-associated pneumonia or respiratory infections'],
            ['value' => 'Airway injury or lung damage from prolonged ventilation'],
            ['value' => 'Difficulty weaning from ventilator support'],
            ['value' => 'Low blood pressure or complications related to sedation in invasive ventilation'],
            ['value' => 'Mask discomfort, skin irritation, or air leakage in non-invasive ventilation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Non-invasive and invasive ventilators support respiratory stabilization, oxygen delivery, and critical care management in patients with breathing difficulties or respiratory failure. These systems assist healthcare professionals in managing conditions such as ARDS, COPD exacerbation, asthma attacks, pneumonia, trauma, neurological disorders, and postoperative respiratory complications. Treatment may include oxygen therapy, airway management, bronchodilator therapy, ventilator adjustments, sedation support, respiratory physiotherapy, suctioning, infection prevention, and continuous monitoring of respiratory and cardiovascular status. Multidisciplinary critical care support is essential to optimize respiratory recovery and reduce complications.'],
            ['value' => 'Continuous respiratory and cardiac monitoring during ventilator support'],
            ['value' => 'Regular airway care, suctioning, and infection prevention measures'],
            ['value' => 'Monitoring ventilator settings and oxygen delivery parameters'],
            ['value' => 'Gradual weaning from ventilator support when clinically stable'],
            ['value' => 'Pulmonary rehabilitation, breathing exercises, and long-term respiratory follow-up when required'],
        ],
                'recovery' => 'The long-term outlook associated with non-invasive and invasive ventilator support depends on the underlying respiratory condition, duration of ventilation, severity of illness, and overall patient health. Early respiratory intervention, effective ventilator management, rehabilitation support, physiotherapy, nutritional care, and regular pulmonary follow-up significantly help improve lung function, reduce complications, restore physical strength, and enhance overall quality of life. __________________ 77. Blood Gas Analyzer / ABG Machine Blood Gas Analyzer / ABG Machine Equipment',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Non-Invasive & Invasive Ventilators',
                'meta_description' => 'Non-invasive and invasive ventilators are advanced respiratory support devices used to assist or completely support breathing in patients with respiratory distr',
                'meta_keywords' => '',
            ]
        );
    }
}
