<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CTAngiographyMRAngiographyVascularImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('CT Angiography / MR Angiography (Vascular Imaging)')],
            [
                'name' => 'CT Angiography / MR Angiography (Vascular Imaging)',
                'slug' => Str::slug('CT Angiography / MR Angiography (Vascular Imaging)'),
                'h1' => 'CT Angiography / MR Angiography (Vascular Imaging)',
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
            ['value' => 'Narrowing or blockage of blood vessels'],
            ['value' => 'Blood clot formation within arteries or veins'],
            ['value' => 'Aneurysms or weakening of vessel walls'],
            ['value' => 'Peripheral vascular or cerebrovascular disease'],
            ['value' => 'High blood pressure, diabetes, smoking, or high cholesterol'],
        ],
                'risks' => [
            ['value' => 'Exposure to radiation during CT angiography'],
            ['value' => 'Allergic reactions to contrast material in some individuals'],
            ['value' => 'Rare kidney-related complications from contrast use'],
            ['value' => 'Claustrophobia or discomfort during MR angiography'],
            ['value' => 'Delayed diagnosis of severe vascular disease if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CT angiography and MR angiography vascular imaging evaluation'],
            ['value' => 'Monitoring blood vessel abnormalities and circulation disorders'],
            ['value' => 'Medications for blood pressure, cholesterol, or clot management'],
            ['value' => 'Minimally invasive vascular procedures and stent placement'],
            ['value' => 'Surgical planning and long-term vascular follow-up care'],
        ],
                'recovery' => 'The long-term outlook with CT angiography and MR angiography is highly positive because these advanced imaging techniques support early detection, accurate diagnosis, and effective management of vascular diseases. Timely vascular evaluation, healthy lifestyle practices, medication adherence, and regular medical follow-up are important for maintaining long-term circulation and cardiovascular health.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'CT Angiography / MR Angiography (Vascular Imaging)',
                'meta_description' => 'CT Angiography (CTA) and MR Angiography (MRA) are advanced vascular imaging procedures used to visualize blood vessels, evaluate blood flow, and detect abnormal',
                'meta_keywords' => '',
            ]
        );
    }
}
