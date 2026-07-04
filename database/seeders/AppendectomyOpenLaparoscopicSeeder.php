<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AppendectomyOpenLaparoscopicSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Appendectomy (Open / Laparoscopic)')],
            [
                'title' => 'Appendectomy (Open / Laparoscopic)',
                'slug' => Str::slug('Appendectomy (Open / Laparoscopic)'),
                'introduction' => 'Appendectomy is a surgical procedure performed to remove the appendix, usually due to acute appendicitis or appendix-related infection. The surgery may be performed through an open incision or by minimally invasive laparoscopic techniques. It is one of the most common emergency surgeries performed in general surgery.',
                'what_is' => 'Acute appendicitis develops when the appendix becomes inflamed due to blockage or infection. If left untreated, the appendix may rupture and lead to severe abdominal infection called peritonitis. Appendectomy can be performed as: Open appendectomy through a single abdominal incision Laparoscopic appendectomy using small keyhole incisions and a camera system Laparoscopic surgery generally offers: Faster recovery Less postoperative pain Smaller scars Shorter hospital stay The procedure is performed under general anesthesia and is considered highly effective in preventing complications of appendicitis.',
                'symptoms' => [
            ['value' => 'Severe pain in the right lower abdomen'],
            ['value' => 'Fever and loss of appetite'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Abdominal tenderness and swelling'],
            ['value' => 'Difficulty walking due to abdominal pain'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Injury to nearby organs or bowel'],
            ['value' => 'Formation of intra-abdominal abscess'],
            ['value' => 'Rare anesthesia-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep surgical wounds clean and dry'],
            ['value' => 'Take prescribed antibiotics and pain medications regularly'],
            ['value' => 'Avoid heavy lifting for several weeks'],
            ['value' => 'Gradually return to normal diet and activity'],
            ['value' => 'Attend follow-up appointments for wound evaluation'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Injury to nearby organs or bowel'],
            ['value' => 'Formation of intra-abdominal abscess'],
            ['value' => 'Rare anesthesia-related complications'],
        ],
                'long_term_outlook' => 'Most patients recover completely after appendectomy and can return to normal activities within a few weeks. Long-term complications are uncommon when surgery is performed early and appropriate postoperative care is followed.',
                'conclusion' => '',
                'seo_title' => 'Appendectomy (Open / Laparoscopic)',
                'seo_description' => 'Appendectomy is a surgical procedure performed to remove the appendix, usually due to acute appendicitis or appendix-related infection. The surgery may be performed through an open incision or by minimally invasive laparoscopic techniques. It is one of the most common emergency surgeries performed in general surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
