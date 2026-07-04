<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OtoscopeVideoOtoscopeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Otoscope & Video Otoscope')],
            [
                'title' => 'Otoscope & Video Otoscope',
                'slug' => Str::slug('Otoscope & Video Otoscope'),
                'introduction' => 'An otoscope and video otoscope are diagnostic instruments used to examine the ear canal and eardrum for infections, wax buildup, perforations, and other ear disorders. Video otoscopes provide magnified digital images that improve visualization and patient education. These tools are essential for accurate ear diagnosis and treatment planning.',
                'what_is' => 'The otoscope uses light and magnification to examine the external ear canal and tympanic membrane. Video otoscopes provide: High-resolution digital imaging Magnified ear examination Real-time display on monitors Image recording for documentation Better patient understanding These instruments help diagnose: Ear infections Wax impaction Eardrum perforation Foreign bodies Middle ear disease They are commonly used in both adult and pediatric ENT evaluations.',
                'symptoms' => [
            ['value' => 'Ear pain'],
            ['value' => 'Hearing difficulty'],
            ['value' => 'Ear discharge'],
            ['value' => 'Ringing in the ears'],
            ['value' => 'Ear blockage sensation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild discomfort during examination'],
            ['value' => 'Temporary irritation of the ear canal'],
            ['value' => 'Rare minor injury if the patient moves suddenly'],
            ['value' => 'Anxiety in young children'],
            ['value' => 'Rare infection transmission without proper sterilization'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep ears dry if advised'],
            ['value' => 'Avoid inserting objects into the ears'],
            ['value' => 'Use prescribed ear drops correctly'],
            ['value' => 'Attend follow-up ear evaluations'],
            ['value' => 'Report worsening pain or discharge immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during examination'],
            ['value' => 'Temporary irritation of the ear canal'],
            ['value' => 'Rare minor injury if the patient moves suddenly'],
            ['value' => 'Anxiety in young children'],
            ['value' => 'Rare infection transmission without proper sterilization'],
        ],
                'long_term_outlook' => 'Regular ear examination using otoscopy helps detect ear disorders early and supports long-term hearing preservation and ear health.',
                'conclusion' => '',
                'seo_title' => 'Otoscope & Video Otoscope',
                'seo_description' => 'An otoscope and video otoscope are diagnostic instruments used to examine the ear canal and eardrum for infections, wax buildup, perforations, and other ear disorders. Video otoscopes provide magnified digital images that improve visualization and patient education. These tools are essential for accurate ear diagnosis and treatment planning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
