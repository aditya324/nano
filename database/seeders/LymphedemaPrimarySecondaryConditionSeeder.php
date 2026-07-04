<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LymphedemaPrimarySecondaryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lymphedema (Primary / Secondary)')],
            [
                'name' => 'Lymphedema (Primary / Secondary)',
                'slug' => Str::slug('Lymphedema (Primary / Secondary)'),
                'h1' => 'Lymphedema (Primary / Secondary)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lymphedema is swelling caused by accumulation of lymphatic fluid due to impaired lymph drainage. It may be primary (congenital) or secondary due to surgery, infection, radiation, or trauma.',
                'about_more' => '',
                'overview' => 'Lymphedema is swelling caused by accumulation of lymphatic fluid due to impaired lymph drainage. It may be primary (congenital) or secondary due to surgery, infection, radiation, or trauma.',
                'symptoms' => [
            ['value' => 'Swelling of arms or legs'],
            ['value' => 'Heaviness and tightness of the limb'],
            ['value' => 'Thickened or hardened skin'],
            ['value' => 'Reduced limb mobility'],
            ['value' => 'Recurrent skin infections'],
        ],
                'causes' => [
            ['value' => 'Congenital lymphatic abnormalities'],
            ['value' => 'Cancer surgery or lymph node removal'],
            ['value' => 'Radiation therapy'],
            ['value' => 'Infections such as filariasis'],
            ['value' => 'Trauma or chronic inflammation'],
        ],
                'risks' => [
            ['value' => 'Recurrent cellulitis and infections'],
            ['value' => 'Chronic pain and discomfort'],
            ['value' => 'Skin thickening and fibrosis'],
            ['value' => 'Reduced limb function'],
            ['value' => 'Psychological and cosmetic concerns'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Compression garments and bandaging'],
            ['value' => 'Manual lymphatic drainage therapy'],
            ['value' => 'Physiotherapy and exercise'],
            ['value' => 'Skin care and infection prevention'],
            ['value' => 'Surgical lymphatic procedures in selected cases'],
        ],
                'recovery' => 'Lymphedema is usually chronic but can be effectively controlled with regular therapy and limb care.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Lymphedema (Primary / Secondary)',
                'meta_description' => 'Lymphedema is swelling caused by accumulation of lymphatic fluid due to impaired lymph drainage. It may be primary (congenital) or secondary due to surgery, inf',
                'meta_keywords' => '',
            ]
        );
    }
}
