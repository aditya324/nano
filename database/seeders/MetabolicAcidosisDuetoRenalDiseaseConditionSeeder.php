<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetabolicAcidosisDuetoRenalDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Metabolic Acidosis Due to Renal Disease')],
            [
                'name' => 'Metabolic Acidosis Due to Renal Disease',
                'slug' => Str::slug('Metabolic Acidosis Due to Renal Disease'),
                'h1' => 'Metabolic Acidosis Due to Renal Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Metabolic acidosis due to renal disease occurs when damaged kidneys cannot effectively remove acids from the body or maintain bicarbonate balance. This leads to acid accumulation in the bloodstream, affecting muscles, bones, and organ function.',
                'about_more' => '',
                'overview' => 'Metabolic acidosis due to renal disease occurs when damaged kidneys cannot effectively remove acids from the body or maintain bicarbonate balance. This leads to acid accumulation in the bloodstream, affecting muscles, bones, and organ function.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Rapid or deep breathing'],
            ['value' => 'Nausea and poor appetite'],
            ['value' => 'Confusion or difficulty concentrating'],
            ['value' => 'Muscle wasting and bone weakness over time'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease reducing acid excretion'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe diabetic kidney disease'],
            ['value' => 'Renal tubular disorders'],
            ['value' => 'Advanced kidney failure and uremia'],
        ],
                'risks' => [
            ['value' => 'Bone weakening and fractures'],
            ['value' => 'Muscle breakdown and malnutrition'],
            ['value' => 'Worsening kidney disease progression'],
            ['value' => 'Heart rhythm disturbances'],
            ['value' => 'Reduced growth in children with CKD'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oral bicarbonate supplementation'],
            ['value' => 'Treatment of underlying kidney disease'],
            ['value' => 'Dietary protein and acid management'],
            ['value' => 'Dialysis in advanced metabolic acidosis'],
            ['value' => 'Regular blood electrolyte and acid-base monitoring'],
        ],
                'recovery' => 'Early treatment helps reduce complications and slows kidney disease progression. Severe untreated acidosis may cause serious organ dysfunction and worsening renal failure.',
                'sort_order' => 47,
                'is_active' => true,
                'meta_title' => 'Metabolic Acidosis Due to Renal Disease',
                'meta_description' => 'Metabolic acidosis due to renal disease occurs when damaged kidneys cannot effectively remove acids from the body or maintain bicarbonate balance. This leads to',
                'meta_keywords' => '',
            ]
        );
    }
}
