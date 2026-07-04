<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MRIBrainSpineSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('MRI Brain / Spine')],
            [
                'title' => 'MRI Brain / Spine',
                'slug' => Str::slug('MRI Brain / Spine'),
                'introduction' => 'MRI Brain and Spine is an advanced imaging procedure that uses powerful magnetic fields and radio waves to create detailed images of the brain, spinal cord, nerves, discs, blood vessels, and surrounding soft tissues. The procedure helps healthcare professionals diagnose neurological, spinal, and musculoskeletal conditions without exposing patients to ionizing radiation.',
                'what_is' => 'MRI Brain and Spine scans are commonly performed in neurology, neurosurgery, orthopedics, and emergency care settings to evaluate disorders affecting the brain, spinal cord, and nervous system. During the procedure, the patient lies inside a specialized MRI scanner while high-resolution images are captured from multiple angles. In certain cases, contrast dye may be administered to improve visualization of blood vessels, tumors, inflammation, or abnormal tissues. MRI imaging provides highly detailed soft tissue assessment, supporting accurate diagnosis, treatment planning, surgical evaluation, and long-term neurological care.',
                'symptoms' => [
            ['value' => 'Persistent headaches, dizziness, or seizures'],
            ['value' => 'Back pain, neck pain, or spinal discomfort'],
            ['value' => 'Numbness, weakness, or tingling sensations'],
            ['value' => 'Difficulty with balance, movement, or coordination'],
            ['value' => 'Suspected neurological or spinal disorders affecting daily function'],
        ],
                'causes' => [
            ['value' => 'Brain tumors, stroke, or neurological abnormalities'],
            ['value' => 'Spinal disc problems or nerve compression conditions'],
            ['value' => 'Brain or spinal cord injuries'],
            ['value' => 'Multiple sclerosis or inflammatory neurological disorders'],
            ['value' => 'Chronic neurological symptoms requiring advanced imaging evaluation'],
        ],
                'condition_risks' => [
            ['value' => 'Claustrophobia or discomfort inside the MRI scanner'],
            ['value' => 'Rare allergic reactions to contrast dye if contrast is used'],
            ['value' => 'Difficulty performing MRI in patients with certain metal implants or devices'],
            ['value' => 'Temporary discomfort from prolonged lying during the procedure'],
            ['value' => 'Need for additional imaging or neurological evaluation in complex cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'MRI Brain and Spine imaging helps physicians accurately diagnose neurological and spinal conditions to guide individualized treatment planning. Based on the findings, treatment may include medications, neurological rehabilitation, physiotherapy, spinal care, pain management, minimally invasive procedures, surgery, lifestyle modification, and long-term neurological follow-up. MRI findings also assist specialists in monitoring disease progression, evaluating treatment response, and planning postoperative rehabilitation or advanced neurological interventions.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring for discomfort or contrast-related reactions if contrast dye is used'],
            ['value' => 'Follow-up consultation to review MRI findings'],
            ['value' => 'Additional neurological or spinal evaluation if abnormalities are detected'],
            ['value' => 'Medications, therapy, or rehabilitation planning when required'],
            ['value' => 'Continued medical monitoring and follow-up care based on diagnosis'],
        ],
                'surgery_risks' => [
            ['value' => 'Claustrophobia or discomfort inside the MRI scanner'],
            ['value' => 'Rare allergic reactions to contrast dye if contrast is used'],
            ['value' => 'Difficulty performing MRI in patients with certain metal implants or devices'],
            ['value' => 'Temporary discomfort from prolonged lying during the procedure'],
            ['value' => 'Need for additional imaging or neurological evaluation in complex cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'MRI Brain and Spine imaging helps physicians accurately diagnose neurological and spinal conditions to guide individualized treatment planning. Based on the findings, treatment may include medications, neurological rehabilitation, physiotherapy, spinal care, pain management, minimally invasive procedures, surgery, lifestyle modification, and long-term neurological follow-up. MRI findings also assist specialists in monitoring disease progression, evaluating treatment response, and planning postoperative rehabilitation or advanced neurological interventions.'],
        ],
                'long_term_outlook' => 'The long-term outlook following MRI Brain and Spine evaluation depends on the underlying condition identified during imaging and the effectiveness of treatment. Early and accurate diagnosis through MRI supports timely medical intervention, treatment planning, rehabilitation, and long-term neurological or spinal care. Proper follow-up and management can significantly improve recovery, symptom control, neurological function, mobility, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'MRI Brain / Spine',
                'seo_description' => 'MRI Brain and Spine is an advanced imaging procedure that uses powerful magnetic fields and radio waves to create detailed images of the brain, spinal cord, nerves, discs, blood vessels, and surrounding soft tissues. The procedure helps healthcare professionals diagnose neurological, spinal, and musculoskeletal conditions without exposing patients to ionizing radiation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
