<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RespiratoryTherapyPulmonaryRehabilitationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Respiratory Therapy & Pulmonary Rehabilitation')],
            [
                'name' => 'Respiratory Therapy & Pulmonary Rehabilitation',
                'slug' => Str::slug('Respiratory Therapy & Pulmonary Rehabilitation'),
                'h1' => 'Respiratory Therapy & Pulmonary Rehabilitation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Respiratory therapy and pulmonary rehabilitation are specialized treatment programs designed to improve breathing, lung function, physical endurance, and overall quality of life in individuals with respiratory disorders. These therapies help manage chronic lung diseases, improve oxygen delivery, and support recovery from respiratory illnesses or surgeries.',
                'about_more' => '',
                'overview' => 'Pulmonary rehabilitation combines breathing exercises, supervised physical training, airway clearance techniques, respiratory muscle strengthening, and patient education to improve respiratory efficiency and physical function. Respiratory therapy may also include oxygen therapy, nebulization, chest physiotherapy, and ventilatory support when required. These programs are commonly recommended for chronic obstructive pulmonary disease (COPD), asthma, interstitial lung disease, post-COVID conditions, and other chronic respiratory disorders.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Chronic cough or wheezing'],
            ['value' => 'Reduced physical endurance or fatigue'],
            ['value' => 'Chest tightness or breathing discomfort'],
            ['value' => 'Difficulty performing daily activities due to respiratory problems'],
            ['value' => 'Common Causes'],
            ['value' => 'Chronic obstructive pulmonary disease (COPD)'],
            ['value' => 'Asthma and airway inflammation'],
            ['value' => 'Interstitial lung disease or pulmonary fibrosis'],
            ['value' => 'Respiratory infections or post-COVID complications'],
            ['value' => 'Smoking, pollution, or long-term lung damage'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Reduced lung function and oxygen levels'],
            ['value' => 'Frequent respiratory infections or flare-ups'],
            ['value' => 'Muscle weakness and decreased endurance'],
            ['value' => 'Anxiety or emotional stress related to breathing difficulties'],
            ['value' => 'Increased risk of hospitalization or respiratory failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Respiratory therapy and pulmonary rehabilitation may include breathing exercises, airway clearance therapy, endurance training, chest physiotherapy, oxygen therapy, nebulization, respiratory muscle strengthening, and supervised exercise programs. Rehabilitation specialists may also provide smoking cessation support, nutritional counseling, lifestyle modification guidance, and education on long-term respiratory disease management.'],
            ['value' => 'Practicing breathing exercises and pulmonary therapy regularly'],
            ['value' => 'Taking prescribed medications and respiratory treatments consistently'],
            ['value' => 'Avoiding smoking and respiratory irritants'],
            ['value' => 'Monitoring oxygen levels and respiratory symptoms'],
            ['value' => 'Attending regular pulmonary rehabilitation and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with respiratory therapy and pulmonary rehabilitation is generally positive when treatment is started early and followed consistently. These therapies can significantly improve breathing efficiency, physical endurance, symptom control, and overall quality of life. Ongoing respiratory care, healthy lifestyle habits, and regular medical follow-up are important for maintaining long-term lung health and functional independence. _______________________ 12. Neuromuscular Re-education Neuromuscular Re-education Procedures',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Respiratory Therapy & Pulmonary Rehabilitation',
                'meta_description' => 'Respiratory therapy and pulmonary rehabilitation are specialized treatment programs designed to improve breathing, lung function, physical endurance, and overal',
                'meta_keywords' => '',
            ]
        );
    }
}
