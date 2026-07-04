<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicrolaryngoscopySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Microlaryngoscopy')],
            [
                'title' => 'Microlaryngoscopy',
                'slug' => Str::slug('Microlaryngoscopy'),
                'introduction' => 'Microlaryngoscopy is a specialized ENT procedure used to examine and treat disorders of the larynx (voice box) and vocal cords using a microscope and precision instruments. The procedure allows detailed visualization of the vocal cords and surrounding structures for diagnosis and treatment. It is commonly used for voice disorders, vocal cord lesions, and airway abnormalities.',
                'what_is' => 'The procedure is performed under general anesthesia. A laryngoscope is inserted through the mouth to expose the vocal cords while a surgical microscope provides magnified visualization. Microlaryngoscopy may be used for: Vocal cord nodules or polyps Hoarseness evaluation Biopsy of suspicious lesions Removal of benign growths Airway assessment The procedure provides highly accurate examination and precise surgical treatment of delicate laryngeal tissues.',
                'symptoms' => [
            ['value' => 'Persistent hoarseness'],
            ['value' => 'Voice changes'],
            ['value' => 'Difficulty speaking'],
            ['value' => 'Throat discomfort'],
            ['value' => 'Breathing difficulty related to vocal cord lesions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary sore throat'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Voice strain during recovery'],
            ['value' => 'Rare airway swelling'],
            ['value' => 'Infection risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow voice rest recommendations'],
            ['value' => 'Avoid shouting or excessive talking'],
            ['value' => 'Maintain hydration properly'],
            ['value' => 'Avoid smoking and irritants'],
            ['value' => 'Attend follow-up ENT evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary sore throat'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Voice strain during recovery'],
            ['value' => 'Rare airway swelling'],
            ['value' => 'Infection risk'],
        ],
                'long_term_outlook' => 'Microlaryngoscopy helps diagnose and treat voice disorders effectively. Early treatment improves vocal quality and reduces long-term laryngeal complications.',
                'conclusion' => '',
                'seo_title' => 'Microlaryngoscopy',
                'seo_description' => 'Microlaryngoscopy is a specialized ENT procedure used to examine and treat disorders of the larynx (voice box) and vocal cords using a microscope and precision instruments. The procedure allows detailed visualization of the vocal cords and surrounding structures for diagnosis and treatment. It is commonly used for voice disorders, vocal cord lesions, and airway abnormalities.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
