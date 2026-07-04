<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationonWoundCarePostoperativeRehabilitationScarPreventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention')],
            [
                'name' => 'Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention',
                'slug' => Str::slug('Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention'),
                'h1' => 'Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Patient education on wound care, postoperative rehabilitation, and scar prevention involves providing guidance and supportive care instructions to help patients recover safely after surgery, burns, trauma, or reconstructive procedures. Proper education helps improve healing, reduce complications, restore function, and minimize long-term scarring.',
                'about_more' => '',
                'overview' => 'Comprehensive patient education focuses on wound cleaning, dressing care, infection prevention, pain management, physiotherapy, mobility exercises, nutrition, scar care, and long-term rehabilitation. Patients and caregivers are guided on recognizing warning signs of complications, maintaining hygiene, following rehabilitation protocols, and using scar prevention measures such as silicone therapy, compression garments, and skin protection techniques. Continuous education and follow-up are essential for successful recovery and long-term functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Pain, swelling, or discomfort after surgery or injury'],
            ['value' => 'Wound drainage or dressing-related concerns'],
            ['value' => 'Restricted movement or muscle stiffness during recovery'],
            ['value' => 'Scar formation, itching, or skin tightness'],
            ['value' => 'Anxiety or uncertainty regarding postoperative care and healing'],
        ],
                'causes' => [
            ['value' => 'Surgical procedures, burns, or traumatic injuries'],
            ['value' => 'Chronic wounds or reconstructive treatment needs'],
            ['value' => 'Inadequate wound care or delayed rehabilitation'],
            ['value' => 'Infection or improper scar management during healing'],
            ['value' => 'Limited mobility affecting recovery and tissue healing'],
        ],
                'risks' => [
            ['value' => 'Wound infection or delayed healing'],
            ['value' => 'Excessive scar formation or contractures'],
            ['value' => 'Reduced mobility and muscle weakness'],
            ['value' => 'Chronic pain or functional limitations'],
            ['value' => 'Increased risk of wound recurrence or postoperative complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Education on wound cleaning, dressing changes, and hygiene practices'],
            ['value' => 'Postoperative physiotherapy and rehabilitation exercises'],
            ['value' => 'Scar prevention techniques including silicone therapy and compression garments'],
            ['value' => 'Nutritional guidance and pain management support'],
            ['value' => 'Long-term follow-up, counseling, and multidisciplinary rehabilitation care'],
        ],
                'recovery' => 'The long-term outlook with proper patient education and rehabilitation support is highly positive because informed wound care, early mobilization, and preventive scar management significantly improve healing and recovery outcomes. Consistent follow-up, adherence to medical instructions, physiotherapy, healthy lifestyle practices, and ongoing rehabilitation are important for maintaining long-term mobility, skin health, and overall quality of life. _______________________________',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention',
                'meta_description' => 'Patient education on wound care, postoperative rehabilitation, and scar prevention involves providing guidance and supportive care instructions to help patients',
                'meta_keywords' => '',
            ]
        );
    }
}
