<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CervicalSpondyloticMyelopathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cervical Spondylotic Myelopathy')],
            [
                'name' => 'Cervical Spondylotic Myelopathy',
                'slug' => Str::slug('Cervical Spondylotic Myelopathy'),
                'h1' => 'Cervical Spondylotic Myelopathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cervical spondylotic myelopathy is spinal cord dysfunction caused by degenerative changes in the cervical spine. It is one of the most common causes of spinal cord impairment in older adults.',
                'about_more' => '',
                'overview' => 'Cervical spondylotic myelopathy is spinal cord dysfunction caused by degenerative changes in the cervical spine. It is one of the most common causes of spinal cord impairment in older adults.',
                'symptoms' => [
            ['value' => 'Neck pain and stiffness'],
            ['value' => 'Weakness in arms or hands'],
            ['value' => 'Difficulty walking or balancing'],
            ['value' => 'Tingling or numbness in limbs'],
            ['value' => 'Loss of fine hand coordination'],
        ],
                'causes' => [
            ['value' => 'Degenerative cervical spine disease'],
            ['value' => 'Bone spurs and disc protrusion'],
            ['value' => 'Narrowing of the cervical spinal canal'],
            ['value' => 'Age-related spinal wear and tear'],
            ['value' => 'Chronic spinal instability'],
        ],
                'risks' => [
            ['value' => 'Progressive spinal cord damage'],
            ['value' => 'Difficulty performing daily activities'],
            ['value' => 'Falls and balance-related injuries'],
            ['value' => 'Paralysis in advanced cases'],
            ['value' => 'Permanent neurological deficits if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Neurological and spinal imaging evaluation'],
            ['value' => 'Physiotherapy and cervical rehabilitation'],
            ['value' => 'Pain and anti-inflammatory medications'],
            ['value' => 'Surgical decompression of the spinal cord'],
            ['value' => 'Long-term neurological follow-up'],
        ],
                'recovery' => 'Early surgical treatment often prevents progression and improves neurological function. Delayed management may lead to irreversible spinal cord injury.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Cervical Spondylotic Myelopathy',
                'meta_description' => 'Cervical spondylotic myelopathy is spinal cord dysfunction caused by degenerative changes in the cervical spine. It is one of the most common causes of spinal c',
                'meta_keywords' => '',
            ]
        );
    }
}
