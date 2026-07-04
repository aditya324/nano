<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinCancerMelanomaNonMelanomaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Cancer (Melanoma & Non-Melanoma)')],
            [
                'title' => 'Skin Cancer (Melanoma & Non-Melanoma)',
                'slug' => Str::slug('Skin Cancer (Melanoma & Non-Melanoma)'),
                'introduction' => '',
                'what_is' => 'Skin cancer is a type of cancer that develops when abnormal skin cells grow uncontrollably. It commonly occurs in areas exposed to sunlight but can also develop in other parts of the body. The main types include melanoma, which is more aggressive, and non-melanoma skin cancers such as basal cell carcinoma and squamous cell carcinoma. Early diagnosis and treatment are important for preventing the spread of cancer and improving outcomes. Common Symptoms New or changing skin growths or moles A sore that does not heal Changes in the size, color, or shape of a mole Itching, bleeding, or crusting skin lesions Dark or irregular skin patches with uneven borders Causes & Triggers Excessive exposure to ultraviolet (UV) radiation from sunlight or tanning beds Fair skin, light-colored eyes, or history of sunburns Family history or genetic predisposition Weak immune system or previous skin cancers Exposure to harmful chemicals or radiation Risks & Complications Spread of cancer to nearby tissues or distant organs Skin damage, scarring, or disfigurement Increased risk of recurrent skin cancers Complications affecting lymph nodes or internal organs in advanced melanoma Emotional stress and cosmetic concerns related to treatment Treatment Options Surgical removal of cancerous skin lesions Mohs micrographic surgery for selected skin cancers Radiation therapy and chemotherapy when required Immunotherapy or targeted therapy for advanced melanoma Regular skin examinations and preventive sun protection measures Recovery & Outlook The long-term outlook for skin cancer depends on the type of cancer, stage at diagnosis, and response to treatment. Early detection and treatment provide excellent recovery outcomes for many individuals, especially in non-melanoma skin cancers. Regular dermatologic follow-up, sun protection, skin self-examination, and preventive care are important for reducing recurrence risk and maintaining long-term skin health.',
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
                'seo_title' => 'Skin Cancer (Melanoma & Non-Melanoma)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
