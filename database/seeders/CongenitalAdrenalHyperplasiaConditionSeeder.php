<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CongenitalAdrenalHyperplasiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Congenital Adrenal Hyperplasia')],
            [
                'name' => 'Congenital Adrenal Hyperplasia',
                'slug' => Str::slug('Congenital Adrenal Hyperplasia'),
                'h1' => 'Congenital Adrenal Hyperplasia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Congenital Adrenal Hyperplasia (CAH) is a group of inherited endocrine disorders affecting the adrenal glands, resulting in abnormal production of adrenal hormones such as cortisol, aldosterone, and androgens. The condition is usually present from birth and occurs due to enzyme deficiencies involved in adrenal hormone synthesis. CAH can affect growth, metabolism, salt balance, sexual development, and overall hormonal stability, requiring early diagnosis and lifelong endocrine management to prevent serious complications.',
                'about_more' => '',
                'overview' => 'Congenital Adrenal Hyperplasia (CAH) is a group of inherited endocrine disorders affecting the adrenal glands, resulting in abnormal production of adrenal hormones such as cortisol, aldosterone, and androgens. The condition is usually present from birth and occurs due to enzyme deficiencies involved in adrenal hormone synthesis. CAH can affect growth, metabolism, salt balance, sexual development, and overall hormonal stability, requiring early diagnosis and lifelong endocrine management to prevent serious complications.',
                'symptoms' => [
            ['value' => 'Abnormal growth patterns or early puberty changes'],
            ['value' => 'Excessive androgen-related features such as increased body hair or acne'],
            ['value' => 'Dehydration, vomiting, or poor feeding in severe infant cases'],
            ['value' => 'Fatigue, weakness, or low blood pressure'],
            ['value' => 'Irregular menstrual cycles or fertility-related issues later in life'],
        ],
                'causes' => [
            ['value' => 'Inherited genetic mutations affecting adrenal enzyme production'],
            ['value' => 'Deficiency of enzymes required for cortisol and aldosterone synthesis'],
            ['value' => 'Family history of congenital adrenal disorders'],
            ['value' => 'Hormonal imbalance affecting adrenal gland function'],
            ['value' => 'Autosomal recessive genetic inheritance patterns'],
        ],
                'risks' => [
            ['value' => 'Adrenal crisis causing severe dehydration and shock'],
            ['value' => 'Electrolyte imbalance affecting heart and nerve function'],
            ['value' => 'Abnormal growth and developmental disturbances'],
            ['value' => 'Fertility or reproductive health complications'],
            ['value' => 'Emotional, metabolic, or long-term hormonal health issues if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for congenital adrenal hyperplasia focuses on restoring hormonal balance, preventing adrenal crisis, supporting healthy growth and development, and reducing long-term complications. Management may include corticosteroid replacement therapy, mineralocorticoid therapy, salt supplementation, hormone regulation, regular endocrine monitoring, and growth assessment. Patients may also benefit from nutritional counseling, psychological support, fertility counseling, genetic counseling, and long-term endocrinology follow-up to optimize hormonal stability and overall health outcomes.'],
        ],
                'recovery' => 'The long-term outlook for congenital adrenal hyperplasia is generally positive with early diagnosis and proper lifelong endocrine management. Regular medication adherence, hormonal monitoring, healthy lifestyle habits, stress management, growth evaluation, and continuous medical follow-up significantly help maintain hormonal balance, prevent adrenal emergencies, support normal development, preserve reproductive health, and enhance overall quality of life. ____________ 24. Insulin Resistance Syndromes Insulin Resistance Syndromes',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Congenital Adrenal Hyperplasia',
                'meta_description' => 'Congenital Adrenal Hyperplasia (CAH) is a group of inherited endocrine disorders affecting the adrenal glands, resulting in abnormal production of adrenal hormo',
                'meta_keywords' => '',
            ]
        );
    }
}
