<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BiopsyForcepsSnareClipDevicesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Biopsy Forceps / Snare / Clip Devices')],
            [
                'name' => 'Biopsy Forceps / Snare / Clip Devices',
                'slug' => Str::slug('Biopsy Forceps / Snare / Clip Devices'),
                'h1' => 'Biopsy Forceps / Snare / Clip Devices',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'These are specialized endoscopic accessories used to collect tissue samples, remove abnormal growths, and control bleeding during gastrointestinal procedures.',
                'about_more' => 'They are essential tools in both diagnostic and therapeutic gastroenterology.',
                'overview' => 'Services and capabilities include: Tissue biopsy collection Polyp snaring and removal Bleeding control with clips Foreign body retrieval Endoscopic therapeutic interventions These devices improve precision and minimally invasive treatment outcomes. Symptoms Indicating Evaluation Suspicious growths on endoscopy Gastrointestinal bleeding Chronic ulcers Abnormal imaging findings Unexplained digestive symptoms',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding after biopsy'],
            ['value' => 'Minor tissue injury'],
            ['value' => 'Perforation in rare cases'],
            ['value' => 'Infection risk'],
            ['value' => 'Need for repeat biopsy if sample is inadequate'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow dietary instructions after endoscopy'],
            ['value' => 'Monitor for bleeding or severe pain'],
            ['value' => 'Attend pathology follow-up appointments'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Maintain routine surveillance if recommended'],
        ],
                'recovery' => 'These devices support early diagnosis and minimally invasive treatment of gastrointestinal diseases, improving long-term patient outcomes and reducing need for major surgery.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'Biopsy Forceps / Snare / Clip Devices',
                'meta_description' => 'These are specialized endoscopic accessories used to collect tissue samples, remove abnormal growths, and control bleeding during gastrointestinal procedures.',
                'meta_keywords' => '',
            ]
        );
    }
}
