<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaparoscopicMinimallyInvasiveSurgeryTowersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laparoscopic / Minimally Invasive Surgery Towers')],
            [
                'title' => 'Laparoscopic / Minimally Invasive Surgery Towers',
                'slug' => Str::slug('Laparoscopic / Minimally Invasive Surgery Towers'),
                'introduction' => 'Laparoscopic or minimally invasive surgery towers are advanced surgical systems used to perform surgeries through small incisions using specialized cameras, monitors, and instruments. These systems improve surgical precision while reducing pain, blood loss, and recovery time.',
                'what_is' => 'A laparoscopic tower usually includes: High-definition camera systems Light source units Video monitors Insufflators for gas supply Recording systems The setup allows surgeons to perform procedures such as: Appendectomy Gallbladder surgery Hernia repair Gynecological procedures Colorectal surgery Minimally invasive surgery provides better cosmetic outcomes and shorter hospital stays compared to open surgery.',
                'symptoms' => [
            ['value' => 'Abdominal pain requiring surgery'],
            ['value' => 'Gallstones or appendicitis'],
            ['value' => 'Hernia-related swelling or pain'],
            ['value' => 'Gastrointestinal surgical disorders'],
            ['value' => 'Conditions requiring diagnostic laparoscopy'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Injury to nearby organs'],
            ['value' => 'Gas-related abdominal discomfort'],
            ['value' => 'Rare conversion to open surgery'],
            ['value' => 'Equipment-related technical issues'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Encourage early walking and mobilization'],
            ['value' => 'Maintain wound cleanliness carefully'],
            ['value' => 'Follow dietary advice as recommended'],
            ['value' => 'Avoid heavy lifting temporarily'],
            ['value' => 'Attend regular postoperative follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Injury to nearby organs'],
            ['value' => 'Gas-related abdominal discomfort'],
            ['value' => 'Rare conversion to open surgery'],
            ['value' => 'Equipment-related technical issues'],
        ],
                'long_term_outlook' => 'Laparoscopic surgery generally provides faster recovery, reduced postoperative pain, shorter hospitalization, and improved overall patient satisfaction.',
                'conclusion' => '',
                'seo_title' => 'Laparoscopic / Minimally Invasive Surgery Towers',
                'seo_description' => 'Laparoscopic or minimally invasive surgery towers are advanced surgical systems used to perform surgeries through small incisions using specialized cameras, monitors, and instruments. These systems improve surgical precision while reducing pain, blood loss, and recovery time.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
