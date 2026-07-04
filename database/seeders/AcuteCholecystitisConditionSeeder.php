<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteCholecystitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Cholecystitis')],
            [
                'name' => 'Acute Cholecystitis',
                'slug' => Str::slug('Acute Cholecystitis'),
                'h1' => 'Acute Cholecystitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute cholecystitis is sudden inflammation of the gallbladder, commonly caused by blockage from gallstones. It is associated with severe abdominal pain and may lead to infection or gallbladder rupture if untreated.',
                'about_more' => '',
                'overview' => 'Acute cholecystitis is sudden inflammation of the gallbladder, commonly caused by blockage from gallstones. It is associated with severe abdominal pain and may lead to infection or gallbladder rupture if untreated.',
                'symptoms' => [
            ['value' => 'Severe pain in the right upper abdomen'],
            ['value' => 'Fever and chills'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Tenderness over the gallbladder area'],
            ['value' => 'Pain worsening after meals'],
        ],
                'causes' => [
            ['value' => 'Gallstone obstruction of the bile outlet'],
            ['value' => 'Bacterial infection of the gallbladder'],
            ['value' => 'Bile stasis and inflammation'],
            ['value' => 'Severe illness or trauma in rare cases'],
            ['value' => 'Obesity and unhealthy dietary habits'],
        ],
                'risks' => [
            ['value' => 'Gallbladder rupture'],
            ['value' => 'Abscess formation'],
            ['value' => 'Bile leakage into the abdomen'],
            ['value' => 'Sepsis and systemic infection'],
            ['value' => 'Pancreatitis or bile duct obstruction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hospital admission and monitoring'],
            ['value' => 'Intravenous fluids and antibiotics'],
            ['value' => 'Pain management and fasting initially'],
            ['value' => 'Laparoscopic cholecystectomy'],
            ['value' => 'Drainage procedures in high-risk patients'],
        ],
                'recovery' => 'Early surgical treatment usually leads to excellent recovery. Delayed treatment may result in serious abdominal infection.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Acute Cholecystitis',
                'meta_description' => 'Acute cholecystitis is sudden inflammation of the gallbladder, commonly caused by blockage from gallstones. It is associated with severe abdominal pain and may ',
                'meta_keywords' => '',
            ]
        );
    }
}
