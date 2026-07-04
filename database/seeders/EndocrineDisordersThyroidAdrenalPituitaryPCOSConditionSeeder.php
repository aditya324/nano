<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndocrineDisordersThyroidAdrenalPituitaryPCOSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)')],
            [
                'name' => 'Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)',
                'slug' => Str::slug('Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)'),
                'h1' => 'Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Endocrine disorders are medical conditions affecting the hormone-producing glands of the body, including the thyroid, adrenal glands, pituitary gland, and reproductive endocrine system. These disorders can disrupt metabolism, growth, energy balance, blood pressure regulation, reproductive health, and overall body function. Conditions such as thyroid disorders, adrenal gland abnormalities, pituitary diseases, and Polycystic Ovary Syndrome (PCOS) may range from mild hormonal imbalance to severe chronic illness requiring long-term endocrine management. Early diagnosis and proper treatment are essential to maintain hormonal stability and prevent complications.',
                'about_more' => '',
                'overview' => 'Endocrine disorders are medical conditions affecting the hormone-producing glands of the body, including the thyroid, adrenal glands, pituitary gland, and reproductive endocrine system. These disorders can disrupt metabolism, growth, energy balance, blood pressure regulation, reproductive health, and overall body function. Conditions such as thyroid disorders, adrenal gland abnormalities, pituitary diseases, and Polycystic Ovary Syndrome (PCOS) may range from mild hormonal imbalance to severe chronic illness requiring long-term endocrine management. Early diagnosis and proper treatment are essential to maintain hormonal stability and prevent complications.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Weight gain, weight loss, or metabolic imbalance'],
            ['value' => 'Irregular menstrual cycles or fertility-related concerns'],
            ['value' => 'Hair loss, excessive hair growth, or skin changes'],
            ['value' => 'Mood changes, sleep disturbances, or blood pressure fluctuations'],
        ],
                'causes' => [
            ['value' => 'Hormonal imbalance due to gland dysfunction'],
            ['value' => 'Autoimmune diseases affecting endocrine glands'],
            ['value' => 'Genetic predisposition or inherited endocrine disorders'],
            ['value' => 'Obesity, insulin resistance, or metabolic syndrome'],
            ['value' => 'Stress, infections, medications, or tumors affecting hormone production'],
        ],
                'risks' => [
            ['value' => 'Diabetes, obesity, or metabolic syndrome'],
            ['value' => 'Infertility or reproductive health complications'],
            ['value' => 'Osteoporosis and reduced bone density'],
            ['value' => 'Cardiovascular disease, hypertension, or cholesterol imbalance'],
            ['value' => 'Long-term organ dysfunction and reduced quality of life if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for endocrine disorders focuses on restoring hormonal balance, controlling symptoms, preventing complications, and improving overall metabolic and reproductive health. Management may include hormone replacement therapy, anti-thyroid medications, insulin therapy, adrenal hormone management, lifestyle modification, nutritional counseling, weight management, fertility support, and regular hormonal monitoring. Patients may also benefit from endocrine surgery, stress management, rehabilitation programs, preventive health screening, multidisciplinary specialist care, and long-term endocrinology follow-up to optimize treatment outcomes and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for endocrine disorders depends on the specific condition, severity of hormonal imbalance, treatment adherence, and overall lifestyle management. Early diagnosis, medication compliance, healthy nutrition, regular exercise, stress reduction, hormonal monitoring, preventive healthcare, and continuous endocrinology follow-up significantly help maintain hormonal stability, reduce complications, preserve organ function, improve metabolic health, and enhance overall quality of life. __________________ 14. Electrolyte Imbalances (Na, K, Ca, Mg disorders) Electrolyte Imbalances (Na, K, Ca, Mg Disorders)',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)',
                'meta_description' => 'Endocrine disorders are medical conditions affecting the hormone-producing glands of the body, including the thyroid, adrenal glands, pituitary gland, and repro',
                'meta_keywords' => '',
            ]
        );
    }
}
