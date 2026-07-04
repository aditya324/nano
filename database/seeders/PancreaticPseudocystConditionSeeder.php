<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreaticPseudocystConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pancreatic Pseudocyst')],
            [
                'name' => 'Pancreatic Pseudocyst',
                'slug' => Str::slug('Pancreatic Pseudocyst'),
                'h1' => 'Pancreatic Pseudocyst',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A pancreatic pseudocyst is a fluid-filled sac that develops around the pancreas after pancreatitis or pancreatic injury.',
                'about_more' => '',
                'overview' => 'A pancreatic pseudocyst is a fluid-filled sac that develops around the pancreas after pancreatitis or pancreatic injury.',
                'symptoms' => [
            ['value' => 'Persistent abdominal pain'],
            ['value' => 'Abdominal swelling or fullness'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever if infected'],
            ['value' => 'Difficulty eating due to pressure symptoms'],
        ],
                'causes' => [
            ['value' => 'Acute or chronic pancreatitis'],
            ['value' => 'Alcohol-related pancreatic disease'],
            ['value' => 'Pancreatic trauma'],
            ['value' => 'Gallstone pancreatitis'],
            ['value' => 'Pancreatic duct obstruction'],
        ],
                'risks' => [
            ['value' => 'Infection and abscess formation'],
            ['value' => 'Rupture and internal bleeding'],
            ['value' => 'Compression of nearby organs'],
            ['value' => 'Recurrent pancreatitis'],
            ['value' => 'Severe abdominal infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound and CT scan monitoring'],
            ['value' => 'Pain management and nutritional support'],
            ['value' => 'Endoscopic drainage procedures'],
            ['value' => 'Surgical drainage in complicated cases'],
            ['value' => 'Treatment of underlying pancreatic disease'],
        ],
                'recovery' => 'Small pseudocysts may resolve spontaneously, while larger or infected cysts require intervention for complete recovery.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Pancreatic Pseudocyst',
                'meta_description' => 'A pancreatic pseudocyst is a fluid-filled sac that develops around the pancreas after pancreatitis or pancreatic injury.',
                'meta_keywords' => '',
            ]
        );
    }
}
