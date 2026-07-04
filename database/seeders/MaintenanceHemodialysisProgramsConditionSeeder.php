<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MaintenanceHemodialysisProgramsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Maintenance Hemodialysis Programs')],
            [
                'name' => 'Maintenance Hemodialysis Programs',
                'slug' => Str::slug('Maintenance Hemodialysis Programs'),
                'h1' => 'Maintenance Hemodialysis Programs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Maintenance hemodialysis programs provide long-term scheduled dialysis treatment for patients with permanent or advanced kidney failure.',
                'about_more' => 'These structured programs help replace kidney function by regularly filtering waste products and maintaining safe fluid and electrolyte balance. Comprehensive maintenance dialysis care also includes nutritional support, anemia management, infection prevention, and emotional counseling.',
                'overview' => 'The program includes: Scheduled dialysis sessions Vascular access care Blood pressure monitoring Laboratory testing Nutritional counseling Medication management Dialysis is usually performed several times weekly under specialist supervision. The dialysis team continuously monitors: Treatment effectiveness Fluid removal Electrolyte balance Anemia status Cardiovascular health Patient education regarding lifestyle modifications and home care is an important part of long-term dialysis management.',
                'symptoms' => [
            ['value' => 'End-stage kidney disease'],
            ['value' => 'Persistent fluid retention'],
            ['value' => 'Severe fatigue'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Reduced kidney function'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Dialysis access infections'],
            ['value' => 'Cardiovascular disease'],
            ['value' => 'Anemia complications'],
            ['value' => 'Bone disease'],
            ['value' => 'Emotional stress and fatigue'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend dialysis sessions consistently'],
            ['value' => 'Protect fistula or catheter access'],
            ['value' => 'Follow fluid and diet restrictions'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Continue prescribed medications carefully'],
        ],
                'recovery' => 'Maintenance dialysis programs improve survival, symptom control, and daily functioning in patients with kidney failure. Comprehensive dialysis care and regular monitoring continue to improve long-term treatment outcomes and quality of life.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Maintenance Hemodialysis Programs',
                'meta_description' => 'Maintenance hemodialysis programs provide long-term scheduled dialysis treatment for patients with permanent or advanced kidney failure.',
                'meta_keywords' => '',
            ]
        );
    }
}
