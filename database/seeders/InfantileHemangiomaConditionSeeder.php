<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfantileHemangiomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infantile Hemangioma')],
            [
                'name' => 'Infantile Hemangioma',
                'slug' => Str::slug('Infantile Hemangioma'),
                'h1' => 'Infantile Hemangioma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infantile hemangioma is a common benign vascular birthmark that appears during infancy due to abnormal growth of blood vessels. It usually develops within the first few weeks of life and may appear as a red, raised, or bluish lesion on the skin. Infantile hemangiomas commonly occur on the face, scalp, chest, or back and often grow rapidly during early infancy before gradually shrinking over time.',
                'about_more' => '',
                'overview' => 'Infantile hemangioma is a common benign vascular birthmark that appears during infancy due to abnormal growth of blood vessels. It usually develops within the first few weeks of life and may appear as a red, raised, or bluish lesion on the skin. Infantile hemangiomas commonly occur on the face, scalp, chest, or back and often grow rapidly during early infancy before gradually shrinking over time.',
                'symptoms' => [
            ['value' => 'Bright red or bluish skin lesions'],
            ['value' => 'Raised, soft, or rubbery growths on the skin'],
            ['value' => 'Rapid growth during the first months of life'],
            ['value' => 'Swelling or thickening of the affected area'],
            ['value' => 'Ulceration or bleeding in some cases'],
        ],
                'causes' => [
            ['value' => 'Abnormal growth of blood vessels during infancy'],
            ['value' => 'Premature birth or low birth weight'],
            ['value' => 'Female gender, as hemangiomas are more common in girls'],
            ['value' => 'Family history of vascular birthmarks in some cases'],
            ['value' => 'Multiple pregnancies or placental abnormalities'],
        ],
                'risks' => [
            ['value' => 'Ulceration, bleeding, or skin irritation'],
            ['value' => 'Cosmetic concerns, especially on the face'],
            ['value' => 'Interference with vision, breathing, or feeding if located near vital areas'],
            ['value' => 'Skin scarring or residual skin changes after healing'],
            ['value' => 'Emotional stress for parents or caregivers due to visible lesions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Observation and regular monitoring for small uncomplicated lesions'],
            ['value' => 'Oral or topical beta-blocker medications such as propranolol'],
            ['value' => 'Laser therapy for selected cases'],
            ['value' => 'Wound care for ulcerated hemangiomas'],
            ['value' => 'Surgical removal in rare or complicated cases'],
        ],
                'recovery' => 'The long-term outlook for infantile hemangioma is generally very good. Many hemangiomas gradually shrink and fade over time without significant complications. Early medical evaluation and treatment are important for lesions affecting important body areas or causing complications. Regular pediatric and dermatologic follow-up help ensure healthy growth, proper healing, and optimal cosmetic outcomes. __________________________ 25. Pediatric Skin Disorders (Infantile Hemangioma, Atopic Dermatitis) Pediatric Atopic Dermatitis',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Infantile Hemangioma',
                'meta_description' => 'Infantile hemangioma is a common benign vascular birthmark that appears during infancy due to abnormal growth of blood vessels. It usually develops within the f',
                'meta_keywords' => '',
            ]
        );
    }
}
