<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HerniaRepairOpenLaparoscopicMeshSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hernia Repair (Open / Laparoscopic / Mesh)')],
            [
                'title' => 'Hernia Repair (Open / Laparoscopic / Mesh)',
                'slug' => Str::slug('Hernia Repair (Open / Laparoscopic / Mesh)'),
                'introduction' => 'Hernia repair surgery is performed to correct weakness in the abdominal wall through which internal organs or tissues protrude. Surgical repair strengthens the affected area and prevents complications such as bowel obstruction or strangulation.',
                'what_is' => 'Common hernias include: Inguinal hernia Umbilical hernia Incisional hernia Femoral hernia Repair methods include: Open surgical repair Laparoscopic repair Mesh reinforcement techniques Mesh placement helps strengthen weakened tissue and reduces recurrence risk. Laparoscopic repair generally provides: Faster recovery Less pain Smaller scars Earlier return to work',
                'symptoms' => [
            ['value' => 'Visible swelling or bulge'],
            ['value' => 'Pain during lifting or coughing'],
            ['value' => 'Groin discomfort or heaviness'],
            ['value' => 'Swelling that increases on standing'],
            ['value' => 'Sudden severe pain in strangulated hernia'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection or bleeding'],
            ['value' => 'Hernia recurrence'],
            ['value' => 'Chronic postoperative pain'],
            ['value' => 'Mesh-related complications'],
            ['value' => 'Injury to surrounding structures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy lifting during recovery'],
            ['value' => 'Use abdominal support if recommended'],
            ['value' => 'Prevent constipation and excessive straining'],
            ['value' => 'Maintain proper wound care'],
            ['value' => 'Attend follow-up appointments regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or bleeding'],
            ['value' => 'Hernia recurrence'],
            ['value' => 'Chronic postoperative pain'],
            ['value' => 'Mesh-related complications'],
            ['value' => 'Injury to surrounding structures'],
        ],
                'long_term_outlook' => 'Successful hernia repair provides long-term symptom relief and prevents complications. Most patients return to normal activities with improved comfort and abdominal stability.',
                'conclusion' => '',
                'seo_title' => 'Hernia Repair (Open / Laparoscopic / Mesh)',
                'seo_description' => 'Hernia repair surgery is performed to correct weakness in the abdominal wall through which internal organs or tissues protrude. Surgical repair strengthens the affected area and prevents complications such as bowel obstruction or strangulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
