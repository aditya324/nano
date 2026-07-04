<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricMaxillofacialSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Maxillofacial Surgery')],
            [
                'name' => 'Pediatric Maxillofacial Surgery',
                'slug' => Str::slug('Pediatric Maxillofacial Surgery'),
                'h1' => 'Pediatric Maxillofacial Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric maxillofacial surgery is a specialized surgical field focused on the diagnosis, treatment, and reconstruction of facial, jaw, oral, and craniofacial conditions in children. These procedures help correct congenital abnormalities, facial trauma, developmental deformities, infections, tumors, and functional disorders affecting facial growth, breathing, feeding, speech, and overall development.',
                'about_more' => '',
                'overview' => 'Pediatric maxillofacial surgery includes treatment of cleft lip and palate, craniofacial anomalies, jaw deformities, facial fractures, cysts, tumors, temporomandibular joint disorders, and congenital facial syndromes. Surgical procedures are carefully planned to support normal facial growth and minimize long-term developmental complications. Multidisciplinary care involving pediatricians, orthodontists, speech therapists, ENT specialists, anesthesiologists, and rehabilitation teams is often essential for comprehensive treatment and recovery.',
                'symptoms' => [
            ['value' => 'Facial asymmetry or abnormal jaw growth'],
            ['value' => 'Difficulty feeding, chewing, or swallowing'],
            ['value' => 'Speech difficulties or delayed oral development'],
            ['value' => 'Facial swelling, pain, or congenital deformities'],
            ['value' => 'Dental alignment problems or restricted jaw movement'],
        ],
                'causes' => [
            ['value' => 'Congenital craniofacial and developmental abnormalities'],
            ['value' => 'Genetic or hereditary facial disorders'],
            ['value' => 'Trauma, facial fractures, or birth-related injuries'],
            ['value' => 'Infections, cysts, or tumors affecting facial structures'],
            ['value' => 'Abnormal jaw growth or temporomandibular joint disorders'],
        ],
                'risks' => [
            ['value' => 'Impaired facial growth and jaw development'],
            ['value' => 'Speech, feeding, or breathing difficulties'],
            ['value' => 'Dental malocclusion and oral function problems'],
            ['value' => 'Emotional and psychological concerns related to appearance'],
            ['value' => 'Need for multiple staged surgeries during growth years'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical maxillofacial examination and imaging evaluation'],
            ['value' => 'Corrective jaw and craniofacial reconstructive surgery procedures'],
            ['value' => 'Cleft lip and palate repair and facial trauma management'],
            ['value' => 'Orthodontic treatment, speech therapy, and rehabilitation support'],
            ['value' => 'Long-term multidisciplinary pediatric follow-up and developmental care'],
        ],
                'recovery' => 'The long-term outlook for pediatric maxillofacial surgery is generally very positive because early diagnosis and advanced reconstructive techniques significantly improve facial growth, oral function, speech, appearance, and overall quality of life. Continuous follow-up, orthodontic management, rehabilitation therapy, and multidisciplinary support are essential for maintaining successful long-term developmental and functional outcomes. _______________ 21. Prosthetic Rehabilitation (Obturators, Facial Prostheses) Prosthetic Rehabilitation (Obturators & Facial Prostheses) Procedures',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Pediatric Maxillofacial Surgery',
                'meta_description' => 'Pediatric maxillofacial surgery is a specialized surgical field focused on the diagnosis, treatment, and reconstruction of facial, jaw, oral, and craniofacial c',
                'meta_keywords' => '',
            ]
        );
    }
}
