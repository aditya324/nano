<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PolypectomyHemostasisToolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Polypectomy & Hemostasis Tools')],
            [
                'name' => 'Polypectomy & Hemostasis Tools',
                'slug' => Str::slug('Polypectomy & Hemostasis Tools'),
                'h1' => 'Polypectomy & Hemostasis Tools',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Polypectomy and hemostasis tools are specialized endoscopic instruments used to remove polyps and control gastrointestinal bleeding safely during endoscopic procedures.',
                'about_more' => 'These tools play a vital role in cancer prevention and emergency bleeding management.',
                'overview' => 'Services and capabilities include: Polyp removal procedures Bleeding vessel control Thermal coagulation Hemostatic clipping Injection therapy during endoscopy Common conditions treated include: Colon polyps Gastrointestinal bleeding Ulcers Vascular malformations Early-stage precancerous lesions Advanced endoscopic equipment improves procedural safety and effectiveness. Symptoms Indicating Evaluation Blood in stool or vomiting blood Positive stool occult blood test Anemia Abnormal colonoscopy findings Gastrointestinal bleeding symptoms',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding after polyp removal'],
            ['value' => 'Perforation risk'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Need for repeat procedure in some cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Avoid heavy meals immediately after procedure'],
            ['value' => 'Monitor for abdominal pain or bleeding'],
            ['value' => 'Follow biopsy or pathology review schedules'],
            ['value' => 'Avoid blood-thinning medicines if advised'],
            ['value' => 'Attend surveillance endoscopy appointments'],
        ],
                'recovery' => 'Removal of precancerous polyps significantly lowers colorectal cancer risk. Effective bleeding control improves survival and supports long-term digestive health.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Polypectomy & Hemostasis Tools',
                'meta_description' => 'Polypectomy and hemostasis tools are specialized endoscopic instruments used to remove polyps and control gastrointestinal bleeding safely during endoscopic pro',
                'meta_keywords' => '',
            ]
        );
    }
}
