<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VideoEndoscopyRecordingSystemSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Video Endoscopy & Recording System')],
            [
                'title' => 'Video Endoscopy & Recording System',
                'slug' => Str::slug('Video Endoscopy & Recording System'),
                'introduction' => 'A video endoscopy and recording system is an advanced ENT imaging setup used to visualize, document, and record examinations of the ear, nose, throat, and airway. The system improves diagnostic accuracy, patient education, surgical planning, and medical documentation. It is widely used in modern ENT clinics and operation theatres.',
                'what_is' => 'The system includes: High-definition camera Monitor display Recording equipment Endoscopic light source Image storage software It supports: Nasal endoscopy Laryngoscopy Ear endoscopy Surgical visualization Teaching and training Recorded images and videos help monitor disease progression and compare treatment outcomes over time.',
                'symptoms' => [
            ['value' => 'Chronic sinus symptoms'],
            ['value' => 'Voice disorders'],
            ['value' => 'Ear diseases'],
            ['value' => 'Swallowing difficulty'],
            ['value' => 'Airway obstruction symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild discomfort during endoscopic examination'],
            ['value' => 'Temporary irritation'],
            ['value' => 'Minor bleeding during nasal procedures'],
            ['value' => 'Rare infection transmission without sterilization'],
            ['value' => 'Anxiety during procedures in sensitive patients'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow post-endoscopy instructions carefully'],
            ['value' => 'Continue prescribed medications properly'],
            ['value' => 'Attend review appointments regularly'],
            ['value' => 'Avoid nasal trauma after procedures'],
            ['value' => 'Seek medical advice if symptoms worsen'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during endoscopic examination'],
            ['value' => 'Temporary irritation'],
            ['value' => 'Minor bleeding during nasal procedures'],
            ['value' => 'Rare infection transmission without sterilization'],
            ['value' => 'Anxiety during procedures in sensitive patients'],
        ],
                'long_term_outlook' => 'Video endoscopy systems improve ENT diagnostic precision and treatment monitoring, leading to better long-term patient care and surgical outcomes.',
                'conclusion' => '',
                'seo_title' => 'Video Endoscopy & Recording System',
                'seo_description' => 'A video endoscopy and recording system is an advanced ENT imaging setup used to visualize, document, and record examinations of the ear, nose, throat, and airway. The system improves diagnostic accuracy, patient education, surgical planning, and medical documentation. It is widely used in modern ENT clinics and operation theatres.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
