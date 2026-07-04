<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NailCareTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Nail Care & Therapy')],
            [
                'title' => 'Nail Care & Therapy',
                'slug' => Str::slug('Nail Care & Therapy'),
                'introduction' => 'Nail care and therapy involve specialized medical and cosmetic treatments designed to improve the health, appearance, and function of fingernails and toenails affected by infections, inflammatory conditions, trauma, or structural abnormalities. Proper nail care helps prevent complications, reduce discomfort, and support healthy nail growth.',
                'what_is' => 'Nail therapy may include treatment for fungal nail infections, psoriasis-related nail changes, ingrown nails, brittle nails, nail discoloration, and nail deformities. Management often combines medical therapy, protective nail care, hygiene practices, and dermatologic procedures tailored to the underlying condition. Regular nail care is important for maintaining healthy nails and preventing recurrence of nail disorders.',
                'symptoms' => [
            ['value' => 'Thickened, brittle, or discolored nails'],
            ['value' => 'Nail pain, tenderness, or swelling'],
            ['value' => 'Cracked, crumbly, or distorted nails'],
            ['value' => 'Separation of the nail from the nail bed'],
            ['value' => 'Slow nail growth or recurrent nail infections'],
        ],
                'causes' => [
            ['value' => 'Nail disorders can develop due to fungal or bacterial infections, repeated trauma, poor nail hygiene, psoriasis, eczema, nutritional deficiencies, aging, or underlying medical conditions such as diabetes and circulatory disorders. Frequent exposure to moisture, harsh chemicals, nail cosmetics, tight footwear, and improper nail trimming may also contribute to nail damage and infections. Genetic factors and autoimmune conditions can sometimes lead to chronic nail abnormalities or deformities.'],
        ],
                'condition_risks' => [
            ['value' => 'Persistent or recurrent nail infections'],
            ['value' => 'Nail deformity or permanent nail damage'],
            ['value' => 'Pain or difficulty performing daily activities'],
            ['value' => 'Spread of fungal or bacterial infections'],
            ['value' => 'Emotional stress related to nail appearance'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for nail disorders depend on the underlying cause and severity of the condition. Fungal nail infections may be treated with topical or oral antifungal medications, while inflammatory nail conditions associated with psoriasis or eczema may require corticosteroids or other dermatologic therapies. Ingrown nails may need minor nail procedures to relieve pain and prevent infection. Protective nail care, proper trimming techniques, moisturization, and avoidance of nail trauma are important parts of treatment. In some cases, damaged nails may require medical nail restoration procedures, drainage of infections, or advanced therapies to improve nail appearance and function. Regular dermatologic evaluation and preventive nail care help support healthy nail growth and reduce recurrence.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintaining proper nail hygiene and cleanliness'],
            ['value' => 'Keeping nails dry and protected from trauma'],
            ['value' => 'Using prescribed medications or nail treatments regularly'],
            ['value' => 'Avoiding harsh chemicals or nail damage'],
            ['value' => 'Regular dermatologic follow-up and preventive nail care'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent or recurrent nail infections'],
            ['value' => 'Nail deformity or permanent nail damage'],
            ['value' => 'Pain or difficulty performing daily activities'],
            ['value' => 'Spread of fungal or bacterial infections'],
            ['value' => 'Emotional stress related to nail appearance'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for nail disorders depend on the underlying cause and severity of the condition. Fungal nail infections may be treated with topical or oral antifungal medications, while inflammatory nail conditions associated with psoriasis or eczema may require corticosteroids or other dermatologic therapies. Ingrown nails may need minor nail procedures to relieve pain and prevent infection. Protective nail care, proper trimming techniques, moisturization, and avoidance of nail trauma are important parts of treatment. In some cases, damaged nails may require medical nail restoration procedures, drainage of infections, or advanced therapies to improve nail appearance and function. Regular dermatologic evaluation and preventive nail care help support healthy nail growth and reduce recurrence.'],
        ],
                'long_term_outlook' => 'The long-term outlook for nail disorders is generally positive with early diagnosis, proper treatment, and consistent nail care. Many nail conditions improve gradually over time, although some may require long-term management or repeat treatments. Healthy hygiene practices, preventive care, and regular dermatologic follow-up help maintain strong, healthy nails and reduce recurrence risk.',
                'conclusion' => '',
                'seo_title' => 'Nail Care & Therapy',
                'seo_description' => 'Nail care and therapy involve specialized medical and cosmetic treatments designed to improve the health, appearance, and function of fingernails and toenails affected by infections, inflammatory conditions, trauma, or structural abnormalities. Proper nail care helps prevent complications, reduce discomfort, and support healthy nail growth.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
