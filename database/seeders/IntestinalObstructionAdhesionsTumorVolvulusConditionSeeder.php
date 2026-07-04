<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntestinalObstructionAdhesionsTumorVolvulusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Intestinal Obstruction (Adhesions, Tumor, Volvulus)')],
            [
                'name' => 'Intestinal Obstruction (Adhesions, Tumor, Volvulus)',
                'slug' => Str::slug('Intestinal Obstruction (Adhesions, Tumor, Volvulus)'),
                'h1' => 'Intestinal Obstruction (Adhesions, Tumor, Volvulus)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Intestinal obstruction occurs when the normal movement of intestinal contents is blocked partially or completely. Causes include scar tissue adhesions, tumors, hernias, or twisting of the bowel (volvulus).',
                'about_more' => '',
                'overview' => 'Intestinal obstruction occurs when the normal movement of intestinal contents is blocked partially or completely. Causes include scar tissue adhesions, tumors, hernias, or twisting of the bowel (volvulus).',
                'symptoms' => [
            ['value' => 'Severe abdominal pain and cramping'],
            ['value' => 'Vomiting and nausea'],
            ['value' => 'Abdominal swelling and bloating'],
            ['value' => 'Constipation or inability to pass gas'],
            ['value' => 'Reduced appetite and dehydration'],
        ],
                'causes' => [
            ['value' => 'Post-surgical adhesions'],
            ['value' => 'Intestinal tumors or masses'],
            ['value' => 'Hernias causing bowel trapping'],
            ['value' => 'Volvulus or twisting of intestines'],
            ['value' => 'Inflammatory bowel disease'],
        ],
                'risks' => [
            ['value' => 'Intestinal perforation'],
            ['value' => 'Loss of blood supply to bowel tissue'],
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Peritonitis and sepsis'],
            ['value' => 'Multi-organ complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Abdominal imaging and surgical evaluation'],
            ['value' => 'Intravenous fluids and electrolyte correction'],
            ['value' => 'Nasogastric tube decompression'],
            ['value' => 'Emergency surgery for complete obstruction'],
            ['value' => 'Removal of tumors or damaged bowel sections'],
        ],
                'recovery' => 'Outcome depends on the cause and severity of obstruction. Early diagnosis and treatment significantly reduce complications and improve recovery.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Intestinal Obstruction (Adhesions, Tumor, Volvulus)',
                'meta_description' => 'Intestinal obstruction occurs when the normal movement of intestinal contents is blocked partially or completely. Causes include scar tissue adhesions, tumors, ',
                'meta_keywords' => '',
            ]
        );
    }
}
