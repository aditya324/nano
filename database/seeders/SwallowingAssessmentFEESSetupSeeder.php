<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SwallowingAssessmentFEESSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Swallowing Assessment (FEES) Setup')],
            [
                'title' => 'Swallowing Assessment (FEES) Setup',
                'slug' => Str::slug('Swallowing Assessment (FEES) Setup'),
                'introduction' => 'Fiberoptic Endoscopic Evaluation of Swallowing (FEES) is an advanced swallowing assessment procedure used to evaluate swallowing safety and throat function. The setup helps identify swallowing disorders, aspiration risk, and feeding difficulties. It is commonly used in ENT, neurology, and rehabilitation care.',
                'what_is' => 'During FEES, a flexible endoscope is inserted through the nose to observe swallowing directly while the patient consumes food or liquids of different consistencies. The assessment evaluates: Swallowing coordination Aspiration risk Vocal cord function Airway protection Throat muscle movement FEES helps guide swallowing rehabilitation and dietary recommendations.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Choking during eating'],
            ['value' => 'Recurrent coughing while swallowing'],
            ['value' => 'Food sticking sensation'],
            ['value' => 'Recurrent aspiration pneumonia'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild nasal discomfort'],
            ['value' => 'Temporary gag reflex'],
            ['value' => 'Minor nasal bleeding'],
            ['value' => 'Sneezing or throat irritation'],
            ['value' => 'Rare aspiration during testing'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow swallowing safety recommendations carefully'],
            ['value' => 'Continue speech and swallowing therapy if advised'],
            ['value' => 'Maintain proper nutrition and hydration'],
            ['value' => 'Attend follow-up evaluations regularly'],
            ['value' => 'Report worsening swallowing difficulty immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild nasal discomfort'],
            ['value' => 'Temporary gag reflex'],
            ['value' => 'Minor nasal bleeding'],
            ['value' => 'Sneezing or throat irritation'],
            ['value' => 'Rare aspiration during testing'],
        ],
                'long_term_outlook' => 'FEES assessment improves diagnosis of swallowing disorders and helps prevent aspiration-related complications, improving long-term nutrition and safety.',
                'conclusion' => '',
                'seo_title' => 'Swallowing Assessment (FEES) Setup',
                'seo_description' => 'Fiberoptic Endoscopic Evaluation of Swallowing (FEES) is an advanced swallowing assessment procedure used to evaluate swallowing safety and throat function. The setup helps identify swallowing disorders, aspiration risk, and feeding difficulties. It is commonly used in ENT, neurology, and rehabilitation care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
