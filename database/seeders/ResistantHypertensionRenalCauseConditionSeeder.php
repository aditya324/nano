<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ResistantHypertensionRenalCauseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Resistant Hypertension (Renal Cause)')],
            [
                'name' => 'Resistant Hypertension (Renal Cause)',
                'slug' => Str::slug('Resistant Hypertension (Renal Cause)'),
                'h1' => 'Resistant Hypertension (Renal Cause)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Resistant hypertension is high blood pressure that remains uncontrolled despite the use of multiple blood pressure medications. Kidney disorders are among the most common underlying causes of resistant hypertension.',
                'about_more' => '',
                'overview' => 'Resistant hypertension is high blood pressure that remains uncontrolled despite the use of multiple blood pressure medications. Kidney disorders are among the most common underlying causes of resistant hypertension.',
                'symptoms' => [
            ['value' => 'Persistently elevated blood pressure'],
            ['value' => 'Headaches and blurred vision'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling due to fluid retention'],
            ['value' => 'Shortness of breath or chest discomfort in severe cases'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Renal artery stenosis'],
            ['value' => 'Excess salt and fluid retention'],
            ['value' => 'Hormonal disturbances related to kidneys'],
            ['value' => 'Poorly controlled diabetes or obesity'],
        ],
                'risks' => [
            ['value' => 'Stroke and heart attack risk'],
            ['value' => 'Progressive kidney failure'],
            ['value' => 'Heart enlargement and heart failure'],
            ['value' => 'Eye and blood vessel damage'],
            ['value' => 'Increased hospitalization and cardiovascular mortality'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Identification and treatment of renal causes'],
            ['value' => 'Combination blood pressure medications'],
            ['value' => 'Dietary salt restriction and weight management'],
            ['value' => 'Renal artery procedures when indicated'],
            ['value' => 'Continuous nephrology and cardiology monitoring'],
        ],
                'recovery' => 'Many patients achieve better blood pressure control once the underlying kidney cause is identified and treated. Long-term monitoring is essential to reduce complications.',
                'sort_order' => 45,
                'is_active' => true,
                'meta_title' => 'Resistant Hypertension (Renal Cause)',
                'meta_description' => 'Resistant hypertension is high blood pressure that remains uncontrolled despite the use of multiple blood pressure medications. Kidney disorders are among the m',
                'meta_keywords' => '',
            ]
        );
    }
}
