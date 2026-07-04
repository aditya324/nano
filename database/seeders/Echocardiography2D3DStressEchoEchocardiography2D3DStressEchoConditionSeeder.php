<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Echocardiography2D3DStressEchoEchocardiography2D3DStressEchoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Echocardiography (2D, 3D, Stress Echo)   Echocardiography (2D, 3D & Stress Echo)')],
            [
                'name' => 'Echocardiography (2D, 3D, Stress Echo)   Echocardiography (2D, 3D & Stress Echo)',
                'slug' => Str::slug('Echocardiography (2D, 3D, Stress Echo)   Echocardiography (2D, 3D & Stress Echo)'),
                'h1' => 'Echocardiography (2D, 3D, Stress Echo)   Echocardiography (2D, 3D & Stress Echo)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Echocardiography (2D, 3D, Stress Echo)   Echocardiography (2D, 3D & Stress Echo)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
