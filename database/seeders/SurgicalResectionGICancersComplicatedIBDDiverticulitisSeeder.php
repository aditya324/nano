<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalResectionGICancersComplicatedIBDDiverticulitisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgical Resection (GI Cancers, Complicated IBD, Diverticulitis)')],
            [
                'title' => 'Surgical Resection (GI Cancers, Complicated IBD, Diverticulitis)',
                'slug' => Str::slug('Surgical Resection (GI Cancers, Complicated IBD, Diverticulitis)'),
                'introduction' => 'Surgical resection involves removal of diseased portions of the gastrointestinal tract affected by cancer, inflammatory bowel disease, severe infection, perforation, obstruction, or recurrent diverticulitis. It is performed when medical treatment alone is insufficient or when complications become life-threatening.',
                'what_is' => 'Management options include: Partial or complete bowel resection Colon or rectal surgery Tumor excision with lymph node removal Laparoscopic or open surgical techniques Temporary or permanent stoma creation when needed Common conditions treated include: Colon and rectal cancers Complicated Crohn’s disease or ulcerative colitis Recurrent diverticulitis Intestinal obstruction Gastrointestinal perforation Comprehensive surgical planning and postoperative rehabilitation are important for recovery.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Bleeding in stool'],
            ['value' => 'Persistent bowel disturbances'],
            ['value' => 'Weight loss or weakness'],
            ['value' => 'Fever or intestinal obstruction symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Leakage from bowel connections'],
            ['value' => 'Stoma-related complications'],
            ['value' => 'Blood clots or lung complications'],
            ['value' => 'Recurrence of underlying disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain adequate hydration and nutrition'],
            ['value' => 'Follow wound care instructions carefully'],
            ['value' => 'Gradually resume physical activity'],
            ['value' => 'Attend regular surgical follow-up visits'],
            ['value' => 'Monitor bowel function and dietary tolerance'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Leakage from bowel connections'],
            ['value' => 'Stoma-related complications'],
            ['value' => 'Blood clots or lung complications'],
            ['value' => 'Recurrence of underlying disease'],
        ],
                'long_term_outlook' => 'Many patients experience significant improvement in symptoms and quality of life after surgery. Regular follow-up, nutritional care, cancer surveillance, and lifestyle modification support long-term digestive health and recovery.',
                'conclusion' => '',
                'seo_title' => 'Surgical Resection (GI Cancers, Complicated IBD, Diverticulitis)',
                'seo_description' => 'Surgical resection involves removal of diseased portions of the gastrointestinal tract affected by cancer, inflammatory bowel disease, severe infection, perforation, obstruction, or recurrent diverticulitis. It is performed when medical treatment alone is insufficient or when complications become life-threatening.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
