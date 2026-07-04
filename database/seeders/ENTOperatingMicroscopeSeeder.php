<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ENTOperatingMicroscopeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ENT Operating Microscope')],
            [
                'title' => 'ENT Operating Microscope',
                'slug' => Str::slug('ENT Operating Microscope'),
                'introduction' => 'An ENT operating microscope is a specialized surgical microscope used during delicate ENT procedures involving the ear, nose, throat, and larynx. The microscope provides high magnification and illumination, allowing surgeons to perform precise microsurgical procedures safely. It is especially important in ear and laryngeal surgeries.',
                'what_is' => 'The microscope offers: High-definition magnification Adjustable focus Bright shadow-free illumination Fine surgical precision It is commonly used in: Tympanoplasty Mastoidectomy Ossiculoplasty Microlaryngoscopy Cochlear implant surgery The equipment improves surgical accuracy, tissue preservation, and patient outcomes.',
                'symptoms' => [
            ['value' => 'Chronic ear disease requiring surgery'],
            ['value' => 'Hearing loss'],
            ['value' => 'Vocal cord disorders'],
            ['value' => 'Ear infections with complications'],
            ['value' => 'Middle ear structural damage'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Prolonged surgery-related fatigue'],
            ['value' => 'Technical equipment malfunction'],
            ['value' => 'Rare surgical precision-related complications'],
            ['value' => 'Visual strain for surgical staff'],
            ['value' => 'Usual surgical risks depending on the procedure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow surgical recovery instructions carefully'],
            ['value' => 'Attend scheduled ENT follow-up visits'],
            ['value' => 'Maintain ear or throat hygiene properly'],
            ['value' => 'Take medications regularly'],
            ['value' => 'Report unusual symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Prolonged surgery-related fatigue'],
            ['value' => 'Technical equipment malfunction'],
            ['value' => 'Rare surgical precision-related complications'],
            ['value' => 'Visual strain for surgical staff'],
            ['value' => 'Usual surgical risks depending on the procedure'],
        ],
                'long_term_outlook' => 'Operating microscopes improve ENT surgical precision, reduce complications, and support better long-term hearing and functional outcomes.',
                'conclusion' => '',
                'seo_title' => 'ENT Operating Microscope',
                'seo_description' => 'An ENT operating microscope is a specialized surgical microscope used during delicate ENT procedures involving the ear, nose, throat, and larynx. The microscope provides high magnification and illumination, allowing surgeons to perform precise microsurgical procedures safely. It is especially important in ear and laryngeal surgeries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
