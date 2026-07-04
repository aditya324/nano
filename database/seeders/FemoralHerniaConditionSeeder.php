<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FemoralHerniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Femoral Hernia')],
            [
                'name' => 'Femoral Hernia',
                'slug' => Str::slug('Femoral Hernia'),
                'h1' => 'Femoral Hernia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A femoral hernia occurs when abdominal tissue pushes through the femoral canal near the upper thigh. It is more common in women and has a higher risk of strangulation compared to other hernias.',
                'about_more' => '',
                'overview' => 'A femoral hernia occurs when abdominal tissue pushes through the femoral canal near the upper thigh. It is more common in women and has a higher risk of strangulation compared to other hernias.',
                'symptoms' => [
            ['value' => 'Small lump near the groin or upper thigh'],
            ['value' => 'Groin discomfort or pain'],
            ['value' => 'Swelling increasing with activity'],
            ['value' => 'Nausea and vomiting in severe cases'],
            ['value' => 'Sudden severe pain if strangulated'],
        ],
                'causes' => [
            ['value' => 'Weakness in the femoral canal'],
            ['value' => 'Increased abdominal pressure'],
            ['value' => 'Pregnancy and childbirth'],
            ['value' => 'Chronic coughing or constipation'],
            ['value' => 'Obesity and heavy lifting'],
        ],
                'risks' => [
            ['value' => 'Intestinal obstruction'],
            ['value' => 'Strangulated hernia with tissue death'],
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Emergency surgical complications'],
            ['value' => 'Reduced blood supply to intestines'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Physical examination and imaging'],
            ['value' => 'Elective surgical repair'],
            ['value' => 'Laparoscopic or open hernia surgery'],
            ['value' => 'Emergency surgery for strangulation'],
            ['value' => 'Postoperative abdominal strengthening advice'],
        ],
                'recovery' => 'Surgical repair is usually successful. Early treatment prevents life-threatening complications.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Femoral Hernia',
                'meta_description' => 'A femoral hernia occurs when abdominal tissue pushes through the femoral canal near the upper thigh. It is more common in women and has a higher risk of strangu',
                'meta_keywords' => '',
            ]
        );
    }
}
