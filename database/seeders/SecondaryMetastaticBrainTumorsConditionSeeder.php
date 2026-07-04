<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SecondaryMetastaticBrainTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Secondary (Metastatic) Brain Tumors')],
            [
                'name' => 'Secondary (Metastatic) Brain Tumors',
                'slug' => Str::slug('Secondary (Metastatic) Brain Tumors'),
                'h1' => 'Secondary (Metastatic) Brain Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Secondary brain tumors occur when cancer from another part of the body spreads to the brain. Common primary cancers that metastasize to the brain include lung, breast, kidney, melanoma, and colon cancers. These tumors may cause significant neurological symptoms and often require combined neurosurgical and oncology care.',
                'about_more' => '',
                'overview' => 'Secondary brain tumors occur when cancer from another part of the body spreads to the brain. Common primary cancers that metastasize to the brain include lung, breast, kidney, melanoma, and colon cancers. These tumors may cause significant neurological symptoms and often require combined neurosurgical and oncology care.',
                'symptoms' => [
            ['value' => 'Persistent headaches and nausea'],
            ['value' => 'Seizures or sudden neurological symptoms'],
            ['value' => 'Weakness or paralysis on one side of the body'],
            ['value' => 'Vision or speech disturbances'],
            ['value' => 'Confusion, memory loss, or behavioral changes'],
        ],
                'causes' => [
            ['value' => 'Spread of cancer cells through the bloodstream'],
            ['value' => 'Advanced-stage cancers in other organs'],
            ['value' => 'Aggressive malignant tumors'],
            ['value' => 'Delayed cancer diagnosis or treatment'],
            ['value' => 'Weakened immune defenses against tumor spread'],
        ],
                'risks' => [
            ['value' => 'Increased intracranial pressure and brain swelling'],
            ['value' => 'Progressive neurological impairment'],
            ['value' => 'Multiple metastatic brain lesions'],
            ['value' => 'Seizures and loss of consciousness'],
            ['value' => 'Reduced survival in advanced cancer stages'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Brain imaging and oncological evaluation'],
            ['value' => 'Neurosurgical removal of accessible tumors'],
            ['value' => 'Radiation therapy or stereotactic radiosurgery'],
            ['value' => 'Chemotherapy and targeted cancer therapy'],
            ['value' => 'Palliative and supportive neurological care'],
        ],
                'recovery' => 'The outcome depends on the primary cancer type, number of brain lesions, and overall health condition. Early treatment may improve neurological function and quality of life.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Secondary (Metastatic) Brain Tumors',
                'meta_description' => 'Secondary brain tumors occur when cancer from another part of the body spreads to the brain. Common primary cancers that metastasize to the brain include lung, ',
                'meta_keywords' => '',
            ]
        );
    }
}
