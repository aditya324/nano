<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalInvolvementinSystemicDiseasesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Involvement in Systemic Diseases')],
            [
                'name' => 'Renal Involvement in Systemic Diseases',
                'slug' => Str::slug('Renal Involvement in Systemic Diseases'),
                'h1' => 'Renal Involvement in Systemic Diseases',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Many systemic diseases such as diabetes, lupus, vasculitis, hypertension, and autoimmune disorders can affect the kidneys. Kidney involvement may occur gradually or suddenly and often worsens the overall severity of the primary disease.',
                'about_more' => '',
                'overview' => 'Many systemic diseases such as diabetes, lupus, vasculitis, hypertension, and autoimmune disorders can affect the kidneys. Kidney involvement may occur gradually or suddenly and often worsens the overall severity of the primary disease.',
                'symptoms' => [
            ['value' => 'Swelling of legs, face, or body'],
            ['value' => 'Blood or protein in urine'],
            ['value' => 'High blood pressure'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Autoimmune diseases such as lupus'],
            ['value' => 'Diabetes mellitus and hypertension'],
            ['value' => 'Vasculitis and inflammatory disorders'],
            ['value' => 'Chronic infections affecting kidneys'],
            ['value' => 'Genetic or metabolic diseases'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Electrolyte imbalance and fluid overload'],
            ['value' => 'Heart and vascular complications'],
            ['value' => 'Need for dialysis in severe disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment of the underlying systemic disease'],
            ['value' => 'Kidney-protective medications'],
            ['value' => 'Blood pressure and diabetes control'],
            ['value' => 'Immunosuppressive therapy when indicated'],
            ['value' => 'Regular nephrology monitoring and laboratory tests'],
        ],
                'recovery' => 'The prognosis depends on the underlying systemic disease and the extent of kidney involvement. Early diagnosis and multidisciplinary care improve kidney preservation and long-term survival.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Renal Involvement in Systemic Diseases',
                'meta_description' => 'Many systemic diseases such as diabetes, lupus, vasculitis, hypertension, and autoimmune disorders can affect the kidneys. Kidney involvement may occur graduall',
                'meta_keywords' => '',
            ]
        );
    }
}
