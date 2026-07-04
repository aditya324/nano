<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InhalerTherapyBronchodilatorsCorticosteroidsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Inhaler Therapy (Bronchodilators, Corticosteroids)')],
            [
                'title' => 'Inhaler Therapy (Bronchodilators, Corticosteroids)',
                'slug' => Str::slug('Inhaler Therapy (Bronchodilators, Corticosteroids)'),
                'introduction' => 'Inhaler therapy is a commonly used respiratory treatment procedure that delivers medications directly into the lungs to improve breathing, reduce airway inflammation, and relieve respiratory symptoms. Bronchodilator inhalers help relax and open the airways, while corticosteroid inhalers reduce inflammation and swelling within the respiratory passages. Inhaler therapy plays a major role in the management of asthma, chronic obstructive pulmonary disease (COPD), and other chronic respiratory conditions.',
                'what_is' => 'Inhaler therapy allows medications to reach the lungs quickly and effectively with fewer systemic side effects compared to oral medications. Bronchodilators are used for rapid relief of airway narrowing and breathing difficulty, whereas corticosteroids are commonly used as long-term controller medications to prevent inflammation and reduce the frequency of respiratory exacerbations. Different inhaler devices such as metered-dose inhalers, dry powder inhalers, and nebulizer systems may be used depending on the patient’s age, condition, and severity of symptoms. Proper inhaler technique and regular follow-up are essential for effective respiratory disease management.',
                'symptoms' => [
            ['value' => 'Shortness of breath or breathing difficulty'],
            ['value' => 'Wheezing or chest tightness'],
            ['value' => 'Persistent cough or mucus production'],
            ['value' => 'Sudden asthma attacks or COPD flare-ups'],
            ['value' => 'Reduced exercise tolerance or respiratory discomfort'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Incorrect inhaler technique reducing medication effectiveness'],
            ['value' => 'Oral infections or throat irritation from corticosteroid inhalers'],
            ['value' => 'Rapid heartbeat, tremors, or nervousness from bronchodilator overuse'],
            ['value' => 'Poor symptom control due to irregular medication use'],
            ['value' => 'Increased risk of severe respiratory exacerbations if treatment is not followed properly'],
            ['value' => 'Treatment Options'],
            ['value' => 'Inhaler therapy focuses on improving airflow, reducing airway inflammation, relieving respiratory symptoms, and preventing worsening of chronic lung disease. Treatment may include short-acting bronchodilators for quick symptom relief, long-acting bronchodilators for maintenance therapy, inhaled corticosteroids, combination inhalers, nebulization therapy, and supportive respiratory care. Patients may also benefit from pulmonary rehabilitation, breathing exercises, smoking cessation, allergy management, vaccination, trigger avoidance, and regular pulmonology follow-up to improve long-term respiratory health and quality of life.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of breathing symptoms and lung function'],
            ['value' => 'Proper inhaler technique training and medication adherence support'],
            ['value' => 'Mouth rinsing after corticosteroid inhaler use to prevent irritation or infection'],
            ['value' => 'Follow-up respiratory evaluation and adjustment of therapy when needed'],
            ['value' => 'Long-term pulmonary care, lifestyle modification, and trigger management'],
        ],
                'surgery_risks' => [
            ['value' => 'Incorrect inhaler technique reducing medication effectiveness'],
            ['value' => 'Oral infections or throat irritation from corticosteroid inhalers'],
            ['value' => 'Rapid heartbeat, tremors, or nervousness from bronchodilator overuse'],
            ['value' => 'Poor symptom control due to irregular medication use'],
            ['value' => 'Increased risk of severe respiratory exacerbations if treatment is not followed properly'],
            ['value' => 'Treatment Options'],
            ['value' => 'Inhaler therapy focuses on improving airflow, reducing airway inflammation, relieving respiratory symptoms, and preventing worsening of chronic lung disease. Treatment may include short-acting bronchodilators for quick symptom relief, long-acting bronchodilators for maintenance therapy, inhaled corticosteroids, combination inhalers, nebulization therapy, and supportive respiratory care. Patients may also benefit from pulmonary rehabilitation, breathing exercises, smoking cessation, allergy management, vaccination, trigger avoidance, and regular pulmonology follow-up to improve long-term respiratory health and quality of life.'],
        ],
                'long_term_outlook' => 'The long-term outlook with inhaler therapy is generally positive when medications are used correctly and consistently. Early treatment, proper inhaler technique, smoking cessation, pulmonary rehabilitation, healthy lifestyle habits, and regular respiratory follow-up significantly help improve breathing function, reduce exacerbations, prevent complications, preserve lung health, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Inhaler Therapy (Bronchodilators, Corticosteroids)',
                'seo_description' => 'Inhaler therapy is a commonly used respiratory treatment procedure that delivers medications directly into the lungs to improve breathing, reduce airway inflammation, and relieve respiratory symptoms. Bronchodilator inhalers help relax and open the airways, while corticosteroid inhalers reduce inflammation and swelling within the respiratory passages. Inhaler therapy plays a major role in the management of asthma, chronic obstructive pulmonary disease (COPD), and other chronic respiratory conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
