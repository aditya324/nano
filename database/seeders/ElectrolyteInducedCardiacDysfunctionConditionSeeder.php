<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteInducedCardiacDysfunctionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Electrolyte-Induced Cardiac Dysfunction')],
            [
                'name' => 'Electrolyte-Induced Cardiac Dysfunction',
                'slug' => Str::slug('Electrolyte-Induced Cardiac Dysfunction'),
                'h1' => 'Electrolyte-Induced Cardiac Dysfunction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Electrolyte-induced cardiac dysfunction occurs when abnormal levels of essential minerals such as potassium, sodium, calcium, or magnesium interfere with the electrical activity and pumping function of the heart. These imbalances can lead to dangerous arrhythmias and cardiovascular instability.',
                'about_more' => '',
                'overview' => 'Electrolyte-induced cardiac dysfunction occurs when abnormal levels of essential minerals such as potassium, sodium, calcium, or magnesium interfere with the electrical activity and pumping function of the heart. These imbalances can lead to dangerous arrhythmias and cardiovascular instability.',
                'symptoms' => [
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Chest discomfort or tightness'],
            ['value' => 'Muscle weakness or cramps'],
            ['value' => 'Dizziness or fainting episodes'],
            ['value' => 'Fatigue and shortness of breath'],
        ],
                'causes' => [
            ['value' => 'Kidney disease and dehydration'],
            ['value' => 'Severe vomiting or diarrhea'],
            ['value' => 'Certain medications such as diuretics'],
            ['value' => 'Hormonal or metabolic disorders'],
            ['value' => 'Poor nutrition or excessive supplementation'],
        ],
                'risks' => [
            ['value' => 'Life-threatening arrhythmias'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Heart failure worsening'],
            ['value' => 'Reduced blood pressure and shock'],
            ['value' => 'Organ damage due to poor circulation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood electrolyte monitoring and correction'],
            ['value' => 'Intravenous or oral electrolyte replacement'],
            ['value' => 'Cardiac rhythm monitoring'],
            ['value' => 'Treatment of underlying medical conditions'],
            ['value' => 'Adjustment of medications causing imbalance'],
        ],
                'recovery' => 'Most patients recover well when electrolyte abnormalities are corrected promptly. Regular monitoring is important in high-risk individuals.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Electrolyte-Induced Cardiac Dysfunction',
                'meta_description' => 'Electrolyte-induced cardiac dysfunction occurs when abnormal levels of essential minerals such as potassium, sodium, calcium, or magnesium interfere with the el',
                'meta_keywords' => '',
            ]
        );
    }
}
