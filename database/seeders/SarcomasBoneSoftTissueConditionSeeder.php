<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SarcomasBoneSoftTissueConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Sarcomas (Bone & Soft Tissue)')],
            [
                'name' => 'Sarcomas (Bone & Soft Tissue)',
                'slug' => Str::slug('Sarcomas (Bone & Soft Tissue)'),
                'h1' => 'Sarcomas (Bone & Soft Tissue)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Sarcomas are rare types of cancer that develop in the bones or soft tissues of the body, including muscles, fat, blood vessels, nerves, tendons, and connective tissues. Bone sarcomas begin in the bones, while soft tissue sarcomas develop in supporting tissues throughout the body. Early diagnosis and specialized treatment are important for improving outcomes and preventing the spread of cancer.',
                'about_more' => '',
                'overview' => 'Sarcomas are rare types of cancer that develop in the bones or soft tissues of the body, including muscles, fat, blood vessels, nerves, tendons, and connective tissues. Bone sarcomas begin in the bones, while soft tissue sarcomas develop in supporting tissues throughout the body. Early diagnosis and specialized treatment are important for improving outcomes and preventing the spread of cancer.',
                'symptoms' => [
            ['value' => 'A lump or swelling that may gradually increase in size'],
            ['value' => 'Bone pain or persistent soft tissue pain'],
            ['value' => 'Reduced movement or difficulty using the affected area'],
            ['value' => 'Unexplained fractures or bone weakness'],
            ['value' => 'Fatigue, weight loss, or general weakness in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Genetic syndromes and inherited conditions'],
            ['value' => 'Previous radiation therapy exposure'],
            ['value' => 'Exposure to certain chemicals or toxins'],
            ['value' => 'Chronic tissue injury or inflammation in rare cases'],
            ['value' => 'Family history and abnormal cellular mutations'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to lungs or other organs'],
            ['value' => 'Bone destruction or severe tissue damage'],
            ['value' => 'Loss of mobility or functional impairment'],
            ['value' => 'Chronic pain and physical disability'],
            ['value' => 'Treatment-related complications affecting surrounding tissues or organs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the tumor'],
            ['value' => 'Radiation therapy and chemotherapy'],
            ['value' => 'Targeted therapy in selected sarcoma types'],
            ['value' => 'Limb-sparing surgery or reconstructive procedures when possible'],
            ['value' => 'Rehabilitation therapy and long-term oncology follow-up'],
        ],
                'recovery' => 'The long-term outlook for sarcomas depends on the type of sarcoma, tumor size, stage of disease, and response to treatment. Early diagnosis and multidisciplinary cancer care significantly improve treatment outcomes and quality of life. Continuous follow-up, rehabilitation, supportive care, and regular imaging are important for monitoring recurrence and maintaining long-term health. _______________________ 18. Brain Tumors (Primary/Secondary) Brain Tumors (Primary & Secondary)',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Sarcomas (Bone & Soft Tissue)',
                'meta_description' => 'Sarcomas are rare types of cancer that develop in the bones or soft tissues of the body, including muscles, fat, blood vessels, nerves, tendons, and connective ',
                'meta_keywords' => '',
            ]
        );
    }
}
