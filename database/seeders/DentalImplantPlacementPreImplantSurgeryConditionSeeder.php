<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DentalImplantPlacementPreImplantSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dental Implant Placement & Pre-Implant Surgery')],
            [
                'name' => 'Dental Implant Placement & Pre-Implant Surgery',
                'slug' => Str::slug('Dental Implant Placement & Pre-Implant Surgery'),
                'h1' => 'Dental Implant Placement & Pre-Implant Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dental implant placement and pre-implant surgery are specialized oral and maxillofacial procedures performed to replace missing teeth and restore oral function, jaw stability, and facial aesthetics. These treatments involve preparing the jawbone and surrounding oral structures to support long-term dental implant rehabilitation.',
                'about_more' => '',
                'overview' => 'Dental implants are titanium or biocompatible artificial tooth roots surgically placed into the jawbone to support crowns, bridges, or dentures. Pre-implant surgery may include bone grafting, ridge augmentation, sinus lift procedures, soft tissue correction, and extraction site preservation to ensure adequate bone volume and healthy oral conditions before implant placement. Advanced imaging and digital treatment planning help improve implant accuracy, stability, and long-term success.',
                'symptoms' => [
            ['value' => 'Missing teeth affecting chewing and appearance'],
            ['value' => 'Jawbone loss after tooth extraction or trauma'],
            ['value' => 'Difficulty wearing dentures or prosthetic appliances'],
            ['value' => 'Reduced facial support due to missing teeth'],
            ['value' => 'Poor oral function or bite instability'],
        ],
                'causes' => [
            ['value' => 'Tooth loss due to decay, trauma, or periodontal disease'],
            ['value' => 'Jawbone resorption following long-term tooth absence'],
            ['value' => 'Congenital missing teeth or developmental dental abnormalities'],
            ['value' => 'Failed previous dental restorations or infections'],
            ['value' => 'Need for stable long-term tooth replacement solutions'],
        ],
                'risks' => [
            ['value' => 'Swelling, pain, or temporary discomfort after surgery'],
            ['value' => 'Infection or delayed healing around the implant site'],
            ['value' => 'Implant failure or poor bone integration'],
            ['value' => 'Nerve injury or sinus-related complications in certain cases'],
            ['value' => 'Requirement for additional grafting or corrective procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical oral examination and radiographic implant planning'],
            ['value' => 'Pre-implant procedures including bone grafting and ridge augmentation'],
            ['value' => 'Sinus lift and soft tissue reconstruction when required'],
            ['value' => 'Surgical placement of dental implants with guided techniques'],
            ['value' => 'Long-term implant restoration, oral hygiene maintenance, and follow-up care'],
        ],
                'recovery' => 'The long-term outlook for dental implant placement and pre-implant surgery is generally very positive because modern implant and regenerative techniques significantly improve oral function, chewing efficiency, facial support, and overall quality of life. Proper oral hygiene, regular dental follow-up, healthy lifestyle habits, and adherence to postoperative care instructions are important for maintaining successful long-term implant outcomes. _________________________',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Dental Implant Placement & Pre-Implant Surgery',
                'meta_description' => 'Dental implant placement and pre-implant surgery are specialized oral and maxillofacial procedures performed to replace missing teeth and restore oral function,',
                'meta_keywords' => '',
            ]
        );
    }
}
