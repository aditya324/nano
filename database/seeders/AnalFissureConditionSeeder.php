<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnalFissureConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Anal Fissure')],
            [
                'name' => 'Anal Fissure',
                'slug' => Str::slug('Anal Fissure'),
                'h1' => 'Anal Fissure',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An anal fissure is a small tear or crack in the lining of the anal canal, usually caused by passing hard stools or excessive straining during bowel movements. It commonly causes severe pain and bleeding during defecation.',
                'about_more' => '',
                'overview' => 'An anal fissure is a small tear or crack in the lining of the anal canal, usually caused by passing hard stools or excessive straining during bowel movements. It commonly causes severe pain and bleeding during defecation.',
                'symptoms' => [
            ['value' => 'Sharp pain during and after passing stool'],
            ['value' => 'Bright red bleeding on toilet paper or stool'],
            ['value' => 'Burning sensation around the anus'],
            ['value' => 'Visible crack or tear near the anal opening'],
            ['value' => 'Fear of bowel movement due to pain'],
        ],
                'causes' => [
            ['value' => 'Chronic constipation and hard stools'],
            ['value' => 'Excessive straining during bowel movements'],
            ['value' => 'Chronic diarrhea and irritation'],
            ['value' => 'Low-fiber diet and dehydration'],
            ['value' => 'Childbirth-related anal trauma'],
        ],
                'risks' => [
            ['value' => 'Chronic fissure formation'],
            ['value' => 'Severe pain affecting daily activities'],
            ['value' => 'Muscle spasm of the anal sphincter'],
            ['value' => 'Secondary infection'],
            ['value' => 'Difficulty maintaining normal bowel habits'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'High-fiber diet and increased fluid intake'],
            ['value' => 'Stool softeners and laxatives'],
            ['value' => 'Sitz bath and local pain relief ointments'],
            ['value' => 'Medications to relax anal sphincter muscles'],
            ['value' => 'Lateral internal sphincterotomy surgery for chronic fissures'],
        ],
                'recovery' => 'Most acute fissures heal with conservative treatment and bowel habit correction. Chronic fissures may require surgical intervention for permanent relief.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Anal Fissure',
                'meta_description' => 'An anal fissure is a small tear or crack in the lining of the anal canal, usually caused by passing hard stools or excessive straining during bowel movements. I',
                'meta_keywords' => '',
            ]
        );
    }
}
