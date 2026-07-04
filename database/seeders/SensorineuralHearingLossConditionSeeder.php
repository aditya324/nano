<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SensorineuralHearingLossConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Sensorineural Hearing Loss')],
            [
                'name' => 'Sensorineural Hearing Loss',
                'slug' => Str::slug('Sensorineural Hearing Loss'),
                'h1' => 'Sensorineural Hearing Loss',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Sensorineural hearing loss results from damage to the inner ear or hearing nerve pathways. It may occur gradually with aging or suddenly due to infection, trauma, or nerve disorders.',
                'about_more' => '',
                'overview' => 'Sensorineural hearing loss results from damage to the inner ear or hearing nerve pathways. It may occur gradually with aging or suddenly due to infection, trauma, or nerve disorders.',
                'symptoms' => [
            ['value' => 'Difficulty understanding speech clearly'],
            ['value' => 'Ringing in the ears (tinnitus)'],
            ['value' => 'Reduced hearing in one or both ears'],
            ['value' => 'Trouble hearing in noisy environments'],
            ['value' => 'Dizziness or balance disturbances sometimes'],
        ],
                'causes' => [
            ['value' => 'Aging-related inner ear degeneration'],
            ['value' => 'Loud noise exposure'],
            ['value' => 'Viral infections affecting the inner ear'],
            ['value' => 'Head injury or nerve disorders'],
            ['value' => 'Ototoxic medications damaging hearing nerves'],
        ],
                'risks' => [
            ['value' => 'Permanent hearing loss'],
            ['value' => 'Communication and social difficulties'],
            ['value' => 'Emotional stress and isolation'],
            ['value' => 'Reduced academic or work performance'],
            ['value' => 'Balance disorders and falls'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Comprehensive hearing evaluation'],
            ['value' => 'Hearing aids or assistive devices'],
            ['value' => 'Cochlear implants for severe cases'],
            ['value' => 'Treatment of underlying medical causes'],
            ['value' => 'Hearing rehabilitation and counseling'],
        ],
                'recovery' => 'Some forms are permanent, but modern hearing devices significantly improve communication and daily functioning.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Sensorineural Hearing Loss',
                'meta_description' => 'Sensorineural hearing loss results from damage to the inner ear or hearing nerve pathways. It may occur gradually with aging or suddenly due to infection, traum',
                'meta_keywords' => '',
            ]
        );
    }
}
