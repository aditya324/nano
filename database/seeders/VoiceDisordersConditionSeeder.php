<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VoiceDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Voice Disorders')],
            [
                'name' => 'Voice Disorders',
                'slug' => Str::slug('Voice Disorders'),
                'h1' => 'Voice Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Voice disorders are conditions affecting the quality, pitch, loudness, or clarity of speech due to abnormalities of the vocal cords, larynx, or nerve supply controlling voice production.',
                'about_more' => '',
                'overview' => 'Voice disorders are conditions affecting the quality, pitch, loudness, or clarity of speech due to abnormalities of the vocal cords, larynx, or nerve supply controlling voice production.',
                'symptoms' => [
            ['value' => 'Hoarseness or weak voice'],
            ['value' => 'Difficulty speaking clearly'],
            ['value' => 'Voice breaks or strain'],
            ['value' => 'Pain while talking'],
            ['value' => 'Reduced vocal endurance'],
        ],
                'causes' => [
            ['value' => 'Vocal cord overuse or misuse'],
            ['value' => 'Laryngeal infections or inflammation'],
            ['value' => 'Vocal cord nodules or polyps'],
            ['value' => 'Neurological disorders affecting speech'],
            ['value' => 'Smoking, reflux, or allergies'],
        ],
                'risks' => [
            ['value' => 'Chronic voice impairment'],
            ['value' => 'Vocal cord injury or scarring'],
            ['value' => 'Communication difficulties'],
            ['value' => 'Emotional and social distress'],
            ['value' => 'Professional limitations for singers or speakers'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT voice assessment and laryngoscopy'],
            ['value' => 'Speech and voice therapy'],
            ['value' => 'Treatment of underlying infections or reflux'],
            ['value' => 'Vocal hygiene and lifestyle modification'],
            ['value' => 'Surgery for structural vocal cord lesions'],
        ],
                'recovery' => 'Many voice disorders improve with therapy and medical treatment. Early intervention helps preserve vocal quality and function.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Voice Disorders',
                'meta_description' => 'Voice disorders are conditions affecting the quality, pitch, loudness, or clarity of speech due to abnormalities of the vocal cords, larynx, or nerve supply con',
                'meta_keywords' => '',
            ]
        );
    }
}
