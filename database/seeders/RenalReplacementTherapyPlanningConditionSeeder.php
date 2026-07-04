<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalReplacementTherapyPlanningConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Replacement Therapy Planning')],
            [
                'name' => 'Renal Replacement Therapy Planning',
                'slug' => Str::slug('Renal Replacement Therapy Planning'),
                'h1' => 'Renal Replacement Therapy Planning',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal replacement therapy planning is a nephrology service that prepares patients with advanced kidney disease for future kidney replacement treatments such as dialysis or kidney transplantation.',
                'about_more' => 'Early planning helps patients understand treatment options, avoid emergency dialysis situations, and make informed healthcare decisions. This process is important for ensuring smooth transition into long-term renal care.',
                'overview' => 'The planning process includes: Kidney function evaluation Education regarding dialysis methods Vascular access planning Transplant evaluation referral Nutritional counseling Lifestyle preparation Treatment options discussed may include: Hemodialysis Peritoneal dialysis Kidney transplantation Conservative kidney care Doctors assess: Overall health condition Family support systems Home environment Medical suitability for therapies Patient education and emotional support are important parts of treatment planning.',
                'symptoms' => [
            ['value' => 'Progressive chronic kidney disease'],
            ['value' => 'Declining kidney function'],
            ['value' => 'Persistent fluid retention'],
            ['value' => 'Severe fatigue'],
            ['value' => 'Electrolyte abnormalities'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Emergency dialysis requirement'],
            ['value' => 'Delayed access creation'],
            ['value' => 'Complications from untreated kidney failure'],
            ['value' => 'Emotional stress'],
            ['value' => 'Reduced treatment preparedness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend nephrology counseling sessions regularly'],
            ['value' => 'Follow dietary and medication plans'],
            ['value' => 'Complete recommended investigations'],
            ['value' => 'Prepare for dialysis access procedures if advised'],
            ['value' => 'Maintain regular kidney function monitoring'],
        ],
                'recovery' => 'Early renal replacement therapy planning improves treatment readiness and reduces emergency complications. Proper preparation helps patients transition safely into long-term kidney replacement therapies and improves overall outcomes.',
                'sort_order' => 42,
                'is_active' => true,
                'meta_title' => 'Renal Replacement Therapy Planning',
                'meta_description' => 'Renal replacement therapy planning is a nephrology service that prepares patients with advanced kidney disease for future kidney replacement treatments such as ',
                'meta_keywords' => '',
            ]
        );
    }
}
