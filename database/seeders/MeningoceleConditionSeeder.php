<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MeningoceleConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Meningocele')],
            [
                'name' => 'Meningocele',
                'slug' => Str::slug('Meningocele'),
                'h1' => 'Meningocele',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Meningocele is a type of neural tube defect in which the protective membranes surrounding the spinal cord protrude through an opening in the spine, forming a fluid-filled sac. Unlike myelomeningocele, the spinal cord itself usually remains in its normal position. Early surgical correction is important to prevent infection and neurological complications.',
                'about_more' => '',
                'overview' => 'Meningocele is a type of neural tube defect in which the protective membranes surrounding the spinal cord protrude through an opening in the spine, forming a fluid-filled sac. Unlike myelomeningocele, the spinal cord itself usually remains in its normal position. Early surgical correction is important to prevent infection and neurological complications.',
                'symptoms' => [
            ['value' => 'Visible fluid-filled swelling over the spine'],
            ['value' => 'Mild weakness or neurological symptoms in some children'],
            ['value' => 'Back swelling present at birth'],
            ['value' => 'Skin abnormalities over the spinal area'],
            ['value' => 'Rare bladder or bowel dysfunction'],
        ],
                'causes' => [
            ['value' => 'Failure of neural tube closure during fetal development'],
            ['value' => 'Maternal folic acid deficiency'],
            ['value' => 'Genetic and environmental factors'],
            ['value' => 'Maternal diabetes or obesity'],
            ['value' => 'Exposure to harmful medications during pregnancy'],
        ],
                'risks' => [
            ['value' => 'Risk of infection or meningitis'],
            ['value' => 'Neurological deficits if spinal tissue is affected'],
            ['value' => 'Spinal deformities or instability'],
            ['value' => 'Delayed developmental milestones'],
            ['value' => 'Hydrocephalus in associated conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Early neurosurgical repair of the defect'],
            ['value' => 'MRI or spinal imaging evaluation'],
            ['value' => 'Infection prevention and wound care'],
            ['value' => 'Physiotherapy and developmental monitoring'],
            ['value' => 'Long-term neurological follow-up'],
        ],
                'recovery' => 'Most children with isolated meningocele have good outcomes after surgery, especially when treated early. Long-term neurological function is often preserved.',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Meningocele',
                'meta_description' => 'Meningocele is a type of neural tube defect in which the protective membranes surrounding the spinal cord protrude through an opening in the spine, forming a fl',
                'meta_keywords' => '',
            ]
        );
    }
}
