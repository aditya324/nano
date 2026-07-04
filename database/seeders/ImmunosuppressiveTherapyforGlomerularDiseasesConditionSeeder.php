<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImmunosuppressiveTherapyforGlomerularDiseasesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Immunosuppressive Therapy for Glomerular Diseases')],
            [
                'name' => 'Immunosuppressive Therapy for Glomerular Diseases',
                'slug' => Str::slug('Immunosuppressive Therapy for Glomerular Diseases'),
                'h1' => 'Immunosuppressive Therapy for Glomerular Diseases',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Immunosuppressive therapy for glomerular diseases is a specialized nephrology treatment used to control abnormal immune system activity that damages the kidney’s filtering units (glomeruli).',
                'about_more' => 'Many glomerular diseases are autoimmune or inflammatory conditions that cause progressive kidney injury if untreated. Immunosuppressive medications help reduce inflammation, protect kidney function, and prevent long-term renal failure.',
                'overview' => 'Treatment may include: Corticosteroids Cyclophosphamide Tacrolimus Mycophenolate mofetil Rituximab Other immunosuppressive drugs Doctors closely monitor: Kidney function Proteinuria Blood pressure Medication side effects Infection risk The treatment duration and medication type vary depending on the specific kidney disease and severity. Patients often require long-term nephrology follow-up and laboratory monitoring.',
                'symptoms' => [
            ['value' => 'Protein in urine'],
            ['value' => 'Swelling of body'],
            ['value' => 'Reduced kidney function'],
            ['value' => 'Blood in urine'],
            ['value' => 'High blood pressure'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Increased infection risk'],
            ['value' => 'Medication side effects'],
            ['value' => 'Liver or bone marrow suppression'],
            ['value' => 'Diabetes or weight gain'],
            ['value' => 'Relapse of kidney disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Attend regular blood test monitoring'],
            ['value' => 'Report fever or infections immediately'],
            ['value' => 'Maintain follow-up nephrology visits'],
            ['value' => 'Avoid stopping medications suddenly'],
        ],
                'recovery' => 'Immunosuppressive therapy significantly improves disease control and preserves kidney function in many glomerular disorders. Careful long-term monitoring helps reduce complications and supports improved renal survival.',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Immunosuppressive Therapy for Glomerular Diseases',
                'meta_description' => 'Immunosuppressive therapy for glomerular diseases is a specialized nephrology treatment used to control abnormal immune system activity that damages the kidney’',
                'meta_keywords' => '',
            ]
        );
    }
}
