<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallbladderCarcinomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gallbladder Carcinoma')],
            [
                'name' => 'Gallbladder Carcinoma',
                'slug' => Str::slug('Gallbladder Carcinoma'),
                'h1' => 'Gallbladder Carcinoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gallbladder carcinoma is a malignant tumor arising from the gallbladder lining. It is often associated with long-standing gallstones and may remain undetected until advanced stages.',
                'about_more' => '',
                'overview' => 'Gallbladder carcinoma is a malignant tumor arising from the gallbladder lining. It is often associated with long-standing gallstones and may remain undetected until advanced stages.',
                'symptoms' => [
            ['value' => 'Persistent right upper abdominal pain'],
            ['value' => 'Loss of appetite and weight loss'],
            ['value' => 'Jaundice and yellowing of eyes'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Abdominal swelling or lump in advanced disease'],
        ],
                'causes' => [
            ['value' => 'Chronic gallstones and gallbladder inflammation'],
            ['value' => 'Gallbladder polyps or calcification'],
            ['value' => 'Female gender and older age'],
            ['value' => 'Obesity and unhealthy diet'],
            ['value' => 'Chronic bile duct abnormalities'],
        ],
                'risks' => [
            ['value' => 'Spread to liver and nearby organs'],
            ['value' => 'Bile duct obstruction causing jaundice'],
            ['value' => 'Severe weight loss and malnutrition'],
            ['value' => 'Metastatic cancer spread'],
            ['value' => 'Reduced survival in advanced disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound, CT, and MRI evaluation'],
            ['value' => 'Biopsy and cancer staging investigations'],
            ['value' => 'Surgical removal of gallbladder and affected tissues'],
            ['value' => 'Chemotherapy and radiation therapy'],
            ['value' => 'Palliative care in advanced disease'],
        ],
                'recovery' => 'Outcome depends on the stage at diagnosis. Early detection and surgical treatment offer the best chance of long-term survival.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Gallbladder Carcinoma',
                'meta_description' => 'Gallbladder carcinoma is a malignant tumor arising from the gallbladder lining. It is often associated with long-standing gallstones and may remain undetected u',
                'meta_keywords' => '',
            ]
        );
    }
}
