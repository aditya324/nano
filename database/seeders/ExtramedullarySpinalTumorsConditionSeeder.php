<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExtramedullarySpinalTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Extramedullary Spinal Tumors')],
            [
                'name' => 'Extramedullary Spinal Tumors',
                'slug' => Str::slug('Extramedullary Spinal Tumors'),
                'h1' => 'Extramedullary Spinal Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Extramedullary spinal tumors are tumors located outside the spinal cord but within the spinal canal. These tumors compress surrounding nerves and spinal structures, causing neurological symptoms.',
                'about_more' => '',
                'overview' => 'Extramedullary spinal tumors are tumors located outside the spinal cord but within the spinal canal. These tumors compress surrounding nerves and spinal structures, causing neurological symptoms.',
                'symptoms' => [
            ['value' => 'Persistent spinal pain'],
            ['value' => 'Numbness or tingling in limbs'],
            ['value' => 'Weakness and walking difficulties'],
            ['value' => 'Muscle stiffness or spasms'],
            ['value' => 'Bladder or bowel disturbances'],
        ],
                'causes' => [
            ['value' => 'Meningiomas or nerve sheath tumors'],
            ['value' => 'Metastatic spinal tumors'],
            ['value' => 'Genetic predisposition to nerve tumors'],
            ['value' => 'Abnormal growth of surrounding spinal tissues'],
            ['value' => 'Rare congenital tumor syndromes'],
        ],
                'risks' => [
            ['value' => 'Spinal cord compression'],
            ['value' => 'Chronic neurological deficits'],
            ['value' => 'Progressive paralysis if untreated'],
            ['value' => 'Chronic pain and reduced mobility'],
            ['value' => 'Tumor recurrence after surgery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI spine imaging and tumor evaluation'],
            ['value' => 'Surgical decompression and tumor removal'],
            ['value' => 'Radiation therapy when indicated'],
            ['value' => 'Pain management and rehabilitation'],
            ['value' => 'Neurological follow-up and monitoring'],
        ],
                'recovery' => 'Most benign extramedullary tumors have good outcomes after surgery. Early decompression improves neurological recovery and mobility.',
                'sort_order' => 48,
                'is_active' => true,
                'meta_title' => 'Extramedullary Spinal Tumors',
                'meta_description' => 'Extramedullary spinal tumors are tumors located outside the spinal cord but within the spinal canal. These tumors compress surrounding nerves and spinal structu',
                'meta_keywords' => '',
            ]
        );
    }
}
