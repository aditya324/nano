<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NuclearMedicinePETCTImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nuclear Medicine / PET-CT Imaging')],
            [
                'name' => 'Nuclear Medicine / PET-CT Imaging',
                'slug' => Str::slug('Nuclear Medicine / PET-CT Imaging'),
                'h1' => 'Nuclear Medicine / PET-CT Imaging',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nuclear medicine and PET-CT imaging are advanced diagnostic imaging procedures that use small amounts of radioactive materials along with specialized imaging technology to evaluate organ function, metabolic activity, and disease processes within the body. These imaging techniques help detect abnormalities at an early stage and support accurate diagnosis and treatment planning.',
                'about_more' => '',
                'overview' => 'PET-CT (Positron Emission Tomography–Computed Tomography) combines metabolic imaging with detailed anatomical CT imaging to assess cancer, neurological disorders, cardiovascular disease, infections, and inflammatory conditions. Nuclear medicine studies evaluate the function of organs such as the thyroid, heart, bones, kidneys, and lungs using radioactive tracers. These procedures are widely used for disease detection, cancer staging, treatment monitoring, and follow-up evaluation.',
                'symptoms' => [
            ['value' => 'Unexplained weight loss or persistent fatigue'],
            ['value' => 'Suspicion of cancer or tumor spread'],
            ['value' => 'Chronic pain or unexplained inflammation'],
            ['value' => 'Neurological symptoms or cognitive changes'],
            ['value' => 'Cardiac or organ-related functional abnormalities'],
        ],
                'causes' => [
            ['value' => 'Cancer detection, staging, and treatment monitoring'],
            ['value' => 'Evaluation of tumor spread and recurrence'],
            ['value' => 'Assessment of heart, bone, thyroid, and kidney function'],
            ['value' => 'Detection of infections and inflammatory conditions'],
            ['value' => 'Monitoring response to chemotherapy, radiation, or other treatments'],
        ],
                'risks' => [
            ['value' => 'Minimal exposure to radioactive tracers and radiation'],
            ['value' => 'Rare allergic reactions to injected materials'],
            ['value' => 'Temporary discomfort during injection or scanning'],
            ['value' => 'Special precautions required during pregnancy or breastfeeding'],
            ['value' => 'Need for fasting or preparation before certain studies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nuclear medicine and PET-CT imaging support early disease detection, cancer staging, treatment planning, and long-term monitoring of various medical conditions. These procedures are commonly used in oncology, cardiology, neurology, endocrinology, and infection imaging to guide medical management and evaluate treatment effectiveness.'],
            ['value' => 'Drinking plenty of fluids to help eliminate radioactive material'],
            ['value' => 'Following dietary or preparation instructions provided by healthcare professionals'],
            ['value' => 'Monitoring for unusual symptoms after the procedure'],
            ['value' => 'Resuming normal activities unless otherwise advised'],
            ['value' => 'Attending follow-up consultations for result evaluation and treatment planning'],
        ],
                'recovery' => 'The long-term outlook with nuclear medicine and PET-CT imaging is highly positive because these advanced imaging techniques support early diagnosis, accurate disease assessment, and effective treatment monitoring. Timely imaging evaluation and regular medical follow-up can significantly improve patient outcomes and long-term healthcare management. ______________________ 11. Bone Densitometry (DEXA Scan) Bone Densitometry (DEXA Scan) Procedures',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Nuclear Medicine / PET-CT Imaging',
                'meta_description' => 'Nuclear medicine and PET-CT imaging are advanced diagnostic imaging procedures that use small amounts of radioactive materials along with specialized imaging te',
                'meta_keywords' => '',
            ]
        );
    }
}
