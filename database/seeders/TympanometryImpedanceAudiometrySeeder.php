<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TympanometryImpedanceAudiometrySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tympanometry & Impedance Audiometry')],
            [
                'title' => 'Tympanometry & Impedance Audiometry',
                'slug' => Str::slug('Tympanometry & Impedance Audiometry'),
                'introduction' => 'Tympanometry and impedance audiometry are diagnostic tests used to evaluate middle ear function, eardrum mobility, and pressure changes inside the ear. These tests help diagnose infections, fluid accumulation, eardrum problems, and Eustachian tube dysfunction. They are commonly used in both children and adults.',
                'what_is' => 'A small probe is placed in the ear canal to measure how the eardrum responds to pressure changes and sound signals. The tests help detect: Middle ear fluid Ear infections Eardrum perforation Eustachian tube blockage Ossicular chain problems The procedure is quick, painless, and useful for monitoring middle ear disorders.',
                'symptoms' => [
            ['value' => 'Ear fullness or pressure'],
            ['value' => 'Hearing difficulty'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Ear pain'],
            ['value' => 'Popping sensation in the ears'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild temporary discomfort'],
            ['value' => 'Anxiety in children'],
            ['value' => 'Rare irritation of sensitive ear canals'],
            ['value' => 'Inaccurate results if patient movement occurs'],
            ['value' => 'Temporary ear pressure sensation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ENT treatment as prescribed'],
            ['value' => 'Keep ears protected from infection'],
            ['value' => 'Attend follow-up hearing evaluations'],
            ['value' => 'Avoid inserting objects into the ear canal'],
            ['value' => 'Seek care for worsening symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild temporary discomfort'],
            ['value' => 'Anxiety in children'],
            ['value' => 'Rare irritation of sensitive ear canals'],
            ['value' => 'Inaccurate results if patient movement occurs'],
            ['value' => 'Temporary ear pressure sensation'],
        ],
                'long_term_outlook' => 'Tympanometry supports early diagnosis and monitoring of middle ear disease, helping preserve long-term hearing health.',
                'conclusion' => '',
                'seo_title' => 'Tympanometry & Impedance Audiometry',
                'seo_description' => 'Tympanometry and impedance audiometry are diagnostic tests used to evaluate middle ear function, eardrum mobility, and pressure changes inside the ear. These tests help diagnose infections, fluid accumulation, eardrum problems, and Eustachian tube dysfunction. They are commonly used in both children and adults.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
