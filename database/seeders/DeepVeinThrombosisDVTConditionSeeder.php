<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeepVeinThrombosisDVTConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Deep Vein Thrombosis (DVT)')],
            [
                'name' => 'Deep Vein Thrombosis (DVT)',
                'slug' => Str::slug('Deep Vein Thrombosis (DVT)'),
                'h1' => 'Deep Vein Thrombosis (DVT)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Deep vein thrombosis is formation of blood clots in deep veins, usually in the legs. The condition can become life-threatening if clots travel to the lungs.',
                'about_more' => '',
                'overview' => 'Deep vein thrombosis is formation of blood clots in deep veins, usually in the legs. The condition can become life-threatening if clots travel to the lungs.',
                'symptoms' => [
            ['value' => 'Leg swelling and pain'],
            ['value' => 'Warmth and redness of the affected leg'],
            ['value' => 'Calf tenderness'],
            ['value' => 'Sudden leg discomfort'],
            ['value' => 'Sometimes no symptoms'],
        ],
                'causes' => [
            ['value' => 'Prolonged immobility or bed rest'],
            ['value' => 'Surgery or trauma'],
            ['value' => 'Pregnancy and hormone therapy'],
            ['value' => 'Cancer and clotting disorders'],
            ['value' => 'Smoking and obesity'],
        ],
                'risks' => [
            ['value' => 'Pulmonary embolism'],
            ['value' => 'Recurrent blood clots'],
            ['value' => 'Post-thrombotic syndrome'],
            ['value' => 'Chronic leg swelling'],
            ['value' => 'Venous ulcers and pain'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Anticoagulant medications'],
            ['value' => 'Compression stockings'],
            ['value' => 'Doppler ultrasound diagnosis'],
            ['value' => 'Thrombolytic therapy in severe cases'],
            ['value' => 'Inferior vena cava filter placement'],
        ],
                'recovery' => 'Most patients recover well with prompt anticoagulation therapy and preventive care.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Deep Vein Thrombosis (DVT)',
                'meta_description' => 'Deep vein thrombosis is formation of blood clots in deep veins, usually in the legs. The condition can become life-threatening if clots travel to the lungs.',
                'meta_keywords' => '',
            ]
        );
    }
}
