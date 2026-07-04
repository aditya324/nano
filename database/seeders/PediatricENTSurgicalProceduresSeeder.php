<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricENTSurgicalProceduresSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric ENT Surgical Procedures')],
            [
                'title' => 'Pediatric ENT Surgical Procedures',
                'slug' => Str::slug('Pediatric ENT Surgical Procedures'),
                'introduction' => 'Pediatric ENT surgical procedures involve specialized surgical treatment of ear, nose, throat, and airway disorders in infants and children. These procedures help manage conditions affecting hearing, breathing, speech, swallowing, and recurrent infections. Pediatric ENT surgery is carefully tailored to the unique anatomical and developmental needs of children.',
                'what_is' => 'Common pediatric ENT procedures include: Tonsillectomy Adenoidectomy Ear tube insertion Airway surgery Foreign body removal Sinus and nasal surgery The surgeries are usually performed under general anesthesia with specialized pediatric monitoring and postoperative care. Early treatment helps improve growth, sleep, hearing, speech development, and overall quality of life.',
                'symptoms' => [
            ['value' => 'Recurrent throat infections'],
            ['value' => 'Snoring or breathing difficulty'],
            ['value' => 'Hearing problems'],
            ['value' => 'Frequent ear infections'],
            ['value' => 'Speech delay or swallowing problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Anesthesia-related complications'],
            ['value' => 'Airway swelling'],
            ['value' => 'Temporary feeding difficulties'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Give medications as prescribed'],
            ['value' => 'Provide soft foods during recovery'],
            ['value' => 'Monitor for breathing or bleeding problems'],
            ['value' => 'Attend pediatric ENT follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Anesthesia-related complications'],
            ['value' => 'Airway swelling'],
            ['value' => 'Temporary feeding difficulties'],
        ],
                'long_term_outlook' => 'Pediatric ENT surgery improves breathing, hearing, sleep, and speech development in many children. Long-term outcomes are generally excellent with proper follow-up care.',
                'conclusion' => '',
                'seo_title' => 'Pediatric ENT Surgical Procedures',
                'seo_description' => 'Pediatric ENT surgical procedures involve specialized surgical treatment of ear, nose, throat, and airway disorders in infants and children. These procedures help manage conditions affecting hearing, breathing, speech, swallowing, and recurrent infections. Pediatric ENT surgery is carefully tailored to the unique anatomical and developmental needs of children.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
