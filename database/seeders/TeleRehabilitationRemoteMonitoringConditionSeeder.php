<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleRehabilitationRemoteMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tele-Rehabilitation / Remote Monitoring')],
            [
                'name' => 'Tele-Rehabilitation / Remote Monitoring',
                'slug' => Str::slug('Tele-Rehabilitation / Remote Monitoring'),
                'h1' => 'Tele-Rehabilitation / Remote Monitoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tele-rehabilitation and remote monitoring are healthcare services that use digital communication technologies to deliver rehabilitation therapy, patient education, and health monitoring from a distance. These services help individuals access rehabilitation care conveniently from home while maintaining regular communication with healthcare professionals.',
                'about_more' => '',
                'overview' => 'Tele-rehabilitation programs may include virtual physiotherapy sessions, guided exercise programs, speech therapy, occupational therapy, pain management support, and functional rehabilitation through video consultations and digital platforms. Remote monitoring systems allow healthcare providers to track patient progress, symptoms, mobility, exercise adherence, vital signs, and recovery outcomes in real time. These services are commonly used for neurological, orthopedic, cardiopulmonary, pediatric, and geriatric rehabilitation.',
                'symptoms' => [
            ['value' => 'Reduced mobility or physical functioning'],
            ['value' => 'Difficulty attending in-person rehabilitation sessions'],
            ['value' => 'Chronic pain or movement limitations'],
            ['value' => 'Speech, balance, or coordination difficulties'],
            ['value' => 'Ongoing rehabilitation needs after injury, surgery, or illness'],
            ['value' => 'Common Causes'],
            ['value' => 'Neurological or musculoskeletal disorders'],
            ['value' => 'Post-surgical recovery and rehabilitation needs'],
            ['value' => 'Chronic respiratory or cardiovascular conditions'],
            ['value' => 'Geographic or mobility limitations affecting clinic access'],
            ['value' => 'Long-term rehabilitation and follow-up care requirements'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Limited physical examination compared to in-person sessions'],
            ['value' => 'Technical or internet connectivity issues'],
            ['value' => 'Reduced supervision during home-based exercises'],
            ['value' => 'Delayed identification of certain complications or injuries'],
            ['value' => 'Difficulty using digital platforms for some patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Tele-rehabilitation services may include guided exercise therapy, virtual physiotherapy, speech and swallowing therapy, occupational therapy, balance training, pain management education, respiratory rehabilitation, and home exercise monitoring. Remote monitoring tools may also track patient mobility, physical activity, heart rate, oxygen levels, posture, and rehabilitation progress to support personalized care and long-term recovery.'],
            ['value' => 'Following prescribed home exercise and therapy programs regularly'],
            ['value' => 'Participating in scheduled virtual consultations and follow-up sessions'],
            ['value' => 'Monitoring symptoms and reporting changes to healthcare providers'],
            ['value' => 'Maintaining proper use of digital rehabilitation platforms and devices'],
            ['value' => 'Practicing safety measures during home-based rehabilitation activities'],
        ],
                'recovery' => 'The long-term outlook with tele-rehabilitation and remote monitoring is generally very positive when patients remain actively engaged in their rehabilitation programs. These services improve accessibility, continuity of care, patient convenience, and long-term rehabilitation support. Consistent participation, regular medical follow-up, and proper use of digital healthcare technologies are important for maintaining long-term recovery and functional independence. __________________ 20. Pain & Symptom Control in Chronic Neurological Disorders Pain & Symptom Control in Chronic Neurological Disorders Procedures',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Tele-Rehabilitation / Remote Monitoring',
                'meta_description' => 'Tele-rehabilitation and remote monitoring are healthcare services that use digital communication technologies to deliver rehabilitation therapy, patient educati',
                'meta_keywords' => '',
            ]
        );
    }
}
