<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SedationMonitoringSystemsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Sedation & Monitoring Systems')],
            [
                'name' => 'Sedation & Monitoring Systems',
                'slug' => Str::slug('Sedation & Monitoring Systems'),
                'h1' => 'Sedation & Monitoring Systems',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Sedation and monitoring systems are used during endoscopic and gastrointestinal procedures to maintain patient comfort, safety, and continuous vital sign observation.',
                'about_more' => 'They help ensure smooth and controlled procedures with reduced pain and anxiety.',
                'overview' => 'Services and capabilities include: Conscious sedation administration Oxygen saturation monitoring Heart rate and blood pressure monitoring Emergency resuscitation readiness Continuous patient observation during procedures These systems are essential for safe endoscopy and advanced GI interventions. Symptoms Indicating Use Anxiety before procedures Need for prolonged endoscopy Therapeutic endoscopic procedures Pain-sensitive interventions Complex GI procedures requiring sedation',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Sedation-related breathing difficulty'],
            ['value' => 'Blood pressure fluctuations'],
            ['value' => 'Allergic medication reactions'],
            ['value' => 'Delayed recovery from sedation'],
            ['value' => 'Rare cardiac complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Avoid driving or operating machinery temporarily'],
            ['value' => 'Rest until sedation effects wear off'],
            ['value' => 'Follow discharge instructions carefully'],
            ['value' => 'Drink fluids gradually if permitted'],
            ['value' => 'Seek medical help for breathing difficulty or severe weakness'],
        ],
                'recovery' => 'Modern sedation and monitoring systems improve patient comfort and procedural safety, enabling successful completion of diagnostic and therapeutic gastrointestinal procedures with reduced complications.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Sedation & Monitoring Systems',
                'meta_description' => 'Sedation and monitoring systems are used during endoscopic and gastrointestinal procedures to maintain patient comfort, safety, and continuous vital sign observ',
                'meta_keywords' => '',
            ]
        );
    }
}
