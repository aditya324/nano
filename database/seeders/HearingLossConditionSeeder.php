<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HearingLossConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hearing Loss')],
            [
                'name' => 'Hearing Loss',
                'slug' => Str::slug('Hearing Loss'),
                'h1' => 'Hearing Loss',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hearing loss refers to partial or complete inability to hear sounds normally. It may affect one or both ears and can occur gradually or suddenly due to infections, aging, trauma, or nerve-related disorders.',
                'about_more' => '',
                'overview' => 'Hearing loss refers to partial or complete inability to hear sounds normally. It may affect one or both ears and can occur gradually or suddenly due to infections, aging, trauma, or nerve-related disorders.',
                'symptoms' => [
            ['value' => 'Difficulty hearing conversations'],
            ['value' => 'Frequently asking others to repeat words'],
            ['value' => 'Ringing in the ears (tinnitus)'],
            ['value' => 'Turning TV or phone volume very high'],
            ['value' => 'Social withdrawal due to communication problems'],
        ],
                'causes' => [
            ['value' => 'Ear infections or wax blockage'],
            ['value' => 'Aging-related hearing decline'],
            ['value' => 'Exposure to loud noise'],
            ['value' => 'Nerve or inner ear disorders'],
            ['value' => 'Head trauma or certain medications'],
        ],
                'risks' => [
            ['value' => 'Communication difficulties'],
            ['value' => 'Social isolation and depression'],
            ['value' => 'Delayed speech development in children'],
            ['value' => 'Reduced work or academic performance'],
            ['value' => 'Cognitive decline in older adults'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hearing assessment and audiometry'],
            ['value' => 'Ear wax removal or infection treatment'],
            ['value' => 'Hearing aids or assistive devices'],
            ['value' => 'Cochlear implant surgery in severe cases'],
            ['value' => 'Speech and hearing rehabilitation therapy'],
        ],
                'recovery' => 'The outcome depends on the underlying cause. Early diagnosis and hearing support improve communication and quality of life.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Hearing Loss',
                'meta_description' => 'Hearing loss refers to partial or complete inability to hear sounds normally. It may affect one or both ears and can occur gradually or suddenly due to infectio',
                'meta_keywords' => '',
            ]
        );
    }
}
