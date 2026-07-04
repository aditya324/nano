<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinCareCounselingPreventiveDermatologySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Care Counseling & Preventive Dermatology')],
            [
                'title' => 'Skin Care Counseling & Preventive Dermatology',
                'slug' => Str::slug('Skin Care Counseling & Preventive Dermatology'),
                'introduction' => 'Skin care counseling and preventive dermatology focus on maintaining healthy skin, preventing skin diseases, and promoting long-term skin wellness through personalized skincare guidance, lifestyle modifications, and early detection strategies. Preventive dermatology helps reduce the risk of infections, premature aging, pigmentation disorders, allergies, and skin cancers.',
                'what_is' => 'Skin care counseling involves professional evaluation of skin type, skin concerns, environmental exposures, and lifestyle factors to create individualized skincare routines and preventive strategies. Preventive dermatology may include sun protection education, acne prevention, anti-aging care, allergy management, early skin cancer screening, and guidance on healthy skincare products and habits.',
                'symptoms' => [
            ['value' => 'Sensitive, dry, oily, or acne-prone skin'],
            ['value' => 'Frequent skin irritation or allergic reactions'],
            ['value' => 'Pigmentation changes or uneven skin tone'],
            ['value' => 'Early signs of aging or sun damage'],
            ['value' => 'Recurrent skin infections or flare-ups of chronic skin conditions'],
        ],
                'causes' => [
            ['value' => 'Many skin concerns develop due to environmental exposure, poor skincare habits, excessive sun exposure, pollution, stress, hormonal changes, unhealthy lifestyle practices, and genetic predisposition. Frequent use of harsh skincare products, lack of hydration, improper nutrition, smoking, inadequate sleep, and untreated skin conditions may also contribute to skin damage, irritation, premature aging, and chronic dermatologic problems. Allergies, infections, and prolonged UV exposure can further increase the risk of skin disorders and long-term skin damage.'],
        ],
                'condition_risks' => [
            ['value' => 'Premature skin aging and sun damage'],
            ['value' => 'Chronic skin irritation or allergic reactions'],
            ['value' => 'Increased risk of skin cancer from UV exposure'],
            ['value' => 'Worsening of untreated skin conditions'],
            ['value' => 'Emotional stress related to persistent skin concerns'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options in preventive dermatology focus on maintaining healthy skin and preventing future skin problems through personalized skincare plans and lifestyle modifications. Dermatologists may recommend suitable cleansers, moisturizers, sunscreens, medicated creams, and anti-aging products based on an individual’s skin type and concerns. Preventive care may also include acne management, pigmentation treatment, allergy prevention, nutritional guidance, and education regarding safe cosmetic and skincare practices. In some cases, advanced dermatologic procedures such as chemical peels, laser therapies, or skin rejuvenation treatments may be advised to improve skin health and appearance. Regular skin examinations and early intervention strategies help detect and manage skin conditions before complications develop.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Following personalized skincare routines and treatment plans'],
            ['value' => 'Regular use of sunscreen and sun protection measures'],
            ['value' => 'Maintaining proper hydration and nutrition for skin health'],
            ['value' => 'Avoiding harsh chemicals or irritants affecting the skin'],
            ['value' => 'Regular dermatologic evaluations and preventive screenings'],
        ],
                'surgery_risks' => [
            ['value' => 'Premature skin aging and sun damage'],
            ['value' => 'Chronic skin irritation or allergic reactions'],
            ['value' => 'Increased risk of skin cancer from UV exposure'],
            ['value' => 'Worsening of untreated skin conditions'],
            ['value' => 'Emotional stress related to persistent skin concerns'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options in preventive dermatology focus on maintaining healthy skin and preventing future skin problems through personalized skincare plans and lifestyle modifications. Dermatologists may recommend suitable cleansers, moisturizers, sunscreens, medicated creams, and anti-aging products based on an individual’s skin type and concerns. Preventive care may also include acne management, pigmentation treatment, allergy prevention, nutritional guidance, and education regarding safe cosmetic and skincare practices. In some cases, advanced dermatologic procedures such as chemical peels, laser therapies, or skin rejuvenation treatments may be advised to improve skin health and appearance. Regular skin examinations and early intervention strategies help detect and manage skin conditions before complications develop.'],
        ],
                'long_term_outlook' => 'The long-term outlook with preventive dermatology and skin care counseling is highly positive when healthy skincare habits are maintained consistently. Early prevention, proper skincare practices, and regular dermatologic follow-up can significantly reduce skin problems, improve skin appearance, and support long-term skin health and confidence.',
                'conclusion' => '',
                'seo_title' => 'Skin Care Counseling & Preventive Dermatology',
                'seo_description' => 'Skin care counseling and preventive dermatology focus on maintaining healthy skin, preventing skin diseases, and promoting long-term skin wellness through personalized skincare guidance, lifestyle modifications, and early detection strategies. Preventive dermatology helps reduce the risk of infections, premature aging, pigmentation disorders, allergies, and skin cancers.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
