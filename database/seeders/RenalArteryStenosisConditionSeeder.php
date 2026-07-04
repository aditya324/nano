<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalArteryStenosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Artery Stenosis')],
            [
                'name' => 'Renal Artery Stenosis',
                'slug' => Str::slug('Renal Artery Stenosis'),
                'h1' => 'Renal Artery Stenosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal artery stenosis is narrowing of the arteries supplying blood to the kidneys, resulting in uncontrolled hypertension and reduced kidney function.',
                'about_more' => '',
                'overview' => 'Renal artery stenosis is narrowing of the arteries supplying blood to the kidneys, resulting in uncontrolled hypertension and reduced kidney function.',
                'symptoms' => [
            ['value' => 'Resistant high blood pressure'],
            ['value' => 'Swelling due to fluid retention'],
            ['value' => 'Reduced kidney function'],
            ['value' => 'Headache and fatigue'],
            ['value' => 'Shortness of breath in severe cases'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Fibromuscular dysplasia'],
            ['value' => 'Diabetes and smoking'],
            ['value' => 'High cholesterol'],
            ['value' => 'Aging-related vascular disease'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Resistant hypertension'],
            ['value' => 'Heart failure and pulmonary edema'],
            ['value' => 'Kidney shrinkage and damage'],
            ['value' => 'Cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood pressure control medications'],
            ['value' => 'Doppler ultrasound and angiography'],
            ['value' => 'Renal artery angioplasty and stenting'],
            ['value' => 'Kidney function monitoring'],
            ['value' => 'Lifestyle and dietary management'],
        ],
                'recovery' => 'Early treatment helps preserve kidney function and improves blood pressure control.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Renal Artery Stenosis',
                'meta_description' => 'Renal artery stenosis is narrowing of the arteries supplying blood to the kidneys, resulting in uncontrolled hypertension and reduced kidney function.',
                'meta_keywords' => '',
            ]
        );
    }
}
