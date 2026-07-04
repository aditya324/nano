<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MesentericIschemiaAcuteChronicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mesenteric Ischemia (Acute / Chronic)')],
            [
                'name' => 'Mesenteric Ischemia (Acute / Chronic)',
                'slug' => Str::slug('Mesenteric Ischemia (Acute / Chronic)'),
                'h1' => 'Mesenteric Ischemia (Acute / Chronic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mesenteric ischemia occurs when blood flow to the intestines is reduced or blocked, leading to intestinal injury. Acute mesenteric ischemia is a surgical emergency, while chronic disease develops gradually.',
                'about_more' => '',
                'overview' => 'Mesenteric ischemia occurs when blood flow to the intestines is reduced or blocked, leading to intestinal injury. Acute mesenteric ischemia is a surgical emergency, while chronic disease develops gradually.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Pain after eating'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Weight loss due to fear of eating'],
            ['value' => 'Diarrhea or bloody stools'],
        ],
                'causes' => [
            ['value' => 'Arterial blockage from clots'],
            ['value' => 'Atherosclerosis of mesenteric vessels'],
            ['value' => 'Low blood pressure and shock'],
            ['value' => 'Cardiac emboli'],
            ['value' => 'Vascular inflammation disorders'],
        ],
                'risks' => [
            ['value' => 'Intestinal tissue death'],
            ['value' => 'Bowel perforation'],
            ['value' => 'Severe infection and sepsis'],
            ['value' => 'Malnutrition and dehydration'],
            ['value' => 'Life-threatening abdominal emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency vascular evaluation'],
            ['value' => 'Anticoagulation and thrombolysis'],
            ['value' => 'Angioplasty or vascular stenting'],
            ['value' => 'Surgical bowel resection if damaged'],
            ['value' => 'Intensive supportive care and monitoring'],
        ],
                'recovery' => 'Early diagnosis greatly improves survival. Delayed treatment can result in severe intestinal damage and high mortality.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Mesenteric Ischemia (Acute / Chronic)',
                'meta_description' => 'Mesenteric ischemia occurs when blood flow to the intestines is reduced or blocked, leading to intestinal injury. Acute mesenteric ischemia is a surgical emerge',
                'meta_keywords' => '',
            ]
        );
    }
}
