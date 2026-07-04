<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HydrocelectomyVaricocelectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hydrocelectomy / Varicocelectomy')],
            [
                'title' => 'Hydrocelectomy / Varicocelectomy',
                'slug' => Str::slug('Hydrocelectomy / Varicocelectomy'),
                'introduction' => 'Hydrocelectomy and varicocelectomy are surgical procedures performed to treat hydrocele and varicocele affecting the scrotum and testicular blood vessels. These procedures help relieve discomfort, swelling, and fertility-related issues.',
                'what_is' => 'Hydrocelectomy removes fluid-filled swelling surrounding the testicle. Varicocelectomy treats enlarged scrotal veins that may impair fertility and cause pain. The surgeries may be performed through: Open surgery Microsurgical techniques Laparoscopic approaches Treatment improves comfort, cosmetic appearance, and reproductive health in appropriate patients.',
                'symptoms' => [
            ['value' => 'Scrotal swelling'],
            ['value' => 'Testicular discomfort or heaviness'],
            ['value' => 'Visible enlarged veins'],
            ['value' => 'Fertility problems'],
            ['value' => 'Pain during prolonged standing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Fluid recurrence after surgery'],
            ['value' => 'Testicular swelling or discomfort'],
            ['value' => 'Injury to surrounding structures'],
            ['value' => 'Rare fertility complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Wear scrotal support garments'],
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Apply cold compresses if advised'],
            ['value' => 'Maintain wound cleanliness carefully'],
            ['value' => 'Attend regular urology follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Fluid recurrence after surgery'],
            ['value' => 'Testicular swelling or discomfort'],
            ['value' => 'Injury to surrounding structures'],
            ['value' => 'Rare fertility complications'],
        ],
                'long_term_outlook' => 'Most patients experience excellent symptom relief and improved quality of life, while varicocelectomy may improve fertility outcomes in selected patients.',
                'conclusion' => '',
                'seo_title' => 'Hydrocelectomy / Varicocelectomy',
                'seo_description' => 'Hydrocelectomy and varicocelectomy are surgical procedures performed to treat hydrocele and varicocele affecting the scrotum and testicular blood vessels. These procedures help relieve discomfort, swelling, and fertility-related issues.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
