<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PoweredMicrodebriderSystemSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Powered Microdebrider System')],
            [
                'title' => 'Powered Microdebrider System',
                'slug' => Str::slug('Powered Microdebrider System'),
                'introduction' => 'A powered microdebrider system is a specialized surgical device used in ENT procedures for precise cutting and removal of soft tissue within the nose, sinuses, and airway. The system combines suction with rotating blades to remove diseased tissue safely and efficiently. It is widely used in minimally invasive sinus and airway surgeries.',
                'what_is' => 'The microdebrider system includes: Handpiece with rotating blades Suction system Control console Interchangeable cutting tips The equipment is commonly used for: Nasal polyp removal Functional endoscopic sinus surgery Adenoidectomy Airway surgery Tumor debulking The device improves precision while minimizing tissue trauma and bleeding.',
                'symptoms' => [
            ['value' => 'Chronic sinus blockage'],
            ['value' => 'Nasal polyps'],
            ['value' => 'Enlarged adenoids'],
            ['value' => 'Breathing difficulty'],
            ['value' => 'Recurrent sinus infections'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Tissue injury if improperly used'],
            ['value' => 'Infection'],
            ['value' => 'Temporary swelling or discomfort'],
            ['value' => 'Rare damage to surrounding structures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow postoperative nasal care instructions'],
            ['value' => 'Use prescribed medications regularly'],
            ['value' => 'Avoid nose blowing initially after surgery'],
            ['value' => 'Attend follow-up ENT examinations'],
            ['value' => 'Report persistent bleeding or breathing difficulty immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Tissue injury if improperly used'],
            ['value' => 'Infection'],
            ['value' => 'Temporary swelling or discomfort'],
            ['value' => 'Rare damage to surrounding structures'],
        ],
                'long_term_outlook' => 'Powered microdebrider systems support safer and more effective minimally invasive ENT surgery, improving long-term breathing and sinus health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Powered Microdebrider System',
                'seo_description' => 'A powered microdebrider system is a specialized surgical device used in ENT procedures for precise cutting and removal of soft tissue within the nose, sinuses, and airway. The system combines suction with rotating blades to remove diseased tissue safely and efficiently. It is widely used in minimally invasive sinus and airway surgeries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
