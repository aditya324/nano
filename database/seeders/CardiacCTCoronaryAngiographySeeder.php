<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiacCTCoronaryAngiographySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cardiac CT / Coronary Angiography')],
            [
                'title' => 'Cardiac CT / Coronary Angiography',
                'slug' => Str::slug('Cardiac CT / Coronary Angiography'),
                'introduction' => 'Cardiac CT and Coronary Angiography are advanced imaging techniques used to evaluate coronary artery disease and heart structure abnormalities. These investigations help identify arterial blockages, plaque buildup, and structural cardiac disorders. They play a major role in diagnosing and planning treatment for cardiovascular disease.',
                'what_is' => 'Cardiac CT provides high-resolution images of the heart and coronary arteries using advanced imaging technology. Coronary angiography involves injecting contrast dye into coronary arteries through catheterization to directly visualize blood flow and blockages. These procedures help evaluate: Coronary artery disease Heart attack risk Congenital heart abnormalities Coronary anatomy before intervention Stent or bypass graft status Coronary angiography is considered the gold standard for detecting coronary blockages.',
                'symptoms' => [
            ['value' => 'Chest pain or angina'],
            ['value' => 'Breathlessness'],
            ['value' => 'Abnormal stress test findings'],
            ['value' => 'Suspected coronary artery disease'],
            ['value' => 'Heart attack symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Contrast-related allergic reactions'],
            ['value' => 'Kidney function changes from contrast dye'],
            ['value' => 'Bleeding at catheter insertion site'],
            ['value' => 'Radiation exposure'],
            ['value' => 'Rare vascular or cardiac complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Drink adequate fluids after contrast procedures'],
            ['value' => 'Monitor catheter insertion site for bleeding'],
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Attend follow-up review for treatment planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Contrast-related allergic reactions'],
            ['value' => 'Kidney function changes from contrast dye'],
            ['value' => 'Bleeding at catheter insertion site'],
            ['value' => 'Radiation exposure'],
            ['value' => 'Rare vascular or cardiac complications'],
        ],
                'long_term_outlook' => 'Advanced cardiac imaging enables accurate diagnosis, early intervention, improved treatment planning, and better long-term cardiovascular outcomes.',
                'conclusion' => '',
                'seo_title' => 'Cardiac CT / Coronary Angiography',
                'seo_description' => 'Cardiac CT and Coronary Angiography are advanced imaging techniques used to evaluate coronary artery disease and heart structure abnormalities. These investigations help identify arterial blockages, plaque buildup, and structural cardiac disorders. They play a major role in diagnosing and planning treatment for cardiovascular disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
