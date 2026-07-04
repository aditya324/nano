<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DermatologicManifestationsofSystemicDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dermatologic Manifestations of Systemic Disease')],
            [
                'name' => 'Dermatologic Manifestations of Systemic Disease',
                'slug' => Str::slug('Dermatologic Manifestations of Systemic Disease'),
                'h1' => 'Dermatologic Manifestations of Systemic Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dermatologic manifestations of systemic disease refer to skin, hair, nail, or mucosal changes that occur as a result of underlying internal medical conditions. Many systemic diseases such as autoimmune disorders, endocrine diseases, infections, liver disease, kidney disease, and nutritional deficiencies may produce visible skin-related symptoms that help in early diagnosis and medical evaluation.',
                'about_more' => '',
                'overview' => 'Dermatologic manifestations of systemic disease refer to skin, hair, nail, or mucosal changes that occur as a result of underlying internal medical conditions. Many systemic diseases such as autoimmune disorders, endocrine diseases, infections, liver disease, kidney disease, and nutritional deficiencies may produce visible skin-related symptoms that help in early diagnosis and medical evaluation.',
                'symptoms' => [
            ['value' => 'Skin rashes, discoloration, or abnormal pigmentation'],
            ['value' => 'Persistent itching or dry skin'],
            ['value' => 'Hair loss or nail abnormalities'],
            ['value' => 'Ulcers, blisters, or skin thickening'],
            ['value' => 'Swelling, redness, or vascular skin changes'],
        ],
                'causes' => [
            ['value' => 'Autoimmune disorders such as lupus or dermatomyositis'],
            ['value' => 'Endocrine conditions including diabetes or thyroid disease'],
            ['value' => 'Liver, kidney, or blood-related disorders'],
            ['value' => 'Nutritional deficiencies or metabolic diseases'],
            ['value' => 'Infections, medications, or immune system abnormalities'],
        ],
                'risks' => [
            ['value' => 'Delayed diagnosis of serious underlying diseases'],
            ['value' => 'Chronic skin damage or persistent symptoms'],
            ['value' => 'Increased risk of infections or wound healing problems'],
            ['value' => 'Emotional stress and reduced quality of life'],
            ['value' => 'Progression of systemic disease without proper treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment of the underlying systemic condition'],
            ['value' => 'Topical medications and supportive skin care'],
            ['value' => 'Immunosuppressive or anti-inflammatory therapies when required'],
            ['value' => 'Nutritional support and lifestyle modifications'],
            ['value' => 'Regular dermatologic and multidisciplinary medical follow-up'],
        ],
                'recovery' => 'The long-term outlook for dermatologic manifestations of systemic disease depends on the underlying medical condition and response to treatment. Early recognition of skin changes can support timely diagnosis and management of systemic illnesses. Proper medical care, ongoing monitoring, and multidisciplinary treatment approaches are important for improving skin health and overall long-term outcomes. ___________________________ 24. Hair and Scalp Disorders (Dandruff, Psoriasis, Alopecia) Dandruff Dandruff',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Dermatologic Manifestations of Systemic Disease',
                'meta_description' => 'Dermatologic manifestations of systemic disease refer to skin, hair, nail, or mucosal changes that occur as a result of underlying internal medical conditions. ',
                'meta_keywords' => '',
            ]
        );
    }
}
