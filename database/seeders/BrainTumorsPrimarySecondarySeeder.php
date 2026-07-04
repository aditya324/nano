<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrainTumorsPrimarySecondarySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Brain Tumors (Primary/Secondary)')],
            [
                'title' => 'Brain Tumors (Primary/Secondary)',
                'slug' => Str::slug('Brain Tumors (Primary/Secondary)'),
                'introduction' => '',
                'what_is' => 'Brain tumors are abnormal growths of cells within the brain or surrounding tissues. Primary brain tumors originate in the brain itself, while secondary brain tumors, also known as metastatic brain tumors, spread to the brain from cancers in other parts of the body. Brain tumors can affect brain function, movement, memory, speech, vision, and overall neurological health depending on their size and location. Common Symptoms Persistent headaches or worsening headaches Seizures or abnormal neurological symptoms Vision, speech, or hearing problems Weakness, numbness, or balance difficulties Memory problems, confusion, or personality changes Causes & Triggers Genetic and inherited risk factors Exposure to radiation or harmful environmental factors Spread of cancer from other organs such as lung, breast, or melanoma Immune system disorders in rare cases Increasing age and abnormal cell growth changes Risks & Complications Increased pressure inside the skull Seizures and neurological impairment Loss of movement, speech, or cognitive function Spread of metastatic cancer within the brain Complications related to surgery, radiation, or chemotherapy Treatment Options Surgical removal of the brain tumor when possible Radiation therapy and stereotactic radiosurgery Chemotherapy and targeted therapy Immunotherapy and supportive neurological care Rehabilitation therapy and long-term neurological monitoring Recovery & Outlook The long-term outlook for brain tumors depends on the type of tumor, size, location, stage, and response to treatment. Early diagnosis and multidisciplinary neuro-oncology care can improve survival and quality of life. Continuous neurological follow-up, rehabilitation, supportive care, and regular imaging are important for monitoring recovery and reducing the risk of recurrence or complications.',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Brain Tumors (Primary/Secondary)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
