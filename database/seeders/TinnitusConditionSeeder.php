<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TinnitusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tinnitus')],
            [
                'name' => 'Tinnitus',
                'slug' => Str::slug('Tinnitus'),
                'h1' => 'Tinnitus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tinnitus is the perception of ringing, buzzing, hissing, or other sounds in the ears without an external sound source. It may occur continuously or intermittently and can affect one or both ears. Tinnitus is commonly associated with hearing loss, noise exposure, ear infections, or inner ear disorders.',
                'about_more' => '',
                'overview' => 'Tinnitus is the perception of ringing, buzzing, hissing, or other sounds in the ears without an external sound source. It may occur continuously or intermittently and can affect one or both ears. Tinnitus is commonly associated with hearing loss, noise exposure, ear infections, or inner ear disorders.',
                'symptoms' => [
            ['value' => 'Ringing or buzzing sound in the ears'],
            ['value' => 'Humming, clicking, or whistling noises'],
            ['value' => 'Difficulty concentrating or sleeping'],
            ['value' => 'Hearing difficulty associated with tinnitus'],
            ['value' => 'Increased stress or irritability due to persistent noise'],
        ],
                'causes' => [
            ['value' => 'Exposure to loud noise'],
            ['value' => 'Age-related hearing loss'],
            ['value' => 'Ear infections or wax blockage'],
            ['value' => 'Inner ear or nerve disorders'],
            ['value' => 'Certain medications affecting hearing'],
        ],
                'risks' => [
            ['value' => 'Sleep disturbances and fatigue'],
            ['value' => 'Anxiety, stress, or depression'],
            ['value' => 'Difficulty concentrating'],
            ['value' => 'Reduced quality of life'],
            ['value' => 'Associated hearing impairment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT and hearing evaluation'],
            ['value' => 'Treatment of underlying ear conditions'],
            ['value' => 'Hearing aids or sound therapy'],
            ['value' => 'Stress management and counseling'],
            ['value' => 'Tinnitus retraining therapy'],
        ],
                'recovery' => 'Many patients improve with treatment and lifestyle modifications. Chronic tinnitus may persist but can often be effectively managed.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Tinnitus',
                'meta_description' => 'Tinnitus is the perception of ringing, buzzing, hissing, or other sounds in the ears without an external sound source. It may occur continuously or intermittent',
                'meta_keywords' => '',
            ]
        );
    }
}
