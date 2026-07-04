<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EustachianTubeDysfunctionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Eustachian Tube Dysfunction')],
            [
                'name' => 'Eustachian Tube Dysfunction',
                'slug' => Str::slug('Eustachian Tube Dysfunction'),
                'h1' => 'Eustachian Tube Dysfunction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Eustachian tube dysfunction occurs when the tube connecting the middle ear to the throat becomes blocked or fails to function properly. This leads to pressure imbalance and fluid buildup in the middle ear.',
                'about_more' => '',
                'overview' => 'Eustachian tube dysfunction occurs when the tube connecting the middle ear to the throat becomes blocked or fails to function properly. This leads to pressure imbalance and fluid buildup in the middle ear.',
                'symptoms' => [
            ['value' => 'Ear fullness or pressure'],
            ['value' => 'Muffled hearing'],
            ['value' => 'Popping or clicking sounds in the ear'],
            ['value' => 'Mild dizziness or imbalance'],
            ['value' => 'Ear discomfort during altitude changes'],
        ],
                'causes' => [
            ['value' => 'Allergies and nasal congestion'],
            ['value' => 'Upper respiratory infections'],
            ['value' => 'Enlarged adenoids'],
            ['value' => 'Sudden pressure changes during flying'],
            ['value' => 'Chronic sinus problems'],
        ],
                'risks' => [
            ['value' => 'Recurrent middle ear infections'],
            ['value' => 'Temporary hearing loss'],
            ['value' => 'Fluid buildup behind the eardrum'],
            ['value' => 'Chronic ear pressure discomfort'],
            ['value' => 'Eardrum damage in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal decongestants and antihistamines'],
            ['value' => 'Steam inhalation and hydration'],
            ['value' => 'Treatment of allergies or sinus disease'],
            ['value' => 'Ear pressure equalization exercises'],
            ['value' => 'Ear tube insertion in chronic cases'],
        ],
                'recovery' => 'Most patients recover with medical treatment and pressure management. Chronic dysfunction may require ENT procedures.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Eustachian Tube Dysfunction',
                'meta_description' => 'Eustachian tube dysfunction occurs when the tube connecting the middle ear to the throat becomes blocked or fails to function properly. This leads to pressure i',
                'meta_keywords' => '',
            ]
        );
    }
}
