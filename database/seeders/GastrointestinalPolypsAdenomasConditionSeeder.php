<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastrointestinalPolypsAdenomasConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastrointestinal Polyps / Adenomas')],
            [
                'name' => 'Gastrointestinal Polyps / Adenomas',
                'slug' => Str::slug('Gastrointestinal Polyps / Adenomas'),
                'h1' => 'Gastrointestinal Polyps / Adenomas',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastrointestinal polyps are abnormal tissue growths in the digestive tract. Adenomas are precancerous polyps that may develop into cancer if untreated.',
                'about_more' => '',
                'overview' => 'Gastrointestinal polyps are abnormal tissue growths in the digestive tract. Adenomas are precancerous polyps that may develop into cancer if untreated.',
                'symptoms' => [
            ['value' => 'Rectal bleeding'],
            ['value' => 'Change in bowel habits'],
            ['value' => 'Abdominal discomfort'],
            ['value' => 'Iron deficiency anemia'],
            ['value' => 'Often asymptomatic in early stages'],
        ],
                'causes' => [
            ['value' => 'Increasing age'],
            ['value' => 'Family history of colon polyps or cancer'],
            ['value' => 'Chronic inflammatory bowel disease'],
            ['value' => 'High-fat and low-fiber diet'],
            ['value' => 'Smoking and obesity'],
        ],
                'risks' => [
            ['value' => 'Progression to colorectal cancer'],
            ['value' => 'Gastrointestinal bleeding'],
            ['value' => 'Intestinal obstruction in large polyps'],
            ['value' => 'Recurrence after removal'],
            ['value' => 'Multiple hereditary polyp syndromes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Colonoscopy and endoscopic removal'],
            ['value' => 'Biopsy and histopathological examination'],
            ['value' => 'Regular surveillance colonoscopy'],
            ['value' => 'Surgical removal for large lesions'],
            ['value' => 'Lifestyle and dietary modification'],
        ],
                'recovery' => 'Most polyps can be successfully removed before cancer develops. Regular screening is important for prevention and early detection.',
                'sort_order' => 30,
                'is_active' => true,
                'meta_title' => 'Gastrointestinal Polyps / Adenomas',
                'meta_description' => 'Gastrointestinal polyps are abnormal tissue growths in the digestive tract. Adenomas are precancerous polyps that may develop into cancer if untreated.',
                'meta_keywords' => '',
            ]
        );
    }
}
