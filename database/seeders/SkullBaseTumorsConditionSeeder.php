<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkullBaseTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Skull Base Tumors')],
            [
                'name' => 'Skull Base Tumors',
                'slug' => Str::slug('Skull Base Tumors'),
                'h1' => 'Skull Base Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Skull base tumors are abnormal growths located at the bottom part of the skull near critical nerves, blood vessels, and the brainstem. These tumors may be benign or malignant and often require specialized neurosurgical management due to their complex location.',
                'about_more' => '',
                'overview' => 'Skull base tumors are abnormal growths located at the bottom part of the skull near critical nerves, blood vessels, and the brainstem. These tumors may be benign or malignant and often require specialized neurosurgical management due to their complex location.',
                'symptoms' => [
            ['value' => 'Persistent headaches and facial pain'],
            ['value' => 'Vision or hearing disturbances'],
            ['value' => 'Difficulty swallowing or speaking'],
            ['value' => 'Facial weakness or numbness'],
            ['value' => 'Balance problems and dizziness'],
        ],
                'causes' => [
            ['value' => 'Abnormal cell growth near the skull base'],
            ['value' => 'Benign tumors such as meningiomas or schwannomas'],
            ['value' => 'Metastatic or malignant cancers'],
            ['value' => 'Genetic predisposition in some conditions'],
            ['value' => 'Unknown cellular mutations and growth changes'],
        ],
                'risks' => [
            ['value' => 'Compression of cranial nerves and brainstem'],
            ['value' => 'Vision, hearing, or swallowing impairment'],
            ['value' => 'Brain swelling and neurological deficits'],
            ['value' => 'Tumor recurrence after treatment'],
            ['value' => 'Life-threatening neurological complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI and CT skull base imaging'],
            ['value' => 'Endoscopic or microsurgical tumor removal'],
            ['value' => 'Radiation therapy or radiosurgery'],
            ['value' => 'Multidisciplinary neuro-oncology care'],
            ['value' => 'Long-term neurological rehabilitation'],
        ],
                'recovery' => 'The outcome depends on tumor type, size, and surgical accessibility. Modern skull base surgery significantly improves survival and neurological preservation.',
                'sort_order' => 43,
                'is_active' => true,
                'meta_title' => 'Skull Base Tumors',
                'meta_description' => 'Skull base tumors are abnormal growths located at the bottom part of the skull near critical nerves, blood vessels, and the brainstem. These tumors may be benig',
                'meta_keywords' => '',
            ]
        );
    }
}
