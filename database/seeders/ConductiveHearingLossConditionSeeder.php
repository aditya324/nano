<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConductiveHearingLossConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Conductive Hearing Loss')],
            [
                'name' => 'Conductive Hearing Loss',
                'slug' => Str::slug('Conductive Hearing Loss'),
                'h1' => 'Conductive Hearing Loss',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Conductive hearing loss occurs when sound cannot effectively pass through the outer or middle ear to the inner ear. It is often treatable and may result from infections, wax buildup, or structural abnormalities.',
                'about_more' => '',
                'overview' => 'Conductive hearing loss occurs when sound cannot effectively pass through the outer or middle ear to the inner ear. It is often treatable and may result from infections, wax buildup, or structural abnormalities.',
                'symptoms' => [
            ['value' => 'Muffled or reduced hearing'],
            ['value' => 'Ear fullness or blockage sensation'],
            ['value' => 'Difficulty hearing soft sounds'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Improved hearing in noisy environments sometimes'],
        ],
                'causes' => [
            ['value' => 'Ear wax impaction'],
            ['value' => 'Middle ear infections or fluid buildup'],
            ['value' => 'Eardrum perforation'],
            ['value' => 'Otosclerosis or middle ear bone problems'],
            ['value' => 'Congenital ear abnormalities'],
        ],
                'risks' => [
            ['value' => 'Persistent hearing impairment'],
            ['value' => 'Speech delay in children'],
            ['value' => 'Chronic middle ear disease'],
            ['value' => 'Recurrent infections and discomfort'],
            ['value' => 'Reduced communication ability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and audiometry'],
            ['value' => 'Ear cleaning or infection treatment'],
            ['value' => 'Surgical repair of eardrum or bones'],
            ['value' => 'Hearing aids when required'],
            ['value' => 'Regular hearing monitoring'],
        ],
                'recovery' => 'Most conductive hearing loss cases improve with appropriate medical or surgical treatment.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Conductive Hearing Loss',
                'meta_description' => 'Conductive hearing loss occurs when sound cannot effectively pass through the outer or middle ear to the inner ear. It is often treatable and may result from in',
                'meta_keywords' => '',
            ]
        );
    }
}
