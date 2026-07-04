<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PsychiatricCounselingTherapyRoomsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Psychiatric Counseling & Therapy Rooms')],
            [
                'title' => 'Psychiatric Counseling & Therapy Rooms',
                'slug' => Str::slug('Psychiatric Counseling & Therapy Rooms'),
                'introduction' => 'Psychiatric counseling and therapy rooms are specially designed clinical spaces that provide a safe, private, and comfortable environment for mental health consultations, psychological counseling, psychotherapy sessions, and emotional support services. These rooms are structured to support confidential communication between patients and mental health professionals while promoting emotional comfort, trust, and therapeutic care.',
                'what_is' => 'Psychiatric counseling and therapy rooms are commonly used for individual counseling, family therapy, couples therapy, group therapy, psychiatric evaluations, behavioral therapy, stress management sessions, addiction counseling, and psychological rehabilitation programs. These facilities are designed with calming interiors, confidential consultation settings, sound privacy measures, and supportive therapeutic environments to encourage open discussion of emotional, behavioral, and psychological concerns. Mental health professionals including psychiatrists, psychologists, counselors, and therapists utilize these rooms to provide comprehensive mental healthcare and emotional support services.',
                'symptoms' => [
            ['value' => 'Anxiety, stress, or emotional distress'],
            ['value' => 'Depression, mood instability, or behavioral concerns'],
            ['value' => 'Relationship difficulties or family-related emotional issues'],
            ['value' => 'Difficulty coping with trauma, grief, or life challenges'],
            ['value' => 'Mental health symptoms requiring counseling or psychotherapy support'],
        ],
                'causes' => [
            ['value' => 'Mental health disorders such as depression, anxiety, or bipolar disorder'],
            ['value' => 'Emotional trauma, stress, or social difficulties'],
            ['value' => 'Behavioral or psychological conditions affecting daily functioning'],
            ['value' => 'Substance misuse or emotional instability'],
            ['value' => 'Long-term emotional distress requiring therapeutic intervention'],
        ],
                'condition_risks' => [
            ['value' => 'Emotional discomfort during difficult therapeutic discussions'],
            ['value' => 'Delayed mental health improvement without regular therapy participation'],
            ['value' => 'Psychological distress affecting communication or treatment engagement'],
            ['value' => 'Need for crisis intervention in severe psychiatric conditions'],
            ['value' => 'Requirement for long-term counseling and multidisciplinary mental healthcare support'],
            ['value' => 'Treatment Options'],
            ['value' => 'Psychiatric counseling and therapy rooms support a wide range of mental health treatments and therapeutic interventions. Services may include cognitive behavioral therapy (CBT), dialectical behavior therapy (DBT), supportive counseling, trauma-focused therapy, grief counseling, family and couples therapy, stress management programs, addiction rehabilitation counseling, mindfulness therapy, psychiatric medication management, and emotional wellness programs. These therapeutic environments also support long-term rehabilitation, crisis intervention, coping skill development, and coordinated multidisciplinary mental healthcare.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular counseling and psychotherapy follow-up sessions'],
            ['value' => 'Emotional support and mental wellness monitoring'],
            ['value' => 'Behavioral therapy and coping skill development'],
            ['value' => 'Family involvement and supportive rehabilitation when required'],
            ['value' => 'Continued psychiatric care and long-term mental health management'],
        ],
                'surgery_risks' => [
            ['value' => 'Emotional discomfort during difficult therapeutic discussions'],
            ['value' => 'Delayed mental health improvement without regular therapy participation'],
            ['value' => 'Psychological distress affecting communication or treatment engagement'],
            ['value' => 'Need for crisis intervention in severe psychiatric conditions'],
            ['value' => 'Requirement for long-term counseling and multidisciplinary mental healthcare support'],
            ['value' => 'Treatment Options'],
            ['value' => 'Psychiatric counseling and therapy rooms support a wide range of mental health treatments and therapeutic interventions. Services may include cognitive behavioral therapy (CBT), dialectical behavior therapy (DBT), supportive counseling, trauma-focused therapy, grief counseling, family and couples therapy, stress management programs, addiction rehabilitation counseling, mindfulness therapy, psychiatric medication management, and emotional wellness programs. These therapeutic environments also support long-term rehabilitation, crisis intervention, coping skill development, and coordinated multidisciplinary mental healthcare.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with psychiatric counseling and therapy facilities is generally positive when individuals actively participate in therapy and ongoing mental healthcare. Consistent counseling, emotional support, healthy coping strategies, psychotherapy participation, and long-term psychiatric follow-up significantly help improve emotional stability, communication skills, coping abilities, relationships, and overall quality of life. Supportive therapeutic environments play a vital role in promoting long-term mental wellness and psychological recovery.',
                'conclusion' => '',
                'seo_title' => 'Psychiatric Counseling & Therapy Rooms',
                'seo_description' => 'Psychiatric counseling and therapy rooms are specially designed clinical spaces that provide a safe, private, and comfortable environment for mental health consultations, psychological counseling, psychotherapy sessions, and emotional support services. These rooms are structured to support confidential communication between patients and mental health professionals while promoting emotional comfort, trust, and therapeutic care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
