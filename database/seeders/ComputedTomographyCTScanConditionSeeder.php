<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComputedTomographyCTScanConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Computed Tomography (CT) Scan')],
            [
                'name' => 'Computed Tomography (CT) Scan',
                'slug' => Str::slug('Computed Tomography (CT) Scan'),
                'h1' => 'Computed Tomography (CT) Scan',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Computed Tomography (CT) scan is an advanced diagnostic imaging procedure that uses X-rays and computer technology to create detailed cross-sectional images of internal organs, bones, blood vessels, and soft tissues. CT scans help healthcare professionals diagnose injuries, infections, tumors, bleeding, and various medical conditions with high accuracy.',
                'about_more' => '',
                'overview' => 'CT scans are commonly performed for the head, chest, abdomen, and pelvis to evaluate a wide range of medical conditions. Head CT scans assess brain injuries, stroke, bleeding, and neurological disorders. Chest CT scans evaluate lung diseases, infections, tumors, and vascular conditions. Abdominal and pelvic CT scans help detect organ abnormalities, infections, tumors, kidney stones, bowel disorders, and internal injuries. CT imaging provides fast and detailed visualization, making it valuable in emergency care and long-term disease monitoring.',
                'symptoms' => [
            ['value' => 'Severe headache or neurological symptoms'],
            ['value' => 'Chest pain, breathing difficulty, or persistent cough'],
            ['value' => 'Abdominal pain, swelling, or digestive problems'],
            ['value' => 'Pelvic pain or unexplained bleeding'],
            ['value' => 'Trauma, injury, or unexplained physical symptoms'],
        ],
                'causes' => [
            ['value' => 'Detection of tumors, infections, or internal bleeding'],
            ['value' => 'Evaluation of stroke, head injury, or neurological conditions'],
            ['value' => 'Assessment of lung disease and chest abnormalities'],
            ['value' => 'Diagnosis of abdominal and pelvic organ disorders'],
            ['value' => 'Surgical planning and long-term disease monitoring'],
        ],
                'risks' => [
            ['value' => 'Exposure to ionizing radiation'],
            ['value' => 'Allergic reaction to contrast material in some individuals'],
            ['value' => 'Temporary nausea or discomfort after contrast injection'],
            ['value' => 'Special precautions required during pregnancy'],
            ['value' => 'Rare kidney-related complications from contrast use'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CT scans support accurate diagnosis, emergency evaluation, surgical planning, image-guided procedures, and long-term monitoring of medical conditions. They are commonly used in neurology, pulmonology, oncology, trauma care, gastroenterology, and vascular medicine to guide appropriate treatment and follow-up care.'],
            ['value' => 'Most patients can return to normal activities shortly after the scan'],
            ['value' => 'Hydration may be advised after contrast-enhanced CT scans'],
            ['value' => 'Patients should report allergic reactions or unusual symptoms promptly'],
            ['value' => 'Follow-up imaging or specialist consultation may be recommended'],
            ['value' => 'Regular monitoring may be required depending on imaging findings'],
        ],
                'recovery' => 'The long-term outlook with CT imaging is highly positive because it supports rapid diagnosis, accurate treatment planning, and effective monitoring of various medical conditions. Timely CT evaluation and appropriate medical follow-up can significantly improve patient outcomes and support long-term healthcare management. ___________________________ 4. Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints, Abdomen) Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints & Abdomen) Procedures',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Computed Tomography (CT) Scan',
                'meta_description' => 'Computed Tomography (CT) scan is an advanced diagnostic imaging procedure that uses X-rays and computer technology to create detailed cross-sectional images of ',
                'meta_keywords' => '',
            ]
        );
    }
}
