<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverCancerHepatocellularCarcinomaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Liver Cancer (Hepatocellular Carcinoma)')],
            [
                'title' => 'Liver Cancer (Hepatocellular Carcinoma)',
                'slug' => Str::slug('Liver Cancer (Hepatocellular Carcinoma)'),
                'introduction' => '',
                'what_is' => 'Liver cancer, also known as hepatocellular carcinoma (HCC), is a type of cancer that begins in the liver cells. It is one of the most common forms of primary liver cancer and often develops in individuals with chronic liver disease or cirrhosis. Early diagnosis and timely treatment are important for improving survival and preserving liver function. Common Symptoms Abdominal pain or swelling Unexplained weight loss and loss of appetite Fatigue and weakness Jaundice (yellowing of the skin and eyes) Nausea, vomiting, or abdominal discomfort Causes & Triggers Chronic hepatitis B or hepatitis C infection Liver cirrhosis from alcohol-related or chronic liver disease Non-alcoholic fatty liver disease (NAFLD) or metabolic liver disease Smoking and long-term alcohol consumption Exposure to toxins or genetic liver disorders Risks & Complications Spread of cancer to nearby organs or distant body parts Liver failure and worsening cirrhosis Internal bleeding and fluid accumulation in the abdomen Severe malnutrition and weight loss Complications related to chemotherapy, surgery, or liver dysfunction Treatment Options Surgical removal of liver tumors when possible Liver transplantation in selected cases Chemotherapy, targeted therapy, or immunotherapy Radiofrequency ablation or transarterial chemoembolization (TACE) Supportive liver care and multidisciplinary cancer management Recovery & Outlook The long-term outlook for liver cancer depends on the stage of cancer, liver function status, and response to treatment. Early diagnosis and specialized cancer care can significantly improve treatment outcomes and quality of life. Regular monitoring, liver disease management, healthy lifestyle changes, and long-term follow-up are important for supporting recovery and reducing the risk of recurrence.',
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
                'seo_title' => 'Liver Cancer (Hepatocellular Carcinoma)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
