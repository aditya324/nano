<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StrangulatedObstructedHerniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Strangulated / Obstructed Hernia')],
            [
                'name' => 'Strangulated / Obstructed Hernia',
                'slug' => Str::slug('Strangulated / Obstructed Hernia'),
                'h1' => 'Strangulated / Obstructed Hernia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A strangulated or obstructed hernia is a surgical emergency in which trapped bowel tissue loses blood supply or becomes blocked inside the hernia sac.',
                'about_more' => '',
                'overview' => 'A strangulated or obstructed hernia is a surgical emergency in which trapped bowel tissue loses blood supply or becomes blocked inside the hernia sac.',
                'symptoms' => [
            ['value' => 'Severe sudden pain over the hernia'],
            ['value' => 'Redness and swelling of the hernia site'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Inability to pass stool or gas'],
            ['value' => 'Fever and abdominal distension'],
        ],
                'causes' => [
            ['value' => 'Untreated long-standing hernia'],
            ['value' => 'Sudden increase in abdominal pressure'],
            ['value' => 'Trapping of bowel within the hernia'],
            ['value' => 'Delayed medical treatment'],
            ['value' => 'Weak abdominal wall support'],
        ],
                'risks' => [
            ['value' => 'Intestinal gangrene and tissue death'],
            ['value' => 'Peritonitis and abdominal infection'],
            ['value' => 'Sepsis and shock'],
            ['value' => 'Bowel perforation'],
            ['value' => 'Life-threatening surgical emergency'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency surgical evaluation'],
            ['value' => 'Intravenous fluids and stabilization'],
            ['value' => 'Emergency hernia surgery'],
            ['value' => 'Removal of damaged bowel if required'],
            ['value' => 'Postoperative intensive monitoring'],
        ],
                'recovery' => 'Prompt surgery greatly improves survival and recovery. Delay in treatment increases the risk of severe complications.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Strangulated / Obstructed Hernia',
                'meta_description' => 'A strangulated or obstructed hernia is a surgical emergency in which trapped bowel tissue loses blood supply or becomes blocked inside the hernia sac.',
                'meta_keywords' => '',
            ]
        );
    }
}
