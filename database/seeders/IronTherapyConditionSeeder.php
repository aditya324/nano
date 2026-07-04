<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IronTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Iron Therapy')],
            [
                'name' => 'Iron Therapy',
                'slug' => Str::slug('Iron Therapy'),
                'h1' => 'Iron Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Iron therapy is a nephrology treatment used to correct iron deficiency and support healthy red blood cell production in patients with kidney disease, especially those suffering from chronic kidney disease (CKD)-related anemia.',
                'about_more' => 'Kidney disease patients commonly develop low iron levels due to reduced absorption, blood loss during dialysis, poor nutrition, and chronic illness. Iron therapy helps improve hemoglobin levels, reduce fatigue, and enhance the effectiveness of erythropoietin treatment. This therapy is an essential component of anemia management in renal patients.',
                'overview' => 'Iron therapy may be administered through: Oral iron tablets or syrups Intravenous (IV) iron infusions Dialysis-related iron supplementation Doctors evaluate: Hemoglobin levels Serum ferritin Transferrin saturation Kidney function Nutritional status IV iron is commonly used in dialysis patients because it works faster and improves iron stores more effectively. Treatment plans are carefully adjusted to avoid iron overload while maintaining healthy blood counts.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Pale skin'],
            ['value' => 'Breathlessness'],
            ['value' => 'Dizziness'],
            ['value' => 'Low hemoglobin levels'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Allergic reactions to IV iron'],
            ['value' => 'Constipation or stomach upset'],
            ['value' => 'Iron overload'],
            ['value' => 'Injection site discomfort'],
            ['value' => 'Temporary blood pressure changes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular blood test monitoring'],
            ['value' => 'Take iron medications as prescribed'],
            ['value' => 'Follow dietary recommendations'],
            ['value' => 'Report allergic symptoms immediately'],
            ['value' => 'Continue nephrology follow-up care'],
        ],
                'recovery' => 'Iron therapy significantly improves anemia symptoms, physical strength, and overall quality of life in kidney disease patients. Regular monitoring and individualized treatment help maintain healthy iron balance and support long-term kidney care outcomes.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Iron Therapy',
                'meta_description' => 'Iron therapy is a nephrology treatment used to correct iron deficiency and support healthy red blood cell production in patients with kidney disease, especially',
                'meta_keywords' => '',
            ]
        );
    }
}
