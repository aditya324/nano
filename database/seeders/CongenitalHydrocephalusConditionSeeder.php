<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CongenitalHydrocephalusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Congenital Hydrocephalus')],
            [
                'name' => 'Congenital Hydrocephalus',
                'slug' => Str::slug('Congenital Hydrocephalus'),
                'h1' => 'Congenital Hydrocephalus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Congenital hydrocephalus is a condition present at birth in which excessive cerebrospinal fluid (CSF) accumulates inside the brain’s ventricles. The increased fluid causes pressure on brain tissues and may affect brain growth, development, and neurological function. It may occur due to developmental abnormalities, infections during pregnancy, or genetic conditions.',
                'about_more' => '',
                'overview' => 'Congenital hydrocephalus is a condition present at birth in which excessive cerebrospinal fluid (CSF) accumulates inside the brain’s ventricles. The increased fluid causes pressure on brain tissues and may affect brain growth, development, and neurological function. It may occur due to developmental abnormalities, infections during pregnancy, or genetic conditions.',
                'symptoms' => [
            ['value' => 'Enlarged head size in infants'],
            ['value' => 'Bulging or tense soft spot on the head'],
            ['value' => 'Vomiting and poor feeding'],
            ['value' => 'Developmental delay and irritability'],
            ['value' => 'Seizures or downward deviation of the eyes'],
        ],
                'causes' => [
            ['value' => 'Congenital brain malformations'],
            ['value' => 'Blockage of cerebrospinal fluid pathways'],
            ['value' => 'Genetic abnormalities or syndromes'],
            ['value' => 'Infections during pregnancy'],
            ['value' => 'Bleeding inside the brain before or during birth'],
        ],
                'risks' => [
            ['value' => 'Increased intracranial pressure'],
            ['value' => 'Developmental and learning difficulties'],
            ['value' => 'Vision and coordination problems'],
            ['value' => 'Seizures and neurological deficits'],
            ['value' => 'Permanent brain damage if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Brain imaging and neurological evaluation'],
            ['value' => 'Ventriculoperitoneal (VP) shunt surgery'],
            ['value' => 'Endoscopic third ventriculostomy (ETV) in selected cases'],
            ['value' => 'Monitoring of head growth and development'],
            ['value' => 'Long-term rehabilitation and developmental support'],
        ],
                'recovery' => 'Early diagnosis and neurosurgical treatment significantly improve neurological development and quality of life. Long-term follow-up is important to monitor shunt function and brain development.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Congenital Hydrocephalus',
                'meta_description' => 'Congenital hydrocephalus is a condition present at birth in which excessive cerebrospinal fluid (CSF) accumulates inside the brain’s ventricles. The increased f',
                'meta_keywords' => '',
            ]
        );
    }
}
