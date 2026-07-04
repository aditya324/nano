<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryCareforSystemicDisordersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Care for Systemic Disorders')],
            [
                'title' => 'Multidisciplinary Care for Systemic Disorders',
                'slug' => Str::slug('Multidisciplinary Care for Systemic Disorders'),
                'introduction' => 'Multidisciplinary care involves coordinated treatment and collaboration between dermatology, rheumatology, endocrinology, and other medical specialties to manage systemic diseases that affect the skin and overall health. This integrated approach helps provide comprehensive diagnosis, treatment, and long-term monitoring for complex medical conditions with dermatologic manifestations.',
                'what_is' => 'Many autoimmune, hormonal, metabolic, and inflammatory disorders can affect both the skin and internal organs. Conditions such as psoriasis, lupus, dermatomyositis, thyroid disorders, diabetes, and connective tissue diseases often require combined care from dermatologists, rheumatologists, and endocrinologists. Multidisciplinary management focuses on controlling systemic disease activity, improving skin symptoms, preventing complications, and enhancing overall quality of life.',
                'symptoms' => [
            ['value' => 'Persistent skin rashes or inflammatory lesions'],
            ['value' => 'Joint pain, swelling, or stiffness'],
            ['value' => 'Hair loss, nail changes, or pigmentation disorders'],
            ['value' => 'Hormonal imbalance or metabolic-related skin changes'],
            ['value' => 'Chronic fatigue, itching, or systemic symptoms affecting overall health'],
        ],
                'causes' => [
            ['value' => 'Systemic disorders with dermatologic manifestations may develop due to autoimmune diseases, hormonal imbalances, metabolic abnormalities, chronic inflammation, genetic predisposition, or immune system dysfunction. Conditions such as psoriasis, systemic lupus erythematosus, dermatomyositis, thyroid disorders, diabetes mellitus, and connective tissue diseases commonly involve both skin and internal organ systems. Environmental triggers, infections, stress, medications, and lifestyle factors may also contribute to disease onset or worsening of symptoms.'],
        ],
                'condition_risks' => [
            ['value' => 'Progression of underlying systemic disease'],
            ['value' => 'Chronic inflammation affecting skin and organs'],
            ['value' => 'Reduced mobility or physical functioning in autoimmune conditions'],
            ['value' => 'Emotional stress and reduced quality of life'],
            ['value' => 'Long-term complications due to delayed diagnosis or treatment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for systemic disorders with skin involvement focus on coordinated care between dermatologists, rheumatologists, endocrinologists, and other specialists based on the underlying condition. Management may include anti-inflammatory medications, immunosuppressive therapies, biologic treatments, hormonal regulation, and medications to control autoimmune or metabolic disease activity. Dermatologic treatments such as topical therapies, phototherapy, and supportive skincare may also be recommended to manage skin symptoms and improve comfort. Lifestyle modifications, nutritional support, stress management, and regular monitoring of systemic health are important components of long-term care. Individualized treatment planning and close specialist collaboration help optimize outcomes, reduce complications, and improve overall quality of life.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular follow-up with dermatology and specialty care teams'],
            ['value' => 'Laboratory monitoring and imaging when required'],
            ['value' => 'Adherence to prescribed medications and lifestyle recommendations'],
            ['value' => 'Nutritional support and preventive healthcare measures'],
            ['value' => 'Long-term disease monitoring and symptom management'],
        ],
                'surgery_risks' => [
            ['value' => 'Progression of underlying systemic disease'],
            ['value' => 'Chronic inflammation affecting skin and organs'],
            ['value' => 'Reduced mobility or physical functioning in autoimmune conditions'],
            ['value' => 'Emotional stress and reduced quality of life'],
            ['value' => 'Long-term complications due to delayed diagnosis or treatment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for systemic disorders with skin involvement focus on coordinated care between dermatologists, rheumatologists, endocrinologists, and other specialists based on the underlying condition. Management may include anti-inflammatory medications, immunosuppressive therapies, biologic treatments, hormonal regulation, and medications to control autoimmune or metabolic disease activity. Dermatologic treatments such as topical therapies, phototherapy, and supportive skincare may also be recommended to manage skin symptoms and improve comfort. Lifestyle modifications, nutritional support, stress management, and regular monitoring of systemic health are important components of long-term care. Individualized treatment planning and close specialist collaboration help optimize outcomes, reduce complications, and improve overall quality of life.'],
        ],
                'long_term_outlook' => 'The long-term outlook with multidisciplinary care is generally improved due to coordinated management of both skin and systemic conditions. Early diagnosis, integrated treatment planning, and continuous specialist follow-up help reduce complications, improve symptom control, and enhance long-term health outcomes and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Multidisciplinary Care for Systemic Disorders',
                'seo_description' => 'Multidisciplinary care involves coordinated treatment and collaboration between dermatology, rheumatology, endocrinology, and other medical specialties to manage systemic diseases that affect the skin and overall health. This integrated approach helps provide comprehensive diagnosis, treatment, and long-term monitoring for complex medical conditions with dermatologic manifestations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
