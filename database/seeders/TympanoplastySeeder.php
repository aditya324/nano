<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TympanoplastySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tympanoplasty')],
            [
                'title' => 'Tympanoplasty',
                'slug' => Str::slug('Tympanoplasty'),
                'introduction' => 'Tympanoplasty is a surgical procedure performed to repair a damaged or perforated eardrum and improve hearing function. The surgery also helps treat chronic middle ear infections and protects the middle ear from recurrent disease. It aims to restore normal ear anatomy and hearing ability.',
                'what_is' => 'The ENT surgeon repairs the eardrum using tissue grafts taken from nearby structures. The procedure may also involve reconstruction of middle ear bones if necessary. Tympanoplasty is commonly recommended for: Chronic ear discharge Eardrum perforation Hearing loss due to middle ear disease Recurrent middle ear infections The surgery is usually performed under general anesthesia.',
                'symptoms' => [
            ['value' => 'Chronic ear discharge'],
            ['value' => 'Hearing loss'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Ear discomfort'],
            ['value' => 'Ringing in the ears'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Persistent perforation'],
            ['value' => 'Temporary dizziness'],
            ['value' => 'Incomplete hearing improvement'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the ear dry during healing'],
            ['value' => 'Avoid forceful nose blowing'],
            ['value' => 'Use medications as prescribed'],
            ['value' => 'Attend follow-up ear examinations'],
            ['value' => 'Avoid heavy physical activity temporarily'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Persistent perforation'],
            ['value' => 'Temporary dizziness'],
            ['value' => 'Incomplete hearing improvement'],
        ],
                'long_term_outlook' => 'Tympanoplasty successfully improves hearing and reduces recurrent ear infections in many patients. Long-term outcomes are generally excellent with proper follow-up care.',
                'conclusion' => '',
                'seo_title' => 'Tympanoplasty',
                'seo_description' => 'Tympanoplasty is a surgical procedure performed to repair a damaged or perforated eardrum and improve hearing function. The surgery also helps treat chronic middle ear infections and protects the middle ear from recurrent disease. It aims to restore normal ear anatomy and hearing ability.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
