<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PainManagementNeuropathicPainControlSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pain Management (Neuropathic Pain Control)')],
            [
                'title' => 'Pain Management (Neuropathic Pain Control)',
                'slug' => Str::slug('Pain Management (Neuropathic Pain Control)'),
                'introduction' => 'Pain management focuses on controlling nerve-related and wound-related pain associated with diabetic foot complications.',
                'what_is' => 'Diabetic neuropathy can cause burning pain, numbness, tingling, and discomfort that affect daily activities and quality of life.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic neuropathy'],
            ['value' => 'Chronic foot pain'],
            ['value' => 'Post-surgical pain'],
            ['value' => 'Burning and tingling sensations'],
            ['value' => 'Painful diabetic ulcers'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include pain medications, neuropathic pain drugs, physiotherapy, topical therapies, lifestyle modification, and supportive diabetic care.'],
            ['value' => 'Benefits'],
            ['value' => 'Reduced pain and discomfort'],
            ['value' => 'Improved sleep and mobility'],
            ['value' => 'Better quality of life'],
            ['value' => 'Enhanced rehabilitation participation'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Medication side effects'],
            ['value' => 'Sedation or dizziness'],
            ['value' => 'Incomplete pain relief in severe neuropathy'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Medication compliance'],
            ['value' => 'Regular follow-up'],
            ['value' => 'Blood sugar management'],
            ['value' => 'Foot protection and exercise'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Proper pain management improves comfort, mobility, and long-term diabetic foot care outcomes.',
                'conclusion' => '',
                'seo_title' => 'Pain Management (Neuropathic Pain Control)',
                'seo_description' => 'Pain management focuses on controlling nerve-related and wound-related pain associated with diabetic foot complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
