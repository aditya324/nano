<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaryngitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Laryngitis')],
            [
                'name' => 'Laryngitis',
                'slug' => Str::slug('Laryngitis'),
                'h1' => 'Laryngitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Laryngitis is inflammation of the voice box (larynx) leading to hoarseness or loss of voice. It may occur due to infections, vocal strain, allergies, or acid reflux.',
                'about_more' => '',
                'overview' => 'Laryngitis is inflammation of the voice box (larynx) leading to hoarseness or loss of voice. It may occur due to infections, vocal strain, allergies, or acid reflux.',
                'symptoms' => [
            ['value' => 'Hoarseness or voice loss'],
            ['value' => 'Throat irritation or dryness'],
            ['value' => 'Dry cough and throat clearing'],
            ['value' => 'Pain while speaking'],
            ['value' => 'Mild fever or fatigue in infections'],
        ],
                'causes' => [
            ['value' => 'Viral respiratory infections'],
            ['value' => 'Excessive voice use or shouting'],
            ['value' => 'Smoking and pollution exposure'],
            ['value' => 'Acid reflux irritation'],
            ['value' => 'Allergies and environmental irritants'],
        ],
                'risks' => [
            ['value' => 'Chronic voice changes'],
            ['value' => 'Vocal cord strain or nodules'],
            ['value' => 'Persistent throat discomfort'],
            ['value' => 'Difficulty communicating'],
            ['value' => 'Chronic laryngitis in smokers'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Voice rest and hydration'],
            ['value' => 'Steam inhalation and warm fluids'],
            ['value' => 'Treatment of infection or reflux'],
            ['value' => 'Avoiding smoking and irritants'],
            ['value' => 'ENT voice assessment if symptoms persist'],
        ],
                'recovery' => 'Acute laryngitis usually resolves within one to two weeks. Chronic cases require evaluation of underlying causes.',
                'sort_order' => 30,
                'is_active' => true,
                'meta_title' => 'Laryngitis',
                'meta_description' => 'Laryngitis is inflammation of the voice box (larynx) leading to hoarseness or loss of voice. It may occur due to infections, vocal strain, allergies, or acid re',
                'meta_keywords' => '',
            ]
        );
    }
}
