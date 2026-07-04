<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallstonesCholelithiasisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gallstones / Cholelithiasis')],
            [
                'name' => 'Gallstones / Cholelithiasis',
                'slug' => Str::slug('Gallstones / Cholelithiasis'),
                'h1' => 'Gallstones / Cholelithiasis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gallstones are hardened deposits formed inside the gallbladder that may block bile flow and cause pain or infection.',
                'about_more' => '',
                'overview' => 'Gallstones are hardened deposits formed inside the gallbladder that may block bile flow and cause pain or infection.',
                'symptoms' => [
            ['value' => 'Right upper abdominal pain'],
            ['value' => 'Pain after fatty meals'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Bloating and indigestion'],
            ['value' => 'Fever in complicated infections'],
        ],
                'causes' => [
            ['value' => 'Obesity and high-fat diet'],
            ['value' => 'Female gender and hormonal factors'],
            ['value' => 'Diabetes and metabolic syndrome'],
            ['value' => 'Rapid weight loss'],
            ['value' => 'Family history of gallstones'],
        ],
                'risks' => [
            ['value' => 'Acute cholecystitis'],
            ['value' => 'Pancreatitis due to gallstones'],
            ['value' => 'Bile duct obstruction'],
            ['value' => 'Gallbladder infection or rupture'],
            ['value' => 'Recurrent abdominal pain episodes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound evaluation'],
            ['value' => 'Pain management and dietary changes'],
            ['value' => 'Laparoscopic gallbladder removal'],
            ['value' => 'Antibiotics in infection cases'],
            ['value' => 'ERCP for bile duct stones'],
        ],
                'recovery' => 'Most patients recover completely after gallbladder surgery and experience significant relief from symptoms.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Gallstones / Cholelithiasis',
                'meta_description' => 'Gallstones are hardened deposits formed inside the gallbladder that may block bile flow and cause pain or infection.',
                'meta_keywords' => '',
            ]
        );
    }
}
