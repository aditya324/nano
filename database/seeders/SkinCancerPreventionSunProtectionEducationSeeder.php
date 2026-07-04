<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinCancerPreventionSunProtectionEducationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Cancer Prevention & Sun Protection Education')],
            [
                'title' => 'Skin Cancer Prevention & Sun Protection Education',
                'slug' => Str::slug('Skin Cancer Prevention & Sun Protection Education'),
                'introduction' => 'Patient education on skin cancer prevention and sun protection focuses on increasing awareness about harmful ultraviolet (UV) radiation exposure, early detection of skin changes, and healthy sun protection practices. Preventive education plays an important role in reducing the risk of skin cancer, premature skin aging, and long-term sun damage.',
                'what_is' => 'Skin cancer prevention programs educate individuals about proper sunscreen use, protective clothing, self-skin examinations, and avoidance of excessive sun exposure or tanning beds. Patients are also guided on recognizing warning signs of abnormal moles, changing skin lesions, and other suspicious skin changes that may require medical evaluation. Early prevention and awareness significantly improve skin health and support early detection of skin cancers.',
                'symptoms' => [
            ['value' => 'New or changing moles or skin lesions'],
            ['value' => 'Persistent sores that do not heal'],
            ['value' => 'Scaly, crusted, or bleeding skin patches'],
            ['value' => 'Uneven pigmentation or abnormal skin discoloration'],
            ['value' => 'Sunburns or chronic sun-damaged skin'],
        ],
                'causes' => [
            ['value' => 'Skin cancer and sun-related skin damage are primarily caused by excessive exposure to ultraviolet (UV) radiation from the sun or artificial tanning devices. Repeated sunburns, prolonged outdoor exposure without protection, fair skin, family history of skin cancer, weakened immunity, and increasing age may increase the risk of developing skin cancers. Environmental factors, occupational sun exposure, and inadequate use of sunscreen or protective clothing can also contribute to cumulative skin damage and abnormal skin changes over time.'],
        ],
                'condition_risks' => [
            ['value' => 'Increased risk of basal cell carcinoma, squamous cell carcinoma, or melanoma'],
            ['value' => 'Premature skin aging and pigmentation changes'],
            ['value' => 'Recurrent sunburns causing long-term skin damage'],
            ['value' => 'Increased skin sensitivity in fair-skinned individuals'],
            ['value' => 'Delayed detection of suspicious skin lesions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Preventive dermatology and skin cancer education focus on reducing UV exposure and promoting early detection of suspicious skin changes. Dermatologists may recommend daily use of broad-spectrum sunscreen with adequate SPF, protective clothing, hats, sunglasses, and avoidance of excessive sunlight exposure, especially during peak UV hours. Patients are educated on performing regular self-skin examinations to identify changing moles, unusual pigmentation, or persistent skin lesions. Individuals at higher risk may require routine dermatologic screenings, mole mapping, or biopsy of suspicious lesions for early diagnosis. In cases where precancerous or cancerous lesions are detected, treatment may include cryotherapy, topical medications, laser therapy, surgical excision, or advanced dermatologic procedures depending on the condition and severity.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Daily use of broad-spectrum sunscreen with adequate SPF'],
            ['value' => 'Wearing protective clothing, hats, and sunglasses outdoors'],
            ['value' => 'Avoiding peak sunlight hours and tanning beds'],
            ['value' => 'Performing regular self-skin examinations'],
            ['value' => 'Routine dermatologic screenings and follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased risk of basal cell carcinoma, squamous cell carcinoma, or melanoma'],
            ['value' => 'Premature skin aging and pigmentation changes'],
            ['value' => 'Recurrent sunburns causing long-term skin damage'],
            ['value' => 'Increased skin sensitivity in fair-skinned individuals'],
            ['value' => 'Delayed detection of suspicious skin lesions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Preventive dermatology and skin cancer education focus on reducing UV exposure and promoting early detection of suspicious skin changes. Dermatologists may recommend daily use of broad-spectrum sunscreen with adequate SPF, protective clothing, hats, sunglasses, and avoidance of excessive sunlight exposure, especially during peak UV hours. Patients are educated on performing regular self-skin examinations to identify changing moles, unusual pigmentation, or persistent skin lesions. Individuals at higher risk may require routine dermatologic screenings, mole mapping, or biopsy of suspicious lesions for early diagnosis. In cases where precancerous or cancerous lesions are detected, treatment may include cryotherapy, topical medications, laser therapy, surgical excision, or advanced dermatologic procedures depending on the condition and severity.'],
        ],
                'long_term_outlook' => 'The long-term outlook for skin cancer prevention is highly positive when consistent sun protection and preventive measures are practiced regularly. Early detection, healthy skincare habits, and regular dermatologic evaluations significantly reduce the risk of skin cancer and support long-term skin health and overall well-being.',
                'conclusion' => '',
                'seo_title' => 'Skin Cancer Prevention & Sun Protection Education',
                'seo_description' => 'Patient education on skin cancer prevention and sun protection focuses on increasing awareness about harmful ultraviolet (UV) radiation exposure, early detection of skin changes, and healthy sun protection practices. Preventive education plays an important role in reducing the risk of skin cancer, premature skin aging, and long-term sun damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
