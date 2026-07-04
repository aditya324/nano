<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TympanicMembranePerforationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tympanic Membrane Perforation')],
            [
                'name' => 'Tympanic Membrane Perforation',
                'slug' => Str::slug('Tympanic Membrane Perforation'),
                'h1' => 'Tympanic Membrane Perforation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tympanic membrane perforation refers to a hole or tear in the eardrum caused by infection, trauma, or sudden pressure changes. It can affect hearing and increase the risk of ear infections.',
                'about_more' => '',
                'overview' => 'Tympanic membrane perforation refers to a hole or tear in the eardrum caused by infection, trauma, or sudden pressure changes. It can affect hearing and increase the risk of ear infections.',
                'symptoms' => [
            ['value' => 'Sudden ear pain followed by discharge'],
            ['value' => 'Hearing loss or muffled hearing'],
            ['value' => 'Ringing sensation in the ear'],
            ['value' => 'Ear discharge or bleeding'],
            ['value' => 'Dizziness or imbalance sometimes'],
        ],
                'causes' => [
            ['value' => 'Middle ear infections'],
            ['value' => 'Trauma from objects inserted into the ear'],
            ['value' => 'Loud blast or pressure injury'],
            ['value' => 'Head injury or accidents'],
            ['value' => 'Sudden pressure changes during flying or diving'],
        ],
                'risks' => [
            ['value' => 'Chronic ear infections'],
            ['value' => 'Persistent hearing loss'],
            ['value' => 'Recurrent ear discharge'],
            ['value' => 'Middle ear damage'],
            ['value' => 'Cholesteatoma formation in chronic cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and hearing assessment'],
            ['value' => 'Antibiotics if infection is present'],
            ['value' => 'Keeping the ear dry and protected'],
            ['value' => 'Observation for spontaneous healing'],
            ['value' => 'Tympanoplasty surgery if perforation persists'],
        ],
                'recovery' => 'Small perforations often heal naturally. Larger or chronic defects may require surgery for full recovery.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Tympanic Membrane Perforation',
                'meta_description' => 'Tympanic membrane perforation refers to a hole or tear in the eardrum caused by infection, trauma, or sudden pressure changes. It can affect hearing and increas',
                'meta_keywords' => '',
            ]
        );
    }
}
