<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdenoidHypertrophyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Adenoid Hypertrophy')],
            [
                'name' => 'Adenoid Hypertrophy',
                'slug' => Str::slug('Adenoid Hypertrophy'),
                'h1' => 'Adenoid Hypertrophy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Adenoid hypertrophy is enlargement of the adenoid tissue located behind the nose, commonly affecting children. Enlarged adenoids can block nasal airflow and contribute to breathing and ear problems.',
                'about_more' => '',
                'overview' => 'Adenoid hypertrophy is enlargement of the adenoid tissue located behind the nose, commonly affecting children. Enlarged adenoids can block nasal airflow and contribute to breathing and ear problems.',
                'symptoms' => [
            ['value' => 'Persistent nasal blockage'],
            ['value' => 'Mouth breathing and snoring'],
            ['value' => 'Sleep disturbances or sleep apnea'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Nasal speech or chronic cough'],
        ],
                'causes' => [
            ['value' => 'Recurrent infections in childhood'],
            ['value' => 'Allergic inflammation'],
            ['value' => 'Chronic sinus or nasal irritation'],
            ['value' => 'Enlarged lymphoid tissue growth'],
            ['value' => 'Exposure to smoke or pollution'],
        ],
                'risks' => [
            ['value' => 'Poor sleep quality and fatigue'],
            ['value' => 'Recurrent ear infections and hearing issues'],
            ['value' => 'Facial growth abnormalities in severe cases'],
            ['value' => 'Difficulty concentrating in school'],
            ['value' => 'Breathing problems during sleep'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Medical treatment for allergies and infections'],
            ['value' => 'Nasal sprays and supportive care'],
            ['value' => 'Hearing and sleep assessment'],
            ['value' => 'Adenoidectomy surgery if severe'],
            ['value' => 'Regular pediatric ENT follow-up'],
        ],
                'recovery' => 'Most children recover well after treatment or surgery. Early management improves breathing and sleep quality.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Adenoid Hypertrophy',
                'meta_description' => 'Adenoid hypertrophy is enlargement of the adenoid tissue located behind the nose, commonly affecting children. Enlarged adenoids can block nasal airflow and con',
                'meta_keywords' => '',
            ]
        );
    }
}
