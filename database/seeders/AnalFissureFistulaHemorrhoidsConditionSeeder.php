<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnalFissureFistulaHemorrhoidsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Anal Fissure / Fistula / Hemorrhoids')],
            [
                'name' => 'Anal Fissure / Fistula / Hemorrhoids',
                'slug' => Str::slug('Anal Fissure / Fistula / Hemorrhoids'),
                'h1' => 'Anal Fissure / Fistula / Hemorrhoids',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'These are common anorectal conditions causing pain, swelling, bleeding, and discomfort around the anal region.',
                'about_more' => '',
                'overview' => 'These are common anorectal conditions causing pain, swelling, bleeding, and discomfort around the anal region.',
                'symptoms' => [
            ['value' => 'Pain during bowel movements'],
            ['value' => 'Bright red rectal bleeding'],
            ['value' => 'Swelling or lumps near the anus'],
            ['value' => 'Discharge or irritation around the anal area'],
            ['value' => 'Chronic itching and discomfort'],
        ],
                'causes' => [
            ['value' => 'Chronic constipation or diarrhea'],
            ['value' => 'Straining during bowel movements'],
            ['value' => 'Anal infections or abscesses'],
            ['value' => 'Pregnancy and obesity'],
            ['value' => 'Low-fiber diet'],
        ],
                'risks' => [
            ['value' => 'Severe pain and infection'],
            ['value' => 'Chronic non-healing fissures'],
            ['value' => 'Recurrent fistula formation'],
            ['value' => 'Abscess development'],
            ['value' => 'Anemia due to repeated bleeding'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'High-fiber diet and stool softeners'],
            ['value' => 'Sitz bath and local medications'],
            ['value' => 'Antibiotics for infection'],
            ['value' => 'Minimally invasive procedures'],
            ['value' => 'Surgery for fistula or severe hemorrhoids'],
        ],
                'recovery' => 'Most patients recover well with lifestyle changes and proper treatment. Surgical outcomes are usually excellent when required.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Anal Fissure / Fistula / Hemorrhoids',
                'meta_description' => 'These are common anorectal conditions causing pain, swelling, bleeding, and discomfort around the anal region.',
                'meta_keywords' => '',
            ]
        );
    }
}
