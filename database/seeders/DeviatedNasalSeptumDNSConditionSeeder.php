<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeviatedNasalSeptumDNSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Deviated Nasal Septum (DNS)')],
            [
                'name' => 'Deviated Nasal Septum (DNS)',
                'slug' => Str::slug('Deviated Nasal Septum (DNS)'),
                'h1' => 'Deviated Nasal Septum (DNS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Deviated nasal septum is a condition where the wall separating the two nasal passages is displaced to one side, causing nasal obstruction and breathing difficulty.',
                'about_more' => '',
                'overview' => 'Deviated nasal septum is a condition where the wall separating the two nasal passages is displaced to one side, causing nasal obstruction and breathing difficulty.',
                'symptoms' => [
            ['value' => 'One-sided or bilateral nasal blockage'],
            ['value' => 'Difficulty breathing through the nose'],
            ['value' => 'Snoring or disturbed sleep'],
            ['value' => 'Frequent sinus infections'],
            ['value' => 'Nosebleeds or facial discomfort'],
        ],
                'causes' => [
            ['value' => 'Congenital nasal deformity'],
            ['value' => 'Nasal trauma or injury'],
            ['value' => 'Abnormal growth of nasal cartilage'],
            ['value' => 'Sports-related facial injuries'],
            ['value' => 'Aging-related structural changes'],
        ],
                'risks' => [
            ['value' => 'Chronic nasal obstruction'],
            ['value' => 'Recurrent sinusitis'],
            ['value' => 'Sleep disturbances and snoring'],
            ['value' => 'Mouth breathing and throat dryness'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT nasal examination and imaging'],
            ['value' => 'Nasal sprays and allergy treatment'],
            ['value' => 'Septoplasty surgery for correction'],
            ['value' => 'Management of associated sinus disease'],
            ['value' => 'Post-surgical breathing rehabilitation'],
        ],
                'recovery' => 'Surgical correction usually provides excellent improvement in breathing and nasal airflow.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Deviated Nasal Septum (DNS)',
                'meta_description' => 'Deviated nasal septum is a condition where the wall separating the two nasal passages is displaced to one side, causing nasal obstruction and breathing difficul',
                'meta_keywords' => '',
            ]
        );
    }
}
