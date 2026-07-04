<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricImagingProtocolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Imaging Protocols')],
            [
                'name' => 'Pediatric Imaging Protocols',
                'slug' => Str::slug('Pediatric Imaging Protocols'),
                'h1' => 'Pediatric Imaging Protocols',
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
            ['value' => 'Evaluation of congenital and developmental disorders'],
            ['value' => 'Diagnosis of pediatric infections and injuries'],
            ['value' => 'Imaging of brain, chest, abdomen, bones, and joints'],
            ['value' => 'Monitoring growth abnormalities and chronic pediatric conditions'],
            ['value' => 'Follow-up imaging with radiation safety optimization'],
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
            ['value' => 'Pediatric imaging protocols support safe diagnosis, treatment planning, emergency evaluation, surgical assessment, and long-term monitoring of childhood medical conditions. These protocols help healthcare professionals obtain accurate diagnostic information while prioritizing radiation reduction, child safety, and age-appropriate care.'],
            ['value' => 'Most children can resume normal activities immediately after imaging'],
            ['value' => 'Hydration may be advised after contrast-enhanced studies'],
            ['value' => 'Parents should monitor for unusual symptoms after sedation or contrast use'],
            ['value' => 'Follow-up imaging or specialist consultation may be recommended'],
            ['value' => 'Ongoing medical monitoring may be required for chronic pediatric conditions'],
        ],
                'recovery' => 'The long-term outlook with pediatric imaging protocols is highly positive because low-dose and child-focused safety measures help ensure accurate diagnosis while minimizing radiation exposure and procedure-related risks. Early imaging evaluation, regular pediatric follow-up, and appropriate medical care can significantly improve long-term health outcomes and child development. ______________________________ 17. Trauma Imaging Protocols (Whole Body CT, FAST Scan) Trauma Imaging Protocols (Whole Body CT & FAST Scan) Procedures',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Pediatric Imaging Protocols',
                'meta_description' => 'Pediatric imaging protocols are specialized diagnostic imaging procedures designed specifically for infants, children, and adolescents using low-dose radiation ',
                'meta_keywords' => '',
            ]
        );
    }
}
