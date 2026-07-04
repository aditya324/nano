<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MyringoplastySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Myringoplasty')],
            [
                'title' => 'Myringoplasty',
                'slug' => Str::slug('Myringoplasty'),
                'introduction' => 'Myringoplasty is a surgical procedure performed specifically to repair a hole or perforation in the eardrum without reconstruction of middle ear bones. The surgery helps protect the middle ear from infection and improves hearing. It is commonly performed for chronic eardrum perforations.',
                'what_is' => 'The surgeon places a tissue graft over the perforated area of the eardrum using microscopic or endoscopic techniques. Myringoplasty is recommended for: Persistent eardrum perforation Recurrent ear infections Hearing loss due to perforation Water entering the middle ear The procedure is usually minimally invasive and performed under anesthesia.',
                'symptoms' => [
            ['value' => 'Hearing difficulty'],
            ['value' => 'Ear discharge'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Ear sensitivity to water'],
            ['value' => 'Ringing in the ear'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Graft failure'],
            ['value' => 'Infection'],
            ['value' => 'Temporary dizziness'],
            ['value' => 'Bleeding'],
            ['value' => 'Persistent hearing problems'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the operated ear dry'],
            ['value' => 'Avoid swimming temporarily'],
            ['value' => 'Avoid forceful sneezing or nose blowing'],
            ['value' => 'Use prescribed ear medications properly'],
            ['value' => 'Attend scheduled ENT follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Graft failure'],
            ['value' => 'Infection'],
            ['value' => 'Temporary dizziness'],
            ['value' => 'Bleeding'],
            ['value' => 'Persistent hearing problems'],
        ],
                'long_term_outlook' => 'Myringoplasty provides excellent long-term results in repairing eardrum perforations and improving ear protection and hearing function.',
                'conclusion' => '',
                'seo_title' => 'Myringoplasty',
                'seo_description' => 'Myringoplasty is a surgical procedure performed specifically to repair a hole or perforation in the eardrum without reconstruction of middle ear bones. The surgery helps protect the middle ear from infection and improves hearing. It is commonly performed for chronic eardrum perforations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
