<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AppendicitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Appendicitis')],
            [
                'name' => 'Appendicitis',
                'slug' => Str::slug('Appendicitis'),
                'h1' => 'Appendicitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Appendicitis is inflammation and infection of the appendix, a small pouch attached to the large intestine. It is a common surgical emergency and usually requires prompt treatment to prevent rupture and severe abdominal infection.',
                'about_more' => '',
                'overview' => 'Appendicitis is inflammation and infection of the appendix, a small pouch attached to the large intestine. It is a common surgical emergency and usually requires prompt treatment to prevent rupture and severe abdominal infection.',
                'symptoms' => [
            ['value' => 'Sudden pain starting around the navel and shifting to the right lower abdomen'],
            ['value' => 'Fever and chills'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Loss of appetite'],
            ['value' => 'Abdominal tenderness and difficulty walking comfortably'],
        ],
                'causes' => [
            ['value' => 'Blockage of the appendix by stool or swelling'],
            ['value' => 'Bacterial infection within the appendix'],
            ['value' => 'Enlarged lymphoid tissue'],
            ['value' => 'Intestinal infections'],
            ['value' => 'Rarely tumors or foreign bodies'],
        ],
                'risks' => [
            ['value' => 'Rupture of the appendix'],
            ['value' => 'Peritonitis (infection of abdominal lining)'],
            ['value' => 'Abscess formation'],
            ['value' => 'Sepsis and systemic infection'],
            ['value' => 'Intestinal complications after rupture'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and imaging evaluation'],
            ['value' => 'Antibiotics and supportive care'],
            ['value' => 'Laparoscopic appendectomy'],
            ['value' => 'Open surgical appendectomy in complicated cases'],
            ['value' => 'Drainage of abscess if present'],
        ],
                'recovery' => 'Most patients recover completely after surgery. Early diagnosis greatly reduces the risk of rupture and serious complications.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Appendicitis',
                'meta_description' => 'Appendicitis is inflammation and infection of the appendix, a small pouch attached to the large intestine. It is a common surgical emergency and usually require',
                'meta_keywords' => '',
            ]
        );
    }
}
