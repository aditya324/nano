<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SarcomasBoneandSoftTissueSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Sarcomas (Bone and Soft Tissue)')],
            [
                'title' => 'Sarcomas (Bone and Soft Tissue)',
                'slug' => Str::slug('Sarcomas (Bone and Soft Tissue)'),
                'introduction' => '',
                'what_is' => 'Sarcomas are rare types of cancer that develop in the bones or soft tissues of the body, including muscles, fat, blood vessels, nerves, tendons, and connective tissues. Bone sarcomas begin in the bones, while soft tissue sarcomas develop in supporting tissues throughout the body. Early diagnosis and specialized treatment are important for improving outcomes and preventing the spread of cancer. Common Symptoms A lump or swelling that may gradually increase in size Bone pain or persistent soft tissue pain Reduced movement or difficulty using the affected area Unexplained fractures or bone weakness Fatigue, weight loss, or general weakness in advanced cases Causes & Triggers Genetic syndromes and inherited conditions Previous radiation therapy exposure Exposure to certain chemicals or toxins Chronic tissue injury or inflammation in rare cases Family history and abnormal cellular mutations Risks & Complications Spread of cancer to lungs or other organs Bone destruction or severe tissue damage Loss of mobility or functional impairment Chronic pain and physical disability Treatment-related complications affecting surrounding tissues or organs Treatment Options Surgical removal of the tumor Radiation therapy and chemotherapy Targeted therapy in selected sarcoma types Limb-sparing surgery or reconstructive procedures when possible Rehabilitation therapy and long-term oncology follow-up Recovery & Outlook The long-term outlook for sarcomas depends on the type of sarcoma, tumor size, stage of disease, and response to treatment. Early diagnosis and multidisciplinary cancer care significantly improve treatment outcomes and quality of life. Continuous follow-up, rehabilitation, supportive care, and regular imaging are important for monitoring recurrence and maintaining long-term health.',
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
                'seo_title' => 'Sarcomas (Bone and Soft Tissue)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
