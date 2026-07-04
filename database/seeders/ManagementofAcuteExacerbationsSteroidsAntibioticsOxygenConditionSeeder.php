<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofAcuteExacerbationsSteroidsAntibioticsOxygenConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen)')],
            [
                'name' => 'Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen)',
                'slug' => Str::slug('Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen)'),
                'h1' => 'Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of acute exacerbations involves emergency and supportive respiratory treatment procedures used to stabilize sudden worsening of chronic lung diseases such as asthma, chronic obstructive pulmonary disease (COPD), bronchiectasis, and other chronic respiratory disorders. Acute exacerbations can significantly impair breathing, reduce oxygen levels, and increase the risk of respiratory failure if not treated promptly. Steroids, antibiotics, and oxygen therapy are commonly used to reduce inflammation, control infection, improve oxygenation, and restore respiratory stability.',
                'about_more' => '',
                'overview' => 'Acute exacerbations are often triggered by respiratory infections, environmental irritants, allergens, or progression of underlying lung disease. Steroids help reduce airway inflammation and swelling, antibiotics treat bacterial infections contributing to respiratory worsening, and oxygen therapy improves oxygen delivery to vital organs. Additional supportive care such as bronchodilator therapy, nebulization, ventilatory support, hydration management, and respiratory monitoring may also be required depending on the severity of symptoms. These treatments are commonly provided in emergency departments, pulmonary clinics, hospitals, intensive care units, and critical care settings.',
                'symptoms' => [
            ['value' => 'Sudden worsening of shortness of breath or breathing difficulty'],
            ['value' => 'Increased coughing or mucus production'],
            ['value' => 'Wheezing, chest tightness, or noisy breathing'],
            ['value' => 'Low oxygen levels or rapid breathing'],
            ['value' => 'Fatigue, confusion, or signs of severe respiratory distress in advanced cases'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Severe respiratory failure requiring ventilator support'],
            ['value' => 'Progressive lung damage or reduced lung function'],
            ['value' => 'Antibiotic-related side effects or drug resistance'],
            ['value' => 'Steroid-related complications such as elevated blood sugar or weakened immunity'],
            ['value' => 'Increased risk of hospitalization and recurrent respiratory exacerbations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Management of acute exacerbations focuses on improving airflow, reducing inflammation, treating infections, stabilizing oxygen levels, and preventing respiratory complications. Treatment may include corticosteroids, antibiotics, oxygen therapy, bronchodilators, nebulization therapy, non-invasive or invasive ventilatory support, respiratory physiotherapy, hydration support, and intensive monitoring. Patients may also benefit from pulmonary rehabilitation, smoking cessation, vaccination, nutritional support, breathing exercises, and long-term pulmonology follow-up to reduce future exacerbation risk and improve respiratory health.'],
            ['value' => 'Continuous monitoring of respiratory status and oxygen saturation'],
            ['value' => 'Gradual adjustment of oxygen therapy and medications as symptoms improve'],
            ['value' => 'Monitoring for medication side effects or recurrent respiratory symptoms'],
            ['value' => 'Pulmonary rehabilitation and breathing exercises during recovery'],
            ['value' => 'Long-term respiratory follow-up and chronic disease management support'],
        ],
                'recovery' => 'The long-term outlook following management of acute respiratory exacerbations depends on the severity of the underlying lung disease, speed of treatment, frequency of exacerbations, and overall respiratory health. Early medical intervention, medication adherence, pulmonary rehabilitation, smoking cessation, healthy lifestyle habits, vaccination, and regular pulmonology follow-up significantly help reduce exacerbations, preserve lung function, prevent complications, and enhance overall quality of life. ________________ 21. Chest Physiotherapy / Airway Clearance Techniques Chest Physiotherapy / Airway Clearance Techniques Procedures',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen)',
                'meta_description' => 'Management of acute exacerbations involves emergency and supportive respiratory treatment procedures used to stabilize sudden worsening of chronic lung diseases',
                'meta_keywords' => '',
            ]
        );
    }
}
