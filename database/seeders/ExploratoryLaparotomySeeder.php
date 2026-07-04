<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExploratoryLaparotomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Exploratory Laparotomy')],
            [
                'title' => 'Exploratory Laparotomy',
                'slug' => Str::slug('Exploratory Laparotomy'),
                'introduction' => 'Exploratory laparotomy is a major abdominal surgical procedure performed to identify and treat serious abdominal diseases or injuries when the exact cause cannot be determined through imaging alone.',
                'what_is' => 'The surgery allows direct examination of abdominal organs and is commonly used in: Abdominal trauma Internal bleeding Bowel perforation Severe infection Intestinal obstruction During surgery, surgeons inspect abdominal organs and perform corrective procedures as needed. Exploratory laparotomy is usually performed under emergency conditions and requires intensive postoperative monitoring.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Abdominal rigidity or swelling'],
            ['value' => 'Persistent vomiting'],
            ['value' => 'Internal bleeding signs'],
            ['value' => 'Shock or unstable vital signs'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Major bleeding'],
            ['value' => 'Infection or sepsis'],
            ['value' => 'Injury to abdominal organs'],
            ['value' => 'Postoperative adhesions'],
            ['value' => 'Prolonged recovery period'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain proper wound hygiene'],
            ['value' => 'Perform breathing and mobility exercises'],
            ['value' => 'Follow dietary progression under supervision'],
            ['value' => 'Monitor for fever or worsening abdominal pain'],
            ['value' => 'Attend follow-up surgical evaluations regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Major bleeding'],
            ['value' => 'Infection or sepsis'],
            ['value' => 'Injury to abdominal organs'],
            ['value' => 'Postoperative adhesions'],
            ['value' => 'Prolonged recovery period'],
        ],
                'long_term_outlook' => 'Recovery depends on the severity of the underlying condition, but timely surgery can be life-saving and significantly improve survival and recovery outcomes.',
                'conclusion' => '',
                'seo_title' => 'Exploratory Laparotomy',
                'seo_description' => 'Exploratory laparotomy is a major abdominal surgical procedure performed to identify and treat serious abdominal diseases or injuries when the exact cause cannot be determined through imaging alone.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
