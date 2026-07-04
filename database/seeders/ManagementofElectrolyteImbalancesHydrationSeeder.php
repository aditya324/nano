<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofElectrolyteImbalancesHydrationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Electrolyte Imbalances & Hydration')],
            [
                'title' => 'Management of Electrolyte Imbalances & Hydration',
                'slug' => Str::slug('Management of Electrolyte Imbalances & Hydration'),
                'introduction' => 'Management of electrolyte imbalance and hydration involves correcting abnormal fluid, sodium, potassium, calcium, or acid-base levels caused by gastrointestinal disease, vomiting, diarrhea, liver disease, or severe illness. Prompt correction is important to maintain heart, brain, kidney, and muscle function.',
                'what_is' => 'Management options include: Intravenous fluid therapy Oral rehydration therapy Electrolyte replacement Acid-base correction Treatment of the underlying disease Common causes treated include: Severe diarrhea or vomiting Liver disease Pancreatitis Dehydration Intestinal disorders Continuous monitoring is often required in severe cases.',
                'symptoms' => [
            ['value' => 'Weakness or fatigue'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Confusion or dizziness'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Irregular heartbeat'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Cardiac rhythm disturbances'],
            ['value' => 'Kidney dysfunction'],
            ['value' => 'Seizures in severe imbalance'],
            ['value' => 'Fluid overload'],
            ['value' => 'Shock or organ failure'],
            ['value' => 'Post-Treatment Care'],
            ['value' => 'Maintain proper hydration daily'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Monitor fluid intake and output if advised'],
            ['value' => 'Attend follow-up blood testing'],
            ['value' => 'Seek emergency care for severe weakness or confusion'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [
            ['value' => 'Cardiac rhythm disturbances'],
            ['value' => 'Kidney dysfunction'],
            ['value' => 'Seizures in severe imbalance'],
            ['value' => 'Fluid overload'],
            ['value' => 'Shock or organ failure'],
            ['value' => 'Post-Treatment Care'],
            ['value' => 'Maintain proper hydration daily'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Monitor fluid intake and output if advised'],
            ['value' => 'Attend follow-up blood testing'],
            ['value' => 'Seek emergency care for severe weakness or confusion'],
        ],
                'long_term_outlook' => 'Early correction of electrolyte disorders improves recovery and prevents complications. Long-term disease management and hydration awareness help maintain metabolic stability and overall health.',
                'conclusion' => '',
                'seo_title' => 'Management of Electrolyte Imbalances & Hydration',
                'seo_description' => 'Management of electrolyte imbalance and hydration involves correcting abnormal fluid, sodium, potassium, calcium, or acid-base levels caused by gastrointestinal disease, vomiting, diarrhea, liver disease, or severe illness. Prompt correction is important to maintain heart, brain, kidney, and muscle function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
