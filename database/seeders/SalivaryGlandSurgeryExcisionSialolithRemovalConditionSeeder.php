<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SalivaryGlandSurgeryExcisionSialolithRemovalConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Salivary Gland Surgery (Excision, Sialolith Removal)')],
            [
                'name' => 'Salivary Gland Surgery (Excision, Sialolith Removal)',
                'slug' => Str::slug('Salivary Gland Surgery (Excision, Sialolith Removal)'),
                'h1' => 'Salivary Gland Surgery (Excision, Sialolith Removal)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Salivary gland surgery involves specialized surgical procedures performed to treat disorders affecting the salivary glands, including infections, salivary stones (sialoliths), cysts, benign tumors, malignant tumors, and chronic gland obstruction. These procedures help restore normal saliva flow, relieve pain and swelling, prevent recurrent infections, and preserve oral function.',
                'about_more' => '',
                'overview' => 'Salivary gland surgery may involve removal of salivary stones, drainage of infected glands, partial or complete gland excision, or tumor removal depending on the underlying condition. Commonly treated glands include the parotid, submandibular, and sublingual glands. Sialolith removal procedures focus on extracting stones blocking saliva ducts, while gland excision is performed in cases of recurrent infection, chronic obstruction, or tumors. Advanced imaging and minimally invasive techniques help improve surgical precision and recovery outcomes.',
                'symptoms' => [
            ['value' => 'Swelling near the jaw, cheek, or under the tongue'],
            ['value' => 'Pain during eating or saliva production'],
            ['value' => 'Dry mouth or reduced saliva flow'],
            ['value' => 'Recurrent salivary gland infections or pus discharge'],
            ['value' => 'Persistent lump or swelling in the salivary gland region'],
        ],
                'causes' => [
            ['value' => 'Salivary stones obstructing saliva ducts'],
            ['value' => 'Chronic salivary gland infection or inflammation'],
            ['value' => 'Benign or malignant salivary gland tumors'],
            ['value' => 'Reduced saliva flow and dehydration-related conditions'],
            ['value' => 'Trauma, autoimmune disorders, or duct abnormalities affecting gland function'],
        ],
                'risks' => [
            ['value' => 'Swelling, pain, or bleeding after surgery'],
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Temporary or permanent facial nerve weakness in certain procedures'],
            ['value' => 'Dry mouth or altered saliva production'],
            ['value' => 'Scar formation or recurrence of salivary gland problems'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and imaging evaluation of salivary glands'],
            ['value' => 'Sialolith removal and ductal drainage procedures'],
            ['value' => 'Partial or complete salivary gland excision when required'],
            ['value' => 'Tumor removal and reconstructive procedures in complex cases'],
            ['value' => 'Long-term postoperative care, oral hygiene maintenance, and follow-up support'],
        ],
                'recovery' => 'The long-term outlook for salivary gland surgery is generally very positive because timely surgical treatment significantly improves pain relief, saliva flow, infection control, and oral function. Proper postoperative care, hydration, oral hygiene, regular follow-up, and rehabilitation support when required are important for maintaining successful long-term recovery and salivary gland health.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Salivary Gland Surgery (Excision, Sialolith Removal)',
                'meta_description' => 'Salivary gland surgery involves specialized surgical procedures performed to treat disorders affecting the salivary glands, including infections, salivary stone',
                'meta_keywords' => '',
            ]
        );
    }
}
