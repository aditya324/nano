<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OssiculoplastySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ossiculoplasty')],
            [
                'title' => 'Ossiculoplasty',
                'slug' => Str::slug('Ossiculoplasty'),
                'introduction' => 'Ossiculoplasty is a surgical procedure performed to repair or reconstruct the small hearing bones (ossicles) of the middle ear to improve hearing. Damage to these bones may occur due to chronic infection, trauma, or cholesteatoma. The surgery helps restore sound transmission from the eardrum to the inner ear.',
                'what_is' => 'The ENT surgeon repairs or replaces damaged ossicles using natural bone, cartilage, or artificial prosthetic materials. The procedure is commonly performed along with: Tympanoplasty Mastoidectomy Cholesteatoma surgery Ossiculoplasty aims to: Improve hearing Restore middle ear function Reduce conductive hearing loss Prevent further middle ear complications Microscopic surgical techniques improve precision and outcomes.',
                'symptoms' => [
            ['value' => 'Hearing loss'],
            ['value' => 'Chronic ear infection'],
            ['value' => 'Ear discharge'],
            ['value' => 'Reduced sound clarity'],
            ['value' => 'History of middle ear disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Incomplete hearing improvement'],
            ['value' => 'Infection'],
            ['value' => 'Dizziness'],
            ['value' => 'Prosthesis displacement'],
            ['value' => 'Rare sensorineural hearing loss'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Protect the ear from water exposure'],
            ['value' => 'Avoid pressure changes or forceful sneezing'],
            ['value' => 'Use medications as prescribed'],
            ['value' => 'Attend hearing follow-up evaluations'],
            ['value' => 'Avoid heavy activity temporarily'],
        ],
                'surgery_risks' => [
            ['value' => 'Incomplete hearing improvement'],
            ['value' => 'Infection'],
            ['value' => 'Dizziness'],
            ['value' => 'Prosthesis displacement'],
            ['value' => 'Rare sensorineural hearing loss'],
        ],
                'long_term_outlook' => 'Ossiculoplasty can significantly improve hearing and middle ear function. Long-term success depends on proper healing and control of underlying ear disease.',
                'conclusion' => '',
                'seo_title' => 'Ossiculoplasty',
                'seo_description' => 'Ossiculoplasty is a surgical procedure performed to repair or reconstruct the small hearing bones (ossicles) of the middle ear to improve hearing. Damage to these bones may occur due to chronic infection, trauma, or cholesteatoma. The surgery helps restore sound transmission from the eardrum to the inner ear.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
