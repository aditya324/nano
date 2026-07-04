<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MinimallyInvasiveOralSurgeriesEndoscopicLaserassistedMinimallyInvasiveOralSurgeriesEndoscopicLaserAssistedConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Minimally Invasive Oral Surgeries (Endoscopic, Laser-assisted)  Minimally Invasive Oral Surgeries (Endoscopic & Laser-Assisted)')],
            [
                'name' => 'Minimally Invasive Oral Surgeries (Endoscopic, Laser-assisted)  Minimally Invasive Oral Surgeries (Endoscopic & Laser-Assisted)',
                'slug' => Str::slug('Minimally Invasive Oral Surgeries (Endoscopic, Laser-assisted)  Minimally Invasive Oral Surgeries (Endoscopic & Laser-Assisted)'),
                'h1' => 'Minimally Invasive Oral Surgeries (Endoscopic, Laser-assisted)  Minimally Invasive Oral Surgeries (Endoscopic & Laser-Assisted)',
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
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Minimally Invasive Oral Surgeries (Endoscopic, Laser-assisted)  Minimally Invasive Oral Surgeries (Endoscopic & Laser-Assisted)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
