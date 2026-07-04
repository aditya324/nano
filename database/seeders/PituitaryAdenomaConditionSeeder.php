<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PituitaryAdenomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pituitary Adenoma')],
            [
                'name' => 'Pituitary Adenoma',
                'slug' => Str::slug('Pituitary Adenoma'),
                'h1' => 'Pituitary Adenoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pituitary adenoma is a usually benign tumor arising from the pituitary gland located at the base of the brain. These tumors may produce excess hormones or compress nearby structures such as the optic nerves, leading to hormonal imbalance and vision problems.',
                'about_more' => '',
                'overview' => 'Pituitary adenoma is a usually benign tumor arising from the pituitary gland located at the base of the brain. These tumors may produce excess hormones or compress nearby structures such as the optic nerves, leading to hormonal imbalance and vision problems.',
                'symptoms' => [
            ['value' => 'Headaches and visual disturbances'],
            ['value' => 'Hormonal imbalance symptoms'],
            ['value' => 'Menstrual irregularities or infertility'],
            ['value' => 'Fatigue and unexplained weight changes'],
            ['value' => 'Reduced peripheral vision or blurred vision'],
        ],
                'causes' => [
            ['value' => 'Abnormal growth of pituitary gland cells'],
            ['value' => 'Hormone-secreting pituitary tissue changes'],
            ['value' => 'Genetic syndromes in rare cases'],
            ['value' => 'Unknown cellular mutations'],
            ['value' => 'Endocrine regulatory abnormalities'],
        ],
                'risks' => [
            ['value' => 'Vision loss from optic nerve compression'],
            ['value' => 'Hormonal disorders affecting multiple organs'],
            ['value' => 'Pituitary apoplexy (sudden bleeding into tumor)'],
            ['value' => 'Infertility and metabolic disturbances'],
            ['value' => 'Tumor recurrence after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI brain and hormone evaluation'],
            ['value' => 'Hormonal medications for selected tumors'],
            ['value' => 'Endoscopic transsphenoidal surgery'],
            ['value' => 'Radiation therapy for residual tumors'],
            ['value' => 'Lifelong endocrine and neurological follow-up'],
        ],
                'recovery' => 'Most pituitary adenomas respond well to surgery or medical therapy. Early treatment improves hormonal balance and preserves vision.',
                'sort_order' => 42,
                'is_active' => true,
                'meta_title' => 'Pituitary Adenoma',
                'meta_description' => 'Pituitary adenoma is a usually benign tumor arising from the pituitary gland located at the base of the brain. These tumors may produce excess hormones or compr',
                'meta_keywords' => '',
            ]
        );
    }
}
