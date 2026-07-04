<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleDermatologyRemoteConsultationServicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Dermatology / Remote Consultation Services')],
            [
                'title' => 'Tele-Dermatology / Remote Consultation Services',
                'slug' => Str::slug('Tele-Dermatology / Remote Consultation Services'),
                'introduction' => 'Tele-dermatology is a healthcare service that allows patients to consult dermatologists remotely using digital communication technologies such as video calls, mobile applications, or secure online platforms. It helps provide convenient access to dermatologic evaluation, follow-up care, treatment guidance, and skin health monitoring without the need for an in-person visit.',
                'what_is' => 'Tele-dermatology services are commonly used for evaluating skin rashes, acne, allergies, pigmentation disorders, hair loss, nail conditions, chronic skin diseases, and follow-up consultations. Patients may share medical history, symptoms, and photographs of skin concerns for specialist assessment. Remote dermatology services improve accessibility, reduce travel requirements, and support timely medical care, especially for patients in remote or underserved areas.',
                'symptoms' => [
            ['value' => 'Skin rashes, itching, or redness'],
            ['value' => 'Acne, pigmentation, or cosmetic skin concerns'],
            ['value' => 'Hair loss or scalp conditions'],
            ['value' => 'Nail abnormalities or fungal infections'],
            ['value' => 'Chronic skin diseases requiring follow-up monitoring'],
        ],
                'causes' => [
            ['value' => 'Patients commonly seek tele-dermatology consultations for skin conditions such as acne, eczema, psoriasis, fungal infections, allergic skin reactions, pigmentation disorders, hair loss, scalp conditions, nail abnormalities, and chronic skin diseases requiring ongoing monitoring. Busy schedules, limited access to dermatology specialists, mobility limitations, geographic distance, and the need for quick medical advice also contribute to the increasing use of remote dermatologic care. Tele-dermatology is especially useful for follow-up visits, treatment adjustments, and early evaluation of non-emergency skin concerns.'],
        ],
                'condition_risks' => [
            ['value' => 'Limited physical examination compared to in-person visits'],
            ['value' => 'Difficulty assessing certain skin conditions remotely'],
            ['value' => 'Delayed diagnosis if symptoms are unclear or severe'],
            ['value' => 'Technical or connectivity issues during consultations'],
            ['value' => 'Need for in-person evaluation for complex procedures or emergencies'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment through tele-dermatology services may include online dermatologic evaluation, prescription of medications, skincare guidance, follow-up monitoring, and recommendations for further investigations or procedures when required. Dermatologists may advise topical or oral medications, lifestyle modifications, allergy management, scalp and hair care treatments, or preventive skincare plans based on the patient’s symptoms and uploaded images. Patients with chronic skin conditions may receive long-term remote follow-up care and treatment adjustments through virtual consultations. In cases where advanced procedures, biopsies, or emergency treatment are necessary, patients may be advised to schedule in-person dermatologic evaluation for comprehensive management.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Following prescribed medications and skincare instructions'],
            ['value' => 'Sharing follow-up photographs or symptom updates when required'],
            ['value' => 'Scheduling regular remote or in-person review appointments'],
            ['value' => 'Monitoring for worsening symptoms or treatment side effects'],
            ['value' => 'Maintaining communication with the dermatology care team'],
        ],
                'surgery_risks' => [
            ['value' => 'Limited physical examination compared to in-person visits'],
            ['value' => 'Difficulty assessing certain skin conditions remotely'],
            ['value' => 'Delayed diagnosis if symptoms are unclear or severe'],
            ['value' => 'Technical or connectivity issues during consultations'],
            ['value' => 'Need for in-person evaluation for complex procedures or emergencies'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment through tele-dermatology services may include online dermatologic evaluation, prescription of medications, skincare guidance, follow-up monitoring, and recommendations for further investigations or procedures when required. Dermatologists may advise topical or oral medications, lifestyle modifications, allergy management, scalp and hair care treatments, or preventive skincare plans based on the patient’s symptoms and uploaded images. Patients with chronic skin conditions may receive long-term remote follow-up care and treatment adjustments through virtual consultations. In cases where advanced procedures, biopsies, or emergency treatment are necessary, patients may be advised to schedule in-person dermatologic evaluation for comprehensive management.'],
        ],
                'long_term_outlook' => 'The long-term outlook for tele-dermatology services is highly positive as remote consultations improve access to specialized dermatologic care and support early medical intervention. Tele-dermatology helps maintain continuity of care, improves patient convenience, and supports long-term skin health through regular monitoring and specialist guidance.',
                'conclusion' => '',
                'seo_title' => 'Tele-Dermatology / Remote Consultation Services',
                'seo_description' => 'Tele-dermatology is a healthcare service that allows patients to consult dermatologists remotely using digital communication technologies such as video calls, mobile applications, or secure online platforms. It helps provide convenient access to dermatologic evaluation, follow-up care, treatment guidance, and skin health monitoring without the need for an in-person visit.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
