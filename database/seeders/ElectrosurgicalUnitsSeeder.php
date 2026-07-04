<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrosurgicalUnitsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Electrosurgical Units')],
            [
                'title' => 'Electrosurgical Units',
                'slug' => Str::slug('Electrosurgical Units'),
                'introduction' => 'Electrosurgical units are specialized devices that use controlled electrical energy to cut tissue and control bleeding during surgical procedures. These systems improve surgical precision and reduce blood loss.',
                'what_is' => 'Electrosurgical devices are commonly used in: General surgery Laparoscopic surgery Gynecological procedures ENT surgery Oncology surgery Functions include: Tissue cutting Coagulation of blood vessels Hemostasis control Modern electrosurgical systems enhance safety, reduce operative time, and improve visibility during surgery.',
                'symptoms' => [
            ['value' => 'Conditions requiring surgical intervention'],
            ['value' => 'Excessive bleeding risk during surgery'],
            ['value' => 'Need for precise tissue dissection'],
            ['value' => 'Complex minimally invasive procedures'],
            ['value' => 'Tumor or vascular surgical procedures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Thermal injury to tissues'],
            ['value' => 'Electrical burns'],
            ['value' => 'Smoke generation during surgery'],
            ['value' => 'Rare equipment malfunction'],
            ['value' => 'Injury to nearby structures if improperly used'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor surgical wounds for healing'],
            ['value' => 'Report excessive pain or bleeding'],
            ['value' => 'Follow wound care instructions carefully'],
            ['value' => 'Attend postoperative follow-up appointments'],
            ['value' => 'Maintain proper hygiene around incision sites'],
        ],
                'surgery_risks' => [
            ['value' => 'Thermal injury to tissues'],
            ['value' => 'Electrical burns'],
            ['value' => 'Smoke generation during surgery'],
            ['value' => 'Rare equipment malfunction'],
            ['value' => 'Injury to nearby structures if improperly used'],
        ],
                'long_term_outlook' => 'Electrosurgical technology improves surgical efficiency, reduces blood loss, and supports safer and more effective surgical outcomes.',
                'conclusion' => '',
                'seo_title' => 'Electrosurgical Units',
                'seo_description' => 'Electrosurgical units are specialized devices that use controlled electrical energy to cut tissue and control bleeding during surgical procedures. These systems improve surgical precision and reduce blood loss.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
