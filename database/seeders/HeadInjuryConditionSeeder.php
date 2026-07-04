<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadInjuryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Head Injury')],
            [
                'name' => 'Head Injury',
                'slug' => Str::slug('Head Injury'),
                'h1' => 'Head Injury',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Head injury refers to trauma involving the scalp, skull, or brain caused by accidents, falls, sports injuries, or physical assault. Injuries may range from mild concussion to severe brain damage requiring emergency neurosurgical care.',
                'about_more' => '',
                'overview' => 'Head injury refers to trauma involving the scalp, skull, or brain caused by accidents, falls, sports injuries, or physical assault. Injuries may range from mild concussion to severe brain damage requiring emergency neurosurgical care.',
                'symptoms' => [
            ['value' => 'Headache and dizziness'],
            ['value' => 'Loss of consciousness or confusion'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Memory problems or altered behavior'],
            ['value' => 'Weakness, seizures, or balance difficulty'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents'],
            ['value' => 'Falls from height or slipping injuries'],
            ['value' => 'Sports-related trauma'],
            ['value' => 'Physical assault or violence'],
            ['value' => 'Workplace or industrial accidents'],
        ],
                'risks' => [
            ['value' => 'Brain swelling or bleeding'],
            ['value' => 'Skull fractures and nerve injuries'],
            ['value' => 'Seizures and neurological deficits'],
            ['value' => 'Long-term cognitive impairment'],
            ['value' => 'Coma or life-threatening complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency neurological assessment'],
            ['value' => 'CT or MRI brain imaging'],
            ['value' => 'Observation and intensive monitoring'],
            ['value' => 'Neurosurgical intervention for severe injuries'],
            ['value' => 'Rehabilitation and cognitive therapy'],
        ],
                'recovery' => 'Mild head injuries often recover completely with rest and monitoring. Severe trauma may require prolonged rehabilitation and specialized neurosurgical care.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Head Injury',
                'meta_description' => 'Head injury refers to trauma involving the scalp, skull, or brain caused by accidents, falls, sports injuries, or physical assault. Injuries may range from mild',
                'meta_keywords' => '',
            ]
        );
    }
}
