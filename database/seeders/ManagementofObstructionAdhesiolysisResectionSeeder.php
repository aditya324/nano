<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofObstructionAdhesiolysisResectionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Obstruction (Adhesiolysis, Resection)')],
            [
                'title' => 'Management of Obstruction (Adhesiolysis, Resection)',
                'slug' => Str::slug('Management of Obstruction (Adhesiolysis, Resection)'),
                'introduction' => 'Management of intestinal obstruction involves surgical treatment to relieve blockage in the intestines and restore normal bowel function.',
                'what_is' => 'Common causes of obstruction include: Postoperative adhesions Hernias Tumors Twisting of bowel Inflammatory bowel disease Treatment may involve: Adhesiolysis (removal of adhesions) Bowel resection Hernia correction Decompression procedures Surgery may be performed laparoscopically or through open techniques depending on severity.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Vomiting'],
            ['value' => 'Abdominal distension'],
            ['value' => 'Inability to pass stool or gas'],
            ['value' => 'Dehydration and weakness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bowel perforation'],
            ['value' => 'Infection or sepsis'],
            ['value' => 'Recurrence of obstruction'],
            ['value' => 'Anastomotic leakage'],
            ['value' => 'Adhesion-related future complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor bowel movements carefully'],
            ['value' => 'Maintain hydration and nutrition'],
            ['value' => 'Follow gradual dietary advancement'],
            ['value' => 'Avoid heavy activity during recovery'],
            ['value' => 'Attend scheduled postoperative reviews'],
        ],
                'surgery_risks' => [
            ['value' => 'Bowel perforation'],
            ['value' => 'Infection or sepsis'],
            ['value' => 'Recurrence of obstruction'],
            ['value' => 'Anastomotic leakage'],
            ['value' => 'Adhesion-related future complications'],
        ],
                'long_term_outlook' => 'Prompt surgical management usually restores bowel function successfully and prevents severe complications, although some patients may require long-term follow-up.',
                'conclusion' => '',
                'seo_title' => 'Management of Obstruction (Adhesiolysis, Resection)',
                'seo_description' => 'Management of intestinal obstruction involves surgical treatment to relieve blockage in the intestines and restore normal bowel function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
