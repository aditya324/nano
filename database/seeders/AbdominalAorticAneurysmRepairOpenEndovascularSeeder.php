<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AbdominalAorticAneurysmRepairOpenEndovascularSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Abdominal Aortic Aneurysm Repair (Open / Endovascular)')],
            [
                'title' => 'Abdominal Aortic Aneurysm Repair (Open / Endovascular)',
                'slug' => Str::slug('Abdominal Aortic Aneurysm Repair (Open / Endovascular)'),
                'introduction' => 'Abdominal Aortic Aneurysm (AAA) repair is a major vascular procedure performed to treat dangerous enlargement of the abdominal aorta and prevent life-threatening rupture. Repair may be performed through open surgery or minimally invasive endovascular techniques.',
                'what_is' => 'An abdominal aortic aneurysm develops when the aortic wall weakens and enlarges over time. Treatment options include: Open surgical aneurysm repair Endovascular aneurysm repair (EVAR) The procedure involves: Replacing or reinforcing the weakened aorta Restoring safe blood flow Preventing rupture and internal bleeding EVAR generally offers: Smaller incisions Faster recovery Reduced hospital stay Large or symptomatic aneurysms usually require urgent treatment.',
                'symptoms' => [
            ['value' => 'Pulsating abdominal swelling'],
            ['value' => 'Abdominal or back pain'],
            ['value' => 'Sudden severe pain in rupture cases'],
            ['value' => 'Dizziness or collapse'],
            ['value' => 'Reduced blood circulation symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Major bleeding'],
            ['value' => 'Graft complications or leakage'],
            ['value' => 'Infection or blood clots'],
            ['value' => 'Kidney complications'],
            ['value' => 'Rare aneurysm recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain strict blood pressure control'],
            ['value' => 'Avoid smoking completely'],
            ['value' => 'Attend regular imaging follow-up visits'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Report abdominal pain or weakness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Major bleeding'],
            ['value' => 'Graft complications or leakage'],
            ['value' => 'Infection or blood clots'],
            ['value' => 'Kidney complications'],
            ['value' => 'Rare aneurysm recurrence'],
        ],
                'long_term_outlook' => 'Early aneurysm repair significantly reduces rupture risk and improves long-term survival and vascular health.',
                'conclusion' => '',
                'seo_title' => 'Abdominal Aortic Aneurysm Repair (Open / Endovascular)',
                'seo_description' => 'Abdominal Aortic Aneurysm (AAA) repair is a major vascular procedure performed to treat dangerous enlargement of the abdominal aorta and prevent life-threatening rupture. Repair may be performed through open surgery or minimally invasive endovascular techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
