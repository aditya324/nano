<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicroscopicEarExaminationFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Microscopic Ear Examination Facility')],
            [
                'title' => 'Microscopic Ear Examination Facility',
                'slug' => Str::slug('Microscopic Ear Examination Facility'),
                'introduction' => 'A microscopic ear examination facility is an advanced ENT setup that uses a high-powered operating microscope to examine the ear canal, eardrum, and middle ear structures in detail. The facility improves visualization, diagnostic precision, and accuracy during ear procedures. It is essential for both outpatient ear examinations and microsurgical treatments.',
                'what_is' => 'The operating microscope provides: Magnified visualization Bright illumination Depth perception Precise examination of delicate ear structures The facility is commonly used for: Ear infection assessment Eardrum evaluation Wax removal Foreign body removal Microsuction procedures Pre-surgical assessment Enhanced visualization helps ENT specialists diagnose subtle ear abnormalities effectively.',
                'symptoms' => [
            ['value' => 'Chronic ear discharge'],
            ['value' => 'Hearing loss'],
            ['value' => 'Ear pain'],
            ['value' => 'Eardrum perforation suspicion'],
            ['value' => 'Recurrent ear infections'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild discomfort during examination'],
            ['value' => 'Temporary dizziness during ear cleaning'],
            ['value' => 'Rare minor ear canal irritation'],
            ['value' => 'Anxiety in pediatric patients'],
            ['value' => 'Temporary sensitivity to bright light'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep ears dry if advised'],
            ['value' => 'Avoid inserting objects into the ear canal'],
            ['value' => 'Use prescribed ear medications properly'],
            ['value' => 'Attend follow-up ear examinations'],
            ['value' => 'Report worsening discharge or pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during examination'],
            ['value' => 'Temporary dizziness during ear cleaning'],
            ['value' => 'Rare minor ear canal irritation'],
            ['value' => 'Anxiety in pediatric patients'],
            ['value' => 'Temporary sensitivity to bright light'],
        ],
                'long_term_outlook' => 'Microscopic ear examination improves early diagnosis and precise treatment of ear diseases, helping preserve hearing and long-term ear health.',
                'conclusion' => '',
                'seo_title' => 'Microscopic Ear Examination Facility',
                'seo_description' => 'A microscopic ear examination facility is an advanced ENT setup that uses a high-powered operating microscope to examine the ear canal, eardrum, and middle ear structures in detail. The facility improves visualization, diagnostic precision, and accuracy during ear procedures. It is essential for both outpatient ear examinations and microsurgical treatments.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
