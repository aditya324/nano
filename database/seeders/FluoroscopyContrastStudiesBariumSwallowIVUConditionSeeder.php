<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FluoroscopyContrastStudiesBariumSwallowIVUConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fluoroscopy / Contrast Studies (Barium Swallow & IVU)')],
            [
                'name' => 'Fluoroscopy / Contrast Studies (Barium Swallow & IVU)',
                'slug' => Str::slug('Fluoroscopy / Contrast Studies (Barium Swallow & IVU)'),
                'h1' => 'Fluoroscopy / Contrast Studies (Barium Swallow & IVU)',
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
            ['value' => 'Esophageal narrowing or swallowing disorders'],
            ['value' => 'Kidney stones or urinary tract obstruction'],
            ['value' => 'Gastrointestinal reflux or structural abnormalities'],
            ['value' => 'Infections or inflammation affecting digestive or urinary organs'],
            ['value' => 'Tumors, strictures, or congenital abnormalities'],
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
            ['value' => 'Fluoroscopic and contrast imaging evaluation'],
            ['value' => 'Diagnostic assessment of swallowing and urinary tract disorders'],
            ['value' => 'Monitoring gastrointestinal or urinary system abnormalities'],
            ['value' => 'Image-guided planning for medical or surgical treatment'],
            ['value' => 'Follow-up imaging and long-term disease monitoring'],
        ],
                'recovery' => 'The long-term outlook with fluoroscopy and contrast imaging studies is generally very positive because these procedures support accurate diagnosis and early detection of digestive and urinary tract disorders. Timely imaging evaluation, appropriate treatment, regular follow-up, and healthy lifestyle practices can significantly improve patient outcomes and long-term health management.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Fluoroscopy / Contrast Studies (Barium Swallow & IVU)',
                'meta_description' => 'Fluoroscopy and contrast studies are specialized imaging procedures that use real-time X-ray imaging along with contrast materials to evaluate the structure and',
                'meta_keywords' => '',
            ]
        );
    }
}
