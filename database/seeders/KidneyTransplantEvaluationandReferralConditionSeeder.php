<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KidneyTransplantEvaluationandReferralConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Kidney Transplant Evaluation and Referral')],
            [
                'name' => 'Kidney Transplant Evaluation and Referral',
                'slug' => Str::slug('Kidney Transplant Evaluation and Referral'),
                'h1' => 'Kidney Transplant Evaluation and Referral',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Kidney transplant evaluation and referral is a specialized nephrology service designed to assess patients with advanced kidney failure for suitability for kidney transplantation.',
                'about_more' => 'Kidney transplantation is often considered the best long-term treatment for eligible patients with end-stage renal disease because it can improve survival and quality of life compared to long-term dialysis. The evaluation process helps ensure patient safety and transplant success.',
                'overview' => 'The transplant evaluation includes: Kidney disease assessment Blood testing Cardiac evaluation Infection screening Imaging studies Psychological assessment Donor compatibility testing Doctors assess: Overall health condition Surgical fitness Presence of infections or cancer Cardiovascular risk Ability to tolerate immunosuppressive therapy Patients receive counseling regarding: Transplant benefits and risks Lifelong follow-up requirements Medication adherence Lifestyle modifications Eligible patients are referred to specialized transplant centers for further management.',
                'symptoms' => [
            ['value' => 'End-stage kidney disease'],
            ['value' => 'Long-term dialysis dependency'],
            ['value' => 'Severe kidney dysfunction'],
            ['value' => 'Chronic fatigue'],
            ['value' => 'Reduced quality of life'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Surgical complications'],
            ['value' => 'Organ rejection'],
            ['value' => 'Infection risk'],
            ['value' => 'Medication side effects'],
            ['value' => 'Delayed transplant availability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Complete all transplant evaluation tests'],
            ['value' => 'Maintain dialysis and medications regularly'],
            ['value' => 'Follow nutritional recommendations'],
            ['value' => 'Attend transplant counseling sessions'],
            ['value' => 'Maintain close nephrology follow-up'],
        ],
                'recovery' => 'Kidney transplantation offers improved survival, better energy levels, and greater independence for many patients with kidney failure. Careful evaluation and long-term transplant care significantly improve transplant success and patient outcomes.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Kidney Transplant Evaluation and Referral',
                'meta_description' => 'Kidney transplant evaluation and referral is a specialized nephrology service designed to assess patients with advanced kidney failure for suitability for kidne',
                'meta_keywords' => '',
            ]
        );
    }
}
