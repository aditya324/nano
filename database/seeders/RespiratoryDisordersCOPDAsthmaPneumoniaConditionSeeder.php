<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RespiratoryDisordersCOPDAsthmaPneumoniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Respiratory Disorders (COPD, Asthma, Pneumonia)')],
            [
                'name' => 'Respiratory Disorders (COPD, Asthma, Pneumonia)',
                'slug' => Str::slug('Respiratory Disorders (COPD, Asthma, Pneumonia)'),
                'h1' => 'Respiratory Disorders (COPD, Asthma, Pneumonia)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Respiratory disorders are medical conditions that affect the lungs and airways, leading to breathing difficulties, reduced oxygen exchange, and impaired respiratory function. Conditions such as Chronic Obstructive Pulmonary Disease (COPD), asthma, and pneumonia can range from mild chronic illness to severe life-threatening respiratory complications. COPD is a progressive lung disease that causes airflow obstruction, asthma involves airway inflammation and narrowing, while pneumonia is an infection of the lungs that can affect breathing and oxygen levels. Early diagnosis and appropriate pulmonary care are essential to improve lung function and prevent complications.',
                'about_more' => '',
                'overview' => 'Respiratory disorders are medical conditions that affect the lungs and airways, leading to breathing difficulties, reduced oxygen exchange, and impaired respiratory function. Conditions such as Chronic Obstructive Pulmonary Disease (COPD), asthma, and pneumonia can range from mild chronic illness to severe life-threatening respiratory complications. COPD is a progressive lung disease that causes airflow obstruction, asthma involves airway inflammation and narrowing, while pneumonia is an infection of the lungs that can affect breathing and oxygen levels. Early diagnosis and appropriate pulmonary care are essential to improve lung function and prevent complications.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Persistent cough with or without mucus production'],
            ['value' => 'Wheezing or chest tightness'],
            ['value' => 'Fever, chills, or fatigue in infectious conditions such as pneumonia'],
            ['value' => 'Reduced exercise tolerance or frequent respiratory infections'],
        ],
                'causes' => [
            ['value' => 'Smoking and long-term exposure to air pollution or harmful chemicals'],
            ['value' => 'Allergies, dust, cold air, or respiratory irritants triggering asthma symptoms'],
            ['value' => 'Bacterial, viral, or fungal lung infections causing pneumonia'],
            ['value' => 'Genetic predisposition or chronic inflammatory lung disease'],
            ['value' => 'Weak immunity, chronic illness, or occupational exposure affecting lung health'],
        ],
                'risks' => [
            ['value' => 'Severe breathing difficulty or respiratory failure'],
            ['value' => 'Recurrent lung infections or worsening airway inflammation'],
            ['value' => 'Reduced oxygen levels affecting heart and organ function'],
            ['value' => 'Lung damage, chronic disability, or decreased quality of life'],
            ['value' => 'Increased risk of hospitalization and life-threatening respiratory emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for respiratory disorders focuses on improving breathing, reducing airway inflammation, controlling infection, preventing complications, and enhancing overall lung function. Management may include inhalers, bronchodilators, corticosteroids, antibiotics, oxygen therapy, nebulization, pulmonary rehabilitation, smoking cessation, and lifestyle modification. Severe cases may require hospitalization, ventilatory support, or intensive respiratory care. Patients may also benefit from vaccination, breathing exercises, nutritional counseling, allergy management, physiotherapy, pulmonology follow-up, and long-term respiratory monitoring to support pulmonary health and improve daily functioning.'],
        ],
                'recovery' => 'The long-term outlook for respiratory disorders depends on the severity of lung disease, underlying medical conditions, treatment adherence, and lifestyle management. Early diagnosis, medication compliance, smoking cessation, regular exercise, healthy nutrition, vaccination, pulmonary rehabilitation, avoidance of respiratory irritants, and continuous medical follow-up significantly help improve lung function, reduce respiratory complications, maintain oxygen balance, enhance physical activity, and improve overall quality of life. _________________ 12. Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections) Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections)',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Respiratory Disorders (COPD, Asthma, Pneumonia)',
                'meta_description' => 'Respiratory disorders are medical conditions that affect the lungs and airways, leading to breathing difficulties, reduced oxygen exchange, and impaired respira',
                'meta_keywords' => '',
            ]
        );
    }
}
