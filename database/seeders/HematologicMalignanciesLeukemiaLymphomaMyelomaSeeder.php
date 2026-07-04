<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HematologicMalignanciesLeukemiaLymphomaMyelomaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hematologic Malignancies (Leukemia, Lymphoma, Myeloma)')],
            [
                'title' => 'Hematologic Malignancies (Leukemia, Lymphoma, Myeloma)',
                'slug' => Str::slug('Hematologic Malignancies (Leukemia, Lymphoma, Myeloma)'),
                'introduction' => '',
                'what_is' => 'Hematologic malignancies are cancers that affect the blood, bone marrow, and lymphatic system. Common types include leukemia, lymphoma, and multiple myeloma. These conditions interfere with the normal production and function of blood cells, weaken the immune system, and may affect multiple organs in the body. Early diagnosis and specialized cancer treatment are important for improving outcomes and disease control. Common Symptoms Persistent fatigue and weakness Frequent infections or fever Unexplained weight loss and loss of appetite Swollen lymph nodes or enlarged spleen Easy bruising, bleeding, or bone pain Causes & Triggers Genetic mutations or family history of blood cancers Exposure to radiation or harmful chemicals Weakened immune system or autoimmune disorders Previous chemotherapy or radiation treatment Viral infections associated with certain lymphomas Risks & Complications Severe anemia and reduced immunity Increased risk of serious infections Bleeding disorders and low platelet counts Spread of cancer to organs, bone marrow, or lymph nodes Organ dysfunction and complications related to advanced disease or treatment Treatment Options Chemotherapy and targeted cancer therapy Immunotherapy and monoclonal antibody treatment Bone marrow or stem cell transplantation Radiation therapy for selected cases Blood transfusion, infection management, and supportive care Recovery & Outlook Recovery and long-term outlook depend on the type of hematologic malignancy, stage of disease, response to treatment, and overall patient health. Early diagnosis, chemotherapy, targeted therapy, immunotherapy, bone marrow transplantation, supportive care, nutritional support, and regular oncology follow-up significantly improve treatment outcomes and quality of life. Advances in cancer care continue to improve survival rates and long-term disease management for many patients.',
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
                'seo_title' => 'Hematologic Malignancies (Leukemia, Lymphoma, Myeloma)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
