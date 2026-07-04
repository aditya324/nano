<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrotherapyDevicesTENSNMESUltrasoundSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Electrotherapy Devices (TENS, NMES & Ultrasound)')],
            [
                'title' => 'Electrotherapy Devices (TENS, NMES & Ultrasound)',
                'slug' => Str::slug('Electrotherapy Devices (TENS, NMES & Ultrasound)'),
                'introduction' => 'Electrotherapy devices are specialized rehabilitation tools used to reduce pain, stimulate muscles, improve circulation, and support tissue healing through electrical energy or sound wave therapy. These devices are widely used in physiotherapy and rehabilitation programs for musculoskeletal, neurological, sports-related, and post-surgical conditions.',
                'what_is' => 'TENS (Transcutaneous Electrical Nerve Stimulation) devices help relieve pain by delivering low-voltage electrical impulses through the skin. NMES (Neuromuscular Electrical Stimulation) devices stimulate muscles to improve strength, muscle activation, and rehabilitation outcomes. Therapeutic ultrasound devices use sound waves to reduce inflammation, improve blood flow, and promote soft tissue healing. These electrotherapy modalities are commonly integrated into rehabilitation programs to improve recovery and physical function.',
                'symptoms' => [
            ['value' => 'Chronic or acute pain'],
            ['value' => 'Muscle weakness or reduced muscle activity'],
            ['value' => 'Joint stiffness or inflammation'],
            ['value' => 'Sports injuries or soft tissue strain'],
            ['value' => 'Reduced mobility and functional limitations'],
        ],
                'causes' => [
            ['value' => 'Musculoskeletal injuries and joint disorders'],
            ['value' => 'Neurological conditions affecting muscle control'],
            ['value' => 'Post-surgical weakness or tissue healing needs'],
            ['value' => 'Chronic pain syndromes and nerve irritation'],
            ['value' => 'Sports injuries and repetitive strain conditions'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary skin irritation or redness'],
            ['value' => 'Mild discomfort during electrical stimulation'],
            ['value' => 'Muscle soreness after therapy sessions'],
            ['value' => 'Burns or sensitivity reactions in rare cases'],
            ['value' => 'Improper use leading to ineffective treatment or discomfort'],
            ['value' => 'Treatment Options'],
            ['value' => 'Electrotherapy devices are used in rehabilitation programs for pain management, muscle strengthening, inflammation reduction, soft tissue healing, and functional recovery. These treatments are often combined with physiotherapy exercises, stretching programs, manual therapy, gait training, and rehabilitation exercises to improve mobility, reduce pain, and enhance physical performance.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Following therapist instructions during electrotherapy sessions'],
            ['value' => 'Monitoring skin for irritation or unusual sensitivity'],
            ['value' => 'Maintaining regular rehabilitation and exercise routines'],
            ['value' => 'Staying hydrated and practicing safe movement techniques'],
            ['value' => 'Attending follow-up rehabilitation and progress assessments'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary skin irritation or redness'],
            ['value' => 'Mild discomfort during electrical stimulation'],
            ['value' => 'Muscle soreness after therapy sessions'],
            ['value' => 'Burns or sensitivity reactions in rare cases'],
            ['value' => 'Improper use leading to ineffective treatment or discomfort'],
            ['value' => 'Treatment Options'],
            ['value' => 'Electrotherapy devices are used in rehabilitation programs for pain management, muscle strengthening, inflammation reduction, soft tissue healing, and functional recovery. These treatments are often combined with physiotherapy exercises, stretching programs, manual therapy, gait training, and rehabilitation exercises to improve mobility, reduce pain, and enhance physical performance.'],
        ],
                'long_term_outlook' => 'The long-term outlook with electrotherapy-based rehabilitation is generally very positive when treatments are performed under professional supervision and combined with structured rehabilitation programs. Electrotherapy devices can significantly improve pain control, muscle function, tissue healing, and mobility. Ongoing rehabilitation, regular exercise, and proper therapy monitoring are important for maintaining long-term recovery and physical well-being.',
                'conclusion' => '',
                'seo_title' => 'Electrotherapy Devices (TENS, NMES & Ultrasound)',
                'seo_description' => 'Electrotherapy devices are specialized rehabilitation tools used to reduce pain, stimulate muscles, improve circulation, and support tissue healing through electrical energy or sound wave therapy. These devices are widely used in physiotherapy and rehabilitation programs for musculoskeletal, neurological, sports-related, and post-surgical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
