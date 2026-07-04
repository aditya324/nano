<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperprolactinemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hyperprolactinemia')],
            [
                'name' => 'Hyperprolactinemia',
                'slug' => Str::slug('Hyperprolactinemia'),
                'h1' => 'Hyperprolactinemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hyperprolactinemia is a hormonal disorder characterized by abnormally high levels of prolactin, a hormone produced by the pituitary gland that primarily regulates breast development and milk production. Elevated prolactin levels can interfere with reproductive hormones, menstrual cycles, fertility, sexual function, and overall endocrine balance. The condition may occur due to pituitary gland disorders, medications, hormonal imbalance, or other underlying medical conditions, requiring proper endocrine evaluation and management.',
                'about_more' => '',
                'overview' => 'Hyperprolactinemia is a hormonal disorder characterized by abnormally high levels of prolactin, a hormone produced by the pituitary gland that primarily regulates breast development and milk production. Elevated prolactin levels can interfere with reproductive hormones, menstrual cycles, fertility, sexual function, and overall endocrine balance. The condition may occur due to pituitary gland disorders, medications, hormonal imbalance, or other underlying medical conditions, requiring proper endocrine evaluation and management.',
                'symptoms' => [
            ['value' => 'Irregular or absent menstrual periods'],
            ['value' => 'Milky nipple discharge unrelated to pregnancy or breastfeeding'],
            ['value' => 'Reduced libido or sexual dysfunction'],
            ['value' => 'Infertility or difficulty conceiving'],
            ['value' => 'Fatigue, headaches, or vision disturbances in severe cases'],
        ],
                'causes' => [
            ['value' => 'Pituitary adenomas (prolactin-secreting tumors)'],
            ['value' => 'Certain medications affecting dopamine regulation'],
            ['value' => 'Hypothyroidism or other endocrine disorders'],
            ['value' => 'Stress, pregnancy, or excessive stimulation of the breast area'],
            ['value' => 'Kidney disease, liver disease, or pituitary gland abnormalities'],
        ],
                'risks' => [
            ['value' => 'Infertility or reproductive dysfunction'],
            ['value' => 'Hormonal imbalance affecting menstrual and sexual health'],
            ['value' => 'Osteoporosis or reduced bone density due to low sex hormone levels'],
            ['value' => 'Vision loss or neurological symptoms from large pituitary tumors'],
            ['value' => 'Emotional stress, fatigue, or reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for hyperprolactinemia focuses on normalizing prolactin levels, restoring hormonal balance, relieving symptoms, and treating the underlying cause. Management may include dopamine agonist medications, treatment of hypothyroidism or associated endocrine disorders, medication adjustment, hormonal therapy, and regular prolactin monitoring. Patients with large pituitary tumors may require surgery or radiotherapy in selected cases. Long-term endocrinology follow-up, fertility counseling, bone health monitoring, and lifestyle modification are important components of ongoing care and recovery.'],
        ],
                'recovery' => 'The long-term outlook for hyperprolactinemia is generally positive with early diagnosis and proper endocrine management. Medication adherence, regular hormonal monitoring, healthy lifestyle habits, stress management, fertility support, and continuous endocrinology follow-up significantly help restore hormonal stability, improve reproductive health, reduce complications, preserve bone health, and enhance overall quality of life. ______________ 19. Disorders of Calcium & Vitamin D Metabolism Disorders of Calcium & Vitamin D Metabolism',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Hyperprolactinemia',
                'meta_description' => 'Hyperprolactinemia is a hormonal disorder characterized by abnormally high levels of prolactin, a hormone produced by the pituitary gland that primarily regulat',
                'meta_keywords' => '',
            ]
        );
    }
}
