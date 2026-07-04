<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HoarsenessofVoiceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hoarseness of Voice')],
            [
                'name' => 'Hoarseness of Voice',
                'slug' => Str::slug('Hoarseness of Voice'),
                'h1' => 'Hoarseness of Voice',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hoarseness of voice refers to an abnormal change in the voice, making it sound rough, weak, strained, or breathy. It commonly occurs due to inflammation, infection, vocal cord strain, or disorders affecting the larynx (voice box).',
                'about_more' => '',
                'overview' => 'Hoarseness of voice refers to an abnormal change in the voice, making it sound rough, weak, strained, or breathy. It commonly occurs due to inflammation, infection, vocal cord strain, or disorders affecting the larynx (voice box).',
                'symptoms' => [
            ['value' => 'Rough or raspy voice'],
            ['value' => 'Weak or strained speech'],
            ['value' => 'Voice fatigue after talking'],
            ['value' => 'Throat irritation or dryness'],
            ['value' => 'Difficulty speaking loudly'],
        ],
                'causes' => [
            ['value' => 'Viral laryngitis or throat infection'],
            ['value' => 'Excessive voice use or shouting'],
            ['value' => 'Smoking and alcohol use'],
            ['value' => 'Acid reflux affecting the throat'],
            ['value' => 'Vocal cord nodules or tumors'],
        ],
                'risks' => [
            ['value' => 'Persistent voice changes'],
            ['value' => 'Vocal cord damage or nodules'],
            ['value' => 'Communication difficulty'],
            ['value' => 'Underlying serious disease detection delay'],
            ['value' => 'Reduced professional performance in voice users'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Voice rest and hydration'],
            ['value' => 'Steam inhalation and throat care'],
            ['value' => 'Treatment of infection or reflux disease'],
            ['value' => 'Voice therapy and speech rehabilitation'],
            ['value' => 'Laryngoscopy evaluation for persistent hoarseness'],
        ],
                'recovery' => 'Most cases improve with voice rest and treatment of the underlying cause. Persistent hoarseness requires detailed ENT evaluation.',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Hoarseness of Voice',
                'meta_description' => 'Hoarseness of voice refers to an abnormal change in the voice, making it sound rough, weak, strained, or breathy. It commonly occurs due to inflammation, infect',
                'meta_keywords' => '',
            ]
        );
    }
}
