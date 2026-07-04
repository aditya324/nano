<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WartsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Warts')],
            [
                'name' => 'Warts',
                'slug' => Str::slug('Warts'),
                'h1' => 'Warts',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Warts are benign (noncancerous) skin growths caused by infection with the human papillomavirus (HPV). They can develop on the skin or mucous membranes such as inside the mouth. Warts vary in size, shape, and location and are commonly found on the hands, feet, face, or genital areas. Some warts may disappear on their own, while others may require medical treatment.',
                'about_more' => '',
                'overview' => 'Warts are benign (noncancerous) skin growths caused by infection with the human papillomavirus (HPV). They can develop on the skin or mucous membranes such as inside the mouth. Warts vary in size, shape, and location and are commonly found on the hands, feet, face, or genital areas. Some warts may disappear on their own, while others may require medical treatment.',
                'symptoms' => [
            ['value' => 'Rough, raised skin growths or bumps'],
            ['value' => 'Skin-colored, brown, or gray lesions'],
            ['value' => 'Pain or discomfort while walking in plantar warts'],
            ['value' => 'Small black dots within the wart surface in some cases'],
            ['value' => 'Warts that may occur singly or in clusters'],
        ],
                'causes' => [
            ['value' => 'Infection with human papillomavirus (HPV)'],
            ['value' => 'Direct skin-to-skin contact with infected individuals'],
            ['value' => 'Walking barefoot in public wet areas such as pools or locker rooms'],
            ['value' => 'Skin injuries or weakened skin barriers'],
            ['value' => 'Weak immune system increasing susceptibility to infection'],
        ],
                'risks' => [
            ['value' => 'Spread of warts to other body areas or individuals'],
            ['value' => 'Pain or discomfort, especially with plantar warts'],
            ['value' => 'Cosmetic concerns and skin irritation'],
            ['value' => 'Recurrence after treatment'],
            ['value' => 'Secondary skin infections due to scratching or injury'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical wart removal medications'],
            ['value' => 'Cryotherapy (freezing treatment)'],
            ['value' => 'Laser therapy or minor surgical removal'],
            ['value' => 'Chemical treatments such as salicylic acid preparations'],
            ['value' => 'Immune-based therapies for persistent or recurrent warts'],
        ],
                'recovery' => 'The long-term outlook for warts is generally very good, and many warts resolve with treatment or over time as the immune system clears the infection. Some warts may recur or spread, especially in individuals with weakened immunity. Good hygiene, avoiding direct contact with warts, and timely dermatologic treatment help reduce recurrence and maintain healthy skin. ___________________ 6. Viral Skin Infections (Warts, Herpes Zoster, Herpes Simplex) Herpes Simplex',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Warts',
                'meta_description' => 'Warts are benign (noncancerous) skin growths caused by infection with the human papillomavirus (HPV). They can develop on the skin or mucous membranes such as i',
                'meta_keywords' => '',
            ]
        );
    }
}
