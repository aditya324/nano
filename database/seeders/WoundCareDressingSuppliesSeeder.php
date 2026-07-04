<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WoundCareDressingSuppliesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Wound Care & Dressing Supplies')],
            [
                'title' => 'Wound Care & Dressing Supplies',
                'slug' => Str::slug('Wound Care & Dressing Supplies'),
                'introduction' => 'Wound care and dressing supplies are essential medical materials used to protect wounds, promote healing, prevent infection, and manage drainage or skin damage. These supplies support the treatment of acute injuries, chronic wounds, surgical wounds, burns, ulcers, and dermatologic procedures requiring specialized skin care.',
                'what_is' => 'Wound care supplies include sterile dressings, gauze, bandages, adhesive tapes, hydrocolloid dressings, foam dressings, antimicrobial materials, wound cleansers, and protective skin barriers. Different dressing types are selected based on the size, depth, moisture level, and condition of the wound. Proper wound care management helps accelerate healing, reduce pain, and minimize complications such as infection or scarring.',
                'symptoms' => [
            ['value' => 'Open wounds or skin ulcers'],
            ['value' => 'Surgical wounds or biopsy sites'],
            ['value' => 'Burns, cuts, or traumatic skin injuries'],
            ['value' => 'Chronic non-healing wounds'],
            ['value' => 'Skin irritation, drainage, or tissue breakdown'],
        ],
                'causes' => [
            ['value' => 'Trauma, cuts, or accidental injuries'],
            ['value' => 'Surgical procedures or dermatologic treatments'],
            ['value' => 'Diabetes and poor circulation causing chronic ulcers'],
            ['value' => 'Burns or pressure-related skin damage'],
            ['value' => 'Skin infections or inflammatory skin conditions'],
        ],
                'condition_risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Skin irritation or allergic reactions to dressings'],
            ['value' => 'Excess moisture or wound dryness affecting healing'],
            ['value' => 'Scarring or pigmentation changes'],
            ['value' => 'Recurrent wound breakdown or chronic ulcer formation'],
            ['value' => 'Treatment Options'],
            ['value' => 'Wound care and dressing supplies are used as part of comprehensive wound management plans tailored to the type and severity of the wound. Treatments may include wound cleaning, moisture-balancing dressings, antimicrobial therapy, pressure relief, debridement, and advanced wound care techniques. Dermatologists and wound care specialists select appropriate dressing materials to support optimal healing and reduce complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping wounds clean and properly dressed'],
            ['value' => 'Changing dressings as instructed by healthcare providers'],
            ['value' => 'Monitoring for redness, swelling, drainage, or infection'],
            ['value' => 'Protecting wounds from pressure, friction, or trauma'],
            ['value' => 'Regular follow-up for wound assessment and healing progress'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Skin irritation or allergic reactions to dressings'],
            ['value' => 'Excess moisture or wound dryness affecting healing'],
            ['value' => 'Scarring or pigmentation changes'],
            ['value' => 'Recurrent wound breakdown or chronic ulcer formation'],
            ['value' => 'Treatment Options'],
            ['value' => 'Wound care and dressing supplies are used as part of comprehensive wound management plans tailored to the type and severity of the wound. Treatments may include wound cleaning, moisture-balancing dressings, antimicrobial therapy, pressure relief, debridement, and advanced wound care techniques. Dermatologists and wound care specialists select appropriate dressing materials to support optimal healing and reduce complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook with proper wound care management is generally very positive. Appropriate dressing supplies and consistent wound care help promote faster healing, reduce infection risk, and improve skin recovery. Regular medical follow-up, healthy lifestyle practices, and preventive skin care are important for maintaining long-term skin integrity and preventing recurrence of chronic wounds.',
                'conclusion' => '',
                'seo_title' => 'Wound Care & Dressing Supplies',
                'seo_description' => 'Wound care and dressing supplies are essential medical materials used to protect wounds, promote healing, prevent infection, and manage drainage or skin damage. These supplies support the treatment of acute injuries, chronic wounds, surgical wounds, burns, ulcers, and dermatologic procedures requiring specialized skin care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
