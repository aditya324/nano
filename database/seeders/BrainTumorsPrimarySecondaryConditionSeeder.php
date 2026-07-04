<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrainTumorsPrimarySecondaryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Brain Tumors (Primary & Secondary)')],
            [
                'name' => 'Brain Tumors (Primary & Secondary)',
                'slug' => Str::slug('Brain Tumors (Primary & Secondary)'),
                'h1' => 'Brain Tumors (Primary & Secondary)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. Primary brain tumors originate in the brain itself, while secondary brain tumors, also known as metastatic brain tumors, spread to the brain from cancers in other parts of the body. Brain tumors can affect brain function, movement, memory, speech, vision, and overall neurological health depending on their size and location.',
                'about_more' => '',
                'overview' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. Primary brain tumors originate in the brain itself, while secondary brain tumors, also known as metastatic brain tumors, spread to the brain from cancers in other parts of the body. Brain tumors can affect brain function, movement, memory, speech, vision, and overall neurological health depending on their size and location.',
                'symptoms' => [
            ['value' => 'Persistent headaches or worsening headaches'],
            ['value' => 'Seizures or abnormal neurological symptoms'],
            ['value' => 'Vision, speech, or hearing problems'],
            ['value' => 'Weakness, numbness, or balance difficulties'],
            ['value' => 'Memory problems, confusion, or personality changes'],
        ],
                'causes' => [
            ['value' => 'Genetic and inherited risk factors'],
            ['value' => 'Exposure to radiation or harmful environmental factors'],
            ['value' => 'Spread of cancer from other organs such as lung, breast, or melanoma'],
            ['value' => 'Immune system disorders in rare cases'],
            ['value' => 'Increasing age and abnormal cell growth changes'],
        ],
                'risks' => [
            ['value' => 'Increased pressure inside the skull'],
            ['value' => 'Seizures and neurological impairment'],
            ['value' => 'Loss of movement, speech, or cognitive function'],
            ['value' => 'Spread of metastatic cancer within the brain'],
            ['value' => 'Complications related to surgery, radiation, or chemotherapy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the brain tumor when possible'],
            ['value' => 'Radiation therapy and stereotactic radiosurgery'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Immunotherapy and supportive neurological care'],
            ['value' => 'Rehabilitation therapy and long-term neurological monitoring'],
        ],
                'recovery' => 'The long-term outlook for brain tumors depends on the type of tumor, size, location, stage, and response to treatment. Early diagnosis and multidisciplinary neuro-oncology care can improve survival and quality of life. Continuous neurological follow-up, rehabilitation, supportive care, and regular imaging are important for monitoring recovery and reducing the risk of recurrence or complications. __________________________ 19. Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor) Pediatric Leukemia',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Brain Tumors (Primary & Secondary)',
                'meta_description' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. Primary brain tumors originate in the brain itself, while secondary brain tu',
                'meta_keywords' => '',
            ]
        );
    }
}
