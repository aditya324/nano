<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ColorectalCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Colorectal Cancer')],
            [
                'name' => 'Colorectal Cancer',
                'slug' => Str::slug('Colorectal Cancer'),
                'h1' => 'Colorectal Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Colorectal cancer is cancer arising from the colon or rectum. It commonly develops from precancerous polyps and may spread if not diagnosed early.',
                'about_more' => '',
                'overview' => 'Colorectal cancer is cancer arising from the colon or rectum. It commonly develops from precancerous polyps and may spread if not diagnosed early.',
                'symptoms' => [
            ['value' => 'Blood in stool or rectal bleeding'],
            ['value' => 'Persistent change in bowel habits'],
            ['value' => 'Abdominal pain or bloating'],
            ['value' => 'Weight loss and fatigue'],
            ['value' => 'Anemia and weakness'],
        ],
                'causes' => [
            ['value' => 'Family history of colorectal cancer'],
            ['value' => 'Low-fiber and high-fat diet'],
            ['value' => 'Smoking and alcohol use'],
            ['value' => 'Inflammatory bowel disease'],
            ['value' => 'Obesity and sedentary lifestyle'],
        ],
                'risks' => [
            ['value' => 'Intestinal obstruction'],
            ['value' => 'Spread to liver or lungs'],
            ['value' => 'Severe bleeding and anemia'],
            ['value' => 'Perforation of the bowel'],
            ['value' => 'Advanced metastatic disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Colonoscopy and biopsy evaluation'],
            ['value' => 'Surgical removal of affected bowel segment'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Radiation therapy for rectal cancer'],
            ['value' => 'Regular cancer surveillance and follow-up'],
        ],
                'recovery' => 'Early-stage colorectal cancer has a good prognosis with surgery and oncology treatment. Screening significantly improves early detection.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Colorectal Cancer',
                'meta_description' => 'Colorectal cancer is cancer arising from the colon or rectum. It commonly develops from precancerous polyps and may spread if not diagnosed early.',
                'meta_keywords' => '',
            ]
        );
    }
}
