<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MesentericRevascularizationEndovascularOpenSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Mesenteric Revascularization (Endovascular / Open)')],
            [
                'title' => 'Mesenteric Revascularization (Endovascular / Open)',
                'slug' => Str::slug('Mesenteric Revascularization (Endovascular / Open)'),
                'introduction' => 'Mesenteric revascularization restores blood flow to the intestines in patients with mesenteric ischemia.',
                'what_is' => 'Reduced intestinal blood supply can become life-threatening if untreated.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Pain after eating'],
            ['value' => 'Weight loss'],
            ['value' => 'Nausea'],
            ['value' => 'Vomiting'],
            ['value' => 'Bloody stools'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Blood clots'],
            ['value' => 'Arterial narrowing'],
            ['value' => 'Cardiac embolism'],
            ['value' => 'Chronic vascular disease'],
        ],
                'condition_risks' => [
            ['value' => 'Intestinal necrosis'],
            ['value' => 'Sepsis'],
            ['value' => 'Organ failure'],
            ['value' => 'Recurrent ischemia'],
            ['value' => 'Death if untreated'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment may involve angioplasty with stenting or open bypass surgery to restore adequate intestinal circulation.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Nutritional support'],
            ['value' => 'Infection monitoring'],
            ['value' => 'Anticoagulation therapy'],
            ['value' => 'Gradual dietary progression'],
            ['value' => 'Follow-up vascular imaging'],
        ],
                'surgery_risks' => [
            ['value' => 'Intestinal necrosis'],
            ['value' => 'Sepsis'],
            ['value' => 'Organ failure'],
            ['value' => 'Recurrent ischemia'],
            ['value' => 'Death if untreated'],
        ],
                'long_term_outlook' => 'Early revascularization improves intestinal function, reduces complications, and improves survival outcomes.',
                'conclusion' => '',
                'seo_title' => 'Mesenteric Revascularization (Endovascular / Open)',
                'seo_description' => 'Mesenteric revascularization restores blood flow to the intestines in patients with mesenteric ischemia.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
