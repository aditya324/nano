<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OxygenTherapyDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Oxygen Therapy Devices')],
            [
                'title' => 'Oxygen Therapy Devices',
                'slug' => Str::slug('Oxygen Therapy Devices'),
                'introduction' => 'Oxygen therapy devices are specialized medical equipment used to deliver supplemental oxygen to patients who have difficulty maintaining adequate oxygen levels in their blood. These devices help improve breathing, support lung function, maintain proper oxygen delivery to vital organs and tissues, and reduce complications related to respiratory and cardiac conditions. Oxygen therapy plays a critical role in both emergency care and long-term respiratory support. Oxygen therapy devices are specialized medical equipment used to deliver supplemental oxygen to patients who have difficulty maintaining adequate oxygen levels in their blood. These devices help improve breathing, support lung function, maintain proper oxygen delivery to vital organs and tissues, and reduce complications related to respiratory and cardiac conditions. Oxygen therapy plays a critical role in both emergency care and long-term respiratory support.',
                'what_is' => 'Oxygen therapy is commonly used in patients with respiratory disorders such as Chronic Obstructive Pulmonary Disease (COPD), asthma, pneumonia, pulmonary fibrosis, sleep-related breathing disorders, heart failure, and critical illnesses. Common oxygen delivery systems include oxygen concentrators, oxygen cylinders, nasal cannulas, simple face masks, non-rebreather masks, Venturi masks, and high-flow oxygen therapy devices. Oxygen therapy may be provided in hospitals, intensive care units (ICUs), emergency departments, ambulances, rehabilitation centers, and home healthcare settings depending on the patient’s medical condition and oxygen requirements. Continuous monitoring ensures safe oxygen delivery and effective respiratory support. Oxygen therapy is commonly used in patients with respiratory disorders such as Chronic Obstructive Pulmonary Disease (COPD), asthma, pneumonia, pulmonary fibrosis, sleep-related breathing disorders, heart failure, and critical illnesses. Common oxygen delivery systems include oxygen concentrators, oxygen cylinders, nasal cannulas, simple face masks, non-rebreather masks, Venturi masks, and high-flow oxygen therapy devices. Oxygen therapy may be provided in hospitals, intensive care units (ICUs), emergency departments, ambulances, rehabilitation centers, and home healthcare settings depending on the patient’s medical condition and oxygen requirements. Continuous monitoring ensures safe oxygen delivery and effective respiratory support.',
                'symptoms' => [
            ['value' => 'Shortness of breath or breathing difficulty'],
            ['value' => 'Low oxygen saturation levels'],
            ['value' => 'Fatigue and reduced physical stamina'],
            ['value' => 'Bluish discoloration of lips or fingertips (cyanosis)'],
            ['value' => 'Respiratory distress or chronic lung disease symptoms'],
            ['value' => 'Shortness of breath or breathing difficulty'],
            ['value' => 'Low oxygen saturation levels'],
            ['value' => 'Fatigue and reduced physical stamina'],
            ['value' => 'Bluish discoloration of lips or fingertips (cyanosis)'],
            ['value' => 'Respiratory distress or chronic lung disease symptoms'],
        ],
                'causes' => [
            ['value' => 'Chronic lung diseases such as COPD or asthma'],
            ['value' => 'Pneumonia or severe respiratory infections'],
            ['value' => 'Heart failure or cardiovascular conditions affecting oxygen circulation'],
            ['value' => 'Low oxygen saturation due to critical illness or trauma'],
            ['value' => 'Sleep-related breathing disorders or pulmonary fibrosis'],
            ['value' => 'Chronic lung diseases such as COPD or asthma'],
            ['value' => 'Pneumonia or severe respiratory infections'],
            ['value' => 'Heart failure or cardiovascular conditions affecting oxygen circulation'],
            ['value' => 'Low oxygen saturation due to critical illness or trauma'],
            ['value' => 'Sleep-related breathing disorders or pulmonary fibrosis'],
        ],
                'condition_risks' => [
            ['value' => 'Severe oxygen deficiency affecting organs and tissues'],
            ['value' => 'Respiratory failure and worsening lung disease'],
            ['value' => 'Reduced physical activity and poor quality of life'],
            ['value' => 'Increased risk of hospitalization or critical illness'],
            ['value' => 'Complications related to uncontrolled respiratory or cardiac conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Oxygen therapy devices support breathing, improve oxygen delivery, stabilize respiratory function, and enhance overall patient recovery. Treatment may include low-flow oxygen therapy, high-flow oxygen support, humidified oxygen delivery, respiratory rehabilitation, breathing exercises, nebulization therapy, ventilatory support, and long-term pulmonary care. Patients may also benefit from smoking cessation, nutritional counseling, pulmonary rehabilitation programs, home oxygen support, preventive vaccination, chronic disease management, and regular pulmonology or cardiology follow-up to optimize respiratory and cardiovascular health outcomes.'],
            ['value' => 'Severe oxygen deficiency affecting organs and tissues'],
            ['value' => 'Respiratory failure and worsening lung disease'],
            ['value' => 'Reduced physical activity and poor quality of life'],
            ['value' => 'Increased risk of hospitalization or critical illness'],
            ['value' => 'Complications related to uncontrolled respiratory or cardiac conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Oxygen therapy devices support breathing, improve oxygen delivery, stabilize respiratory function, and enhance overall patient recovery. Treatment may include low-flow oxygen therapy, high-flow oxygen support, humidified oxygen delivery, respiratory rehabilitation, breathing exercises, nebulization therapy, ventilatory support, and long-term pulmonary care. Patients may also benefit from smoking cessation, nutritional counseling, pulmonary rehabilitation programs, home oxygen support, preventive vaccination, chronic disease management, and regular pulmonology or cardiology follow-up to optimize respiratory and cardiovascular health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of oxygen saturation and respiratory status'],
            ['value' => 'Adjustment of oxygen flow and delivery methods when required'],
            ['value' => 'Maintenance, hygiene, and safe handling of oxygen therapy equipment'],
            ['value' => 'Respiratory assessment and breathing support monitoring'],
            ['value' => 'Long-term pulmonary follow-up and respiratory rehabilitation guidance'],
            ['value' => 'Continuous monitoring of oxygen saturation and respiratory status'],
            ['value' => 'Adjustment of oxygen flow and delivery methods when required'],
            ['value' => 'Maintenance, hygiene, and safe handling of oxygen therapy equipment'],
            ['value' => 'Respiratory assessment and breathing support monitoring'],
            ['value' => 'Long-term pulmonary follow-up and respiratory rehabilitation guidance'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe oxygen deficiency affecting organs and tissues'],
            ['value' => 'Respiratory failure and worsening lung disease'],
            ['value' => 'Reduced physical activity and poor quality of life'],
            ['value' => 'Increased risk of hospitalization or critical illness'],
            ['value' => 'Complications related to uncontrolled respiratory or cardiac conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Oxygen therapy devices support breathing, improve oxygen delivery, stabilize respiratory function, and enhance overall patient recovery. Treatment may include low-flow oxygen therapy, high-flow oxygen support, humidified oxygen delivery, respiratory rehabilitation, breathing exercises, nebulization therapy, ventilatory support, and long-term pulmonary care. Patients may also benefit from smoking cessation, nutritional counseling, pulmonary rehabilitation programs, home oxygen support, preventive vaccination, chronic disease management, and regular pulmonology or cardiology follow-up to optimize respiratory and cardiovascular health outcomes.'],
            ['value' => 'Severe oxygen deficiency affecting organs and tissues'],
            ['value' => 'Respiratory failure and worsening lung disease'],
            ['value' => 'Reduced physical activity and poor quality of life'],
            ['value' => 'Increased risk of hospitalization or critical illness'],
            ['value' => 'Complications related to uncontrolled respiratory or cardiac conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Oxygen therapy devices support breathing, improve oxygen delivery, stabilize respiratory function, and enhance overall patient recovery. Treatment may include low-flow oxygen therapy, high-flow oxygen support, humidified oxygen delivery, respiratory rehabilitation, breathing exercises, nebulization therapy, ventilatory support, and long-term pulmonary care. Patients may also benefit from smoking cessation, nutritional counseling, pulmonary rehabilitation programs, home oxygen support, preventive vaccination, chronic disease management, and regular pulmonology or cardiology follow-up to optimize respiratory and cardiovascular health outcomes.'],
        ],
                'long_term_outlook' => 'Oxygen therapy devices play a vital role in improving breathing, increasing oxygen delivery, and enhancing quality of life for individuals with respiratory and cardiac conditions. Proper oxygen management, medication adherence, regular monitoring, pulmonary rehabilitation, healthy lifestyle habits, smoking cessation, preventive healthcare, and continuous medical follow-up significantly help improve daily functioning, reduce complications, preserve lung function, support long-term respiratory stability, and enhance overall health and well-being. Oxygen Therapy Devices Oxygen therapy devices play a vital role in improving breathing, increasing oxygen delivery, and enhancing quality of life for individuals with respiratory and cardiac conditions. Proper oxygen management, medication adherence, regular monitoring, pulmonary rehabilitation, healthy lifestyle habits, smoking cessation, preventive healthcare, and continuous medical follow-up significantly help improve daily functioning, reduce complications, preserve lung function, support long-term respiratory stability, and enhance overall health and well-being.',
                'conclusion' => '',
                'seo_title' => 'Oxygen Therapy Devices',
                'seo_description' => 'Oxygen therapy devices are specialized medical equipment used to deliver supplemental oxygen to patients who have difficulty maintaining adequate oxygen levels in their blood. These devices help improve breathing, support lung function, maintain proper oxygen delivery to vital organs and tissues, and reduce complications related to respiratory and cardiac conditions. Oxygen therapy plays a critical role in both emergency care and long-term respiratory support. Oxygen therapy devices are specialized medical equipment used to deliver supplemental oxygen to patients who have difficulty maintaining adequate oxygen levels in their blood. These devices help improve breathing, support lung function, maintain proper oxygen delivery to vital organs and tissues, and reduce complications related to respiratory and cardiac conditions. Oxygen therapy plays a critical role in both emergency care and long-term respiratory support.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
