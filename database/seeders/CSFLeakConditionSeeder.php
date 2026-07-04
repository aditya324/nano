<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CSFLeakConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('CSF Leak')],
            [
                'name' => 'CSF Leak',
                'slug' => Str::slug('CSF Leak'),
                'h1' => 'CSF Leak',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cerebrospinal fluid (CSF) leak occurs when the protective fluid surrounding the brain or spinal cord escapes through a defect in the skull or spinal coverings. CSF leaks may result from trauma, surgery, infections, or spontaneous defects and increase the risk of meningitis.',
                'about_more' => '',
                'overview' => 'Cerebrospinal fluid (CSF) leak occurs when the protective fluid surrounding the brain or spinal cord escapes through a defect in the skull or spinal coverings. CSF leaks may result from trauma, surgery, infections, or spontaneous defects and increase the risk of meningitis.',
                'symptoms' => [
            ['value' => 'Clear fluid leakage from the nose or ear'],
            ['value' => 'Positional headaches worsening when standing'],
            ['value' => 'Neck pain and dizziness'],
            ['value' => 'Nausea or sensitivity to light'],
            ['value' => 'Recurrent meningitis or infections'],
        ],
                'causes' => [
            ['value' => 'Head trauma or skull fractures'],
            ['value' => 'Neurosurgical or spinal procedures'],
            ['value' => 'Congenital defects of skull or spine'],
            ['value' => 'Elevated intracranial pressure'],
            ['value' => 'Spontaneous tears in protective membranes'],
        ],
                'risks' => [
            ['value' => 'Meningitis and severe infections'],
            ['value' => 'Persistent headaches and neurological symptoms'],
            ['value' => 'Brain sagging due to low CSF pressure'],
            ['value' => 'Chronic fluid leakage and weakness'],
            ['value' => 'Recurrent hospitalizations and complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI or CT cisternography imaging'],
            ['value' => 'Bed rest and hydration in mild cases'],
            ['value' => 'Lumbar drainage procedures'],
            ['value' => 'Surgical repair of CSF leak defects'],
            ['value' => 'Antibiotics and infection prevention measures'],
        ],
                'recovery' => 'Many patients recover completely after surgical repair or conservative management. Early treatment reduces the risk of meningitis and neurological complications.',
                'sort_order' => 45,
                'is_active' => true,
                'meta_title' => 'CSF Leak',
                'meta_description' => 'Cerebrospinal fluid (CSF) leak occurs when the protective fluid surrounding the brain or spinal cord escapes through a defect in the skull or spinal coverings. ',
                'meta_keywords' => '',
            ]
        );
    }
}
