<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BowelIschemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Bowel Ischemia')],
            [
                'name' => 'Bowel Ischemia',
                'slug' => Str::slug('Bowel Ischemia'),
                'h1' => 'Bowel Ischemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Bowel ischemia occurs when blood flow to the intestines becomes reduced or blocked, leading to tissue injury and possible intestinal death. It is a serious surgical emergency.',
                'about_more' => '',
                'overview' => 'Bowel ischemia occurs when blood flow to the intestines becomes reduced or blocked, leading to tissue injury and possible intestinal death. It is a serious surgical emergency.',
                'symptoms' => [
            ['value' => 'Sudden severe abdominal pain'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Bloody stools or diarrhea'],
            ['value' => 'Abdominal swelling and tenderness'],
            ['value' => 'Fever and signs of shock in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Blood clot blocking intestinal arteries'],
            ['value' => 'Severe low blood pressure or shock'],
            ['value' => 'Atherosclerosis and vascular disease'],
            ['value' => 'Strangulated hernia or volvulus'],
            ['value' => 'Cardiac conditions causing embolism'],
        ],
                'risks' => [
            ['value' => 'Intestinal gangrene and perforation'],
            ['value' => 'Severe sepsis and peritonitis'],
            ['value' => 'Multi-organ failure'],
            ['value' => 'Need for extensive bowel removal'],
            ['value' => 'High mortality if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency imaging and vascular evaluation'],
            ['value' => 'Intravenous fluids and stabilization'],
            ['value' => 'Blood thinner or clot-removal procedures'],
            ['value' => 'Emergency bowel surgery'],
            ['value' => 'Intensive care monitoring and nutritional support'],
        ],
                'recovery' => 'Early diagnosis and surgery are critical for survival. Delayed treatment greatly increases complications and mortality risk.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Bowel Ischemia',
                'meta_description' => 'Bowel ischemia occurs when blood flow to the intestines becomes reduced or blocked, leading to tissue injury and possible intestinal death. It is a serious surg',
                'meta_keywords' => '',
            ]
        );
    }
}
