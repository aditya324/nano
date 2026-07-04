<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaparoscopicOpenCholecystectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laparoscopic / Open Cholecystectomy')],
            [
                'title' => 'Laparoscopic / Open Cholecystectomy',
                'slug' => Str::slug('Laparoscopic / Open Cholecystectomy'),
                'introduction' => 'Cholecystectomy is the surgical removal of the gallbladder, commonly performed for gallstones, gallbladder inflammation, infection, or gallstone-related complications. The surgery may be done laparoscopically through small incisions or through an open surgical approach in complex cases.',
                'what_is' => 'Management options include: Laparoscopic gallbladder removal Open cholecystectomy Intraoperative cholangiography when required Antibiotic and pain management Postoperative dietary guidance Common conditions treated include: Gallstones Acute or chronic cholecystitis Gallstone pancreatitis Gallbladder polyps Biliary colic Early treatment helps prevent serious biliary complications.',
                'symptoms' => [
            ['value' => 'Right upper abdominal pain'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Fever during infection'],
            ['value' => 'Indigestion after fatty meals'],
            ['value' => 'Jaundice in some cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Bile duct injury'],
            ['value' => 'Leakage of bile'],
            ['value' => 'Postoperative pain or bloating'],
            ['value' => 'Rare conversion to open surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow low-fat dietary recommendations initially'],
            ['value' => 'Keep surgical wounds clean and dry'],
            ['value' => 'Avoid heavy lifting for advised duration'],
            ['value' => 'Take prescribed medications regularly'],
            ['value' => 'Attend follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Bile duct injury'],
            ['value' => 'Leakage of bile'],
            ['value' => 'Postoperative pain or bloating'],
            ['value' => 'Rare conversion to open surgery'],
        ],
                'long_term_outlook' => 'Most patients recover completely and return to normal activities quickly. Removal of the gallbladder usually provides long-term relief from pain, infection, and gallstone-related complications.',
                'conclusion' => '',
                'seo_title' => 'Laparoscopic / Open Cholecystectomy',
                'seo_description' => 'Cholecystectomy is the surgical removal of the gallbladder, commonly performed for gallstones, gallbladder inflammation, infection, or gallstone-related complications. The surgery may be done laparoscopically through small incisions or through an open surgical approach in complex cases.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
