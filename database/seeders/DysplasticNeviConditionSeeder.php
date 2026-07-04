<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DysplasticNeviConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dysplastic Nevi')],
            [
                'name' => 'Dysplastic Nevi',
                'slug' => Str::slug('Dysplastic Nevi'),
                'h1' => 'Dysplastic Nevi',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dysplastic nevi, also known as atypical moles, are unusual-looking moles that differ in appearance from common moles. They may have irregular borders, uneven coloring, or larger sizes and can occur anywhere on the body. Although most dysplastic nevi are noncancerous, some may increase the risk of developing melanoma, making regular skin examinations and monitoring important.',
                'about_more' => 'Bullous disorders such as pemphigus and bullous pemphigoid are autoimmune skin diseases that cause blister formation on the skin and mucous membranes. Pemphigus commonly causes fragile blisters and painful mouth sores, while bullous pemphigoid usually presents with large, tense, itchy blisters, especially in older adults. These conditions may affect skin integrity, nutrition, comfort, and daily activities if not treated early. Diagnosis is typically confirmed through clinical evaluation, skin biopsy, and immunological testing.',
                'overview' => 'Dysplastic nevi, also known as atypical moles, are unusual-looking moles that differ in appearance from common moles. They may have irregular borders, uneven coloring, or larger sizes and can occur anywhere on the body. Although most dysplastic nevi are noncancerous, some may increase the risk of developing melanoma, making regular skin examinations and monitoring important. Bullous disorders such as pemphigus and bullous pemphigoid are autoimmune skin diseases that cause blister formation on the skin and mucous membranes. Pemphigus commonly causes fragile blisters and painful mouth sores, while bullous pemphigoid usually presents with large, tense, itchy blisters, especially in older adults. These conditions may affect skin integrity, nutrition, comfort, and daily activities if not treated early. Diagnosis is typically confirmed through clinical evaluation, skin biopsy, and immunological testing.',
                'symptoms' => [
            ['value' => 'Moles with irregular or uneven borders'],
            ['value' => 'Mixed colors such as brown, tan, black, or pink within the same mole'],
            ['value' => 'Larger moles compared to ordinary moles'],
            ['value' => 'Flat or slightly raised skin lesions'],
            ['value' => 'Changes in size, shape, or color over time'],
            ['value' => 'Fluid-filled blisters on the skin'],
            ['value' => 'Painful skin erosions or ulcers'],
            ['value' => 'Itching, burning, or irritation'],
            ['value' => 'Mouth sores and difficulty eating'],
            ['value' => 'Redness, inflammation, or skin tenderness'],
        ],
                'causes' => [
            ['value' => 'Ultraviolet (UV) light exposure from sunlight or tanning beds'],
            ['value' => 'Genetic or hereditary predisposition'],
            ['value' => 'Fair or sun-sensitive skin types'],
            ['value' => 'Repeated sunburns or excessive sun exposure'],
            ['value' => 'Family history of atypical moles or melanoma'],
            ['value' => 'Autoimmune dysfunction affecting skin tissues'],
            ['value' => 'Genetic predisposition and immune-related factors'],
            ['value' => 'Certain medications triggering blistering reactions'],
            ['value' => 'Advanced age, especially in bullous pemphigoid'],
            ['value' => 'Environmental or unknown immune system triggers'],
        ],
                'risks' => [
            ['value' => 'Increased risk of melanoma skin cancer'],
            ['value' => 'Fair skin, freckles, and light-colored eyes or hair'],
            ['value' => 'Family history of skin cancer or atypical moles'],
            ['value' => 'History of excessive sun exposure or difficulty tanning'],
            ['value' => 'Sensitivity to ultraviolet (UV) radiation'],
            ['value' => 'Skin infections and delayed wound healing'],
            ['value' => 'Severe pain and physical discomfort'],
            ['value' => 'Fluid loss and dehydration in widespread disease'],
            ['value' => 'Nutritional problems due to oral ulcers'],
            ['value' => 'Scarring, pigmentation changes, and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular skin examinations and mole monitoring'],
            ['value' => 'Dermoscopic evaluation and skin imaging'],
            ['value' => 'Surgical removal of suspicious or changing moles'],
            ['value' => 'Biopsy procedures for abnormal lesions'],
            ['value' => 'Sun protection and preventive dermatologic care'],
            ['value' => 'Treatment options may include corticosteroids, immunosuppressive medications, biologic therapies, anti-inflammatory drugs, wound care management, infection prevention, pain relief measures, nutritional support, oral care for mucosal involvement, and long-term dermatology follow-up to control symptoms and reduce disease flare-ups.'],
        ],
                'recovery' => 'The long-term outlook for dysplastic nevi is generally good with proper monitoring and preventive skin care. Most atypical moles remain noncancerous, but regular dermatologic evaluations are important for early detection of melanoma or other skin cancers. Consistent sun protection, skin self-examinations, and timely medical evaluation of changing moles help reduce long-term risks and support overall skin health. _________________________________ 17. Bullous Disorders (Pemphigus, Bullous Pemphigoid) Bullous Disorders (Pemphigus, Bullous Pemphigoid) Conditions The recovery and long-term outlook for bullous disorders depend on the severity of disease, response to treatment, and overall health condition. Many patients achieve good symptom control with early diagnosis, appropriate medications, supportive skin care, and regular medical monitoring. Continuous treatment and follow-up help prevent complications, improve comfort, reduce flare-ups, and support long-term skin health and overall quality of life. ________________________ 18. Drug Reactions / Allergic Dermatoses Drug Reactions / Allergic Dermatoses',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Dysplastic Nevi',
                'meta_description' => 'Dysplastic nevi, also known as atypical moles, are unusual-looking moles that differ in appearance from common moles. They may have irregular borders, uneven co',
                'meta_keywords' => '',
            ]
        );
    }
}
