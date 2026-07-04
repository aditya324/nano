<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CranialBoneDefectsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cranial Bone Defects')],
            [
                'name' => 'Cranial Bone Defects',
                'slug' => Str::slug('Cranial Bone Defects'),
                'h1' => 'Cranial Bone Defects',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cranial bone defects are abnormalities or missing portions of the skull caused by trauma, congenital disorders, infections, surgery, or tumors. These defects may expose the brain to injury and can affect appearance and neurological protection.',
                'about_more' => '',
                'overview' => 'Cranial bone defects are abnormalities or missing portions of the skull caused by trauma, congenital disorders, infections, surgery, or tumors. These defects may expose the brain to injury and can affect appearance and neurological protection.',
                'symptoms' => [
            ['value' => 'Visible skull deformity or depression'],
            ['value' => 'Headaches and localized discomfort'],
            ['value' => 'Neurological symptoms after trauma'],
            ['value' => 'Cosmetic concerns and asymmetry'],
            ['value' => 'Increased vulnerability to head injury'],
        ],
                'causes' => [
            ['value' => 'Head trauma or skull fractures'],
            ['value' => 'Congenital skull abnormalities'],
            ['value' => 'Surgical removal of skull bone'],
            ['value' => 'Bone infections or tumors'],
            ['value' => 'Previous neurosurgical procedures'],
        ],
                'risks' => [
            ['value' => 'Brain vulnerability to external injury'],
            ['value' => 'Neurological deficits in severe cases'],
            ['value' => 'Infection and wound complications'],
            ['value' => 'Cosmetic deformity and psychological distress'],
            ['value' => 'Seizures or chronic headaches'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CT skull imaging and neurological evaluation'],
            ['value' => 'Cranioplasty using synthetic or bone graft materials'],
            ['value' => 'Infection management if required'],
            ['value' => 'Reconstructive neurosurgical procedures'],
            ['value' => 'Rehabilitation and follow-up care'],
        ],
                'recovery' => 'Most patients improve well after reconstructive surgery. Early correction restores skull protection, cosmetic appearance, and neurological safety.',
                'sort_order' => 44,
                'is_active' => true,
                'meta_title' => 'Cranial Bone Defects',
                'meta_description' => 'Cranial bone defects are abnormalities or missing portions of the skull caused by trauma, congenital disorders, infections, surgery, or tumors. These defects ma',
                'meta_keywords' => '',
            ]
        );
    }
}
