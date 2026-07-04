<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaryngoscopyStroboscopyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laryngoscopy & Stroboscopy Equipment')],
            [
                'title' => 'Laryngoscopy & Stroboscopy Equipment',
                'slug' => Str::slug('Laryngoscopy & Stroboscopy Equipment'),
                'introduction' => 'Laryngoscopy and stroboscopy equipment are advanced ENT diagnostic systems used to examine the vocal cords, larynx, and upper airway in detail. Stroboscopy provides slow-motion visualization of vocal cord vibration, helping diagnose subtle voice disorders. These systems are essential in voice clinics and ENT practice.',
                'what_is' => 'The equipment includes: Flexible or rigid laryngoscopes High-definition camera systems Stroboscopic light source Video recording and playback systems The setup is used for: Hoarseness evaluation Vocal cord paralysis Voice disorders Laryngeal tumors Professional voice assessment The examination helps assess vocal cord movement, symmetry, vibration, and structural abnormalities.',
                'symptoms' => [
            ['value' => 'Persistent hoarseness'],
            ['value' => 'Voice fatigue'],
            ['value' => 'Difficulty speaking'],
            ['value' => 'Throat discomfort'],
            ['value' => 'Breathing difficulty related to vocal cord problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary gagging sensation'],
            ['value' => 'Mild throat discomfort'],
            ['value' => 'Rare nasal irritation or bleeding'],
            ['value' => 'Temporary voice fatigue'],
            ['value' => 'Anxiety during examination'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid eating briefly if throat spray was used'],
            ['value' => 'Maintain good hydration'],
            ['value' => 'Follow voice rest recommendations if advised'],
            ['value' => 'Attend follow-up ENT reviews regularly'],
            ['value' => 'Report worsening voice or breathing problems immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary gagging sensation'],
            ['value' => 'Mild throat discomfort'],
            ['value' => 'Rare nasal irritation or bleeding'],
            ['value' => 'Temporary voice fatigue'],
            ['value' => 'Anxiety during examination'],
        ],
                'long_term_outlook' => 'Laryngoscopy and stroboscopy improve diagnosis and treatment of voice disorders, supporting better vocal performance and long-term airway health.',
                'conclusion' => '',
                'seo_title' => 'Laryngoscopy & Stroboscopy Equipment',
                'seo_description' => 'Laryngoscopy and stroboscopy equipment are advanced ENT diagnostic systems used to examine the vocal cords, larynx, and upper airway in detail. Stroboscopy provides slow-motion visualization of vocal cord vibration, helping diagnose subtle voice disorders. These systems are essential in voice clinics and ENT practice.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
