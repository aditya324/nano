<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class pHImpedanceMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('pH & Impedance Monitoring')],
            [
                'name' => 'pH & Impedance Monitoring',
                'slug' => Str::slug('pH & Impedance Monitoring'),
                'h1' => 'pH & Impedance Monitoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'pH and impedance monitoring tests measure acid and non-acid reflux episodes in the esophagus over a prolonged period.',
                'about_more' => 'These studies help diagnose gastroesophageal reflux disease (GERD) and related swallowing disorders.',
                'overview' => 'Services and capabilities include: Acid reflux assessment Non-acid reflux detection Symptom correlation analysis Esophageal reflux monitoring Evaluation before anti-reflux surgery Small monitoring devices record reflux activity during daily activities. Symptoms Indicating Evaluation Chronic heartburn Persistent cough Chest discomfort Hoarseness or throat irritation Reflux symptoms despite medication',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Mild throat or nasal discomfort'],
            ['value' => 'Temporary swallowing irritation'],
            ['value' => 'Rare nose bleeding'],
            ['value' => 'Minor discomfort from catheter placement'],
            ['value' => 'Anxiety during prolonged monitoring'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain symptom diary accurately'],
            ['value' => 'Follow instructions regarding meals and activities'],
            ['value' => 'Resume medications only as advised'],
            ['value' => 'Attend follow-up consultation'],
            ['value' => 'Continue lifestyle modifications for reflux control'],
        ],
                'recovery' => 'These tests help confirm reflux disorders accurately and guide personalized treatment, improving symptom control and long-term esophageal health.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'pH & Impedance Monitoring',
                'meta_description' => 'pH and impedance monitoring tests measure acid and non-acid reflux episodes in the esophagus over a prolonged period.',
                'meta_keywords' => '',
            ]
        );
    }
}
