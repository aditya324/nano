<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImpactedEarWaxConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Impacted Ear Wax')],
            [
                'name' => 'Impacted Ear Wax',
                'slug' => Str::slug('Impacted Ear Wax'),
                'h1' => 'Impacted Ear Wax',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Impacted ear wax occurs when excessive ear wax accumulates and blocks the ear canal. Although ear wax normally protects the ear, excessive buildup can cause hearing difficulty, discomfort, and irritation.',
                'about_more' => '',
                'overview' => 'Impacted ear wax occurs when excessive ear wax accumulates and blocks the ear canal. Although ear wax normally protects the ear, excessive buildup can cause hearing difficulty, discomfort, and irritation.',
                'symptoms' => [
            ['value' => 'Blocked or muffled hearing'],
            ['value' => 'Ear fullness or discomfort'],
            ['value' => 'Ringing sound in the ear (tinnitus)'],
            ['value' => 'Itching or irritation in the ear canal'],
            ['value' => 'Dizziness in severe blockage cases'],
        ],
                'causes' => [
            ['value' => 'Excessive wax production'],
            ['value' => 'Use of cotton buds pushing wax deeper'],
            ['value' => 'Narrow ear canals'],
            ['value' => 'Hearing aid or earplug use'],
            ['value' => 'Poor natural wax clearance mechanisms'],
        ],
                'risks' => [
            ['value' => 'Temporary hearing loss'],
            ['value' => 'Ear canal infection or irritation'],
            ['value' => 'Ear pain and dizziness'],
            ['value' => 'Eardrum injury from improper cleaning'],
            ['value' => 'Recurrent wax impaction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT ear examination'],
            ['value' => 'Wax-softening ear drops'],
            ['value' => 'Microsuction or ear syringing'],
            ['value' => 'Avoiding sharp objects or cotton buds'],
            ['value' => 'Regular ear hygiene and monitoring'],
        ],
                'recovery' => 'Symptoms usually improve immediately after wax removal. Proper ear care helps prevent recurrence.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Impacted Ear Wax',
                'meta_description' => 'Impacted ear wax occurs when excessive ear wax accumulates and blocks the ear canal. Although ear wax normally protects the ear, excessive buildup can cause hea',
                'meta_keywords' => '',
            ]
        );
    }
}
