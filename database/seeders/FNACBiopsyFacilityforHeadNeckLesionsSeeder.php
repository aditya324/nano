<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FNACBiopsyFacilityforHeadNeckLesionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('FNAC & Biopsy Facility for Head & Neck Lesions')],
            [
                'title' => 'FNAC & Biopsy Facility for Head & Neck Lesions',
                'slug' => Str::slug('FNAC & Biopsy Facility for Head & Neck Lesions'),
                'introduction' => 'FNAC (Fine Needle Aspiration Cytology) and biopsy facilities provide specialized diagnostic procedures for evaluating head and neck lumps, tumors, cysts, and suspicious lesions. These procedures help determine whether abnormalities are benign, inflammatory, or cancerous. Accurate tissue diagnosis is essential for treatment planning.',
                'what_is' => 'The facility may perform: FNAC of neck swellings Needle biopsies Tissue biopsies Ultrasound-guided sampling Histopathological analysis The procedures are commonly used for: Thyroid nodules Lymph node enlargement Salivary gland masses Oral lesions Suspected cancers Early diagnosis improves treatment success and long-term outcomes.',
                'symptoms' => [
            ['value' => 'Neck lump or swelling'],
            ['value' => 'Persistent oral ulcers'],
            ['value' => 'Enlarged lymph nodes'],
            ['value' => 'Salivary gland masses'],
            ['value' => 'Suspicion of cancerous lesions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild pain during the procedure'],
            ['value' => 'Minor bleeding or bruising'],
            ['value' => 'Infection risk'],
            ['value' => 'Anxiety regarding results'],
            ['value' => 'Rare inadequate tissue sampling'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the biopsy site clean and dry'],
            ['value' => 'Avoid excessive pressure on the area'],
            ['value' => 'Attend follow-up review appointments'],
            ['value' => 'Monitor for swelling or bleeding'],
            ['value' => 'Follow specialist recommendations carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild pain during the procedure'],
            ['value' => 'Minor bleeding or bruising'],
            ['value' => 'Infection risk'],
            ['value' => 'Anxiety regarding results'],
            ['value' => 'Rare inadequate tissue sampling'],
        ],
                'long_term_outlook' => 'FNAC and biopsy facilities support early and accurate diagnosis, allowing timely treatment and improved long-term outcomes for head and neck disorders.',
                'conclusion' => '',
                'seo_title' => 'FNAC & Biopsy Facility for Head & Neck Lesions',
                'seo_description' => 'FNAC (Fine Needle Aspiration Cytology) and biopsy facilities provide specialized diagnostic procedures for evaluating head and neck lumps, tumors, cysts, and suspicious lesions. These procedures help determine whether abnormalities are benign, inflammatory, or cancerous. Accurate tissue diagnosis is essential for treatment planning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
