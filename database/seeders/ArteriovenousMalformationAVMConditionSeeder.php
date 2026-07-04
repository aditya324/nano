<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArteriovenousMalformationAVMConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Arteriovenous Malformation (AVM)')],
            [
                'name' => 'Arteriovenous Malformation (AVM)',
                'slug' => Str::slug('Arteriovenous Malformation (AVM)'),
                'h1' => 'Arteriovenous Malformation (AVM)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Arteriovenous malformation (AVM) is an abnormal connection between arteries and veins in the brain or spinal cord, bypassing normal capillaries. AVMs can disrupt blood flow and may rupture, causing bleeding, seizures, or neurological deficits.',
                'about_more' => '',
                'overview' => 'Arteriovenous malformation (AVM) is an abnormal connection between arteries and veins in the brain or spinal cord, bypassing normal capillaries. AVMs can disrupt blood flow and may rupture, causing bleeding, seizures, or neurological deficits.',
                'symptoms' => [
            ['value' => 'Headaches or seizures'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Vision or speech disturbances'],
            ['value' => 'Sudden brain hemorrhage symptoms'],
            ['value' => 'Balance and coordination difficulties'],
        ],
                'causes' => [
            ['value' => 'Congenital abnormal blood vessel development'],
            ['value' => 'Abnormal artery-vein connections present from birth'],
            ['value' => 'Increased pressure within abnormal vessels'],
            ['value' => 'Rare hereditary vascular conditions'],
            ['value' => 'Unknown developmental factors'],
        ],
                'risks' => [
            ['value' => 'Brain or spinal hemorrhage'],
            ['value' => 'Stroke and permanent neurological deficits'],
            ['value' => 'Seizures and chronic headaches'],
            ['value' => 'Paralysis or cognitive impairment'],
            ['value' => 'Life-threatening bleeding episodes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI and cerebral angiography evaluation'],
            ['value' => 'Microsurgical removal of AVM'],
            ['value' => 'Endovascular embolization procedures'],
            ['value' => 'Stereotactic radiosurgery'],
            ['value' => 'Neurological monitoring and rehabilitation'],
        ],
                'recovery' => 'Many AVMs can be successfully treated with modern neurosurgical techniques. Early diagnosis and treatment reduce the risk of bleeding and long-term neurological complications.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Arteriovenous Malformation (AVM)',
                'meta_description' => 'Arteriovenous malformation (AVM) is an abnormal connection between arteries and veins in the brain or spinal cord, bypassing normal capillaries. AVMs can disrup',
                'meta_keywords' => '',
            ]
        );
    }
}
