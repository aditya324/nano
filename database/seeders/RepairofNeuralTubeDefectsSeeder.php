<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RepairofNeuralTubeDefectsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Repair of Neural Tube Defects')],
            [
                'title' => 'Repair of Neural Tube Defects',
                'slug' => Str::slug('Repair of Neural Tube Defects'),
                'introduction' => 'Repair of neural tube defects is a pediatric neurosurgical procedure performed to correct congenital abnormalities involving incomplete closure of the brain, spine, or spinal cord during fetal development. Early surgical repair helps reduce infection risk and preserve neurological function. Common neural tube defects include meningocele and myelomeningocele.',
                'what_is' => 'The surgery includes: Closure of exposed spinal tissues Protection of nerves and spinal cord Prevention of infection Reconstruction of affected tissues Management of associated hydrocephalus when necessary The procedure is usually performed soon after birth to reduce complications. Long-term multidisciplinary care may involve neurology, rehabilitation, orthopedics, and urology specialists.',
                'symptoms' => [
            ['value' => 'Visible spinal swelling at birth'],
            ['value' => 'Weakness in lower limbs'],
            ['value' => 'Bladder or bowel dysfunction'],
            ['value' => 'Hydrocephalus'],
            ['value' => 'Developmental difficulties'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Hydrocephalus progression'],
            ['value' => 'Wound complications'],
            ['value' => 'Long-term mobility limitations'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain careful wound care'],
            ['value' => 'Attend regular pediatric neurosurgical follow-up'],
            ['value' => 'Monitor for hydrocephalus symptoms'],
            ['value' => 'Continue physiotherapy and rehabilitation'],
            ['value' => 'Follow bladder and bowel care recommendations'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Hydrocephalus progression'],
            ['value' => 'Wound complications'],
            ['value' => 'Long-term mobility limitations'],
        ],
                'long_term_outlook' => 'Early repair improves survival and neurological protection in children with neural tube defects. Long-term rehabilitation and multidisciplinary care support better functional outcomes.',
                'conclusion' => '',
                'seo_title' => 'Repair of Neural Tube Defects',
                'seo_description' => 'Repair of neural tube defects is a pediatric neurosurgical procedure performed to correct congenital abnormalities involving incomplete closure of the brain, spine, or spinal cord during fetal development. Early surgical repair helps reduce infection risk and preserve neurological function. Common neural tube defects include meningocele and myelomeningocele.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
