<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreatitisPancreaticPseudocystConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pancreatitis / Pancreatic Pseudocyst')],
            [
                'name' => 'Pancreatitis / Pancreatic Pseudocyst',
                'slug' => Str::slug('Pancreatitis / Pancreatic Pseudocyst'),
                'h1' => 'Pancreatitis / Pancreatic Pseudocyst',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pancreatitis is inflammation of the pancreas that may be acute or chronic. A pancreatic pseudocyst is a fluid-filled collection that develops after pancreatic inflammation or injury.',
                'about_more' => '',
                'overview' => 'Pancreatitis is inflammation of the pancreas that may be acute or chronic. A pancreatic pseudocyst is a fluid-filled collection that develops after pancreatic inflammation or injury.',
                'symptoms' => [
            ['value' => 'Severe upper abdominal pain radiating to the back'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever and abdominal tenderness'],
            ['value' => 'Loss of appetite and weight loss'],
            ['value' => 'Abdominal swelling in pseudocyst cases'],
        ],
                'causes' => [
            ['value' => 'Gallstones blocking pancreatic ducts'],
            ['value' => 'Excessive alcohol consumption'],
            ['value' => 'High triglyceride levels'],
            ['value' => 'Pancreatic trauma or surgery'],
            ['value' => 'Certain medications and infections'],
        ],
                'risks' => [
            ['value' => 'Pancreatic tissue destruction'],
            ['value' => 'Infection and abscess formation'],
            ['value' => 'Pseudocyst rupture or bleeding'],
            ['value' => 'Organ failure in severe pancreatitis'],
            ['value' => 'Chronic digestive and diabetic complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hospitalization and supportive care'],
            ['value' => 'Intravenous fluids and pain management'],
            ['value' => 'Nutritional and dietary support'],
            ['value' => 'Drainage of pancreatic pseudocysts'],
            ['value' => 'Surgery for complicated or chronic cases'],
        ],
                'recovery' => 'Mild pancreatitis often resolves with treatment, while severe disease may require prolonged hospitalization and surgical care.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Pancreatitis / Pancreatic Pseudocyst',
                'meta_description' => 'Pancreatitis is inflammation of the pancreas that may be acute or chronic. A pancreatic pseudocyst is a fluid-filled collection that develops after pancreatic i',
                'meta_keywords' => '',
            ]
        );
    }
}
