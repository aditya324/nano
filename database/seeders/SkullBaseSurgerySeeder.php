<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkullBaseSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skull Base Surgery')],
            [
                'title' => 'Skull Base Surgery',
                'slug' => Str::slug('Skull Base Surgery'),
                'introduction' => 'Skull base surgery is a highly specialized neurosurgical procedure performed to treat tumors, vascular abnormalities, infections, and other disorders located at the base of the skull. The skull base contains critical nerves, blood vessels, and brain structures, making these surgeries complex and delicate. Advanced microsurgical and endoscopic techniques help improve surgical precision and patient safety.',
                'what_is' => 'The procedure may involve: Microsurgical tumor removal Endoscopic skull base approaches Reconstruction of skull base defects Protection of cranial nerves and blood vessels Multidisciplinary surgical coordination Conditions commonly treated include: Skull base tumors Pituitary tumors Meningiomas Acoustic neuromas CSF leaks Vascular lesions Surgery is planned using advanced MRI and CT imaging along with neuronavigation systems.',
                'symptoms' => [
            ['value' => 'Persistent headaches'],
            ['value' => 'Vision disturbances'],
            ['value' => 'Hearing loss'],
            ['value' => 'Facial numbness or weakness'],
            ['value' => 'Balance problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Cranial nerve injury'],
            ['value' => 'CSF leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Neurological deficits'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular neurosurgical follow-up visits'],
            ['value' => 'Monitor for fever or fluid leakage'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Avoid heavy strain during recovery'],
            ['value' => 'Participate in rehabilitation if advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Cranial nerve injury'],
            ['value' => 'CSF leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Neurological deficits'],
        ],
                'long_term_outlook' => 'Skull base surgery can significantly improve neurological symptoms and tumor control. Long-term outcomes depend on tumor type, surgical complexity, and recovery progress.',
                'conclusion' => '',
                'seo_title' => 'Skull Base Surgery',
                'seo_description' => 'Skull base surgery is a highly specialized neurosurgical procedure performed to treat tumors, vascular abnormalities, infections, and other disorders located at the base of the skull. The skull base contains critical nerves, blood vessels, and brain structures, making these surgeries complex and delicate. Advanced microsurgical and endoscopic techniques help improve surgical precision and patient safety.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
