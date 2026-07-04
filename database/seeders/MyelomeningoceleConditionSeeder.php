<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MyelomeningoceleConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Myelomeningocele')],
            [
                'name' => 'Myelomeningocele',
                'slug' => Str::slug('Myelomeningocele'),
                'h1' => 'Myelomeningocele',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Myelomeningocele is the most severe and common form of spina bifida in which the spinal cord and nerves protrude through an opening in the spine. It can lead to major neurological disability, paralysis, bladder and bowel dysfunction, and hydrocephalus.',
                'about_more' => '',
                'overview' => 'Myelomeningocele is the most severe and common form of spina bifida in which the spinal cord and nerves protrude through an opening in the spine. It can lead to major neurological disability, paralysis, bladder and bowel dysfunction, and hydrocephalus.',
                'symptoms' => [
            ['value' => 'Visible spinal sac containing nerves and spinal tissue'],
            ['value' => 'Weakness or paralysis of lower limbs'],
            ['value' => 'Loss of bladder and bowel control'],
            ['value' => 'Delayed motor development'],
            ['value' => 'Hydrocephalus and learning difficulties'],
        ],
                'causes' => [
            ['value' => 'Incomplete neural tube closure during fetal development'],
            ['value' => 'Maternal folic acid deficiency'],
            ['value' => 'Genetic susceptibility'],
            ['value' => 'Maternal diabetes and obesity'],
            ['value' => 'Environmental and nutritional factors during pregnancy'],
        ],
                'risks' => [
            ['value' => 'Permanent paralysis and mobility limitations'],
            ['value' => 'Recurrent infections and meningitis'],
            ['value' => 'Hydrocephalus requiring shunt surgery'],
            ['value' => 'Orthopedic deformities and scoliosis'],
            ['value' => 'Kidney complications from bladder dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Early neurosurgical closure of the defect'],
            ['value' => 'Hydrocephalus management with VP shunt surgery'],
            ['value' => 'Physiotherapy and rehabilitation programs'],
            ['value' => 'Orthopedic and urological management'],
            ['value' => 'Long-term multidisciplinary neurological care'],
        ],
                'recovery' => 'Although neurological deficits may persist, early surgical treatment and rehabilitation significantly improve survival, independence, and overall quality of life.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Myelomeningocele',
                'meta_description' => 'Myelomeningocele is the most severe and common form of spina bifida in which the spinal cord and nerves protrude through an opening in the spine. It can lead to',
                'meta_keywords' => '',
            ]
        );
    }
}
