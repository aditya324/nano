<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LungCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lung Cancer')],
            [
                'name' => 'Lung Cancer',
                'slug' => Str::slug('Lung Cancer'),
                'h1' => 'Lung Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lung cancer is a disease in which abnormal cells in the lungs grow uncontrollably and form tumors. It commonly begins in the airways or lung tissues and can spread to nearby lymph nodes or other parts of the body if not treated early. Lung cancer is one of the leading causes of cancer-related deaths worldwide, but early diagnosis and advanced treatment options can significantly improve outcomes.',
                'about_more' => '',
                'overview' => 'Lung cancer is a disease in which abnormal cells in the lungs grow uncontrollably and form tumors. It commonly begins in the airways or lung tissues and can spread to nearby lymph nodes or other parts of the body if not treated early. Lung cancer is one of the leading causes of cancer-related deaths worldwide, but early diagnosis and advanced treatment options can significantly improve outcomes.',
                'symptoms' => [
            ['value' => 'A persistent cough that does not go away'],
            ['value' => 'Chest pain or chest discomfort'],
            ['value' => 'Coughing up blood, even in small amounts'],
            ['value' => 'Shortness of breath or wheezing'],
            ['value' => 'Loss of appetite and unexplained weight loss'],
        ],
                'causes' => [
            ['value' => 'Cigarette smoking and tobacco exposure'],
            ['value' => 'Exposure to secondhand smoke'],
            ['value' => 'Exposure to harmful substances such as radon, asbestos, silica, diesel exhaust, or air pollution'],
            ['value' => 'Previous radiation therapy to the chest'],
            ['value' => 'Family history and genetic risk factors'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to other organs (metastasis)'],
            ['value' => 'Breathing difficulty and reduced lung function'],
            ['value' => 'Recurrent lung infections or pleural effusion'],
            ['value' => 'Severe weight loss and physical weakness'],
            ['value' => 'Complications related to chemotherapy, radiation, or advanced disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of lung tumors when possible'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Radiation therapy and immunotherapy'],
            ['value' => 'Supportive respiratory and palliative care'],
            ['value' => 'Multidisciplinary cancer management and long-term follow-up'],
        ],
                'recovery' => 'The long-term outlook for lung cancer depends on the type of cancer, stage at diagnosis, overall health condition, and response to treatment. Early detection and comprehensive cancer care can improve survival and quality of life. Regular follow-up, smoking cessation, rehabilitation, and supportive care are important components of long-term recovery and cancer management. ______________________ 3. Colorectal Cancer',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Lung Cancer',
                'meta_description' => 'Lung cancer is a disease in which abnormal cells in the lungs grow uncontrollably and form tumors. It commonly begins in the airways or lung tissues and can spr',
                'meta_keywords' => '',
            ]
        );
    }
}
