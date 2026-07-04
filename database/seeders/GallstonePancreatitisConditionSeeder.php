<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallstonePancreatitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gallstone Pancreatitis')],
            [
                'name' => 'Gallstone Pancreatitis',
                'slug' => Str::slug('Gallstone Pancreatitis'),
                'h1' => 'Gallstone Pancreatitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gallstone pancreatitis occurs when gallstones block the pancreatic duct, causing inflammation of the pancreas. It is a potentially serious condition requiring prompt medical and surgical management.',
                'about_more' => '',
                'overview' => 'Gallstone pancreatitis occurs when gallstones block the pancreatic duct, causing inflammation of the pancreas. It is a potentially serious condition requiring prompt medical and surgical management.',
                'symptoms' => [
            ['value' => 'Severe upper abdominal pain'],
            ['value' => 'Pain radiating to the back'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever and abdominal tenderness'],
            ['value' => 'Jaundice in bile duct obstruction cases'],
        ],
                'causes' => [
            ['value' => 'Gallstones migrating into bile ducts'],
            ['value' => 'Blockage of pancreatic enzyme drainage'],
            ['value' => 'Obesity and fatty diet'],
            ['value' => 'Female gender and hormonal factors'],
            ['value' => 'Recurrent gallbladder disease'],
        ],
                'risks' => [
            ['value' => 'Severe pancreatic inflammation'],
            ['value' => 'Infection and pancreatic necrosis'],
            ['value' => 'Organ failure and shock'],
            ['value' => 'Recurrent pancreatitis attacks'],
            ['value' => 'Bile duct obstruction and jaundice'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hospital admission and monitoring'],
            ['value' => 'Intravenous fluids and pain relief'],
            ['value' => 'ERCP for bile duct stone removal'],
            ['value' => 'Laparoscopic gallbladder surgery'],
            ['value' => 'Intensive care support in severe cases'],
        ],
                'recovery' => 'Most patients recover well with timely treatment and gallbladder removal. Delayed management increases the risk of recurrence and complications.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'Gallstone Pancreatitis',
                'meta_description' => 'Gallstone pancreatitis occurs when gallstones block the pancreatic duct, causing inflammation of the pancreas. It is a potentially serious condition requiring p',
                'meta_keywords' => '',
            ]
        );
    }
}
