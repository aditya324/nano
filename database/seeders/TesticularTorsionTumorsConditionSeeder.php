<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TesticularTorsionTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Testicular Torsion / Tumors')],
            [
                'name' => 'Testicular Torsion / Tumors',
                'slug' => Str::slug('Testicular Torsion / Tumors'),
                'h1' => 'Testicular Torsion / Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Testicular torsion is a surgical emergency where the spermatic cord twists and cuts off blood supply to the testicle. Testicular tumors are abnormal growths that may be benign or malignant and require prompt evaluation.',
                'about_more' => '',
                'overview' => 'Testicular torsion is a surgical emergency where the spermatic cord twists and cuts off blood supply to the testicle. Testicular tumors are abnormal growths that may be benign or malignant and require prompt evaluation.',
                'symptoms' => [
            ['value' => 'Sudden severe scrotal pain'],
            ['value' => 'Swelling and redness of the scrotum'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Painless testicular lump in tumor cases'],
            ['value' => 'Lower abdominal or groin discomfort'],
        ],
                'causes' => [
            ['value' => 'Congenital abnormal fixation of the testicle'],
            ['value' => 'Trauma or sudden movement'],
            ['value' => 'Adolescence and rapid growth phase'],
            ['value' => 'Genetic predisposition to tumors'],
            ['value' => 'Undescended testis increasing cancer risk'],
        ],
                'risks' => [
            ['value' => 'Loss of the affected testicle in torsion'],
            ['value' => 'Infertility and hormonal problems'],
            ['value' => 'Spread of testicular cancer'],
            ['value' => 'Severe infection or tissue death'],
            ['value' => 'Psychological and reproductive concerns'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency surgical detorsion for torsion'],
            ['value' => 'Ultrasound and tumor marker evaluation'],
            ['value' => 'Surgical removal of affected testicle if needed'],
            ['value' => 'Chemotherapy or radiotherapy for malignancy'],
            ['value' => 'Long-term oncology and fertility follow-up'],
        ],
                'recovery' => 'Early surgery in torsion can save the testicle. Testicular tumors often have high cure rates when detected early.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Testicular Torsion / Tumors',
                'meta_description' => 'Testicular torsion is a surgical emergency where the spermatic cord twists and cuts off blood supply to the testicle. Testicular tumors are abnormal growths tha',
                'meta_keywords' => '',
            ]
        );
    }
}
