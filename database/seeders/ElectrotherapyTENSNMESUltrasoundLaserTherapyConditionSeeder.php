<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrotherapyTENSNMESUltrasoundLaserTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Electrotherapy (TENS, NMES, Ultrasound & Laser Therapy)')],
            [
                'name' => 'Electrotherapy (TENS, NMES, Ultrasound & Laser Therapy)',
                'slug' => Str::slug('Electrotherapy (TENS, NMES, Ultrasound & Laser Therapy)'),
                'h1' => 'Electrotherapy (TENS, NMES, Ultrasound & Laser Therapy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Electrotherapy is a rehabilitation treatment that uses electrical energy, sound waves, or light-based technologies to relieve pain, stimulate muscles, improve circulation, and promote tissue healing. Common electrotherapy modalities include Transcutaneous Electrical Nerve Stimulation (TENS), Neuromuscular Electrical Stimulation (NMES), therapeutic ultrasound, and low-level laser therapy.',
                'about_more' => '',
                'overview' => 'TENS therapy helps reduce pain by delivering mild electrical impulses through the skin, while NMES stimulates muscles to improve strength and prevent muscle wasting. Therapeutic ultrasound uses sound waves to promote tissue healing and reduce inflammation, and laser therapy uses focused light energy to support pain relief and tissue repair. Electrotherapy is commonly used in physiotherapy and rehabilitation programs for musculoskeletal injuries, neurological conditions, chronic pain, and post-surgical recovery.',
                'symptoms' => [
            ['value' => 'Chronic or acute pain'],
            ['value' => 'Muscle weakness or reduced muscle activation'],
            ['value' => 'Joint stiffness or soft tissue inflammation'],
            ['value' => 'Sports injuries or post-surgical discomfort'],
            ['value' => 'Reduced mobility or functional limitations'],
            ['value' => 'Common Causes'],
            ['value' => 'Musculoskeletal injuries or joint disorders'],
            ['value' => 'Neurological conditions affecting muscle function'],
            ['value' => 'Chronic pain syndromes or nerve irritation'],
            ['value' => 'Post-operative weakness or tissue healing needs'],
            ['value' => 'Sports injuries and repetitive strain conditions'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Temporary skin irritation or redness at treatment sites'],
            ['value' => 'Mild discomfort during electrical stimulation'],
            ['value' => 'Muscle soreness after therapy sessions'],
            ['value' => 'Burns or sensitivity reactions in rare cases'],
            ['value' => 'Inappropriate use in individuals with certain medical devices or conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Electrotherapy treatments may include TENS for pain management, NMES for muscle strengthening and rehabilitation, ultrasound therapy for tissue healing, and laser therapy for reducing inflammation and promoting recovery. These modalities are often combined with physiotherapy exercises, manual therapy, stretching programs, and rehabilitation training to improve overall treatment outcomes and functional recovery.'],
            ['value' => 'Following therapist instructions during and after therapy sessions'],
            ['value' => 'Monitoring skin for irritation or discomfort after treatment'],
            ['value' => 'Maintaining regular rehabilitation exercises and therapy schedules'],
            ['value' => 'Staying hydrated and practicing proper body mechanics'],
            ['value' => 'Attending follow-up rehabilitation evaluations when required'],
        ],
                'recovery' => 'The long-term outlook with electrotherapy is generally positive when used as part of a structured rehabilitation program. Electrotherapy can help reduce pain, improve muscle strength, enhance mobility, and support tissue healing. Consistent rehabilitation, proper medical supervision, and ongoing exercise programs are important for maintaining long-term functional recovery and physical well-being. __________________________ 6. Joint Mobilization & Manual Therapy Joint Mobilization & Manual Therapy Procedures',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Electrotherapy (TENS, NMES, Ultrasound & Laser Therapy)',
                'meta_description' => 'Electrotherapy is a rehabilitation treatment that uses electrical energy, sound waves, or light-based technologies to relieve pain, stimulate muscles, improve c',
                'meta_keywords' => '',
            ]
        );
    }
}
