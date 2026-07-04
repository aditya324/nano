<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DopplerUltrasoundPeripheralCarotidVesselsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Doppler Ultrasound (Peripheral & Carotid Vessels)')],
            [
                'name' => 'Doppler Ultrasound (Peripheral & Carotid Vessels)',
                'slug' => Str::slug('Doppler Ultrasound (Peripheral & Carotid Vessels)'),
                'h1' => 'Doppler Ultrasound (Peripheral & Carotid Vessels)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Doppler ultrasound is a specialized imaging procedure that uses sound waves to evaluate blood flow through arteries and veins. It helps healthcare professionals assess circulation, detect blood clots, identify blockages, and diagnose vascular disorders affecting peripheral and carotid blood vessels.',
                'about_more' => '',
                'overview' => 'Peripheral Doppler ultrasound is commonly used to assess blood flow in the arms and legs, while carotid Doppler ultrasound evaluates the carotid arteries that supply blood to the brain. This noninvasive and radiation-free procedure helps diagnose conditions such as peripheral vascular disease, arterial narrowing, thrombosis, carotid artery stenosis, and circulation-related complications. Doppler ultrasound provides real-time imaging of blood flow patterns and vascular function.',
                'symptoms' => [
            ['value' => 'Leg pain, swelling, or cramping'],
            ['value' => 'Numbness or coldness in the limbs'],
            ['value' => 'Dizziness, fainting, or stroke-like symptoms'],
            ['value' => 'Weak pulse or circulation problems'],
            ['value' => 'Skin discoloration or non-healing wounds'],
        ],
                'causes' => [
            ['value' => 'Narrowing or blockage of blood vessels'],
            ['value' => 'Blood clot formation within arteries or veins'],
            ['value' => 'Peripheral vascular disease or carotid artery disease'],
            ['value' => 'High blood pressure, diabetes, or high cholesterol'],
            ['value' => 'Smoking, poor circulation, or vascular inflammation'],
        ],
                'risks' => [
            ['value' => 'Reduced blood flow to organs or limbs'],
            ['value' => 'Increased risk of stroke or transient ischemic attack'],
            ['value' => 'Chronic circulation problems and tissue damage'],
            ['value' => 'Blood clot migration causing serious vascular complications'],
            ['value' => 'Delayed diagnosis of severe vascular disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Doppler ultrasound evaluation of peripheral and carotid vessels'],
            ['value' => 'Vascular imaging and circulation assessment'],
            ['value' => 'Blood-thinning medications or vascular management therapies'],
            ['value' => 'Lifestyle modification and cardiovascular risk management'],
            ['value' => 'Surgical or minimally invasive vascular procedures when required'],
        ],
                'recovery' => 'The long-term outlook with Doppler ultrasound evaluation is generally very positive because early detection of vascular abnormalities helps prevent serious complications such as stroke, blood clots, and circulation problems. Regular vascular monitoring, healthy lifestyle habits, medication adherence, and timely medical care are important for maintaining long-term vascular and cardiovascular health.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Doppler Ultrasound (Peripheral & Carotid Vessels)',
                'meta_description' => 'Doppler ultrasound is a specialized imaging procedure that uses sound waves to evaluate blood flow through arteries and veins. It helps healthcare professionals',
                'meta_keywords' => '',
            ]
        );
    }
}
