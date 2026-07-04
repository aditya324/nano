<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UlnarNerveDecompressionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ulnar Nerve Decompression')],
            [
                'title' => 'Ulnar Nerve Decompression',
                'slug' => Str::slug('Ulnar Nerve Decompression'),
                'introduction' => 'Ulnar nerve decompression is a surgical procedure performed to relieve pressure on the ulnar nerve, commonly at the elbow or wrist. Compression of the ulnar nerve can cause numbness, weakness, and pain affecting the hand and fingers. The surgery helps restore nerve function and prevent permanent nerve damage.',
                'what_is' => 'The procedure may involve: Release of compressed nerve tissue Removal of pressure-causing structures Ulnar nerve repositioning when necessary Microsurgical decompression techniques The surgery is commonly performed for: Cubital tunnel syndrome Ulnar nerve entrapment Chronic nerve compression injuries Doctors evaluate nerve function using clinical examination and nerve conduction studies.',
                'symptoms' => [
            ['value' => 'Numbness in ring and little fingers'],
            ['value' => 'Hand weakness'],
            ['value' => 'Elbow pain'],
            ['value' => 'Reduced grip strength'],
            ['value' => 'Muscle wasting in the hand'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Persistent numbness'],
            ['value' => 'Nerve injury'],
            ['value' => 'Infection'],
            ['value' => 'Scar tissue formation'],
            ['value' => 'Incomplete symptom improvement'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid pressure on the elbow during healing'],
            ['value' => 'Attend physiotherapy sessions if advised'],
            ['value' => 'Perform hand and arm exercises regularly'],
            ['value' => 'Keep the surgical area clean'],
            ['value' => 'Attend follow-up neurological evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent numbness'],
            ['value' => 'Nerve injury'],
            ['value' => 'Infection'],
            ['value' => 'Scar tissue formation'],
            ['value' => 'Incomplete symptom improvement'],
        ],
                'long_term_outlook' => 'Ulnar nerve decompression improves hand function and reduces nerve-related symptoms in many patients. Early treatment and rehabilitation improve long-term nerve recovery outcomes.',
                'conclusion' => '',
                'seo_title' => 'Ulnar Nerve Decompression',
                'seo_description' => 'Ulnar nerve decompression is a surgical procedure performed to relieve pressure on the ulnar nerve, commonly at the elbow or wrist. Compression of the ulnar nerve can cause numbness, weakness, and pain affecting the hand and fingers. The surgery helps restore nerve function and prevent permanent nerve damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
