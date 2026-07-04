<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TesticularCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Testicular Cancer')],
            [
                'name' => 'Testicular Cancer',
                'slug' => Str::slug('Testicular Cancer'),
                'h1' => 'Testicular Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Testicular cancer is a type of cancer that develops in the testicles (testes), which are located inside the scrotum beneath the penis. The testicles are responsible for producing sperm and male hormones such as testosterone. Testicular cancer is relatively uncommon but is one of the most treatable cancers when detected early.',
                'about_more' => '',
                'overview' => 'Testicular cancer is a type of cancer that develops in the testicles (testes), which are located inside the scrotum beneath the penis. The testicles are responsible for producing sperm and male hormones such as testosterone. Testicular cancer is relatively uncommon but is one of the most treatable cancers when detected early.',
                'symptoms' => [
            ['value' => 'A lump or swelling in either testicle'],
            ['value' => 'Pain or discomfort in the testicle or scrotum'],
            ['value' => 'A feeling of heaviness in the scrotum'],
            ['value' => 'Enlargement or tenderness of breast tissue'],
            ['value' => 'Shrinking or change in the size of a testicle'],
        ],
                'causes' => [
            ['value' => 'Undescended testicle (cryptorchidism)'],
            ['value' => 'Family history of testicular cancer'],
            ['value' => 'Personal history of testicular cancer in the opposite testicle'],
            ['value' => 'Genetic and developmental factors'],
            ['value' => 'Age, especially in younger and middle-aged males'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to lymph nodes or other organs'],
            ['value' => 'Fertility and reproductive health complications'],
            ['value' => 'Hormonal imbalance affecting testosterone levels'],
            ['value' => 'Emotional stress and psychological impact'],
            ['value' => 'Treatment-related complications from surgery or chemotherapy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the affected testicle (orchiectomy)'],
            ['value' => 'Chemotherapy and radiation therapy'],
            ['value' => 'Surveillance and regular cancer monitoring'],
            ['value' => 'Fertility preservation and reproductive counseling'],
            ['value' => 'Long-term oncology follow-up and supportive care'],
        ],
                'recovery' => 'The long-term outlook for testicular cancer is highly favorable, especially when diagnosed and treated early. Most individuals respond well to treatment and achieve excellent survival outcomes. Regular follow-up care, self-examination, healthy lifestyle practices, and ongoing medical monitoring are important for detecting recurrence and maintaining long-term health and quality of life. ______________________ 15. Skin Cancer (Melanoma & Non-Melanoma)',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Testicular Cancer',
                'meta_description' => 'Testicular cancer is a type of cancer that develops in the testicles (testes), which are located inside the scrotum beneath the penis. The testicles are respons',
                'meta_keywords' => '',
            ]
        );
    }
}
