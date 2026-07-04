<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleRadiologyRemoteReportingServicesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tele-Radiology / Remote Reporting Services')],
            [
                'name' => 'Tele-Radiology / Remote Reporting Services',
                'slug' => Str::slug('Tele-Radiology / Remote Reporting Services'),
                'h1' => 'Tele-Radiology / Remote Reporting Services',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tele-radiology and remote reporting services involve the digital transmission and interpretation of medical imaging studies by radiologists from remote locations. These services allow healthcare providers to access expert radiology consultations, timely reporting, and continuous imaging support regardless of geographic location.',
                'about_more' => '',
                'overview' => 'Tele-radiology enables the secure sharing of imaging studies such as X-rays, CT scans, MRI, ultrasound, mammography, and PET-CT scans through digital networks for remote interpretation by qualified radiologists. Remote reporting services support hospitals, emergency departments, diagnostic centers, and healthcare facilities by providing faster diagnosis, second opinions, subspecialty consultations, and 24/7 radiology coverage. These systems improve accessibility, workflow efficiency, and continuity of patient care.',
                'symptoms' => [
            ['value' => 'Conditions requiring urgent imaging interpretation'],
            ['value' => 'Persistent pain or unexplained medical symptoms'],
            ['value' => 'Trauma, neurological, or cardiovascular emergencies'],
            ['value' => 'Suspicion of tumors, infections, or organ abnormalities'],
            ['value' => 'Need for specialist imaging review or second opinion'],
        ],
                'causes' => [
            ['value' => 'Remote interpretation of diagnostic imaging studies'],
            ['value' => 'Emergency and after-hours radiology reporting'],
            ['value' => 'Specialist consultation for complex imaging findings'],
            ['value' => 'Second-opinion radiology evaluations'],
            ['value' => 'Long-term imaging follow-up and multidisciplinary care support'],
        ],
                'risks' => [
            ['value' => 'Technical or network-related communication delays'],
            ['value' => 'Limited access during system or connectivity failures'],
            ['value' => 'Need for repeat imaging if image quality is inadequate'],
            ['value' => 'Data security and patient privacy considerations'],
            ['value' => 'Possible delay in urgent intervention if communication is interrupted'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Tele-radiology supports rapid diagnosis, emergency care, treatment planning, oncology monitoring, trauma evaluation, and long-term disease management. Remote reporting services help healthcare teams make timely medical decisions while improving access to expert radiology interpretation and subspecialty care.'],
            ['value' => 'Following up with healthcare providers regarding imaging results'],
            ['value' => 'Attending additional imaging or specialist consultations if advised'],
            ['value' => 'Maintaining regular medical follow-up and treatment plans'],
            ['value' => 'Monitoring symptoms and reporting worsening conditions promptly'],
            ['value' => 'Ensuring timely access to reports and medical records when required'],
        ],
                'recovery' => 'The long-term outlook with tele-radiology and remote reporting services is highly positive because these systems improve access to expert radiology care, reduce reporting delays, and support timely diagnosis and treatment. Continuous technological advancement, secure communication systems, and multidisciplinary collaboration play an important role in improving long-term patient care and healthcare efficiency. ___________________________ 23. Radiology Safety & Radiation Dose Monitoring Radiology Safety & Radiation Dose Monitoring Procedures',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Tele-Radiology / Remote Reporting Services',
                'meta_description' => 'Tele-radiology and remote reporting services involve the digital transmission and interpretation of medical imaging studies by radiologists from remote location',
                'meta_keywords' => '',
            ]
        );
    }
}
