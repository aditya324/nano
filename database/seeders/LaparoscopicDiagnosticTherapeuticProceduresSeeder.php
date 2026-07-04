<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaparoscopicDiagnosticTherapeuticProceduresSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laparoscopic Diagnostic & Therapeutic Procedures')],
            [
                'title' => 'Laparoscopic Diagnostic & Therapeutic Procedures',
                'slug' => Str::slug('Laparoscopic Diagnostic & Therapeutic Procedures'),
                'introduction' => 'Laparoscopic procedures are minimally invasive surgeries performed using small incisions, specialized instruments, and a camera system to diagnose and treat abdominal conditions.',
                'what_is' => 'Laparoscopy is used for: Diagnostic evaluation of abdominal pain Gallbladder surgery Hernia repair Appendectomy Intestinal procedures Advantages include: Smaller scars Reduced postoperative pain Faster recovery Lower infection risk Shorter hospital stay The surgeon performs the procedure while viewing internal organs on a video monitor.',
                'symptoms' => [
            ['value' => 'Chronic abdominal pain'],
            ['value' => 'Gallbladder disease symptoms'],
            ['value' => 'Hernia-related discomfort'],
            ['value' => 'Suspected abdominal pathology'],
            ['value' => 'Unexplained abdominal swelling or pain'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Injury to internal organs'],
            ['value' => 'Gas-related abdominal discomfort'],
            ['value' => 'Need for conversion to open surgery'],
            ['value' => 'Rare anesthesia complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Walk early to improve circulation'],
            ['value' => 'Keep wounds clean and dry'],
            ['value' => 'Follow dietary advice carefully'],
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Attend follow-up appointments regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Injury to internal organs'],
            ['value' => 'Gas-related abdominal discomfort'],
            ['value' => 'Need for conversion to open surgery'],
            ['value' => 'Rare anesthesia complications'],
        ],
                'long_term_outlook' => 'Laparoscopic procedures generally provide excellent surgical outcomes with faster recovery, reduced pain, and quicker return to normal activities.',
                'conclusion' => '',
                'seo_title' => 'Laparoscopic Diagnostic & Therapeutic Procedures',
                'seo_description' => 'Laparoscopic procedures are minimally invasive surgeries performed using small incisions, specialized instruments, and a camera system to diagnose and treat abdominal conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
