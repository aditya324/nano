<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofDKAHHSSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of DKA / HHS')],
            [
                'title' => 'Management of DKA / HHS',
                'slug' => Str::slug('Management of DKA / HHS'),
                'introduction' => 'Management of Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) involves emergency medical procedures used to stabilize dangerously high blood sugar levels, correct severe dehydration, restore electrolyte balance, and prevent life-threatening complications. DKA commonly occurs in Type 1 diabetes with ketone buildup and metabolic acidosis, while HHS is more frequently seen in Type 2 diabetes with severe hyperglycemia and dehydration. Both conditions require urgent intensive medical care and continuous monitoring.',
                'what_is' => 'DKA and HHS management is performed in emergency departments, intensive care units, and critical care settings under close medical supervision. Treatment focuses on rapid fluid replacement, intravenous insulin therapy, electrolyte correction, blood sugar stabilization, and identification of the underlying trigger such as infection, missed insulin doses, or severe illness. Continuous monitoring of blood glucose, electrolytes, kidney function, heart rhythm, and acid-base balance is essential during treatment. Early intervention significantly reduces complications and improves recovery outcomes in diabetic emergencies.',
                'symptoms' => [
            ['value' => 'Excessive thirst and frequent urination'],
            ['value' => 'Severe dehydration and extreme weakness'],
            ['value' => 'Nausea, vomiting, or abdominal pain'],
            ['value' => 'Rapid breathing, confusion, or altered consciousness'],
            ['value' => 'Fruity-smelling breath in DKA or severe drowsiness in HHS'],
        ],
                'causes' => [
            ['value' => 'Missed insulin doses or poor diabetes control'],
            ['value' => 'Severe infection or sepsis'],
            ['value' => 'Newly diagnosed or untreated diabetes mellitus'],
            ['value' => 'Physical or emotional stress, surgery, or trauma'],
            ['value' => 'Certain medications or severe medical illness'],
        ],
                'condition_risks' => [
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Diabetic coma or loss of consciousness'],
            ['value' => 'Kidney dysfunction or circulatory collapse'],
            ['value' => 'Brain swelling or neurological complications in severe cases'],
            ['value' => 'Increased risk of organ failure if treatment is delayed'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of DKA and HHS focuses on restoring metabolic stability, correcting dehydration, lowering blood sugar safely, and preventing complications. Treatment may include intravenous fluids, insulin infusion therapy, electrolyte replacement, oxygen support, cardiac monitoring, infection management, nutritional support, and intensive care observation. Patients may also require diabetes education, insulin adjustment, continuous glucose monitoring, lifestyle counseling, and endocrinology follow-up to prevent recurrence and improve long-term diabetes control.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of blood sugar and electrolyte levels'],
            ['value' => 'Gradual transition from intravenous insulin to routine diabetes therapy'],
            ['value' => 'Monitoring for recurrence of dehydration or metabolic imbalance'],
            ['value' => 'Nutritional counseling and diabetes self-management education'],
            ['value' => 'Long-term endocrinology follow-up and medication adjustment when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Diabetic coma or loss of consciousness'],
            ['value' => 'Kidney dysfunction or circulatory collapse'],
            ['value' => 'Brain swelling or neurological complications in severe cases'],
            ['value' => 'Increased risk of organ failure if treatment is delayed'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of DKA and HHS focuses on restoring metabolic stability, correcting dehydration, lowering blood sugar safely, and preventing complications. Treatment may include intravenous fluids, insulin infusion therapy, electrolyte replacement, oxygen support, cardiac monitoring, infection management, nutritional support, and intensive care observation. Patients may also require diabetes education, insulin adjustment, continuous glucose monitoring, lifestyle counseling, and endocrinology follow-up to prevent recurrence and improve long-term diabetes control.'],
        ],
                'long_term_outlook' => 'The long-term outlook following management of DKA and HHS is generally positive with prompt treatment and proper diabetes care. Regular blood sugar monitoring, medication adherence, insulin management, healthy nutrition, hydration, stress management, diabetes education, and continuous medical follow-up significantly help prevent recurrence, reduce complications, maintain metabolic stability, preserve organ function, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Management of DKA / HHS',
                'seo_description' => 'Management of Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) involves emergency medical procedures used to stabilize dangerously high blood sugar levels, correct severe dehydration, restore electrolyte balance, and prevent life-threatening complications. DKA commonly occurs in Type 1 diabetes with ketone buildup and metabolic acidosis, while HHS is more frequently seen in Type 2 diabetes with severe hyperglycemia and dehydration. Both conditions require urgent intensive medical care and continuous monitoring.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
