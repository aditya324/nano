<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProceduresSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Procedures')],
            [
                'title' => 'Procedures',
                'slug' => Str::slug('Procedures'),
                'introduction' => 'Platelet-rich plasma (PRP) therapy is a regenerative treatment that uses a concentrated portion of a patient’s own blood platelets to promote healing, tissue repair, and collagen stimulation. PRP therapy is commonly used in dermatology for hair restoration, skin rejuvenation, acne scars, and improving overall skin texture and quality.',
                'what_is' => 'During PRP therapy, a small sample of blood is collected and processed to separate platelet-rich plasma. The concentrated plasma is then injected into targeted areas of the scalp or skin. In hair treatments, PRP helps stimulate hair follicles and improve hair growth, while in skin treatments it promotes collagen production, skin renewal, tissue healing, and improved skin elasticity. PRP therapy is commonly performed in outpatient dermatology and aesthetic clinics and may require multiple treatment sessions for optimal results.',
                'symptoms' => [
            ['value' => 'Hair thinning or hair loss'],
            ['value' => 'Reduced hair density or weak hair growth'],
            ['value' => 'Acne scars or uneven skin texture'],
            ['value' => 'Dull, aging, or damaged skin'],
            ['value' => 'Fine lines, wrinkles, or reduced skin elasticity'],
        ],
                'causes' => [
            ['value' => 'Hair thinning and pattern hair loss'],
            ['value' => 'Aging-related skin damage and reduced collagen production'],
            ['value' => 'Acne scars and uneven skin texture'],
            ['value' => 'Dull skin tone and reduced skin elasticity'],
            ['value' => 'Cosmetic concerns related to skin and scalp rejuvenation'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options may include PRP scalp injections for hair restoration, PRP facial rejuvenation therapy, collagen-stimulating treatments, acne scar management, combination aesthetic procedures, supportive skincare regimens, hair growth therapies, microneedling with PRP, skin revitalization treatments, and personalized dermatologic care based on the patient’s cosmetic goals and treatment needs.'],
        ],
                'condition_risks' => [
            ['value' => 'Mild pain, swelling, or redness at injection sites'],
            ['value' => 'Temporary bruising or scalp tenderness'],
            ['value' => 'Mild skin irritation or sensitivity after treatment'],
            ['value' => 'Temporary headache or discomfort in some individuals'],
            ['value' => 'Rare infection or allergic reaction risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoiding harsh hair or skincare products for a short period'],
            ['value' => 'Keeping the treated area clean and protected'],
            ['value' => 'Staying hydrated and following aftercare instructions'],
            ['value' => 'Avoiding excessive heat, sun exposure, or strenuous activity immediately after treatment'],
            ['value' => 'Regular follow-up sessions for optimal results'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild pain, swelling, or redness at injection sites'],
            ['value' => 'Temporary bruising or scalp tenderness'],
            ['value' => 'Mild skin irritation or sensitivity after treatment'],
            ['value' => 'Temporary headache or discomfort in some individuals'],
            ['value' => 'Rare infection or allergic reaction risk'],
        ],
                'long_term_outlook' => 'The long-term outlook with PRP therapy is generally positive for many individuals seeking hair restoration or skin rejuvenation. Regular treatment sessions can help improve hair growth, enhance skin texture, support collagen production, and promote a healthier appearance. Consistent dermatologic care, healthy lifestyle practices, maintenance sessions, and proper skincare routines remain important for supporting long-term results and overall skin and scalp health.',
                'conclusion' => '',
                'seo_title' => 'Procedures',
                'seo_description' => 'Platelet-rich plasma (PRP) therapy is a regenerative treatment that uses a concentrated portion of a patient’s own blood platelets to promote healing, tissue repair, and collagen stimulation. PRP therapy is commonly used in dermatology for hair restoration, skin rejuvenation, acne scars, and improving overall skin texture and quality.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
