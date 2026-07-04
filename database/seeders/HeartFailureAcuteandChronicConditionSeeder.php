<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeartFailureAcuteandChronicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Heart Failure (Acute and Chronic)')],
            [
                'name' => 'Heart Failure (Acute and Chronic)',
                'slug' => Str::slug('Heart Failure (Acute and Chronic)'),
                'h1' => 'Heart Failure (Acute and Chronic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Heart failure is a condition in which the heart cannot pump blood effectively to meet the body\'s needs. It may develop suddenly (acute) or gradually over time (chronic), leading to fluid buildup and reduced organ perfusion.',
                'about_more' => '',
                'overview' => 'Heart failure is a condition in which the heart cannot pump blood effectively to meet the body\'s needs. It may develop suddenly (acute) or gradually over time (chronic), leading to fluid buildup and reduced organ perfusion.',
                'symptoms' => [
            ['value' => 'Breathlessness during activity or rest'],
            ['value' => 'Swelling of legs and feet'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Rapid weight gain from fluid retention'],
            ['value' => 'Persistent cough or difficulty lying flat'],
        ],
                'causes' => [
            ['value' => 'Coronary artery disease and heart attack'],
            ['value' => 'Long-standing hypertension'],
            ['value' => 'Cardiomyopathy and valve disease'],
            ['value' => 'Diabetes and kidney disease'],
            ['value' => 'Severe infections or arrhythmias'],
        ],
                'risks' => [
            ['value' => 'Pulmonary edema and respiratory distress'],
            ['value' => 'Kidney and liver dysfunction'],
            ['value' => 'Cardiac arrhythmias'],
            ['value' => 'Reduced physical activity and quality of life'],
            ['value' => 'Recurrent hospital admissions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Diuretics to remove excess fluid'],
            ['value' => 'Heart failure medications and monitoring'],
            ['value' => 'Salt and fluid restriction'],
            ['value' => 'Cardiac device therapy when required'],
            ['value' => 'Advanced therapies including transplant in severe cases'],
        ],
                'recovery' => 'Heart failure requires long-term management. Early treatment and lifestyle modification help improve symptoms and survival.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Heart Failure (Acute and Chronic)',
                'meta_description' => 'Heart failure is a condition in which the heart cannot pump blood effectively to meet the body\'s needs. It may develop suddenly (acute) or gradually over time ',
                'meta_keywords' => '',
            ]
        );
    }
}
