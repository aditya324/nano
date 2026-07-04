<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofPituitaryDisordersMedicalSurgicalRadiationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Pituitary Disorders (Medical / Surgical / Radiation)')],
            [
                'title' => 'Management of Pituitary Disorders (Medical / Surgical / Radiation)',
                'slug' => Str::slug('Management of Pituitary Disorders (Medical / Surgical / Radiation)'),
                'introduction' => 'Management of pituitary disorders involves specialized medical, surgical, and radiation treatment procedures used to diagnose, control, and treat abnormalities affecting the pituitary gland. The pituitary gland regulates multiple hormones responsible for growth, metabolism, reproduction, stress response, and overall endocrine function. Conditions such as pituitary adenomas, hormone-secreting tumors, hypopituitarism, and acromegaly may require multidisciplinary treatment to restore hormonal balance, relieve symptoms, and prevent long-term complications.',
                'what_is' => 'Pituitary disorder management may include medications to control hormone production or replace deficient hormones, minimally invasive pituitary surgery to remove tumors, and radiation therapy to treat residual or recurrent pituitary abnormalities. Treatment is individualized based on tumor size, hormone activity, symptoms, and overall patient health. Surgical procedures are commonly performed using endoscopic transsphenoidal techniques through the nasal cavity to access the pituitary gland with minimal invasiveness. Radiation therapy may be used when tumors cannot be completely removed or when hormonal overactivity persists after surgery. Long-term endocrine monitoring and imaging follow-up are essential components of ongoing care.',
                'symptoms' => [
            ['value' => 'Persistent headaches or visual disturbances'],
            ['value' => 'Hormonal imbalance causing fatigue, weight changes, or growth abnormalities'],
            ['value' => 'Irregular menstrual cycles, infertility, or sexual dysfunction'],
            ['value' => 'Enlarged hands, feet, or facial features in acromegaly'],
            ['value' => 'Weakness, low blood pressure, or metabolic instability due to hormone deficiency'],
        ],
                'causes' => [
            ['value' => 'Pituitary adenomas or hormone-secreting tumors'],
            ['value' => 'Hormonal imbalance affecting growth or metabolism'],
            ['value' => 'Hypopituitarism or reduced pituitary hormone production'],
            ['value' => 'Genetic or endocrine disorders affecting pituitary function'],
            ['value' => 'Tumor recurrence or structural abnormalities of the pituitary gland'],
        ],
                'condition_risks' => [
            ['value' => 'Hormonal imbalance requiring lifelong replacement therapy'],
            ['value' => 'Vision problems caused by pressure on nearby optic nerves'],
            ['value' => 'Bleeding, infection, or cerebrospinal fluid leakage after surgery'],
            ['value' => 'Tumor recurrence or incomplete hormonal control'],
            ['value' => 'Radiation-related hormonal deficiency or surrounding tissue effects'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of pituitary disorders focuses on restoring hormonal balance, controlling tumor growth, relieving neurological symptoms, and improving long-term endocrine stability. Treatment may include hormone replacement therapy, dopamine agonists, growth hormone suppression therapy, corticosteroid replacement, pituitary surgery, stereotactic radiation therapy, and regular hormonal monitoring. Patients may also benefit from nutritional counseling, fertility support, psychological counseling, imaging studies, endocrinology follow-up, and multidisciplinary care involving neurosurgeons, radiation specialists, and endocrine experts to optimize treatment outcomes and overall health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of pituitary hormone levels and endocrine function'],
            ['value' => 'Follow-up MRI imaging to assess tumor control or recurrence'],
            ['value' => 'Observation for vision changes, neurological symptoms, or surgical complications'],
            ['value' => 'Hormone replacement therapy adjustment when required'],
            ['value' => 'Long-term endocrinology and neurosurgical follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Hormonal imbalance requiring lifelong replacement therapy'],
            ['value' => 'Vision problems caused by pressure on nearby optic nerves'],
            ['value' => 'Bleeding, infection, or cerebrospinal fluid leakage after surgery'],
            ['value' => 'Tumor recurrence or incomplete hormonal control'],
            ['value' => 'Radiation-related hormonal deficiency or surrounding tissue effects'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of pituitary disorders focuses on restoring hormonal balance, controlling tumor growth, relieving neurological symptoms, and improving long-term endocrine stability. Treatment may include hormone replacement therapy, dopamine agonists, growth hormone suppression therapy, corticosteroid replacement, pituitary surgery, stereotactic radiation therapy, and regular hormonal monitoring. Patients may also benefit from nutritional counseling, fertility support, psychological counseling, imaging studies, endocrinology follow-up, and multidisciplinary care involving neurosurgeons, radiation specialists, and endocrine experts to optimize treatment outcomes and overall health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following management of pituitary disorders is generally positive with early diagnosis, appropriate treatment, and continuous endocrine care. Regular hormonal monitoring, medication adherence, healthy lifestyle habits, stress management, imaging surveillance, and long-term medical follow-up significantly help maintain hormonal stability, reduce complications, preserve neurological and metabolic function, improve symptom control, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Management of Pituitary Disorders (Medical / Surgical / Radiation)',
                'seo_description' => 'Management of pituitary disorders involves specialized medical, surgical, and radiation treatment procedures used to diagnose, control, and treat abnormalities affecting the pituitary gland. The pituitary gland regulates multiple hormones responsible for growth, metabolism, reproduction, stress response, and overall endocrine function. Conditions such as pituitary adenomas, hormone-secreting tumors, hypopituitarism, and acromegaly may require multidisciplinary treatment to restore hormonal balance, relieve symptoms, and prevent long-term complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
