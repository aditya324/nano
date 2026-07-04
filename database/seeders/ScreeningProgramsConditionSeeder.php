<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScreeningProgramsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Screening Programs')],
            [
                'name' => 'Screening Programs',
                'slug' => Str::slug('Screening Programs'),
                'h1' => 'Screening Programs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cancer screening programs are preventive healthcare procedures designed to detect cancer or precancerous changes at an early stage before symptoms develop. Screening for breast, lung, and cervical cancer helps improve early diagnosis, increase treatment success, and reduce cancer-related complications and mortality.',
                'about_more' => '',
                'overview' => 'Breast cancer screening commonly includes mammography and breast imaging, lung cancer screening uses low-dose CT scans for high-risk individuals, and cervical cancer screening involves Pap smear testing and HPV evaluation. These screening programs help identify abnormal changes, early-stage cancer, and high-risk conditions, allowing timely medical intervention and preventive care.',
                'symptoms' => [
            ['value' => 'Persistent cough or breathing difficulty'],
            ['value' => 'Breast lump or breast-related changes'],
            ['value' => 'Abnormal vaginal bleeding or pelvic discomfort'],
            ['value' => 'Unexplained weight loss or fatigue'],
            ['value' => 'Persistent pain or unexplained physical symptoms'],
        ],
                'causes' => [
            ['value' => 'Early detection of breast, lung, and cervical cancers'],
            ['value' => 'Identification of precancerous or abnormal cellular changes'],
            ['value' => 'Monitoring individuals at high risk for cancer'],
            ['value' => 'Preventive healthcare and long-term cancer surveillance'],
            ['value' => 'Supporting timely diagnosis and treatment planning'],
        ],
                'risks' => [
            ['value' => 'False-positive or inconclusive screening results'],
            ['value' => 'Anxiety related to abnormal findings'],
            ['value' => 'Need for additional imaging or biopsy procedures'],
            ['value' => 'Minimal radiation exposure in certain imaging studies'],
            ['value' => 'Rare discomfort during screening procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cancer screening programs support preventive healthcare, early diagnosis, treatment planning, and long-term oncology monitoring. Early detection through regular screening can significantly improve treatment success, reduce complications, and increase survival outcomes in individuals at risk for cancer.'],
            ['value' => 'Following recommended screening schedules regularly'],
            ['value' => 'Attending follow-up tests or specialist consultations if abnormalities are detected'],
            ['value' => 'Maintaining healthy lifestyle habits and preventive healthcare practices'],
            ['value' => 'Discussing screening results and future monitoring plans with healthcare providers'],
            ['value' => 'Reporting persistent or unusual symptoms promptly'],
        ],
                'recovery' => 'The long-term outlook with regular cancer screening programs is highly positive because early detection allows timely medical intervention and improved treatment outcomes. Routine screening, preventive healthcare, healthy lifestyle choices, and ongoing medical follow-up are important for reducing cancer risk and maintaining long-term health and well-being. __________________________ 20. Image-Guided Pain Management (Nerve Blocks, Joint Injections) Image-Guided Pain Management (Nerve Blocks & Joint Injections) Procedures',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Screening Programs',
                'meta_description' => 'Cancer screening programs are preventive healthcare procedures designed to detect cancer or precancerous changes at an early stage before symptoms develop. Scre',
                'meta_keywords' => '',
            ]
        );
    }
}
