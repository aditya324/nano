<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StoolSoftenerLaxativeAntidiarrhealTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Stool Softener / Laxative / Anti-diarrheal Therapy')],
            [
                'title' => 'Stool Softener / Laxative / Anti-diarrheal Therapy',
                'slug' => Str::slug('Stool Softener / Laxative / Anti-diarrheal Therapy'),
                'introduction' => 'These therapies are used to manage constipation, hard stools, diarrhea, bowel irregularities, and gastrointestinal motility disorders. Treatment is individualized according to patient symptoms, medical history, and underlying digestive conditions.',
                'what_is' => 'Management options include: Stool softeners Osmotic or stimulant laxatives Anti-diarrheal medications Fiber supplementation Hydration and dietary modification Common conditions treated include: Constipation Irritable bowel syndrome Infective diarrhea Postoperative bowel dysfunction Chronic bowel irregularity Lifestyle modification is an important part of treatment.',
                'symptoms' => [
            ['value' => 'Hard or infrequent stools'],
            ['value' => 'Loose frequent stools'],
            ['value' => 'Abdominal bloating'],
            ['value' => 'Cramping or discomfort'],
            ['value' => 'Difficulty passing stool'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Dehydration'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Medication overuse dependency'],
            ['value' => 'Abdominal pain'],
            ['value' => 'Masking serious bowel disease'],
            ['value' => 'Post-Treatment Care'],
            ['value' => 'Drink adequate fluids daily'],
            ['value' => 'Maintain a fiber-rich balanced diet'],
            ['value' => 'Exercise regularly when possible'],
            ['value' => 'Use medications only as prescribed'],
            ['value' => 'Seek medical care if symptoms persist or worsen'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [
            ['value' => 'Dehydration'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Medication overuse dependency'],
            ['value' => 'Abdominal pain'],
            ['value' => 'Masking serious bowel disease'],
            ['value' => 'Post-Treatment Care'],
            ['value' => 'Drink adequate fluids daily'],
            ['value' => 'Maintain a fiber-rich balanced diet'],
            ['value' => 'Exercise regularly when possible'],
            ['value' => 'Use medications only as prescribed'],
            ['value' => 'Seek medical care if symptoms persist or worsen'],
        ],
                'long_term_outlook' => 'Most patients achieve improved bowel regularity and symptom control with proper treatment and lifestyle measures. Long-term digestive health depends on consistent dietary habits, hydration, and medical follow-up when needed.',
                'conclusion' => '',
                'seo_title' => 'Stool Softener / Laxative / Anti-diarrheal Therapy',
                'seo_description' => 'These therapies are used to manage constipation, hard stools, diarrhea, bowel irregularities, and gastrointestinal motility disorders. Treatment is individualized according to patient symptoms, medical history, and underlying digestive conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
