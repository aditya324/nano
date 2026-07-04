<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadNeckCancerDiagnosticSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Head & Neck Cancer Diagnostic Setup')],
            [
                'title' => 'Head & Neck Cancer Diagnostic Setup',
                'slug' => Str::slug('Head & Neck Cancer Diagnostic Setup'),
                'introduction' => 'A head and neck cancer diagnostic setup is a specialized facility designed for early detection, evaluation, and staging of cancers affecting the oral cavity, throat, larynx, thyroid, salivary glands, and neck structures. Early diagnosis significantly improves treatment success and survival rates. The setup supports multidisciplinary cancer care.',
                'what_is' => 'The diagnostic setup may include: Endoscopy systems Imaging support Biopsy facilities Pathology services Tumor staging evaluation Oncology coordination The facility helps diagnose: Oral cancer Laryngeal cancer Nasopharyngeal tumors Thyroid malignancies Salivary gland tumors Advanced diagnostics improve treatment planning and long-term monitoring.',
                'symptoms' => [
            ['value' => 'Persistent throat pain'],
            ['value' => 'Non-healing mouth ulcers'],
            ['value' => 'Neck swelling'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Difficulty swallowing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis if symptoms are ignored'],
            ['value' => 'Emotional stress related to cancer evaluation'],
            ['value' => 'Need for multiple investigations'],
            ['value' => 'Procedure-related bleeding during biopsy'],
            ['value' => 'Progression of untreated disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend oncology and ENT follow-up visits regularly'],
            ['value' => 'Avoid tobacco and alcohol completely'],
            ['value' => 'Maintain adequate nutrition and hydration'],
            ['value' => 'Follow treatment plans consistently'],
            ['value' => 'Report new or worsening symptoms early'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis if symptoms are ignored'],
            ['value' => 'Emotional stress related to cancer evaluation'],
            ['value' => 'Need for multiple investigations'],
            ['value' => 'Procedure-related bleeding during biopsy'],
            ['value' => 'Progression of untreated disease'],
        ],
                'long_term_outlook' => 'Comprehensive cancer diagnostic facilities improve early detection, treatment success, and long-term survival for head and neck cancer patients.',
                'conclusion' => '',
                'seo_title' => 'Head & Neck Cancer Diagnostic Setup',
                'seo_description' => 'A head and neck cancer diagnostic setup is a specialized facility designed for early detection, evaluation, and staging of cancers affecting the oral cavity, throat, larynx, thyroid, salivary glands, and neck structures. Early diagnosis significantly improves treatment success and survival rates. The setup supports multidisciplinary cancer care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
