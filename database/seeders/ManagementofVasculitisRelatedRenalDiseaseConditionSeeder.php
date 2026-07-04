<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofVasculitisRelatedRenalDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Vasculitis-Related Renal Disease')],
            [
                'name' => 'Management of Vasculitis-Related Renal Disease',
                'slug' => Str::slug('Management of Vasculitis-Related Renal Disease'),
                'h1' => 'Management of Vasculitis-Related Renal Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of vasculitis-related renal disease is a specialized nephrology treatment program focused on kidney damage caused by inflammation of blood vessels.',
                'about_more' => 'Vasculitis can reduce blood flow to the kidneys and cause severe inflammation, leading to kidney dysfunction or rapid kidney failure if untreated. Early diagnosis and aggressive treatment are essential for preserving kidney function and preventing systemic complications.',
                'overview' => 'The management plan includes: Immunosuppressive therapy Steroid treatment Kidney function monitoring Blood pressure management Dialysis support when necessary Doctors may perform: Blood investigations Autoimmune testing Renal biopsy Imaging studies Treatment aims to control vascular inflammation, prevent organ damage, and maintain long-term renal function. Patients often require multidisciplinary care involving nephrologists, rheumatologists, and critical care specialists.',
                'symptoms' => [
            ['value' => 'Blood in urine'],
            ['value' => 'Swelling and fluid retention'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'High blood pressure'],
            ['value' => 'Rapid kidney function decline'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure'],
            ['value' => 'Severe systemic inflammation'],
            ['value' => 'Lung or heart complications'],
            ['value' => 'Infection from immunosuppressive therapy'],
            ['value' => 'Permanent organ damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continue medications consistently'],
            ['value' => 'Attend regular laboratory monitoring'],
            ['value' => 'Monitor blood pressure and urine changes'],
            ['value' => 'Avoid infections and maintain hygiene'],
            ['value' => 'Maintain long-term specialist follow-up'],
        ],
                'recovery' => 'Early treatment of vasculitis-related renal disease greatly improves survival and kidney preservation. Advances in immunosuppressive therapy and multidisciplinary renal care continue to improve long-term patient outcomes.',
                'sort_order' => 30,
                'is_active' => true,
                'meta_title' => 'Management of Vasculitis-Related Renal Disease',
                'meta_description' => 'Management of vasculitis-related renal disease is a specialized nephrology treatment program focused on kidney damage caused by inflammation of blood vessels.',
                'meta_keywords' => '',
            ]
        );
    }
}
