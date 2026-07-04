<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpeechSwallowingTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Speech & Swallowing Therapy')],
            [
                'name' => 'Speech & Swallowing Therapy',
                'slug' => Str::slug('Speech & Swallowing Therapy'),
                'h1' => 'Speech & Swallowing Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Speech and swallowing therapy is a specialized rehabilitation service that helps individuals improve communication, speech clarity, language skills, voice control, and safe swallowing abilities affected by stroke, neurological disorders, or other medical conditions. Therapy focuses on restoring functional communication and reducing complications related to swallowing difficulties.',
                'about_more' => '',
                'overview' => 'Speech-language pathologists evaluate and treat speech, language, cognitive-communication, and swallowing disorders caused by neurological injuries or diseases. Therapy programs may include speech exercises, language training, cognitive rehabilitation, voice therapy, swallowing exercises, and dietary modifications to improve communication and safe eating. These therapies are commonly recommended for patients recovering from stroke, traumatic brain injury, Parkinson’s disease, multiple sclerosis, and other neurological conditions.',
                'symptoms' => [
            ['value' => 'Slurred or unclear speech'],
            ['value' => 'Difficulty speaking or understanding language'],
            ['value' => 'Problems swallowing food or liquids'],
            ['value' => 'Choking, coughing, or aspiration during eating'],
            ['value' => 'Memory, attention, or communication difficulties'],
            ['value' => 'Common Causes'],
            ['value' => 'Stroke or traumatic brain injury'],
            ['value' => 'Parkinson’s disease and movement disorders'],
            ['value' => 'Multiple sclerosis or neurological degeneration'],
            ['value' => 'Head and neck injuries or surgeries'],
            ['value' => 'Neuromuscular disorders affecting speech and swallowing muscles'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Difficulty communicating effectively'],
            ['value' => 'Aspiration pneumonia due to swallowing problems'],
            ['value' => 'Malnutrition or dehydration from unsafe swallowing'],
            ['value' => 'Emotional stress, anxiety, or social isolation'],
            ['value' => 'Reduced independence in daily communication and eating activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Speech and swallowing therapy may include articulation exercises, language rehabilitation, cognitive therapy, voice training, swallowing exercises, breathing coordination techniques, and dietary adjustments. Therapists may also recommend assistive communication devices, feeding strategies, posture correction, and multidisciplinary rehabilitation approaches to improve speech clarity and swallowing safety.'],
            ['value' => 'Practicing prescribed speech and swallowing exercises regularly'],
            ['value' => 'Following safe swallowing techniques and dietary recommendations'],
            ['value' => 'Monitoring for choking, coughing, or aspiration symptoms'],
            ['value' => 'Maintaining hydration and proper nutritional intake'],
            ['value' => 'Regular therapy follow-up and progress assessment'],
        ],
                'recovery' => 'The long-term outlook for speech and swallowing rehabilitation depends on the underlying neurological condition, severity of impairment, and consistency of therapy. Early intervention and structured rehabilitation can significantly improve communication, swallowing safety, independence, and quality of life. Continuous therapy, supportive care, and multidisciplinary follow-up are important for maintaining long-term functional recovery and overall well-being. _________________________ 4. Prosthetics & Orthotics Management Prosthetics & Orthotics Management Procedures',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Speech & Swallowing Therapy',
                'meta_description' => 'Speech and swallowing therapy is a specialized rehabilitation service that helps individuals improve communication, speech clarity, language skills, voice contr',
                'meta_keywords' => '',
            ]
        );
    }
}
