<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HematuriaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hematuria')],
            [
                'name' => 'Hematuria',
                'slug' => Str::slug('Hematuria'),
                'h1' => 'Hematuria',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hematuria refers to the presence of blood in the urine. It may appear visibly red or brown, or be detected only through laboratory testing. Hematuria can arise from kidney disease, infections, stones, trauma, or urinary tract disorders.',
                'about_more' => '',
                'overview' => 'Hematuria refers to the presence of blood in the urine. It may appear visibly red or brown, or be detected only through laboratory testing. Hematuria can arise from kidney disease, infections, stones, trauma, or urinary tract disorders.',
                'symptoms' => [
            ['value' => 'Red, pink, or cola-colored urine'],
            ['value' => 'Pain during urination in some cases'],
            ['value' => 'Lower abdominal or flank pain'],
            ['value' => 'Frequent urination or urgency'],
            ['value' => 'Sometimes no symptoms apart from laboratory findings'],
        ],
                'causes' => [
            ['value' => 'Urinary tract infections'],
            ['value' => 'Kidney stones or urinary obstruction'],
            ['value' => 'Glomerulonephritis or kidney inflammation'],
            ['value' => 'Trauma or injury to urinary tract'],
            ['value' => 'Tumors or structural urinary abnormalities'],
        ],
                'risks' => [
            ['value' => 'Undiagnosed serious kidney disease'],
            ['value' => 'Recurrent urinary infections'],
            ['value' => 'Kidney damage if underlying condition persists'],
            ['value' => 'Anemia from persistent blood loss'],
            ['value' => 'Urinary obstruction complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Urine and imaging investigations'],
            ['value' => 'Antibiotics for infections'],
            ['value' => 'Kidney disease management'],
            ['value' => 'Surgical treatment for stones or structural problems'],
            ['value' => 'Regular nephrology or urology follow-up'],
        ],
                'recovery' => 'The prognosis depends on the underlying cause. Many cases resolve fully with proper treatment, while persistent hematuria requires detailed evaluation to prevent long-term kidney complications.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Hematuria',
                'meta_description' => 'Hematuria refers to the presence of blood in the urine. It may appear visibly red or brown, or be detected only through laboratory testing. Hematuria can arise ',
                'meta_keywords' => '',
            ]
        );
    }
}
