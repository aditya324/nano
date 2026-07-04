<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PrimaryBrainTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Primary Brain Tumors')],
            [
                'name' => 'Primary Brain Tumors',
                'slug' => Str::slug('Primary Brain Tumors'),
                'h1' => 'Primary Brain Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Primary brain tumors originate directly from brain tissue, nerves, meninges, or supporting brain structures. These tumors may be benign or malignant and can grow slowly or aggressively. Common types include gliomas, meningiomas, and pituitary tumors.',
                'about_more' => '',
                'overview' => 'Primary brain tumors originate directly from brain tissue, nerves, meninges, or supporting brain structures. These tumors may be benign or malignant and can grow slowly or aggressively. Common types include gliomas, meningiomas, and pituitary tumors.',
                'symptoms' => [
            ['value' => 'Chronic headaches or vomiting'],
            ['value' => 'Seizures or fainting episodes'],
            ['value' => 'Difficulty speaking or understanding language'],
            ['value' => 'Weakness, imbalance, or coordination problems'],
            ['value' => 'Changes in behavior, memory, or personality'],
        ],
                'causes' => [
            ['value' => 'Genetic mutations in brain cells'],
            ['value' => 'Family history of certain tumors'],
            ['value' => 'Exposure to radiation therapy'],
            ['value' => 'Abnormal cellular growth in brain tissues'],
            ['value' => 'Unknown neurological and environmental factors'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and raised intracranial pressure'],
            ['value' => 'Neurological deficits and disability'],
            ['value' => 'Vision or speech impairment'],
            ['value' => 'Seizures and cognitive dysfunction'],
            ['value' => 'Tumor recurrence after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Neurosurgical tumor excision or biopsy'],
            ['value' => 'Radiation therapy for tumor control'],
            ['value' => 'Chemotherapy in malignant tumors'],
            ['value' => 'Steroids and anti-seizure medications'],
            ['value' => 'Neurological rehabilitation and follow-up imaging'],
        ],
                'recovery' => 'The prognosis varies depending on tumor type and aggressiveness. Many benign tumors respond well to surgery, while malignant tumors may require long-term treatment and monitoring.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Primary Brain Tumors',
                'meta_description' => 'Primary brain tumors originate directly from brain tissue, nerves, meninges, or supporting brain structures. These tumors may be benign or malignant and can gro',
                'meta_keywords' => '',
            ]
        );
    }
}
