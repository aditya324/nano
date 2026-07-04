<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicSkullBaseProceduresENTRoleSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Skull Base Procedures (ENT Role)')],
            [
                'title' => 'Endoscopic Skull Base Procedures (ENT Role)',
                'slug' => Str::slug('Endoscopic Skull Base Procedures (ENT Role)'),
                'introduction' => 'Endoscopic skull base procedures are advanced minimally invasive surgeries performed through the nose using endoscopes to treat tumors, cysts, CSF leaks, and abnormalities at the base of the skull. ENT surgeons work closely with neurosurgeons during these highly specialized procedures. The approach avoids large external incisions and improves surgical precision.',
                'what_is' => 'The surgery is performed using high-definition endoscopes and specialized instruments inserted through the nasal passages. Conditions treated may include: Pituitary tumors Skull base tumors Cerebrospinal fluid (CSF) leaks Sinus-related skull base disease Selected neurological lesions The ENT surgeon helps provide safe nasal and sinus access to deep skull base structures while preserving surrounding tissues. Advanced imaging and navigation systems improve safety and accuracy.',
                'symptoms' => [
            ['value' => 'Persistent headaches'],
            ['value' => 'Nasal blockage'],
            ['value' => 'CSF leakage from the nose'],
            ['value' => 'Vision changes'],
            ['value' => 'Hormonal or neurological symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'CSF leakage'],
            ['value' => 'Infection or meningitis'],
            ['value' => 'Bleeding'],
            ['value' => 'Vision or nerve injury'],
            ['value' => 'Recurrence of disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid forceful nose blowing'],
            ['value' => 'Attend regular nasal endoscopy follow-up visits'],
            ['value' => 'Use saline nasal care as advised'],
            ['value' => 'Report fever or clear nasal discharge immediately'],
            ['value' => 'Continue neurological and ENT monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'CSF leakage'],
            ['value' => 'Infection or meningitis'],
            ['value' => 'Bleeding'],
            ['value' => 'Vision or nerve injury'],
            ['value' => 'Recurrence of disease'],
        ],
                'long_term_outlook' => 'Endoscopic skull base surgery provides effective treatment with reduced tissue damage and faster recovery. Long-term outcomes improve with multidisciplinary follow-up and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Skull Base Procedures (ENT Role)',
                'seo_description' => 'Endoscopic skull base procedures are advanced minimally invasive surgeries performed through the nose using endoscopes to treat tumors, cysts, CSF leaks, and abnormalities at the base of the skull. ENT surgeons work closely with neurosurgeons during these highly specialized procedures. The approach avoids large external incisions and improves surgical precision.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
