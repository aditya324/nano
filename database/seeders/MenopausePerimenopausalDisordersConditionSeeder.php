<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenopausePerimenopausalDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Menopause & Perimenopausal Disorders')],
            [
                'name' => 'Menopause & Perimenopausal Disorders',
                'slug' => Str::slug('Menopause & Perimenopausal Disorders'),
                'h1' => 'Menopause & Perimenopausal Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Menopause and perimenopausal disorders are hormonal conditions associated with the natural decline of ovarian function and reproductive hormones in women, usually occurring between the ages of 45 and 55 years. Perimenopause is the transitional phase before menopause during which hormone levels fluctuate and menstrual cycles become irregular, while menopause is confirmed after the absence of menstrual periods for 12 consecutive months. These hormonal changes can affect physical, emotional, metabolic, and reproductive health, requiring proper medical support and lifestyle management to improve overall well-being and quality of life.',
                'about_more' => '',
                'overview' => 'Menopause and perimenopausal disorders are hormonal conditions associated with the natural decline of ovarian function and reproductive hormones in women, usually occurring between the ages of 45 and 55 years. Perimenopause is the transitional phase before menopause during which hormone levels fluctuate and menstrual cycles become irregular, while menopause is confirmed after the absence of menstrual periods for 12 consecutive months. These hormonal changes can affect physical, emotional, metabolic, and reproductive health, requiring proper medical support and lifestyle management to improve overall well-being and quality of life.',
                'symptoms' => [
            ['value' => 'Irregular menstrual cycles or absence of periods'],
            ['value' => 'Hot flashes, night sweats, or heat intolerance'],
            ['value' => 'Mood swings, anxiety, or irritability'],
            ['value' => 'Sleep disturbances or chronic fatigue'],
            ['value' => 'Vaginal dryness, reduced libido, or weight gain'],
        ],
                'causes' => [
            ['value' => 'Natural age-related decline in estrogen and progesterone production'],
            ['value' => 'Surgical removal of ovaries or certain gynecological procedures'],
            ['value' => 'Chemotherapy, radiation therapy, or hormonal treatments affecting ovarian function'],
            ['value' => 'Genetic or autoimmune conditions affecting reproductive hormones'],
            ['value' => 'Stress, lifestyle factors, or metabolic and endocrine disorders influencing hormonal balance'],
        ],
                'risks' => [
            ['value' => 'Osteoporosis or reduced bone density'],
            ['value' => 'Increased risk of heart disease and metabolic disorders'],
            ['value' => 'Mood disorders, depression, or emotional health disturbances'],
            ['value' => 'Sleep disorders and reduced quality of life'],
            ['value' => 'Urinary or vaginal health complications related to hormonal deficiency'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for menopause and perimenopausal disorders focuses on relieving symptoms, restoring hormonal balance, preventing long-term complications, and improving overall health and quality of life. Management may include hormone replacement therapy (HRT), non-hormonal medications, calcium and vitamin D supplementation, healthy diet planning, regular exercise, stress management, and lifestyle modification. Patients may also benefit from gynecological evaluation, bone density monitoring, counseling, sleep management, cardiovascular risk assessment, and long-term endocrinology or women’s health follow-up to support healthy aging and hormonal well-being.'],
        ],
                'recovery' => 'The long-term outlook for menopause and perimenopausal disorders is generally positive with early symptom management and healthy lifestyle practices. Regular exercise, balanced nutrition, hormonal monitoring, medication adherence, stress reduction, bone health support, cardiovascular care, and continuous medical follow-up significantly help reduce complications, improve hormonal stability, maintain physical and emotional well-being, and enhance overall quality of life. ______________ 22. Thyroiditis (Autoimmune / Subacute) Thyroiditis (Autoimmune / Subacute)',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Menopause & Perimenopausal Disorders',
                'meta_description' => 'Menopause and perimenopausal disorders are hormonal conditions associated with the natural decline of ovarian function and reproductive hormones in women, usual',
                'meta_keywords' => '',
            ]
        );
    }
}
