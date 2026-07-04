<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroiditisAutoimmuneSubacuteConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thyroiditis (Autoimmune / Subacute)')],
            [
                'name' => 'Thyroiditis (Autoimmune / Subacute)',
                'slug' => Str::slug('Thyroiditis (Autoimmune / Subacute)'),
                'h1' => 'Thyroiditis (Autoimmune / Subacute)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thyroiditis refers to inflammation of the thyroid gland that can affect thyroid hormone production and overall endocrine function. Autoimmune thyroiditis, such as Hashimoto’s thyroiditis, occurs when the immune system attacks the thyroid gland, often leading to hypothyroidism over time. Subacute thyroiditis is usually a temporary inflammatory condition often associated with viral infections and may cause pain and temporary hormone imbalance. These conditions can affect metabolism, energy levels, heart function, and overall well-being, requiring proper medical evaluation and long-term thyroid monitoring.',
                'about_more' => '',
                'overview' => 'Thyroiditis refers to inflammation of the thyroid gland that can affect thyroid hormone production and overall endocrine function. Autoimmune thyroiditis, such as Hashimoto’s thyroiditis, occurs when the immune system attacks the thyroid gland, often leading to hypothyroidism over time. Subacute thyroiditis is usually a temporary inflammatory condition often associated with viral infections and may cause pain and temporary hormone imbalance. These conditions can affect metabolism, energy levels, heart function, and overall well-being, requiring proper medical evaluation and long-term thyroid monitoring.',
                'symptoms' => [
            ['value' => 'Neck pain or tenderness around the thyroid gland'],
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Weight changes or altered metabolism'],
            ['value' => 'Palpitations, heat intolerance, or excessive sweating in early hyperthyroid phases'],
            ['value' => 'Cold intolerance, dry skin, or constipation in later hypothyroid phases'],
        ],
                'causes' => [
            ['value' => 'Autoimmune reactions affecting thyroid tissue'],
            ['value' => 'Viral infections causing thyroid inflammation'],
            ['value' => 'Genetic predisposition or family history of thyroid disease'],
            ['value' => 'Hormonal imbalance or immune system abnormalities'],
            ['value' => 'Certain medications, radiation exposure, or post-pregnancy hormonal changes'],
        ],
                'risks' => [
            ['value' => 'Permanent hypothyroidism requiring lifelong hormone replacement'],
            ['value' => 'Temporary hyperthyroidism causing heart-related symptoms'],
            ['value' => 'Thyroid gland enlargement or discomfort'],
            ['value' => 'Hormonal imbalance affecting metabolism and daily functioning'],
            ['value' => 'Rare long-term thyroid dysfunction or recurrent thyroid inflammation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for thyroiditis focuses on reducing inflammation, controlling symptoms, restoring hormonal balance, and preventing long-term thyroid complications. Management may include anti-inflammatory medications, pain relief therapy, thyroid hormone replacement therapy, beta-blockers for symptom control, and regular thyroid function monitoring. Patients may also benefit from nutritional counseling, stress management, healthy lifestyle modification, endocrinology follow-up, and long-term hormone evaluation to maintain thyroid health and metabolic stability.'],
        ],
                'recovery' => 'The long-term outlook for thyroiditis is generally positive with early diagnosis and appropriate endocrine management. Regular thyroid monitoring, medication adherence, healthy lifestyle habits, stress reduction, nutritional support, and continuous medical follow-up significantly help restore hormonal balance, reduce complications, maintain thyroid function, and enhance overall quality of life. ___________________ 23. Congenital Adrenal Hyperplasia Congenital Adrenal Hyperplasia',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Thyroiditis (Autoimmune / Subacute)',
                'meta_description' => 'Thyroiditis refers to inflammation of the thyroid gland that can affect thyroid hormone production and overall endocrine function. Autoimmune thyroiditis, such ',
                'meta_keywords' => '',
            ]
        );
    }
}
