<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteLimbIschemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Limb Ischemia')],
            [
                'name' => 'Acute Limb Ischemia',
                'slug' => Str::slug('Acute Limb Ischemia'),
                'h1' => 'Acute Limb Ischemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute limb ischemia is a sudden decrease in blood flow to a limb caused by arterial blockage, leading to an emergency situation requiring immediate treatment.',
                'about_more' => '',
                'overview' => 'Acute limb ischemia is a sudden decrease in blood flow to a limb caused by arterial blockage, leading to an emergency situation requiring immediate treatment.',
                'symptoms' => [
            ['value' => 'Sudden severe limb pain'],
            ['value' => 'Cold and pale limb'],
            ['value' => 'Absent pulses'],
            ['value' => 'Numbness or paralysis'],
            ['value' => 'Weakness of the affected limb'],
        ],
                'causes' => [
            ['value' => 'Blood clot or embolism'],
            ['value' => 'Sudden arterial thrombosis'],
            ['value' => 'Trauma-related vascular injury'],
            ['value' => 'Aneurysm complications'],
            ['value' => 'Cardiac arrhythmias causing emboli'],
        ],
                'risks' => [
            ['value' => 'Permanent tissue death'],
            ['value' => 'Limb gangrene'],
            ['value' => 'Severe infection and sepsis'],
            ['value' => 'Limb amputation'],
            ['value' => 'Death if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency anticoagulation therapy'],
            ['value' => 'Catheter-based thrombolysis'],
            ['value' => 'Surgical embolectomy or bypass'],
            ['value' => 'Vascular imaging and monitoring'],
            ['value' => 'Intensive supportive care'],
        ],
                'recovery' => 'Immediate treatment is essential to save the limb and prevent permanent disability.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Acute Limb Ischemia',
                'meta_description' => 'Acute limb ischemia is a sudden decrease in blood flow to a limb caused by arterial blockage, leading to an emergency situation requiring immediate treatment.',
                'meta_keywords' => '',
            ]
        );
    }
}
