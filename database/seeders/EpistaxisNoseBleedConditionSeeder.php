<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EpistaxisNoseBleedConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Epistaxis (Nose Bleed)')],
            [
                'name' => 'Epistaxis (Nose Bleed)',
                'slug' => Str::slug('Epistaxis (Nose Bleed)'),
                'h1' => 'Epistaxis (Nose Bleed)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Epistaxis refers to bleeding from the nose due to rupture of blood vessels inside the nasal cavity. It is common in children and adults and may range from mild bleeding to severe recurrent episodes.',
                'about_more' => '',
                'overview' => 'Epistaxis refers to bleeding from the nose due to rupture of blood vessels inside the nasal cavity. It is common in children and adults and may range from mild bleeding to severe recurrent episodes.',
                'symptoms' => [
            ['value' => 'Bleeding from one or both nostrils'],
            ['value' => 'Blood dripping into the throat'],
            ['value' => 'Nasal dryness or irritation'],
            ['value' => 'Dizziness in severe blood loss'],
            ['value' => 'Anxiety or discomfort during bleeding episodes'],
        ],
                'causes' => [
            ['value' => 'Dry weather and nasal irritation'],
            ['value' => 'Nose picking or trauma'],
            ['value' => 'High blood pressure'],
            ['value' => 'Sinus infections or allergies'],
            ['value' => 'Blood-thinning medications'],
        ],
                'risks' => [
            ['value' => 'Recurrent nosebleeds'],
            ['value' => 'Significant blood loss in severe cases'],
            ['value' => 'Nasal infection or crusting'],
            ['value' => 'Breathing discomfort during active bleeding'],
            ['value' => 'Underlying systemic disease detection delay'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal compression and first aid measures'],
            ['value' => 'Nasal moisturizing and saline sprays'],
            ['value' => 'Cauterization of bleeding vessels'],
            ['value' => 'Nasal packing for severe bleeding'],
            ['value' => 'Management of underlying causes'],
        ],
                'recovery' => 'Most nosebleeds stop with simple treatment. Persistent or recurrent cases require detailed ENT evaluation.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Epistaxis (Nose Bleed)',
                'meta_description' => 'Epistaxis refers to bleeding from the nose due to rupture of blood vessels inside the nasal cavity. It is common in children and adults and may range from mild ',
                'meta_keywords' => '',
            ]
        );
    }
}
