<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrthognathicSurgeryforJawRealignmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Orthognathic Surgery for Jaw Realignment')],
            [
                'name' => 'Orthognathic Surgery for Jaw Realignment',
                'slug' => Str::slug('Orthognathic Surgery for Jaw Realignment'),
                'h1' => 'Orthognathic Surgery for Jaw Realignment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Orthognathic surgery is a specialized corrective jaw surgery performed to realign the upper jaw (maxilla), lower jaw (mandible), or both to improve bite function, facial balance, speech, breathing, and overall oral health. This procedure is commonly recommended for severe jaw misalignment and skeletal deformities that cannot be corrected with orthodontic treatment alone.',
                'about_more' => '',
                'overview' => 'Orthognathic surgery is performed in combination with orthodontic treatment to correct jaw discrepancies, facial asymmetry, bite abnormalities, and functional problems related to chewing, speech, and breathing. The procedure involves repositioning the jawbones using advanced surgical techniques and stabilizing them with plates and screws. Orthognathic surgery can significantly improve facial harmony, dental alignment, airway function, and long-term oral health.',
                'symptoms' => [
            ['value' => 'Difficulty chewing or biting food properly'],
            ['value' => 'Jaw pain or temporomandibular joint discomfort'],
            ['value' => 'Facial asymmetry or abnormal jaw appearance'],
            ['value' => 'Misaligned bite or uneven dental contact'],
            ['value' => 'Speech difficulties or breathing-related problems'],
        ],
                'causes' => [
            ['value' => 'Abnormal jaw growth and skeletal development'],
            ['value' => 'Congenital craniofacial deformities'],
            ['value' => 'Genetic or hereditary jaw alignment disorders'],
            ['value' => 'Trauma or previous facial injury affecting jaw structure'],
            ['value' => 'Severe malocclusion not correctable with orthodontics alone'],
        ],
                'risks' => [
            ['value' => 'Swelling, pain, or temporary numbness after surgery'],
            ['value' => 'Infection or delayed bone healing'],
            ['value' => 'Bite irregularities or relapse in jaw alignment'],
            ['value' => 'Nerve injury causing altered sensation in the lips or chin'],
            ['value' => 'Requirement for long-term orthodontic and rehabilitative care'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical facial and dental skeletal assessment'],
            ['value' => 'Orthodontic treatment planning before and after surgery'],
            ['value' => 'Surgical repositioning of upper and/or lower jaws'],
            ['value' => 'Facial asymmetry correction and bite stabilization procedures'],
            ['value' => 'Long-term rehabilitation, physiotherapy, and orthodontic follow-up support'],
        ],
                'recovery' => 'The long-term outlook for orthognathic surgery is generally very positive because modern surgical and orthodontic techniques significantly improve jaw function, facial symmetry, breathing, speech, and overall quality of life. Proper treatment planning, postoperative rehabilitation, regular follow-up, and adherence to orthodontic care instructions are important for maintaining successful long-term functional and cosmetic outcomes. __________________ 5. Cleft Lip & Palate Repair / Craniofacial Surgery Cleft Lip & Palate Repair / Craniofacial Surgery Procedures',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Orthognathic Surgery for Jaw Realignment',
                'meta_description' => 'Orthognathic surgery is a specialized corrective jaw surgery performed to realign the upper jaw (maxilla), lower jaw (mandible), or both to improve bite functio',
                'meta_keywords' => '',
            ]
        );
    }
}
