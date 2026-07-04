<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricImagingLowDoseXrayUSGSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Imaging (Low-Dose X-ray, USG)')],
            [
                'title' => 'Pediatric Imaging (Low-Dose X-ray, USG)',
                'slug' => Str::slug('Pediatric Imaging (Low-Dose X-ray, USG)'),
                'introduction' => 'Pediatric imaging services include low-dose X-rays and ultrasonography (USG) designed specifically for children to diagnose medical conditions safely with minimal radiation exposure.',
                'what_is' => 'Imaging helps diagnose fractures, lung infections, abdominal problems, congenital abnormalities, and other pediatric conditions. Low-dose radiation protocols are used to protect growing tissues, while ultrasound offers safe, radiation-free imaging for soft tissues and internal organs.',
                'symptoms' => [
            ['value' => 'Persistent cough or breathing difficulty'],
            ['value' => 'Abdominal pain or swelling'],
            ['value' => 'Suspected fractures or injuries'],
            ['value' => 'Congenital abnormalities requiring evaluation'],
            ['value' => 'Fever or infections needing diagnostic imaging'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Minimal radiation exposure from X-rays'],
            ['value' => 'Anxiety or discomfort during procedures'],
            ['value' => 'Need for sedation in very young children'],
            ['value' => 'Delayed diagnosis if imaging is unavailable'],
            ['value' => 'Rare allergic reactions to imaging contrast agents'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow imaging preparation instructions carefully'],
            ['value' => 'Maintain hydration after certain imaging studies'],
            ['value' => 'Monitor children if sedation was used'],
            ['value' => 'Attend follow-up consultations for report review'],
            ['value' => 'Preserve imaging records for future medical care'],
        ],
                'surgery_risks' => [
            ['value' => 'Minimal radiation exposure from X-rays'],
            ['value' => 'Anxiety or discomfort during procedures'],
            ['value' => 'Need for sedation in very young children'],
            ['value' => 'Delayed diagnosis if imaging is unavailable'],
            ['value' => 'Rare allergic reactions to imaging contrast agents'],
        ],
                'long_term_outlook' => 'Safe pediatric imaging supports accurate diagnosis, early treatment, and improved management of childhood illnesses and injuries.',
                'conclusion' => '',
                'seo_title' => 'Pediatric Imaging (Low-Dose X-ray, USG)',
                'seo_description' => 'Pediatric imaging services include low-dose X-rays and ultrasonography (USG) designed specifically for children to diagnose medical conditions safely with minimal radiation exposure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
