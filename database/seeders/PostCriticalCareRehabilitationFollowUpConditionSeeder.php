<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostCriticalCareRehabilitationFollowUpConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Critical Care Rehabilitation & Follow-Up')],
            [
                'name' => 'Post-Critical Care Rehabilitation & Follow-Up',
                'slug' => Str::slug('Post-Critical Care Rehabilitation & Follow-Up'),
                'h1' => 'Post-Critical Care Rehabilitation & Follow-Up',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-critical care rehabilitation and follow-up are specialized recovery procedures designed to support patients who have survived severe illness, prolonged ICU stay, major trauma, respiratory failure, sepsis, or multi-organ dysfunction. These rehabilitation programs focus on restoring physical strength, cognitive function, emotional well-being, respiratory health, and overall quality of life after intensive medical treatment and critical illness.',
                'about_more' => '',
                'overview' => 'Post-critical care rehabilitation involves a multidisciplinary approach including physiotherapy, occupational therapy, respiratory rehabilitation, nutritional support, psychological counseling, neurological recovery programs, and long-term medical follow-up. Patients recovering from critical illness often experience muscle weakness, reduced mobility, breathing difficulties, cognitive impairment, emotional stress, and fatigue following prolonged ICU treatment. Rehabilitation programs are individualized based on the patient’s medical condition, organ recovery, functional limitations, and long-term healthcare needs. These services are commonly provided in rehabilitation centers, hospitals, outpatient clinics, and home-care settings.',
                'symptoms' => [
            ['value' => 'Generalized weakness and reduced physical endurance'],
            ['value' => 'Difficulty walking, moving, or performing daily activities'],
            ['value' => 'Breathing difficulty or reduced lung function after critical illness'],
            ['value' => 'Memory problems, confusion, or reduced concentration'],
            ['value' => 'Anxiety, depression, sleep disturbances, or emotional stress following ICU care'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Long-term physical disability or muscle wasting'],
            ['value' => 'Persistent respiratory or cardiovascular complications'],
            ['value' => 'Cognitive impairment or psychological distress after ICU stay'],
            ['value' => 'Reduced independence and delayed recovery'],
            ['value' => 'Increased risk of recurrent hospitalization or chronic health complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Post-critical care rehabilitation and follow-up procedures focus on restoring physical function, improving respiratory capacity, supporting emotional recovery, and enhancing long-term health outcomes. Treatment may include physiotherapy, mobility training, breathing exercises, nutritional therapy, occupational therapy, speech therapy, psychological counseling, medication management, and chronic disease monitoring. Patients may also receive pulmonary rehabilitation, cardiac rehabilitation, neurological support, pain management, sleep optimization, and social support services. Multidisciplinary rehabilitation teams work closely with patients and families to improve recovery, independence, and overall quality of life after critical illness.'],
            ['value' => 'Regular rehabilitation therapy sessions and functional assessments'],
            ['value' => 'Monitoring respiratory, neurological, and cardiovascular recovery'],
            ['value' => 'Nutritional support and medication management'],
            ['value' => 'Psychological counseling and emotional support programs'],
            ['value' => 'Long-term follow-up with critical care, rehabilitation, and specialty healthcare teams'],
        ],
                'recovery' => 'The long-term outlook following post-critical care rehabilitation depends on the severity of the original illness, duration of ICU stay, organ involvement, and rehabilitation progress. Early rehabilitation intervention, multidisciplinary follow-up care, physical therapy, nutritional support, psychological counseling, and continued medical monitoring significantly help improve strength, mobility, organ recovery, emotional well-being, independence, and overall quality of life. ______________________',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Post-Critical Care Rehabilitation & Follow-Up',
                'meta_description' => 'Post-critical care rehabilitation and follow-up are specialized recovery procedures designed to support patients who have survived severe illness, prolonged ICU',
                'meta_keywords' => '',
            ]
        );
    }
}
