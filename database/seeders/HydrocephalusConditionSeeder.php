<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HydrocephalusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hydrocephalus')],
            [
                'name' => 'Hydrocephalus',
                'slug' => Str::slug('Hydrocephalus'),
                'h1' => 'Hydrocephalus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hydrocephalus is a condition in which excess cerebrospinal fluid (CSF) accumulates within the brain’s ventricles, increasing pressure inside the skull. It may occur in infants, children, or adults due to congenital abnormalities, infections, tumors, bleeding, or trauma.',
                'about_more' => '',
                'overview' => 'Hydrocephalus is a condition in which excess cerebrospinal fluid (CSF) accumulates within the brain’s ventricles, increasing pressure inside the skull. It may occur in infants, children, or adults due to congenital abnormalities, infections, tumors, bleeding, or trauma.',
                'symptoms' => [
            ['value' => 'Headache and vomiting'],
            ['value' => 'Enlarged head size in infants'],
            ['value' => 'Balance and walking difficulties'],
            ['value' => 'Memory and concentration problems'],
            ['value' => 'Vision disturbances or drowsiness'],
        ],
                'causes' => [
            ['value' => 'Congenital brain abnormalities'],
            ['value' => 'Brain tumors blocking CSF flow'],
            ['value' => 'Brain infections such as meningitis'],
            ['value' => 'Intracranial bleeding or trauma'],
            ['value' => 'Age-related normal pressure hydrocephalus'],
        ],
                'risks' => [
            ['value' => 'Increased intracranial pressure'],
            ['value' => 'Brain tissue damage and cognitive decline'],
            ['value' => 'Developmental delay in children'],
            ['value' => 'Walking and balance impairment'],
            ['value' => 'Permanent neurological disability if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Brain imaging and neurological evaluation'],
            ['value' => 'Ventriculoperitoneal (VP) shunt surgery'],
            ['value' => 'Endoscopic third ventriculostomy (ETV)'],
            ['value' => 'Monitoring of intracranial pressure'],
            ['value' => 'Rehabilitation and neurological follow-up'],
        ],
                'recovery' => 'Early treatment helps prevent permanent brain damage and improves neurological function. Many patients achieve good outcomes with timely neurosurgical intervention and long-term follow-up.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Hydrocephalus',
                'meta_description' => 'Hydrocephalus is a condition in which excess cerebrospinal fluid (CSF) accumulates within the brain’s ventricles, increasing pressure inside the skull. It may o',
                'meta_keywords' => '',
            ]
        );
    }
}
