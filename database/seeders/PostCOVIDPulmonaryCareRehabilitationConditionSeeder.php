<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostCOVIDPulmonaryCareRehabilitationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-COVID Pulmonary Care & Rehabilitation')],
            [
                'name' => 'Post-COVID Pulmonary Care & Rehabilitation',
                'slug' => Str::slug('Post-COVID Pulmonary Care & Rehabilitation'),
                'h1' => 'Post-COVID Pulmonary Care & Rehabilitation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-COVID pulmonary care and rehabilitation are specialized respiratory recovery procedures designed to support patients experiencing long-term lung complications and breathing difficulties following COVID-19 infection. These rehabilitation programs focus on improving lung function, restoring physical strength, reducing respiratory symptoms, and enhancing overall quality of life after mild, moderate, or severe COVID-related respiratory illness.',
                'about_more' => '',
                'overview' => 'COVID-19 can cause persistent respiratory complications such as lung inflammation, reduced oxygen exchange, pulmonary fibrosis, chronic cough, breathing difficulty, fatigue, and decreased physical endurance even after recovery from the initial infection. Post-COVID pulmonary rehabilitation involves a multidisciplinary approach including breathing exercises, physiotherapy, oxygen therapy, nutritional support, exercise training, psychological counseling, and long-term respiratory monitoring. These programs are commonly recommended for patients who experienced severe COVID pneumonia, hospitalization, ICU admission, ventilator support, or prolonged respiratory symptoms after infection.',
                'symptoms' => [
            ['value' => 'Persistent shortness of breath or breathing difficulty'],
            ['value' => 'Chronic cough or chest discomfort'],
            ['value' => 'Fatigue, weakness, or reduced exercise tolerance'],
            ['value' => 'Low oxygen levels or difficulty performing daily activities'],
            ['value' => 'Muscle weakness, anxiety, or reduced physical endurance after COVID recovery'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Long-term lung scarring or pulmonary fibrosis'],
            ['value' => 'Chronic respiratory impairment or oxygen dependency'],
            ['value' => 'Reduced physical capacity and prolonged fatigue'],
            ['value' => 'Increased risk of secondary respiratory infections or cardiovascular complications'],
            ['value' => 'Emotional stress, anxiety, or reduced quality of life following severe illness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Post-COVID pulmonary care and rehabilitation focus on restoring lung function, improving oxygenation, enhancing physical fitness, and supporting emotional recovery. Treatment may include pulmonary rehabilitation exercises, breathing training, oxygen therapy, respiratory physiotherapy, bronchodilator medications, nutritional counseling, supervised exercise therapy, and psychological support. Patients may also benefit from vaccination, smoking cessation, sleep optimization, stress management, hydration support, and long-term pulmonology follow-up to improve respiratory recovery and prevent further complications.'],
            ['value' => 'Regular monitoring of lung function and oxygen levels'],
            ['value' => 'Supervised pulmonary rehabilitation and breathing exercises'],
            ['value' => 'Gradual physical conditioning and endurance training'],
            ['value' => 'Nutritional support, hydration, and lifestyle modification counseling'],
            ['value' => 'Long-term pulmonology follow-up and respiratory health monitoring'],
        ],
                'recovery' => 'The long-term outlook following post-COVID pulmonary care and rehabilitation is generally positive with early intervention and consistent rehabilitation support. Pulmonary rehabilitation, medication adherence, breathing exercises, healthy lifestyle habits, regular physical activity, vaccination, and continuous medical follow-up significantly help improve breathing function, restore physical endurance, reduce respiratory complications, support emotional well-being, and enhance overall quality of life. ___________________ 20. Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen) Management of Acute Exacerbations (Steroids, Antibiotics, Oxygen) Procedures',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Post-COVID Pulmonary Care & Rehabilitation',
                'meta_description' => 'Post-COVID pulmonary care and rehabilitation are specialized respiratory recovery procedures designed to support patients experiencing long-term lung complicati',
                'meta_keywords' => '',
            ]
        );
    }
}
