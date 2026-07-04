<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MagneticResonanceImagingMRIBrainSpineJointsAbdomenConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints & Abdomen)')],
            [
                'name' => 'Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints & Abdomen)',
                'slug' => Str::slug('Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints & Abdomen)'),
                'h1' => 'Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints & Abdomen)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Magnetic Resonance Imaging (MRI) is an advanced diagnostic imaging procedure that uses strong magnetic fields and radio waves to create highly detailed images of organs, soft tissues, nerves, bones, and internal body structures. MRI provides excellent visualization without using ionizing radiation and is widely used for accurate diagnosis and long-term medical evaluation.',
                'about_more' => '',
                'overview' => 'MRI scans are commonly performed for the brain, spine, joints, and abdomen to assess a wide range of medical conditions. Brain MRI helps evaluate stroke, tumors, neurological disorders, and head injuries. Spine MRI is used to assess disc problems, spinal cord disorders, and nerve compression. Joint MRI examines ligaments, cartilage, tendons, and musculoskeletal injuries, while abdominal MRI helps detect organ abnormalities, tumors, inflammation, and vascular conditions. MRI imaging provides high-resolution detail that supports diagnosis, treatment planning, surgical evaluation, and long-term disease monitoring.',
                'symptoms' => [
            ['value' => 'Persistent headache or neurological symptoms'],
            ['value' => 'Neck pain, back pain, or nerve-related discomfort'],
            ['value' => 'Joint pain, swelling, or reduced mobility'],
            ['value' => 'Abdominal pain or unexplained organ-related symptoms'],
            ['value' => 'Weakness, numbness, or movement abnormalities'],
        ],
                'causes' => [
            ['value' => 'Brain and neurological disorders'],
            ['value' => 'Spinal disc degeneration or nerve compression'],
            ['value' => 'Sports injuries or musculoskeletal damage'],
            ['value' => 'Abdominal organ inflammation, tumors, or structural abnormalities'],
            ['value' => 'Chronic pain, trauma, or vascular-related conditions'],
        ],
                'risks' => [
            ['value' => 'Claustrophobia or discomfort in enclosed MRI scanners'],
            ['value' => 'Noise-related discomfort during imaging'],
            ['value' => 'Restrictions for patients with certain metal implants or devices'],
            ['value' => 'Rare allergic reactions to MRI contrast agents'],
            ['value' => 'Need for sedation in some pediatric or anxious individuals'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Diagnostic MRI evaluation for brain, spine, joints, and abdomen'],
            ['value' => 'Neurological, orthopedic, and abdominal disease assessment'],
            ['value' => 'Surgical planning and treatment monitoring'],
            ['value' => 'Image-guided follow-up for chronic medical conditions'],
            ['value' => 'Long-term rehabilitation and specialist care support'],
        ],
                'recovery' => 'The long-term outlook with MRI imaging is highly positive because it provides accurate, radiation-free evaluation of complex medical conditions. Early diagnosis, timely treatment planning, regular imaging follow-up, and appropriate medical management can significantly improve recovery outcomes and long-term health.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Magnetic Resonance Imaging (MRI) (Brain, Spine, Joints & Abdomen)',
                'meta_description' => 'Magnetic Resonance Imaging (MRI) is an advanced diagnostic imaging procedure that uses strong magnetic fields and radio waves to create highly detailed images o',
                'meta_keywords' => '',
            ]
        );
    }
}
