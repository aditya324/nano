<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrainTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Brain Tumors')],
            [
                'name' => 'Brain Tumors',
                'slug' => Str::slug('Brain Tumors'),
                'h1' => 'Brain Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. They may be benign (non-cancerous) or malignant (cancerous) and can affect brain function depending on their size, location, and growth rate. Brain tumors may interfere with movement, memory, speech, vision, balance, and other neurological functions. Neurosurgical evaluation is essential for diagnosis, treatment planning, and long-term management.',
                'about_more' => '',
                'overview' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. They may be benign (non-cancerous) or malignant (cancerous) and can affect brain function depending on their size, location, and growth rate. Brain tumors may interfere with movement, memory, speech, vision, balance, and other neurological functions. Neurosurgical evaluation is essential for diagnosis, treatment planning, and long-term management.',
                'symptoms' => [
            ['value' => 'Persistent or worsening headaches'],
            ['value' => 'Seizures or sudden neurological episodes'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Vision, speech, or hearing disturbances'],
            ['value' => 'Memory problems or personality changes'],
        ],
                'causes' => [
            ['value' => 'Abnormal uncontrolled growth of brain cells'],
            ['value' => 'Genetic predisposition or inherited syndromes'],
            ['value' => 'Exposure to radiation in rare cases'],
            ['value' => 'Secondary spread from cancers elsewhere in the body'],
            ['value' => 'Unknown environmental or cellular factors'],
        ],
                'risks' => [
            ['value' => 'Increased pressure inside the skull'],
            ['value' => 'Progressive neurological deficits'],
            ['value' => 'Seizures and cognitive decline'],
            ['value' => 'Paralysis or loss of important brain functions'],
            ['value' => 'Life-threatening brain swelling or herniation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Brain imaging and neurological assessment'],
            ['value' => 'Surgical tumor removal or biopsy'],
            ['value' => 'Radiation therapy and chemotherapy'],
            ['value' => 'Medications to reduce swelling and seizures'],
            ['value' => 'Long-term neuro-oncology and rehabilitation care'],
        ],
                'recovery' => 'Recovery depends on the type, size, location, and stage of the tumor. Early diagnosis and multidisciplinary neurosurgical treatment improve survival and neurological outcomes.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Brain Tumors',
                'meta_description' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. They may be benign (non-cancerous) or malignant (cancerous) and can affect b',
                'meta_keywords' => '',
            ]
        );
    }
}
