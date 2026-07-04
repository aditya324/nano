<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PituitaryDisordersAcromegalyHypopituitarismPituitaryAdenomasConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas)')],
            [
                'name' => 'Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas)',
                'slug' => Str::slug('Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas)'),
                'h1' => 'Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pituitary disorders are endocrine conditions affecting the pituitary gland, a small but essential gland located at the base of the brain that regulates hormone production and controls multiple body functions. Disorders such as acromegaly, hypopituitarism, and pituitary adenomas can disrupt hormonal balance and affect growth, metabolism, reproduction, stress response, and overall health. Early diagnosis and specialized endocrine management are important to prevent complications and maintain long-term hormonal stability.',
                'about_more' => '',
                'overview' => 'Pituitary disorders are endocrine conditions affecting the pituitary gland, a small but essential gland located at the base of the brain that regulates hormone production and controls multiple body functions. Disorders such as acromegaly, hypopituitarism, and pituitary adenomas can disrupt hormonal balance and affect growth, metabolism, reproduction, stress response, and overall health. Early diagnosis and specialized endocrine management are important to prevent complications and maintain long-term hormonal stability.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Hormonal imbalance causing weight, growth, or reproductive changes'],
            ['value' => 'Headaches, vision disturbances, or pressure-related symptoms'],
            ['value' => 'Joint pain, muscle weakness, or changes in physical appearance'],
            ['value' => 'Dizziness, metabolic instability, or reduced stress tolerance'],
        ],
                'causes' => [
            ['value' => 'Benign pituitary tumors or adenomas affecting hormone secretion'],
            ['value' => 'Genetic or inherited endocrine disorders'],
            ['value' => 'Pituitary gland injury, surgery, or radiation exposure'],
            ['value' => 'Autoimmune or inflammatory conditions affecting pituitary function'],
            ['value' => 'Brain infections, trauma, or abnormalities affecting hormonal regulation'],
        ],
                'risks' => [
            ['value' => 'Hormonal imbalance affecting multiple organ systems'],
            ['value' => 'Vision loss due to pressure on the optic nerves'],
            ['value' => 'Infertility or reproductive dysfunction'],
            ['value' => 'Osteoporosis, diabetes, or cardiovascular complications'],
            ['value' => 'Severe metabolic disturbances affecting overall health and quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for pituitary disorders focuses on restoring hormonal balance, controlling tumor growth, relieving symptoms, and preventing complications. Management may include hormone replacement therapy, medications to suppress excess hormone production, surgical removal of pituitary tumors, radiotherapy, and regular hormonal monitoring. Patients may also benefit from nutritional counseling, stress management, endocrinology follow-up, imaging studies, fertility counseling, and long-term metabolic monitoring to optimize endocrine health and improve overall quality of life.'],
        ],
                'recovery' => 'The long-term outlook for pituitary disorders depends on the underlying condition, severity of hormonal imbalance, tumor size, response to treatment, and overall patient health. Early diagnosis, proper hormonal therapy, regular medical follow-up, healthy lifestyle habits, medication adherence, and multidisciplinary endocrine care significantly help maintain hormonal stability, reduce complications, improve metabolic function, preserve organ health, and enhance overall quality of life. _________________ 12. Osteoporosis / Osteopenia Osteoporosis / Osteopenia',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Pituitary Disorders (Acromegaly, Hypopituitarism, Pituitary Adenomas)',
                'meta_description' => 'Pituitary disorders are endocrine conditions affecting the pituitary gland, a small but essential gland located at the base of the brain that regulates hormone ',
                'meta_keywords' => '',
            ]
        );
    }
}
