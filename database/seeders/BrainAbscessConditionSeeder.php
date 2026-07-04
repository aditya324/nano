<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrainAbscessConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Brain Abscess')],
            [
                'name' => 'Brain Abscess',
                'slug' => Str::slug('Brain Abscess'),
                'h1' => 'Brain Abscess',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Brain abscess is a serious infection in which pus collects within brain tissue due to bacterial, fungal, or parasitic infection. It is a medical emergency because the swelling and infection can damage brain tissue and increase pressure inside the skull.',
                'about_more' => '',
                'overview' => 'Brain abscess is a serious infection in which pus collects within brain tissue due to bacterial, fungal, or parasitic infection. It is a medical emergency because the swelling and infection can damage brain tissue and increase pressure inside the skull.',
                'symptoms' => [
            ['value' => 'Severe headache and fever'],
            ['value' => 'Vomiting and confusion'],
            ['value' => 'Seizures or neurological deficits'],
            ['value' => 'Weakness or speech difficulties'],
            ['value' => 'Altered consciousness in severe cases'],
        ],
                'causes' => [
            ['value' => 'Spread of infection from ear or sinus infections'],
            ['value' => 'Bloodstream infections reaching the brain'],
            ['value' => 'Head trauma or neurosurgical procedures'],
            ['value' => 'Weakened immune system'],
            ['value' => 'Dental infections or congenital heart disease'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and increased intracranial pressure'],
            ['value' => 'Seizures and neurological deficits'],
            ['value' => 'Rupture of the abscess into brain spaces'],
            ['value' => 'Permanent brain damage'],
            ['value' => 'Life-threatening infection and coma'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency MRI or CT brain imaging'],
            ['value' => 'Intravenous antibiotics or antifungal therapy'],
            ['value' => 'Neurosurgical drainage of the abscess'],
            ['value' => 'ICU monitoring and seizure management'],
            ['value' => 'Rehabilitation after neurological recovery'],
        ],
                'recovery' => 'Early diagnosis and aggressive treatment significantly improve survival and neurological recovery. Delayed treatment increases the risk of severe complications.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Brain Abscess',
                'meta_description' => 'Brain abscess is a serious infection in which pus collects within brain tissue due to bacterial, fungal, or parasitic infection. It is a medical emergency becau',
                'meta_keywords' => '',
            ]
        );
    }
}
