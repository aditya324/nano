<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuralTubeDefectsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neural Tube Defects')],
            [
                'name' => 'Neural Tube Defects',
                'slug' => Str::slug('Neural Tube Defects'),
                'h1' => 'Neural Tube Defects',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neural tube defects are serious congenital abnormalities involving incomplete development of the brain, spinal cord, or surrounding protective structures during early fetal growth. These defects occur when the neural tube fails to close completely during pregnancy. The severity can range from mild spinal abnormalities to major neurological disability affecting movement, sensation, bladder function, and brain development. Early diagnosis and neurosurgical care are important to reduce complications and improve long-term outcomes.',
                'about_more' => '',
                'overview' => 'Neural tube defects are serious congenital abnormalities involving incomplete development of the brain, spinal cord, or surrounding protective structures during early fetal growth. These defects occur when the neural tube fails to close completely during pregnancy. The severity can range from mild spinal abnormalities to major neurological disability affecting movement, sensation, bladder function, and brain development. Early diagnosis and neurosurgical care are important to reduce complications and improve long-term outcomes.',
                'symptoms' => [
            ['value' => 'Visible swelling or opening over the spine'],
            ['value' => 'Weakness or paralysis of the lower limbs'],
            ['value' => 'Difficulty walking or delayed motor development'],
            ['value' => 'Bladder and bowel control problems'],
            ['value' => 'Hydrocephalus and developmental delay in severe cases'],
        ],
                'causes' => [
            ['value' => 'Folic acid deficiency during pregnancy'],
            ['value' => 'Genetic predisposition and family history'],
            ['value' => 'Maternal diabetes or obesity'],
            ['value' => 'Certain medications during pregnancy'],
            ['value' => 'Environmental and nutritional factors affecting fetal development'],
        ],
                'risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Paralysis and mobility limitations'],
            ['value' => 'Recurrent spinal infections and skin breakdown'],
            ['value' => 'Bladder, bowel, and kidney complications'],
            ['value' => 'Hydrocephalus and cognitive impairment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Prenatal diagnosis with ultrasound and fetal screening'],
            ['value' => 'Neurosurgical repair after birth'],
            ['value' => 'Management of hydrocephalus with shunt procedures'],
            ['value' => 'Physiotherapy and rehabilitation support'],
            ['value' => 'Long-term multidisciplinary neurological care'],
        ],
                'recovery' => 'The prognosis depends on the severity and level of spinal involvement. Early surgery, rehabilitation, and supportive care significantly improve survival, mobility, and quality of life.',
                'sort_order' => 30,
                'is_active' => true,
                'meta_title' => 'Neural Tube Defects',
                'meta_description' => 'Neural tube defects are serious congenital abnormalities involving incomplete development of the brain, spinal cord, or surrounding protective structures during',
                'meta_keywords' => '',
            ]
        );
    }
}
