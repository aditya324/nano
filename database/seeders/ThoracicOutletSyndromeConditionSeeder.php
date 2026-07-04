<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThoracicOutletSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thoracic Outlet Syndrome')],
            [
                'name' => 'Thoracic Outlet Syndrome',
                'slug' => Str::slug('Thoracic Outlet Syndrome'),
                'h1' => 'Thoracic Outlet Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thoracic outlet syndrome occurs when nerves or blood vessels are compressed between the collarbone and first rib, affecting the arm and shoulder.',
                'about_more' => '',
                'overview' => 'Thoracic outlet syndrome occurs when nerves or blood vessels are compressed between the collarbone and first rib, affecting the arm and shoulder.',
                'symptoms' => [
            ['value' => 'Arm pain and numbness'],
            ['value' => 'Tingling in fingers'],
            ['value' => 'Weakness of the hand or arm'],
            ['value' => 'Swelling or discoloration of the arm'],
            ['value' => 'Pain worsening with arm movement'],
        ],
                'causes' => [
            ['value' => 'Congenital rib abnormalities'],
            ['value' => 'Repetitive shoulder movements'],
            ['value' => 'Trauma or neck injury'],
            ['value' => 'Poor posture'],
            ['value' => 'Muscle enlargement or compression'],
        ],
                'risks' => [
            ['value' => 'Chronic nerve damage'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Reduced arm circulation'],
            ['value' => 'Persistent pain and weakness'],
            ['value' => 'Functional disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Physiotherapy and posture correction'],
            ['value' => 'Pain management medications'],
            ['value' => 'Blood thinners for vascular cases'],
            ['value' => 'Surgical decompression procedures'],
            ['value' => 'Lifestyle and activity modification'],
        ],
                'recovery' => 'Many patients improve with physiotherapy, while severe vascular compression may require surgery.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Thoracic Outlet Syndrome',
                'meta_description' => 'Thoracic outlet syndrome occurs when nerves or blood vessels are compressed between the collarbone and first rib, affecting the arm and shoulder.',
                'meta_keywords' => '',
            ]
        );
    }
}
