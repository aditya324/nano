<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LymphaticVascularLeakManagementegLymphoceleSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lymphatic & Vascular Leak Management (e.g., Lymphocele)')],
            [
                'title' => 'Lymphatic & Vascular Leak Management (e.g., Lymphocele)',
                'slug' => Str::slug('Lymphatic & Vascular Leak Management (e.g., Lymphocele)'),
                'introduction' => 'Lymphatic and vascular leak management involves diagnosis and treatment of abnormal leakage of lymphatic fluid or blood after surgery or trauma. These complications can delay healing and increase infection risk if untreated.',
                'what_is' => 'Leakage may occur after: Cancer surgery Lymph node dissection Vascular surgery Trauma procedures Management may include: Drain placement Compression therapy Aspiration procedures Surgical repair Nutritional modifications Infection control Imaging studies may be required to identify the leak source accurately.',
                'symptoms' => [
            ['value' => 'Swelling near surgical site'],
            ['value' => 'Fluid collection or leakage'],
            ['value' => 'Pain or discomfort'],
            ['value' => 'Fever if infection develops'],
            ['value' => 'Delayed wound healing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Persistent fluid accumulation'],
            ['value' => 'Delayed recovery'],
            ['value' => 'Compression of nearby organs'],
            ['value' => 'Need for repeat surgical procedures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor drainage output regularly'],
            ['value' => 'Maintain wound and drain hygiene carefully'],
            ['value' => 'Follow compression or dressing instructions'],
            ['value' => 'Attend imaging and follow-up evaluations'],
            ['value' => 'Report increasing swelling or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Persistent fluid accumulation'],
            ['value' => 'Delayed recovery'],
            ['value' => 'Compression of nearby organs'],
            ['value' => 'Need for repeat surgical procedures'],
        ],
                'long_term_outlook' => 'Early detection and proper management usually result in successful healing and prevent long-term complications associated with lymphatic or vascular leakage.',
                'conclusion' => '',
                'seo_title' => 'Lymphatic & Vascular Leak Management (e.g., Lymphocele)',
                'seo_description' => 'Lymphatic and vascular leak management involves diagnosis and treatment of abnormal leakage of lymphatic fluid or blood after surgery or trauma. These complications can delay healing and increase infection risk if untreated.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
