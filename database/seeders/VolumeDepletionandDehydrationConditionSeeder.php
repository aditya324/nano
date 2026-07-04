<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VolumeDepletionandDehydrationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Volume Depletion and Dehydration')],
            [
                'name' => 'Volume Depletion and Dehydration',
                'slug' => Str::slug('Volume Depletion and Dehydration'),
                'h1' => 'Volume Depletion and Dehydration',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Volume depletion and dehydration occur when the body loses excessive fluids and electrolytes, reducing blood circulation and kidney perfusion. Severe dehydration can lead to acute kidney injury and shock if untreated.',
                'about_more' => '',
                'overview' => 'Volume depletion and dehydration occur when the body loses excessive fluids and electrolytes, reducing blood circulation and kidney perfusion. Severe dehydration can lead to acute kidney injury and shock if untreated.',
                'symptoms' => [
            ['value' => 'Excessive thirst and dry mouth'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Rapid heartbeat and low blood pressure'],
        ],
                'causes' => [
            ['value' => 'Severe diarrhea or vomiting'],
            ['value' => 'Excessive sweating or heat exposure'],
            ['value' => 'Poor fluid intake'],
            ['value' => 'Diuretic medication overuse'],
            ['value' => 'Blood loss or severe infection'],
        ],
                'risks' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Low blood pressure and shock'],
            ['value' => 'Confusion and reduced consciousness'],
            ['value' => 'Organ dysfunction due to poor circulation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oral or intravenous fluid replacement'],
            ['value' => 'Electrolyte correction therapy'],
            ['value' => 'Treatment of underlying illness'],
            ['value' => 'Monitoring kidney function and blood pressure'],
            ['value' => 'Prevention through adequate hydration'],
        ],
                'recovery' => 'Most cases improve rapidly with early fluid replacement and correction of underlying causes. Severe untreated dehydration may result in kidney damage and life-threatening complications.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Volume Depletion and Dehydration',
                'meta_description' => 'Volume depletion and dehydration occur when the body loses excessive fluids and electrolytes, reducing blood circulation and kidney perfusion. Severe dehydratio',
                'meta_keywords' => '',
            ]
        );
    }
}
