<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ErythropoietinTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Erythropoietin Therapy')],
            [
                'name' => 'Erythropoietin Therapy',
                'slug' => Str::slug('Erythropoietin Therapy'),
                'h1' => 'Erythropoietin Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Erythropoietin therapy is a specialized treatment used in chronic kidney disease patients to stimulate red blood cell production and correct anemia.',
                'about_more' => 'Because damaged kidneys produce insufficient erythropoietin hormone, many CKD patients develop persistent anemia that causes weakness, fatigue, and reduced oxygen supply to the body. Synthetic erythropoietin therapy helps restore healthy hemoglobin levels and improves overall well-being.',
                'overview' => 'The therapy involves carefully monitored erythropoietin injections given at regular intervals under nephrology supervision. Treatment is commonly combined with: Iron supplementation Nutritional support Kidney disease management Regular hemoglobin monitoring Doctors monitor: Blood counts Iron levels Blood pressure Kidney function Treatment response The dosage is adjusted gradually to achieve safe and stable hemoglobin levels while avoiding complications.',
                'symptoms' => [
            ['value' => 'Persistent fatigue'],
            ['value' => 'Weakness'],
            ['value' => 'Pale appearance'],
            ['value' => 'Breathlessness'],
            ['value' => 'CKD-related anemia'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Headache or body pain'],
            ['value' => 'Excessive hemoglobin increase'],
            ['value' => 'Injection-site reactions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend scheduled injection appointments'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Continue iron supplementation if prescribed'],
            ['value' => 'Maintain follow-up blood investigations'],
            ['value' => 'Report unusual symptoms immediately'],
        ],
                'recovery' => 'Erythropoietin therapy greatly improves anemia control, energy levels, and quality of life in chronic kidney disease patients. Regular monitoring and individualized treatment plans help maintain safe long-term outcomes and reduce complications associated with CKD-related anemia.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Erythropoietin Therapy',
                'meta_description' => 'Erythropoietin therapy is a specialized treatment used in chronic kidney disease patients to stimulate red blood cell production and correct anemia.',
                'meta_keywords' => '',
            ]
        );
    }
}
