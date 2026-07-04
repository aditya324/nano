<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OxygenTherapyNasalCannulaMaskHighFlowNasalOxygenConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Oxygen Therapy (Nasal Cannula, Mask, High-Flow Nasal Oxygen)')],
            [
                'name' => 'Oxygen Therapy (Nasal Cannula, Mask, High-Flow Nasal Oxygen)',
                'slug' => Str::slug('Oxygen Therapy (Nasal Cannula, Mask, High-Flow Nasal Oxygen)'),
                'h1' => 'Oxygen Therapy (Nasal Cannula, Mask, High-Flow Nasal Oxygen)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Oxygen therapy is a respiratory support procedure used to increase oxygen levels in patients experiencing breathing difficulties, low blood oxygen saturation, or respiratory distress. Oxygen may be delivered through different devices such as nasal cannula, oxygen masks, or high-flow nasal oxygen systems depending on the severity of the patient’s condition and oxygen requirements. Oxygen therapy is widely used in emergency medicine, intensive care, pulmonology, postoperative care, and chronic respiratory disease management.',
                'about_more' => '',
                'overview' => 'Oxygen therapy helps improve oxygen delivery to body tissues, reduce breathing effort, and support organ function in patients with respiratory or cardiovascular conditions. A nasal cannula delivers low to moderate oxygen flow through soft tubes placed in the nostrils, while oxygen masks provide higher oxygen concentrations through a face mask. High-flow nasal oxygen systems deliver warm, humidified oxygen at high flow rates, offering advanced respiratory support for patients with moderate to severe respiratory distress. These therapies are commonly used in hospitals, ICUs, emergency departments, ambulances, and home-care settings.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Low oxygen saturation or hypoxemia'],
            ['value' => 'Rapid breathing or respiratory distress'],
            ['value' => 'Chest tightness, fatigue, or confusion due to low oxygen levels'],
            ['value' => 'Respiratory illnesses affecting normal oxygen exchange'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Dryness or irritation of the nose and airways'],
            ['value' => 'Skin irritation or pressure sores from oxygen devices'],
            ['value' => 'Oxygen toxicity with prolonged high oxygen exposure'],
            ['value' => 'Carbon dioxide retention in selected chronic lung disease patients'],
            ['value' => 'Delayed recognition of worsening respiratory failure if inadequately monitored'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oxygen therapy focuses on improving oxygen levels, reducing respiratory distress, supporting lung function, and stabilizing critically ill patients. Treatment may include low-flow oxygen through nasal cannula, oxygen mask support, high-flow nasal oxygen therapy, humidification systems, respiratory monitoring, bronchodilator therapy, ventilator support, and pulmonary rehabilitation. Patients may also require treatment for underlying conditions such as pneumonia, COPD, asthma, heart failure, ARDS, pulmonary edema, or respiratory infections. Proper oxygen titration and continuous monitoring are essential to optimize respiratory care and prevent complications.'],
            ['value' => 'Continuous monitoring of oxygen saturation and respiratory status'],
            ['value' => 'Adjustment of oxygen flow based on clinical condition and oxygen levels'],
            ['value' => 'Monitoring for airway dryness, discomfort, or device-related irritation'],
            ['value' => 'Gradual reduction of oxygen support when respiratory function improves'],
            ['value' => 'Long-term pulmonary follow-up and respiratory rehabilitation when required'],
        ],
                'recovery' => 'The long-term outlook following oxygen therapy depends on the underlying respiratory or cardiovascular condition, severity of oxygen deficiency, response to treatment, and overall patient health. Early respiratory support, medication adherence, pulmonary rehabilitation, smoking cessation, healthy lifestyle habits, and regular medical follow-up significantly help improve breathing function, reduce complications, enhance oxygen delivery, and improve overall quality of life. __________________',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Oxygen Therapy (Nasal Cannula, Mask, High-Flow Nasal Oxygen)',
                'meta_description' => 'Oxygen therapy is a respiratory support procedure used to increase oxygen levels in patients experiencing breathing difficulties, low blood oxygen saturation, o',
                'meta_keywords' => '',
            ]
        );
    }
}
