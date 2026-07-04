<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreatmentRelatedComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Treatment-Related Complications')],
            [
                'name' => 'Treatment-Related Complications',
                'slug' => Str::slug('Treatment-Related Complications'),
                'h1' => 'Treatment-Related Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Treatment-related complications are medical conditions that may occur as side effects of cancer therapies such as chemotherapy, radiation therapy, surgery, immunotherapy, or targeted treatments. Complications such as neutropenia, mucositis, and lymphedema can affect immunity, nutrition, mobility, and overall quality of life. Early recognition and supportive care are important for reducing complications and improving recovery outcomes.',
                'about_more' => '',
                'overview' => 'Treatment-related complications are medical conditions that may occur as side effects of cancer therapies such as chemotherapy, radiation therapy, surgery, immunotherapy, or targeted treatments. Complications such as neutropenia, mucositis, and lymphedema can affect immunity, nutrition, mobility, and overall quality of life. Early recognition and supportive care are important for reducing complications and improving recovery outcomes.',
                'symptoms' => [
            ['value' => 'Fever or frequent infections due to low immunity'],
            ['value' => 'Painful mouth sores or difficulty eating and swallowing'],
            ['value' => 'Swelling of the arms, legs, or affected body areas'],
            ['value' => 'Fatigue, weakness, or reduced physical function'],
            ['value' => 'Skin irritation, discomfort, or delayed healing after treatment'],
        ],
                'causes' => [
            ['value' => 'Chemotherapy affecting healthy blood cells and tissues'],
            ['value' => 'Radiation therapy causing tissue inflammation or damage'],
            ['value' => 'Surgical removal of lymph nodes or cancer-related procedures'],
            ['value' => 'Immunotherapy or targeted therapy side effects'],
            ['value' => 'Reduced immune function and treatment-related tissue injury'],
        ],
                'risks' => [
            ['value' => 'Severe infections and sepsis due to neutropenia'],
            ['value' => 'Nutritional deficiency and dehydration from mucositis'],
            ['value' => 'Chronic swelling and reduced mobility from lymphedema'],
            ['value' => 'Delayed cancer treatment due to treatment-related complications'],
            ['value' => 'Reduced quality of life and prolonged recovery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Infection prevention and immune-supportive therapy'],
            ['value' => 'Pain management and oral care for mucositis'],
            ['value' => 'Compression therapy and rehabilitation for lymphedema'],
            ['value' => 'Nutritional support and hydration management'],
            ['value' => 'Multidisciplinary supportive oncology care and monitoring'],
        ],
                'recovery' => 'The long-term outlook for treatment-related complications depends on the severity of symptoms, type of cancer therapy, and response to supportive care. Early management and continuous monitoring can significantly reduce complications, improve comfort, and support recovery during cancer treatment. Ongoing rehabilitation, preventive care, and specialist follow-up are important for maintaining long-term health and quality of life.',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Treatment-Related Complications',
                'meta_description' => 'Treatment-related complications are medical conditions that may occur as side effects of cancer therapies such as chemotherapy, radiation therapy, surgery, immu',
                'meta_keywords' => '',
            ]
        );
    }
}
