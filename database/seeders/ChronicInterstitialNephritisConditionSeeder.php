<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicInterstitialNephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Interstitial Nephritis')],
            [
                'name' => 'Chronic Interstitial Nephritis',
                'slug' => Str::slug('Chronic Interstitial Nephritis'),
                'h1' => 'Chronic Interstitial Nephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic interstitial nephritis is long-term inflammation and scarring of the kidney interstitial tissue, leading to gradual loss of kidney function over time. It may result from prolonged medication exposure, recurrent infections, or toxic substances.',
                'about_more' => '',
                'overview' => 'Chronic interstitial nephritis is long-term inflammation and scarring of the kidney interstitial tissue, leading to gradual loss of kidney function over time. It may result from prolonged medication exposure, recurrent infections, or toxic substances.',
                'symptoms' => [
            ['value' => 'Fatigue and generalized weakness'],
            ['value' => 'Increased urination, especially at night'],
            ['value' => 'High blood pressure'],
            ['value' => 'Reduced appetite and nausea'],
            ['value' => 'Gradual decline in kidney function'],
        ],
                'causes' => [
            ['value' => 'Long-term use of painkiller medications'],
            ['value' => 'Chronic urinary tract infections'],
            ['value' => 'Exposure to toxins or heavy metals'],
            ['value' => 'Autoimmune kidney disorders'],
            ['value' => 'Recurrent kidney inflammation over time'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Electrolyte imbalance and dehydration'],
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Anemia and bone disease'],
            ['value' => 'Permanent irreversible kidney scarring'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Avoidance of kidney-toxic medications and substances'],
            ['value' => 'Blood pressure and kidney disease management'],
            ['value' => 'Hydration and dietary modifications'],
            ['value' => 'Treatment of infections or underlying disorders'],
            ['value' => 'Dialysis or transplant in advanced kidney failure'],
        ],
                'recovery' => 'Chronic interstitial nephritis is often progressive, but early diagnosis and lifestyle changes can slow kidney damage. Regular nephrology care is essential to preserve remaining kidney function and reduce complications.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Chronic Interstitial Nephritis',
                'meta_description' => 'Chronic interstitial nephritis is long-term inflammation and scarring of the kidney interstitial tissue, leading to gradual loss of kidney function over time. I',
                'meta_keywords' => '',
            ]
        );
    }
}
