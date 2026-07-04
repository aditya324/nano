<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicroEarSurgeryInstrumentSetsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Micro Ear Surgery Instrument Sets')],
            [
                'title' => 'Micro Ear Surgery Instrument Sets',
                'slug' => Str::slug('Micro Ear Surgery Instrument Sets'),
                'introduction' => 'Micro ear surgery instrument sets are specialized microsurgical tools designed for delicate ear surgeries involving the eardrum, middle ear bones, and mastoid region. These precision instruments allow ENT surgeons to operate safely within the small structures of the ear. They are essential for advanced otologic surgery.',
                'what_is' => 'The instrument sets may include: Fine forceps Micro scissors Suction tips Picks and dissectors Ear speculums Microsurgical drills They are commonly used for: Tympanoplasty Mastoidectomy Ossiculoplasty Cholesteatoma surgery Cochlear implant procedures The instruments are designed for high precision and minimal tissue damage.',
                'symptoms' => [
            ['value' => 'Chronic ear infections'],
            ['value' => 'Hearing loss requiring surgery'],
            ['value' => 'Cholesteatoma'],
            ['value' => 'Eardrum perforation'],
            ['value' => 'Middle ear disease complications'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Hearing deterioration'],
            ['value' => 'Instrument-related tissue injury'],
            ['value' => 'Technical surgical complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the operated ear dry'],
            ['value' => 'Attend regular postoperative follow-up visits'],
            ['value' => 'Use medications exactly as prescribed'],
            ['value' => 'Avoid pressure changes or heavy exertion temporarily'],
            ['value' => 'Report dizziness or severe pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Hearing deterioration'],
            ['value' => 'Instrument-related tissue injury'],
            ['value' => 'Technical surgical complications'],
        ],
                'long_term_outlook' => 'Micro ear surgical equipment supports precise and effective ear surgery, improving hearing outcomes and long-term ear disease control.',
                'conclusion' => '',
                'seo_title' => 'Micro Ear Surgery Instrument Sets',
                'seo_description' => 'Micro ear surgery instrument sets are specialized microsurgical tools designed for delicate ear surgeries involving the eardrum, middle ear bones, and mastoid region. These precision instruments allow ENT surgeons to operate safely within the small structures of the ear. They are essential for advanced otologic surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
