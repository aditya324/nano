<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicSuppurativeOtitisMediaCSOMConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Suppurative Otitis Media (CSOM)')],
            [
                'name' => 'Chronic Suppurative Otitis Media (CSOM)',
                'slug' => Str::slug('Chronic Suppurative Otitis Media (CSOM)'),
                'h1' => 'Chronic Suppurative Otitis Media (CSOM)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic suppurative otitis media is a long-standing middle ear infection associated with persistent ear discharge and eardrum perforation. It can significantly affect hearing and quality of life.',
                'about_more' => '',
                'overview' => 'Chronic suppurative otitis media is a long-standing middle ear infection associated with persistent ear discharge and eardrum perforation. It can significantly affect hearing and quality of life.',
                'symptoms' => [
            ['value' => 'Persistent ear discharge'],
            ['value' => 'Hearing loss or blocked hearing'],
            ['value' => 'Foul-smelling ear fluid'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Ear discomfort or fullness'],
        ],
                'causes' => [
            ['value' => 'Untreated acute ear infections'],
            ['value' => 'Chronic eardrum perforation'],
            ['value' => 'Poor middle ear ventilation'],
            ['value' => 'Recurrent upper respiratory infections'],
            ['value' => 'Poor hygiene and delayed treatment'],
        ],
                'risks' => [
            ['value' => 'Permanent hearing loss'],
            ['value' => 'Mastoid bone infection'],
            ['value' => 'Cholesteatoma formation'],
            ['value' => 'Facial nerve complications'],
            ['value' => 'Rare brain infection or abscess'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ear cleaning and suction procedures'],
            ['value' => 'Antibiotic ear drops and medications'],
            ['value' => 'Tympanoplasty or mastoid surgery'],
            ['value' => 'Hearing evaluation and rehabilitation'],
            ['value' => 'Regular ENT monitoring and follow-up'],
        ],
                'recovery' => 'With proper medical and surgical care, most patients improve significantly. Delayed treatment increases the risk of hearing damage.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Chronic Suppurative Otitis Media (CSOM)',
                'meta_description' => 'Chronic suppurative otitis media is a long-standing middle ear infection associated with persistent ear discharge and eardrum perforation. It can significantly ',
                'meta_keywords' => '',
            ]
        );
    }
}
