<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleRehabilitationSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Rehabilitation Setup')],
            [
                'title' => 'Tele-Rehabilitation Setup',
                'slug' => Str::slug('Tele-Rehabilitation Setup'),
                'introduction' => 'A tele-rehabilitation setup consists of digital communication systems, rehabilitation technologies, and remote monitoring tools used to deliver rehabilitation care and therapy services virtually. These systems help patients access rehabilitation programs, therapy sessions, follow-up care, and functional monitoring from home or remote locations.',
                'what_is' => 'Tele-rehabilitation setups commonly include video consultation platforms, internet-enabled devices, rehabilitation software, wearable monitoring devices, digital exercise platforms, cameras, microphones, and remote patient monitoring systems. These setups are widely used for physiotherapy, occupational therapy, speech therapy, neurological rehabilitation, cardiopulmonary rehabilitation, pediatric rehabilitation, and long-term follow-up care. Tele-rehabilitation improves accessibility, continuity of care, and patient convenience while supporting guided recovery and functional improvement.',
                'symptoms' => [
            ['value' => 'Reduced mobility or physical functioning'],
            ['value' => 'Difficulty attending in-person rehabilitation sessions'],
            ['value' => 'Speech, balance, or coordination difficulties'],
            ['value' => 'Chronic pain or movement limitations'],
            ['value' => 'Long-term rehabilitation needs after illness, injury, or surgery'],
        ],
                'causes' => [
            ['value' => 'Neurological or musculoskeletal disorders'],
            ['value' => 'Post-surgical rehabilitation requirements'],
            ['value' => 'Cardiopulmonary or chronic medical conditions'],
            ['value' => 'Geographic or mobility limitations affecting healthcare access'],
            ['value' => 'Need for continuous home-based rehabilitation and monitoring'],
        ],
                'condition_risks' => [
            ['value' => 'Limited physical examination compared to in-person therapy'],
            ['value' => 'Technical or internet connectivity issues'],
            ['value' => 'Reduced supervision during home-based exercises'],
            ['value' => 'Delayed recognition of complications or incorrect exercise techniques'],
            ['value' => 'Difficulty using digital rehabilitation platforms for some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-rehabilitation setups support virtual physiotherapy, speech and swallowing therapy, occupational therapy, balance training, gait rehabilitation, respiratory therapy, pain management education, home exercise monitoring, and functional progress assessments. Rehabilitation specialists may also use wearable monitoring tools, digital tracking systems, and remote consultations to personalize rehabilitation plans and improve long-term recovery outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Participating in scheduled virtual rehabilitation sessions regularly'],
            ['value' => 'Following prescribed home exercise and therapy programs consistently'],
            ['value' => 'Monitoring symptoms and reporting concerns to healthcare providers'],
            ['value' => 'Maintaining proper use of rehabilitation devices and digital platforms'],
            ['value' => 'Attending regular virtual or in-person follow-up evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Limited physical examination compared to in-person therapy'],
            ['value' => 'Technical or internet connectivity issues'],
            ['value' => 'Reduced supervision during home-based exercises'],
            ['value' => 'Delayed recognition of complications or incorrect exercise techniques'],
            ['value' => 'Difficulty using digital rehabilitation platforms for some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-rehabilitation setups support virtual physiotherapy, speech and swallowing therapy, occupational therapy, balance training, gait rehabilitation, respiratory therapy, pain management education, home exercise monitoring, and functional progress assessments. Rehabilitation specialists may also use wearable monitoring tools, digital tracking systems, and remote consultations to personalize rehabilitation plans and improve long-term recovery outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook with tele-rehabilitation setups is generally very positive when patients remain actively engaged in therapy and follow professional guidance consistently. Tele-rehabilitation improves accessibility, continuity of care, rehabilitation adherence, and long-term functional recovery. Ongoing monitoring, patient participation, and regular medical follow-up are important for maintaining long-term mobility, independence, and overall well-being.',
                'conclusion' => '',
                'seo_title' => 'Tele-Rehabilitation Setup',
                'seo_description' => 'A tele-rehabilitation setup consists of digital communication systems, rehabilitation technologies, and remote monitoring tools used to deliver rehabilitation care and therapy services virtually. These systems help patients access rehabilitation programs, therapy sessions, follow-up care, and functional monitoring from home or remote locations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
