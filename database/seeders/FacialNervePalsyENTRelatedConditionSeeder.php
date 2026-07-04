<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacialNervePalsyENTRelatedConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Facial Nerve Palsy (ENT-Related)')],
            [
                'name' => 'Facial Nerve Palsy (ENT-Related)',
                'slug' => Str::slug('Facial Nerve Palsy (ENT-Related)'),
                'h1' => 'Facial Nerve Palsy (ENT-Related)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'ENT-related facial nerve palsy involves weakness or paralysis of facial muscles due to disorders affecting the facial nerve within the ear or surrounding structures. Bell’s palsy and severe ear infections are common causes.',
                'about_more' => '',
                'overview' => 'ENT-related facial nerve palsy involves weakness or paralysis of facial muscles due to disorders affecting the facial nerve within the ear or surrounding structures. Bell’s palsy and severe ear infections are common causes.',
                'symptoms' => [
            ['value' => 'Sudden facial weakness on one side'],
            ['value' => 'Drooping of mouth or eyelid'],
            ['value' => 'Difficulty closing the eye'],
            ['value' => 'Altered taste sensation'],
            ['value' => 'Ear pain or sensitivity to sound'],
        ],
                'causes' => [
            ['value' => 'Viral infections affecting the facial nerve'],
            ['value' => 'Severe middle ear infections'],
            ['value' => 'Trauma or surgery around the ear'],
            ['value' => 'Tumors compressing the facial nerve'],
            ['value' => 'Inflammatory nerve swelling'],
        ],
                'risks' => [
            ['value' => 'Permanent facial weakness'],
            ['value' => 'Eye dryness and corneal injury'],
            ['value' => 'Speech or eating difficulty'],
            ['value' => 'Emotional and cosmetic concerns'],
            ['value' => 'Recurrent facial nerve dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Corticosteroids and antiviral medications'],
            ['value' => 'Eye protection and lubrication'],
            ['value' => 'Physiotherapy for facial muscles'],
            ['value' => 'Treatment of underlying ear disease'],
            ['value' => 'Surgical decompression in selected cases'],
        ],
                'recovery' => 'Many patients recover partially or completely within weeks to months. Early treatment improves nerve recovery outcomes.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Facial Nerve Palsy (ENT-Related)',
                'meta_description' => 'ENT-related facial nerve palsy involves weakness or paralysis of facial muscles due to disorders affecting the facial nerve within the ear or surrounding struct',
                'meta_keywords' => '',
            ]
        );
    }
}
