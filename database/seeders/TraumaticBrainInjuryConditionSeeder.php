<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaticBrainInjuryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Traumatic Brain Injury')],
            [
                'name' => 'Traumatic Brain Injury',
                'slug' => Str::slug('Traumatic Brain Injury'),
                'h1' => 'Traumatic Brain Injury',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Traumatic brain injury (TBI) is a serious condition caused by sudden external force damaging the brain. The injury may be mild, moderate, or severe and can affect cognition, speech, movement, memory, emotions, and consciousness.',
                'about_more' => '',
                'overview' => 'Traumatic brain injury (TBI) is a serious condition caused by sudden external force damaging the brain. The injury may be mild, moderate, or severe and can affect cognition, speech, movement, memory, emotions, and consciousness.',
                'symptoms' => [
            ['value' => 'Persistent headache or confusion'],
            ['value' => 'Loss of consciousness or altered awareness'],
            ['value' => 'Memory and concentration difficulties'],
            ['value' => 'Weakness, speech, or coordination problems'],
            ['value' => 'Mood and personality changes'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents'],
            ['value' => 'Falls and sports injuries'],
            ['value' => 'Assault or violent trauma'],
            ['value' => 'Explosive or workplace injuries'],
            ['value' => 'Penetrating head trauma'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and intracranial bleeding'],
            ['value' => 'Seizures and chronic neurological deficits'],
            ['value' => 'Cognitive and behavioral disturbances'],
            ['value' => 'Permanent disability or paralysis'],
            ['value' => 'Coma or death in severe injuries'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency stabilization and ICU care'],
            ['value' => 'Neurosurgical decompression if required'],
            ['value' => 'Medications to control swelling and seizures'],
            ['value' => 'Physiotherapy and neurorehabilitation'],
            ['value' => 'Long-term neurological follow-up'],
        ],
                'recovery' => 'Recovery depends on injury severity and prompt treatment. Early rehabilitation significantly improves physical, cognitive, and emotional recovery outcomes.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Traumatic Brain Injury',
                'meta_description' => 'Traumatic brain injury (TBI) is a serious condition caused by sudden external force damaging the brain. The injury may be mild, moderate, or severe and can affe',
                'meta_keywords' => '',
            ]
        );
    }
}
