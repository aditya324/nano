<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MixedHearingLossConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mixed Hearing Loss')],
            [
                'name' => 'Mixed Hearing Loss',
                'slug' => Str::slug('Mixed Hearing Loss'),
                'h1' => 'Mixed Hearing Loss',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mixed hearing loss is a combination of conductive and sensorineural hearing loss, involving both the middle/outer ear and the inner ear or hearing nerve. Patients may experience significant hearing difficulty requiring combined treatment approaches.',
                'about_more' => '',
                'overview' => 'Mixed hearing loss is a combination of conductive and sensorineural hearing loss, involving both the middle/outer ear and the inner ear or hearing nerve. Patients may experience significant hearing difficulty requiring combined treatment approaches.',
                'symptoms' => [
            ['value' => 'Moderate to severe hearing difficulty'],
            ['value' => 'Ear fullness or discomfort'],
            ['value' => 'Difficulty understanding speech'],
            ['value' => 'Tinnitus or ringing in the ears'],
            ['value' => 'Balance problems in some cases'],
        ],
                'causes' => [
            ['value' => 'Chronic ear infections with nerve damage'],
            ['value' => 'Aging combined with middle ear disease'],
            ['value' => 'Ear trauma affecting multiple structures'],
            ['value' => 'Genetic hearing disorders'],
            ['value' => 'Long-standing untreated hearing problems'],
        ],
                'risks' => [
            ['value' => 'Progressive hearing deterioration'],
            ['value' => 'Communication and learning difficulties'],
            ['value' => 'Social withdrawal and emotional stress'],
            ['value' => 'Reduced quality of life'],
            ['value' => 'Permanent hearing disability if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Detailed audiological assessment'],
            ['value' => 'Medical or surgical treatment for conductive causes'],
            ['value' => 'Hearing aids or cochlear implants'],
            ['value' => 'Management of chronic ear disease'],
            ['value' => 'Long-term ENT and hearing rehabilitation care'],
        ],
                'recovery' => 'The prognosis depends on the severity and cause of both hearing components. Early intervention improves hearing function and communication outcomes.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Mixed Hearing Loss',
                'meta_description' => 'Mixed hearing loss is a combination of conductive and sensorineural hearing loss, involving both the middle/outer ear and the inner ear or hearing nerve. Patien',
                'meta_keywords' => '',
            ]
        );
    }
}
