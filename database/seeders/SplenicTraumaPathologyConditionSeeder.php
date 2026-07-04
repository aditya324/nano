<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SplenicTraumaPathologyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Splenic Trauma / Pathology')],
            [
                'name' => 'Splenic Trauma / Pathology',
                'slug' => Str::slug('Splenic Trauma / Pathology'),
                'h1' => 'Splenic Trauma / Pathology',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Splenic trauma or pathology includes injuries, enlargement, cysts, infections, or tumors affecting the spleen. The spleen plays an important role in blood filtration and immunity.',
                'about_more' => '',
                'overview' => 'Splenic trauma or pathology includes injuries, enlargement, cysts, infections, or tumors affecting the spleen. The spleen plays an important role in blood filtration and immunity.',
                'symptoms' => [
            ['value' => 'Pain in the left upper abdomen'],
            ['value' => 'Pain radiating to the left shoulder'],
            ['value' => 'Abdominal swelling or tenderness'],
            ['value' => 'Fever or fatigue in infection-related cases'],
            ['value' => 'Signs of blood loss or shock after trauma'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents or blunt trauma'],
            ['value' => 'Blood disorders causing spleen enlargement'],
            ['value' => 'Infections affecting the spleen'],
            ['value' => 'Splenic cysts or tumors'],
            ['value' => 'Liver disease and portal hypertension'],
        ],
                'risks' => [
            ['value' => 'Internal bleeding from splenic rupture'],
            ['value' => 'Severe blood loss and shock'],
            ['value' => 'Infection and abscess formation'],
            ['value' => 'Reduced immunity after spleen removal'],
            ['value' => 'Compression of nearby organs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency imaging and trauma evaluation'],
            ['value' => 'Observation for stable minor injuries'],
            ['value' => 'Splenectomy for severe damage or disease'],
            ['value' => 'Vaccination after spleen removal'],
            ['value' => 'Treatment of underlying blood or infectious disorders'],
        ],
                'recovery' => 'Minor splenic injuries may heal without surgery. Severe trauma requires urgent surgical care to prevent life-threatening bleeding.',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Splenic Trauma / Pathology',
                'meta_description' => 'Splenic trauma or pathology includes injuries, enlargement, cysts, infections, or tumors affecting the spleen. The spleen plays an important role in blood filtr',
                'meta_keywords' => '',
            ]
        );
    }
}
