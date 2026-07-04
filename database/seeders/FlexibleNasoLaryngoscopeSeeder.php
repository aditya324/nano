<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FlexibleNasoLaryngoscopeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Flexible Naso-Laryngoscope')],
            [
                'title' => 'Flexible Naso-Laryngoscope',
                'slug' => Str::slug('Flexible Naso-Laryngoscope'),
                'introduction' => 'A flexible naso-laryngoscope is a thin, flexible fiberoptic instrument used to examine the nose, throat, voice box, and upper airway structures. It allows ENT specialists to assess voice disorders, swallowing problems, airway obstruction, and throat abnormalities with minimal discomfort. The procedure provides real-time visualization of moving airway structures.',
                'what_is' => 'The flexible scope is inserted gently through the nose after applying local anesthetic spray. It helps evaluate: Hoarseness Vocal cord movement Swallowing disorders Airway narrowing Throat tumors Chronic cough The procedure is quick, minimally invasive, and commonly performed in outpatient settings. Video recording systems may also be connected for documentation and teaching purposes.',
                'symptoms' => [
            ['value' => 'Persistent hoarseness'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Chronic throat irritation'],
            ['value' => 'Breathing difficulty'],
            ['value' => 'Voice changes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild nasal irritation'],
            ['value' => 'Temporary gagging sensation'],
            ['value' => 'Sneezing or watery eyes'],
            ['value' => 'Rare minor bleeding'],
            ['value' => 'Temporary throat discomfort'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid eating briefly if throat spray was used'],
            ['value' => 'Maintain hydration properly'],
            ['value' => 'Follow prescribed ENT treatment plans'],
            ['value' => 'Attend follow-up appointments regularly'],
            ['value' => 'Report persistent bleeding or breathing difficulty immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild nasal irritation'],
            ['value' => 'Temporary gagging sensation'],
            ['value' => 'Sneezing or watery eyes'],
            ['value' => 'Rare minor bleeding'],
            ['value' => 'Temporary throat discomfort'],
        ],
                'long_term_outlook' => 'Flexible naso-laryngoscopy supports accurate diagnosis of airway and voice disorders, enabling early treatment and better long-term outcomes.',
                'conclusion' => '',
                'seo_title' => 'Flexible Naso-Laryngoscope',
                'seo_description' => 'A flexible naso-laryngoscope is a thin, flexible fiberoptic instrument used to examine the nose, throat, voice box, and upper airway structures. It allows ENT specialists to assess voice disorders, swallowing problems, airway obstruction, and throat abnormalities with minimal discomfort. The procedure provides real-time visualization of moving airway structures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
