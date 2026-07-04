<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MagneticResonanceImagingMRIConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Magnetic Resonance Imaging (MRI)')],
            [
                'name' => 'Magnetic Resonance Imaging (MRI)',
                'slug' => Str::slug('Magnetic Resonance Imaging (MRI)'),
                'h1' => 'Magnetic Resonance Imaging (MRI)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Magnetic Resonance Imaging (MRI) is an advanced diagnostic imaging procedure that uses strong magnetic fields and radio waves to create highly detailed images of organs, soft tissues, bones, nerves, and internal body structures. MRI is widely used for accurate evaluation of neurological, musculoskeletal, abdominal, and spinal conditions without using ionizing radiation.',
                'about_more' => '',
                'overview' => 'MRI scans are commonly performed for the brain, spine, joints, and abdomen to diagnose a wide range of medical conditions. Brain MRI helps assess stroke, tumors, neurological disorders, and head injuries. Spine MRI evaluates disc problems, spinal cord disorders, and nerve compression. Joint MRI examines ligaments, cartilage, tendons, and musculoskeletal injuries, while abdominal MRI helps detect organ abnormalities, tumors, inflammation, and vascular conditions. MRI provides high-resolution imaging that supports accurate diagnosis, treatment planning, and long-term disease monitoring.',
                'symptoms' => [
            ['value' => 'Persistent headache or neurological symptoms'],
            ['value' => 'Neck pain, back pain, or nerve-related symptoms'],
            ['value' => 'Joint pain, swelling, or movement limitations'],
            ['value' => 'Abdominal pain or unexplained organ-related symptoms'],
            ['value' => 'Weakness, numbness, or unexplained physical abnormalities'],
        ],
                'causes' => [
            ['value' => 'Evaluation of brain and neurological disorders'],
            ['value' => 'Detection of spinal injuries and disc abnormalities'],
            ['value' => 'Assessment of joint, ligament, and soft tissue injuries'],
            ['value' => 'Imaging of abdominal organs and vascular structures'],
            ['value' => 'Monitoring tumors, inflammation, and chronic medical conditions'],
        ],
                'risks' => [
            ['value' => 'Claustrophobia or discomfort in enclosed MRI scanners'],
            ['value' => 'Noise-related discomfort during the procedure'],
            ['value' => 'Rare allergic reactions to MRI contrast agents'],
            ['value' => 'Restrictions for individuals with certain implants or metal devices'],
            ['value' => 'Need for sedation in some pediatric or anxious patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI supports diagnosis, surgical planning, treatment monitoring, and follow-up evaluation across multiple medical specialties. It is commonly used in neurology, orthopedics, oncology, gastroenterology, and spinal care to guide medical management and assess disease progression or recovery.'],
            ['value' => 'Most individuals can resume normal activities immediately'],
            ['value' => 'Hydration may be advised after contrast-enhanced MRI studies'],
            ['value' => 'Patients should report unusual symptoms after contrast use'],
            ['value' => 'Follow-up imaging or specialist consultation may be recommended'],
            ['value' => 'Regular monitoring may be required depending on imaging findings'],
        ],
                'recovery' => 'The long-term outlook with MRI imaging is highly positive because it provides detailed and accurate evaluation of complex medical conditions while avoiding radiation exposure. Early diagnosis, timely treatment planning, and regular imaging follow-up can significantly improve patient outcomes and long-term healthcare management. ________________________________ 5. Mammography (Screening & Diagnostic) Mammography (Screening & Diagnostic) Procedures',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Magnetic Resonance Imaging (MRI)',
                'meta_description' => 'Magnetic Resonance Imaging (MRI) is an advanced diagnostic imaging procedure that uses strong magnetic fields and radio waves to create highly detailed images o',
                'meta_keywords' => '',
            ]
        );
    }
}
