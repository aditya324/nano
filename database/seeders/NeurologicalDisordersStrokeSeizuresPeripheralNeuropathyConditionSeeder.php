<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeurologicalDisordersStrokeSeizuresPeripheralNeuropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)')],
            [
                'name' => 'Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)',
                'slug' => Str::slug('Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)'),
                'h1' => 'Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neurological disorders are medical conditions affecting the brain, spinal cord, nerves, and nervous system function. Conditions such as stroke, seizures, and peripheral neuropathy can interfere with movement, sensation, coordination, memory, and overall body function. A stroke occurs when blood flow to the brain is interrupted, seizures result from abnormal electrical activity in the brain, and peripheral neuropathy involves damage to peripheral nerves affecting sensation and muscle control. Early diagnosis and timely neurological care are essential to reduce complications, preserve nerve function, and improve long-term recovery outcomes.',
                'about_more' => '',
                'overview' => 'Neurological disorders are medical conditions affecting the brain, spinal cord, nerves, and nervous system function. Conditions such as stroke, seizures, and peripheral neuropathy can interfere with movement, sensation, coordination, memory, and overall body function. A stroke occurs when blood flow to the brain is interrupted, seizures result from abnormal electrical activity in the brain, and peripheral neuropathy involves damage to peripheral nerves affecting sensation and muscle control. Early diagnosis and timely neurological care are essential to reduce complications, preserve nerve function, and improve long-term recovery outcomes.',
                'symptoms' => [
            ['value' => 'Weakness, numbness, or paralysis affecting the face, arms, or legs'],
            ['value' => 'Sudden difficulty speaking, confusion, or memory problems'],
            ['value' => 'Seizure episodes, abnormal movements, or loss of consciousness'],
            ['value' => 'Tingling, burning sensation, or reduced sensation in hands and feet'],
            ['value' => 'Dizziness, poor coordination, or difficulty walking and maintaining balance'],
        ],
                'causes' => [
            ['value' => 'Reduced blood supply to the brain causing stroke'],
            ['value' => 'Abnormal brain electrical activity leading to seizures'],
            ['value' => 'Diabetes, infections, or vitamin deficiencies causing peripheral neuropathy'],
            ['value' => 'High blood pressure, smoking, or cardiovascular disease affecting brain circulation'],
            ['value' => 'Head injury, genetic disorders, autoimmune disease, or nerve damage affecting neurological function'],
        ],
                'risks' => [
            ['value' => 'Permanent paralysis or loss of mobility after stroke'],
            ['value' => 'Recurrent seizures or status epilepticus'],
            ['value' => 'Chronic nerve pain, weakness, or sensory loss in peripheral neuropathy'],
            ['value' => 'Speech, memory, or cognitive impairment'],
            ['value' => 'Increased risk of disability, falls, or long-term neurological complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for neurological disorders focuses on restoring neurological function, preventing complications, controlling symptoms, and improving overall quality of life. Management may include blood thinners, anti-seizure medications, pain management therapy, blood pressure and diabetes control, physiotherapy, occupational therapy, speech rehabilitation, and lifestyle modification. Severe cases may require emergency stroke management, intensive neurological care, surgical intervention, or long-term rehabilitation programs. Patients may also benefit from nutritional counseling, stress management, preventive health screening, neurology follow-up, and continuous monitoring to optimize neurological recovery and daily functioning.'],
        ],
                'recovery' => 'The long-term outlook for neurological disorders depends on the severity of nerve or brain involvement, speed of treatment, rehabilitation progress, and overall patient health. Early diagnosis, medication adherence, rehabilitation therapy, healthy nutrition, regular exercise, blood pressure and diabetes control, stress reduction, routine neurological monitoring, and continuous medical follow-up significantly help improve neurological recovery, reduce complications, preserve mobility and cognitive function, and enhance overall quality of life. _____________ 18. Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis) Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis)',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)',
                'meta_description' => 'Neurological disorders are medical conditions affecting the brain, spinal cord, nerves, and nervous system function. Conditions such as stroke, seizures, and pe',
                'meta_keywords' => '',
            ]
        );
    }
}
