<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ColorectalCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Colorectal Cancer')],
            [
                'title' => 'Colorectal Cancer',
                'slug' => Str::slug('Colorectal Cancer'),
                'introduction' => '',
                'what_is' => 'Colorectal cancer is a type of cancer that develops in the colon or rectum, which are parts of the large intestine. It usually begins as small growths called polyps that can gradually become cancerous over time. Early detection through screening and timely treatment significantly improve recovery outcomes and reduce the risk of complications. Common Symptoms Persistent changes in bowel habits such as diarrhea or constipation Blood in the stool or rectal bleeding Abdominal pain, cramps, or bloating Unexplained weight loss and fatigue A feeling that the bowel does not empty completely Causes & Triggers Increasing age and family history of colorectal cancer Diets high in processed or red meat and low in fiber Obesity and physical inactivity Smoking and excessive alcohol consumption Inflammatory bowel diseases such as ulcerative colitis or Crohn’s disease Risks & Complications Spread of cancer to nearby organs or distant body parts Intestinal blockage or bowel obstruction Severe bleeding and anemia Nutritional deficiency and weight loss Complications related to surgery, chemotherapy, or radiation therapy Treatment Options Surgical removal of the tumor or affected bowel segment Chemotherapy and targeted therapy Radiation therapy for selected cases Immunotherapy when indicated Regular screening and long-term cancer follow-up care Recovery & Outlook The long-term outlook for colorectal cancer depends on the stage of cancer, early diagnosis, and response to treatment. Screening and early detection significantly improve survival rates and treatment success. Comprehensive cancer care, healthy lifestyle modifications, and regular follow-up monitoring are important for long-term recovery and prevention of recurrence.',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Colorectal Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
