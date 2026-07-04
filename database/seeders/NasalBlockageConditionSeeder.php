<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NasalBlockageConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nasal Blockage')],
            [
                'name' => 'Nasal Blockage',
                'slug' => Str::slug('Nasal Blockage'),
                'h1' => 'Nasal Blockage',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nasal blockage refers to obstruction of airflow through the nose due to swelling, structural abnormalities, allergies, infections, or growths inside the nasal cavity. It can interfere with breathing, sleep, and quality of life.',
                'about_more' => '',
                'overview' => 'Nasal blockage refers to obstruction of airflow through the nose due to swelling, structural abnormalities, allergies, infections, or growths inside the nasal cavity. It can interfere with breathing, sleep, and quality of life.',
                'symptoms' => [
            ['value' => 'Difficulty breathing through the nose'],
            ['value' => 'Mouth breathing and snoring'],
            ['value' => 'Reduced sense of smell'],
            ['value' => 'Nasal discharge or congestion'],
            ['value' => 'Facial pressure or headache'],
        ],
                'causes' => [
            ['value' => 'Allergic rhinitis or sinusitis'],
            ['value' => 'Deviated nasal septum'],
            ['value' => 'Nasal polyps or growths'],
            ['value' => 'Viral infections and colds'],
            ['value' => 'Environmental irritants and pollution'],
        ],
                'risks' => [
            ['value' => 'Sleep disturbances and fatigue'],
            ['value' => 'Chronic sinus infections'],
            ['value' => 'Mouth dryness and throat irritation'],
            ['value' => 'Reduced smell and taste sensation'],
            ['value' => 'Breathing difficulty affecting daily activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal examination and endoscopy'],
            ['value' => 'Antihistamines or decongestants'],
            ['value' => 'Nasal steroid sprays'],
            ['value' => 'Treatment of sinus or allergy conditions'],
            ['value' => 'Surgical correction if structural blockage exists'],
        ],
                'recovery' => 'Most patients improve with appropriate medical or surgical management. Early treatment prevents chronic sinus and breathing complications.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Nasal Blockage',
                'meta_description' => 'Nasal blockage refers to obstruction of airflow through the nose due to swelling, structural abnormalities, allergies, infections, or growths inside the nasal c',
                'meta_keywords' => '',
            ]
        );
    }
}
