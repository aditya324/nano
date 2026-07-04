<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HerniaAppendectomyGallbladderSurgeryInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hernia / Appendectomy / Gallbladder Surgery Instruments')],
            [
                'title' => 'Hernia / Appendectomy / Gallbladder Surgery Instruments',
                'slug' => Str::slug('Hernia / Appendectomy / Gallbladder Surgery Instruments'),
                'introduction' => 'Specialized surgical instrument sets are designed for common general surgical procedures such as hernia repair, appendectomy, and gallbladder surgery. These instruments improve surgical precision and efficiency.',
                'what_is' => 'The instrument sets may include: Graspers and forceps Trocars and laparoscopic tools Scissors and dissectors Mesh fixation devices Suction and irrigation systems They are used in: Open surgeries Laparoscopic procedures Emergency abdominal surgeries Proper instrumentation helps reduce surgical complications and improves patient outcomes.',
                'symptoms' => [
            ['value' => 'Hernia-related swelling or pain'],
            ['value' => 'Acute appendicitis symptoms'],
            ['value' => 'Gallstone-related abdominal pain'],
            ['value' => 'Digestive disturbances requiring surgery'],
            ['value' => 'Emergency abdominal conditions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding during surgery'],
            ['value' => 'Injury to nearby organs'],
            ['value' => 'Rare equipment malfunction'],
            ['value' => 'Postoperative pain or recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy lifting after surgery'],
            ['value' => 'Maintain wound cleanliness carefully'],
            ['value' => 'Follow dietary recommendations'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Attend follow-up surgical appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding during surgery'],
            ['value' => 'Injury to nearby organs'],
            ['value' => 'Rare equipment malfunction'],
            ['value' => 'Postoperative pain or recurrence'],
        ],
                'long_term_outlook' => 'Modern surgical instruments improve procedural safety, support minimally invasive surgery, and promote faster recovery with reduced complications.',
                'conclusion' => '',
                'seo_title' => 'Hernia / Appendectomy / Gallbladder Surgery Instruments',
                'seo_description' => 'Specialized surgical instrument sets are designed for common general surgical procedures such as hernia repair, appendectomy, and gallbladder surgery. These instruments improve surgical precision and efficiency.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
