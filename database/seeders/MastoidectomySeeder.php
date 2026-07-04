<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MastoidectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Mastoidectomy')],
            [
                'title' => 'Mastoidectomy',
                'slug' => Str::slug('Mastoidectomy'),
                'introduction' => 'Mastoidectomy is an ENT surgical procedure performed to remove infected or diseased air cells within the mastoid bone located behind the ear. The surgery is commonly required for chronic ear infections, cholesteatoma, or complications involving the middle ear and mastoid region. It helps eliminate infection, prevent complications, and preserve hearing function.',
                'what_is' => 'The procedure is performed under general anesthesia using microscopic surgical techniques. The ENT surgeon removes infected mastoid air cells and diseased tissue while preserving important nearby structures whenever possible. Mastoidectomy may be recommended for: Chronic ear infection Cholesteatoma Mastoid bone infection Persistent ear discharge Complications of middle ear disease Different types of mastoidectomy may be performed depending on disease severity and hearing status.',
                'symptoms' => [
            ['value' => 'Chronic ear discharge'],
            ['value' => 'Hearing loss'],
            ['value' => 'Ear pain or swelling'],
            ['value' => 'Dizziness'],
            ['value' => 'Recurrent ear infections'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Hearing deterioration'],
            ['value' => 'Dizziness or balance disturbance'],
            ['value' => 'Facial nerve injury'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Persistent ear disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the ear dressing clean and dry'],
            ['value' => 'Take prescribed medications regularly'],
            ['value' => 'Avoid water entering the ear'],
            ['value' => 'Attend follow-up ear cleaning appointments'],
            ['value' => 'Report fever, swelling, or dizziness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Hearing deterioration'],
            ['value' => 'Dizziness or balance disturbance'],
            ['value' => 'Facial nerve injury'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Persistent ear disease'],
        ],
                'long_term_outlook' => 'Mastoidectomy effectively controls chronic ear disease and reduces serious complications. Long-term hearing preservation and infection control improve with proper follow-up care.',
                'conclusion' => '',
                'seo_title' => 'Mastoidectomy',
                'seo_description' => 'Mastoidectomy is an ENT surgical procedure performed to remove infected or diseased air cells within the mastoid bone located behind the ear. The surgery is commonly required for chronic ear infections, cholesteatoma, or complications involving the middle ear and mastoid region. It helps eliminate infection, prevent complications, and preserve hearing function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
