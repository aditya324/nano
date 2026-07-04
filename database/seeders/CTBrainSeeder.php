<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CTBrainSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('CT Brain')],
            [
                'title' => 'CT Brain',
                'slug' => Str::slug('CT Brain'),
                'introduction' => 'A CT Brain scan, also known as a Computed Tomography scan of the brain, is an advanced imaging procedure used to create detailed cross-sectional images of the brain, skull, blood vessels, and surrounding structures. The procedure uses X-rays and computer technology to help healthcare professionals detect injuries, bleeding, tumors, stroke, infections, fractures, and other abnormalities affecting the brain.',
                'what_is' => 'CT Brain scans are commonly performed in emergency departments, neurology units, trauma centers, and diagnostic imaging facilities for rapid evaluation of neurological and head-related conditions. During the procedure, the patient lies on a movable scanning table while the CT scanner captures multiple images of the brain from different angles. In certain cases, contrast dye may be administered to improve visualization of blood vessels, tumors, or inflammatory conditions. CT imaging provides fast and accurate assessment of brain abnormalities and plays a critical role in emergency diagnosis and treatment planning.',
                'symptoms' => [
            ['value' => 'Severe headache or sudden neurological symptoms'],
            ['value' => 'Loss of consciousness or fainting episodes'],
            ['value' => 'Weakness, numbness, or difficulty speaking'],
            ['value' => 'Head injury or suspected brain trauma'],
            ['value' => 'Seizures, confusion, or sudden behavioral changes'],
        ],
                'causes' => [
            ['value' => 'Stroke or bleeding within the brain'],
            ['value' => 'Brain injury or head trauma'],
            ['value' => 'Brain tumors or neurological abnormalities'],
            ['value' => 'Infections affecting the brain or surrounding tissues'],
            ['value' => 'Conditions causing sudden changes in brain function'],
        ],
                'condition_risks' => [
            ['value' => 'Exposure to a small amount of ionizing radiation'],
            ['value' => 'Rare allergic reactions to contrast dye if contrast is used'],
            ['value' => 'Temporary discomfort during contrast injection'],
            ['value' => 'Limited soft tissue detail compared to MRI in certain conditions'],
            ['value' => 'Need for additional imaging or neurological evaluation in complex cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'CT Brain imaging helps physicians rapidly diagnose neurological conditions and guide individualized treatment planning. Depending on the findings, treatment may include emergency stroke management, medications, neurosurgical intervention, trauma care, neurological rehabilitation, seizure management, infection treatment, physiotherapy, or long-term neurological follow-up. CT imaging also assists healthcare professionals in monitoring disease progression, evaluating treatment response, and planning further neurological or surgical care when required.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring for dizziness or discomfort after contrast use if applicable'],
            ['value' => 'Follow-up consultation to review CT scan findings'],
            ['value' => 'Additional neurological evaluation or treatment planning when required'],
            ['value' => 'Hydration and routine care after the imaging procedure'],
            ['value' => 'Continued medical monitoring based on diagnosis and symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Exposure to a small amount of ionizing radiation'],
            ['value' => 'Rare allergic reactions to contrast dye if contrast is used'],
            ['value' => 'Temporary discomfort during contrast injection'],
            ['value' => 'Limited soft tissue detail compared to MRI in certain conditions'],
            ['value' => 'Need for additional imaging or neurological evaluation in complex cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'CT Brain imaging helps physicians rapidly diagnose neurological conditions and guide individualized treatment planning. Depending on the findings, treatment may include emergency stroke management, medications, neurosurgical intervention, trauma care, neurological rehabilitation, seizure management, infection treatment, physiotherapy, or long-term neurological follow-up. CT imaging also assists healthcare professionals in monitoring disease progression, evaluating treatment response, and planning further neurological or surgical care when required.'],
        ],
                'long_term_outlook' => 'The long-term outlook following a CT Brain scan depends on the underlying neurological condition identified during imaging and the effectiveness of treatment. Early diagnosis through CT imaging supports timely medical intervention, emergency care, rehabilitation planning, and ongoing neurological management. Proper follow-up and treatment can significantly improve recovery outcomes, symptom control, neurological function, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'CT Brain',
                'seo_description' => 'A CT Brain scan, also known as a Computed Tomography scan of the brain, is an advanced imaging procedure used to create detailed cross-sectional images of the brain, skull, blood vessels, and surrounding structures. The procedure uses X-rays and computer technology to help healthcare professionals detect injuries, bleeding, tumors, stroke, infections, fractures, and other abnormalities affecting the brain.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
