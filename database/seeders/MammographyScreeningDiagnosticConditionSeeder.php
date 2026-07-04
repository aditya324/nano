<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MammographyScreeningDiagnosticConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mammography (Screening & Diagnostic)')],
            [
                'name' => 'Mammography (Screening & Diagnostic)',
                'slug' => Str::slug('Mammography (Screening & Diagnostic)'),
                'h1' => 'Mammography (Screening & Diagnostic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mammography is a specialized breast imaging procedure that uses low-dose X-rays to evaluate breast tissue and detect abnormalities such as lumps, calcifications, cysts, and breast cancer. It is widely used for routine breast cancer screening and diagnostic evaluation of breast-related symptoms or abnormal findings.',
                'about_more' => '',
                'overview' => 'Screening mammography is performed in individuals without symptoms to detect early breast changes before they become clinically noticeable, while diagnostic mammography is used to evaluate breast pain, lumps, nipple discharge, or abnormal screening results. Mammography plays a vital role in early breast cancer detection, improving treatment outcomes and long-term breast health. Additional imaging such as breast ultrasound or MRI may be recommended when required.',
                'symptoms' => [
            ['value' => 'Breast lump or thickening'],
            ['value' => 'Breast pain or tenderness'],
            ['value' => 'Nipple discharge or skin changes'],
            ['value' => 'Changes in breast shape or size'],
            ['value' => 'Abnormal findings during routine breast examination'],
        ],
                'causes' => [
            ['value' => 'Hormonal changes affecting breast tissue'],
            ['value' => 'Family history or genetic risk factors for breast cancer'],
            ['value' => 'Benign breast cysts or fibrocystic changes'],
            ['value' => 'Abnormal growth of breast tissue or tumors'],
            ['value' => 'Age-related and lifestyle-related breast health risks'],
        ],
                'risks' => [
            ['value' => 'Delayed detection of breast cancer'],
            ['value' => 'Spread of malignant breast tumors'],
            ['value' => 'Persistent breast pain or discomfort'],
            ['value' => 'Emotional stress related to abnormal findings'],
            ['value' => 'Need for additional imaging or biopsy procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Screening and diagnostic mammography evaluation'],
            ['value' => 'Breast ultrasound or MRI for detailed assessment'],
            ['value' => 'Biopsy procedures for suspicious abnormalities'],
            ['value' => 'Surgical, medical, or oncology treatment when required'],
            ['value' => 'Long-term breast health monitoring and preventive care'],
        ],
                'recovery' => 'The long-term outlook with regular mammography screening is highly positive because early detection of breast abnormalities significantly improves treatment success and survival outcomes. Routine breast screening, timely imaging evaluation, healthy lifestyle practices, and ongoing medical follow-up are important for maintaining long-term breast health and early cancer detection.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Mammography (Screening & Diagnostic)',
                'meta_description' => 'Mammography is a specialized breast imaging procedure that uses low-dose X-rays to evaluate breast tissue and detect abnormalities such as lumps, calcifications',
                'meta_keywords' => '',
            ]
        );
    }
}
