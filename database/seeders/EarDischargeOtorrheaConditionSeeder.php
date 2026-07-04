<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EarDischargeOtorrheaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ear Discharge (Otorrhea)')],
            [
                'name' => 'Ear Discharge (Otorrhea)',
                'slug' => Str::slug('Ear Discharge (Otorrhea)'),
                'h1' => 'Ear Discharge (Otorrhea)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ear discharge, or otorrhea, refers to fluid, pus, blood, or wax draining from the ear. It commonly occurs due to ear infections, eardrum perforation, trauma, or chronic ear disease. Persistent discharge requires ENT evaluation to identify the underlying cause.',
                'about_more' => '',
                'overview' => 'Ear discharge, or otorrhea, refers to fluid, pus, blood, or wax draining from the ear. It commonly occurs due to ear infections, eardrum perforation, trauma, or chronic ear disease. Persistent discharge requires ENT evaluation to identify the underlying cause.',
                'symptoms' => [
            ['value' => 'Fluid or pus leaking from the ear'],
            ['value' => 'Ear pain or discomfort'],
            ['value' => 'Hearing difficulty or blocked sensation'],
            ['value' => 'Foul-smelling discharge'],
            ['value' => 'Fever or dizziness in severe cases'],
        ],
                'causes' => [
            ['value' => 'Middle ear infections with eardrum perforation'],
            ['value' => 'Chronic suppurative otitis media (CSOM)'],
            ['value' => 'Otitis externa or fungal infections'],
            ['value' => 'Ear trauma or foreign body injury'],
            ['value' => 'Excessive moisture exposure or swimming'],
        ],
                'risks' => [
            ['value' => 'Chronic ear infection and hearing loss'],
            ['value' => 'Spread of infection to surrounding tissues'],
            ['value' => 'Persistent eardrum perforation'],
            ['value' => 'Dizziness and balance problems'],
            ['value' => 'Rare intracranial complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ear examination and suction cleaning'],
            ['value' => 'Antibiotic or antifungal ear drops'],
            ['value' => 'Oral medications for severe infection'],
            ['value' => 'Tympanoplasty or ear surgery if needed'],
            ['value' => 'Keeping the ear dry and protected'],
        ],
                'recovery' => 'Most patients recover well with appropriate treatment. Chronic untreated discharge may lead to hearing damage and long-term ear disease.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Ear Discharge (Otorrhea)',
                'meta_description' => 'Ear discharge, or otorrhea, refers to fluid, pus, blood, or wax draining from the ear. It commonly occurs due to ear infections, eardrum perforation, trauma, or',
                'meta_keywords' => '',
            ]
        );
    }
}
