<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HypogonadismMaleFemaleConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hypogonadism (Male / Female)')],
            [
                'name' => 'Hypogonadism (Male / Female)',
                'slug' => Str::slug('Hypogonadism (Male / Female)'),
                'h1' => 'Hypogonadism (Male / Female)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hypogonadism is a hormonal disorder in which the body produces insufficient sex hormones required for normal reproductive and metabolic function. In males, it involves reduced testosterone production, while in females it results from decreased estrogen or ovarian hormone production. Hypogonadism can affect sexual development, fertility, bone health, energy levels, mood, and overall physical well-being. The condition may occur due to problems within the reproductive glands or abnormalities affecting hormone regulation from the brain and endocrine system.',
                'about_more' => '',
                'overview' => 'Hypogonadism is a hormonal disorder in which the body produces insufficient sex hormones required for normal reproductive and metabolic function. In males, it involves reduced testosterone production, while in females it results from decreased estrogen or ovarian hormone production. Hypogonadism can affect sexual development, fertility, bone health, energy levels, mood, and overall physical well-being. The condition may occur due to problems within the reproductive glands or abnormalities affecting hormone regulation from the brain and endocrine system.',
                'symptoms' => [
            ['value' => 'Reduced libido or reproductive health concerns'],
            ['value' => 'Fatigue, weakness, or reduced physical endurance'],
            ['value' => 'Hormonal imbalance causing mood changes or difficulty concentrating'],
            ['value' => 'Infertility, menstrual irregularities, or reduced fertility'],
            ['value' => 'Loss of muscle strength, bone density, or body hair changes'],
        ],
                'causes' => [
            ['value' => 'Genetic or congenital endocrine disorders'],
            ['value' => 'Pituitary or hypothalamic hormone abnormalities'],
            ['value' => 'Aging-related hormonal decline'],
            ['value' => 'Chronic illnesses, obesity, or metabolic disorders'],
            ['value' => 'Injury, infection, surgery, radiation, or certain medications affecting reproductive glands'],
        ],
                'risks' => [
            ['value' => 'Infertility or reproductive dysfunction'],
            ['value' => 'Osteoporosis or reduced bone density'],
            ['value' => 'Loss of muscle mass and physical weakness'],
            ['value' => 'Depression, anxiety, or emotional health disturbances'],
            ['value' => 'Increased risk of metabolic syndrome and cardiovascular disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for hypogonadism focuses on restoring hormonal balance, relieving symptoms, improving fertility when required, and preventing long-term complications. Management may include hormone replacement therapy such as testosterone therapy in males or estrogen and progesterone therapy in females, fertility treatments, lifestyle modification, nutritional counseling, and regular hormonal monitoring. Patients may also benefit from exercise programs, weight management, psychological counseling, bone health support, endocrinology follow-up, and treatment of underlying endocrine or metabolic disorders to improve overall hormonal and reproductive health.'],
        ],
                'recovery' => 'The long-term outlook for hypogonadism is generally positive with early diagnosis and appropriate hormonal management. Regular medication adherence, healthy lifestyle habits, exercise, balanced nutrition, stress management, bone health monitoring, and continuous endocrinology follow-up significantly help improve hormonal stability, reproductive health, physical strength, emotional well-being, and overall quality of life. __________________ 17. Growth Disorders (Short Stature, Gigantism) Growth Disorders (Short Stature, Gigantism)',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Hypogonadism (Male / Female)',
                'meta_description' => 'Hypogonadism is a hormonal disorder in which the body produces insufficient sex hormones required for normal reproductive and metabolic function. In males, it i',
                'meta_keywords' => '',
            ]
        );
    }
}
