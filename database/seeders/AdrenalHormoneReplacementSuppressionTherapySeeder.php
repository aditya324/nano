<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdrenalHormoneReplacementSuppressionTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Adrenal Hormone Replacement / Suppression Therapy')],
            [
                'title' => 'Adrenal Hormone Replacement / Suppression Therapy',
                'slug' => Str::slug('Adrenal Hormone Replacement / Suppression Therapy'),
                'introduction' => 'Adrenal hormone replacement and suppression therapy are specialized endocrine treatment procedures used to manage disorders affecting adrenal gland hormone production. These therapies help restore hormonal balance in conditions involving adrenal hormone deficiency, such as Addison’s disease, or reduce excessive hormone production in disorders such as Cushing’s syndrome and adrenal tumors. Proper adrenal hormone management is essential for maintaining blood pressure, metabolism, stress response, electrolyte balance, and overall endocrine stability.',
                'what_is' => 'Adrenal hormone replacement therapy involves administering corticosteroids and other hormone supplements to replace deficient adrenal hormones and maintain normal body function. Suppression therapy is used to reduce excessive adrenal hormone production through medications that block hormone synthesis or control adrenal gland activity. Treatment is individualized based on hormone levels, underlying adrenal disorder, age, overall health, and metabolic requirements. Regular hormonal evaluation, blood pressure monitoring, electrolyte assessment, and endocrinology follow-up are essential to ensure effective long-term adrenal management and prevent complications.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Low blood pressure or dizziness'],
            ['value' => 'Weight changes or metabolic imbalance'],
            ['value' => 'Excessive sweating, high blood pressure, or abnormal cortisol-related symptoms'],
            ['value' => 'Muscle weakness, dehydration, or electrolyte disturbances'],
        ],
                'causes' => [
            ['value' => 'Addison’s disease or adrenal insufficiency'],
            ['value' => 'Cushing’s syndrome or excess cortisol production'],
            ['value' => 'Adrenal gland tumors or hyperplasia'],
            ['value' => 'Autoimmune or endocrine disorders affecting adrenal function'],
            ['value' => 'Hormonal imbalance following adrenal surgery or long-term steroid use'],
        ],
                'condition_risks' => [
            ['value' => 'Hormonal imbalance due to incorrect medication dosage'],
            ['value' => 'Adrenal crisis caused by insufficient hormone replacement'],
            ['value' => 'Weight gain, elevated blood sugar, or osteoporosis with prolonged steroid therapy'],
            ['value' => 'Increased infection risk or immune suppression'],
            ['value' => 'Electrolyte imbalance and cardiovascular complications if poorly controlled'],
            ['value' => 'Treatment Options'],
            ['value' => 'Adrenal hormone replacement and suppression therapy focus on restoring hormonal balance, controlling adrenal gland activity, relieving symptoms, and preventing long-term endocrine complications. Treatment may include corticosteroid replacement therapy, mineralocorticoid supplementation, hormone-blocking medications, blood pressure management, electrolyte correction, stress-dose steroid management, and regular hormonal monitoring. Patients may also benefit from nutritional counseling, stress management, lifestyle modification, medical alert education, endocrinology follow-up, and long-term metabolic monitoring to optimize adrenal function and overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of adrenal hormone and electrolyte levels'],
            ['value' => 'Adjustment of medication dosage based on clinical response and laboratory findings'],
            ['value' => 'Monitoring for steroid-related side effects or adrenal insufficiency symptoms'],
            ['value' => 'Education regarding stress-dose medication requirements during illness or surgery'],
            ['value' => 'Long-term endocrinology follow-up and metabolic health assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Hormonal imbalance due to incorrect medication dosage'],
            ['value' => 'Adrenal crisis caused by insufficient hormone replacement'],
            ['value' => 'Weight gain, elevated blood sugar, or osteoporosis with prolonged steroid therapy'],
            ['value' => 'Increased infection risk or immune suppression'],
            ['value' => 'Electrolyte imbalance and cardiovascular complications if poorly controlled'],
            ['value' => 'Treatment Options'],
            ['value' => 'Adrenal hormone replacement and suppression therapy focus on restoring hormonal balance, controlling adrenal gland activity, relieving symptoms, and preventing long-term endocrine complications. Treatment may include corticosteroid replacement therapy, mineralocorticoid supplementation, hormone-blocking medications, blood pressure management, electrolyte correction, stress-dose steroid management, and regular hormonal monitoring. Patients may also benefit from nutritional counseling, stress management, lifestyle modification, medical alert education, endocrinology follow-up, and long-term metabolic monitoring to optimize adrenal function and overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following adrenal hormone replacement or suppression therapy is generally positive with proper endocrine management and regular medical monitoring. Medication adherence, healthy lifestyle habits, stress management, nutritional support, hormonal evaluation, and continuous endocrinology follow-up significantly help maintain hormonal stability, prevent adrenal emergencies, reduce complications, preserve metabolic health, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Adrenal Hormone Replacement / Suppression Therapy',
                'seo_description' => 'Adrenal hormone replacement and suppression therapy are specialized endocrine treatment procedures used to manage disorders affecting adrenal gland hormone production. These therapies help restore hormonal balance in conditions involving adrenal hormone deficiency, such as Addison’s disease, or reduce excessive hormone production in disorders such as Cushing’s syndrome and adrenal tumors. Proper adrenal hormone management is essential for maintaining blood pressure, metabolism, stress response, electrolyte balance, and overall endocrine stability.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
