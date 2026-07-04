<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MammographyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mammography')],
            [
                'name' => 'Mammography',
                'slug' => Str::slug('Mammography'),
                'h1' => 'Mammography',
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
            ['value' => 'Routine breast cancer screening'],
            ['value' => 'Evaluation of breast lumps or abnormalities'],
            ['value' => 'Detection of calcifications and cysts'],
            ['value' => 'Monitoring individuals at high risk for breast cancer'],
            ['value' => 'Follow-up evaluation after breast procedures or treatment'],
        ],
                'risks' => [
            ['value' => 'Mild discomfort or pressure during breast compression'],
            ['value' => 'Minimal exposure to low-dose radiation'],
            ['value' => 'Temporary breast tenderness after the procedure'],
            ['value' => 'False-positive or inconclusive findings requiring additional tests'],
            ['value' => 'Anxiety related to abnormal screening results'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Mammography supports early detection of breast cancer, diagnostic evaluation of breast abnormalities, treatment planning, and long-term breast health monitoring. It is commonly combined with ultrasound, MRI, biopsy, and specialist consultation for comprehensive breast evaluation and management.'],
            ['value' => 'Most individuals can resume normal activities immediately'],
            ['value' => 'Follow-up imaging or additional testing may be recommended'],
            ['value' => 'Patients should discuss abnormal findings with their healthcare provider'],
            ['value' => 'Routine screening schedules should be followed as advised'],
            ['value' => 'Ongoing breast self-awareness and regular medical follow-up are important'],
        ],
                'recovery' => 'The long-term outlook with regular mammography screening is highly positive because early detection of breast abnormalities significantly improves treatment success and survival outcomes. Consistent breast screening, timely evaluation of symptoms, and regular follow-up care are important for maintaining long-term breast health and early cancer detection. _____________________________ 6. Doppler Ultrasound (Peripheral & Carotid Vessels) Doppler Ultrasound (Peripheral & Carotid Vessels) Procedures',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Mammography',
                'meta_description' => 'Mammography is a specialized breast imaging procedure that uses low-dose X-rays to evaluate breast tissue and detect abnormalities such as lumps, calcifications',
                'meta_keywords' => '',
            ]
        );
    }
}
