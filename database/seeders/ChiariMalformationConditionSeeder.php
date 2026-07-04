<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChiariMalformationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chiari Malformation')],
            [
                'name' => 'Chiari Malformation',
                'slug' => Str::slug('Chiari Malformation'),
                'h1' => 'Chiari Malformation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chiari malformation is a condition in which brain tissue extends downward into the spinal canal due to structural abnormalities at the base of the skull. It can interfere with normal cerebrospinal fluid flow and compress neurological structures.',
                'about_more' => '',
                'overview' => 'Chiari malformation is a condition in which brain tissue extends downward into the spinal canal due to structural abnormalities at the base of the skull. It can interfere with normal cerebrospinal fluid flow and compress neurological structures.',
                'symptoms' => [
            ['value' => 'Headaches worsened by coughing or straining'],
            ['value' => 'Neck pain and dizziness'],
            ['value' => 'Balance and coordination difficulties'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Swallowing or speech problems'],
        ],
                'causes' => [
            ['value' => 'Congenital structural defects of the skull'],
            ['value' => 'Abnormal brain and spinal development'],
            ['value' => 'Genetic predisposition'],
            ['value' => 'Hydrocephalus or spinal abnormalities'],
            ['value' => 'Rarely due to acquired brain pressure changes'],
        ],
                'risks' => [
            ['value' => 'Spinal cord compression'],
            ['value' => 'Syringomyelia formation'],
            ['value' => 'Chronic neurological symptoms'],
            ['value' => 'Balance and coordination problems'],
            ['value' => 'Progressive neurological deficits'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI brain and cervical spine evaluation'],
            ['value' => 'Pain management and symptom monitoring'],
            ['value' => 'Physiotherapy and supportive care'],
            ['value' => 'Posterior fossa decompression surgery'],
            ['value' => 'Long-term neurological follow-up'],
        ],
                'recovery' => 'Many patients improve significantly after surgical decompression. Mild cases may remain stable with regular monitoring and conservative care.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Chiari Malformation',
                'meta_description' => 'Chiari malformation is a condition in which brain tissue extends downward into the spinal canal due to structural abnormalities at the base of the skull. It can',
                'meta_keywords' => '',
            ]
        );
    }
}
