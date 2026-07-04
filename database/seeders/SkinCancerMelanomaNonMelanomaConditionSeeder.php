<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinCancerMelanomaNonMelanomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Skin Cancer (Melanoma & Non-Melanoma)')],
            [
                'name' => 'Skin Cancer (Melanoma & Non-Melanoma)',
                'slug' => Str::slug('Skin Cancer (Melanoma & Non-Melanoma)'),
                'h1' => 'Skin Cancer (Melanoma & Non-Melanoma)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Skin cancer is a type of cancer that develops when abnormal skin cells grow uncontrollably. It commonly occurs in areas exposed to sunlight but can also develop in other parts of the body. The main types include melanoma, which is more aggressive, and non-melanoma skin cancers such as basal cell carcinoma and squamous cell carcinoma. Early diagnosis and treatment are important for preventing the spread of cancer and improving outcomes.',
                'about_more' => 'Hematologic malignancies are cancers that affect the blood, bone marrow, and lymphatic system. Common types include leukemia, lymphoma, and multiple myeloma. These conditions interfere with the normal production and function of blood cells, weaken the immune system, and may affect multiple organs in the body. Early diagnosis and specialized cancer treatment are important for improving outcomes and disease control.',
                'overview' => 'Skin cancer is a type of cancer that develops when abnormal skin cells grow uncontrollably. It commonly occurs in areas exposed to sunlight but can also develop in other parts of the body. The main types include melanoma, which is more aggressive, and non-melanoma skin cancers such as basal cell carcinoma and squamous cell carcinoma. Early diagnosis and treatment are important for preventing the spread of cancer and improving outcomes. Hematologic malignancies are cancers that affect the blood, bone marrow, and lymphatic system. Common types include leukemia, lymphoma, and multiple myeloma. These conditions interfere with the normal production and function of blood cells, weaken the immune system, and may affect multiple organs in the body. Early diagnosis and specialized cancer treatment are important for improving outcomes and disease control.',
                'symptoms' => [
            ['value' => 'New or changing skin growths or moles'],
            ['value' => 'A sore that does not heal'],
            ['value' => 'Changes in the size, color, or shape of a mole'],
            ['value' => 'Itching, bleeding, or crusting skin lesions'],
            ['value' => 'Dark or irregular skin patches with uneven borders'],
            ['value' => 'Persistent fatigue and weakness'],
            ['value' => 'Frequent infections or fever'],
            ['value' => 'Unexplained weight loss and loss of appetite'],
            ['value' => 'Swollen lymph nodes or enlarged spleen'],
            ['value' => 'Easy bruising, bleeding, or bone pain'],
        ],
                'causes' => [
            ['value' => 'Excessive exposure to ultraviolet (UV) radiation from sunlight or tanning beds'],
            ['value' => 'Fair skin, light-colored eyes, or history of sunburns'],
            ['value' => 'Family history or genetic predisposition'],
            ['value' => 'Weak immune system or previous skin cancers'],
            ['value' => 'Exposure to harmful chemicals or radiation'],
            ['value' => 'Genetic mutations or family history of blood cancers'],
            ['value' => 'Exposure to radiation or harmful chemicals'],
            ['value' => 'Weakened immune system or autoimmune disorders'],
            ['value' => 'Previous chemotherapy or radiation treatment'],
            ['value' => 'Viral infections associated with certain lymphomas'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby tissues or distant organs'],
            ['value' => 'Skin damage, scarring, or disfigurement'],
            ['value' => 'Increased risk of recurrent skin cancers'],
            ['value' => 'Complications affecting lymph nodes or internal organs in advanced melanoma'],
            ['value' => 'Emotional stress and cosmetic concerns related to treatment'],
            ['value' => 'Severe anemia and reduced immunity'],
            ['value' => 'Increased risk of serious infections'],
            ['value' => 'Bleeding disorders and low platelet counts'],
            ['value' => 'Spread of cancer to organs, bone marrow, or lymph nodes'],
            ['value' => 'Organ dysfunction and complications related to advanced disease or treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of cancerous skin lesions'],
            ['value' => 'Mohs micrographic surgery for selected skin cancers'],
            ['value' => 'Radiation therapy and chemotherapy when required'],
            ['value' => 'Immunotherapy or targeted therapy for advanced melanoma'],
            ['value' => 'Regular skin examinations and preventive sun protection measures'],
            ['value' => 'Chemotherapy and targeted cancer therapy'],
            ['value' => 'Immunotherapy and monoclonal antibody treatment'],
            ['value' => 'Bone marrow or stem cell transplantation'],
            ['value' => 'Radiation therapy for selected cases'],
            ['value' => 'Blood transfusion, infection management, and supportive care'],
        ],
                'recovery' => 'The long-term outlook for skin cancer depends on the type of cancer, stage at diagnosis, and response to treatment. Early detection and treatment provide excellent recovery outcomes for many individuals, especially in non-melanoma skin cancers. Regular dermatologic follow-up, sun protection, skin self-examination, and preventive care are important for reducing recurrence risk and maintaining long-term skin health. _____________________ 16. Hematologic Malignancies (Leukemia, Lymphoma, Myeloma) Hematologic Malignancies (Leukemia, Lymphoma, Myeloma) Conditions Recovery and long-term outlook depend on the type of hematologic malignancy, stage of disease, response to treatment, and overall patient health. Early diagnosis, chemotherapy, targeted therapy, immunotherapy, bone marrow transplantation, supportive care, nutritional support, and regular oncology follow-up significantly improve treatment outcomes and quality of life. Advances in cancer care continue to improve survival rates and long-term disease management for many patients. _______________________ 17. Sarcomas (Bone and Soft Tissue) Sarcomas (Bone & Soft Tissue)',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Skin Cancer (Melanoma & Non-Melanoma)',
                'meta_description' => 'Skin cancer is a type of cancer that develops when abnormal skin cells grow uncontrollably. It commonly occurs in areas exposed to sunlight but can also develop',
                'meta_keywords' => '',
            ]
        );
    }
}
