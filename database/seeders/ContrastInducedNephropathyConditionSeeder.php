<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContrastInducedNephropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Contrast-Induced Nephropathy')],
            [
                'name' => 'Contrast-Induced Nephropathy',
                'slug' => Str::slug('Contrast-Induced Nephropathy'),
                'h1' => 'Contrast-Induced Nephropathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Contrast-induced nephropathy is a form of kidney injury that occurs after exposure to contrast dyes used during CT scans, angiography, or other imaging procedures. The contrast material may temporarily reduce blood flow to the kidneys and directly damage kidney tissues, especially in patients with pre-existing kidney disease or diabetes.',
                'about_more' => '',
                'overview' => 'Contrast-induced nephropathy is a form of kidney injury that occurs after exposure to contrast dyes used during CT scans, angiography, or other imaging procedures. The contrast material may temporarily reduce blood flow to the kidneys and directly damage kidney tissues, especially in patients with pre-existing kidney disease or diabetes.',
                'symptoms' => [
            ['value' => 'Reduced urine output after imaging procedures'],
            ['value' => 'Swelling and fluid retention'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Nausea or poor appetite'],
            ['value' => 'Elevated creatinine levels on blood tests'],
        ],
                'causes' => [
            ['value' => 'Use of iodinated contrast dyes'],
            ['value' => 'Pre-existing chronic kidney disease'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Dehydration before imaging procedures'],
            ['value' => 'High contrast dose exposure'],
        ],
                'risks' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Worsening chronic kidney disease'],
            ['value' => 'Fluid and electrolyte imbalance'],
            ['value' => 'Prolonged hospitalization'],
            ['value' => 'Rare need for dialysis in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Adequate hydration before and after contrast exposure'],
            ['value' => 'Limiting contrast dye use whenever possible'],
            ['value' => 'Temporary adjustment of kidney-risk medications'],
            ['value' => 'Monitoring kidney function after procedures'],
            ['value' => 'Dialysis support in severe complications'],
        ],
                'recovery' => 'Most cases improve within several days to weeks with supportive care. Preventive measures are highly effective in reducing risk, especially in patients with existing kidney disease.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Contrast-Induced Nephropathy',
                'meta_description' => 'Contrast-induced nephropathy is a form of kidney injury that occurs after exposure to contrast dyes used during CT scans, angiography, or other imaging procedur',
                'meta_keywords' => '',
            ]
        );
    }
}
