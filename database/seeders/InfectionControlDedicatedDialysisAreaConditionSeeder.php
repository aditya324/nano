<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionControlDedicatedDialysisAreaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infection Control–Dedicated Dialysis Area')],
            [
                'name' => 'Infection Control–Dedicated Dialysis Area',
                'slug' => Str::slug('Infection Control–Dedicated Dialysis Area'),
                'h1' => 'Infection Control–Dedicated Dialysis Area',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An Infection Control–Dedicated Dialysis Area is a specially designed dialysis facility focused on preventing infections and maintaining safe dialysis treatment environments for renal patients.',
                'about_more' => 'Patients undergoing dialysis are highly vulnerable to infections due to weakened immunity, repeated vascular access procedures, and long-term medical treatment. Strict infection-control infrastructure helps reduce healthcare-associated infections and improves dialysis safety.',
                'overview' => 'The dedicated dialysis area includes: Separate dialysis stations when required Sterile treatment protocols Hand hygiene facilities Isolation arrangements for infectious patients Surface disinfection systems Biomedical waste management Staff infection-control training The facility supports prevention of: Bloodstream infections Hepatitis transmission Catheter-related infections Cross-contamination between patients Airborne and contact infections Healthcare teams continuously monitor: Sterilization standards Water quality Dialysis equipment hygiene Patient infection symptoms Infection surveillance reports Strict NABH and dialysis safety protocols are maintained throughout patient care.',
                'symptoms' => [
            ['value' => 'Fever during dialysis'],
            ['value' => 'Redness or swelling at catheter site'],
            ['value' => 'Weak immunity in renal patients'],
            ['value' => 'Recurrent dialysis-related infections'],
            ['value' => 'Bloodstream infection symptoms'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Cross-infection between patients'],
            ['value' => 'Catheter-related bloodstream infections'],
            ['value' => 'Viral hepatitis transmission'],
            ['value' => 'Severe sepsis complications'],
            ['value' => 'Increased hospitalization risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain personal hygiene carefully'],
            ['value' => 'Follow dialysis infection-control instructions'],
            ['value' => 'Keep vascular access clean and protected'],
            ['value' => 'Report fever or swelling immediately'],
            ['value' => 'Attend regular infection screening if advised'],
        ],
                'recovery' => 'Dedicated infection-control dialysis facilities greatly reduce infection risk and improve patient safety during long-term dialysis treatment. Proper infection prevention practices support better survival, reduced complications, and improved quality of life for renal patients.',
                'sort_order' => 42,
                'is_active' => true,
                'meta_title' => 'Infection Control–Dedicated Dialysis Area',
                'meta_description' => 'An Infection Control–Dedicated Dialysis Area is a specially designed dialysis facility focused on preventing infections and maintaining safe dialysis treatment ',
                'meta_keywords' => '',
            ]
        );
    }
}
