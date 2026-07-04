<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteOtitisMediaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Otitis Media')],
            [
                'name' => 'Acute Otitis Media',
                'slug' => Str::slug('Acute Otitis Media'),
                'h1' => 'Acute Otitis Media',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute otitis media is a sudden infection of the middle ear, commonly affecting children. It usually develops following upper respiratory infections and causes fluid buildup behind the eardrum.',
                'about_more' => '',
                'overview' => 'Acute otitis media is a sudden infection of the middle ear, commonly affecting children. It usually develops following upper respiratory infections and causes fluid buildup behind the eardrum.',
                'symptoms' => [
            ['value' => 'Ear pain and irritability'],
            ['value' => 'Fever and crying in children'],
            ['value' => 'Hearing difficulty or ear fullness'],
            ['value' => 'Poor feeding or disturbed sleep'],
            ['value' => 'Ear discharge if eardrum ruptures'],
        ],
                'causes' => [
            ['value' => 'Viral or bacterial infections'],
            ['value' => 'Upper respiratory tract infections'],
            ['value' => 'Enlarged adenoids blocking ear drainage'],
            ['value' => 'Exposure to smoke or pollution'],
            ['value' => 'Weak immunity in children'],
        ],
                'risks' => [
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Hearing loss and speech delay in children'],
            ['value' => 'Eardrum perforation'],
            ['value' => 'Spread of infection to nearby bone'],
            ['value' => 'Chronic middle ear disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and monitoring'],
            ['value' => 'Antibiotics when indicated'],
            ['value' => 'Pain and fever management'],
            ['value' => 'Nasal decongestants or supportive care'],
            ['value' => 'Ear tube surgery for recurrent infections'],
        ],
                'recovery' => 'Most children recover completely with timely treatment. Recurrent infections may require long-term ENT follow-up.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Acute Otitis Media',
                'meta_description' => 'Acute otitis media is a sudden infection of the middle ear, commonly affecting children. It usually develops following upper respiratory infections and causes f',
                'meta_keywords' => '',
            ]
        );
    }
}
