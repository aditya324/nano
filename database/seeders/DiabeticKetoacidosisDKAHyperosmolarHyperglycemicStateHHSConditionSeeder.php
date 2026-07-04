<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticKetoacidosisDKAHyperosmolarHyperglycemicStateHHSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS)')],
            [
                'name' => 'Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS)',
                'slug' => Str::slug('Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS)'),
                'h1' => 'Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) are serious and potentially life-threatening diabetic emergencies caused by extremely high blood sugar levels and severe metabolic imbalance. DKA commonly occurs in Type 1 diabetes and is characterized by ketone buildup and blood acidity, while HHS is more common in Type 2 diabetes and involves severe dehydration and extremely elevated blood glucose without significant ketone production. Both conditions require urgent medical treatment and intensive monitoring to prevent severe complications.',
                'about_more' => '',
                'overview' => 'Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) are serious and potentially life-threatening diabetic emergencies caused by extremely high blood sugar levels and severe metabolic imbalance. DKA commonly occurs in Type 1 diabetes and is characterized by ketone buildup and blood acidity, while HHS is more common in Type 2 diabetes and involves severe dehydration and extremely elevated blood glucose without significant ketone production. Both conditions require urgent medical treatment and intensive monitoring to prevent severe complications.',
                'symptoms' => [
            ['value' => 'Excessive thirst and frequent urination'],
            ['value' => 'Severe dehydration and extreme weakness'],
            ['value' => 'Nausea, vomiting, or abdominal pain'],
            ['value' => 'Rapid breathing, confusion, or altered consciousness'],
            ['value' => 'Fruity-smelling breath in DKA or severe drowsiness in HHS'],
        ],
                'causes' => [
            ['value' => 'Missed insulin doses or poorly controlled diabetes'],
            ['value' => 'Severe infections or systemic illness'],
            ['value' => 'Physical or emotional stress increasing blood sugar levels'],
            ['value' => 'Heart attack, stroke, or other major medical emergencies'],
            ['value' => 'Certain medications, dehydration, or undiagnosed diabetes'],
        ],
                'risks' => [
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Diabetic coma or loss of consciousness'],
            ['value' => 'Kidney dysfunction or circulatory collapse'],
            ['value' => 'Brain swelling or neurological complications in severe cases'],
            ['value' => 'Increased risk of life-threatening organ failure if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for DKA and HHS focuses on correcting high blood sugar levels, restoring fluid balance, replacing electrolytes, and treating the underlying cause. Management may include intravenous fluids, insulin therapy, electrolyte replacement, blood glucose monitoring, oxygen support, infection management, and intensive care monitoring. Patients may also require cardiac monitoring, nutritional support, diabetes education, and long-term endocrinology follow-up to improve blood sugar control and prevent future diabetic emergencies. Early recognition and prompt medical intervention are essential to improve recovery and reduce complications.'],
        ],
                'recovery' => 'The long-term outlook following DKA or HHS depends on the severity of metabolic imbalance, speed of treatment, underlying health conditions, and long-term diabetes management. Early emergency care, proper insulin therapy, regular blood sugar monitoring, healthy nutrition, hydration, medication adherence, diabetes education, and continuous medical follow-up significantly help prevent recurrence, reduce complications, maintain metabolic stability, and improve overall quality of life. ____________________ 5. Hypoglycemia (Endocrine / Drug-Induced) Hypoglycemia (Endocrine / Drug-Induced)',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS)',
                'meta_description' => 'Diabetic Ketoacidosis (DKA) and Hyperosmolar Hyperglycemic State (HHS) are serious and potentially life-threatening diabetic emergencies caused by extremely hig',
                'meta_keywords' => '',
            ]
        );
    }
}
