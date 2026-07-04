<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ColostomyIleostomyCreationClosureSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Colostomy / Ileostomy Creation & Closure')],
            [
                'title' => 'Colostomy / Ileostomy Creation & Closure',
                'slug' => Str::slug('Colostomy / Ileostomy Creation & Closure'),
                'introduction' => 'Colostomy and ileostomy are surgical procedures in which part of the intestine is brought to the abdominal wall to divert stool outside the body through a stoma. These procedures may be temporary or permanent depending on the underlying condition.',
                'what_is' => 'Stoma surgery may be required for: Bowel obstruction Colon cancer Inflammatory bowel disease Trauma Intestinal perforation Types include: Colostomy from the large intestine Ileostomy from the small intestine Closure surgery may later restore normal bowel continuity if conditions allow. Patients receive specialized stoma care education after surgery.',
                'symptoms' => [
            ['value' => 'Severe bowel disease symptoms'],
            ['value' => 'Intestinal obstruction'],
            ['value' => 'Perforation or trauma'],
            ['value' => 'Colorectal cancer symptoms'],
            ['value' => 'Severe inflammatory bowel disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Stoma infection or irritation'],
            ['value' => 'Leakage around stoma site'],
            ['value' => 'Stoma prolapse or retraction'],
            ['value' => 'Dehydration, especially with ileostomy'],
            ['value' => 'Psychological adjustment difficulties'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Learn proper stoma care techniques'],
            ['value' => 'Maintain skin hygiene around the stoma'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Stay adequately hydrated'],
            ['value' => 'Attend regular stoma clinic follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Stoma infection or irritation'],
            ['value' => 'Leakage around stoma site'],
            ['value' => 'Stoma prolapse or retraction'],
            ['value' => 'Dehydration, especially with ileostomy'],
            ['value' => 'Psychological adjustment difficulties'],
        ],
                'long_term_outlook' => 'With proper stoma care and education, most patients adapt well and maintain good quality of life and daily functioning.',
                'conclusion' => '',
                'seo_title' => 'Colostomy / Ileostomy Creation & Closure',
                'seo_description' => 'Colostomy and ileostomy are surgical procedures in which part of the intestine is brought to the abdominal wall to divert stool outside the body through a stoma. These procedures may be temporary or permanent depending on the underlying condition.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
