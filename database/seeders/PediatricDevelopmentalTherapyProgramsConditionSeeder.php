<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricDevelopmentalTherapyProgramsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Developmental Therapy Programs')],
            [
                'name' => 'Pediatric Developmental Therapy Programs',
                'slug' => Str::slug('Pediatric Developmental Therapy Programs'),
                'h1' => 'Pediatric Developmental Therapy Programs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric developmental therapy programs are specialized rehabilitation services designed to support the physical, cognitive, sensory, communication, and functional development of infants, children, and adolescents with developmental delays or medical conditions affecting growth and daily functioning. These programs focus on improving movement, learning, coordination, independence, and overall quality of life.',
                'about_more' => '',
                'overview' => 'Developmental therapy programs are individualized according to the child’s age, developmental needs, and medical condition. Therapy may include physiotherapy, occupational therapy, speech and language therapy, sensory integration therapy, balance and coordination training, and behavioral support. These programs are commonly recommended for children with developmental delays, cerebral palsy, autism spectrum disorders, neurological conditions, postural abnormalities, and genetic or congenital disorders.',
                'symptoms' => [
            ['value' => 'Delayed motor or developmental milestones'],
            ['value' => 'Difficulty with balance, coordination, or movement'],
            ['value' => 'Poor posture or muscle weakness'],
            ['value' => 'Speech, communication, or feeding difficulties'],
            ['value' => 'Challenges with learning, sensory processing, or daily activities'],
            ['value' => 'Common Causes'],
            ['value' => 'Premature birth or birth-related complications'],
            ['value' => 'Neurological or developmental disorders'],
            ['value' => 'Genetic or congenital conditions'],
            ['value' => 'Muscle weakness or postural imbalance'],
            ['value' => 'Sensory, cognitive, or behavioral developmental challenges'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delayed physical and functional development'],
            ['value' => 'Reduced independence in daily activities'],
            ['value' => 'Muscle stiffness, weakness, or coordination problems'],
            ['value' => 'Difficulty participating in school or social activities'],
            ['value' => 'Emotional or behavioral challenges affecting quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pediatric developmental therapy programs may include movement exercises, posture correction, balance training, sensory integration activities, speech and communication therapy, fine motor skill development, strengthening exercises, and functional play-based rehabilitation. Therapists also provide parental guidance, adaptive strategies, and home exercise programs to support the child’s ongoing development and independence.'],
            ['value' => 'Following prescribed therapy sessions and home programs consistently'],
            ['value' => 'Encouraging active participation in therapeutic activities'],
            ['value' => 'Monitoring developmental progress and functional improvements'],
            ['value' => 'Maintaining supportive home and school environments'],
            ['value' => 'Attending regular developmental and rehabilitation follow-up appointments'],
        ],
                'recovery' => 'The long-term outlook with pediatric developmental therapy programs is generally positive when early intervention and consistent rehabilitation are provided. Therapy can significantly improve movement, communication, independence, social participation, and overall developmental progress. Ongoing support, family involvement, and multidisciplinary care are important for maximizing long-term growth, learning, and quality of life. ______________________________ 23. Post-Amputation Rehabilitation & Gait Training Post-Amputation Rehabilitation & Gait Training Procedures',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Pediatric Developmental Therapy Programs',
                'meta_description' => 'Pediatric developmental therapy programs are specialized rehabilitation services designed to support the physical, cognitive, sensory, communication, and functi',
                'meta_keywords' => '',
            ]
        );
    }
}
