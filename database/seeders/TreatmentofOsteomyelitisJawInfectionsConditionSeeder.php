<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreatmentofOsteomyelitisJawInfectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Treatment of Osteomyelitis & Jaw Infections')],
            [
                'name' => 'Treatment of Osteomyelitis & Jaw Infections',
                'slug' => Str::slug('Treatment of Osteomyelitis & Jaw Infections'),
                'h1' => 'Treatment of Osteomyelitis & Jaw Infections',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Treatment of osteomyelitis and jaw infections involves specialized medical and surgical management of serious infections affecting the jawbones, teeth, gums, and surrounding facial tissues. These conditions can lead to bone destruction, severe pain, swelling, pus formation, and functional impairment if not treated promptly and effectively.',
                'about_more' => '',
                'overview' => 'Osteomyelitis is a bone infection commonly affecting the mandible or maxilla due to untreated dental infections, trauma, fractures, surgery, or reduced blood supply. Jaw infections may involve the teeth, surrounding soft tissues, salivary glands, or deep facial spaces. Treatment focuses on eliminating infection, controlling inflammation, preserving bone structure, and restoring oral and facial function through antibiotics, drainage procedures, debridement, and reconstructive surgery when required.',
                'symptoms' => [
            ['value' => 'Jaw pain, swelling, or facial tenderness'],
            ['value' => 'Pus discharge or foul taste inside the mouth'],
            ['value' => 'Difficulty chewing, swallowing, or opening the mouth'],
            ['value' => 'Fever, facial swelling, or enlarged lymph nodes'],
            ['value' => 'Loose teeth, exposed bone, or delayed wound healing'],
        ],
                'causes' => [
            ['value' => 'Untreated dental infections or abscesses'],
            ['value' => 'Trauma, fractures, or jaw surgery complications'],
            ['value' => 'Periodontal disease and poor oral hygiene'],
            ['value' => 'Reduced blood supply following radiation therapy or systemic illness'],
            ['value' => 'Chronic infection spreading to jawbone and surrounding tissues'],
        ],
                'risks' => [
            ['value' => 'Progressive bone destruction and chronic infection'],
            ['value' => 'Spread of infection to facial spaces or bloodstream'],
            ['value' => 'Jaw deformity, fractures, or tooth loss'],
            ['value' => 'Difficulty eating, speaking, or maintaining oral hygiene'],
            ['value' => 'Long-term pain, tissue necrosis, or recurrent infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination, imaging, and microbiological evaluation'],
            ['value' => 'Intravenous or oral antibiotic therapy and infection control management'],
            ['value' => 'Drainage of abscesses and surgical debridement of infected tissue'],
            ['value' => 'Removal of infected teeth, dead bone, or necrotic tissue when required'],
            ['value' => 'Reconstructive surgery, bone grafting, and long-term rehabilitation support'],
        ],
                'recovery' => 'The long-term outlook for osteomyelitis and jaw infections depends on the severity of infection, timing of treatment, and underlying medical conditions. Early diagnosis, effective infection control, proper surgical management, oral hygiene maintenance, and regular follow-up significantly improve healing and reduce complications. Continuous dental care and multidisciplinary rehabilitation are important for maintaining long-term oral and facial health. ______________________________ 11. Salivary Gland Surgery (Excision, Sialolith Removal) Salivary Gland Surgery (Excision, Sialolith Removal) Procedures',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Treatment of Osteomyelitis & Jaw Infections',
                'meta_description' => 'Treatment of osteomyelitis and jaw infections involves specialized medical and surgical management of serious infections affecting the jawbones, teeth, gums, an',
                'meta_keywords' => '',
            ]
        );
    }
}
