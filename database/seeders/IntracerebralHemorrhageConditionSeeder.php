<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntracerebralHemorrhageConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Intracerebral Hemorrhage')],
            [
                'name' => 'Intracerebral Hemorrhage',
                'slug' => Str::slug('Intracerebral Hemorrhage'),
                'h1' => 'Intracerebral Hemorrhage',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Intracerebral hemorrhage is bleeding directly into brain tissue, commonly caused by uncontrolled hypertension, trauma, or vascular abnormalities. The bleeding damages brain cells and increases pressure inside the skull.',
                'about_more' => '',
                'overview' => 'Intracerebral hemorrhage is bleeding directly into brain tissue, commonly caused by uncontrolled hypertension, trauma, or vascular abnormalities. The bleeding damages brain cells and increases pressure inside the skull.',
                'symptoms' => [
            ['value' => 'Sudden severe headache'],
            ['value' => 'Weakness or paralysis on one side'],
            ['value' => 'Difficulty speaking or understanding speech'],
            ['value' => 'Vomiting and loss of balance'],
            ['value' => 'Reduced consciousness or coma'],
        ],
                'causes' => [
            ['value' => 'Chronic uncontrolled hypertension'],
            ['value' => 'Brain trauma or injury'],
            ['value' => 'Ruptured vascular malformations'],
            ['value' => 'Blood-thinning medications'],
            ['value' => 'Brain tumors or bleeding disorders'],
        ],
                'risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Brain swelling and increased pressure'],
            ['value' => 'Seizures and cognitive impairment'],
            ['value' => 'Paralysis and speech difficulties'],
            ['value' => 'Life-threatening brain damage or death'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Intensive emergency neurological care'],
            ['value' => 'Blood pressure stabilization'],
            ['value' => 'Surgical removal of blood in selected cases'],
            ['value' => 'Ventilator and ICU support if necessary'],
            ['value' => 'Long-term rehabilitation therapy'],
        ],
                'recovery' => 'Recovery depends on the size and location of bleeding and the speed of treatment. Early medical intervention improves survival and neurological function.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Intracerebral Hemorrhage',
                'meta_description' => 'Intracerebral hemorrhage is bleeding directly into brain tissue, commonly caused by uncontrolled hypertension, trauma, or vascular abnormalities. The bleeding d',
                'meta_keywords' => '',
            ]
        );
    }
}
