<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AudiometryPureToneAudiometerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Audiometry (Pure Tone Audiometer)')],
            [
                'title' => 'Audiometry (Pure Tone Audiometer)',
                'slug' => Str::slug('Audiometry (Pure Tone Audiometer)'),
                'introduction' => 'A Pure Tone Audiometer is a specialized hearing assessment device used to measure hearing sensitivity and detect hearing loss. The test evaluates how well a person hears sounds of different frequencies and intensities. Audiometry is essential for diagnosing hearing disorders and planning hearing rehabilitation.',
                'what_is' => 'During the test, the patient wears headphones and responds to different sound tones presented at varying volumes and pitches. The evaluation helps diagnose: Conductive hearing loss Sensorineural hearing loss Mixed hearing loss Noise-induced hearing damage Age-related hearing loss The results are recorded as an audiogram, which helps ENT specialists and audiologists plan treatment.',
                'symptoms' => [
            ['value' => 'Difficulty hearing conversations'],
            ['value' => 'Ringing in the ears'],
            ['value' => 'Reduced hearing clarity'],
            ['value' => 'Delayed speech development in children'],
            ['value' => 'Hearing difficulty in noisy environments'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Temporary fatigue during prolonged testing'],
            ['value' => 'Anxiety in young children'],
            ['value' => 'Inaccurate results if cooperation is poor'],
            ['value' => 'Mild discomfort from headphone pressure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow hearing treatment recommendations carefully'],
            ['value' => 'Use hearing aids if prescribed'],
            ['value' => 'Avoid prolonged loud noise exposure'],
            ['value' => 'Attend repeat hearing evaluations regularly'],
            ['value' => 'Protect ears from trauma and infections'],
        ],
                'surgery_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Temporary fatigue during prolonged testing'],
            ['value' => 'Anxiety in young children'],
            ['value' => 'Inaccurate results if cooperation is poor'],
            ['value' => 'Mild discomfort from headphone pressure'],
        ],
                'long_term_outlook' => 'Audiometry supports early diagnosis of hearing disorders and improves long-term hearing preservation and rehabilitation outcomes.',
                'conclusion' => '',
                'seo_title' => 'Audiometry (Pure Tone Audiometer)',
                'seo_description' => 'A Pure Tone Audiometer is a specialized hearing assessment device used to measure hearing sensitivity and detect hearing loss. The test evaluates how well a person hears sounds of different frequencies and intensities. Audiometry is essential for diagnosing hearing disorders and planning hearing rehabilitation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
