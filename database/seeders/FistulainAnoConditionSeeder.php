<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FistulainAnoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fistula-in-Ano')],
            [
                'name' => 'Fistula-in-Ano',
                'slug' => Str::slug('Fistula-in-Ano'),
                'h1' => 'Fistula-in-Ano',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fistula-in-ano is an abnormal tunnel connecting the anal canal to the skin around the anus, usually resulting from a previous anal abscess or infection. It commonly causes recurrent discharge and discomfort.',
                'about_more' => '',
                'overview' => 'Fistula-in-ano is an abnormal tunnel connecting the anal canal to the skin around the anus, usually resulting from a previous anal abscess or infection. It commonly causes recurrent discharge and discomfort.',
                'symptoms' => [
            ['value' => 'Persistent pus or fluid discharge near the anus'],
            ['value' => 'Pain and swelling around the anal region'],
            ['value' => 'Recurrent anal abscess formation'],
            ['value' => 'Skin irritation and itching'],
            ['value' => 'Pain during sitting or bowel movements'],
        ],
                'causes' => [
            ['value' => 'Previous anal abscess or infection'],
            ['value' => 'Blocked anal glands'],
            ['value' => 'Crohn’s disease and inflammatory bowel disease'],
            ['value' => 'Trauma or surgery in the anal region'],
            ['value' => 'Tuberculosis or chronic infections'],
        ],
                'risks' => [
            ['value' => 'Recurrent infections and abscesses'],
            ['value' => 'Chronic pain and discharge'],
            ['value' => 'Multiple fistula tract formation'],
            ['value' => 'Damage to anal sphincter muscles'],
            ['value' => 'Rare risk of long-standing fistula malignancy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and fistula mapping'],
            ['value' => 'MRI or imaging evaluation when required'],
            ['value' => 'Antibiotics for associated infection'],
            ['value' => 'Fistulotomy or fistula surgery'],
            ['value' => 'Seton placement in complex fistulas'],
        ],
                'recovery' => 'Most fistulas heal successfully after surgery. Proper treatment helps prevent recurrence and preserves bowel continence.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Fistula-in-Ano',
                'meta_description' => 'Fistula-in-ano is an abnormal tunnel connecting the anal canal to the skin around the anus, usually resulting from a previous anal abscess or infection. It comm',
                'meta_keywords' => '',
            ]
        );
    }
}
