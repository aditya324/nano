<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PolycysticOvarySyndromePCOSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Polycystic Ovary Syndrome (PCOS)')],
            [
                'name' => 'Polycystic Ovary Syndrome (PCOS)',
                'slug' => Str::slug('Polycystic Ovary Syndrome (PCOS)'),
                'h1' => 'Polycystic Ovary Syndrome (PCOS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Polycystic Ovary Syndrome (PCOS) is a common hormonal and metabolic disorder affecting women of reproductive age. It occurs due to hormonal imbalance and insulin resistance, leading to irregular ovulation, elevated androgen (male hormone) levels, and the development of multiple small cysts in the ovaries. PCOS can affect menstrual health, fertility, metabolism, skin health, and overall well-being, making early diagnosis and long-term management essential for preventing complications and improving quality of life.',
                'about_more' => '',
                'overview' => 'Polycystic Ovary Syndrome (PCOS) is a common hormonal and metabolic disorder affecting women of reproductive age. It occurs due to hormonal imbalance and insulin resistance, leading to irregular ovulation, elevated androgen (male hormone) levels, and the development of multiple small cysts in the ovaries. PCOS can affect menstrual health, fertility, metabolism, skin health, and overall well-being, making early diagnosis and long-term management essential for preventing complications and improving quality of life.',
                'symptoms' => [
            ['value' => 'Irregular or missed menstrual periods'],
            ['value' => 'Excess facial or body hair growth (hirsutism)'],
            ['value' => 'Acne or oily skin'],
            ['value' => 'Weight gain or difficulty losing weight'],
            ['value' => 'Hair thinning, infertility, or difficulty conceiving'],
        ],
                'causes' => [
            ['value' => 'Hormonal imbalance affecting ovulation and androgen levels'],
            ['value' => 'Insulin resistance and metabolic dysfunction'],
            ['value' => 'Genetic predisposition or family history of PCOS'],
            ['value' => 'Obesity or unhealthy lifestyle habits'],
            ['value' => 'Chronic stress and hormonal or endocrine abnormalities'],
        ],
                'risks' => [
            ['value' => 'Infertility or difficulty with ovulation'],
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'High blood pressure and cardiovascular disease'],
            ['value' => 'Obesity, metabolic syndrome, or fatty liver disease'],
            ['value' => 'Increased risk of endometrial hyperplasia or uterine complications due to irregular menstruation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for PCOS focuses on regulating hormones, improving metabolic health, managing symptoms, and supporting reproductive health. Management may include lifestyle modification, healthy diet planning, regular physical activity, weight management, hormonal medications, insulin-sensitizing therapy, ovulation-inducing medications, and acne or hair growth treatment. Patients may also benefit from fertility counseling, stress management, nutritional counseling, endocrinology and gynecology follow-up, and long-term metabolic monitoring to reduce complications and improve overall hormonal balance and reproductive health.'],
        ],
                'recovery' => 'The long-term outlook for PCOS is generally positive with early diagnosis and consistent medical and lifestyle management. Healthy nutrition, regular exercise, weight control, medication adherence, stress reduction, hormonal monitoring, and continuous medical follow-up significantly help regulate menstrual cycles, improve fertility, reduce metabolic complications, support hormonal balance, and enhance overall quality of life. ____________________ 16. Hypogonadism (Male / Female) Hypogonadism (Male / Female)',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Polycystic Ovary Syndrome (PCOS)',
                'meta_description' => 'Polycystic Ovary Syndrome (PCOS) is a common hormonal and metabolic disorder affecting women of reproductive age. It occurs due to hormonal imbalance and insuli',
                'meta_keywords' => '',
            ]
        );
    }
}
