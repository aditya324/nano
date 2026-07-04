<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FluoroscopyContrastStudiesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fluoroscopy / Contrast Studies')],
            [
                'name' => 'Fluoroscopy / Contrast Studies',
                'slug' => Str::slug('Fluoroscopy / Contrast Studies'),
                'h1' => 'Fluoroscopy / Contrast Studies',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fluoroscopy and contrast studies are specialized imaging procedures that use real-time X-ray imaging along with contrast materials to evaluate the structure and function of internal organs and body systems. These procedures help healthcare professionals diagnose abnormalities affecting the digestive system, urinary tract, and other internal structures.',
                'about_more' => '',
                'overview' => 'Fluoroscopy provides continuous X-ray imaging that allows visualization of movement within the body in real time. A barium swallow study is commonly used to evaluate the esophagus and swallowing function, while Intravenous Urography (IVU) assesses the kidneys, ureters, and urinary bladder using contrast dye. These procedures help detect blockages, structural abnormalities, reflux, stones, tumors, and functional disorders.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing or persistent throat discomfort'],
            ['value' => 'Abdominal pain or digestive problems'],
            ['value' => 'Urinary symptoms such as pain or blood in urine'],
            ['value' => 'Recurrent urinary tract infections or kidney-related symptoms'],
            ['value' => 'Unexplained gastrointestinal or urinary abnormalities'],
        ],
                'causes' => [
            ['value' => 'Evaluation of swallowing disorders and esophageal abnormalities'],
            ['value' => 'Detection of gastrointestinal narrowing, ulcers, or reflux'],
            ['value' => 'Assessment of kidney stones and urinary tract obstruction'],
            ['value' => 'Imaging of urinary system structure and function'],
            ['value' => 'Monitoring digestive or urinary tract disorders and treatment outcomes'],
        ],
                'risks' => [
            ['value' => 'Exposure to low levels of ionizing radiation'],
            ['value' => 'Allergic reactions to contrast material in rare cases'],
            ['value' => 'Temporary nausea, bloating, or constipation after contrast use'],
            ['value' => 'Rare kidney-related complications from contrast dye'],
            ['value' => 'Special precautions required during pregnancy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Fluoroscopy and contrast studies support diagnosis, treatment planning, and monitoring of gastrointestinal and urinary tract conditions. These procedures help guide medical management, surgical planning, minimally invasive interventions, and long-term follow-up care across multiple specialties.'],
            ['value' => 'Drinking plenty of fluids to help eliminate contrast material'],
            ['value' => 'Monitoring for allergic reactions or unusual symptoms'],
            ['value' => 'Temporary changes in stool color may occur after barium studies'],
            ['value' => 'Following dietary or medication instructions provided by healthcare professionals'],
            ['value' => 'Attending follow-up consultations if abnormalities are detected'],
        ],
                'recovery' => 'The long-term outlook with fluoroscopy and contrast imaging studies is generally very positive because these procedures support accurate diagnosis and early detection of digestive and urinary tract disorders. Timely imaging evaluation, appropriate treatment, and regular medical follow-up can significantly improve patient outcomes and long-term health management. _______________________________ 10. Nuclear Medicine / PET-CT Imaging Nuclear Medicine / PET-CT Imaging Procedures',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Fluoroscopy / Contrast Studies',
                'meta_description' => 'Fluoroscopy and contrast studies are specialized imaging procedures that use real-time X-ray imaging along with contrast materials to evaluate the structure and',
                'meta_keywords' => '',
            ]
        );
    }
}
