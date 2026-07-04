<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EsophagealCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Esophageal Cancer')],
            [
                'name' => 'Esophageal Cancer',
                'slug' => Str::slug('Esophageal Cancer'),
                'h1' => 'Esophageal Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Esophageal cancer is a type of cancer that develops in the esophagus, the long muscular tube that carries food and liquids from the throat to the stomach. The disease commonly affects older adults and may gradually interfere with swallowing and digestion as the tumor grows. Early diagnosis and timely treatment are important for improving treatment outcomes and quality of life.',
                'about_more' => '',
                'overview' => 'Esophageal cancer is a type of cancer that develops in the esophagus, the long muscular tube that carries food and liquids from the throat to the stomach. The disease commonly affects older adults and may gradually interfere with swallowing and digestion as the tumor grows. Early diagnosis and timely treatment are important for improving treatment outcomes and quality of life.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing (dysphagia)'],
            ['value' => 'Persistent heartburn or worsening acid reflux'],
            ['value' => 'Unintentional weight loss'],
            ['value' => 'Coughing, hoarseness, or throat discomfort'],
            ['value' => 'Vomiting or coughing up blood in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Increasing age, especially above 60 years'],
            ['value' => 'Male gender'],
            ['value' => 'Chronic acid reflux or gastroesophageal reflux disease (GERD)'],
            ['value' => 'Smoking and excessive alcohol consumption'],
            ['value' => 'Obesity, poor dietary habits, or Barrett’s esophagus'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or lymph nodes'],
            ['value' => 'Severe difficulty swallowing and malnutrition'],
            ['value' => 'Bleeding and anemia'],
            ['value' => 'Breathing problems due to tumor spread'],
            ['value' => 'Complications related to surgery, chemotherapy, or radiation therapy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the tumor or affected esophagus'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Radiation therapy and combined chemoradiation'],
            ['value' => 'Nutritional support and swallowing management'],
            ['value' => 'Palliative care and symptom control in advanced disease'],
        ],
                'recovery' => 'The long-term outlook for esophageal cancer depends on the stage of disease, overall health condition, and response to treatment. Early detection and multidisciplinary cancer care can improve survival rates and quality of life. Continuous follow-up, nutritional care, lifestyle modifications, and supportive treatment are important for long-term recovery and prevention of complications. ______________________ 6. Liver Cancer (Hepatocellular Carcinoma)',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Esophageal Cancer',
                'meta_description' => 'Esophageal cancer is a type of cancer that develops in the esophagus, the long muscular tube that carries food and liquids from the throat to the stomach. The d',
                'meta_keywords' => '',
            ]
        );
    }
}
