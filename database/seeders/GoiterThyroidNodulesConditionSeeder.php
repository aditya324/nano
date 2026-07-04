<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GoiterThyroidNodulesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Goiter / Thyroid Nodules')],
            [
                'name' => 'Goiter / Thyroid Nodules',
                'slug' => Str::slug('Goiter / Thyroid Nodules'),
                'h1' => 'Goiter / Thyroid Nodules',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Goiter refers to an abnormal enlargement of the thyroid gland, while thyroid nodules are abnormal lumps or growths that develop within the thyroid tissue. These conditions may occur with normal, increased, or decreased thyroid hormone production and can range from harmless benign growths to conditions requiring further medical evaluation and treatment. Goiter and thyroid nodules can affect thyroid function, cause cosmetic concerns, or lead to swallowing and breathing difficulties if significantly enlarged.',
                'about_more' => '',
                'overview' => 'Goiter refers to an abnormal enlargement of the thyroid gland, while thyroid nodules are abnormal lumps or growths that develop within the thyroid tissue. These conditions may occur with normal, increased, or decreased thyroid hormone production and can range from harmless benign growths to conditions requiring further medical evaluation and treatment. Goiter and thyroid nodules can affect thyroid function, cause cosmetic concerns, or lead to swallowing and breathing difficulties if significantly enlarged.',
                'symptoms' => [
            ['value' => 'Swelling or visible enlargement in the front of the neck'],
            ['value' => 'Difficulty swallowing or sensation of throat pressure'],
            ['value' => 'Hoarseness or voice changes'],
            ['value' => 'Breathing difficulty in large goiters or nodules'],
            ['value' => 'Symptoms of thyroid hormone imbalance such as fatigue, weight changes, or palpitations'],
        ],
                'causes' => [
            ['value' => 'Iodine deficiency affecting thyroid hormone production'],
            ['value' => 'Autoimmune thyroid diseases such as Hashimoto’s thyroiditis or Graves’ disease'],
            ['value' => 'Benign thyroid nodules or cyst formation'],
            ['value' => 'Thyroid inflammation, infection, or hormonal imbalance'],
            ['value' => 'Rarely, thyroid cancer or genetic predisposition to thyroid disease'],
        ],
                'risks' => [
            ['value' => 'Compression of the airway or swallowing passage in large goiters'],
            ['value' => 'Thyroid hormone imbalance causing hypothyroidism or hyperthyroidism'],
            ['value' => 'Cosmetic concerns or neck discomfort'],
            ['value' => 'Rare risk of malignant thyroid nodules or thyroid cancer'],
            ['value' => 'Progressive thyroid enlargement affecting breathing and daily activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for goiter and thyroid nodules focuses on evaluating thyroid function, relieving symptoms, preventing complications, and treating the underlying cause. Management may include thyroid hormone therapy, anti-thyroid medications, iodine supplementation, ultrasound monitoring, fine-needle aspiration biopsy, radioactive iodine therapy, or surgical thyroid removal in selected cases. Patients may also benefit from nutritional counseling, regular thyroid function testing, endocrinology follow-up, and imaging evaluation to monitor thyroid size and nodule characteristics. Early diagnosis and appropriate monitoring are important to detect potentially serious thyroid conditions and maintain hormonal balance.'],
        ],
                'recovery' => 'The long-term outlook for goiter and thyroid nodules is generally positive with early diagnosis and proper endocrine management. Regular thyroid monitoring, medication adherence, healthy nutrition, routine imaging evaluation, stress management, and continuous medical follow-up significantly help maintain thyroid health, reduce complications, preserve normal hormone function, and enhance overall quality of life. ________________________ 8. Thyroid Cancer Thyroid Cancer',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Goiter / Thyroid Nodules',
                'meta_description' => 'Goiter refers to an abnormal enlargement of the thyroid gland, while thyroid nodules are abnormal lumps or growths that develop within the thyroid tissue. These',
                'meta_keywords' => '',
            ]
        );
    }
}
