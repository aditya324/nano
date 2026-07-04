<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnticoagulationTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anticoagulation Therapy')],
            [
                'title' => 'Anticoagulation Therapy',
                'slug' => Str::slug('Anticoagulation Therapy'),
                'introduction' => 'Anticoagulation therapy involves the use of medications called anticoagulants to reduce the blood’s ability to form harmful clots. These medications help prevent the formation of new blood clots and reduce the risk of existing clots becoming larger or causing serious complications such as stroke, deep vein thrombosis (DVT), or pulmonary embolism (PE).',
                'what_is' => 'Anticoagulants, often referred to as blood thinners, do not actually thin the blood but instead slow down the clotting process. Anticoagulation therapy is commonly used in individuals with conditions such as atrial fibrillation, DVT, pulmonary embolism, heart valve disorders, or clotting abnormalities. Treatment may include oral anticoagulants or injectable medications, along with regular monitoring to ensure safe and effective clot prevention.',
                'symptoms' => [
            ['value' => 'History of blood clots or clotting disorders'],
            ['value' => 'Swelling or pain in the legs related to DVT'],
            ['value' => 'Irregular heartbeat or atrial fibrillation'],
            ['value' => 'Chest pain or breathing difficulty due to pulmonary embolism'],
            ['value' => 'Increased risk of stroke or vascular complications'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications or easy bruising'],
            ['value' => 'Skin necrosis associated with certain anticoagulants'],
            ['value' => 'Blue or purple toe syndrome due to circulation problems'],
            ['value' => 'Pregnancy-related complications including congenital abnormalities or miscarriage'],
            ['value' => 'Increased complications in patients with autoimmune conditions such as lupus'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood clotting and coagulation monitoring'],
            ['value' => 'Medication adherence and dosage adjustment when required'],
            ['value' => 'Monitoring for bleeding, bruising, or adverse reactions'],
            ['value' => 'Lifestyle counseling and injury prevention guidance'],
            ['value' => 'Long-term cardiovascular and hematology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications or easy bruising'],
            ['value' => 'Skin necrosis associated with certain anticoagulants'],
            ['value' => 'Blue or purple toe syndrome due to circulation problems'],
            ['value' => 'Pregnancy-related complications including congenital abnormalities or miscarriage'],
            ['value' => 'Increased complications in patients with autoimmune conditions such as lupus'],
        ],
                'long_term_outlook' => 'The long-term outlook with anticoagulation therapy is generally positive when medications are properly monitored and taken as prescribed. Effective anticoagulation can significantly reduce the risk of stroke, blood clots, and life-threatening vascular complications. Regular medical follow-up, laboratory monitoring, and preventive care are important for maintaining long-term cardiovascular and circulatory health.',
                'conclusion' => '',
                'seo_title' => 'Anticoagulation Therapy',
                'seo_description' => 'Anticoagulation therapy involves the use of medications called anticoagulants to reduce the blood’s ability to form harmful clots. These medications help prevent the formation of new blood clots and reduce the risk of existing clots becoming larger or causing serious complications such as stroke, deep vein thrombosis (DVT), or pulmonary embolism (PE).',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
