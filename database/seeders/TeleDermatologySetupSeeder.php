<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleDermatologySetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Dermatology Setup')],
            [
                'title' => 'Tele-Dermatology Setup',
                'slug' => Str::slug('Tele-Dermatology Setup'),
                'introduction' => 'A tele-dermatology setup consists of digital communication systems, imaging tools, and remote consultation technologies used to provide dermatologic care through virtual platforms. These setups help dermatologists evaluate skin conditions, monitor treatment progress, and offer medical guidance remotely, improving accessibility and continuity of care.',
                'what_is' => 'Tele-dermatology setups commonly include high-resolution cameras, secure video consultation platforms, medical imaging software, digital record systems, internet-connected devices, and remote monitoring tools. Patients can share photographs, medical history, and symptoms with dermatologists for assessment and follow-up care. Tele-dermatology is widely used for managing acne, eczema, psoriasis, pigmentation disorders, hair loss, nail conditions, and follow-up consultations.',
                'symptoms' => [
            ['value' => 'Skin rashes, itching, or redness'],
            ['value' => 'Acne, pigmentation, or cosmetic skin concerns'],
            ['value' => 'Hair loss or scalp disorders'],
            ['value' => 'Nail abnormalities or fungal infections'],
            ['value' => 'Chronic skin conditions requiring regular monitoring'],
        ],
                'causes' => [
            ['value' => 'Limited access to in-person dermatology services'],
            ['value' => 'Need for remote follow-up and treatment monitoring'],
            ['value' => 'Chronic skin diseases requiring long-term care'],
            ['value' => 'Increased demand for convenient healthcare access'],
            ['value' => 'Geographic or mobility-related healthcare limitations'],
        ],
                'condition_risks' => [
            ['value' => 'Limited physical examination compared to direct clinical visits'],
            ['value' => 'Variable image quality affecting diagnosis accuracy'],
            ['value' => 'Delayed diagnosis in complex or severe conditions'],
            ['value' => 'Technical or connectivity issues during consultations'],
            ['value' => 'Need for in-person procedures or emergency evaluation in certain cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-dermatology setups support virtual consultations, treatment planning, prescription management, follow-up care, and remote skin monitoring. Dermatologists may recommend medications, skincare routines, diagnostic testing, or referral for in-person procedures depending on the condition being evaluated. Tele-dermatology can also be integrated with digital imaging systems and electronic medical records for comprehensive patient care.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Sharing follow-up images or symptom updates remotely'],
            ['value' => 'Following prescribed skincare and medication instructions'],
            ['value' => 'Scheduling regular virtual or in-person review appointments'],
            ['value' => 'Monitoring for worsening symptoms or treatment side effects'],
            ['value' => 'Maintaining secure communication with the dermatology care team'],
        ],
                'surgery_risks' => [
            ['value' => 'Limited physical examination compared to direct clinical visits'],
            ['value' => 'Variable image quality affecting diagnosis accuracy'],
            ['value' => 'Delayed diagnosis in complex or severe conditions'],
            ['value' => 'Technical or connectivity issues during consultations'],
            ['value' => 'Need for in-person procedures or emergency evaluation in certain cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-dermatology setups support virtual consultations, treatment planning, prescription management, follow-up care, and remote skin monitoring. Dermatologists may recommend medications, skincare routines, diagnostic testing, or referral for in-person procedures depending on the condition being evaluated. Tele-dermatology can also be integrated with digital imaging systems and electronic medical records for comprehensive patient care.'],
        ],
                'long_term_outlook' => 'The long-term outlook with tele-dermatology services is highly positive because remote care improves access to specialized dermatologic evaluation and follow-up. Tele-dermatology supports timely diagnosis, continuity of care, patient convenience, and ongoing monitoring for chronic skin conditions. Proper integration of digital healthcare systems and regular specialist supervision help maintain long-term skin health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Tele-Dermatology Setup',
                'seo_description' => 'A tele-dermatology setup consists of digital communication systems, imaging tools, and remote consultation technologies used to provide dermatologic care through virtual platforms. These setups help dermatologists evaluate skin conditions, monitor treatment progress, and offer medical guidance remotely, improving accessibility and continuity of care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
