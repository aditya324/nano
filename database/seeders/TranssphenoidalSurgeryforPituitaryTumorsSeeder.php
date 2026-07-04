<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TranssphenoidalSurgeryforPituitaryTumorsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Transsphenoidal Surgery for Pituitary Tumors')],
            [
                'title' => 'Transsphenoidal Surgery for Pituitary Tumors',
                'slug' => Str::slug('Transsphenoidal Surgery for Pituitary Tumors'),
                'introduction' => 'Transsphenoidal surgery is a minimally invasive neurosurgical procedure used to remove pituitary tumors through the nasal passage without opening the skull. The surgery helps treat hormone-related disorders, vision problems, and pressure symptoms caused by pituitary tumors. It is commonly performed using endoscopic techniques.',
                'what_is' => 'The procedure includes: Endoscopic access through the nose Removal of pituitary tumor tissue Preservation of surrounding brain structures Hormonal function assessment Imaging-guided surgical planning Conditions treated include: Pituitary adenomas Hormone-secreting tumors Non-functioning pituitary masses Tumors compressing the optic nerves Patients often require endocrinology support for hormone monitoring before and after surgery.',
                'symptoms' => [
            ['value' => 'Vision problems'],
            ['value' => 'Hormonal imbalance'],
            ['value' => 'Headaches'],
            ['value' => 'Menstrual irregularities'],
            ['value' => 'Fatigue or weakness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'CSF leakage'],
            ['value' => 'Hormonal disturbances'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Need for repeat surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend endocrinology and neurosurgery follow-up visits'],
            ['value' => 'Monitor hormone levels regularly'],
            ['value' => 'Avoid nose blowing or heavy strain temporarily'],
            ['value' => 'Report excessive thirst or fluid leakage immediately'],
            ['value' => 'Continue medications as advised'],
        ],
                'surgery_risks' => [
            ['value' => 'CSF leakage'],
            ['value' => 'Hormonal disturbances'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Need for repeat surgery'],
        ],
                'long_term_outlook' => 'Transsphenoidal surgery effectively controls many pituitary tumors and hormone disorders. Long-term monitoring helps maintain hormonal balance and neurological stability.',
                'conclusion' => '',
                'seo_title' => 'Transsphenoidal Surgery for Pituitary Tumors',
                'seo_description' => 'Transsphenoidal surgery is a minimally invasive neurosurgical procedure used to remove pituitary tumors through the nasal passage without opening the skull. The surgery helps treat hormone-related disorders, vision problems, and pressure symptoms caused by pituitary tumors. It is commonly performed using endoscopic techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
