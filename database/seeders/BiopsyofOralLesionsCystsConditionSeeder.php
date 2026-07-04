<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BiopsyofOralLesionsCystsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Biopsy of Oral Lesions & Cysts')],
            [
                'name' => 'Biopsy of Oral Lesions & Cysts',
                'slug' => Str::slug('Biopsy of Oral Lesions & Cysts'),
                'h1' => 'Biopsy of Oral Lesions & Cysts',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Biopsy of oral lesions and cysts is a specialized diagnostic procedure performed to collect tissue samples from abnormal growths, ulcers, cysts, or suspicious areas within the mouth, jaw, or surrounding oral tissues. The procedure helps identify infections, inflammatory conditions, benign growths, pre-cancerous changes, or malignant tumors and guides appropriate treatment planning.',
                'about_more' => '',
                'overview' => 'Oral lesions and cysts may develop due to infection, trauma, chronic irritation, developmental abnormalities, or tumor formation. During a biopsy, a small portion or the entire lesion is surgically removed and sent for histopathological examination under a microscope. Biopsies may be incisional (sampling part of the lesion) or excisional (complete removal of the lesion) depending on the size and clinical suspicion. Early diagnosis through biopsy plays a vital role in detecting oral cancer and other serious oral diseases.',
                'symptoms' => [
            ['value' => 'Persistent mouth ulcers or non-healing sores'],
            ['value' => 'Swelling, lumps, or cystic growths inside the mouth or jaw'],
            ['value' => 'White, red, or mixed patches in the oral cavity'],
            ['value' => 'Pain, bleeding, or difficulty chewing and swallowing'],
            ['value' => 'Loose teeth, jaw swelling, or unexplained oral tissue changes'],
        ],
                'causes' => [
            ['value' => 'Chronic irritation or infection affecting oral tissues'],
            ['value' => 'Benign or malignant oral growths and cysts'],
            ['value' => 'Tobacco, alcohol, or areca nut-related oral lesions'],
            ['value' => 'Developmental cysts or odontogenic abnormalities'],
            ['value' => 'Autoimmune, inflammatory, or pre-cancerous oral conditions'],
        ],
                'risks' => [
            ['value' => 'Mild pain, swelling, or bleeding after the procedure'],
            ['value' => 'Infection or delayed healing at the biopsy site'],
            ['value' => 'Temporary discomfort while eating or speaking'],
            ['value' => 'Scar formation or tissue sensitivity in certain cases'],
            ['value' => 'Need for additional surgery or treatment depending on biopsy results'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical oral examination and imaging evaluation'],
            ['value' => 'Incisional or excisional biopsy procedures'],
            ['value' => 'Histopathological laboratory analysis of tissue samples'],
            ['value' => 'Surgical removal or further treatment based on diagnosis'],
            ['value' => 'Long-term oral monitoring and follow-up care support'],
        ],
                'recovery' => 'The long-term outlook after biopsy of oral lesions and cysts is generally very positive because early diagnosis allows timely treatment and better disease management. Proper oral hygiene, regular follow-up, medication compliance, and avoidance of harmful habits such as tobacco or areca nut use are important for maintaining oral health and reducing recurrence or progression of disease. _______________',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Biopsy of Oral Lesions & Cysts',
                'meta_description' => 'Biopsy of oral lesions and cysts is a specialized diagnostic procedure performed to collect tissue samples from abnormal growths, ulcers, cysts, or suspicious a',
                'meta_keywords' => '',
            ]
        );
    }
}
