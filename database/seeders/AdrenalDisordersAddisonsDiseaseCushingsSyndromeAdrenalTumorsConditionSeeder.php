<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdrenalDisordersAddisonsDiseaseCushingsSyndromeAdrenalTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors)')],
            [
                'name' => 'Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors)',
                'slug' => Str::slug('Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors)'),
                'h1' => 'Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Adrenal disorders are medical conditions affecting the adrenal glands, which are small hormone-producing glands located above the kidneys. These glands regulate essential body functions including metabolism, blood pressure, stress response, immune function, and electrolyte balance. Addison’s disease occurs when the adrenal glands produce insufficient hormones, Cushing’s syndrome results from excessive cortisol production, and adrenal tumors may cause abnormal hormone secretion or gland enlargement. Proper diagnosis and endocrine management are essential to prevent serious hormonal and metabolic complications.',
                'about_more' => '',
                'overview' => 'Adrenal disorders are medical conditions affecting the adrenal glands, which are small hormone-producing glands located above the kidneys. These glands regulate essential body functions including metabolism, blood pressure, stress response, immune function, and electrolyte balance. Addison’s disease occurs when the adrenal glands produce insufficient hormones, Cushing’s syndrome results from excessive cortisol production, and adrenal tumors may cause abnormal hormone secretion or gland enlargement. Proper diagnosis and endocrine management are essential to prevent serious hormonal and metabolic complications.',
                'symptoms' => [
            ['value' => 'Fatigue, muscle weakness, or reduced energy levels'],
            ['value' => 'Unexplained weight changes or metabolic imbalance'],
            ['value' => 'High or low blood pressure with dizziness or palpitations'],
            ['value' => 'Abdominal discomfort, nausea, or appetite changes'],
            ['value' => 'Mood changes, anxiety, sleep disturbances, or skin changes'],
        ],
                'causes' => [
            ['value' => 'Autoimmune destruction of adrenal glands in Addison’s disease'],
            ['value' => 'Long-term steroid medication use causing Cushing’s syndrome'],
            ['value' => 'Benign or malignant adrenal gland tumors'],
            ['value' => 'Genetic or inherited endocrine disorders'],
            ['value' => 'Infections, pituitary gland disorders, or hormonal abnormalities affecting adrenal function'],
        ],
                'risks' => [
            ['value' => 'Adrenal crisis causing severe low blood pressure and shock'],
            ['value' => 'Diabetes, osteoporosis, or cardiovascular complications in Cushing’s syndrome'],
            ['value' => 'Severe electrolyte imbalance affecting heart and nerve function'],
            ['value' => 'Hormonal instability impacting multiple organ systems'],
            ['value' => 'Tumor growth or spread in malignant adrenal conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for adrenal disorders focuses on restoring hormonal balance, controlling symptoms, preventing complications, and managing underlying adrenal gland disease. Management may include hormone replacement therapy, corticosteroid regulation, medications to control hormone production, blood pressure management, electrolyte correction, and surgical removal of adrenal tumors when required. Patients may also benefit from nutritional counseling, stress management, regular hormonal evaluation, imaging studies, endocrinology follow-up, and long-term metabolic monitoring to optimize recovery and overall endocrine health.'],
        ],
                'recovery' => 'The long-term outlook for adrenal disorders depends on the underlying condition, severity of hormonal imbalance, response to treatment, and overall patient health. Early diagnosis, medication adherence, healthy lifestyle habits, regular hormonal monitoring, stress management, nutritional support, and continuous endocrinology follow-up significantly help maintain hormonal stability, reduce complications, improve metabolic function, and enhance overall quality of life. _______________ 11. Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas) Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas)',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Adrenal Disorders (Addison’s Disease, Cushing’s Syndrome, Adrenal Tumors)',
                'meta_description' => 'Adrenal disorders are medical conditions affecting the adrenal glands, which are small hormone-producing glands located above the kidneys. These glands regulate',
                'meta_keywords' => '',
            ]
        );
    }
}
