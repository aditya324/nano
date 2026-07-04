<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastrointestinalMalignanciesEsophagusStomachColonRectumLiverPancreasConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastrointestinal Malignancies (Esophagus, Stomach, Colon, Rectum, Liver, Pancreas)')],
            [
                'name' => 'Gastrointestinal Malignancies (Esophagus, Stomach, Colon, Rectum, Liver, Pancreas)',
                'slug' => Str::slug('Gastrointestinal Malignancies (Esophagus, Stomach, Colon, Rectum, Liver, Pancreas)'),
                'h1' => 'Gastrointestinal Malignancies (Esophagus, Stomach, Colon, Rectum, Liver, Pancreas)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastrointestinal malignancies are cancers affecting the digestive tract and associated organs. Early diagnosis is important for successful treatment and improved survival.',
                'about_more' => '',
                'overview' => 'Gastrointestinal malignancies are cancers affecting the digestive tract and associated organs. Early diagnosis is important for successful treatment and improved survival.',
                'symptoms' => [
            ['value' => 'Unexplained weight loss'],
            ['value' => 'Difficulty swallowing or persistent indigestion'],
            ['value' => 'Blood in stool or vomiting blood'],
            ['value' => 'Abdominal pain and bloating'],
            ['value' => 'Fatigue and anemia'],
        ],
                'causes' => [
            ['value' => 'Smoking and alcohol use'],
            ['value' => 'Chronic infections and inflammation'],
            ['value' => 'Poor dietary habits and obesity'],
            ['value' => 'Genetic predisposition and family history'],
            ['value' => 'Chronic liver or bowel disease'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer (metastasis)'],
            ['value' => 'Intestinal obstruction or bleeding'],
            ['value' => 'Severe malnutrition'],
            ['value' => 'Organ failure in advanced disease'],
            ['value' => 'Reduced quality of life and survival'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Endoscopy and biopsy for diagnosis'],
            ['value' => 'Surgery for tumor removal'],
            ['value' => 'Chemotherapy and radiation therapy'],
            ['value' => 'Targeted therapy or immunotherapy'],
            ['value' => 'Nutritional and palliative care support'],
        ],
                'recovery' => 'Outcomes depend on the cancer type and stage at diagnosis. Early detection significantly improves survival rates.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Gastrointestinal Malignancies (Esophagus, Stomach, Colon, Rectum, Liver, Pancreas)',
                'meta_description' => 'Gastrointestinal malignancies are cancers affecting the digestive tract and associated organs. Early diagnosis is important for successful treatment and improve',
                'meta_keywords' => '',
            ]
        );
    }
}
