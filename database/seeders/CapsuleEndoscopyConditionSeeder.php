<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CapsuleEndoscopyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Capsule Endoscopy')],
            [
                'name' => 'Capsule Endoscopy',
                'slug' => Str::slug('Capsule Endoscopy'),
                'h1' => 'Capsule Endoscopy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Capsule endoscopy is a non-invasive diagnostic procedure in which a patient swallows a small camera capsule that captures images of the digestive tract, especially the small intestine.',
                'about_more' => 'It is particularly useful when routine endoscopy or colonoscopy cannot identify the source of symptoms.',
                'overview' => 'Services and capabilities include: Small intestine imaging Detection of hidden gastrointestinal bleeding Evaluation of Crohn’s disease Tumor and ulcer detection Monitoring of intestinal disorders The capsule transmits images wirelessly to a recording device worn by the patient. Symptoms Indicating Evaluation Unexplained anemia Occult GI bleeding Chronic abdominal pain Persistent diarrhea Suspected small bowel disease',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Capsule retention in bowel narrowing'],
            ['value' => 'Incomplete image recording'],
            ['value' => 'Rare intestinal obstruction'],
            ['value' => 'Technical recording failure'],
            ['value' => 'Need for additional procedures if abnormalities are found'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow instructions regarding eating and drinking'],
            ['value' => 'Return recording equipment as advised'],
            ['value' => 'Monitor for abdominal pain or vomiting'],
            ['value' => 'Inform doctors if capsule passage is not noticed'],
            ['value' => 'Attend follow-up for result discussion'],
        ],
                'recovery' => 'Capsule endoscopy improves detection of small bowel diseases and supports earlier treatment planning. Timely diagnosis can significantly improve long-term digestive health outcomes.',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Capsule Endoscopy',
                'meta_description' => 'Capsule endoscopy is a non-invasive diagnostic procedure in which a patient swallows a small camera capsule that captures images of the digestive tract, especia',
                'meta_keywords' => '',
            ]
        );
    }
}
