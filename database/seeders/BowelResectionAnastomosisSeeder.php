<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BowelResectionAnastomosisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Bowel Resection & Anastomosis')],
            [
                'title' => 'Bowel Resection & Anastomosis',
                'slug' => Str::slug('Bowel Resection & Anastomosis'),
                'introduction' => 'Bowel resection and anastomosis is a surgical procedure in which a diseased or damaged segment of intestine is removed and the healthy ends are reconnected to restore bowel continuity.',
                'what_is' => 'The surgery may be required for: Intestinal obstruction Bowel perforation Tumors Ischemic bowel disease Inflammatory bowel disease The procedure can involve: Small bowel resection Large bowel resection Colorectal surgery After removing the diseased bowel segment, the surgeon reconnects healthy ends using sutures or staples. The surgery may be performed through open or laparoscopic techniques depending on the condition.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Persistent vomiting'],
            ['value' => 'Intestinal obstruction symptoms'],
            ['value' => 'Abdominal swelling and distension'],
            ['value' => 'Gastrointestinal bleeding or weight loss'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Anastomotic leakage'],
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Adhesion formation and future obstruction'],
            ['value' => 'Nutritional deficiencies after extensive resection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow gradual dietary progression carefully'],
            ['value' => 'Maintain hydration and electrolyte balance'],
            ['value' => 'Monitor bowel movements regularly'],
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Attend regular postoperative evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Anastomotic leakage'],
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Adhesion formation and future obstruction'],
            ['value' => 'Nutritional deficiencies after extensive resection'],
        ],
                'long_term_outlook' => 'Many patients recover successfully and regain normal bowel function. Long-term outcome depends on the underlying disease, extent of bowel removal, and adherence to postoperative care.',
                'conclusion' => '',
                'seo_title' => 'Bowel Resection & Anastomosis',
                'seo_description' => 'Bowel resection and anastomosis is a surgical procedure in which a diseased or damaged segment of intestine is removed and the healthy ends are reconnected to restore bowel continuity.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
