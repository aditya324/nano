<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogFaqsSeeder extends Seeder
{
    public function run(): void
    {
        $faqsBySlug = $this->faqsBySlug();

        foreach ($faqsBySlug as $slug => $faqs) {
            $blog = Blog::where('slug', $slug)->first();

            if (! $blog) {
                $this->command?->warn("Blog not found: {$slug}");

                continue;
            }

            $blog->update(['faqs' => $faqs]);
            $this->command?->info("Updated FAQs: {$slug}");
        }
    }

    /**
     * @return array<string, array<int, array{question: string, answer: string}>>
     */
    private function faqsBySlug(): array
    {
        return [
            'complete-knee-replacement-in-bangalore-what-to-expect-before-during-and-after-surgery' => [
                [
                    'question' => 'How long does knee replacement surgery take?',
                    'answer' => 'Total knee replacement surgery typically takes 1 to 2 hours. You will spend additional time in the recovery room before being moved to your hospital room for monitoring and physiotherapy.',
                ],
                [
                    'question' => 'When can I walk after knee replacement surgery?',
                    'answer' => 'Most patients begin walking with support within 24 hours of surgery. Early mobilisation is encouraged to improve circulation, reduce stiffness, and support faster recovery.',
                ],
                [
                    'question' => 'How long is the recovery period after knee replacement?',
                    'answer' => 'Many patients return to light daily activities within 4 to 6 weeks. Full recovery and return to more active routines may take 3 to 6 months, depending on age, overall health, and adherence to physiotherapy.',
                ],
                [
                    'question' => 'Is knee replacement surgery painful?',
                    'answer' => 'Pain is managed effectively with modern anaesthesia and medication protocols. Some discomfort during recovery is normal, but it is usually far less than the chronic knee pain patients experienced before surgery.',
                ],
                [
                    'question' => 'How long does a knee implant last?',
                    'answer' => 'Modern knee implants are designed to last 15 to 20 years or longer in many patients. Longevity depends on activity level, weight, and overall joint health.',
                ],
            ],
            'bph-after-50-early-signs-men-should-never-ignore-how-holep-surgery-helps' => [
                [
                    'question' => 'What is BPH and is it the same as prostate cancer?',
                    'answer' => 'Benign Prostatic Hyperplasia (BPH) is a non-cancerous enlargement of the prostate gland. It is not prostate cancer, though symptoms can overlap. A urologist can evaluate your condition with examination and tests.',
                ],
                [
                    'question' => 'At what age does BPH usually start?',
                    'answer' => 'BPH becomes more common after age 50. The likelihood increases with age, and many men experience urinary symptoms as the prostate gradually enlarges over time.',
                ],
                [
                    'question' => 'What is HOLEP surgery?',
                    'answer' => 'HOLEP (Holmium Laser Enucleation of the Prostate) is a minimally invasive laser procedure that removes excess prostate tissue blocking urine flow. It is effective for moderate to very large prostates with a lower risk of complications compared to traditional surgery.',
                ],
                [
                    'question' => 'How soon will I notice improvement after HOLEP?',
                    'answer' => 'Many patients notice improved urine flow within days to weeks after HOLEP. Full recovery varies, but most men return to normal activities within 2 to 4 weeks with proper follow-up care.',
                ],
                [
                    'question' => 'Can BPH be treated without surgery?',
                    'answer' => 'Yes. Mild BPH may be managed with lifestyle changes and medications. Surgery such as HOLEP is considered when symptoms significantly affect quality of life or when other treatments are not effective.',
                ],
            ],
            'all-you-need-to-know-about-stages-signs-treatment-for-chronic-kidney-disease-ckd' => [
                [
                    'question' => 'What are the early signs of chronic kidney disease?',
                    'answer' => 'Early CKD often has no obvious symptoms. As it progresses, signs may include fatigue, swelling in the legs, changes in urination, persistent itching, nausea, and high blood pressure.',
                ],
                [
                    'question' => 'Can chronic kidney disease be reversed?',
                    'answer' => 'CKD cannot usually be fully reversed once significant damage has occurred. However, early diagnosis and treatment can slow progression and help preserve remaining kidney function for many years.',
                ],
                [
                    'question' => 'What causes chronic kidney disease?',
                    'answer' => 'The most common causes are diabetes and high blood pressure. Other causes include glomerulonephritis, polycystic kidney disease, recurrent kidney infections, and long-term use of certain medications.',
                ],
                [
                    'question' => 'When is dialysis needed for CKD?',
                    'answer' => 'Dialysis is typically needed when kidney function falls to a critically low level and the kidneys can no longer adequately remove waste and excess fluid from the blood. Your nephrologist will determine the right timing based on lab results and symptoms.',
                ],
                [
                    'question' => 'How can I slow the progression of CKD?',
                    'answer' => 'Managing blood pressure and blood sugar, following a kidney-friendly diet, staying hydrated as advised, avoiding smoking, limiting NSAID painkillers, and attending regular nephrology follow-ups all help slow CKD progression.',
                ],
            ],
            'silent-killer-early-urinary-symptoms-you-should-never-ignore' => [
                [
                    'question' => 'When should I see a doctor for urinary symptoms?',
                    'answer' => 'See a urologist if you notice blood in urine, persistent pain while urinating, frequent urination that does not improve, difficulty emptying the bladder, or any urinary change lasting more than a few days.',
                ],
                [
                    'question' => 'Is blood in urine always serious?',
                    'answer' => 'Blood in urine should never be ignored, even if it appears only once or is painless. It can indicate infections, stones, or more serious conditions that require prompt medical evaluation.',
                ],
                [
                    'question' => 'Can urinary symptoms be caused by an infection?',
                    'answer' => 'Yes. Urinary tract infections are a common cause of burning, urgency, and frequent urination. However, if symptoms persist after treatment or recur frequently, further urological evaluation is recommended.',
                ],
                [
                    'question' => 'Are urinary problems a normal part of aging?',
                    'answer' => 'While some changes become more common with age, persistent or worsening urinary symptoms are not simply "normal aging." They often indicate a treatable underlying condition that should be evaluated.',
                ],
                [
                    'question' => 'What tests are used to evaluate urinary symptoms?',
                    'answer' => 'Evaluation may include urine analysis, blood tests, ultrasound imaging, cystoscopy, and other specialised tests depending on your symptoms and medical history.',
                ],
            ],
            '8-early-diabetes-symptoms-in-young-adults' => [
                [
                    'question' => 'What are the most common early signs of diabetes in young adults?',
                    'answer' => 'Common early signs include frequent urination, increased thirst, unusual fatigue, blurred vision, slow wound healing, unexplained weight loss, and darkened skin patches on the neck or underarms.',
                ],
                [
                    'question' => 'Can young and fit people get diabetes?',
                    'answer' => 'Yes. Type 2 diabetes can develop in young adults even at a normal weight, especially with sedentary habits, poor sleep, chronic stress, and a family history of diabetes.',
                ],
                [
                    'question' => 'What is prediabetes?',
                    'answer' => 'Prediabetes is a stage where blood sugar levels are higher than normal but not yet in the diabetic range. It can last for years without clear symptoms and is an important window for prevention.',
                ],
                [
                    'question' => 'Which tests confirm diabetes?',
                    'answer' => 'Doctors typically use fasting blood sugar, HbA1c, and sometimes an oral glucose tolerance test to diagnose diabetes or prediabetes.',
                ],
                [
                    'question' => 'Can early diabetes be prevented?',
                    'answer' => 'In many cases, yes. Regular physical activity, a balanced diet low in refined carbohydrates, adequate sleep, stress management, and maintaining a healthy weight can significantly reduce the risk of progression to diabetes.',
                ],
            ],
        ];
    }
}
