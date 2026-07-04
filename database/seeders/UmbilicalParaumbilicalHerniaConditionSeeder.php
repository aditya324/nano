<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UmbilicalParaumbilicalHerniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Umbilical / Paraumbilical Hernia')],
            [
                'name' => 'Umbilical / Paraumbilical Hernia',
                'slug' => Str::slug('Umbilical / Paraumbilical Hernia'),
                'h1' => 'Umbilical / Paraumbilical Hernia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Umbilical and paraumbilical hernias occur when abdominal contents protrude through weakness near the belly button area. They are common in both children and adults.',
                'about_more' => '',
                'overview' => 'Umbilical and paraumbilical hernias occur when abdominal contents protrude through weakness near the belly button area. They are common in both children and adults.',
                'symptoms' => [
            ['value' => 'Bulge around the navel'],
            ['value' => 'Pain or discomfort during exertion'],
            ['value' => 'Swelling increasing with coughing'],
            ['value' => 'Tenderness over the hernia site'],
            ['value' => 'Nausea in complicated cases'],
        ],
                'causes' => [
            ['value' => 'Congenital weakness near the umbilicus'],
            ['value' => 'Pregnancy and obesity'],
            ['value' => 'Increased abdominal pressure'],
            ['value' => 'Chronic coughing or straining'],
            ['value' => 'Fluid accumulation in the abdomen'],
        ],
                'risks' => [
            ['value' => 'Hernia enlargement'],
            ['value' => 'Obstruction of bowel contents'],
            ['value' => 'Strangulation and tissue death'],
            ['value' => 'Cosmetic concerns'],
            ['value' => 'Persistent abdominal discomfort'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and ultrasound'],
            ['value' => 'Observation for small pediatric hernias'],
            ['value' => 'Surgical mesh repair in adults'],
            ['value' => 'Laparoscopic hernia surgery'],
            ['value' => 'Emergency surgery for complications'],
        ],
                'recovery' => 'Most patients recover fully after repair. Early treatment prevents obstruction and strangulation.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Umbilical / Paraumbilical Hernia',
                'meta_description' => 'Umbilical and paraumbilical hernias occur when abdominal contents protrude through weakness near the belly button area. They are common in both children and adu',
                'meta_keywords' => '',
            ]
        );
    }
}
