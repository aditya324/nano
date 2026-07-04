<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricImagingProtocolsLowDoseSafetyMeasuresConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Imaging Protocols (Low Dose & Safety Measures)')],
            [
                'name' => 'Pediatric Imaging Protocols (Low Dose & Safety Measures)',
                'slug' => Str::slug('Pediatric Imaging Protocols (Low Dose & Safety Measures)'),
                'h1' => 'Pediatric Imaging Protocols (Low Dose & Safety Measures)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric imaging protocols are specialized diagnostic imaging procedures designed specifically for infants, children, and adolescents using low-dose radiation techniques and enhanced safety measures. These protocols help ensure accurate imaging while minimizing radiation exposure and maintaining patient comfort and safety during medical evaluation.',
                'about_more' => '',
                'overview' => 'Pediatric imaging protocols are carefully adapted according to the child’s age, size, medical condition, and imaging requirements. Low-dose CT scans, child-specific X-ray settings, ultrasound imaging, MRI safety protocols, and radiation protection measures are commonly used to reduce unnecessary exposure while maintaining high-quality diagnostic imaging. Pediatric imaging is widely used to evaluate congenital abnormalities, infections, injuries, developmental disorders, neurological conditions, and organ-related diseases in children.',
                'symptoms' => [
            ['value' => 'Fever, pain, or unexplained swelling'],
            ['value' => 'Developmental or growth abnormalities'],
            ['value' => 'Breathing difficulties or chest-related symptoms'],
            ['value' => 'Head injury, neurological symptoms, or seizures'],
            ['value' => 'Abdominal pain, trauma, or musculoskeletal complaints'],
        ],
                'causes' => [
            ['value' => 'Congenital and developmental abnormalities'],
            ['value' => 'Pediatric infections or inflammatory conditions'],
            ['value' => 'Trauma, falls, or sports-related injuries'],
            ['value' => 'Neurological or respiratory disorders in children'],
            ['value' => 'Conditions requiring long-term pediatric monitoring and evaluation'],
        ],
                'risks' => [
            ['value' => 'Minimal radiation exposure during certain imaging studies'],
            ['value' => 'Anxiety or movement during imaging procedures in children'],
            ['value' => 'Need for sedation in some MRI or prolonged imaging procedures'],
            ['value' => 'Rare allergic reactions to contrast material when used'],
            ['value' => 'Limited cooperation affecting image quality in younger children'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Low-dose pediatric X-ray and CT imaging evaluation'],
            ['value' => 'Pediatric ultrasound and MRI for radiation-free imaging when appropriate'],
            ['value' => 'Sedation-assisted imaging for accurate pediatric assessment when required'],
            ['value' => 'Long-term monitoring of developmental and congenital conditions'],
            ['value' => 'Multidisciplinary pediatric care and imaging follow-up support'],
        ],
                'recovery' => 'The long-term outlook with pediatric imaging protocols is highly positive because low-dose and child-focused safety measures help ensure accurate diagnosis while minimizing radiation exposure and procedure-related risks. Early imaging evaluation, regular pediatric follow-up, timely medical intervention, and appropriate developmental care can significantly improve long-term health outcomes and child development.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Pediatric Imaging Protocols (Low Dose & Safety Measures)',
                'meta_description' => 'Pediatric imaging protocols are specialized diagnostic imaging procedures designed specifically for infants, children, and adolescents using low-dose radiation ',
                'meta_keywords' => '',
            ]
        );
    }
}
