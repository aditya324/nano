<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntramedullarySpinalTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Intramedullary Spinal Tumors')],
            [
                'name' => 'Intramedullary Spinal Tumors',
                'slug' => Str::slug('Intramedullary Spinal Tumors'),
                'h1' => 'Intramedullary Spinal Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Intramedullary spinal tumors are tumors arising within the spinal cord itself. These tumors can interfere with nerve signal transmission and may progressively damage spinal cord tissue.',
                'about_more' => '',
                'overview' => 'Intramedullary spinal tumors are tumors arising within the spinal cord itself. These tumors can interfere with nerve signal transmission and may progressively damage spinal cord tissue.',
                'symptoms' => [
            ['value' => 'Progressive weakness in limbs'],
            ['value' => 'Sensory loss or numbness'],
            ['value' => 'Chronic neck or back pain'],
            ['value' => 'Balance and coordination problems'],
            ['value' => 'Bladder or bowel dysfunction'],
        ],
                'causes' => [
            ['value' => 'Primary spinal cord tumors such as ependymomas'],
            ['value' => 'Astrocytomas affecting spinal tissue'],
            ['value' => 'Genetic tumor syndromes'],
            ['value' => 'Abnormal cellular growth within the spinal cord'],
            ['value' => 'Rare metastatic spread to spinal cord tissue'],
        ],
                'risks' => [
            ['value' => 'Permanent spinal cord damage'],
            ['value' => 'Paralysis and severe neurological deficits'],
            ['value' => 'Chronic pain and disability'],
            ['value' => 'Bladder and bowel dysfunction'],
            ['value' => 'Tumor recurrence after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI spinal cord imaging'],
            ['value' => 'Microsurgical tumor excision'],
            ['value' => 'Radiation therapy for residual tumors'],
            ['value' => 'Neurological rehabilitation and physiotherapy'],
            ['value' => 'Long-term follow-up imaging and care'],
        ],
                'recovery' => 'Early surgical intervention improves neurological preservation. Recovery depends on tumor location, size, and extent of spinal cord involvement.',
                'sort_order' => 47,
                'is_active' => true,
                'meta_title' => 'Intramedullary Spinal Tumors',
                'meta_description' => 'Intramedullary spinal tumors are tumors arising within the spinal cord itself. These tumors can interfere with nerve signal transmission and may progressively d',
                'meta_keywords' => '',
            ]
        );
    }
}
