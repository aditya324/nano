<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteInterstitialNephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Interstitial Nephritis')],
            [
                'name' => 'Acute Interstitial Nephritis',
                'slug' => Str::slug('Acute Interstitial Nephritis'),
                'h1' => 'Acute Interstitial Nephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute interstitial nephritis is sudden inflammation of the kidney’s interstitial tissue, often caused by allergic reactions to medications, infections, or autoimmune conditions. It can lead to rapid decline in kidney function.',
                'about_more' => '',
                'overview' => 'Acute interstitial nephritis is sudden inflammation of the kidney’s interstitial tissue, often caused by allergic reactions to medications, infections, or autoimmune conditions. It can lead to rapid decline in kidney function.',
                'symptoms' => [
            ['value' => 'Fever and skin rash'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Blood or protein in urine'],
            ['value' => 'Fatigue and nausea'],
            ['value' => 'Swelling and high blood pressure'],
        ],
                'causes' => [
            ['value' => 'Allergic reaction to antibiotics or medications'],
            ['value' => 'Nonsteroidal anti-inflammatory drug (NSAID) use'],
            ['value' => 'Bacterial or viral infections'],
            ['value' => 'Autoimmune disorders'],
            ['value' => 'Drug-induced immune reactions'],
        ],
                'risks' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Persistent kidney dysfunction'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Chronic kidney disease if untreated'],
            ['value' => 'Need for temporary dialysis in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Discontinuation of offending medications'],
            ['value' => 'Corticosteroid therapy in immune-related cases'],
            ['value' => 'Hydration and kidney function monitoring'],
            ['value' => 'Treatment of underlying infections'],
            ['value' => 'Dialysis support if severe kidney failure occurs'],
        ],
                'recovery' => 'Most patients recover kidney function if the condition is identified early and the triggering factor is removed. Delayed treatment may lead to permanent kidney damage.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Acute Interstitial Nephritis',
                'meta_description' => 'Acute interstitial nephritis is sudden inflammation of the kidney’s interstitial tissue, often caused by allergic reactions to medications, infections, or autoi',
                'meta_keywords' => '',
            ]
        );
    }
}
