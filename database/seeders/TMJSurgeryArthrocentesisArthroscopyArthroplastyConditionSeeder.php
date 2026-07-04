<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TMJSurgeryArthrocentesisArthroscopyArthroplastyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('TMJ Surgery (Arthrocentesis, Arthroscopy & Arthroplasty)')],
            [
                'name' => 'TMJ Surgery (Arthrocentesis, Arthroscopy & Arthroplasty)',
                'slug' => Str::slug('TMJ Surgery (Arthrocentesis, Arthroscopy & Arthroplasty)'),
                'h1' => 'TMJ Surgery (Arthrocentesis, Arthroscopy & Arthroplasty)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Temporomandibular Joint (TMJ) surgery includes specialized surgical procedures performed to treat severe temporomandibular joint disorders affecting jaw movement, joint function, chewing, speech, and facial comfort. Procedures such as arthrocentesis, arthroscopy, and arthroplasty are used to relieve pain, improve jaw mobility, reduce inflammation, and restore normal joint function when conservative treatments are unsuccessful.',
                'about_more' => '',
                'overview' => 'TMJ disorders may result from joint degeneration, arthritis, trauma, internal derangement, ankylosis, or chronic inflammation. Arthrocentesis is a minimally invasive procedure involving joint lavage and fluid irrigation to reduce inflammation and improve movement. Arthroscopy uses small instruments and a camera to diagnose and treat joint abnormalities with minimal tissue disruption. Arthroplasty is an open surgical procedure performed to repair, reconstruct, or replace damaged joint structures in advanced TMJ disease. Treatment selection depends on the severity and type of joint disorder.',
                'symptoms' => [
            ['value' => 'Jaw pain and tenderness around the temporomandibular joint'],
            ['value' => 'Restricted mouth opening or jaw stiffness'],
            ['value' => 'Clicking, popping, or locking of the jaw'],
            ['value' => 'Difficulty chewing, speaking, or swallowing'],
            ['value' => 'Headaches, earaches, or facial muscle discomfort'],
        ],
                'causes' => [
            ['value' => 'Temporomandibular joint arthritis and degeneration'],
            ['value' => 'Trauma or fractures involving the jaw joint'],
            ['value' => 'Internal derangement or displacement of the joint disc'],
            ['value' => 'Chronic inflammation or ankylosis of the TMJ'],
            ['value' => 'Teeth grinding, jaw clenching, or excessive joint stress'],
        ],
                'risks' => [
            ['value' => 'Swelling, pain, or temporary jaw stiffness after surgery'],
            ['value' => 'Infection or bleeding around the surgical site'],
            ['value' => 'Nerve injury causing temporary numbness or weakness'],
            ['value' => 'Recurrence of joint pain or restricted movement'],
            ['value' => 'Need for additional reconstructive procedures in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical TMJ assessment and advanced imaging evaluation'],
            ['value' => 'Arthrocentesis for joint lavage and inflammation reduction'],
            ['value' => 'TMJ arthroscopy for minimally invasive joint repair and management'],
            ['value' => 'Arthroplasty or joint reconstruction for advanced TMJ disorders'],
            ['value' => 'Long-term physiotherapy, bite management, and postoperative rehabilitation support'],
        ],
                'recovery' => 'The long-term outlook for TMJ surgery is generally very positive because modern minimally invasive and reconstructive techniques significantly improve jaw movement, pain relief, chewing function, and overall quality of life. Early treatment, physiotherapy, lifestyle modification, regular follow-up, and rehabilitation exercises are important for maintaining successful long-term joint function and reducing recurrence of symptoms.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'TMJ Surgery (Arthrocentesis, Arthroscopy & Arthroplasty)',
                'meta_description' => 'Temporomandibular Joint (TMJ) surgery includes specialized surgical procedures performed to treat severe temporomandibular joint disorders affecting jaw movemen',
                'meta_keywords' => '',
            ]
        );
    }
}
