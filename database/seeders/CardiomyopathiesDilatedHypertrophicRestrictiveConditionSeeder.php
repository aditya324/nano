<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiomyopathiesDilatedHypertrophicRestrictiveConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cardiomyopathies (Dilated, Hypertrophic, Restrictive)')],
            [
                'name' => 'Cardiomyopathies (Dilated, Hypertrophic, Restrictive)',
                'slug' => Str::slug('Cardiomyopathies (Dilated, Hypertrophic, Restrictive)'),
                'h1' => 'Cardiomyopathies (Dilated, Hypertrophic, Restrictive)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cardiomyopathies are diseases affecting the heart muscle, causing abnormal heart structure and function. Different types affect the pumping and filling ability of the heart and may lead to heart failure or arrhythmias.',
                'about_more' => '',
                'overview' => 'Cardiomyopathies are diseases affecting the heart muscle, causing abnormal heart structure and function. Different types affect the pumping and filling ability of the heart and may lead to heart failure or arrhythmias.',
                'symptoms' => [
            ['value' => 'Shortness of breath'],
            ['value' => 'Chest discomfort or palpitations'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling of legs and feet'],
            ['value' => 'Fainting episodes in severe cases'],
        ],
                'causes' => [
            ['value' => 'Genetic inheritance'],
            ['value' => 'Viral infections affecting the heart'],
            ['value' => 'Alcohol or drug-related damage'],
            ['value' => 'Long-standing hypertension'],
            ['value' => 'Metabolic or autoimmune disorders'],
        ],
                'risks' => [
            ['value' => 'Heart failure progression'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Reduced exercise capacity'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cardiac medications and monitoring'],
            ['value' => 'Lifestyle and dietary modification'],
            ['value' => 'Implantable pacemaker or defibrillator devices'],
            ['value' => 'Arrhythmia management'],
            ['value' => 'Heart transplant for advanced disease'],
        ],
                'recovery' => 'Outcome depends on the type and severity of cardiomyopathy. Early treatment improves heart function and reduces complications.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Cardiomyopathies (Dilated, Hypertrophic, Restrictive)',
                'meta_description' => 'Cardiomyopathies are diseases affecting the heart muscle, causing abnormal heart structure and function. Different types affect the pumping and filling ability ',
                'meta_keywords' => '',
            ]
        );
    }
}
