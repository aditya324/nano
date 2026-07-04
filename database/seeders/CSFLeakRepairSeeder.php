<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CSFLeakRepairSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('CSF Leak Repair')],
            [
                'title' => 'CSF Leak Repair',
                'slug' => Str::slug('CSF Leak Repair'),
                'introduction' => 'CSF (Cerebrospinal Fluid) leak repair is a neurosurgical procedure performed to close abnormal leakage of cerebrospinal fluid from the brain or spinal canal. CSF leaks can occur due to trauma, surgery, congenital defects, or skull base abnormalities. Repair helps prevent infections such as meningitis and restores normal fluid containment.',
                'what_is' => 'The procedure may involve: Endoscopic repair techniques Skull base reconstruction Tissue graft placement Spinal leak closure procedures Imaging-guided localization of leak site Doctors identify: Leak source Skull or spinal defects Associated infections CSF pressure abnormalities Both minimally invasive and open surgical approaches may be used depending on the leak location.',
                'symptoms' => [
            ['value' => 'Clear fluid leakage from nose or ear'],
            ['value' => 'Severe headaches'],
            ['value' => 'Neck stiffness'],
            ['value' => 'Recurrent meningitis'],
            ['value' => 'Positional headaches'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Persistent CSF leakage'],
            ['value' => 'Meningitis'],
            ['value' => 'Bleeding'],
            ['value' => 'Need for repeat surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy straining or nose blowing'],
            ['value' => 'Maintain head elevation if advised'],
            ['value' => 'Attend follow-up imaging appointments'],
            ['value' => 'Monitor for fever or fluid leakage'],
            ['value' => 'Continue prescribed medications carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Persistent CSF leakage'],
            ['value' => 'Meningitis'],
            ['value' => 'Bleeding'],
            ['value' => 'Need for repeat surgery'],
        ],
                'long_term_outlook' => 'CSF leak repair effectively restores fluid containment and reduces infection risk. Long-term recovery is usually favorable with timely surgical repair.',
                'conclusion' => '',
                'seo_title' => 'CSF Leak Repair',
                'seo_description' => 'CSF (Cerebrospinal Fluid) leak repair is a neurosurgical procedure performed to close abnormal leakage of cerebrospinal fluid from the brain or spinal canal. CSF leaks can occur due to trauma, surgery, congenital defects, or skull base abnormalities. Repair helps prevent infections such as meningitis and restores normal fluid containment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
