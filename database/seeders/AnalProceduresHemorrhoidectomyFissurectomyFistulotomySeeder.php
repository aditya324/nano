<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnalProceduresHemorrhoidectomyFissurectomyFistulotomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anal Procedures (Hemorrhoidectomy, Fissurectomy, Fistulotomy)')],
            [
                'title' => 'Anal Procedures (Hemorrhoidectomy, Fissurectomy, Fistulotomy)',
                'slug' => Str::slug('Anal Procedures (Hemorrhoidectomy, Fissurectomy, Fistulotomy)'),
                'introduction' => 'Anal surgical procedures are performed to treat painful and chronic conditions affecting the anal canal and rectum, including hemorrhoids, fissures, and fistulas. These procedures relieve pain, bleeding, discharge, and recurrent infections.',
                'what_is' => 'Common procedures include: Hemorrhoidectomy for piles Fissurectomy for chronic anal fissure Fistulotomy for anal fistula These surgeries aim to: Remove diseased tissue Improve healing Reduce pain and infection Restore normal bowel function Some procedures may be minimally invasive depending on the condition.',
                'symptoms' => [
            ['value' => 'Pain during bowel movements'],
            ['value' => 'Rectal bleeding'],
            ['value' => 'Swelling near the anus'],
            ['value' => 'Pus discharge or recurrent infection'],
            ['value' => 'Persistent anal discomfort'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Pain after surgery'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Recurrence of disease'],
            ['value' => 'Rare bowel control issues'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain proper anal hygiene'],
            ['value' => 'Take stool softeners if prescribed'],
            ['value' => 'Drink adequate fluids and consume high-fiber diet'],
            ['value' => 'Perform warm sitz baths regularly'],
            ['value' => 'Attend follow-up wound evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Pain after surgery'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Recurrence of disease'],
            ['value' => 'Rare bowel control issues'],
        ],
                'long_term_outlook' => 'Most patients experience significant symptom relief and improved bowel comfort following appropriate surgical treatment and lifestyle modifications.',
                'conclusion' => '',
                'seo_title' => 'Anal Procedures (Hemorrhoidectomy, Fissurectomy, Fistulotomy)',
                'seo_description' => 'Anal surgical procedures are performed to treat painful and chronic conditions affecting the anal canal and rectum, including hemorrhoids, fissures, and fistulas. These procedures relieve pain, bleeding, discharge, and recurrent infections.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
