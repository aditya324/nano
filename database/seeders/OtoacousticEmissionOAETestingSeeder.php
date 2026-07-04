<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OtoacousticEmissionOAETestingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Otoacoustic Emission (OAE) Testing')],
            [
                'title' => 'Otoacoustic Emission (OAE) Testing',
                'slug' => Str::slug('Otoacoustic Emission (OAE) Testing'),
                'introduction' => 'Otoacoustic Emission (OAE) testing is a specialized hearing screening test used to evaluate inner ear (cochlear) function, especially in newborns and young children. The test helps detect hearing impairment at an early stage before speech and developmental delays occur. It is painless, quick, and highly effective for hearing screening.',
                'what_is' => 'A small probe is placed inside the ear canal, which delivers soft sounds and records echo responses produced by the inner ear. OAE testing is commonly used for: Newborn hearing screening Pediatric hearing assessment Cochlear function evaluation Monitoring hearing damage The test does not require active patient participation and is especially useful in infants.',
                'symptoms' => [
            ['value' => 'Delayed speech development'],
            ['value' => 'Poor response to sounds'],
            ['value' => 'Suspected hearing impairment'],
            ['value' => 'High-risk newborn hearing screening'],
            ['value' => 'Family history of hearing loss'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'No significant medical risks'],
            ['value' => 'Mild temporary discomfort from probe placement'],
            ['value' => 'Difficulty obtaining results in restless children'],
            ['value' => 'False-positive results due to ear canal blockage'],
            ['value' => 'Need for additional hearing tests in some cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up hearing assessments if advised'],
            ['value' => 'Monitor speech and language development carefully'],
            ['value' => 'Seek early intervention for confirmed hearing loss'],
            ['value' => 'Maintain regular pediatric and ENT check-ups'],
            ['value' => 'Protect ears from infections and loud noises'],
        ],
                'surgery_risks' => [
            ['value' => 'No significant medical risks'],
            ['value' => 'Mild temporary discomfort from probe placement'],
            ['value' => 'Difficulty obtaining results in restless children'],
            ['value' => 'False-positive results due to ear canal blockage'],
            ['value' => 'Need for additional hearing tests in some cases'],
        ],
                'long_term_outlook' => 'Early OAE screening improves detection of hearing loss and supports timely rehabilitation, speech development, and long-term communication outcomes.',
                'conclusion' => '',
                'seo_title' => 'Otoacoustic Emission (OAE) Testing',
                'seo_description' => 'Otoacoustic Emission (OAE) testing is a specialized hearing screening test used to evaluate inner ear (cochlear) function, especially in newborns and young children. The test helps detect hearing impairment at an early stage before speech and developmental delays occur. It is painless, quick, and highly effective for hearing screening.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
