<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spinal Tumors')],
            [
                'name' => 'Spinal Tumors',
                'slug' => Str::slug('Spinal Tumors'),
                'h1' => 'Spinal Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spinal tumors are abnormal growths located within or around the spinal cord and vertebral column. These tumors may be benign or malignant and can compress nerves or the spinal cord, causing pain and neurological deficits.',
                'about_more' => '',
                'overview' => 'Spinal tumors are abnormal growths located within or around the spinal cord and vertebral column. These tumors may be benign or malignant and can compress nerves or the spinal cord, causing pain and neurological deficits.',
                'symptoms' => [
            ['value' => 'Persistent back or neck pain'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Difficulty walking or balancing'],
            ['value' => 'Loss of bladder or bowel control'],
            ['value' => 'Progressive neurological deterioration'],
        ],
                'causes' => [
            ['value' => 'Primary tumors originating in spinal tissues'],
            ['value' => 'Metastatic spread from other cancers'],
            ['value' => 'Genetic tumor syndromes'],
            ['value' => 'Abnormal cell growth in spinal structures'],
            ['value' => 'Unknown cellular mutations'],
        ],
                'risks' => [
            ['value' => 'Spinal cord compression and paralysis'],
            ['value' => 'Chronic pain and disability'],
            ['value' => 'Vertebral destruction and instability'],
            ['value' => 'Loss of mobility and independence'],
            ['value' => 'Tumor recurrence or spread'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI spine imaging and biopsy evaluation'],
            ['value' => 'Surgical tumor removal or decompression'],
            ['value' => 'Radiation therapy and chemotherapy'],
            ['value' => 'Pain management and rehabilitation'],
            ['value' => 'Long-term neuro-oncology follow-up'],
        ],
                'recovery' => 'The prognosis depends on tumor type and stage. Early diagnosis and neurosurgical treatment improve neurological outcomes and quality of life.',
                'sort_order' => 46,
                'is_active' => true,
                'meta_title' => 'Spinal Tumors',
                'meta_description' => 'Spinal tumors are abnormal growths located within or around the spinal cord and vertebral column. These tumors may be benign or malignant and can compress nerve',
                'meta_keywords' => '',
            ]
        );
    }
}
