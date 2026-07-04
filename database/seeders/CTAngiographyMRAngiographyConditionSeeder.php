<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CTAngiographyMRAngiographyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('CT Angiography / MR Angiography')],
            [
                'name' => 'CT Angiography / MR Angiography',
                'slug' => Str::slug('CT Angiography / MR Angiography'),
                'h1' => 'CT Angiography / MR Angiography',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'CT Angiography (CTA) and MR Angiography (MRA) are advanced vascular imaging procedures used to visualize blood vessels, evaluate blood flow, and detect abnormalities affecting arteries and veins throughout the body. These imaging techniques help diagnose vascular diseases, blockages, aneurysms, and circulation-related conditions with high accuracy.',
                'about_more' => '',
                'overview' => 'CT angiography uses X-rays and contrast material to create detailed images of blood vessels, while MR angiography uses magnetic fields and radio waves to evaluate vascular structures without ionizing radiation. These procedures are commonly performed to assess blood vessels in the brain, neck, heart, lungs, abdomen, and limbs. CTA and MRA are widely used for diagnosing aneurysms, arterial narrowing, thrombosis, vascular malformations, and peripheral vascular disease.',
                'symptoms' => [
            ['value' => 'Chest pain or circulation problems'],
            ['value' => 'Dizziness, stroke-like symptoms, or severe headaches'],
            ['value' => 'Leg pain, swelling, or reduced blood flow'],
            ['value' => 'Shortness of breath or vascular-related symptoms'],
            ['value' => 'Weak pulse, numbness, or unexplained vascular abnormalities'],
        ],
                'causes' => [
            ['value' => 'Detection of aneurysms and blood vessel abnormalities'],
            ['value' => 'Evaluation of arterial narrowing or vascular blockages'],
            ['value' => 'Assessment of thrombosis and circulation disorders'],
            ['value' => 'Imaging of carotid, coronary, peripheral, or cerebral vessels'],
            ['value' => 'Surgical planning and vascular treatment monitoring'],
        ],
                'risks' => [
            ['value' => 'Exposure to radiation during CT angiography'],
            ['value' => 'Allergic reactions to contrast material in some individuals'],
            ['value' => 'Rare kidney-related complications from contrast use'],
            ['value' => 'Claustrophobia or discomfort during MR angiography'],
            ['value' => 'Restrictions for patients with certain metal implants during MRI-based studies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CT angiography and MR angiography support accurate vascular diagnosis, treatment planning, surgical evaluation, and long-term monitoring of vascular disorders. These procedures are commonly used in cardiology, neurology, vascular surgery, and emergency medicine to guide minimally invasive procedures, stenting, surgical repair, and medical management.'],
            ['value' => 'Hydration may be advised after contrast-based imaging studies'],
            ['value' => 'Patients should monitor for allergic reactions or unusual symptoms'],
            ['value' => 'Most individuals can resume normal activities shortly after the procedure'],
            ['value' => 'Follow-up imaging or specialist consultation may be recommended'],
            ['value' => 'Regular vascular monitoring may be required for chronic conditions'],
        ],
                'recovery' => 'The long-term outlook with CT angiography and MR angiography is highly positive because these advanced imaging techniques support early detection, accurate diagnosis, and effective management of vascular diseases. Timely vascular evaluation, appropriate medical care, and regular follow-up are important for maintaining long-term circulation and cardiovascular health. __________________________ 9. Fluoroscopy / Contrast Studies (Barium Swallow, IVU) Fluoroscopy / Contrast Studies (Barium Swallow & IVU) Procedures',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'CT Angiography / MR Angiography',
                'meta_description' => 'CT Angiography (CTA) and MR Angiography (MRA) are advanced vascular imaging procedures used to visualize blood vessels, evaluate blood flow, and detect abnormal',
                'meta_keywords' => '',
            ]
        );
    }
}
