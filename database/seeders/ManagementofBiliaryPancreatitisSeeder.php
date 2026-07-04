<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofBiliaryPancreatitisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Biliary Pancreatitis')],
            [
                'title' => 'Management of Biliary Pancreatitis',
                'slug' => Str::slug('Management of Biliary Pancreatitis'),
                'introduction' => 'Management of biliary pancreatitis involves medical and surgical treatment for inflammation of the pancreas caused by gallstones blocking the bile duct or pancreatic duct. Prompt treatment is important to prevent severe complications and recurrent attacks.',
                'what_is' => 'Biliary pancreatitis occurs when gallstones obstruct the flow of digestive enzymes, leading to pancreatic inflammation. Treatment may include: Intravenous fluids Pain management Antibiotics when required Nutritional support ERCP for bile duct stone removal Cholecystectomy to prevent recurrence Severe cases may require ICU monitoring and advanced supportive care. Early gallbladder removal after recovery is often recommended.',
                'symptoms' => [
            ['value' => 'Severe upper abdominal pain'],
            ['value' => 'Back pain radiating from abdomen'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever or jaundice'],
            ['value' => 'Abdominal tenderness and bloating'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe pancreatic infection'],
            ['value' => 'Organ failure in critical cases'],
            ['value' => 'Pancreatic necrosis'],
            ['value' => 'Recurrent pancreatitis'],
            ['value' => 'Bile duct obstruction complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow low-fat dietary recommendations'],
            ['value' => 'Avoid alcohol completely'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Maintain hydration and nutrition'],
            ['value' => 'Attend regular surgical and gastroenterology follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe pancreatic infection'],
            ['value' => 'Organ failure in critical cases'],
            ['value' => 'Pancreatic necrosis'],
            ['value' => 'Recurrent pancreatitis'],
            ['value' => 'Bile duct obstruction complications'],
        ],
                'long_term_outlook' => 'With timely treatment and gallstone management, many patients recover well and can prevent future episodes of pancreatitis and biliary complications.',
                'conclusion' => '',
                'seo_title' => 'Management of Biliary Pancreatitis',
                'seo_description' => 'Management of biliary pancreatitis involves medical and surgical treatment for inflammation of the pancreas caused by gallstones blocking the bile duct or pancreatic duct. Prompt treatment is important to prevent severe complications and recurrent attacks.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
