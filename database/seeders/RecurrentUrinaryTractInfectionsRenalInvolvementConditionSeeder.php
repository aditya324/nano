<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecurrentUrinaryTractInfectionsRenalInvolvementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Recurrent Urinary Tract Infections (Renal Involvement)')],
            [
                'name' => 'Recurrent Urinary Tract Infections (Renal Involvement)',
                'slug' => Str::slug('Recurrent Urinary Tract Infections (Renal Involvement)'),
                'h1' => 'Recurrent Urinary Tract Infections (Renal Involvement)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Recurrent urinary tract infections (UTIs) involving the kidneys occur when infections repeatedly affect the urinary system and may spread to kidney tissues. Repeated infections can cause kidney scarring and long-term renal complications if not properly managed.',
                'about_more' => '',
                'overview' => 'Recurrent urinary tract infections (UTIs) involving the kidneys occur when infections repeatedly affect the urinary system and may spread to kidney tissues. Repeated infections can cause kidney scarring and long-term renal complications if not properly managed.',
                'symptoms' => [
            ['value' => 'Frequent painful urination'],
            ['value' => 'Fever and chills'],
            ['value' => 'Flank or back pain'],
            ['value' => 'Cloudy or foul-smelling urine'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Structural urinary tract abnormalities'],
            ['value' => 'Kidney stones or urinary obstruction'],
            ['value' => 'Poor bladder emptying'],
            ['value' => 'Diabetes or weakened immunity'],
            ['value' => 'Incomplete treatment of previous infections'],
        ],
                'risks' => [
            ['value' => 'Kidney scarring and chronic kidney disease'],
            ['value' => 'Recurrent hospitalization and infections'],
            ['value' => 'Sepsis and bloodstream infection'],
            ['value' => 'Reduced kidney function over time'],
            ['value' => 'Hypertension related to kidney damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Long-term or targeted antibiotic therapy'],
            ['value' => 'Urine culture and imaging evaluation'],
            ['value' => 'Hydration and urinary hygiene measures'],
            ['value' => 'Surgical correction of structural abnormalities'],
            ['value' => 'Nephrology or urology follow-up care'],
        ],
                'recovery' => 'Most recurrent infections can be controlled with early treatment and correction of underlying causes. Regular monitoring helps prevent kidney damage and chronic complications.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Recurrent Urinary Tract Infections (Renal Involvement)',
                'meta_description' => 'Recurrent urinary tract infections (UTIs) involving the kidneys occur when infections repeatedly affect the urinary system and may spread to kidney tissues. Rep',
                'meta_keywords' => '',
            ]
        );
    }
}
